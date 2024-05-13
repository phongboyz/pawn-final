<?php

namespace App\Livewire\Backend\Pawn\Pay;

use Livewire\Component;
use App\Models\Pawn;
use App\Models\PawnDetail;
use App\Models\Transaction;

class PayComponent extends Component
{
    public $pawnid, $pawn, $detail, $detailf, $detailc;
    public $money, $int, $fees, $adj, $discount, $discounts, $sum, $detailid, $allid;

    public function mount($id){
        $this->pawnid = $id;
        $this->pawn = Pawn::find($id);
        $this->detail = PawnDetail::where('pawn_id', $id)->get();
        $this->detailf = PawnDetail::where('pawn_id', $id)->whereIn('status',['t','x'])->get();
        $this->detailc = PawnDetail::where('pawn_id', $id)->whereIn('status',['t','x'])->first();
    }

    public function render()
    {
        return view('livewire.backend.pawn.pay.pay-component');
    }

    public function payNguad(){
        $data = PawnDetail::where('pawn_id', $this->pawnid)->whereIn('status',['t','x'])->first();
        $this->allid = null;
        $this->detailid = $data->id;
        $this->money = $data->apm_money;
        $this->int = $data->apm_int;
        $this->fees = $data->apm_fees;
        $this->adj = $data->int_adj;
        $this->sum = $data->apm_money + $data->apm_int + $data->apm_fees + $data->int_adj;
        $this->dispatch('show-payNguad');
    }

    public function cal(){
        if(!empty($this->discount)){
            $moneys = str_replace(',', '', $this->discount);
            if (intval($moneys)) {

                if($this->detailid){
                    $data = PawnDetail::find($this->detailid);
                    $this->sum = ($data->apm_money + $data->apm_int + $data->apm_fees + $data->int_adj) - $moneys;
                    $this->discounts = $moneys;
                }else{
                    $data = PawnDetail::find($this->allid);
                    $pawn = Pawn::find($this->pawnid);
                    $this->sum = ($pawn->balance + $pawn->balance_int + $data->apm_fees + $data->int_adj) - $moneys;
                    $this->discounts = $moneys;
                }

            }else{
                $this->dispatch('alert',type: 'error', message:'ກະລຸນາປ້ອນຈຳນວນເງິນເປັນຕົວເລກ!');
            }
        }else{
            $this->dispatch('alert',type: 'error', message:'ກະລຸນາປ້ອນສ່ວນຫຼຸດກ່ອນຄຳນວນ!');
        }
    }

