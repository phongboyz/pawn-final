<?php

namespace App\Livewire\Backend\Pawn;

use Livewire\Component;

class AllPawnComponent extends Component
{
    public $editId, $delId, $delName;
    public $search, $dataQ = 15, $dateS, $dateE;
    public $form, $ignore_add = 0;
    public $addId;
    
    public function render()
    {
        return view('livewire.backend.pawn.all-pawn-component');
    }
}
