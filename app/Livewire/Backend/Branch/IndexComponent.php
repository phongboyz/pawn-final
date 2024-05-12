<?php

namespace App\Livewire\Backend\Branch;

use Livewire\Component;
use App\Models\Branch;
use Livewire\WithFileUploads;

class IndexComponent extends Component
{
    use WithFileUploads;
    public $data, $count;
    public $code, $name, $tel, $address, $location, $sig1, $sig2, $sig3, $sig4, $logo, $logos;
    public $editId, $delId, $delName;
    public $search, $dataQ = 15, $dateS, $dateE;
    public $form, $ignore_add = 0;
    public $addId;

    public function mount(){
        if(auth()->user()->rolename->name != 'admin'){
            return redirect('dashboard');
        }
    }

    public function render()
    {
        $this->data = Branch::whereAny(['code','name','tel'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
        $this->count = Branch::whereAny(['code','name','tel'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();

        return view('livewire.backend.branch.index-component');
    }

    public function dataQS(){
        $this->data = Branch::whereAny(['code','name','tel'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
        $this->count = Branch::whereAny(['code','name','tel'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
    }

    public function searchData(){
        if(!empty($this->dateS)){
            if($this->search){
                $this->users = Branch::whereDate('created_at', $this->dateS)->whereAny(['code','name','tel'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
                $this->count = Branch::whereDate('created_at', $this->dateS)->whereAny(['code','name','tel'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
            }else{
                // dd($this->dateS);
                $this->users = Branch::where('created_at', $this->dateS)->limit($this->dataQ)->get();
                $this->count = Branch::where('created_at', $this->dateS)->limit($this->dataQ)->count();
            }
        }else{
            $this->data = Branch::whereAny(['code','name','tel'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
            $this->count = Branch::whereAny(['code','name','tel'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
        }
    }

    public function resetField(){
        $this->editId = null;
        $this->delId = null;
        $this->code = null;
        $this->name = null;
        $this->tel = null;
        $this->address = null;
        $this->location = null;
        $this->sig1 = null;
        $this->sig2 = null;
        $this->sig3 = null;
        $this->sig4 = null;
        $this->profile = null;
        $this->profiles = null;
    }

    public function add(){
        $this->addId = 'add';
    }

    public function uploads(){
        $this->form = 'show';
    }

    public function hideAdd(){
        $this->addId = null;
    }

    public function hide(){
        if ($this->form == 'show'){ $this->form = 'hide'; }else{ $this->form = 'show'; }
        $this->resetField();
    }

    public function store() 
    {
        $this->validate([
            'code'=>'required',
            'name'=>'required',
            'tel'=>'required',
            'logo'=>'required',
        ],[
            'code.required'=>'ກະລຸນາປ້ອນ ລະຫັດສາຂາ ກ່ອນ!',
            'name.required'=>'ກະລຸນາປ້ອນ ຊື່ສາຂາ ກ່ອນ!',
            'tel.required'=>'ກະລຸນາປ້ອນ ເບີໂທຕິດຕໍ່ ກ່ອນ!',
            'logo.required'=>'ກະລຸນາອັບໂຫຼດ ຮູບພາຍໂລໂກ້ ກ່ອນ!',
        ]);

        if (!empty($this->logo)) {
            if ($this->logos) {
                unlink($this->logos);
            }
            $this->validate([
                'logo' => 'required|mimes:jpg,png,jpeg',
            ]);
            $imgName = date('ymdhis') . '.' . $this->logo->extension();
            $this->logo->storeAs('upload/branchs/', $imgName);
            $this->logos = 'upload/branchs/'.$imgName;
        }

        if($this->editId){
            Branch::where('id',$this->editId)->update([
                'code'=>$this->code,
                'name'=>$this->name,
                'tel'=>$this->tel,
                'address'=>$this->address,
                'location'=>$this->location,
                'sig1'=>$this->sig1,
                'sig2'=>$this->sig2,
                'sig3'=>$this->sig3,
                'sig4'=>$this->sig4,
                'logo'=>$this->logos,
            ]);
            session()->flash('success', 'ອັບເດດຂໍ້ມູນສຳເລັດ');
        }else{
            Branch::insert([
                'code'=>$this->code,
                'name'=>$this->name,
                'tel'=>$this->tel,
                'address'=>$this->address,
                'location'=>$this->location,
                'sig1'=>$this->sig1,
                'sig2'=>$this->sig2,
                'sig3'=>$this->sig3,
                'sig4'=>$this->sig4,
                'logo'=>$this->logos,
            ]);
            session()->flash('success', 'ບັນທຶກຂໍ້ມູນສຳເລັດ');
        }
        
        return redirect(route('branch'));
    }

    public function edit($ids){
        $this->form = 'show';
        $this->editId = $ids;
        $data = Branch::find($ids);
        $this->code = $data->code;
        $this->name = $data->name;
        $this->tel = $data->tel;
        $this->address = $data->address;
        $this->location = $data->location;
        $this->sig1 = $data->sig1;
        $this->sig2 = $data->sig2;
        $this->sig3 = $data->sig3;
        $this->sig4 = $data->sig4;
        $this->logos = $data->logo;
    }

    public function delete($ids){
        $this->delId = $ids;
        $data = Branch::find($ids);
        $this->delName = $data->code.'-'.$data->name;
        $this->dispatch('show-del');
    }

    public function destroy()
    {
        Branch::where('id',$this->delId)->delete();
        session()->flash('success', 'ລົບຂໍ້ມູນສຳເລັດ');
        return redirect(route('branch'));
    }
}
