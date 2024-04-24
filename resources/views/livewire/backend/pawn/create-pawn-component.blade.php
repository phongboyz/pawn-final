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
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">ຂໍ້ມູນລູກຄ້າ:</legend>
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <button type="button"
                                                    class="btn waves-effect waves-light btn-purple" wire:click="addCus"><i class="fa fa-plus"></i></button>
                                            </span>
                                            <input type="text" id="example-input3-group2" name="example-input3-group2"
                                                class="form-control" placeholder="ເບີໂທ / ຊື່ / ນາມສະກຸນ" wire:model="searchCus" wire:keydown.enter="searchCusData">
                                            <span class="input-group-append">
                                                <button type="button"
                                                    class="btn waves-effect waves-light btn-primary" wire:click="searchCusData"><i
                                                        class="fa fa-search"></i> ຄົ້ນຫາ</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <button type="button"
                                                    class="btn waves-effect waves-light btn-{{$cusColor}}">ຊື່</button>
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
                                                    class="btn waves-effect waves-light btn-{{$cusColor}}">ນາມສະກຸນ</button>
                                            </span>
                                            <input type="text" id="example-input1-group2" name="example-input1-group2"
                                                class="form-control" wire:model="cuslname" placeholder="ນາມສະກຸນ" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <button type="button"
                                                    class="btn waves-effect waves-light btn-{{$cusColor}}">ເບີໂທ</button>
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
                                            <a class="btn btn-purple waves-effect waves-light"><i class="fa fa-plus"></i> ເພີ່ມຫຼັກຊັບ</a>
                                            <a class="btn btn-primary waves-effect waves-light"><i class="fa fa-search"></i> ຄົ້ນຫາ</a>
                                            <a class="btn btn-danger waves-effect waves-light" wire:click="getLastProductData"><i class="far fa-arrow-alt-circle-right"></i> ດຶງຂໍ້ມູນລ່າສຸດ</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <button type="button"
                                                    class="btn waves-effect waves-light btn-{{$proColor}}">ໝວດ</button>
                                            </span>
                                            <input type="text" id="example-input1-group2" name="example-input1-group2"
                                                class="form-control" wire:model="productmuad" placeholder="ໝວດຫຼັກຊັບ" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <button type="button"
                                                    class="btn waves-effect waves-light btn-{{$proColor}}">ປະເພດ</button>
                                            </span>
                                            <input type="text" id="example-input1-group2" name="example-input1-group2"
                                                class="form-control" wire:model="productcate" placeholder="ປະເພດຫຼັກຊັບ" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <button type="button"
                                                    class="btn waves-effect waves-light btn-{{$proColor}}">ລາຍລະອຽດ</button>
                                            </span>
                                            <input type="text" id="example-input1-group2" name="example-input1-group2"
                                                class="form-control" wire:model="productnote" placeholder="ລາຍລະອຽດ" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('livewire.backend.pawn.modal-create.modal-cus')
</div>

@push('scripts')
<script>
window.addEventListener('show-cus', event => {
    $('#custom-width-modal').modal('show');
})
window.addEventListener('hide-cus', event => {
    $('#custom-width-modal').modal('hide');
})
</script>
@endpush