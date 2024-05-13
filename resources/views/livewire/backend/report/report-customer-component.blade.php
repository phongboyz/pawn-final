<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ຂໍ້ມູນແຫຼ່ງທຶນ</a></li>
                        <li class="breadcrumb-item active">ລາຍງານສະຖິຕິສິນເຊື່ອລູກຄ້າ</li>
                    </ol>
                </div>
                <h4 class="page-title">ລາຍງານສະຖິຕິສິນເຊື່ອລູກຄ້າ</h4>
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
                                            style="color: black;"><u>ລາຍງານສະຖິຕິສິນເຊື່ອລູກຄ້າ</u></b></h4>
                                    <p class="py-3">
                                        ສາຂາ : @if($branch_ids) {{$data_branch->name}} @else ທັງໝົດ @endif
                                        <br>
                                        ແຕ່ວັນທີ @if($starts) {{date('d/m/Y', strtotime($starts))}} @else
                                        ..........................@endif ຫາ @if($ends)
                                        {{date('d/m/Y', strtotime($ends))}}
                                        @else .......................... @endif
                                    </p>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-12">
                                    <table border="1" width="100%">

                                        <thead>
                                            <tr class="text-center">
                                                <th rowspan="2" class="p-2"> ລຳດັບ </th>
                                                <th rowspan="2" class="p-2"> ຊື່ລູກຄ້າ </th>
                                                <th rowspan="2" class="p-2"> ເບີໂທ </th>
                                                <th colspan="5" class="p-2"> ຂໍ້ມູນສິນເຊື່ອ </th>
                                            </tr>
                                            <tr class="text-center">
                                                <th class="p-2"> ຈຳນວນໃຊ້ບໍລິການ </th>
                                                <th class="p-2"> ຍອດກູ້ຢືມທັງໝົດ (LAK) </th>
                                                <th class="p-2"> ຍອດກູ້ຢືມທັງໝົດ (THB) </th>
                                                <th class="p-2"> ຍອດຄ້າງຊຳລະ (LAK) </th>
                                                <th class="p-2"> ຍອດຄ້າງຊຳລະ (THB) </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @php $no = 1; @endphp
                                            @forelse ($data as $item)

                                            <tr>
                                                <td class="text-center">{{$no++}}</td>
                                                <td class="text-center">{{$item->cusname->name}}
                                                    {{$item->cusname->lname}}</td>
                                                <td class="text-center">{{$item->cusname->phone}}</td>
                                                <td class="text-center">{{$item->cusname->count_sv}}</td>
                                                <td class="text-center">
                                                    @foreach ($data_cus_lak as $items)
                                                    @if ($item->cus_id == $items->cus_id)
                                                    {{number_format($items->money)}}
                                                    @endif
                                                    @endforeach
                                                </td>
                                                <td class="text-center">{{number_format($item->money)}}</td>
                                                <td class="text-center">{{number_format($item->balance)}}</td>
                                                <td class="text-center">
                                                    @foreach ($data_cus_lak as $items)
                                                    @if ($item->cus_id == $items->cus_id)
                                                    {{number_format($items->balance)}}
                                                    @endif
                                                    @endforeach
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="8" class="p-2 text-center"
                                                    style="background-color: #CECECE;">
                                                    ບໍ່ມີຂໍ້ມູນ
                                                </td>
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