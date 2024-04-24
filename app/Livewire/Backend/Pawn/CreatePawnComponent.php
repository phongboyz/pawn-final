<?php

namespace App\Livewire\Backend\Pawn;

use Livewire\Component;
use App\Models\Customer;
use App\Models\Product;

class CreatePawnComponent extends Component
{
    public $searchCus, $cusid, $cusname, $cuslname, $cusphone, $cusColor = 'secondary', $cusaddname, $cusaddlname, $cusaddphone, $cusaddaddress;

    public $searchPro, $proid, $productmuad, $productcate, $productnote, $proColor = 'secondary';

    public function render()
    {
        return view('livewire.backend.pawn.create-pawn-component');
    }

    public function searchCusData(){
        if($this->searchCus){
            $cus = Customer::whereAny(['name','lname','phone'],'LIKE','%'.$this->searchCus.'%')->first();
            if($cus){
                $this->cusid = $cus->id;
                $this->cusname = $cus->name;
                $this->cuslname = $cus->lname;
                $this->cusphone = $cus->phone;
                $this->cusColor = 'success';
                $this->dispatch('alert',type: 'success', message:'ຄົ້ນຫາສຳເລັດ!');
            }else{
                $this->dispatch('alert',type: 'warning', message:'ບໍ່ພົບເຫັນຂໍ້ມູນລູກຄ້າ, ກະລຸນາລອງໃໝ່!');
                $this->searchCus = null;
            }
        }else{
            $this->cusid = null;
            $this->cusname = null;
            $this->cuslname = null;
            $this->cusphone = null;
            $this->cusColor = 'secondary';
            $this->dispatch('alert',type: 'error', message:'ກະລຸນາປ້ອນຂໍ້ມູນການຄົ້ນຫາ!');
        }
    }

    public function addCus(){
        $this->dispatch('show-cus');
    }

    public function storeCus(){
        $this->validate([
            'cusaddname'=>'required',
            'cusaddlname'=>'required',
            'cusaddphone'=>'required',
        ],[
            'cusaddname.required'=>'ກະລຸນາປ້ອນ ຊື່ລູກຄ້າ ກ່ອນ!',
            'cusaddlname.required'=>'ກະລຸນາປ້ອນ ນາມສະກຸນ ກ່ອນ!',
            'cusaddphone.required'=>'ກະລຸນາປ້ອນ ເບີໂທ ກ່ອນ!',
        ]);

        $cus = new Customer();
        $cus->name = $this->cusaddname;
        $cus->lname = $this->cusaddlname;
        $cus->phone = $this->cusaddphone;
        $cus->address = $this->cusaddaddress;
        $cus->save();

        $this->cusid = $cus->id;
        $this->cusname = $cus->name;
        $this->cuslname = $cus->lname;
        $this->cusphone = $cus->phone;
        $this->cusColor = 'success';
        $this->dispatch('alert',type: 'success', message:'ເພີ່ມສຳເລັດ!');
        $this->dispatch('hide-cus');
    }

    public function getLastProductData()
    {
        $pro = Product::orderBy('id','desc')->first();
        if($pro){
            $this->proid = $pro->id;
            $this->productmuad = $pro->muadname->name;
            $this->productcate = $pro->catename->name;
            $this->productnote = $pro->name;
            $this->proColor = 'success';
            $this->dispatch('alert',type: 'success', message:'ດຶງຂໍ້ມູນສຳເລັດ!');
        }else{
            $this->dispatch('alert',type: 'error', message:'ບໍ່ມີຂໍ້ມູນ!');
        }
    }
}
