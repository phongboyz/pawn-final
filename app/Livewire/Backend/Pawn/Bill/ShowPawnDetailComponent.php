<?php

namespace App\Livewire\Backend\Pawn\Bill;

use Livewire\Component;
use App\Models\Pawn;
use App\Models\PawnDetail;

class ShowPawnDetailComponent extends Component
{
    public $pawnid, $pawn, $detail, $detailf, $detailc;
    public $transection_id, $pending_id;

    public function mount($id){
        $this->transection_id = Pawn::where('id',$id)->whereNotIn('status',['p','r'])->first();
        $this->pending_id = Pawn::where('id',$id)->where('status','p')->first();
        $this->pawnid = $id;
        $this->pawn = Pawn::find($id);
        $this->detail = PawnDetail::where('pawn_id', $id)->get();
        $this->detailf = PawnDetail::where('pawn_id', $id)->where('status','f')->get();
        $this->detailc = PawnDetail::where('pawn_id', $id)->where('status','f')->first();
    }

    public function render()
    {
        return view('livewire.backend.pawn.bill.show-pawn-detail-component');
    }

    public function confirm(){
        $data = Pawn::find($this->pawnid)->update(['status'=>'t']);
        session()->flash('success', 'ອະນຸມັດສິນເຊື່ອສຳເລັດ');
        return redirect(route('pawn-detail', $this->pawnid));
    }

    public function reject(){
        $data = Pawn::find($this->pawnid)->update(['status'=>'r']);
        $detail = PawnDetail::where('pawn_id', $this->pawnid)->update(['status'=>'r']);
        session()->flash('success', 'ຍົກເລີກສິນເຊື່ອສຳເລັດ');
        return redirect(route('pawn-detail', $this->pawnid));
    }
}
