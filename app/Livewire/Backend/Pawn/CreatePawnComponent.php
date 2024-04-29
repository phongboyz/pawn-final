<?php

namespace App\Livewire\Backend\Pawn;

use Livewire\Component;
use App\Models\Branch;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Currency;
use App\Models\Pawn;
use App\Models\PawnCode;
use App\Models\PawnDetail;
use App\Http\Controllers\NumberToStringController;


class CreatePawnComponent extends Component
{
    public $searchCus, $cusid, $cusname, $cuslname, $cusphone, $cusColor = 'secondary', $cusaddname, $cusaddlname, $cusaddphone, $cusaddaddress;

    public $searchPro, $proid, $productmuad, $productcate, $productnote, $proColor = 'secondary';

    public $branchs, $crcs;

    public $int_type = 'constant', $crc = 1, $money, $moneyname, $days, $int, $nguad, $fees, $adj, $branchid;

    public function mount()
    {
        $this->proid = session('productId');
        $pro = Product::find($this->proid);
        if($pro){
            $this->productmuad = $pro->muadname->name;
            $this->productcate = $pro->catename->name;
            $this->productnote = $pro->name;
            $this->proColor = 'success';
        }
        $this->branchid = auth()->user()->branch_id;
    }

    public function render()
    {
        $this->branchs = Branch::select('id','name')->get();
        $this->crcs = Currency::select('id','name')->get();
        return view('livewire.backend.pawn.create-pawn-component');
    }

    public function searchCusData(){
        if($this->searchCus){
            $cus = Customer::whereAny(['name','lname','phone'],'LIKE','%'.$this->searchCus.'%')->first();
            if($cus){
                $this->cusid = $cus->id;
                $this->cusname = $cus->name;
                $this->cuslname = $cus->lname;
                $this->cusphone = $cus->phone;
                $this->cusColor = 'success';
                $this->dispatch('alert',type: 'success', message:'ຄົ້ນຫາສຳເລັດ!');
            }else{
                $this->dispatch('alert',type: 'warning', message:'ບໍ່ພົບເຫັນຂໍ້ມູນລູກຄ້າ, ກະລຸນາລອງໃໝ່!');
                $this->searchCus = null;
            }
        }else{
            $this->cusid = null;
            $this->cusname = null;
            $this->cuslname = null;
            $this->cusphone = null;
            $this->cusColor = 'secondary';
            $this->dispatch('alert',type: 'error', message:'ກະລຸນາປ້ອນຂໍ້ມູນການຄົ້ນຫາ!');
        }
    }

    public function addCus(){
        $this->dispatch('show-cus');
    }

    public function storeCus(){
        $this->validate([
            'cusaddname'=>'required',
            'cusaddlname'=>'required',
            'cusaddphone'=>'required',
        ],[
            'cusaddname.required'=>'ກະລຸນາປ້ອນ ຊື່ລູກຄ້າ ກ່ອນ!',
            'cusaddlname.required'=>'ກະລຸນາປ້ອນ ນາມສະກຸນ ກ່ອນ!',
            'cusaddphone.required'=>'ກະລຸນາປ້ອນ ເບີໂທ ກ່ອນ!',
        ]);

        $cus = new Customer();
        $cus->name = $this->cusaddname;
        $cus->lname = $this->cusaddlname;
        $cus->phone = $this->cusaddphone;
        $cus->address = $this->cusaddaddress;
        $cus->save();

        $this->cusid = $cus->id;
        $this->cusname = $cus->name;
        $this->cuslname = $cus->lname;
        $this->cusphone = $cus->phone;
        $this->cusColor = 'success';
        $this->dispatch('alert',type: 'success', message:'ເພີ່ມສຳເລັດ!');
        $this->dispatch('hide-cus');
    }

    public function searchProduct(){
        return redirect(route('product'));
    }

    public function getLastProductData()
    {
        $pro = Product::orderBy('id','desc')->first();
        if($pro){
            $this->proid = $pro->id;
            $this->productmuad = $pro->muadname->name;
            $this->productcate = $pro->catename->name;
            $this->productnote = $pro->name;
            $this->proColor = 'success';
            $this->dispatch('alert',type: 'success', message:'ດຶງຂໍ້ມູນສຳເລັດ!');
        }else{
            $this->dispatch('alert',type: 'error', message:'ບໍ່ມີຂໍ້ມູນ!');
        }
    }

    public function convertTostring(){
        if(!empty($this->money)){
            $moneys = str_replace(',', '', $this->money);
            if (intval($moneys)) {
                $con = new NumberToStringController();
                $this->moneyname = $con->convert($moneys);
            }else{
                $this->dispatch('alert',type: 'error', message:'ກະລຸນາປ້ອນຈຳນວນເງິນເປັນຕົວເລກ!');
            }
        }else{
            $this->moneyname = null;
        }
    }

