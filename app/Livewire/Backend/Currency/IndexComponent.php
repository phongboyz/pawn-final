<?php

namespace App\Livewire\Backend\Currency;

use Livewire\Component;
use App\Models\Currency;

class IndexComponent extends Component
{
    public $data, $count;
    public $code, $name, $rate, $tel, $address, $location, $sig1, $sig2, $sig3, $sig4, $logo, $logos;
    public $editId, $delId, $delName;
    public $search, $dataQ = 15, $dateS, $dateE;
    public $form, $ignore_add = 0;
    public $addId;

    public function render()
    {
        $this->data = Currency::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
        $this->count = Currency::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
        return view('livewire.backend.currency.index-component');
    }

    public function dataQS(){
        $this->data = Currency::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
        $this->count = Currency::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
    }

    public function searchData(){
        $this->data = Currency::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
        $this->count = Currency::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
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
            'rate'=>'required',
        ],[
            'name.required'=>'ກະລຸນາປ້ອນ ສະກຸນເງິນກ່ອນ ກ່ອນ!',
            'rate.required'=>'ກະລຸນາປ້ອນ ອັດຕາແລກປ່ຽນ ກ່ອນ!',
        ]);

        if($this->editId){
            Currency::where('id',$this->editId)->update([
                'name'=>$this->name,
                'rate'=>$this->rate,
            ]);
            session()->flash('success', 'ອັບເດດຂໍ້ມູນສຳເລັດ');
        }else{
            Currency::insert([
                'valuedt'=>date('Y-m-d'),
                'name'=>$this->name,
                'rate'=>$this->rate,
            ]);
            session()->flash('success', 'ບັນທຶກຂໍ້ມູນສຳເລັດ');
        }
        
        return redirect(route('currency'));
    }

    public function edit($ids){
        $this->form = 'show';
        $this->editId = $ids;
        $data = Currency::find($ids);
        $this->name = $data->name;
        $this->rate = $data->rate;
    }

    public function delete($ids){
        $this->delId = $ids;
        $data = Currency::find($ids);
        $this->delName = $data->name;
        $this->dispatch('show-del');
    }

    public function destroy()
    {
        Currency::where('id',$this->delId)->delete();
        session()->flash('success', 'ລົບຂໍ້ມູນສຳເລັດ');
        return redirect(route('currency'));
    }
}
