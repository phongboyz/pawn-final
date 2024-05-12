<?php

namespace App\Livewire\App;

use Livewire\Component;
use App\Models\App;
use Livewire\WithFileUploads;

class AppComponent extends Component
{
    use WithFileUploads;
    public $users, $count;
    public $username, $password, $confirm_password, $phone, $role_id, $branch_id, $profile, $profiles;
    public $editId, $delId, $delName;
    public $search, $dataQ = 15, $dateS, $dateE;
    public $form, $ignore_add = 0;
    public $addId;
    public $branch, $role;
    public $name, $facebook, $tiktok, $detail;

    public function mount(){
        $app = App::find(1);
        $this->profiles = $app->logo;
        $this->name = $app->name;
        $this->phone = $app->phone;
        $this->facebook = $app->facebook;
        $this->tiktok = $app->tiktok;
        $this->detail = $app->detail;
    }

    public function render()
    {
        return view('livewire.app.app-component');
    }

    public function store(){

       

        if (!empty($this->profile)) {
            if ($this->profiles) {
                unlink($this->profiles);
            }
            $this->validate([
                'profile' => 'required|mimes:jpg,png,jpeg',
            ]);
            $imgName = date('ymdhis') . '.' . $this->profile->extension();
            $this->profile->storeAs('upload/app/', $imgName);
            $this->profiles = 'upload/app/'.$imgName;
        }


        App::where('id',1)->update([
                'name'=>$this->name,
                'phone'=>$this->phone,
                'facebook'=>$this->facebook,
                'tiktok'=>$this->tiktok,
                'logo'=>$this->profiles,
                'detail'=>$this->detail,
            ]);

        
        session()->flash('success', 'ອັບເດດຂໍ້ມູນສຳເລັດ');
        return redirect(route('apps'));
    }
}
