<div>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ໜ້າຫຼັກ</a></li> -->
                    </ol>
                </div>
                <!-- <h4 class="page-title">ໜ້າຫຼັກ</h4> -->
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-6 col-xl-3">
            <div class="card widget-box-three">
                <div class="card-body">
                    <div class="float-right mt-2">
                        <i class="mdi mdi-file-document-outline display-3 m-0 text-primary"></i>
                    </div>
                    <div class="overflow-hidden">
                        <p class="text-uppercase font-weight-medium text-truncate mb-2">ຈຳນວນປ່ອຍສິນເຊື່ອທັງໝົດ</p>
                        <h2 class="mb-0"><span data-plugin="counterup">{{$pawn_one}}</span> <i
                                class="mdi mdi-arrow-up text-success font-24"></i></h2>
                        <p class="text-muted mt-2 m-0"><span class="font-weight-medium">ລວມ:</span> {{$pawn_one}} ລາຍການ</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->

        <div class="col-lg-6 col-xl-3">
            <div class="card widget-box-three">
                <div class="card-body">
                    <div class="float-right mt-2">
                        <i class="mdi mdi-file-document-outline display-3 m-0 text-warning"></i>
                    </div>
                    <div class="overflow-hidden">
                        <p class="text-uppercase font-weight-medium text-truncate mb-2">ຈຳນວນສິນເຊື່ອຄ້າງຊຳລະ</p>
                        <h2 class="mb-0"><span data-plugin="counterup">{{$pawn_two}}</span> <i
                                class="mdi mdi-arrow-down text-danger font-24"></i></h2>
                        <p class="text-muted mt-2 m-0"><span class="font-weight-medium">ລວມ:</span> {{$pawn_two}} ລາຍການ</p>
                    </div>

                </div>
            </div>
        </div>
        <!-- end col -->

        <div class="col-lg-6 col-xl-3">
            <div class="card widget-box-three">
                <div class="card-body">
                    <div class="float-right mt-2">
                        <i class="mdi mdi-file-document-outline display-3 m-0 text-danger"></i>
                    </div>
                    <div class="overflow-hidden">
                        <p class="text-uppercase font-weight-medium text-truncate mb-2">ຈຳນວນສິນເຊື່ອກາຍກຳນົດ</p>
                        <h2 class="mb-0"><span data-plugin="counterup">{{$pawn_three}}</span><i
                                class="mdi mdi-arrow-down text-danger font-24"></i></h2>
                        <p class="text-muted mt-2 m-0"><span class="font-weight-medium">ລວມ:</span> {{$pawn_three}} ລາຍການ</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->

        <div class="col-lg-6 col-xl-3">
            <div class="card widget-box-three">
                <div class="card-body">
                    <div class="float-right mt-2">
                        <i class="mdi mdi-file-document-outline display-3 m-0 text-success"></i>
                    </div>
                    <div class="overflow-hidden">
                        <p class="text-uppercase font-weight-medium text-truncate mb-2">ຈຳນວນສິນເຊື່ອຊຳລະສຳເລັດ</p>
                        <h2 class="mb-0"><span data-plugin="counterup">{{$pawn_four}}</span> <i
                                class="mdi mdi-arrow-up text-success font-24"></i></h2>
                        <p class="text-muted mt-2 m-0"><span class="font-weight-medium">ລວມ:</span> {{$pawn_four}} ລາຍການ</p>
                    </div>

                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-xl-6">
            <div class="card-box">
                <h4 class="header-title mb-4">ລາຍການສິນເຊື່ອກາຍກຳນົດ</h4>

                <div class="table-responsive">
                    <table class="table table-hover table-centered m-0">
                        <thead>
                            <tr>
                                <th class="text-center" style="font-size: 14px;">ງວດ</th>
                                <th class="text-center" style="font-size: 14px;">ຂໍ້ມູນລູກຄ້າ</th>
                                <th class="text-center" style="font-size: 14px;">ວັນຄົບກຳນົດ</th>
                                <th class="text-center" style="font-size: 14px;">ຕົ້ນທຶນຕໍ່ງວດ</th>
                                <th class="text-center" style="font-size: 14px;">ດອກເບ້ຍ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pawn_data_pay as $item)
                                <tr>
                                    <td class="text-center" style="font-size: 14px;">{{$item->apm_count}}</td>
                                    <td class="text-center">@if($item->pawnname->cusname->gender == 'm') ທ້າວ @else ນາງ @endif {{$item->pawnname->cusname->name}} {{$item->pawnname->cusname->phone}}</td>
                                    <td class="text-center" style="font-size: 14px;">
                                        {{date('d-m-Y',strtotime($item->apm_date))}}</td>
                                    <td class="text-center" style="font-size: 14px;">
                                        {{number_format($item->apm_money,2,',','.')}}</td>
                                    <td class="text-center" style="font-size: 14px;">
                                        {{number_format($item->apm_int,2,',','.')}}</td>
                                </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="p-2 text-center"
                                    style="background-color: #CECECE;font-size: 14px;">ບໍ່ມີຂໍ້ມູນ
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
                <!-- table-responsive -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-6">
            <div class="card-box">
                <center>
                    <h4 class="header-title mb-4" style="color: black; font-family: 'Phetsarath OT';"><u><b>ເສັ້ນສະແດງຍອດສິນເຊື່ອຕາມສະຖານະ</b></u></h4>
                    <div id="chart"></div>
                </center>
            </div>
        </div>
        <!-- end col -->

    </div>
    <!-- end row -->
</div>

@include('livewire.backend.dashboard-js')