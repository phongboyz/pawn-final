<?php

namespace App\Livewire\Backend\Report;

use Livewire\Component;
use App\Models\Branch;
use App\Models\Socost;
use App\Models\Pawn;
use App\Models\PawnDetail;
use App\Models\Currency;

class ReportAllPawnComponent extends Component
{
    public $branchs, $data = [], $crcs;
    public $branch_id, $branch_ids, $crc_id, $start, $end, $starts, $ends, $type;
    public $show = 'none';
    public $pdf;
    public $data_pawn, $data_branch;

    public function mount(){
        $this->branchs = Branch::select('id','name')->get();
        $this->crcs = Currency::select('id','name')->get();
    }

    public function render()
    {
        return view('livewire.backend.report.report-all-pawn-component');
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
                $this->data = Pawn::whereBetween('created_date', [$this->start,$this->end])->where('branch_id', $this->branch_id)->get();
            }else{
                $this->branch_ids = null;
                $this->data = Pawn::whereBetween('created_date', [$this->start,$this->end])->get();
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
