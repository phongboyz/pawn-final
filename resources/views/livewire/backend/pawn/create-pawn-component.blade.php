<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ການບໍລິການ</a></li>
                        <li class="breadcrumb-item active">ສ້າງສັນຍາສິນເຊື່ອ</li>
                    </ol>
                </div>
                <h4 class="page-title">ສ້າງສັນຍາສິນເຊື່ອ</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 text-center bg-primary">
                                <h4 class="text-white">ສ້າງສັນຍາສິນເຊື່ອ</h4>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <button type="button"
                                                class="btn waves-effect waves-light btn-primary">ສາຂາ</button>
                                        </span>
                                        <select class="form-control" name="branch_id" id="branch_id"
                                            wire:model="branchid">
                                            @foreach ($branchs as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="col-2">
                            <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <button type="button"
                                                class="btn waves-effect waves-light btn-primary">ສະກຸນເງິນ</button>
                                        </span>
                                        <select class="form-control" name="crc" id="crc"
                                            wire:model="crc">
                                            @foreach ($crcs as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="col-3">
                                <table width="100%">
                                    <tr>
                                        <td width="20%" class="text-center">
                                            <div class="radio radio-info">
                                                <input type="radio" name="radio" class="mt-2" id="radio5"
                                                    value="constant" wire:model="int_type">
                                                <label for="radio5" style="font-size: 18px;">
                                                    ດອກເບ້ຍຄົງທີ່
                                                </label>
                                            </div>
                                        </td>
                                        <td width="20%" class="text-center">
                                            <div class="radio radio-danger">
                                                <input type="radio" name="radio" class="mt-2" id="radio6" value="less"
                                                    wire:model="int_type">
                                                <label for="radio6" style="font-size: 18px;">
                                                    ດອກເບ້ຍຫຼຸດຕາມຕົ້ນທຶນ
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-4 text-right">
                                <p>{{now()}}</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="col-12">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">ຂໍ້ມູນລູກຄ້າ:</legend>
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <button type="button" class="btn waves-effect waves-light btn-purple"
                                                    wire:click="addCus"><i class="fa fa-plus"></i></button>
                                            </span>
                                            <input type="text" id="example-input3-group2" name="example-input3-group2"
                                                class="form-control" placeholder="ເບີໂທ / ຊື່ / ນາມສະກຸນ"
                                                wire:model="searchCus" wire:keydown.enter="searchCusData">
                                            <span class="input-group-append">
                                                <button type="button" class="btn waves-effect waves-light btn-primary"
                                                    wire:click="searchCusData"><i class="fa fa-search"></i>
                                                    ຄົ້ນຫາ</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <button type="button"
                                                    class="btn waves-effect waves-light btn-{{$cusColor}} phetsarath-font">ຊື່</button>
                                            </span>
                                            <input type="text" id="example-input1-group2" name="example-input1-group2"
                                                class="form-control" wire:model="cusname" placeholder="ຊື່" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <button type="button"
                                                    class="btn waves-effect waves-light btn-{{$cusColor}} phetsarath-font">ນາມສະກຸນ</button>
                                            </span>
                                            <input type="text" id="example-input1-group2" name="example-input1-group2"
                                                class="form-control" wire:model="cuslname" placeholder="ນາມສະກຸນ"
                                                disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <button type="button"
                                                    class="btn waves-effect waves-light btn-{{$cusColor}} phetsarath-font">ເບີໂທ</button>
                                            </span>
                                            <input type="text" id="example-input1-group2" name="example-input1-group2"
                                                class="form-control" wire:model="cusphone" placeholder="ເບີໂທ" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <div class="col-12">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">ຂໍ້ມູນຫຼັກຊັບ:</legend>
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="btn-group btn-group-justified text-white mb-2">
                                            <!-- <a class="btn btn-purple waves-effect waves-light"><i class="fa fa-plus"></i> ເພີ່ມຫຼັກຊັບ</a> -->
                                            <a class="btn btn-primary waves-effect waves-light phetsarath-font"
                                                wire:click="searchProduct"><i class="fa fa-search"></i> ຄົ້ນຫາ</a>
                                            <a class="btn btn-danger waves-effect waves-light"
                                                wire:click="getLastProductData"><i
                                                    class="far fa-arrow-alt-circle-right phetsarath-font"></i> ດຶງຂໍ້ມູນລ່າສຸດ</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <button type="button"
                                                    class="btn waves-effect waves-light btn-{{$proColor}} phetsarath-font">ໝວດ</button>
                                            </span>
                                            <input type="text" id="example-input1-group2" name="example-input1-group2"
                                                class="form-control" wire:model="productmuad" placeholder="ໝວດຫຼັກຊັບ"
                                                disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <button type="button"
                                                    class="btn waves-effect waves-light btn-{{$proColor}} phetsarath-font">ປະເພດ</button>
                                            </span>
                                            <input type="text" id="example-input1-group2" name="example-input1-group2"
                                                class="form-control" wire:model="productcate" placeholder="ປະເພດຫຼັກຊັບ"
                                                disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <button type="button"
                                                    class="btn waves-effect waves-light btn-{{$proColor}} phetsarath-font">ລາຍລະອຽດ</button>
                                            </span>
                                            <input type="text" id="example-input1-group2" name="example-input1-group2"
                                                class="form-control" wire:model="productnote" placeholder="ລາຍລະອຽດ"
                                                disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-4">
                                <fieldset class="scheduler-border">
                                    <legend class="scheduler-border">ວົງເງິນ:</legend>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <button type="button"
                                                    class="btn waves-effect waves-light btn-primary phetsarath-font">ຈຳນວນເງິນ</button>
                                            </span>
                                            <input type="text" id="example-input1-group2" name="example-input1-group2"
                                                class="form-control money" wire:model="money"
                                                wire:keydown.enter="convertTostring" placeholder="ຈຳນວນເງິນ">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <button type="button"
                                                    class="btn waves-effect waves-light btn-primary phetsarath-font">ເງິນເປັນໜັງສື</button>
                                            </span>
                                            <input type="text" id="example-input1-group2" name="example-input1-group2"
                                                class="form-control" wire:model="moneyname" placeholder="ເງິນເປັນໜັງສື"
                                                disabled>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-8">
                                <fieldset class="scheduler-border">
                                    <legend class="scheduler-border">ໄລຍະເວລາ ແລະ ອັດຕາດອກເບ້ຍ:</legend>
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-prepend">
                                                        <button type="button"
                                                            class="btn waves-effect waves-light btn-primary phetsarath-font">ໄລຍະເວລາກູ້ຢືມ</button>
                                                    </span>
                                                    <input type="number" id="example-input1-group2"
                                                        name="example-input1-group2" class="form-control"
                                                        wire:model="days" placeholder="ໄລຍະເວລາກູ້ຢືມ">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-prepend">
                                                        <button type="button"
                                                            class="btn waves-effect waves-light btn-primary phetsarath-font">ງວດຊຳລະ</button>
                                                    </span>
                                                    <input type="number" id="example-input1-group2"
                                                        name="example-input1-group2" class="form-control"
                                                        wire:model="nguad" placeholder="ງວດຊຳລະ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-prepend">
                                                                <button type="button"
                                                                    class="btn waves-effect waves-light btn-primary phetsarath-font">ອັດຕາດອກເບ້ຍ</button>
                                                            </span>
                                                            <input type="number" id="example-input1-group2"
                                                                name="example-input1-group2" class="form-control"
                                                                wire:model="int" placeholder="ອັດຕາດອກເບ້ຍ X %">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-prepend">
                                                                <button type="button"
                                                                    class="btn waves-effect waves-light btn-primary phetsarath-font">ອັດຕາຄ່າທຳນຽມ</button>
                                                            </span>
                                                            <input type="number" id="example-input1-group2"
                                                                name="example-input1-group2" class="form-control"
                                                                wire:model="fees" placeholder="ຄ່າທຳນຽມ X %">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-prepend">
                                                                <button type="button"
                                                                    class="btn waves-effect waves-light btn-primary phetsarath-font">ອັດຕາດອກເບ້ຍປັບໄໝ</button>
                                                            </span>
                                                            <input type="number" id="example-input1-group2"
                                                                name="example-input1-group2" class="form-control"
                                                                wire:model="adj" placeholder="ປັບໄໝ X %">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 py-2" style="background-color: #DADADA;">
                                <button class="btn btn-teal phetsarath-font" wire:click="store"> <i class="mdi mdi-file-document-box-plus-outline"></i> ສ້າງສັນຍາ</button>
                                <a href="{{route('create-pawn')}}" class="btn btn-orange phetsarath-font"><i class=" mdi mdi-file-document-box-remove"></i> ລ້າງຂໍ້ມູນ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('livewire.backend.pawn.modal-create.modal-cus')
</div>

@push('scripts')
<script>
$('.money').simpleMoneyFormat();

window.addEventListener('show-cus', event => {
    $('#custom-width-modal').modal('show');
})
window.addEventListener('hide-cus', event => {
    $('#custom-width-modal').modal('hide');
})
</script>
@endpush