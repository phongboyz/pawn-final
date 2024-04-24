<?php

namespace App\Livewire\Backend\Address;

use Livewire\Component;
use App\Models\District;
use App\Models\Province;

class DistrictComponent extends Component
{
    public $data, $count, $provinces;
    public $pro_id, $name, $tel, $address, $location, $sig1, $sig2, $sig3, $sig4, $logo, $logos;
    public $editId, $delId, $delName;
    public $search, $dataQ = 15, $dateS, $dateE;
    public $form, $ignore_add = 0;
    public $addId;
    public $refresh_pro = 0;

    public function render()
    {
        $this->data = District::whereAny(['name'],'LIKE','%'.$this->search.'%')->orderBy('pro_id','asc')->limit($this->dataQ)->get();
        $this->count = District::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
        $this->provinces = Province::select('id','name')->get();
        return view('livewire.backend.address.district-component');
    }

    public function dataQS(){
        $this->data = District::whereAny(['name'],'LIKE','%'.$this->search.'%')->orderBy('pro_id','asc')->limit($this->dataQ)->get();
        $this->count = District::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
    }

    public function searchData(){
        $this->data = District::whereAny(['name'],'LIKE','%'.$this->search.'%')->orderBy('pro_id','asc')->limit($this->dataQ)->get();
        $this->count = District::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
    }

    public function resetField(){
        $this->editId = null;
        $this->delId = null;
        $this->name = null;
        $this->pro_id = null;
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
            'pro_id'=>'required',
            'name'=>'required',
        ],[
            'pro_id.required'=>'ກະລຸນາເລືອກ ແຂວງ ກ່ອນ!',
            'name.required'=>'ກະລຸນາປ້ອນ ຊື່ເມືອງ ກ່ອນ!',
        ]);
        
        $this->refresh_pro++;
        $this->dispatch('refresh_p');

        if($this->editId){
            District::where('id',$this->editId)->update([
                'pro_id'=>$this->pro_id,
                'name'=>$this->name,
            ]);
            session()->flash('success', 'ອັບເດດຂໍ້ມູນສຳເລັດ');
        }else{
            District::insert([
                'pro_id'=>$this->pro_id,
                'name'=>$this->name,
            ]);
            session()->flash('success', 'ບັນທຶກຂໍ້ມູນສຳເລັດ');
        }
        
        return redirect(route('district'));
    }

    public function edit($ids){
        $this->form = 'show';
        $this->editId = $ids;
        $data = District::find($ids);
        $this->name = $data->name;
        $this->pro_id = $data->pro_id;

        $this->refresh_pro++;
        $this->dispatch('refresh_p');
    }

    public function delete($ids){
        $this->delId = $ids;
        $data = District::find($ids);
        $this->delName = 'ແຂວງ: '.$data->proname->name.', ເມືອງ: '.$data->name;
        $this->dispatch('show-del');
    }

    public function destroy()
    {
        District::where('id',$this->delId)->delete();
        session()->flash('success', 'ລົບຂໍ້ມູນສຳເລັດ');
        return redirect(route('district'));
    }
}
