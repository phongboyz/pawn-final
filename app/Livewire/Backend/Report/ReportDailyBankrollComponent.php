<?php

namespace App\Livewire\Backend\Report;

use Livewire\Component;
use App\Models\Branch;
use App\Models\Socost;
use App\Models\Pawn;
use App\Models\PawnDetail;

class ReportDailyBankrollComponent extends Component
{
    public $branchs, $data = [];
    public $branch_id, $start, $end, $type;
    public $show = 'show';
    public $pdf;

    public function mount(){
        $this->branchs = Branch::select('id','name')->get();
    }

    public function render()
    {
        return view('livewire.backend.report.report-daily-bankroll-component');
    }

    public function searchData(){
        if($this->start && $this->end){
            $this->show = 'show';
            if(!empty($this->branch_id)){
                if($this->type){
                    $this->data = Socost::whereBetween('created_date', [$this->start,$this->end])->where('branch_id',$this->branch_id)->where('type',$this->type)->orderBy('id','desc')->get();
                }else{
                    $this->data = Socost::whereBetween('created_date', [$this->start,$this->end])->where('branch_id',$this->branch_id)->orderBy('id','desc')->get();
                }
            }else{
                if($this->type){
                    $this->data = Socost::whereBetween('created_date', [$this->start,$this->end])->where('type',$this->type)->orderBy('id','desc')->get();
                }else{
                    $this->data = Socost::whereBetween('created_date', [$this->start,$this->end])->orderBy('id','desc')->get();
                }
            }
        }else{
            $this->dispatch('alert',type: 'error', message:'ກະລຸນາເລືອກວັນທີ ຫາ ວັນທີກ່ອນ!');
        }
    }

    public function exportExcel()
    {
        if($this->show == 'show'){
            
        }else{
            $this->dispatch('alert',type: 'error', message:'ກະລຸນາສ້າງລາຍງານກ່ອນ!');
        }
    }
}
