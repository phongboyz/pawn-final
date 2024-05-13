<?php

namespace App\Livewire\Backend\Report;

use Livewire\Component;
use App\Models\Branch;
use App\Models\Socost;
use App\Models\Pawn;
use App\Models\PawnDetail;
use App\Models\Transaction;

class ReportProductComponent extends Component
{
        public $branchs, $data = [], $crcs;
        public $branch_id, $branch_ids, $crc_id, $start, $end, $starts, $ends, $type;
        public $show = 'none';
        public $pdf;
        public $data_branch;

    public function mount(){
        $this->branchs = Branch::select('id','name')->get();
    }

    public function render()
    {
        if(!empty($this->branch_id)){
            $this->branch_ids = $this->branch_id;
            $this->data_branch = Branch::find($this->branch_id);
            $this->data = Transaction::selectRaw('cate_id')
                            ->selectRaw('count(id) as count')
                            ->selectRaw('sum(money_lak) as lak')
                            ->selectRaw('sum(money_thb) as thb')
                            ->selectRaw('sum(money_usd) as usd')
                            ->where('tran_type','pawn')
                            ->where('type','de')
                            ->whereBetween('created_date', [$this->starts,$this->ends])
                            ->where('branch_id',$this->branch_id)
                            ->groupBy('cate_id')
                            ->get();
        }else{
            $this->data = Transaction::selectRaw('cate_id')
                            ->selectRaw('count(id) as count')
                            ->selectRaw('sum(money_lak) as lak')
                            ->selectRaw('sum(money_thb) as thb')
                            ->selectRaw('sum(money_usd) as usd')
                            ->where('tran_type','pawn')
                            ->where('type','de')
                            ->whereBetween('created_date', [$this->starts,$this->ends])
                            ->groupBy('cate_id')
                            ->get();
        }
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
                $this->branch_ids = $this->branch_id;
                $this->data_branch = Branch::find($this->branch_id);
                $this->data = Transaction::selectRaw('cate_id')
                                ->selectRaw('count(id) as count')
                                ->selectRaw('sum(money_lak) as lak')
                                ->selectRaw('sum(money_thb) as thb')
                                ->selectRaw('sum(money_usd) as usd')
                                ->where('tran_type','pawn')
                                ->where('type','de')
                                ->whereBetween('created_date', [$this->starts,$this->ends])
                                ->where('branch_id',$this->branch_id)
                                ->groupBy('cate_id')
                                ->get();
            }else{
                $this->data = Transaction::selectRaw('cate_id')
                                ->selectRaw('count(id) as count')
                                ->selectRaw('sum(money_lak) as lak')
                                ->selectRaw('sum(money_thb) as thb')
                                ->selectRaw('sum(money_usd) as usd')
                                ->where('tran_type','pawn')
                                ->where('type','de')
                                ->whereBetween('created_date', [$this->starts,$this->ends])
                                ->groupBy('cate_id')
                                ->get();
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
