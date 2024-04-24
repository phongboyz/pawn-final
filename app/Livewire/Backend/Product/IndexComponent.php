<?php

namespace App\Livewire\Backend\Product;

use Livewire\Component;
use App\Models\Muad;
use App\Models\Category;
use App\Models\Product;
use Livewire\WithFileUploads;
use App\Exports\ProductsExport;

class IndexComponent extends Component
{
    use WithFileUploads;
    public $data, $count;
    public $type, $name, $muad_id, $cate_id, $unit, $location, $note, $image, $images;
    public $editId, $delId, $delName;
    public $search, $dataQ = 15, $dateS, $dateE;
    public $form, $ignore_add = 0;
    public $addId;
    public $muads, $categorys, $villages;
    public $refresh_sel = 0, $refresh_muad = 0, $refresh_vil = 0;

    public function render()
    {
        $this->muads = Muad::select('id','name')->get();

        if($this->muad_id){
            $this->categorys = Category::select('id','name','unit_name')->get();
            $this->refresh_muad++;
            $this->dispatch('refresh_muad');
        }
        
        if($this->cate_id){
            $this->selectCate();
        }

        $this->data = Product::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
        $this->count = Product::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
        return view('livewire.backend.product.index-component');
    }

    public function dataQS(){
        $this->data = Product::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
        $this->count = Product::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
    }

    public function searchData(){
        if(!empty($this->dateS)){
            if($this->search){
                $this->data = Product::where('created_at', $this->dateS)->whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
                $this->count = Product::where('created_at', $this->dateS)->whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
            }else{
                $this->data = Product::where('created_at', $this->dateS)->limit($this->dataQ)->get();
                $this->count = Product::where('created_at', $this->dateS)->limit($this->dataQ)->count();
            }
        }else{
            $this->data = Product::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get();
            $this->count = Product::whereAny(['name'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->count();
        }
    }

    public function uploads(){
        $this->form = 'show';
    }

    public function selected(){
        $this->form = 'show';
        $this->refresh_sel++;
        $this->dispatch('refresh_selected');
    }

    public function selectedMuad(){
        $this->form = 'show';
        $this->refresh_muad++;
        $this->dispatch('refresh_muad');
    }

    public function selectCate()
    {
        // dd($this->cate_id);
        $this->form = 'show';
        if($this->cate_id){
            $cate = Category::find($this->cate_id);
            $this->unit = $cate->unit_name;
        }else{
            $this->unit = null;
        }
    }

    public function resetField(){
        $this->editId = null;
        $this->delId = null;
        $this->type = null;
        $this->name = null;
        $this->muad_id = null;
        $this->cate_id = null;
        $this->unit = null;
        $this->location = null;
        $this->note = null;
        $this->image = null;
        $this->images = null;
    }

    public function store(){
        $this->validate([
            'type'=>'required',
            'muad_id'=>'required',
            'cate_id'=>'required',
            'name'=>'required',
            'unit'=>'required',
        ],[
            'type.required'=>'ກະລຸນາເລືອກ ຮູບແບບ ກ່ອນ!',
            'muad_id.required'=>'ກະລຸນາເລືອກ ໝວດຫຼັກຊັບ ກ່ອນ!',
            'cate_id.required'=>'ກະລຸນາເລືອກ ປະເພດຫຼັກຊັບ ກ່ອນ!',
            'name.required'=>'ກະລຸນາປ້ອນ ຊື່ຫຼັກຊັບ ກ່ອນ!',
            'unit.required'=>'ກະລຸນາເພີ່ມ ຫົວໜ່ວຍ ກ່ອນ!',
        ]);

        if (!empty($this->image)) {
            if ($this->images) {
                unlink($this->images);
            }
            $this->validate([
                'image' => 'required|mimes:jpg,png,jpeg',
            ]);
            $imgName = date('ymdhis') . '.' . $this->image->extension();
            $this->image->storeAs('upload/products/', $imgName);
            $this->images = 'upload/products/'.$imgName;
        }

        if($this->editId){
            Product::where('id',$this->editId)->update([
                'type'=>$this->type,
                'muad_id'=>$this->muad_id,
                'cate_id'=>$this->cate_id,
                'name'=>$this->name,
                'unit'=>$this->unit,
                'location'=>$this->location,
                'image'=>$this->images,
                'note'=>$this->note,
                'user_id'=>auth()->user()->id
            ]);
            session()->flash('success', 'ອັບເດດຂໍ້ມູນສຳເລັດ');
        }else{
            Product::insert([
                'type'=>$this->type,
                'muad_id'=>$this->muad_id,
                'cate_id'=>$this->cate_id,
                'name'=>$this->name,
                'unit'=>$this->unit,
                'location'=>$this->location,
                'image'=>$this->images,
                'note'=>$this->note,
                'user_id'=>auth()->user()->id
            ]);
            session()->flash('success', 'ບັນທຶກຂໍ້ມູນສຳເລັດ');
        }
        return redirect(route('product'));
    }

    public function edit($ids){
        $this->form = 'show';
        $this->editId = $ids;
        $data = Product::find($ids);
        $this->type = $data->type;
        $this->muad_id = $data->muad_id;
        $this->cate_id = $data->cate_id;
        $this->name = $data->name;
        $this->unit = $data->unit;
        $this->location = $data->location;
        $this->note = $data->note;
        $this->images = $data->image;

        $this->refresh_sel++;
        $this->dispatch('refresh_selected');
    }

    public function delete($ids){
        $this->delId = $ids;
        $data = Product::find($ids);
        $this->delName = $data->catename->name.' '.$data->name;
        $this->dispatch('show-del');
    }

    public function destroy()
    {
        Product::where('id',$this->delId)->delete();
        session()->flash('success', 'ລົບຂໍ້ມູນສຳເລັດ');
        return redirect(route('product'));
    }

    public function exportExcel()
    {
        return (new ProductsExport($this->data))->download('excel-products.xlsx');
    }
}
