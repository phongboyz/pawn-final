<?php

namespace App\Livewire\Backend\Role;

use Livewire\Component;
use App\Models\Role;

class IndexComponent extends Component
{
    public $data, $count;
    public $editId, $delId, $delName;
    public $search, $dataQ = 15, $dateS, $dateE;
    public $form, $ignore_add = 0;
    public $addId;
    public $name, $selectedtypes = [], $select = [];

    public function mount(){
        if(auth()->user()->rolename->name != 'admin'){
            return redirect(route('dashboard'));
        }
    }

    public function render()
    {
        $this->data = Role::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
        $this->count = Role::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
        return view('livewire.backend.role.index-component');
    }

    public function dataQS(){
        $this->data = Role::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
        $this->count = Role::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
    }

    public function searchData(){
        $this->data = Role::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
        $this->count = Role::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
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
            'name.required'=>'ກະລຸນາປ້ອນ ຊື່ສິດການເຂົ້າເຖິງກ່ອນ ກ່ອນ!',
        ]);

        foreach($this->selectedtypes as $item){
            $d = array_push($this->select, $item);
        }
        $con = implode(",",$this->select);

        if($this->editId){
            Role::where('id',$this->editId)->update([
                'name'=>$this->name,
                'permission'=>$con
            ]);
            session()->flash('success', 'ອັບເດດຂໍ້ມູນສຳເລັດ');
        }else{
            Role::insert([
                'name'=>$this->name,
                'permission'=>$con
            ]);
            session()->flash('success', 'ບັນທຶກຂໍ້ມູນສຳເລັດ');
        }
        
        return redirect(route('role'));
    }

    public function edit($ids){
        $this->form = 'show';
        $this->editId = $ids;
        $data = Role::find($ids);
        $this->name = $data->name;
        $arr = explode(',',$data->permission);
        foreach($arr as $item){
            $d = array_push($this->selectedtypes, $item);
        }
    }

    public function delete($ids){
        $this->delId = $ids;
        $data = Role::find($ids);
        $this->delName = $data->name;
        $this->dispatch('show-del');
    }

    public function destroy()
    {
        Role::where('id',$this->delId)->delete();
        session()->flash('success', 'ລົບຂໍ້ມູນສຳເລັດ');
        return redirect(route('role'));
    }
}