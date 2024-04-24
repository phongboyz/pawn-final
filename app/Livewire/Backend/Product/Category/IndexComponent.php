<?php

namespace App\Livewire\Backend\Product\Category;

use Livewire\Component;
use App\Models\Category;

class IndexComponent extends Component
{
    public $data, $count;
    public $code, $name, $unit_name, $tel, $address, $location, $sig1, $sig2, $sig3, $sig4, $logo, $logos;
    public $editId, $delId, $delName;
    public $search, $dataQ = 15, $dateS, $dateE;
    public $form, $ignore_add = 0;
    public $addId;

    public function render()
    {
        $this->data = Category::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
        $this->count = Category::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
        return view('livewire.backend.product.category.index-component');
    }

    public function dataQS(){
        $this->data = Category::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
        $this->count = Category::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
    }

    public function searchData(){
        $this->data = Category::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
        $this->count = Category::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
    }

    public function resetField(){
        $this->editId = null;
        $this->delId = null;
        $this->name = null;
        $this->unit_name = null;
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
            'unit_name'=>'required',
        ],[
            'name.required'=>'ກະລຸນາປ້ອນ ໝວດຫຼັກຊັບ ກ່ອນ!',
            'unit_name.required'=>'ກະລຸນາປ້ອນ ປະເພດຫຼັກຊັບ ກ່ອນ!',
        ]);

        if($this->editId){
            Category::where('id',$this->editId)->update([
                'name'=>$this->name,
                'unit_name'=>$this->unit_name,
            ]);
            session()->flash('success', 'ອັບເດດຂໍ້ມູນສຳເລັດ');
        }else{
            Category::insert([
                'name'=>$this->name,
                'unit_name'=>$this->unit_name,
            ]);
            session()->flash('success', 'ບັນທຶກຂໍ້ມູນສຳເລັດ');
        }
        
        return redirect(route('category'));
    }

    public function edit($ids){
        $this->form = 'show';
        $this->editId = $ids;
        $data = Category::find($ids);
        $this->name = $data->name;
        $this->unit_name = $data->unit_name;
    }

    public function delete($ids){
        $this->delId = $ids;
        $data = Category::find($ids);
        $this->delName = $data->name;
        $this->dispatch('show-del');
    }

    public function destroy()
    {
        Category::where('id',$this->delId)->delete();
        session()->flash('success', 'ລົບຂໍ້ມູນສຳເລັດ');
        return redirect(route('category'));
    }
}
