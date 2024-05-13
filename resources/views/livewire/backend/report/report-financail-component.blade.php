<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ຂໍ້ມູນແຫຼ່ງທຶນ</a></li>
                        <li class="breadcrumb-item active">ລາຍງານຖານະການເງິນ</li>
                    </ol>
                </div>
                <h4 class="page-title">ລາຍງານຖານະການເງິນ</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <div wire:ignore>
                                <div class="input-group">
                                    <select class="form-control" name="branch_id" id="branch_id" wire:model="branch_id">
                                        <option value="">ສະແດງສາຂາທັງໝົດ</option>
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
                                            class="btn waves-effect waves-light btn-primary phetsarath-font">ສະກຸນເງິນ</button>
                                    </span>
                                    <select class="form-control @error('crc_id') is-invalid @enderror" name="crc_id"
                                        id="crc_id" wire:model="crc_id">
                                        <option value="">ກະລຸນາເລືອກ</option>
                                        @foreach ($crcs as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('crc_id') <span style="color: red"
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
                    <div class="col-3">
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
                                        style="color: black;"><u>ລາຍງານຖານະການເງິນ</u></b></h4>
                                <span>
                                    ແຕ່ວັນທີ @if($starts) {{date('d/m/Y', strtotime($starts))}} @else
                                    ..........................@endif ຫາ @if($ends) {{date('d/m/Y', strtotime($ends))}}
                                    @else .......................... @endif
                                </span>
                            </div>
                            <div class="col-12 text-center">

                            </div>
                        </div>
                        <div class="row py-4">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <table border="1" width="100%">
                                    <tr>
                                        <th colspan="2" width="70%" class="text-center p-2">ລາຍການ</th>
                                        <th width="30%" class="text-center">ຈຳນວນເງິນ</th>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="p-2"><b>1. ເງິນສົດ</b></td>
                                        <td class="text-left px-3 text-danger">{{number_format($data_cost,2,'.',',')}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center p-2">1.1 </td>
                                        <td class="px-3">ເງິນສົດ ແລະ ແຫຼ່ງທຶນ</td>
                                        <td class="px-3 text-right">{{number_format($data_cost,2,'.',',')}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="p-2"><b>2. ສິນເຊື່ອ ແລະ ເງິນລ່ວງໜ້າໃຫ້ລູກຄ້າສຸດທີ</b>
                                        </td>
                                        <td class="text-left px-3 text-danger">
                                            {{number_format($data_pawn_normal + $data_pawn_ex1 + $data_pawn_ex2 + $data_pawn_ex3 + $data_pawn_ex4 + $data_pawn_ex5,2,'.',',')}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center p-2">2.1 </td>
                                        <td class="px-3">ສິນເຊື່ອປົກກະຕິ ແລະ ສິນເຊື່ອປິດງວດ</td>
                                        <td class="px-3 text-right">{{number_format($data_pawn_normal,2,'.',',')}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center p-2">2.2 </td>
                                        <td class="px-3">ສິນເຊື່ອກາຍກຳນົດ ( 1 - 30 ວັນ )</td>
                                        <td class="px-3 text-right">{{number_format($data_pawn_ex1,2,'.',',')}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center p-2">2.3 </td>
                                        <td class="px-3">ສິນເຊື່ອຄວນເອົາໃຈໃສ່ ( 31 - 60 ວັນ )</td>
                                        <td class="px-3 text-right">{{number_format($data_pawn_ex2,2,'.',',')}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center p-2">2.4 </td>
                                        <td class="px-3">ສິນເຊື່ອທວງຍາກ ( 61 - 90 ວັນ )</td>
                                        <td class="px-3 text-right">{{number_format($data_pawn_ex3,2,'.',',')}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center p-2">2.5 </td>
                                        <td class="px-3">ສິນເຊື່ອທວງຍາກ ( 91 - 180 ວັນ )</td>
                                        <td class="px-3 text-right">{{number_format($data_pawn_ex4,2,'.',',')}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center p-2">2.6 </td>
                                        <td class="px-3">ສິນເຊື່ອທວງຍາກ ( > 180 ວັນ )</td>
                                        <td class="px-3 text-right">{{number_format($data_pawn_ex5,2,'.',',')}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="p-2"><b>3. ລາຍຮັບ</b></td>
                                        <td class="text-left px-3 text-danger">
                                            {{number_format($data_int_pay + $data_int_ex + $data_fees,2,'.',',')}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center p-2">3.1 </td>
                                        <td class="px-3">ດອກເບ້ຍເງິນກູູ້</td>
                                        <td class="px-3 text-right">{{number_format($data_int_pay,2,'.',',')}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center p-2">3.2 </td>
                                        <td class="px-3">ດອກເບ້ຍປັບໄໝ</td>
                                        <td class="px-3 text-right">{{number_format($data_int_ex,2,'.',',')}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center p-2">3.3 </td>
                                        <td class="px-3">ຄ່າທຳນຽມ</td>
                                        <td class="px-3 text-right">{{number_format($data_fees,2,'.',',')}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="p-2 text-center"><b>ລວມຊັບສິນທັງໝົດ : </b></td>
                                        <td class="text-right px-3">
                                            <b>{{number_format($data_cost + $data_pawn_normal + $data_pawn_ex1 + $data_pawn_ex2 + $data_pawn_ex3 + $data_pawn_ex4 + $data_pawn_ex5 + $data_int_pay + $data_int_ex + $data_fees,2,'.',',')}}</b>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-2"></div>
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