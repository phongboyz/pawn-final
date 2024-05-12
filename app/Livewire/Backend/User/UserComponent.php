<?php

namespace App\Livewire\Backend\User;

use Livewire\Component;
use App\Models\User;
use App\Models\Role;
use App\Models\Branch;
use App\Exports\UsersExport;
use Livewire\WithFileUploads;

class UserComponent extends Component
{
    use WithFileUploads;
    public $users, $count;
    public $username, $password, $confirm_password, $phone, $role_id, $branch_id, $profile, $profiles;
    public $editId, $delId, $delName;
    public $search, $dataQ = 15, $dateS, $dateE;
    public $form, $ignore_add = 0;
    public $addId;
    public $roles, $branchs;

    public function mount(){
        if(auth()->user()->rolename->name != 'admin'){
            return redirect('dashboard');
        }
    }

    public function render()
    {
        $this->roles = Role::select('id','name')->get();
        $this->branchs = Branch::select('id','name')->get();
        $this->users = User::whereAny(['username','phone','branch_id'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
        $this->count = User::whereAny(['username','phone','branch_id'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();

        return view('livewire.backend.user.user-component');
    }

    public function dataQS(){
        $this->users = User::whereAny(['username','phone','branch_id'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
        $this->count = User::whereAny(['username','phone','branch_id'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
    }

    public function searchData(){
        if(!empty($this->dateS)){
            if($this->search){
                $this->users = User::whereDate('created_at', $this->dateS)->whereAny(['username','phone','branch_id'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
                $this->count = User::whereDate('created_at', $this->dateS)->whereAny(['username','phone','branch_id'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
            }else{
                // dd($this->dateS);
                $this->users = User::where('created_at', $this->dateS)->limit($this->dataQ)->get();
                $this->count = User::where('created_at', $this->dateS)->limit($this->dataQ)->count();
            }
        }else{
            $this->users = User::whereAny(['username','phone','branch_id'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
            $this->count = User::whereAny(['username','phone','branch_id'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
        }
    }

    public function resetField(){
        $this->editId = null;
        $this->delId = null;
        $this->username = null;
        $this->password = null;
        $this->confirm_password = null;
        $this->phone = null;
        $this->role_id = null;
        $this->branch_id = null;
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
            'username'=>'required',
        ],[
            'username.required'=>'ກະລຸນາປ້ອນ ຊື່ເຂົ້າໃຊ້ງານລະບົບ ກ່ອນ!',
        ]);

        if (!empty($this->profile)) {
            if ($this->profiles) {
                unlink($this->profiles);
            }
            $this->validate([
                'profile' => 'required|mimes:jpg,png,jpeg',
            ]);
            $imgName = date('ymdhis') . '.' . $this->profile->extension();
            $this->profile->storeAs('upload/users/', $imgName);
            $this->profiles = 'upload/users/'.$imgName;
        }

        if($this->editId){
            if($this->password){
                $this->validate([
                    'password'=>'required|min:6|required_with:confirm_password|same:confirm_password',
                    'confirm_password'=>'required|min:6|required_with:password|same:password',
                ],[
                    'password.required'=>'ກະລຸນາປ້ອນ ລະຫັດຜ່ານ ກ່ອນ!',
                    'password.min'=>'ກະລຸນາປ້ອນລະຫັດຜ່ານ 6 ຕົວຂຶ້ນໄປ',
                    'password.same'=>'ລະຫັດຜ່ານ ແລະ ຢືນຢັນລະຫັດຜ່ານບໍ່ຕົງກັນ',
                    'confirm_password.required'=>'ກະລຸນາປ້ອນ ຢືນຢັນລະຫັດຜ່ານ ກ່ອນ!',
                    'confirm_password.min'=>'ກະລຸນາປ້ອນຢືນຢັນລະຫັດຜ່ານ 6 ຕົວຂຶ້ນໄປ',
                    'confirm_password.same'=>'ລະຫັດຜ່ານ ແລະ ຢືນຢັນລະຫັດຜ່ານບໍ່ຕົງກັນ',
                ]);
            }
            User::where('id',$this->editId)->update([
                'username'=>$this->username,
                'password'=>bcrypt($this->password),
                'phone'=>$this->phone,
                'role_id'=>$this->role_id,
                'branch_id'=>$this->branch_id,
                'profile'=>$this->profiles
            ]);
            session()->flash('success', 'ອັບເດດຂໍ້ມູນສຳເລັດ');
        }else{
            $this->validate([
                'password'=>'required|min:6|required_with:confirm_password|same:confirm_password',
                'confirm_password'=>'required|min:6|required_with:password|same:password',
            ],[
                'password.required'=>'ກະລຸນາປ້ອນ ລະຫັດຜ່ານ ກ່ອນ!',
                'password.min'=>'ກະລຸນາປ້ອນລະຫັດຜ່ານ 6 ຕົວຂຶ້ນໄປ',
                'password.same'=>'ລະຫັດຜ່ານ ແລະ ຢືນຢັນລະຫັດຜ່ານບໍ່ຕົງກັນ',
                'confirm_password.required'=>'ກະລຸນາປ້ອນ ຢືນຢັນລະຫັດຜ່ານ ກ່ອນ!',
                'confirm_password.min'=>'ກະລຸນາປ້ອນຢືນຢັນລະຫັດຜ່ານ 6 ຕົວຂຶ້ນໄປ',
                'confirm_password.same'=>'ລະຫັດຜ່ານ ແລະ ຢືນຢັນລະຫັດຜ່ານບໍ່ຕົງກັນ',
            ]);
            User::insert([
                'username'=>$this->username,
                'password'=>bcrypt($this->password),
                'phone'=>$this->phone,
                'role_id'=>$this->role_id,
                'branch_id'=>$this->branch_id,
                'profile'=>$this->profiles
            ]);
            session()->flash('success', 'ບັນທຶກຂໍ້ມູນສຳເລັດ');
        }
        
        return redirect(route('user'));
    }

    public function edit($ids){
        $this->form = 'show';
        $this->editId = $ids;
        $data = User::find($ids);
        $this->username = $data->username;
        $this->phone = $data->phone;
        $this->role_id = $data->role_id;
        $this->branch_id = $data->branch_id;
        $this->profiles = $data->profile;
    }

    public function delete($ids){
        $this->delId = $ids;
        $data = User::find($ids);
        $this->delName = $data->username;

        $this->dispatch('show-del');
    }

    public function destroy()
    {
        User::where('id',$this->delId)->delete();
        session()->flash('success', 'ລົບຂໍ້ມູນສຳເລັດ');
        return redirect(route('user'));
    }

    public function exportExcel()
    {
        return (new UsersExport($this->users))->download('excel-users.xlsx');
    }

}
