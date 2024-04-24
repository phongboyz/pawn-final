<?php

namespace App\Livewire\Backend\Pawn;

use Livewire\Component;
use App\Models\Customer;
use App\Models\Product;

class CreatePawnComponent extends Component
{
    public $searchCus, $cusid, $cusname, $cuslname, $cusphone, $cusColor = 'secondary';
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

    public function searchProData()
    {
        if($this->searchPro){
            $cus = Product::whereAny(['name'],'LIKE','%'.$this->searchCus.'%')->first();
            if($cus){
                $this->cusid = $cus->id;
                $this->cusname = $cus->name;
                $this->cuslname = $cus->lname;
                $this->cusphone = $cus->phone;
                $this->cusColor = 'success';
                $this->dispatch('alert',type: 'success', message:'ຄົ້ນຫາສຳເລັດ!');
            }else{
                $this->dispatch('alert',type: 'warning', message:'ບໍ່ພົບເຫັນຂໍ້ມູນລູກຄ້າ, ກະລຸນາລອງໃໝ່!');
                $this->searchPro = null;
            }
        }else{
            $this->cusid = $cus->id;
            $this->cusname = $cus->name;
            $this->cuslname = $cus->lname;
            $this->cusphone = $cus->phone;
            $this->cusColor = 'success';
            $this->dispatch('alert',type: 'error', message:'ກະລຸນາປ້ອນຂໍ້ມູນການຄົ້ນຫາ!');
        }
    }
}
