<div wire:ignore.self id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">ເພີ່ມຂໍ້ມູນລູກຄ້າ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="field-1" class="control-label">ຊື່</label>
                            <input type="text" class="form-control" id="field-1" placeholder="ຊື່" wire:model="cusaddname" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="field-2" class="control-label">ນາມສະກຸນ</label>
                            <input type="text" class="form-control" id="field-2" placeholder="ນາມສະກຸນ" wire:model="cusaddlname" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-3" class="control-label">ເບີໂທ</label>
                            <input type="text" class="form-control" id="field-3" placeholder="ເບີໂທ" wire:model="cusaddphone" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">ທີ່ຢູ່</label>
                            <textarea class="form-control autogrow" id="field-7" placeholder="ທີ່ຢູ່"
                                style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px;" wire:model="cusaddaddress"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning waves-effect" data-dismiss="modal">ປິດ</button>
                <button type="button" class="btn btn-primary waves-effect waves-light"
                    wire:click="storeCus">ເພີ່ມຂໍ້ມູນ</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>