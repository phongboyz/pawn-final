<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-white py-3 text-white">
                    <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false"
                        aria-controls="cardCollpase2">
                        <button class="btn btn-primary">
                            <h5 class="card-title mb-0 text-white"><i class="mdi mdi-plus"></i> ເພີ່ມຂໍ້ມູນ </h5>
                        </button>
                    </a>
                </div>
                <div id="cardCollpase1" class="collapse {{$form}}">
                    <div wire:ignore.self>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <p>ຊື່ສິດການເຂົ້າເຖິງ</p>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            wire:model="name" placeholder="ຊື່ສິດການເຂົ້າເຖິງ" require>
                                        @error('name') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2 text-right">
                                    <p class="px-4" style="padding-top: 10px;">ຂໍ້ມູນໝວດຫຼັກຊັບ :</p>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-primary float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-primary" value="viewMuad">
                                            <label for="input-btn-switch-primary"
                                                class="btn btn-rounded btn-primary waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເບິ່ງຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-info float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-info" value="addMuad">
                                            <label for="input-btn-switch-info"
                                                class="btn btn-rounded btn-info waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເພີ່ມຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-warning float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-warning" value="editMuad">
                                            <label for="input-btn-switch-warning"
                                                class="btn btn-rounded btn-warning waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ແກ້ໄຂຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-danger float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-danger" value="delMuad">
                                            <label for="input-btn-switch-danger"
                                                class="btn btn-rounded btn-danger waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ລົບຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-2 text-right">
                                    <p class="px-4" style="padding-top: 10px;">ຂໍ້ມູນປະເພດຫຼັກຊັບ :</p>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-primary float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-primary2" value="viewCate">
                                            <label for="input-btn-switch-primary2"
                                                class="btn btn-rounded btn-primary waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເບິ່ງຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-info float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-info2" value="addCate">
                                            <label for="input-btn-switch-info2"
                                                class="btn btn-rounded btn-info waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເພີ່ມຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-warning float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-warning2" value="editCate">
                                            <label for="input-btn-switch-warning2"
                                                class="btn btn-rounded btn-warning waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ແກ້ໄຂຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-danger float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-danger2" value="delCate">
                                            <label for="input-btn-switch-danger2"
                                                class="btn btn-rounded btn-danger waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ລົບຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-2 text-right">
                                    <p class="px-4" style="padding-top: 10px;">ຂໍ້ມູນບ້ານ :</p>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-primary float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-primary3" value="viewVil">
                                            <label for="input-btn-switch-primary3"
                                                class="btn btn-rounded btn-primary waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເບິ່ງຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-info float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-info3" value="addVil">
                                            <label for="input-btn-switch-info3"
                                                class="btn btn-rounded btn-info waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເພີ່ມຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-warning float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-warning3" value="editVil">
                                            <label for="input-btn-switch-warning3"
                                                class="btn btn-rounded btn-warning waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ແກ້ໄຂຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-danger float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-danger3" value="delVil">
                                            <label for="input-btn-switch-danger3"
                                                class="btn btn-rounded btn-danger waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ລົບຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-2 text-right">
                                    <p class="px-4" style="padding-top: 10px;">ຂໍ້ມູນເມືອງ :</p>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-primary float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-primary4" value="viewDis">
                                            <label for="input-btn-switch-primary4"
                                                class="btn btn-rounded btn-primary waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເບິ່ງຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-info float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-info4" value="addDis">
                                            <label for="input-btn-switch-info4"
                                                class="btn btn-rounded btn-info waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເພີ່ມຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-warning float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-warning4" value="editDis">
                                            <label for="input-btn-switch-warning4"
                                                class="btn btn-rounded btn-warning waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ແກ້ໄຂຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-danger float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-danger4" value="delDis">
                                            <label for="input-btn-switch-danger4"
                                                class="btn btn-rounded btn-danger waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ລົບຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-2 text-right">
                                    <p class="px-4" style="padding-top: 10px;">ຂໍ້ມູນແຂວງ :</p>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-primary float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-primary5" value="viewProv">
                                            <label for="input-btn-switch-primary5"
                                                class="btn btn-rounded btn-primary waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເບິ່ງຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-info float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-info5" value="addProv">
                                            <label for="input-btn-switch-info5"
                                                class="btn btn-rounded btn-info waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເພີ່ມຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-warning float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-warning5" value="editProv">
                                            <label for="input-btn-switch-warning5"
                                                class="btn btn-rounded btn-warning waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ແກ້ໄຂຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-danger float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-danger5" value="delProv">
                                            <label for="input-btn-switch-danger5"
                                                class="btn btn-rounded btn-danger waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ລົບຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-2 text-right">
                                    <p class="px-4" style="padding-top: 10px;">ຂໍ້ມູນລູກຄ້າ :</p>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-primary float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-primary6" value="viewCus">
                                            <label for="input-btn-switch-primary6"
                                                class="btn btn-rounded btn-primary waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເບິ່ງຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-info float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-info6" value="addCus">
                                            <label for="input-btn-switch-info6"
                                                class="btn btn-rounded btn-info waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເພີ່ມຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-warning float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-warning6" value="editCus">
                                            <label for="input-btn-switch-warning6"
                                                class="btn btn-rounded btn-warning waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ແກ້ໄຂຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-danger float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-danger6" value="delCus">
                                            <label for="input-btn-switch-danger6"
                                                class="btn btn-rounded btn-danger waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ລົບຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-2 text-right">
                                    <p class="px-4" style="padding-top: 10px;">ຂໍ້ມູນຫຼັກຊັບ :</p>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-primary float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-primary7" value="viewPro">
                                            <label for="input-btn-switch-primary7"
                                                class="btn btn-rounded btn-primary waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເບິ່ງຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-info float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-info7" value="addPro">
                                            <label for="input-btn-switch-info7"
                                                class="btn btn-rounded btn-info waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເພີ່ມຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-warning float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-warning7" value="editPro">
                                            <label for="input-btn-switch-warning7"
                                                class="btn btn-rounded btn-warning waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ແກ້ໄຂຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-danger float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-danger7" value="delPro">
                                            <label for="input-btn-switch-danger7"
                                                class="btn btn-rounded btn-danger waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ລົບຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-2 text-right">
                                    <p class="px-4" style="padding-top: 10px;">ສ້າງສັນຍາສິນເຊື່ອ :</p>
                                </div>
                                <div class="col-2">
                                    <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-info float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-info8" value="addPawn">
                                            <label for="input-btn-switch-info8"
                                                class="btn btn-rounded btn-info waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເພີ່ມຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-2 text-right">
                                    <p class="px-4" style="padding-top: 10px;">ສິນເຊື່ອລໍຖ້າອະນຸມັດ :</p>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-primary float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-primary9" value="viewPawnPend">
                                            <label for="input-btn-switch-primary9"
                                                class="btn btn-rounded btn-primary waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເບິ່ງຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-2 text-right">
                                    <p class="px-4" style="padding-top: 10px;">ສິນເຊື່ອລໍຖ້າຊຳລະ :</p>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-primary float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-primary10" value="viewPawnPay">
                                            <label for="input-btn-switch-primary10"
                                                class="btn btn-rounded btn-primary waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເບິ່ງຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-2 text-right">
                                    <p class="px-4" style="padding-top: 10px;">ສິນເຊື່ອທັງໝົດ :</p>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-primary float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-primary11" value="viewPawnAll">
                                            <label for="input-btn-switch-primary11"
                                                class="btn btn-rounded btn-primary waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເບິ່ງຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-2 text-right">
                                    <p class="px-4" style="padding-top: 10px;">ສິນເຊື່ອເຄື່ອນໄຫວ :</p>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-primary float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-primary12" value="viewPawnTran">
                                            <label for="input-btn-switch-primary12"
                                                class="btn btn-rounded btn-primary waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເບິ່ງຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-2 text-right">
                                    <p class="px-4" style="padding-top: 10px;">ສິນເຊື່ອກາຍກຳນົດ :</p>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-primary float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-primary13" value="viewPawnEx">
                                            <label for="input-btn-switch-primary13"
                                                class="btn btn-rounded btn-primary waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເບິ່ງຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-2 text-right">
                                    <p class="px-4" style="padding-top: 10px;">ສິນເຊື່ອສຳເລັດ :</p>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-primary float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-primary14" value="viewPawnFinish">
                                            <label for="input-btn-switch-primary14"
                                                class="btn btn-rounded btn-primary waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເບິ່ງຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-2 text-right">
                                    <p class="px-4" style="padding-top: 10px;">ສິນເຊື່ອຍົກເລີກ :</p>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-primary float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-primary15" value="viewPawnReject">
                                            <label for="input-btn-switch-primary15"
                                                class="btn btn-rounded btn-primary waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເບິ່ງຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-2 text-right">
                                    <p class="px-4" style="padding-top: 10px;">ຂໍ້ມູນສະກຸນເງິນ :</p>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-primary float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-primary16" value="viewCrc">
                                            <label for="input-btn-switch-primary16"
                                                class="btn btn-rounded btn-primary waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເບິ່ງຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-info float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-info16" value="addCrc">
                                            <label for="input-btn-switch-info16"
                                                class="btn btn-rounded btn-info waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເພີ່ມຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-warning float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-warning16" value="editCrc">
                                            <label for="input-btn-switch-warning16"
                                                class="btn btn-rounded btn-warning waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ແກ້ໄຂຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-danger float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-danger16" value="delCrc">
                                            <label for="input-btn-switch-danger16"
                                                class="btn btn-rounded btn-danger waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ລົບຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-2 text-right">
                                    <p class="px-4" style="padding-top: 10px;">ຂໍ້ມູນແຫຼ່ງທຶນ :</p>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-primary float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-primary17" value="viewCost">
                                            <label for="input-btn-switch-primary17"
                                                class="btn btn-rounded btn-primary waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເບິ່ງຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-info float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-info17" value="addCost">
                                            <label for="input-btn-switch-info17"
                                                class="btn btn-rounded btn-info waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເພີ່ມຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-warning float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-warning17" value="editCost">
                                            <label for="input-btn-switch-warning17"
                                                class="btn btn-rounded btn-warning waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ແກ້ໄຂຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-danger float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-danger17" value="delCost">
                                            <label for="input-btn-switch-danger17"
                                                class="btn btn-rounded btn-danger waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ລົບຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-2 text-right">
                                    <p class="px-4" style="padding-top: 10px;">ລາຍງານແຫຼ່ງທຶນ :</p>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-primary float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-primary18" value="viewReportCost">
                                            <label for="input-btn-switch-primary18"
                                                class="btn btn-rounded btn-primary waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເບິ່ງຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-2 text-right">
                                    <p class="px-4" style="padding-top: 10px;">ລາຍງານຖານະການເງິນ :</p>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-primary float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-primary19" value="viewReportFinan">
                                            <label for="input-btn-switch-primary19"
                                                class="btn btn-rounded btn-primary waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເບິ່ງຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-2 text-right">
                                    <p class="px-4" style="padding-top: 10px;">ລາຍງານບັນຊີປະຈຳວັນ :</p>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-primary float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-primary20" value="viewReportDaily">
                                            <label for="input-btn-switch-primary20"
                                                class="btn btn-rounded btn-primary waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເບິ່ງຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-2 text-right">
                                    <p class="px-4" style="padding-top: 10px;">ລາຍງານສິນເຊື່ອທັງໝົດ :</p>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-primary float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-primary21" value="viewReportPawn">
                                            <label for="input-btn-switch-primary21"
                                                class="btn btn-rounded btn-primary waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເບິ່ງຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-2 text-right">
                                    <p class="px-4" style="padding-top: 10px;">ລາຍງານສະຖິຕິສິນຄ້າ :</p>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-primary float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-primary22" value="viewReportProduct">
                                            <label for="input-btn-switch-primary22"
                                                class="btn btn-rounded btn-primary waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເບິ່ງຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-2 text-right">
                                    <p class="px-4" style="padding-top: 10px;">ລາຍງານສະຖິຕິລູກຄ້າ :</p>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <div class="btn-switch btn-switch-primary float-right">
                                            <input type="checkbox" wire:model="selectedtypes" id="input-btn-switch-primary23" value="viewReportCus">
                                            <label for="input-btn-switch-primary23"
                                                class="btn btn-rounded btn-primary waves-effect waves-light">
                                                <em class="fas fa-check"></em>
                                                <strong> ເບິ່ງຂໍ້ມູນ</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="form-group" style="padding-left: 170px;padding-top: 10px;">
                                        ບໍ່ມີ
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>
                        </div>
                        <div class="card-footer">

                            @if ($editId)
                            <button class="btn btn-warning" wire:click="store">ອັບເດດ</button>
                            @else
                            <button class="btn btn-success" wire:click="store">ບັນທຶກ</button>
                            @endif

                            @if (empty($addId))
                            <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false"
                                aria-controls="cardCollpase2">
                                <button class="btn btn-danger">ປິດ</button>
                            </a>
                            @else
                            <button class="btn btn-danger" wire:click="hide">ປິດ</button>
                            @endif


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>