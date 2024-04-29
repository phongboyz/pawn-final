<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ຂໍ້ມູນແຫຼ່ງທຶນ</a></li>
                        <li class="breadcrumb-item active">ລາຍງານຂໍ້ມູນແຫຼ່ງທຶນ</li>
                    </ol>
                </div>
                <h4 class="page-title">ລາຍງານຂໍ້ມູນແຫຼ່ງທຶນ</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-2">
                        <div class="form-group">
                            <div wire:ignore>
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <button type="button"
                                            class="btn waves-effect waves-light btn-primary phetsarath-font">ສາຂາ</button>
                                    </span>
                                    <select class="form-control" name="branch_id" id="branch_id" wire:model="branch_id">
                                        <option value="">ກະລຸນາເລືອກສາຂາ</option>
                                        @foreach ($branchs as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <div>
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <button type="button"
                                            class="btn waves-effect waves-light btn-primary phetsarath-font">ປະເພດ</button>
                                    </span>
                                    <select class="form-control phetsarath-font" wire:model="type" name="type"
                                        id="type">
                                        <option value="">ສະແດງທັງໝົດ</option>
                                        <option value="normal">ແຫຼ່ງທຶນປົກກະຕິ</option>
                                        <option value="more">ແຫຼ່ງທຶນອື່ນໆ</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <div>
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <button type="button"
                                            class="btn waves-effect waves-light btn-primary phetsarath-font">ວັນທີ</button>
                                    </span>
                                    <input type="date" name="start" id="start" class="form-control" wire:model="start">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <div>
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <button type="button"
                                            class="btn waves-effect waves-light btn-primary phetsarath-font">ຫາ</button>
                                    </span>
                                    <input type="date" name="end" id="end" class="form-control" wire:model="end">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <button class="btn btn-info phetsarath-font" wire:click="searchData"><i
                                class="mdi mdi-file-document-box-outline"></i>
                            ສ້າງລາຍງານ</button>

                        <!-- <button class="btn btn-danger phetsarath-font" wire:click="generatePDF"><i class="mdi mdi-file-pdf-box"></i>
                        </button> -->

                        <button class="btn btn-success phetsarath-font" wire:click="exportExcel"><i class="mdi mdi-file-excel"></i>
                        </button>

                    </div>
                </div>
                <div class="row" style="display: {{$show}};">
                    <div class="col-12">
                        <hr>
                    </div>
                    <div class="col-12 text-center">
                        <span>ສາທາລະນະລັດ ປະຊາທິປະໄຕ ປະຊາຊົນລາວ</span><br>
                        <span>ສັນຕິພາບ ເອກະລາດ ປະຊາທິປະໄຕ ເອກະພາບ ວັດທະນາຖາວອນ</span><br>
                        -----------&&&-----------
                    </div>
                    <div class="col-12 text-center">
                        <h3><b class="phetsarath-font text-black">ລາຍງານແຫຼ່ງທຶນ</b></h3>
                    </div>
                    <div class="col-12 text-center">
                        <span>ວັນທີ : {{date('d/m/Y',strtotime($start))}} - {{date('d/m/Y',strtotime($end))}}</span>
                    </div>
                    <div class="col-12">
                        <br>
                        <table border="2" width="100%">
                            <thead>
                                <tr class="text-center">
                                    <th> ລຳດັບ </th>
                                    <th> ວັນທີ </th>
                                    <th> ລະຫັດທຸລະກຳ </th>
                                    <th> ຊື່ທຸລະກຳ </th>
                                    <th> ປະເພດ </th>
                                    <th> ຈຳນວນເງິນ </th>
                                    <th> ລາຍລະອຽດ </th>
                                    <th> ສາຂາ </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @forelse ($data as $key => $item)
                                <tr class="text-center">
                                    <td>{{$no++}}</td>
                                    <td>{{date('d/m/Y',strtotime($item->created_date))}}</td>
                                    <td>{{$item->code}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>
                                        @if ($item->type == 'normal')
                                            <span class="phetsarath-font">ແຫຼ່ງທຶນປົກກະຕິ</span>
                                        @else
                                            <span class="phetsarath-font">ແຫຼ່ງທຶນອື່ນໆ</span>
                                        @endif
                                    </td>
                                    <td>{{number_format($item->total,2,',','.')}}</td>
                                    <td>{{$item->detail}}</td>
                                    <td>{{$item->branchname->name}}</td>
                                </tr>
                                @empty
                                <tr class="text-center">
                                    <td colspan="8" style="color: #787878;">ບໍ່ມີຂໍ້ມູນແຫຼ່ງທຶນ</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')

<link href="{{asset('backend/assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css">
<script src="{{asset('backend/assets/libs/select2/select2.min.js')}}"></script>

<script>
$(document).ready(function() {
    $('#branch_id').select2();
    $('#branch_id').on('change', function(e) {
        var data = $('#branch_id').select2("val");
        @this.set('branch_id', data);
    });
});
</script>
@endpush