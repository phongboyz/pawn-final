<?php

namespace App\Livewire\Backend\Pawn;

use Livewire\Component;
use App\Models\Pawn;
use App\Models\PawnDetail;
use App\Exports\PawnsExport;

class FinishPawnComponent extends Component
{
    public $editId, $delId, $delName;
    public $search, $dataQ = 15, $dateS, $dateE;
    public $form, $ignore_add = 0;
    public $addId;
    public $data, $count;

    public function render()
    {
        $this->data = Pawn::whereAny(['code'],'LIKE','%'.$this->search.'%')->where('status','f')->orderBy('id','desc')->limit($this->dataQ)->get();
        $this->count = Pawn::whereAny(['code'],'LIKE','%'.$this->search.'%')->where('status','f')->orderBy('id','desc')->limit($this->dataQ)->count();
        return view('livewire.backend.pawn.finish-pawn-component');
    }
            
    public function dataQS(){
        $this->data = Pawn::whereAny(['code'],'LIKE','%'.$this->search.'%')->where('status','f')->orderBy('id','desc')->limit($this->dataQ)->get();
        $this->count = Pawn::whereAny(['code'],'LIKE','%'.$this->search.'%')->where('status','f')->orderBy('id','desc')->limit($this->dataQ)->count();
    }

    public function searchData(){
        if(!empty($this->dateS)){
            if($this->search){
                $this->data = Pawn::where('created_date', $this->dateS)->whereAny(['code'],'LIKE','%'.$this->search.'%')->where('status','f')->orderBy('id','desc')->limit($this->dataQ)->get();
                $this->count = Pawn::where('created_date', $this->dateS)->whereAny(['code'],'LIKE','%'.$this->search.'%')->where('status','f')->orderBy('id','desc')->limit($this->dataQ)->count();
            }else{
                // dd($this->dateS);
                $this->data = Pawn::where('created_date', $this->dateS)->where('status','f')->orderBy('id','desc')->limit($this->dataQ)->get();
                $this->count = Pawn::where('created_date', $this->dateS)->where('status','f')->orderBy('id','desc')->limit($this->dataQ)->count();
            }
        }else{
            $this->data = Pawn::whereAny(['code'],'LIKE','%'.$this->search.'%')->where('status','f')->orderBy('id','desc')->limit($this->dataQ)->get();
            $this->count = Pawn::whereAny(['code'],'LIKE','%'.$this->search.'%')->where('status','f')->orderBy('id','desc')->limit($this->dataQ)->count();
        }
    }

    public function exportExcel()
    {
        return (new PawnsExport($this->data))->download('excel-pawns.xlsx');
    }
}
