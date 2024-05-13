<?php

namespace App\Livewire\Backend\Report;

use Livewire\Component;
use App\Models\Branch;
use App\Models\Socost;
use App\Models\Pawn;
use App\Models\PawnDetail;

class ReportProductComponent extends Component
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
        return view('livewire.backend.report.report-product-component');
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
                
            }else{
                
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
