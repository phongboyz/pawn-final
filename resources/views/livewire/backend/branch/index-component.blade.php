<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ຂໍ້ມູນໃຊ້ງານລະບົບ</a></li>
                        <li class="breadcrumb-item active">ຂໍ້ມູນສາຂາ</li>
                    </ol>
                </div>
                <h4 class="page-title">ຂໍ້ມູນສາຂາ</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-white py-3 text-white" >
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
                                <div class="col-4">
                                    <div class="form-group">
                                        <p>ລະຫັດສາຂາ</p>
                                        <input type="text" class="form-control @error('code') is-invalid @enderror"
                                            wire:model="code" placeholder="ລະຫັດສາຂາ" require>
                                        @error('code') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <p>ຊື່ສາຂາ</p>
                                        <input type="text"
                                            class="form-control @error('name') is-invalid @enderror"
                                            wire:model="name" placeholder="ຊື່ສາຂາ">
                                        @error('name') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <p>ເບີໂທຕິດຕໍ່</p>
                                        <input type="text"
                                            class="form-control @error('tel') is-invalid @enderror"
                                            wire:model="tel" placeholder="ເບີໂທຕິດຕໍ່">
                                        @error('tel') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <p>ທີ່ຢູ່ສະຖານທີ່ຕັ້ງ</p>
                                        <input type="text" class="form-control @error('address') is-invalid @enderror"
                                            wire:model="address" placeholder="ທີ່ຢູ່ສະຖານທີ່ຕັ້ງ">
                                        @error('address') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <p>ຕຳແໜ່ງທີ່ຕັ້ງ</p>
                                        <input type="text" class="form-control @error('location') is-invalid @enderror"
                                            wire:model="location" placeholder="ຕຳແໜ່ງທີ່ຕັ້ງ">
                                        @error('location') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <p>ປ່ອງລາຍເຊັນ 1</p>
                                        <input type="text" class="form-control @error('sig1') is-invalid @enderror"
                                            wire:model="sig1" placeholder="ປ່ອງລາຍເຊັນ 1">
                                        @error('sig1') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <p>ປ່ອງລາຍເຊັນ 2</p>
                                        <input type="text" class="form-control @error('sig2') is-invalid @enderror"
                                            wire:model="sig2" placeholder="ປ່ອງລາຍເຊັນ 2">
                                        @error('sig2') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <p>ປ່ອງລາຍເຊັນ 3</p>
                                        <input type="text" class="form-control @error('sig3') is-invalid @enderror"
                                            wire:model="sig3" placeholder="ປ່ອງລາຍເຊັນ 3">
                                        @error('sig3') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <p>ປ່ອງລາຍເຊັນ 4</p>
                                        <input type="text" class="form-control @error('sig4') is-invalid @enderror"
                                            wire:model="sig4" placeholder="ປ່ອງລາຍເຊັນ 4">
                                        @error('sig4') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group" wire:ignore>
                                        <p>ອັບໂຫຼດຮູບພາບ</p>
                                        <input type="file" class="filestyle" wire:model="logo" wire:click="uploads">
                                    </div>
                                </div>
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

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">

                <div class="row">
                    <div class="col-3">
                        <table width="100%">
                            <tr>
                                <td style="vertical-align: center;" class="text-right">ສະແດງ &emsp;</td>
                                <td>
                                    <select wire:model="dataQ" wire:click="dataQS" name="Q" id="Q" class="form-control">
                                        <option value="0">0</option>
                                        <option value="15">15</option>/
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                        <option value="999999999">ທັງໝົດ</option>
                                    </select>
                                    <!-- <input type="number" wire:model="dataQ" name="dataQ" id="dataQ" class="form-control col-12"> -->
                                </td>
                                <td style="vertical-align: center;"><span>&emsp; ລາຍການ</span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-4">

                    </div>

                    <div class="col-2">
                        <!-- <input type="date" name="date" id="date" wire:model="dateS" class="form-control"> -->
                    </div>
                    <div class="col-2">
                        <input type="text" name="search" id="search" wire:model="search" class="form-control"
                            placeholder="ຄົ້ນຫາ">
                    </div>
                    <div class="col-1 ">
                        <button type="button" class="btn btn-primary" wire:click="searchData">
                            <i class="mdi mdi-file-search-outline"></i>
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="table-rep-plugin">
                            <div class="table-responsive mb-0" data-pattern="priority-columns">
                                <br>
                                <table border="2" width="100%">
                                    <thead>
                                        <tr class="text-center">
                                            <th> ລຳດັບ </th>
                                            <th> ໂລໂກ </th>
                                            <th> ລະຫັດ-ຊື່ສາຂາ </th>
                                            <th> ເບີໂທ </th>
                                            <th> ທີ່ຢູ່ </th>
                                            <th> ປຸ່ມກົດ </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @forelse ($data as $key => $item)
                                        <tr class="text-center">
                                            <td>{{$no++}}</td>
                                            <td>
                                                @if($item->logo)
                                                <a href="{{asset($item->logo)}}" target="_bank">
                                                    <img class="media-object rounded-circle" alt="64x64"
                                                        src="{{asset($item->logo)}}" style="height: 64px;"> </a>
                                                @else
                                                <a href="{{asset('backend/assets/images/users/avatar-1.jpg')}}"
                                                    target="_bank">
                                                    <img class="media-object rounded-circle" alt="64x64"
                                                        src="{{asset('backend/assets/images/users/avatar-1.jpg')}}"
                                                        style="height: 64px;"> </a>
                                                @endif
                                            </td>
                                            <td>{{$item->code}}-{{$item->name}}</td>
                                            <td>{{$item->tel}}</td>
                                            <td>{{$item->address}}</td>
                                            <td>
                                                <div class="btn-group btn-group-justified text-white mb-2">
                                                    <a class="btn btn-warning waves-effect waves-light"
                                                        wire:click="edit({{$item->id}})"><i
                                                            class="mdi mdi-pencil-remove-outline"></i></a>
                                                    <a class="btn btn-danger waves-effect waves-light"
                                                        wire:click="delete({{$item->id}})"><i
                                                            class="mdi mdi-window-close"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr class="text-center">
                                            <td colspan="8" style="color: #787878;">ບໍ່ມີຂໍ້ມູນສາຂາ</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <span><br> ລວມສາຂາທັງໝົດ <span class="text-danger">{{$count}}</span> ລາຍການ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="custom-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title mt-0 text-white">ລົບຂໍ້ມູນ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <h3><b>ທ່ານຕ້ອງການລົບຂໍ້ມູນນີ້ ຫຼື ບໍ່ ?</b></h3>
                        <p>ລາຍລະອຽດ: <span class="text-danger">{{$delName}}</span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">ປິດ</button>
                    <button type="button" class="btn btn-danger waves-effect waves-light" wire:click="destroy">ລົບຂໍ້ມູນ</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

</div>

@push('scripts')
<script>
window.addEventListener('show-del', event => {
    $('#custom-modal').modal('show');
})
window.addEventListener('show-del', event => {
    $('#custom-modal').modal('hide');
})
</script>
@endpush