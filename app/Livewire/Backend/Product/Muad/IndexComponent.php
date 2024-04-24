<?php

namespace App\Livewire\Backend\Product\Muad;

use Livewire\Component;
use App\Models\Muad;

class IndexComponent extends Component
{
    public $data, $count;
    public $code, $name, $tel, $address, $location, $sig1, $sig2, $sig3, $sig4, $logo, $logos;
    public $editId, $delId, $delName;
    public $search, $dataQ = 15, $dateS, $dateE;
    public $form, $ignore_add = 0;
    public $addId;

    public function render()
    {
        $this->data = Muad::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
        $this->count = Muad::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
        return view('livewire.backend.product.muad.index-component');
    }

    public function dataQS(){
        $this->data = Muad::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
        $this->count = Muad::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
    }

    public function searchData(){
        $this->data = Muad::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
        $this->count = Muad::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
    }

    public function resetField(){
        $this->editId = null;
        $this->delId = null;
        $this->name = null;
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
            'name'=>'required',
        ],[
            'name.required'=>'ກະລຸນາປ້ອນ ໝວດຫຼັກຊັບ ກ່ອນ!',
        ]);

        if($this->editId){
            Muad::where('id',$this->editId)->update([
                'name'=>$this->name,
            ]);
            session()->flash('success', 'ອັບເດດຂໍ້ມູນສຳເລັດ');
        }else{
            Muad::insert([
                'name'=>$this->name,
            ]);
            session()->flash('success', 'ບັນທຶກຂໍ້ມູນສຳເລັດ');
        }
        
        return redirect(route('muad'));
    }

    public function edit($ids){
        $this->form = 'show';
        $this->editId = $ids;
        $data = Muad::find($ids);
        $this->name = $data->name;
    }

    public function delete($ids){
        $this->delId = $ids;
        $data = Muad::find($ids);
        $this->delName = $data->name;
        $this->dispatch('show-del');
    }

    public function destroy()
    {
        Muad::where('id',$this->delId)->delete();
        session()->flash('success', 'ລົບຂໍ້ມູນສຳເລັດ');
        return redirect(route('muad'));
    }
}