    public function storePayNguad(){
        $data = PawnDetail::find($this->detailid);
        $data->pay_date = date('Y-m-d');
        $data->pay = $this->money;
        $data->int = $this->int;
        $data->fees = $this->fees;
        if($this->discount)$data->discount = $this->discounts;
        $data->total = $this->sum;
        $data->status = 'f';
        $data->user_id = auth()->user()->id;
        $data->save();

        $pawn = Pawn::find($this->pawnid);
        $pawn->balance -= $this->money;
        $pawn->balance_int -= $this->int;
        $pawn->pay_money += $this->money;
        $pawn->pay_int += $this->int;
        $pawn->adj_money += $this->adj;
        $pawn->fees_money += $this->fees;
        $pawn->discount += $this->discounts;
        $pawn->save();

            $tran = new Transaction(); 
            $tran->created_date = date('Y-m-d');
            $tran->tran_type = 'pawn';
            $tran->type = 'cr';
            $tran->code = $pawn->code;
            $tran->cus_id = $pawn->cus_id;
            $tran->cate_id = $pawn->proname->cate_id;
            $tran->product_id = $pawn->product_id;
            $tran->crc_id = $pawn->crc_id;
            if($pawn->crc_id == 1){
                $tran->money_thb = $this->money;
            }elseif($pawn->crc_id == 2){
                $tran->money_lak = $this->money;
            }else{
                $tran->money_usd = $this->money;
            }
            $tran->detail = 'ເງິນຄ່າງວດຊຳລະ';
            $tran->user_id = auth()->user()->id;
            $tran->branch_id = auth()->user()->branch_id;
            $tran->save();

            if($this->int){
                $tran = new Transaction(); 
                $tran->created_date = date('Y-m-d');
                $tran->tran_type = 'pawn';
                $tran->type = 'cr';
                $tran->code = $pawn->code;
                $tran->cus_id = $pawn->cus_id;
                $tran->cate_id = $pawn->proname->cate_id;
                $tran->product_id = $pawn->product_id;
                $tran->crc_id = $pawn->crc_id;
                if($pawn->crc_id == 1){
                    $tran->money_thb = $this->int;
                }elseif($pawn->crc_id == 2){
                    $tran->money_lak = $this->int;
                }else{
                    $tran->money_usd = $this->int;
                }
                $tran->detail = 'ດອກເບ້ຍຄ່າງວດຊຳລະ';
                $tran->user_id = auth()->user()->id;
                $tran->branch_id = auth()->user()->branch_id;
                $tran->save();
            }

            if($this->adj){
                $tran = new Transaction(); 
                $tran->created_date = date('Y-m-d');
                $tran->tran_type = 'pawn';
                $tran->type = 'cr';
                $tran->code = $pawn->code;
                $tran->cus_id = $pawn->cus_id;
                $tran->cate_id = $pawn->proname->cate_id;
                $tran->product_id = $pawn->product_id;
                $tran->crc_id = $pawn->crc_id;
                if($pawn->crc_id == 1){
                    $tran->money_thb = $this->adj;
                }elseif($pawn->crc_id == 2){
                    $tran->money_lak = $this->adj;
                }else{
                    $tran->money_usd = $this->adj;
                }
                $tran->detail = 'ດອກເບ້ຍປັບໄໝຄ່າງວດຊຳລະ';
                $tran->user_id = auth()->user()->id;
                $tran->branch_id = auth()->user()->branch_id;
                $tran->save();
            }

            if($this->fees){
                $tran = new Transaction(); 
                $tran->created_date = date('Y-m-d');
                $tran->tran_type = 'pawn';
                $tran->type = 'cr';
                $tran->code = $pawn->code;
                $tran->cus_id = $pawn->cus_id;
                $tran->cate_id = $pawn->proname->cate_id;
                $tran->product_id = $pawn->product_id;
                $tran->crc_id = $pawn->crc_id;
                if($pawn->crc_id == 1){
                    $tran->money_thb = $this->fees;
                }elseif($pawn->crc_id == 2){
                    $tran->money_lak = $this->fees;
                }else{
                    $tran->money_usd = $this->fees;
                }
                $tran->detail = 'ຄ່າທຳນຽມງວດຊຳລະ';
                $tran->user_id = auth()->user()->id;
                $tran->branch_id = auth()->user()->branch_id;
                $tran->save();
            }

        $check = Pawn::find($this->pawnid);
        if($check->balance == 0){
            $check->status = 'f';
            $check->save();
        } 

        session()->flash('success', 'ຊຳລະສຳເລັດ');
        return redirect(route('pay-pawn', $this->pawnid));
    }

    public function payAll(){
        $data = PawnDetail::where('pawn_id', $this->pawnid)->whereIn('status',['t','x'])->first();
        $pawn = Pawn::find($this->pawnid);
        $this->detailid = null;
        $this->allid = $data->id;
        $this->money = $pawn->balance;
        $this->int = $pawn->balance_int;
        $this->fees = $data->apm_fees;
        $this->adj = $data->int_adj;
        $this->sum = $pawn->balance + $pawn->balance_int + $data->apm_fees + $data->int_adj;
        $this->dispatch('show-payNguad');
    }

