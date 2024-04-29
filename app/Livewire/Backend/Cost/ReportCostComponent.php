<?php

namespace App\Livewire\Backend\Cost;

use Livewire\Component;
use App\Models\Branch;
use App\Models\Socost;
use App\Exports\CostsExport;
use App\Http\Controllers\Cost\ReportCostController;

class ReportCostComponent extends Component
{
    public $branchs, $data = [];
    public $branch_id, $start, $end, $type;
    public $show = 'none';
    public $pdf;

    public function mount(){
        $this->branchs = Branch::select('id','name')->get();
    }

    public function render()
    {
        return view('livewire.backend.cost.report-cost-component');
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

    public function generatePDF(){
        if($this->show == 'show'){
            $con = new ReportCostController();
            return $con->generatePDF($this->data, $this->start, $this->end);
        }else{
            $this->dispatch('alert',type: 'error', message:'ກະລຸນາສ້າງລາຍງານກ່ອນ!');
        }
    }

    public function exportExcel()
    {
        if($this->show == 'show'){
            return (new CostsExport($this->data))->download('excel-costs.xlsx');
        }else{
            $this->dispatch('alert',type: 'error', message:'ກະລຸນາສ້າງລາຍງານກ່ອນ!');
        }
    }
}
