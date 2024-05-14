<?php

namespace App\Livewire\Backend\Report;

use Livewire\Component;
use App\Models\Branch;
use App\Models\Socost;
use App\Models\Pawn;
use App\Models\PawnDetail;
use App\Models\Currency;
use App\Models\Transaction;
use App\Exports\ReportDaily;

class ReportDailyBankrollComponent extends Component
{
    public $branchs, $data = [], $crcs;
    public $branch_id, $branch_ids, $crc_id, $start, $end, $starts, $ends, $type;
    public $show = 'none';
    public $pdf;
    public $data_branch;

    public function mount(){
        $this->branchs = Branch::select('id','name')->get();
        $this->crcs = Currency::select('id','name')->get();
        $this->start = date('Y-m-d');
        $this->end = date('Y-m-d');
    }

    public function render()
    {
        return view('livewire.backend.report.report-daily-bankroll-component');
    }

    public function searchData(){
        $this->validate([
            'start'=>'required',
            'end'=>'required',
        ],[
            'start.required'=>'ກະລຸນາເລືອກ ວັນທີເລີ່ມຕົ້ນ ກ່ອນ!',
            'end.required'=>'ກະລຸນາປເລືອກ ວັນທີສິ້ນສຸດ ກ່ອນ!',
        ]);

            $this->show = 'show';
            $this->starts = $this->start;$this->ends = $this->end;
            if(!empty($this->branch_id)){
                $this->branch_ids = $this->branch_id;
                $this->data_branch = Branch::find($this->branch_id);
                $this->data = Transaction::whereBetween('created_date', [$this->starts,$this->ends])->where('branch_id',$this->branch_id)->get();
            }else{
                $this->data = Transaction::whereBetween('created_date', [$this->starts,$this->ends])->get();
            }
    }

    public function exportExcel()
    {
        if($this->show == 'show'){
            return (new ReportDaily($this->data))->download('excel-report-daily.xlsx');
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