    public function storePayAll(){
        $data = PawnDetail::find($this->allid);
        $data->pay_date = date('Y-m-d');
        $data->pay = $this->money;
        $data->int = $this->int;
        $data->fees = $this->fees;
        if($this->discount)$data->discount = $this->discounts;
        $data->total = $this->sum;
        $data->status = 'f';
        $data->user_id = auth()->user()->id;
        $data->save();

        $pawn = Pawn::find($this->pawnid);
        $pawn->balance -= $this->money;
        $pawn->balance_int -= $this->int;
        $pawn->pay_money += $this->money;
        $pawn->pay_int += $this->int;
        $pawn->adj_money += $this->adj;
        $pawn->fees_money += $this->fees;
        $pawn->discount += $this->discounts;
        $pawn->save();

        $tran = new Transaction(); 
            $tran->created_date = date('Y-m-d');
            $tran->tran_type = 'pawn';
            $tran->type = 'cr';
            $tran->code = $pawn->code;
            $tran->cus_id = $pawn->cus_id;
            $tran->cate_id = $pawn->proname->cate_id;
            $tran->product_id = $pawn->product_id;
            $tran->crc_id = $pawn->crc_id;
            if($pawn->crc_id == 1){
                $tran->money_thb = $this->money;
            }elseif($pawn->crc_id == 2){
                $tran->money_lak = $this->money;
            }else{
                $tran->money_usd = $this->money;
            }
            $tran->detail = 'ເງິນຄ່າງວດຊຳລະ';
            $tran->user_id = auth()->user()->id;
            $tran->branch_id = auth()->user()->branch_id;
            $tran->save();

            if($this->int){
                $tran = new Transaction(); 
                $tran->created_date = date('Y-m-d');
                $tran->tran_type = 'pawn';
                $tran->type = 'cr';
                $tran->code = $pawn->code;
                $tran->cus_id = $pawn->cus_id;
                $tran->cate_id = $pawn->proname->cate_id;
                $tran->product_id = $pawn->product_id;
                $tran->crc_id = $pawn->crc_id;
                if($pawn->crc_id == 1){
                    $tran->money_thb = $this->int;
                }elseif($pawn->crc_id == 2){
                    $tran->money_lak = $this->int;
                }else{
                    $tran->money_usd = $this->int;
                }
                $tran->detail = 'ດອກເບ້ຍຄ່າງວດຊຳລະ';
                $tran->user_id = auth()->user()->id;
                $tran->branch_id = auth()->user()->branch_id;
                $tran->save();
            }

            if($this->adj){
                $tran = new Transaction(); 
                $tran->created_date = date('Y-m-d');
                $tran->tran_type = 'pawn';
                $tran->type = 'cr';
                $tran->code = $pawn->code;
                $tran->cus_id = $pawn->cus_id;
                $tran->cate_id = $pawn->proname->cate_id;
                $tran->product_id = $pawn->product_id;
                $tran->crc_id = $pawn->crc_id;
                if($pawn->crc_id == 1){
                    $tran->money_thb = $this->adj;
                }elseif($pawn->crc_id == 2){
                    $tran->money_lak = $this->adj;
                }else{
                    $tran->money_usd = $this->adj;
                }
                $tran->detail = 'ດອກເບ້ຍປັບໄໝຄ່າງວດຊຳລະ';
                $tran->user_id = auth()->user()->id;
                $tran->branch_id = auth()->user()->branch_id;
                $tran->save();
            }

            if($this->fees){
                $tran = new Transaction(); 
                $tran->created_date = date('Y-m-d');
                $tran->tran_type = 'pawn';
                $tran->type = 'cr';
                $tran->code = $pawn->code;
                $tran->cus_id = $pawn->cus_id;
                $tran->cate_id = $pawn->proname->cate_id;
                $tran->product_id = $pawn->product_id;
                $tran->crc_id = $pawn->crc_id;
                if($pawn->crc_id == 1){
                    $tran->money_thb = $this->fees;
                }elseif($pawn->crc_id == 2){
                    $tran->money_lak = $this->fees;
                }else{
                    $tran->money_usd = $this->fees;
                }
                $tran->detail = 'ຄ່າທຳນຽມງວດຊຳລະ';
                $tran->user_id = auth()->user()->id;
                $tran->branch_id = auth()->user()->branch_id;
                $tran->save();
            }

        $check = Pawn::find($this->pawnid);
        if($check->balance == 0) $check->status = 'f';
        $check->save();

        session()->flash('success', 'ຊຳລະສຳເລັດ');
        return redirect(route('pawn-detail', $this->pawnid));
    }
}
