<?php

namespace App\Exports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\withHeadings;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use DB;

class CustomerExport implements FromView
{
    use Exportable;
    protected $customers;

    public function __construct($customers)
    {
        $this->checked = $customers;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('livewire.backend.customer.excel-customer', [
            'data' => $this->checked,
        ]);
    }
}
