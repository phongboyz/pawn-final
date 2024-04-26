<?php

namespace App\Livewire\Backend\Pawn\Bill;

use Livewire\Component;
use App\Models\Pawn;
use App\Models\PawnDetail;

class ShowPawnDetailComponent extends Component
{
    public $pawnid, $pawn, $detail, $detailf, $detailc;

    public function mount($id){
        $this->detailid = $id;
        $this->pawn = Pawn::find($id);
        $this->detail = PawnDetail::where('pawn_id', $id)->get();
        $this->detailf = PawnDetail::where('pawn_id', $id)->where('status','f')->get();
        $this->detailc = PawnDetail::where('pawn_id', $id)->where('status','f')->first();
    }

    public function render()
    {
        return view('livewire.backend.pawn.bill.show-pawn-detail-component');
    }
}
