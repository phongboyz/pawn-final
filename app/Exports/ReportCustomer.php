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

class ReportCustomer implements FromView
{
    use Exportable;
    protected $checks;

    public function __construct($checks)
    {
        $this->checked = $checks;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('livewire.backend.report.customer-excel', [
            'data' => $this->checked,
        ]);
    }
}
