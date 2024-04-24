<?php

namespace App\Livewire\Backend\Address;

use Livewire\Component;
use App\Models\Village;
use App\Models\District;
use App\Models\Province;

class VillageComponent extends Component
{
    public $data, $count, $provinces;
    public $pro_id, $dis_id, $name, $tel, $address, $location, $sig1, $sig2, $sig3, $sig4, $logo, $logos;
    public $editId, $delId, $delName;
    public $search, $dataQ = 15, $dateS, $dateE;
    public $form, $ignore_add = 0;
    public $addId;
    public $refresh_pro = 0, $refresh_dis = 0;

    public function render()
    {
        $this->data = Village::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
        $this->count = Village::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
        $this->provinces = Province::select('id','name')->get();

        if($this->pro_id){
            // dd($this->pro_id);
            $districts = District::select('id','pro_id','name')->where('pro_id',$this->pro_id)->get();
            $this->refresh_dis++;
            $this->dispatch('refresh_d');
        }else{
            $districts = District::select('id','pro_id','name')->where('pro_id',null)->get();
            $this->refresh_dis++;
            $this->dispatch('refresh_d');
        }
        return view('livewire.backend.address.village-component', compact('districts'));
    }

    public function dataQS(){
        $this->data = Village::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
        $this->count = Village::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
    }

    public function searchData(){
        $this->data = Village::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
        $this->count = Village::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
    }

    public function resetField(){
        $this->editId = null;
        $this->delId = null;
        $this->name = null;
        $this->dis_id = null;
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
            'dis_id'=>'required',
            'name'=>'required',
        ],[
            'pro_id.required'=>'ກະລຸນາເລືອກ ແຂວງ ກ່ອນ!',
            'dis_id.required'=>'ກະລຸນາເລືອກ ເມືອງ ກ່ອນ!',
            'name.required'=>'ກະລຸນາປ້ອນ ຊື່ເມືອງ ກ່ອນ!',
        ]);

        if($this->editId){
            Village::where('id',$this->editId)->update([
                'pro_id'=>$this->pro_id,
                'dis_id'=>$this->dis_id,
                'name'=>$this->name,
            ]);
            session()->flash('success', 'ອັບເດດຂໍ້ມູນສຳເລັດ');
        }else{
            Village::insert([
                'pro_id'=>$this->pro_id,
                'dis_id'=>$this->dis_id,
                'name'=>$this->name,
            ]);
            session()->flash('success', 'ບັນທຶກຂໍ້ມູນສຳເລັດ');
        }
        
        return redirect(route('village'));
    }

    public function edit($ids){
        $this->form = 'show';
        $this->editId = $ids;
        $data = Village::find($ids);
        $this->name = $data->name;
        $this->dis_id = $data->dis_id;
        $this->pro_id = $data->pro_id;
        $this->districts = District::select('id','pro_id','name')->where('id',$this->dis_id)->get();
        $this->refresh_pro++;
        $this->dispatch('refresh_p');
    }

    public function delete($ids){
        $this->delId = $ids;
        $data = Village::find($ids);
        $this->delName = 'ແຂວງ: '.$data->proname->name.', ເມືອງ: '.$data->disname->name.', ບ້ານ: '.$data->name;
        $this->dispatch('show-del');
    }

    public function destroy()
    {
        Village::where('id',$this->delId)->delete();
        session()->flash('success', 'ລົບຂໍ້ມູນສຳເລັດ');
        return redirect(route('village'));
    }
}
