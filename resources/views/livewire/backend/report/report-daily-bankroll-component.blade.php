<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ຂໍ້ມູນແຫຼ່ງທຶນ</a></li>
                        <li class="breadcrumb-item active">ລາຍງານບັນຊີປະຈຳວັນ</li>
                    </ol>
                </div>
                <h4 class="page-title">ລາຍງານບັນຊີປະຈຳວັນ</h4>
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

                        <button class="btn btn-danger phetsarath-font" wire:click="print"><i
                                class="mdi mdi-file-pdf-box"></i>
                        </button>

                        <button class="btn btn-success phetsarath-font" wire:click="exportExcel"><i
                                class="mdi mdi-file-excel"></i>
                        </button>

                    </div>
                    <div class="col-12">
                        <hr>
                    </div>
                </div>

                <div class="right_content">
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
                                            style="color: black;"><u>ລາຍງານບັນຊີປະຈຳວັນ</u></b></h4>
                                    <p class="py-3">
                                        ສາຂາ : @if($branch_ids) {{$data_branch->name}} @else ທັງໝົດ @endif
                                        <br>
                                        ແຕ່ວັນທີ @if($starts) {{date('d/m/Y', strtotime($starts))}} @else
                                        ..........................@endif ຫາ @if($ends)
                                        {{date('d/m/Y', strtotime($ends))}}
                                        @else .......................... @endif
                                    </p>
                                </div>
                                <div class="col-12 text-center">

                                </div>
                            </div>
                            <div class="row py-4">
                                <div class="col-12">
                                    <table border="1" width="100%">
                                        <tr class="text-center">
                                            <th rowspan="3" class="p-2">ລຳດັບ</th>
                                            <th rowspan="3" class="p-2">ວັນທີສ້າງ</th>
                                            <th colspan="2" class="p-2">ເລກທີບິນ</th>
                                            <th colspan="2" class="p-2">ເນື້ອໃນລາຍການ</th>
                                            <th colspan="4" class="p-2">ຈຳນວນເງິນ</th>
                                        </tr>
                                        <tr class="text-center">
                                            <th rowspan="2" class="p-2">ໜີ້</th>
                                            <th rowspan="2" class="p-2">ມີ</th>
                                            <th rowspan="2" class="p-2">ໜີ້</th>
                                            <th rowspan="2" class="p-2">ມີ</th>
                                            <th colspan="2" class="p-2">ໜີ້</th>
                                            <th colspan="2" class="p-2">ມີ</th>
                                        </tr>
                                        <tr class="text-center">
                                            <th class="p-2">ກິບ (LAK)</th>
                                            <th class="p-2">ບາດ (THB)</th>
                                            <th class="p-2">ກິບ (LAK)</th>
                                            <th class="p-2">ບາດ (THB)</th>
                                        </tr>
                                        <tbody>
                                        @php $no = 1; @endphp

                                            @forelse ($data as $item)
                                                <tr class="text-center">
                                                    <td class="p-2">{{$no++}}</td>
                                                    <td class="p-2">{{date('d/m/Y',strtotime($item->created_date))}}</td>
                                                    <td class="p-2">@if($item->type == 'de'){{$item->code}}@endif</td>
                                                    <td class="p-2">@if($item->type == 'cr'){{$item->code}}@endif</td>
                                                    <td class="p-2">@if($item->type == 'de'){{$item->detail}}@endif</td>
                                                    <td class="p-2">@if($item->type == 'cr'){{$item->detail}}@endif</td>
                                                    <td class="p-2">@if($item->type == 'de'){{number_format($item->money_lak)}}@endif</td>
                                                    <td class="p-2">@if($item->type == 'de'){{number_format($item->money_thb)}}@endif</td>
                                                    <td class="p-2">@if($item->type == 'cr'){{number_format($item->money_lak)}}@endif</td>
                                                    <td class="p-2">@if($item->type == 'cr'){{number_format($item->money_thb)}}@endif</td>
                                                </tr>
                                            @empty
                                            <tr>
                                                <td colspan="10" class="p-2 text-center"
                                                    style="background-color: #CECECE;">
                                                    ບໍ່ມີຂໍ້ມູນ</td>
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
        </div>
    </div>
</div>

@include('livewire.backend.report.js-report')