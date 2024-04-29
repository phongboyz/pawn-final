<?php

namespace App\Http\Controllers\Cost;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\Socost;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportCostController extends Controller
{
    public function generatePDF($value, $start, $end)
    {
        $data = $value;
        $starts = $start;
        $ends = $end;
        // $customPaper = [0, 0, 368.50, 581.10];
        $pdfs = mb_convert_encoding(\View::make('livewire.backend.cost.pdf-report-cost', ['data'=>$data, 'starts'=>$starts, 'ends'=>$ends]), 'HTML-ENTITIES', 'UTF-8');
        return PDF::loadHtml($pdfs)->setPaper('A4', 'portrait')->download('ລາຍງານແຫຼ່ງທຶນ.pdf',array('Attachment'=>0));
    }
}
