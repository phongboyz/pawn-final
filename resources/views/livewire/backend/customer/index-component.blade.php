<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ຈັດການຂໍ້ມູນ</a></li>
                        <li class="breadcrumb-item active">ຂໍ້ມູນລູກຄ້າ</li>
                    </ol>
                </div>
                <h4 class="page-title">ຂໍ້ມູນລູກຄ້າ</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                @if(!empty($data_role['addCus']))
                <div class="card-header bg-white py-3 text-white">
                    <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false"
                        aria-controls="cardCollpase2">
                        <button class="btn btn-primary">
                            <h5 class="card-title mb-0 text-white"><i class="mdi mdi-plus"></i> ເພີ່ມຂໍ້ມູນ </h5>
                        </button>
                    </a>
                </div>
                @endif
                <div id="cardCollpase1" class="collapse {{$form}}">
                    <div wire:ignore.self>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4" style="border-left-style: groove; border-left-color: #29BAF1;">
                                    <div class="form-group">
                                        <p>ເພດ</p>
                                        <select wire:model="gender" name="gender" id="gender" class="form-control">
                                            <option value="m">ຊາຍ</option>
                                            <option value="f">ຍິງ</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <p>ຊື່</p>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            wire:model="name" placeholder="ຊື່">
                                        @error('name') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="form-group">
                                        <p>ນາມສະກຸນ</p>
                                        <input type="text" class="form-control @error('lname') is-invalid @enderror"
                                            wire:model="lname" placeholder="ນາມສະກຸນ">
                                        @error('lname') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-4" style="border-left-style: groove; border-left-color: #29BAF1;">
                                    <div class="form-group">
                                        <p>ເບີໂທ</p>
                                        <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                            wire:model="phone" placeholder="ເບີໂທ">
                                        @error('phone') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="form-group">
                                        <p>ລາຍລະອຽດ</p>
                                        <input type="text" class="form-control @error('note') is-invalid @enderror"
                                            wire:model="note" placeholder="ລາຍລະອຽດ">
                                        @error('note') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="form-group" wire:ignore>
                                        <p>ອັບໂຫຼດຮູບພາບ</p>
                                        <input type="file" class="filestyle" wire:model="logo" wire:click="uploads">
                                    </div>
                                </div>
                                <div class="col-4" style="border-left-style: groove; border-left-color: #29BAF1;">
                                    <div class="form-group">
                                        <!-- <div wire:key="select-field-model-version-{{ $refresh_pro }}"></div> -->
                                        <div>
                                            <p>ແຂວງ</p>
                                            <select wire:model="pro_id"
                                                class="form-control @error('pro_id') is-invalid @enderror"
                                                wire:click="selected">
                                                <option value="">ກະລຸນາເລືອກແຂວງ</option>
                                                @foreach ($provinces as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('pro_id') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                    @if ($pro_id)
                                    <div class="form-group">
                                        <p>ເມືອງ</p>
                                        <select name="dis_id" id="dis_id" wire:model="dis_id"
                                            class="form-control select2  @error('dis_id') is-invalid @enderror">
                                            <option value="">ກະລຸນາເລືອກເມືອງ</option>
                                            @foreach ($districts as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('dis_id') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>

                                    @if ($dis_id)
                                    <div class="form-group">
                                        <p>ບ້ານ</p>
                                        <select name="vil_id" id="vil_id" wire:model="vil_id"
                                            class="form-control select2  @error('vil_id') is-invalid @enderror">
                                            <option value="">ກະລຸນາເລືອກບ້ານ</option>
                                            @foreach ($villages as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('vil_id') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                    @endif

                                    @endif


                                </div>
                            </div>
                        </div>
                        <div class="card-footer">

                            @if ($editId)
                            @if(!empty($data_role['editCus']))<button class="btn btn-warning"
                                wire:click="store">ອັບເດດ</button>@endif
                            @else
                            @if(!empty($data_role['addCus']))<button class="btn btn-success"
                                wire:click="store">ບັນທຶກ</button>@endif
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
                        <button type="button" class="btn btn-success" wire:click="exportExcel">
                            <i class="mdi mdi-file-excel-outline"></i>
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
                                            <th> ບໍລິການ </th>
                                            <th> ຊື່ ແລະ ນາມສະກຸນ </th>
                                            <th> ເບີໂທ </th>
                                            <th> ທີ່ຢູ່ </th>
                                            @if(!empty($data_role['editCus']) || !empty($data_role['delCus']))
                                            <th> ປຸ່ມກົດ </th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @forelse ($data as $key => $item)
                                        <tr class="text-center">
                                            <td>{{$no++}}</td>
                                            <td>
                                                {{$item->count_sv}}
                                            </td>
                                            <td>
                                                @if($item->gender == 'f') ນາງ @else ທ້າວ @endif
                                                {{$item->name}} {{$item->lname}}</td>
                                            <td>{{$item->phone}}</td>
                                            <td>{{$item->address}}</td>
                                            @if(!empty($data_role['editCus']) || !empty($data_role['delCus']))
                                            <td>
                                                <div class="btn-group btn-group-justified text-white mb-2">
                                                    @if(!empty($data_role['editCus']))<a
                                                        class="btn btn-warning waves-effect waves-light"
                                                        wire:click="edit({{$item->id}})"><i
                                                            class="mdi mdi-pencil-remove-outline"></i></a>@endif
                                                    @if(!empty($data_role['delCus']))<a
                                                        class="btn btn-danger waves-effect waves-light"
                                                        wire:click="delete({{$item->id}})"><i
                                                            class="mdi mdi-window-close"></i></a>@endif
                                                </div>
                                            </td>
                                            @endif
                                        </tr>
                                        @empty
                                        <tr class="text-center">
                                            <td colspan="8" style="color: #787878;">ບໍ່ມີຂໍ້ມູນລູກຄ້າ</td>
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
                        <span><br> ລວມລູກຄ້າທັງໝົດ <span class="text-danger">{{$count}}</span> ລາຍການ</span>
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
                    <button type="button" class="btn btn-danger waves-effect waves-light"
                        wire:click="destroy">ລົບຂໍ້ມູນ</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>

@push('scripts')

<link href="{{asset('backend/assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css">
<script src="{{asset('backend/assets/libs/select2/select2.min.js')}}"></script>

<script>
window.addEventListener('show-del', event => {
    $('#custom-modal').modal('show');
})
window.addEventListener('show-del', event => {
    $('#custom-modal').modal('hide');
})

Livewire.on('refresh_v', postId => {
    $(document).ready(function() {
        $('#vil_id').select2();
        $('#vil_id').on('change', function(e) {
            var data = $('#vil_id').select2("val");
            @this.set('vil_id', data);
        });
    });
})

Livewire.on('refresh_d', postId => {
    $(document).ready(function() {
        $('#dis_id').select2();
        $('#dis_id').on('change', function(e) {
            var data = $('#dis_id').select2("val");
            @this.set('dis_id', data);
        });
    });
})

Livewire.on('refresh_p', postId => {
    $(document).ready(function() {
        $('#pro_id').select2();
        $('#pro_id').on('change', function(e) {
            var data = $('#pro_id').select2("val");
            @this.set('pro_id', data);
        });
    });
})

$(document).ready(function() {
    $('#pro_id').select2();
    $('#pro_id').on('change', function(e) {
        var data = $('#pro_id').select2("val");
        @this.set('pro_id', data);
    });
    $('#dis_id').select2();
    $('#dis_id').on('change', function(e) {
        var data = $('#dis_id').select2("val");
        @this.set('dis_id', data);
    });
    $('#vil_id').select2();
    $('#vil_id').on('change', function(e) {
        var data = $('#vil_id').select2("val");
        @this.set('vil_id', data);
    });
});
</script>
@endpush