<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\withHeadings;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use DB;

class ProductsExport implements FromView
{
    use Exportable;
    protected $producs;

    public function __construct($producs)
    {
        $this->checked = $producs;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('livewire.backend.product.excel-product', [
            'data' => $this->checked,
        ]);
    }
}
