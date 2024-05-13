<?php

namespace App\Livewire\Backend\Report;

use Livewire\Component;
use App\Models\Branch;
use App\Models\Socost;
use App\Models\Pawn;
use App\Models\PawnDetail;
use App\Models\Currency;

class ReportFinancailComponent extends Component
{
    public $branchs, $data = [], $crcs;
    public $branch_id, $crc_id, $start, $end, $starts, $ends, $type;
    public $show = 'none';
    public $pdf;
    public $data_cost, $data_pawn_normal, $data_pawn_ex1,  $data_pawn_ex2, $data_pawn_ex3, $data_pawn_ex4, $data_pawn_ex5, $data_int_pay, $data_int_ex, $data_fees;

    public function mount(){
        $this->branchs = Branch::select('id','name')->get();
        $this->crcs = Currency::select('id','name')->get();
    }

    public function render()
    {
        return view('livewire.backend.report.report-financail-component');
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
                    $this->data_cost = Socost::whereBetween('created_date', [$this->start,$this->end])->where('crc_id',$this->crc_id)->where('branch_id',$this->branch_id)->sum('total');
                    $this->data_pawn_normal = Pawn::whereBetween('created_date', [$this->start,$this->end])->where('crc_id',$this->crc_id)->where('branch_id',$this->branch_id)->whereIn('status',['t','f'])->sum('money');

                    $this->data_pawn_ex1 = Pawn::whereBetween('created_date', [$this->start,$this->end])->where('crc_id',$this->crc_id)->whereBetween('count_expire_date',[1,30])->where('branch_id',$this->branch_id)->where('status','x')->sum('money');
                    $this->data_pawn_ex2 = Pawn::whereBetween('created_date', [$this->start,$this->end])->where('crc_id',$this->crc_id)->whereBetween('count_expire_date',[31,60])->where('branch_id',$this->branch_id)->where('status','x')->sum('money');
                    $this->data_pawn_ex2 = Pawn::whereBetween('created_date', [$this->start,$this->end])->where('crc_id',$this->crc_id)->whereBetween('count_expire_date',[61,90])->where('branch_id',$this->branch_id)->where('status','x')->sum('money');
                    $this->data_pawn_ex2 = Pawn::whereBetween('created_date', [$this->start,$this->end])->where('crc_id',$this->crc_id)->whereBetween('count_expire_date',[91,180])->where('branch_id',$this->branch_id)->where('status','x')->sum('money');
                    $this->data_pawn_ex2 = Pawn::whereBetween('created_date', [$this->start,$this->end])->where('crc_id',$this->crc_id)->where('count_expire_date','>',180)->where('branch_id',$this->branch_id)->where('status','x')->sum('money');

                    $this->data_int_pay = Pawn::whereBetween('created_date', [$this->start,$this->end])->where('crc_id',$this->crc_id)->where('branch_id',$this->branch_id)->whereNotIn('status',['p','r'])->sum('interest');
                    $this->data_int_ex = Pawn::whereBetween('created_date', [$this->start,$this->end])->where('crc_id',$this->crc_id)->where('branch_id',$this->branch_id)->whereNotIn('status',['p','r'])->sum('adj_money');
                    $this->data_fees = Pawn::whereBetween('created_date', [$this->start,$this->end])->where('crc_id',$this->crc_id)->where('branch_id',$this->branch_id)->whereNotIn('status',['p','r'])->sum('fees_money');
            }else{
                    $this->data_cost = Socost::whereBetween('created_date', [$this->start,$this->end])->where('crc_id',$this->crc_id)->sum('total');
                    $this->data_pawn_normal = Pawn::whereBetween('created_date', [$this->start,$this->end])->where('crc_id',$this->crc_id)->whereIn('status',['t','f'])->sum('money');

                    $this->data_pawn_ex1 = Pawn::whereBetween('created_date', [$this->start,$this->end])->where('crc_id',$this->crc_id)->whereBetween('count_expire_date',[1,30])->where('status','x')->sum('money');
                    $this->data_pawn_ex2 = Pawn::whereBetween('created_date', [$this->start,$this->end])->where('crc_id',$this->crc_id)->whereBetween('count_expire_date',[31,60])->where('status','x')->sum('money');
                    $this->data_pawn_ex3 = Pawn::whereBetween('created_date', [$this->start,$this->end])->where('crc_id',$this->crc_id)->whereBetween('count_expire_date',[61,90])->where('status','x')->sum('money');
                    $this->data_pawn_ex4 = Pawn::whereBetween('created_date', [$this->start,$this->end])->where('crc_id',$this->crc_id)->whereBetween('count_expire_date',[91,180])->where('status','x')->sum('money');
                    $this->data_pawn_ex5 = Pawn::whereBetween('created_date', [$this->start,$this->end])->where('crc_id',$this->crc_id)->where('count_expire_date','>',180)->where('status','x')->sum('money');

                    $this->data_int_pay = Pawn::whereBetween('created_date', [$this->start,$this->end])->where('crc_id',$this->crc_id)->whereNotIn('status',['p','r'])->sum('interest');
                    $this->data_int_ex = Pawn::whereBetween('created_date', [$this->start,$this->end])->where('crc_id',$this->crc_id)->whereNotIn('status',['p','r'])->sum('adj_money');
                    $this->data_fees = Pawn::whereBetween('created_date', [$this->start,$this->end])->where('crc_id',$this->crc_id)->whereNotIn('status',['p','r'])->sum('fees_money');
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
