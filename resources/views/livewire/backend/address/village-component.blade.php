<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ຈັດການຂໍ້ມູນ</a></li>
                        <li class="breadcrumb-item active">ຂໍ້ມູນບ້ານ</li>
                    </ol>
                </div>
                <h4 class="page-title">ຂໍ້ມູນບ້ານ</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <div class="card">
                @if ($editId)
                <div class="card-header bg-warning py-3 text-white">
                    <h5 class="card-title mb-0 text-white"><i class="mdi mdi-pencil-remove-outline"></i> ແກ້ໄຂຂໍ້ມູນ
                    </h5>
                </div>
                @else
                <div class="card-header bg-info py-3 text-white">
                    <h5 class="card-title mb-0 text-white"><i class="mdi mdi-plus"></i> ເພີ່ມຂໍ້ມູນ </h5>
                </div>
                @endif
                <div id="cardCollpase1" class="collapse show">
                    <div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div wire:key="select-field-model-version-{{ $refresh_pro }}"></div>
                                        <div wire:ignore>
                                            <p>ແຂວງ</p>
                                            <select name="pro_id" id="pro_id" wire:model="pro_id"
                                                class="form-control select2  @error('pro_id') is-invalid @enderror">
                                                <option value="">ກະລຸນາເລືອກແຂວງ</option>
                                                @foreach ($provinces as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('pro_id') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                @if ($pro_id)
                                <div class="col-12">
                                    <div class="form-group">
                                        <p>ເມືອງ</p>
                                        <select name="dis_id" id="dis_id" wire:model="dis_id"
                                            class="form-control select2  @error('dis_id') is-invalid @enderror">
                                            @foreach ($districts as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('dis_id') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                @endif

                                @if ($dis_id)
                                <div class="col-12">
                                    <div class="form-group">
                                        <p>ຊື່ບ້ານ</p>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            wire:model="name" placeholder="ຊື່ບ້ານ" wire:keydown.enter="store" require>
                                        @error('name') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                @endif

                            </div>
                        </div>
                        <div class="card-footer">

                            @if ($editId)
                            @if(!empty($data_role['editVil']))<button class="btn btn-warning"
                                wire:click="store">ອັບເດດ</button>@endif
                            @else
                            @if(!empty($data_role['addVil']))<button class="btn btn-success"
                                wire:click="store">ບັນທຶກ</button>@endif
                            @endif

                            <a href="{{route('village')}}" class="btn btn-danger">ລ້າງຂໍ້ມູນ</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
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
                    <div class="col-4">
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
                                            <th> ແຂວງ </th>
                                            <th> ເມືອງ </th>
                                            <th> ຊື່ບ້ານ </th>
                                            @if(!empty($data_role['editVil']) || !empty($data_role['delVil']))<th>
                                                ປຸ່ມກົດ </th>@endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @forelse ($data as $key => $item)
                                        <tr class="text-center">
                                            <td>{{$no++}}</td>
                                            <td>{{$item->proname->name}}</td>
                                            <td>{{$item->disname->name}}</td>
                                            <td>{{$item->name}}</td>
                                            @if(!empty($data_role['editVil']) || !empty($data_role['delVil']))
                                            <td>
                                                <div class="btn-group btn-group-justified text-white mb-2">
                                                    @if(!empty($data_role['editVil']))<a
                                                        class="btn btn-warning waves-effect waves-light"
                                                        wire:click="edit({{$item->id}})"><i
                                                            class="mdi mdi-pencil-remove-outline"></i></a>@endif
                                                    @if(!empty($data_role['delVil']))<a
                                                        class="btn btn-danger waves-effect waves-light"
                                                        wire:click="delete({{$item->id}})"><i
                                                            class="mdi mdi-window-close"></i></a>@endif
                                                </div>
                                            </td>
                                            @endif
                                        </tr>
                                        @empty
                                        <tr class="text-center">
                                            <td colspan="8" style="color: #787878;">ບໍ່ມີຂໍ້ມູນບ້ານ</td>
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
                        <span><br> ລວມເມືອງທັງໝົດ <span class="text-danger">{{$count}}</span> ລາຍການ</span>
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
        $('#dis_id').select2();
        $('#dis_id').on('change', function(e) {
            var data = $('#dis_id').select2("val");
            @this.set('dis_id', data);
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
});
</script>
@endpush