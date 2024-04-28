<?php

namespace App\Exports;

use App\Models\Pawn;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\withHeadings;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use DB;

class PawnsExport implements FromView
{
    use Exportable;
    protected $pawns;

    public function __construct($pawns)
    {
        $this->checked = $pawns;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('livewire.backend.pawn.excel.excel-pawn', [
            'data' => $this->checked,
        ]);
    }
}