    public function store(){
        if(!empty($this->cusid) && !empty($this->proid)){
            $this->validate([
                'cusid' => 'required',
                'proid' => 'required',
                'money' => 'required',
                'moneyname' => 'required',
                'crc' => 'required',
                'days' => 'required',
                'int' => 'required',
                'nguad' => 'required',
                'fees' => 'required',
                'adj' => 'required',
            ],[
                'cusid.required' => 'ກະລຸນາເລືອກຂໍ້ມູນລູກຄ້າກ່ອນ',
                'proid.required' => 'ກະລຸນາເລືອກສິນຄ້າກ່ອນ',
            ]);

            $pawn_money = str_replace(',', '', $this->money);
            $date_now = date('Y-m-d');
            $all_interest = 0;

            $pawn_intr = (($pawn_money * $this->int) / 100);
            $pawn_fees = (($pawn_money * $this->fees) / 100);
            $pawn_intr_adjust = (((($pawn_money / $this->nguad) + $pawn_intr) * $this->adj) / 100);
            $pawn_pay_date = $this->days / $this->nguad;

            $pawn_code = new PawnCode();
            $pawn_code->name = auth()->user()->branchname->code;
            $pawn_code->save();
            $code = PawnCode::where('name', $pawn_code->name)->where('number',$pawn_code->number)->orderBy('number','desc')->first();

            $data = new Pawn();
            $data->code = $code->name.'-'.$code->number;
            $data->product_id = $this->proid;
            $data->cus_id = $this->cusid;
            $data->crc_id = $this->crc;
            $data->money = $pawn_money;
            $data->money_name = $this->moneyname;
            $data->interest = $pawn_intr;
            $data->balance = $pawn_money;
            // $data->balance_int = $pawn_intr;
            $data->interestType = $this->int_type;
            $data->adj_percent = $this->adj;
            $data->fees_percent = $this->fees;
            $data->status = 'p'; // p=pending-  c=confirm-  t=tran-  x=expire-  f=finish-  r=reject
            $data->user_id = auth()->user()->id;
            $data->branch_id = auth()->user()->branch_id;
            $data->count_date = $this->days;
            $data->nguad = $this->nguad;
            $data->created_date = $date_now;
            $data->expire_date = date('Y-m-d',strtotime($date_now. ' + '. $this->days .' days'));
            $data->save();

            $sum_int = 0;
            for($i = 1; $i <= $this->nguad; $i++)
            {
                $multi_date = ($this->days / $this->nguad) * $i;

                $detail = new PawnDetail();
                $detail->pawn_id = $data->id;
                $detail->apm_count = $i;
                $detail->apm_date = date('Y-m-d',strtotime($date_now. ' + '. $multi_date .' days'));
                $detail->apm_money = $pawn_money / $this->nguad;
                if($this->int_type == 'constant'){
                    $detail->apm_int = $pawn_intr;
                    $sum_int += $pawn_intr;
                }else{
                    if($i == 1){
                        $detail->apm_int = (($pawn_money * $this->int) / 100) ;
                        $sum_int += (($pawn_money * $this->int) / 100) ;
                    }else{
                        $j = $i;
                        $detail->apm_int = ((($pawn_money -(($pawn_money / $this->nguad)*($j-1))) * $this->int) / 100) ;
                        $sum_int += ((($pawn_money -(($pawn_money / $this->nguad)*($j-1))) * $this->int) / 100) ;
                    }
                }
                if($i == 1){
                    $detail->apm_fees = $pawn_fees;
                }else{
                    $detail->apm_fees = 0;
                }
                $detail->user_id = auth()->user()->id;
                $detail->branch_id = auth()->user()->branch_id;
                $detail->status = 't'; //t=tran  -x=expire  -f=finish  -r=reject
                $detail->save();

                $all_interest += $pawn_intr; 
            }
            
            $cus = Customer::find($this->cusid);
            $cus->count_sv += 1;
            $cus->save();

            Pawn::where('id',$data->id)->update(['balance_int'=>$sum_int]);
            session()->flash('success', 'ສ້າງສັນຍາສິນເຊື່ອສຳເລັດ');
            return redirect(route('pawn-detail', $data->id));

        }else{
            $this->dispatch('alert',type: 'error', message:'ກະລຸນາເພີ່ມຂໍ້ມູນລູກຄ້າ ແລະ ຂໍ້ມູນສິນຄ້າກ່ອນ!');
        }
        
    }
}
