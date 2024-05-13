<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ຂໍ້ມູນແຫຼ່ງທຶນ</a></li>
                        <li class="breadcrumb-item active">ລາຍງານຂໍ້ມູນສິນເຊື່ອທັງໝົດ</li>
                    </ol>
                </div>
                <h4 class="page-title">ລາຍງານຂໍ້ມູນສິນເຊື່ອທັງໝົດ</h4>
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
                                    <select class="form-control" name="branch_id" id="branch_id" wire:model="branch_id">
                                        <option value="">ສະແດງທັງໝົດ</option>
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
                                            class="btn waves-effect waves-light btn-primary phetsarath-font">ວັນທີ</button>
                                    </span>
                                    <input type="date" name="start" id="start"
                                        class="form-control @error('start') is-invalid @enderror" wire:model="start">
                                    @error('start') <span style="color: red"
                                        class="error">{{ $message }}</span>@enderror
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
                                    <input type="date" name="end" id="end"
                                        class="form-control @error('end') is-invalid @enderror" wire:model="end">
                                    @error('end') <span style="color: red" class="error">{{ $message }}</span>@enderror
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

                        <button class="btn btn-success phetsarath-font" wire:click="exportExcel"><i
                                class="mdi mdi-file-excel"></i>
                        </button>

                    </div>
                    <div class="col-12">
                        <hr>
                    </div>
                </div>
                <div class="row" style="display: {{$show}};">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 text-center">
                                <span>ສາທາລະນະລັດ ປະຊາທິປະໄຕ ປະຊາຊົນລາວ</span><br>
                                <span>ສັນຕິພາບ ເອກະລາດ ປະຊາທິປະໄຕ ເອກະພາບ ວັດທະນາຖາວອນ</span><br>
                                -----------&&&-----------
                            </div>
                            <div class="col-12 text-center py-4">
                                <h4><b class="phetsarath-font text-black"
                                        style="color: black;"><u>ລາຍງານຂໍ້ມູນສິນເຊື່ອທັງໝົດ</u></b></h4>
                                <p class="py-3">
                                    ສາຂາ : @if($branch_ids) {{$data_branch->name}} @else ທັງໝົດ @endif
                                    <br>
                                    ແຕ່ວັນທີ @if($starts) {{date('d/m/Y', strtotime($starts))}} @else
                                    ..........................@endif ຫາ @if($ends) {{date('d/m/Y', strtotime($ends))}}
                                    @else .......................... @endif
                                </p>
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-12">
                                <table border="1" width="100%">

                                    <thead>
                                        <tr class="text-center">
                                            <th rowspan="2" style="font-size: 12px"> ລຳດັບ </th>
                                            <th rowspan="2" style="font-size: 12px"> ເລກທີ <br> ສັນຍາ </th>
                                            <th rowspan="2" style="font-size: 12px"> ວັນທີເປີດ/ຄົບ <br> ສັນຍາ </th>
                                            <th rowspan="2" style="font-size: 12px"> ວັນກູ້ຢືມ </th>
                                            <th rowspan="2" style="font-size: 12px"> ງວດ </th>
                                            <th rowspan="2" style="font-size: 12px"> ຂໍ້ມູນລູກຄ້າ</th>
                                            <th colspan="3" style="font-size: 12px"> ຫຼັກຊັບຄ້ຳປະກັນ </th>
                                            <th colspan="3" style="font-size: 12px"> ເງິນກູ້ຢືມ </th>
                                            <th rowspan="2" style="font-size: 12px"> ສະຖານະ </th>
                                        </tr>
                                        <tr>
                                            <th class="text-center" style="font-size: 12px">ໝວດ</th>
                                            <th class="text-center" style="font-size: 12px">ປະເພດ</th>
                                            <th class="text-center" style="font-size: 12px">ລາຍລະອຽດ</th>
                                            <th class="text-center" style="font-size: 12px">ປ່ອຍກູ້</th>
                                            <th class="text-center" style="font-size: 12px">ຍອດເຫຼືອ</th>
                                            <th class="text-center" style="font-size: 12px">ສະກຸນເງິນ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @forelse ($data as $item)
                                        <tr>
                                            <td class="text-center" style="font-size: 12px">{{$no++}}</td>
                                            <td class="text-center" style="font-size: 12px">{{$item->code}}</td>
                                            <td class="text-center" style="font-size: 12px">
                                                ສ້າງ: {{date('d/m/Y',strtotime($item->created_date))}}
                                                <br> ໝົດ: {{date('d/m/Y',strtotime($item->expire_date))}}
                                            </td>
                                            <td class="text-center" style="font-size: 12px">{{$item->count_date}}</td>
                                            <td class="text-center" style="font-size: 12px">{{$item->nguad}}</td>
                                            <td class="text-center" style="font-size: 12px">
                                                @if($item->cusname->gender == 'm') ທ້າວ @else ນາງ @endif
                                                {{$item->cusname->name}} {{$item->cusname->lname}}
                                            </td>
                                            <td class="text-center" style="font-size: 12px">
                                                {{$item->proname->muadname->name}}
                                            </td>
                                            <td class="text-center" style="font-size: 12px">
                                                {{$item->proname->catename->name}}
                                            </td>
                                            <td class="text-center" style="font-size: 12px">
                                                {{$item->proname->name}} {{$item->proname->note}}
                                            </td>
                                            <td class="text-center" style="font-size: 12px">
                                                {{number_format($item->money,2,',','.')}}
                                            </td>
                                            <td class="text-center" style="font-size: 12px">
                                                {{number_format($item->balance,2,',','.')}}
                                            </td>
                                            <td class="text-center" style="font-size: 12px">
                                                 {{$item->crcname->name}}
                                            </td>
                                            <td class="text-center" style="font-size: 12px">
                                                @if ($item->status == 'p')
                                                <span class="text-primary">ລໍຖ້າອະນຸມັດ</span>
                                                @elseif ($item->status == 'c')
                                                <span class="text-info">ອະນຸມັດສຳເລັດ</span>
                                                @elseif ($item->status == 't')
                                                <span class="text-info">ກຳລັງເຄື່ອນໄຫວ</span>
                                                @elseif ($item->status == 'x')
                                                <span class="text-orange">ກາຍກຳນົດ</span>
                                                @elseif ($item->status == 'f')
                                                <span class="text-success">ປິດງວດ</span>
                                                @elseif ($item->status == 'r')
                                                <span class="text-danger">ຍົກເລີກ</span>
                                                @endif
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="13" class="text-center" style="font-size: 12px">
                                                ບໍ່ມີຂໍ້ມູນລາຍການສິນເຊື່ອ</td>
                                        </tr>
                                        @endforelse
                                    </tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
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