<?php

namespace App\Livewire\Backend\Customer;

use Livewire\Component;
use App\Models\Customer;
use App\Models\Village;
use App\Models\District;
use App\Models\Province;
use Livewire\WithFileUploads;
use App\Exports\CustomerExport;

class IndexComponent extends Component
{
    use WithFileUploads;
    public $data, $count;
    public $gender = 'm', $name, $lname, $phone, $address, $pro_id, $dis_id, $vil_id, $note, $logo, $logos;
    public $editId, $delId, $delName;
    public $search, $dataQ = 15, $dateS, $dateE;
    public $form, $ignore_add = 0;
    public $addId;
    public $provinces, $districts, $villages;
    public $refresh_pro = 0, $refresh_dis = 0, $refresh_vil = 0;

    public function render()
    {
        $this->provinces = Province::select('id','name')->get();
        if($this->pro_id){
            $this->districts = District::select('id','pro_id','name')->where('pro_id',$this->pro_id)->get();
            $this->refresh_dis++;
            $this->dispatch('refresh_d');
        }

        if($this->dis_id){
            $this->villages = Village::select('id','pro_id','dis_id','name')->where('dis_id',$this->dis_id)->get();
            $this->refresh_vil++;
            $this->dispatch('refresh_v');
        }

        $this->data = Customer::whereAny(['name','lname','phone'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
        $this->count = Customer::whereAny(['name','lname','phone'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
        return view('livewire.backend.customer.index-component');
    }

    public function dataQS(){
        $this->data = Customer::whereAny(['name','lname','phone'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
        $this->count = Customer::whereAny(['name','lname','phone'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
    }

    public function searchData(){
        if(!empty($this->dateS)){
            if($this->search){
                $this->data = Customer::whereDate('created_at', $this->dateS)->whereAny(['name','lname','phone'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
                $this->count = Customer::whereDate('created_at', $this->dateS)->whereAny(['name','lname','phone'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
            }else{
                // dd($this->dateS);
                $this->data = Customer::where('created_at', $this->dateS)->limit($this->dataQ)->get();
                $this->count = Customer::where('created_at', $this->dateS)->limit($this->dataQ)->count();
            }
        }else{
            $this->data = Customer::whereAny(['name','lname','phone'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
            $this->count = Customer::whereAny(['name','lname','phone'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
        }
    }

    public function uploads(){
        $this->form = 'show';
    }

    public function selected(){
        $this->form = 'show';
    }

    public function resetField(){
        $this->editId = null;
        $this->delId = null;
        $this->gender = null;
        $this->name = null;
        $this->lname = null;
        $this->phone = null;
        $this->pro_id = null;
        $this->dis_id = null;
        $this->vil_id = null;
        $this->note = null;
        $this->logo = null;
        $this->logos = null;
    }

    public function store(){
        $this->validate([
            'name'=>'required',
            // 'lname'=>'required',
            'phone'=>'required',
            'pro_id'=>'required',
            'dis_id'=>'required',
            'vil_id'=>'required',
        ],[
            'name.required'=>'ກະລຸນາປ້ອນ ຊື່ລູກຄ້າ ກ່ອນ!',
            // 'lname.required'=>'ກະລຸນາປ້ອນ ນາມສະກຸນລູກຄ້າ ກ່ອນ!',
            'phone.required'=>'ກະລຸນາປ້ອນ ເບີໂທລູກຄ້າ ກ່ອນ!',
            'pro_id.required'=>'ກະລຸນາເລືອກ ແຂວງ ກ່ອນ!',
            'dis_id.required'=>'ກະລຸນາເລືອກ ເມືອງ ກ່ອນ!',
            'vil_id.required'=>'ກະລຸນາເລືອກ ບ້ານ ກ່ອນ!',
        ]);

        if (!empty($this->logo)) {
            if ($this->logos) {
                unlink($this->logos);
            }
            $this->validate([
                'logo' => 'required|mimes:jpg,png,jpeg',
            ]);
            $imgName = date('ymdhis') . '.' . $this->logo->extension();
            $this->logo->storeAs('upload/customers/', $imgName);
            $this->logos = 'upload/customers/'.$imgName;
        }

        if($this->editId){
            $pro = Province::find($this->pro_id);
            $dis = District::find($this->dis_id);
            $vil = Village::find($this->vil_id);
            Customer::where('id',$this->editId)->update([
                'gender'=>$this->gender,
                'name'=>$this->name,
                'lname'=>$this->lname,
                'phone'=>$this->phone,
                'address'=>$vil->name.', '.$dis->name.', '.$pro->name,
                'pro_name'=>$this->pro_id,
                'dis_name'=>$this->dis_id,
                'vill_id'=>$this->vil_id,
                'image'=>$this->logos,
                'detail'=>$this->note
            ]);
            session()->flash('success', 'ອັບເດດຂໍ້ມູນສຳເລັດ');
        }else{
            $pro = Province::find($this->pro_id);
            $dis = District::find($this->dis_id);
            $vil = Village::find($this->vil_id);
            Customer::insert([
                'gender'=>$this->gender,
                'name'=>$this->name,
                'lname'=>$this->lname,
                'phone'=>$this->phone,
                'address'=>$vil->name.', '.$dis->name.', '.$pro->name,
                'pro_name'=>$this->pro_id,
                'dis_name'=>$this->dis_id,
                'vill_id'=>$this->vil_id,
                'image'=>$this->logos,
                'detail'=>$this->note
            ]);
            session()->flash('success', 'ບັນທຶກຂໍ້ມູນສຳເລັດ');
        }
        return redirect(route('customer'));
    }

    public function edit($ids){
        $this->form = 'show';
        $this->editId = $ids;
        $data = Customer::find($ids);
        $this->gender = $data->gender;
        $this->name = $data->name;
        $this->lname = $data->lname;
        $this->phone = $data->phone;
        $this->pro_id = $data->pro_name;
        $this->dis_id = $data->dis_name;
        $this->vil_id = $data->vill_id;
        $this->note = $data->detail;
        $this->logos = $data->image;

        // dd($this->pro_id);
        $this->refresh_pro++;
        $this->refresh_dis++;
        $this->refresh_vil++;
        $this->dispatch('refresh_p');
        $this->dispatch('refresh_d');
        $this->dispatch('refresh_v');
    }

    public function delete($ids){
        $this->delId = $ids;
        $data = Customer::find($ids);
        $this->delName = $data->name.' '.$data->lname;

        $this->dispatch('show-del');
    }

    public function destroy()
    {
        Customer::where('id',$this->delId)->delete();
        session()->flash('success', 'ລົບຂໍ້ມູນສຳເລັດ');
        return redirect(route('customer'));
    }

    public function exportExcel()
    {
        return (new CustomerExport($this->data))->download('excel-customers.xlsx');
    }
}
