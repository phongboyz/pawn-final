<?php

namespace App\Livewire\Backend\Report;

use Livewire\Component;
use App\Models\Branch;
use App\Models\Socost;
use App\Models\Pawn;
use App\Models\PawnDetail;
use App\Models\Customer;
use App\Exports\ReportCustomer;

class ReportCustomerComponent extends Component
{
    public $branchs, $data = [], $crcs;
    public $branch_id, $branch_ids, $crc_id, $start, $end, $starts, $ends, $type;
    public $show = 'none';
    public $pdf;
    public $data_pawn, $data_branch, $data_cus = [], $data_cus_lak = [], $data_cus_thb = [];

    public function mount(){
        $this->branchs = Branch::select('id','name')->get();
    }

    public function render()
    {
        if(!empty($this->branch_id)){
            $this->branch_ids = $this->branch_id;
            $this->data_branch = Branch::find($this->branch_id);
            $this->data = Pawn::selectRaw('cus_id')
                            ->selectRaw('count(cus_id) as count')
                            ->selectRaw('sum(money) as money')
                            ->selectRaw('sum(balance) as balance')
                            ->whereBetween('created_date', [$this->starts,$this->ends])
                            ->whereNotIn('status',['p','r'])
                            ->where('branch_id',$this->branch_id)
                            ->groupBy('cus_id')
                            ->get();
            $this->data_cus_lak = Pawn::selectRaw('cus_id')
                            ->selectRaw('count(cus_id) as count')
                            ->selectRaw('sum(money) as money')
                            ->selectRaw('sum(balance) as balance')
                            ->where('crc_id',2)
                            ->whereBetween('created_date', [$this->starts,$this->ends])
                            ->whereNotIn('status',['p','r'])
                            ->where('branch_id',$this->branch_id)
                            ->groupBy('cus_id')
                            ->get();
            $this->data_cus_thb = Pawn::selectRaw('cus_id')
                            ->selectRaw('count(cus_id) as count')
                            ->selectRaw('sum(money) as money')
                            ->selectRaw('sum(balance) as balance')
                            ->where('crc_id',1)
                            ->whereBetween('created_date', [$this->starts,$this->ends])
                            ->whereNotIn('status',['p','r'])
                            ->where('branch_id',$this->branch_id)
                            ->groupBy('cus_id')
                            ->get();
        }else{
            $this->data = Pawn::selectRaw('cus_id')
                                ->selectRaw('count(cus_id) as count')
                                ->selectRaw('sum(money) as money')
                                ->selectRaw('sum(balance) as balance')
                                ->whereBetween('created_date', [$this->starts,$this->ends])
                                ->whereNotIn('status',['p','r'])
                                ->groupBy('cus_id')
                                ->get();
            $this->data_cus_lak = Pawn::selectRaw('cus_id')
                                ->selectRaw('count(cus_id) as count')
                                ->selectRaw('sum(money) as money')
                                ->selectRaw('sum(balance) as balance')
                                ->where('crc_id',2)
                                ->whereBetween('created_date', [$this->starts,$this->ends])
                                ->whereNotIn('status',['p','r'])
                                ->groupBy('cus_id')
                                ->get();
            $this->data_cus_thb = Pawn::selectRaw('cus_id')
                                ->selectRaw('count(cus_id) as count')
                                ->selectRaw('sum(money) as money')
                                ->selectRaw('sum(balance) as balance')
                                ->where('crc_id',1)
                                ->whereBetween('created_date', [$this->starts,$this->ends])
                                ->whereNotIn('status',['p','r'])
                                ->groupBy('cus_id')
                                ->get();
        }
        return view('livewire.backend.report.report-customer-component');
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
                $this->data = Pawn::selectRaw('cus_id')
                                ->selectRaw('count(cus_id) as count')
                                ->selectRaw('sum(money) as money')
                                ->selectRaw('sum(balance) as balance')
                                ->whereBetween('created_date', [$this->starts,$this->ends])
                                ->whereNotIn('status',['p','r'])
                                ->where('branch_id',$this->branch_id)
                                ->groupBy('cus_id')
                                ->get();
                $this->data_cus_lak = Pawn::selectRaw('cus_id')
                                ->selectRaw('count(cus_id) as count')
                                ->selectRaw('sum(money) as money')
                                ->selectRaw('sum(balance) as balance')
                                ->where('crc_id',2)
                                ->whereBetween('created_date', [$this->starts,$this->ends])
                                ->whereNotIn('status',['p','r'])
                                ->where('branch_id',$this->branch_id)
                                ->groupBy('cus_id')
                                ->get();
                $this->data_cus_thb = Pawn::selectRaw('cus_id')
                                ->selectRaw('count(cus_id) as count')
                                ->selectRaw('sum(money) as money')
                                ->selectRaw('sum(balance) as balance')
                                ->where('crc_id',1)
                                ->whereBetween('created_date', [$this->starts,$this->ends])
                                ->whereNotIn('status',['p','r'])
                                ->where('branch_id',$this->branch_id)
                                ->groupBy('cus_id')
                                ->get();
            }else{
                $this->data = Pawn::selectRaw('cus_id')
                                    ->selectRaw('count(cus_id) as count')
                                    ->selectRaw('sum(money) as money')
                                    ->selectRaw('sum(balance) as balance')
                                    ->whereBetween('created_date', [$this->starts,$this->ends])
                                    ->whereNotIn('status',['p','r'])
                                    ->groupBy('cus_id')
                                    ->get();
                $this->data_cus_lak = Pawn::selectRaw('cus_id')
                                    ->selectRaw('count(cus_id) as count')
                                    ->selectRaw('sum(money) as money')
                                    ->selectRaw('sum(balance) as balance')
                                    ->where('crc_id',2)
                                    ->whereBetween('created_date', [$this->starts,$this->ends])
                                    ->whereNotIn('status',['p','r'])
                                    ->groupBy('cus_id')
                                    ->get();
                $this->data_cus_thb = Pawn::selectRaw('cus_id')
                                    ->selectRaw('count(cus_id) as count')
                                    ->selectRaw('sum(money) as money')
                                    ->selectRaw('sum(balance) as balance')
                                    ->where('crc_id',1)
                                    ->whereBetween('created_date', [$this->starts,$this->ends])
                                    ->whereNotIn('status',['p','r'])
                                    ->groupBy('cus_id')
                                    ->get();
            }
    }

    public function exportExcel()
    {
        if($this->show == 'show'){
            return (new ReportAllPawn($this->data))->download('excel-report-allpawns.xlsx');
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
