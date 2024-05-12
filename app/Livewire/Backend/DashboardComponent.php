<?php

namespace App\Livewire\Backend;

use Livewire\Component;
use App\Models\Pawn;
use App\Models\PawnDetail;

class DashboardComponent extends Component
{
    public $count_pawn_tran = 0, $count_pawn_finish = 0;
    public $pawn_one, $pawn_two, $pawn_three, $pawn_four;
    public $pawn_data_pay;

    public function mount(){
        if(auth()->user()->rolename->name == 'admin'){
            $this->pawn_one = Pawn::whereIn('status',['p','t','x','f'])->count('id');
            $this->pawn_two = Pawn::whereIn('status',['t','x'])->count('id');
            $this->pawn_three = Pawn::where('status','x')->count('id');
            $this->pawn_four = Pawn::where('status','f')->count('id');

            $this->pawn_data_pay = PawnDetail::where('status','x')->get();
        }else{
            $this->pawn_one = Pawn::whereIn('status',['p','t','x','f'])->where('branch_id', auth()->user()->brnach_id)->count('id');
            $this->pawn_two = Pawn::whereIn('status',['t','x'])->where('branch_id', auth()->user()->brnach_id)->count('id');
            $this->pawn_three = Pawn::where('status','x')->where('branch_id', auth()->user()->brnach_id)->count('id');
            $this->pawn_four = Pawn::where('status','f')->where('branch_id', auth()->user()->brnach_id)->count('id');

            $this->pawn_data_pay = PawnDetail::where('status','x')->where('branch_id', auth()->user()->brnach_id)->get();
        }
    }

    public function render()
    {
        return view('livewire.backend.dashboard-component');
    }
}
