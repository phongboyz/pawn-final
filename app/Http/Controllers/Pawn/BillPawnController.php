<?php

namespace App\Http\Controllers\Pawn;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pawn;
use App\Models\PawnDetail;
use Barryvdh\DomPDF\Facade\Pdf;

class BillPawnController extends Controller
{
    public function generatePDF($id)
    {
        $data = Pawn::find($id);
        // $customPaper = [0, 0, 368.50, 581.10];
        $pdfs = mb_convert_encoding(\View::make('livewire.backend.pawn.bill.bill-pawn', ['data'=>$data]), 'HTML-ENTITIES', 'UTF-8');
        return PDF::loadHtml($pdfs)->setPaper('A4', 'portrait')->stream('ສັນຍາຊວດຈຳ.pdf',array('Attachment'=>0));
        
    }

    public function generatePlanPDF($id)
    {
        $data = Pawn::find($id);
        $detail = PawnDetail::where('pawn_id',$id)->get();
        // $customPaper = [0, 0, 368.50, 581.10];
        $pdfs = mb_convert_encoding(\View::make('livewire.backend.pawn.bill.bill-plan-pawn', ['data'=>$data, 'detail'=>$detail]), 'HTML-ENTITIES', 'UTF-8');
        return PDF::loadHtml($pdfs)->setPaper('A4', 'landscape')->stream('ແຜນການຊຳລະ.pdf',array('Attachment'=>0));
        
    }
}
