<?php

namespace App\Livewire\Backend\Cost;

use Livewire\Component;
use App\Models\Branch;
use App\Models\Socost;
use Livewire\WithFileUploads;

class SoCostComponent extends Component
{
    use WithFileUploads;
    public $data, $count, $branchs;
    public $code, $name, $type = 'normal', $total, $detail, $branch_id, $image, $images;
    public $editId, $delId, $delName;
    public $search, $dataQ = 15, $dateS, $dateE;
    public $form, $ignore_add = 0;
    public $addId;
    public $refresh_branch = 0;

    public function mount(){
        $this->branchs = Branch::select('id','name')->get();
        $this->data = Socost::whereAny(['code','name'],'LIKE','%'.$this->search.'%')->orderBy('id','desc')->limit($this->dataQ)->get();
        $this->count = Socost::whereAny(['code','name'],'LIKE','%'.$this->search.'%')->orderBy('id','desc')->limit($this->dataQ)->count();
    }

    public function render()
    {
        return view('livewire.backend.cost.so-cost-component');
    }

    public function dataQS(){
        $this->data = Socost::whereAny(['code','name'],'LIKE','%'.$this->search.'%')->orderBy('id','desc')->limit($this->dataQ)->get();
        $this->count = Socost::whereAny(['code','name'],'LIKE','%'.$this->search.'%')->orderBy('id','desc')->limit($this->dataQ)->count();
    }

    public function searchData(){
        if(!empty($this->dateS)){
            if($this->search){
                $this->data = Socost::where('created_date', $this->dateS)->whereAny(['code','name'],'LIKE','%'.$this->search.'%')->orderBy('id','desc')->limit($this->dataQ)->get();
                $this->count = Socost::where('created_date', $this->dateS)->whereAny(['code','name'],'LIKE','%'.$this->search.'%')->orderBy('id','desc')->limit($this->dataQ)->count();
            }else{
                $this->data = Socost::where('created_date', $this->dateS)->orderBy('id','desc')->limit($this->dataQ)->get();
                $this->count = Socost::where('created_date', $this->dateS)->orderBy('id','desc')->limit($this->dataQ)->count();
            }
        }else{
            $this->data = Socost::whereAny(['code','name'],'LIKE','%'.$this->search.'%')->orderBy('id','desc')->limit($this->dataQ)->get();
            $this->count = Socost::whereAny(['code','name'],'LIKE','%'.$this->search.'%')->orderBy('id','desc')->limit($this->dataQ)->count();
        }
    }

    public function store(){
        $this->validate([
            'code' => 'required',
            'name' => 'required',
            'total' => 'required',
            'branch_id' => 'required',
        ],[
            'code.required' => 'ກະລຸນາປ້ອນລະຫັດທຸລະກຳກ່ອນ',
            'name.required' => 'ກະລຸນາປ້ອນຊື່ທຸລະກຳກ່ອນ',
            'total.required' => 'ກະລຸນາປ້ອນຈຳນວນເງິນກ່ອນ',
            'branch_id.required' => 'ກະລຸນາເລືອກສາຂາກ່ອນ',
        ]);
            $moneys = str_replace(',', '', $this->total);
            if (intval($moneys)) {
                if($this->editId){
                    Socost::where('id',$this->editId)->update([
                        'code'=>$this->code,
                        'name'=>$this->name,
                        'type'=>$this->type,
                        'total'=>$moneys,
                        'detail'=>$this->detail,
                        'user_id'=>auth()->user()->id,
                        'branch_id'=>$this->branch_id,
                        'created_date'=>date('Y-m-d'),
                    ]);
                    session()->flash('success', 'ອັບເດດຂໍ້ມູນສຳເລັດ');
                }else{
                    Socost::insert([
                        'code'=>$this->code,
                        'name'=>$this->name,
                        'type'=>$this->type,
                        'total'=>$moneys,
                        'detail'=>$this->detail,
                        'user_id'=>auth()->user()->id,
                        'branch_id'=>$this->branch_id,
                        'created_date'=>date('Y-m-d'),
                    ]);
                    session()->flash('success', 'ບັນທຶກຂໍ້ມູນສຳເລັດ');
                }
                return redirect(route('so-cost'));
            }else{
                $this->dispatch('alert',type: 'error', message:'ກະລຸນາປ້ອນຈຳນວນເງິນເປັນຕົວເລກ!');
            }
    }

    public function edit($ids){
        $this->editId = $ids;
        $data = Socost::find($ids);
        $this->code = $data->code;
        $this->name = $data->name;
        $this->type = $data->type;
        $this->total = number_format($data->total,2,'.',',');
        $this->detail = $data->detail;
        $this->branch_id = $data->branch_id;
        $this->refresh_branch++;
        $this->dispatch('refresh_b');
    }

    public function delete($ids){
        $this->delId = $ids;
        $data = Socost::find($ids);
        $this->delName = $data->code.' - '.$data->name.' : '.number_format($data->total,2,',','.');
        $this->dispatch('show-del');
    }

    public function destroy()
    {
        Socost::where('id',$this->delId)->delete();
        session()->flash('success', 'ລົບຂໍ້ມູນສຳເລັດ');
        return redirect(route('so-cost'));
    }
}
