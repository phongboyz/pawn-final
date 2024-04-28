<div wire:ignore.self id="payNguad-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">
                    @if ($detailid)
                        ຊຳລະຄ່າງວດ
                    @else
                        ປິດງວດ
                    @endif
                    
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="field-1" class="control-label">ຈຳນວນເງິນ</label>
                            <input type="text" class="form-control" id="field-1" placeholder="ຈຳນວນເງິນ"
                            value="{{number_format($money,2,',','.')}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="field-2" class="control-label">ຈຳນວນດອກເບ້ຍ</label>
                            <input type="text" class="form-control" id="field-2" placeholder="ຈຳນວນດອກເບ້ຍ"
                            value="{{number_format($int,2,',','.')}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-3" class="control-label">ຄ່າທຳນຽມ</label>
                            <input type="text" class="form-control" id="field-3" placeholder="ຄ່າທຳນຽມ" value="{{number_format($fees,2,',','.')}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-3" class="control-label">ດອກເບ້ຍປັບໄໝ</label>
                            <input type="text" class="form-control" id="field-3" placeholder="ດອກເບ້ຍປັບໄໝ"
                            value="{{number_format($adj,2,',','.')}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-3" class="control-label">ສ່ວນຫຼຸດ</label>
                            <div class="input-group">
                                <input type="text" id="example-input3-group2" name="example-input3-group2"
                                    class="form-control money" placeholder="ສ່ວນຫຼຸດ" wire:model="discount"
                                    wire:keydown.enter="cal">
                                <span class="input-group-append">
                                    <button type="button" class="btn waves-effect waves-light btn-primary" style="font-family:'Phetsarath OT';"
                                        wire:click="cal"><i class="mdi mdi-calculator"></i>
                                        ຄຳນວນ</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="form-group">
                            <hr>
                            <label for="field-3" class="control-label">ລວມເປັນເງິນ</label>
                            <input type="text" class="form-control" id="field-3" placeholder="ລວມເປັນເງິນ"
                                value="{{number_format($sum,2,',','.')}}"
                                style="background-color: #a7f7ea;font-size: 20px;font-family: 'Times New Roman';color:red;text-align:center;"
                                disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning waves-effect" data-dismiss="modal">ປິດ</button>
                    @if ($detailid)
                    <button type="button" class="btn btn-primary waves-effect waves-light"
                    wire:click="storePayNguad">ຊຳລະ</button>
                    @else
                    <button type="button" class="btn btn-primary waves-effect waves-light"
                    wire:click="storePayAll">ຊຳລະ</button>
                    @endif
                
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>