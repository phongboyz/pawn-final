<?php

namespace App\Exports;

use App\Models\Socost;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\withHeadings;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use DB;

class CostsExport implements FromView
{
    use Exportable;
    protected $costs;

    public function __construct($costs)
    {
        $this->checked = $costs;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('livewire.backend.cost.excel-costs', [
            'data' => $this->checked,
        ]);
    }
}
