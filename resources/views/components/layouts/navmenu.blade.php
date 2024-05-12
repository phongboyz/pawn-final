<div class="topbar-menu">
    <div class="container-fluid">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">

                <li>
                    <a href="{{route('dashboard')}}"> <i class="mdi mdi-view-dashboard"></i>ໜ້າຫຼັກ</a>
                </li>

                @if(!empty($data_role['viewMuad']) || !empty($data_role['viewCate']) || !empty($data_role['viewVil']) || !empty($data_role['viewDis']) || !empty($data_role['viewProv']) )
                <li class="has-submenu">
                    <a href="#">
                        <i class="mdi mdi-layers"></i>ຈັດການຂໍ້ມູນ
                    </a>
                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                
                            @if(!empty($data_role['viewMuad']))<li><a href="{{route('muad')}}">ຂໍ້ມູນໝວດຫຼັກຊັບ</a></li>@endif
                            @if(!empty($data_role['viewCate']))<li><a href="{{route('category')}}">ຂໍ້ມູນປະເພດຫຼັກຊັບ</a></li>@endif
                            @if(!empty($data_role['viewVil']))<li><a href="{{route('village')}}">ຂໍ້ມູນບ້ານ</a></li>@endif
                            @if(!empty($data_role['viewDis']))<li><a href="{{route('district')}}">ຂໍ້ມູນເມືອງ</a></li>@endif
                            @if(!empty($data_role['viewProv']))<li><a href="{{route('province')}}">ຂໍ້ມູນແຂວງ</a></li>@endif
                            </ul>
                        </li>
                    </ul>
                </li>
                @endif

                @if(!empty($data_role['viewCus']))
                <li class="has-submenu">
                    <a href="{{route('customer')}}"> <i class="mdi mdi-account-badge-horizontal"></i>ຂໍ້ມູນລູກຄ້າ</a>
                </li>
                @endif

                @if(!empty($data_role['viewPro']))
                <li class="has-submenu">
                    <a href="{{route('product')}}"> <i class="mdi mdi-purse"></i>ຂໍ້ມູນຫຼັກຊັບ</a>
                </li>
                @endif

                @if(!empty($data_role['addPawn']) || !empty($data_role['viewPawnPend']) || !empty($data_role['viewPawnPay']) || !empty($data_role['viewPawnAll']) || !empty($data_role['viewPawnTran']) || !empty($data_role['viewPawnEx']) || !empty($data_role['viewPawnFinish']) || !empty($data_role['viewPawnReject']) )
                <li class="has-submenu">
                    <a href="#" class="waves-effect waves-light">
                        <i class="mdi mdi-diamond-stone"></i>ການບໍລິການ
                    </a>
                    <ul class="submenu megamenu">

                        <li>
                            <ul>
                            @if(!empty($data_role['addPawn']))<li><a href="{{route('create-pawn')}}">ສ້າງສັນຍາສິນເຊື່ອ</a></li>@endif
                            @if(!empty($data_role['viewPawnPend']))<li><a href="{{route('pending-pawn')}}">ສິນເຊື່ອລໍຖ້າອະນຸມັດ</a></li>@endif
                            @if(!empty($data_role['viewPawnPay']))<li><a href="{{route('pending-pay-pawn')}}">ສິນເຊື່ອລໍຖ້າຊຳລະ</a></li>@endif
                            @if(!empty($data_role['viewPawnAll']))<li><a href="{{route('all-pawn')}}">ສິນເຊື່ອທັງໝົດ</a></li>@endif
                            @if(!empty($data_role['viewPawnTran']))<li><a href="{{route('movement-pawn')}}">ສິນເຊື່ອທີ່ຍັງເຄື່ອນໄຫວ</a></li>@endif
                            @if(!empty($data_role['viewPawnEx']))<li><a href="{{route('expire-pawn')}}">ສິນເຊື່ອກາຍກຳນົດ</a></li>@endif
                            @if(!empty($data_role['viewPawnFinish']))<li><a href="{{route('finish-pawn')}}">ສິນເຊື່ອຊຳລະສຳເລັດ</a></li>@endif
                            @if(!empty($data_role['viewPawnReject']))<li><a href="{{route('cancel-pawn')}}">ສິນເຊື່ອຍົກເລີກ</a></li>@endif
                            </ul>
                        </li>

                    </ul>
                </li>
                @endif

                @if(!empty($data_role['viewCrc']) || !empty($data_role['viewCost']) || !empty($data_role['viewReportCost']))
                <li class="has-submenu">
                    <a href="#">
                        <i class="mdi mdi-settings-outline"></i>ຂໍ້ມູນແຫຼ່ງທຶນ
                    </a>
                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                            @if(!empty($data_role['viewCrc']))<li><a href="{{route('currency')}}">ສະກຸນເງິນ</a></li>@endif
                            @if(!empty($data_role['viewCost']))<li><a href="{{route('so-cost')}}">ແຫຼ່ງທຶນ</a></li>@endif
                            @if(!empty($data_role['viewReportCost']))<li><a href="{{route('report-cost')}}">ລາຍງານແຫຼ່ງທຶນ</a></li>@endif
                            </ul>
                        </li>

                    </ul>
                </li>
                @endif

                @if(!empty($data_role['viewReportFinan']) || !empty($data_role['viewReportDaily']) || !empty($data_role['viewReportPawn']) || !empty($data_role['viewReportProduct']) || !empty($data_role['viewReportCus']))
                <li class="has-submenu">
                    <a href="#">
                        <i class="mdi mdi-file-document-outline"></i>ລາຍງານ
                    </a>
                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                            @if(!empty($data_role['viewReportFinan']))<li><a href="{{route('report-financail')}}">ລາຍງານຖານະການເງິນ</a></li>@endif
                            @if(!empty($data_role['viewReportDaily']))<li><a href="{{route('report-daily-bankroll')}}">ລາຍງານບັນຊີປະຈຳວັນ</a></li>@endif
                            @if(!empty($data_role['viewReportPawn']))<li><a href="{{route('report-all-pawn')}}">ລາຍງານຂໍ້ມູນສິນເຊື່ອທັງໝົດ</a></li>@endif
                            @if(!empty($data_role['viewReportProduct']))<li><a href="{{route('report-product')}}">ລາຍງານສິຖິຕິຫຼັກຊັບ</a></li>@endif
                            @if(!empty($data_role['viewReportCus']))<li><a href="{{route('report-customer')}}">ລາຍງານສະຖິຕິສິນເຊື່ອລູກຄ້າ</a></li>@endif
                            </ul>
                        </li>
                    </ul>
                </li>
                @endif

                @if(auth()->user()->rolename->name == 'admin')
                <li class="has-submenu">
                    <a href="#"> <i class="mdi mdi-monitor-speaker"></i>ຂໍ້ມູນໃຊ້ງານລະບົບ
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('role')}}">ສິດການເຂົ້າເຖິງ</a></li>
                        <li><a href="{{route('user')}}">ຂໍ້ມູນຜູ້ໃຊ້ລະບົບ</a></li>
                        <li><a href="{{route('branch')}}">ຂໍ້ມູນສາຂາ</a></li>
                    </ul>
                </li>
                @endif
            </ul>
            <!-- End navigation menu -->

            <div class="clearfix"></div>
        </div>
        <!-- end #navigation -->
    </div>
    <!-- end container -->
</div>
<!-- end navbar-custom -->