<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\withHeadings;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use DB;

class UsersExport implements FromView
{
    use Exportable;
    protected $users;

    public function __construct($users)
    {
        $this->checked = $users;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('livewire.backend.user.excel-user', [
            'data' => $this->checked,
        ]);
    }
}
