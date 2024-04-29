<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ການບໍລິການ</a></li>
                        <li class="breadcrumb-item active">ຂໍ້ມູນສິນເຊື່ອກາຍກຳນົດ</li>
                    </ol>
                </div>
                <h4 class="page-title">ຂໍ້ມູນສິນເຊື່ອກາຍກຳນົດ</h4>
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
                        <input type="text" name="search" id="search" wire:model="search" wire:keydown.enter="searchData" class="form-control"
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
                                            <th rowspan="2" style="font-size: 12px"> ລຳດັບ </th>
                                            <th rowspan="2" style="font-size: 12px"> ເລກທີ <br> ສັນຍາ </th>
                                            <th rowspan="2" style="font-size: 12px"> ວັນທີເປີດ/ຄົບ <br> ສັນຍາ </th>
                                            <th rowspan="2" style="font-size: 12px"> ວັນກູ້ຢືມ </th>
                                            <th rowspan="2" style="font-size: 12px"> ງວດ </th>
                                            <th rowspan="2" style="font-size: 12px"> ຂໍ້ມູນລູກຄ້າ</th>
                                            <th colspan="3" style="font-size: 12px"> ຫຼັກຊັບຄ້ຳປະກັນ </th>
                                            <th colspan="2" style="font-size: 12px"> ເງິນກູ້ຢືມ </th>
                                            <th rowspan="2" style="font-size: 12px"> ສະຖານະ </th>
                                            <th rowspan="2" style="font-size: 12px"> ປຸ່ມຄຳສັ່ງ </th>
                                        </tr>
                                        <tr>
                                            <th class="text-center" style="font-size: 12px">ໝວດ</th>
                                            <th class="text-center" style="font-size: 12px">ປະເພດ</th>
                                            <th class="text-center" style="font-size: 12px">ລາຍລະອຽດ</th>
                                            <th class="text-center" style="font-size: 12px">ປ່ອຍກູ້</th>
                                            <th class="text-center" style="font-size: 12px">ຍອດເຫຼືອ</th>
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
                                            {{number_format($item->money,2,',','.')}} {{$item->crcname->name}}
                                            </td>
                                            <td class="text-center" style="font-size: 12px">
                                            {{number_format($item->balance,2,',','.')}} {{$item->crcname->name}}
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
                                            <td class="text-center" style="font-size: 12px">
                                            <a href="{{route('pawn-detail',$item->id)}}" class="btn btn-info" ><i class="mdi mdi-format-align-left"></i></a>
                                            <!-- <button type="button" class="btn btn-primary dropdown-toggle waves-effect" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-filter-variant"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#" class="dropdown-item">Dropdown link 1</a></li>
                                                    <li><a href="#" class="dropdown-item">Dropdown link 2</a></li>
                                                    <li><a href="#" class="dropdown-item">Dropdown link 3</a></li>
                                                </ul> -->
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="13" class="text-center" style="font-size: 12px">
                                                ບໍ່ມີຂໍ້ມູນລາຍການສິນເຊື່ອ</td>
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
<script>
window.addEventListener('show-del', event => {
    $('#product-modal').modal('show');
})
window.addEventListener('show-del', event => {
    $('#product-modal').modal('hide');
})
</script>
@endpush