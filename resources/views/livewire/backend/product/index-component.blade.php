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
                                <div class="col-4" style="border-left-style: groove; border-left-color: #29BAF1;">
                                    <div class="form-group">
                                        <p>ຮູບແບບຫຼັກຊັບ</p>
                                        <select wire:model="type" name="type" id="type" class="form-control" wire:click="selected">
                                            <option value="">ກະລຸນາເລືອກຮູບແບບ</option>
                                            <option value="gen">ຫຼັກຊັບທົ່ວໄປ</option>
                                            <option value="ret">ອະສັງຫາລິມະຊັບ</option>
                                        </select>
                                    </div>
                                    @if ($type)
                                    <div class="form-group">
                                        <div wire:ignore>
                                            <p>ໝວດຫຼັກຊັບ</p>
                                                <select name="muad_id" id="muad_id" wire:model="muad_id"
                                                    class="form-control  @error('muad_id') is-invalid @enderror">
                                                    <option value="">ກະລຸນາເລືອກໝວດຫຼັກຊັບ</option>
                                                    @foreach ($muads as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach
                                                </select>
                                            @error('muad_id') <span style="color: red"
                                                class="error">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                        @if($muad_id)
                                        <div class="form-group">
                                                <p>ປະເພດຫຼັກຊັບ</p>
                                                <select name="cate_id" id="cate_id" wire:model="cate_id" wire:click="selectCate"
                                                    class="form-control @error('muad_id') is-invalid @enderror">
                                                    <option value="">ກະລຸນາເລືອກປະເພດຫຼັກຊັບ</option>
                                                    @foreach ($categorys as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach
                                                </select>
                                            @error('cate_id') <span style="color: red"
                                                class="error">{{ $message }}</span>@enderror
                                        </div>
                                        @endif
                                    @endif
                                    
                                   
                                    
                                </div>
                                <div class="col-4" style="border-left-style: groove; border-left-color: #29BAF1;">
                                    <div class="form-group">
                                        <p>ຊື່ຫຼັກຊັບ</p>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            wire:model="name" placeholder="ຊື່ຫຼັກຊັບ">
                                        @error('name') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="form-group">
                                        <p>ຫົວໜ່ວຍ</p>
                                        <input type="text" class="form-control @error('unit') is-invalid @enderror"
                                            wire:model="unit" placeholder="ຫົວໜ່ວຍ" disabled>
                                        @error('unit') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                    @if ($type == 'ret')
                                    <div class="form-group">
                                        <p>ສະຖານທີ່</p>
                                        <input type="text" class="form-control @error('location') is-invalid @enderror"
                                            wire:model="location" placeholder="ຊື່ຫຼັກຊັບ">
                                        @error('location') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                    @endif
                                    
                                </div>
                                <div class="col-4" style="border-left-style: groove; border-left-color: #29BAF1;">
                                <div class="form-group">
                                        <p>ລາຍລະອຽດ</p>
                                        <input type="text" class="form-control @error('note') is-invalid @enderror"
                                            wire:model="note" placeholder="ລາຍລະອຽດ">
                                        @error('note') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="form-group" wire:ignore>
                                        <p>ອັບໂຫຼດຮູບພາບ</p>
                                        <input type="file" class="filestyle" wire:model="image" wire:click="uploads">
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
                                            <th> ຮູບ </th>
                                            <th> ຮູບແບບ </th>
                                            <th> ໝວດ </th>
                                            <th> ປະເພດ </th>
                                            <th> ຊື່ສິນຄ້າ </th>
                                            <th> ຫົວໜ່ວຍ </th>
                                            <th> ລາຍລະອຽດ </th>
                                            <th> ປຸ່ມກົດ </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @forelse ($data as $key => $item)
                                        <tr class="text-center">
                                            <td>{{$no++}}</td>
                                            <td>
                                                @if($item->image)
                                                <a href="{{asset($item->image)}}" target="_bank">
                                                    <img class="media-object rounded-circle" alt="64x64"
                                                        src="{{asset($item->image)}}" style="height: 64px;"> </a>
                                                @else
                                                <a href="{{asset('backend/assets/images/users/avatar-1.jpg')}}"
                                                    target="_bank">
                                                    <img class="media-object rounded-circle" alt="64x64"
                                                        src="{{asset('backend/assets/images/users/avatar-1.jpg')}}"
                                                        style="height: 64px;"> </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->type == 'gen')
                                                    ຫຼັກຊັບທົ່ວໄປ
                                                @else
                                                    ອະສັງຫາລິມະຊັບ
                                                @endif
                                            </td>
                                            <td>{{$item->muadname->name}}</td>
                                            <td>{{$item->catename->name}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->unit}}</td>
                                            <td>{{$item->note}}</td>
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
                                            <td colspan="8" style="color: #787878;">ບໍ່ມີຂໍ້ມູນຫຼັກຊັບ</td>
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
                        <span><br> ລວມຫຼັກຊັບທັງໝົດ <span class="text-danger">{{$count}}</span> ລາຍການ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="product-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
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
    $('#product-modal').modal('show');
})
window.addEventListener('show-del', event => {
    $('#product-modal').modal('hide');
})

Livewire.on('refresh_selected', postId => {
    $(document).ready(function() {
        $('#muad_id').select2();
        $('#muad_id').on('change', function(e) {
            var data = $('#muad_id').select2("val");
            @this.set('muad_id', data);
        });

        $('#cate_id').select2();
        $('#cate_id').on('change', function(e) {
            var data = $('#cate_id').select2("val");
            @this.set('cate_id', data);
        });
    });
})

Livewire.on('refresh_muad', postId => {
    $(document).ready(function() {
        $('#cate_id').select2();
        $('#cate_id').on('change', function(e) {
            var data = $('#cate_id').select2("val");
            @this.set('cate_id', data);
        });
    });
})

$(document).ready(function() {
    $('#muad_id').select2();
    $('#muad_id').on('change', function(e) {
        var data = $('#muad_id').select2("val");
        @this.set('muad_id', data);
    });

    $('#cate_id').select2();
    $('#cate_id').on('change', function(e) {
        var data = $('#cate_id').select2("val");
        @this.set('cate_id', data);
    });
});
</script>
@endpush