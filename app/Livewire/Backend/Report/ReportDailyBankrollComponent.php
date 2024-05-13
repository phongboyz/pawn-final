<?php

namespace App\Livewire\Backend\Report;

use Livewire\Component;
use App\Models\Branch;
use App\Models\Socost;
use App\Models\Pawn;
use App\Models\PawnDetail;
use App\Models\Currency;

class ReportDailyBankrollComponent extends Component
{
    public $branchs, $data = [], $crcs;
    public $branch_id, $crc_id, $start, $end, $starts, $ends, $type;
    public $show = 'show';
    public $pdf;
    public $data_pawn;

    public function mount(){
        $this->branchs = Branch::select('id','name')->get();
        $this->crcs = Currency::select('id','name')->get();
    }

    public function render()
    {
        return view('livewire.backend.report.report-daily-bankroll-component');
    }

    public function searchData(){
        $this->validate([
            'crc_id'=>'required',
            'start'=>'required',
            'end'=>'required',
        ],[
            'crc_id.required'=>'ກະລຸນາເລືອກ ສະກຸນເງິນ ກ່ອນ!',
            'start.required'=>'ກະລຸນາເລືອກ ວັນທີເລີ່ມຕົ້ນ ກ່ອນ!',
            'end.required'=>'ກະລຸນາປເລືອກ ວັນທີສິ້ນສຸດ ກ່ອນ!',
        ]);

            $this->show = 'show';
            $this->starts = $this->start;$this->ends = $this->end;
            if(!empty($this->branch_id)){
                    $this->data = Socost::whereBetween('created_date', [$this->start,$this->end])->where('branch_id',$this->branch_id)->orderBy('id','desc')->get();
            }else{
                    $this->data = Socost::whereBetween('created_date', [$this->start,$this->end])->orderBy('id','desc')->get();
                    $this->data_pawn = Pawn::whereBetween('created_date', [$this->start,$this->end])->where('crc_id',$this->crc_id)->whereIn('status',['t','f'])->sum('money');
            }
    }

    public function exportExcel()
    {
        if($this->show == 'show'){
            
        }else{
            $this->dispatch('alert',type: 'error', message:'ກະລຸນາສ້າງລາຍງານກ່ອນ!');
        }
    }

    public function print(){
        if($this->show == 'show'){
            $this->dispatch('refresh_print');
        }else{
            $this->dispatch('alert',type: 'error', message:'ກະລຸນາສ້າງລາຍງານກ່ອນ!');
        }
    }
}
