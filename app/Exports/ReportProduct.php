<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\withHeadings;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use App\Models\Pawn;
use DB;

class ReportProduct implements FromView
{
    use Exportable;
    protected $checks;

    public function __construct($checks)
    {
        $this->checked = $checks;
    }
    /**
    * @return \Illuminate\Support\FromView
    */
    public function view(): View
    {
        return view('livewire.backend.report.product-excel', [
            'data' => $this->checked,
        ]);
    }
}
