<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ການບໍລິການ</a></li>
                        <li class="breadcrumb-item active">ລາຍລະອຽດສິນເຊື່ອ</li>
                    </ol>
                </div>
                <h4 class="page-title">ລາຍລະອຽດສິນເຊື່ອ</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-12">
                        <a href="{{route('pdf-bill-pawn',$pawnid)}}" target="_bank" class="btn btn-info phetsarath-font"><i class="mdi mdi-file-document-box-outline"></i>
                            ສັນຍາຊວດຈຳ</a>
                        <button class="btn btn-primary phetsarath-font"><i class="mdi mdi-file-table-box-multiple-outline"></i>
                            ແຜນການຊຳລະ</button>
                        <button class="btn btn-orange phetsarath-font"><i class="mdi mdi-cash-usd-outline"></i>
                            ຊຳລະ</button>
                        <a href="{{route('create-pawn')}}" class="btn btn-pink float-right phetsarath-font"><i
                                class="mdi mdi-backspace"></i> ກັບຄືນ</a>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <h4 style="color:black;"><b>ຕາຕະລາງ ການຊຳລະເງິນກູ້ຢືມ</b></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <table width="100%">
                            <tr>
                                <td width="50%" class="text-right"><span class="px-2">ເລກທີສັນຍາ</span></td>
                                <td width="50%">
                                    <input type="text" name="no" id="no" class="form-control" value="{{$pawn->code}}"
                                        style="background-color: white;text-align: center;font-family:'Phetsarath OT'"
                                        disabled>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%" class="text-right"><span class="px-2">ຊື່ ແລະ ນາມສະກຸນ</span></td>
                                <td width="50%">
                                    <input type="text" name="no" id="no" class="form-control"
                                        value="{{$pawn->cusname->name}} {{$pawn->cusname->lname}}"
                                        style="background-color: white;text-align: center;font-family:'Phetsarath OT'"
                                        disabled>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%" class="text-right"><span class="px-2">ທີ່ຢູ່ປະຈຸບັນ</span></td>
                                <td width="50%">
                                    <input type="text" name="no" id="no" class="form-control"
                                        value="{{$pawn->cusname->address}}"
                                        style="background-color: white;text-align: center;font-family:'Phetsarath OT'"
                                        disabled>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%" class="text-right"><span class="px-2">ຫຼັກຊັບຄ້ຳປະກັນ</span></td>
                                <td width="50%">
                                    <input type="text" name="no" id="no" class="form-control"
                                        value="{{$pawn->proname->muadname->name}}, {{$pawn->proname->catename->name}}, {{$pawn->proname->name}} {{$pawn->proname->note}}"
                                        style="background-color: white;text-align: center;font-family:'Phetsarath OT'"
                                        disabled>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%" class="text-right"><span class="px-2">ທີ່ຕັ້ງຫຼັກຊັບ N-E</span></td>
                                <td width="50%">
                                    <input type="text" name="no" id="no" class="form-control"
                                        value="{{$pawn->proname->location}}"
                                        style="background-color: white;text-align: center;font-family:'Phetsarath OT'"
                                        disabled>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%" class="text-right"><span class="px-2">ອື່ນໆ</span></td>
                                <td width="50%">
                                    <input type="text" name="no" id="no" class="form-control" value="{{$pawn->note}}"
                                        style="background-color: white;text-align: center;font-family:'Phetsarath OT'"
                                        disabled>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-6">
                        <table width="100%">
                            <tr>
                                <td width="30%" class="text-right"><span class="px-2">ວົງເງິນກູ້ຢືມ</span></td>
                                <td width="50%">
                                    <input type="text" name="no" id="no" class="form-control"
                                        value="{{number_format($pawn->money,2,',','.')}}"
                                        style="background-color: white;text-align: center;font-family:'Phetsarath OT'"
                                        disabled>
                                </td>
                                <td width="20%"><span class="px-2">{{$pawn->crcname->name}}</span></td>
                            </tr>
                            <tr>
                                <td width="30%" class="text-right"><span class="px-2">ໄລຍະເວລາກູ້ຢືມ</span></td>
                                <td width="50%">
                                    <input type="text" name="no" id="no" class="form-control"
                                        value="{{$pawn->count_date}}"
                                        style="background-color: white;text-align: center;font-family:'Phetsarath OT'"
                                        disabled>
                                </td>
                                <td width="20%"><span class="px-2">ວັນ</span></td>
                            </tr>
                            <tr>
                                <td width="30%" class="text-right"><span class="px-2">ງວດຊຳລະ</span></td>
                                <td width="50%">
                                    <input type="text" name="no" id="no" class="form-control" value="{{$pawn->nguad}}"
                                        style="background-color: white;text-align: center;font-family:'Phetsarath OT'"
                                        disabled>
                                </td>
                                <td width="20%"><span class="px-2">ຄັ້ງ</span></td>
                            </tr>
                            <tr>
                                <td width="30%" class="text-right"><span class="px-2">ດອກເບ້ຍ
                                        {{number_format($pawn->interest_percent,2,',','.')}} %</span></td>
                                <td width="50%">
                                    <input type="text" name="no" id="no" class="form-control"
                                        value="{{number_format((($pawn->money*$pawn->interest_percent)/100),2,',','.')}}"
                                        style="background-color: white;text-align: center;font-family:'Phetsarath OT'"
                                        disabled>
                                </td>
                                <td width="20%"><span class="px-2">{{$pawn->crcname->name}} / ເດືອນ</span></td>
                            </tr>
                            <tr>
                                <td width="30%" class="text-right"><span class="px-2">ຄ່າທຳນຽມ
                                        {{number_format($pawn->fees_percent,2,',','.')}} %</span></td>
                                <td width="50%">
                                    <input type="text" name="no" id="no" class="form-control"
                                        value="{{number_format((($pawn->money*$pawn->fees_percent)/100),2,',','.')}}"
                                        style="background-color: white;text-align: center;font-family:'Phetsarath OT'"
                                        disabled>
                                </td>
                                <td width="20%"><span class="px-2">{{$pawn->crcname->name}} / ເດືອນ</span></td>
                            </tr>
                            <tr>
                                <td width="30%" class="text-right"><span class="px-2">ດອກເບ້ຍປັບໄໝ
                                        {{number_format($pawn->adj_percent,2,',','.')}} %</span></td>
                                <td width="50%">
                                    <input type="text" name="no" id="no" class="form-control"
                                        value="{{number_format((($pawn->money*$pawn->adj_percent)/100),2,',','.')}}"
                                        style="background-color: white;text-align: center;font-family:'Phetsarath OT'"
                                        disabled>
                                </td>
                                <td width="20%"><span class="px-2">{{$pawn->crcname->name}} / ເດືອນ</span></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 py-2">
                        <table width="100%" border="2" style="color: black;">
                            <tr>
                                <td colspan="6" class="text-center" style="font-size: 14px;"><b>ແຜນຊຳລະເງິນກູ້ຢືມ</b></td>
                            </tr>
                            <tr>
                                <td class="text-center" style="font-size: 14px;">ງວດ</td>
                                <td class="text-center" style="font-size: 14px;">ວັນຄົບກຳນົດ</td>
                                <td class="text-center" style="font-size: 14px;">ຕົ້ນທຶນຕໍ່ງວດ</td>
                                <td class="text-center" style="font-size: 14px;">ດອກເບ້ຍ</td>
                                <td class="text-center" style="font-size: 14px;">ຄ່າທຳນຽມ</td>
                                <td class="text-center" style="font-size: 14px;">ລວມຕ້ອງຈ່າຍ</td>
                            </tr>
                            @php $moneys=0;$ints=0;$feess=0; @endphp
                            @foreach ($detail as $item)
                            <tr>
                                <td class="text-center" style="font-size: 14px;">{{$item->apm_count}}</td>
                                <td class="text-center" style="font-size: 14px;">
                                    {{date('d-m-Y',strtotime($item->apm_date))}}</td>
                                <td class="text-center" style="font-size: 14px;">
                                    {{number_format($item->apm_money,2,',','.')}}</td>
                                <td class="text-center" style="font-size: 14px;">
                                    {{number_format($item->apm_int,2,',','.')}}</td>
                                <td class="text-center" style="font-size: 14px;">@if($item->apm_fees != 0)
                                    {{number_format($item->apm_fees,2,',','.')}} @else - @endif</td>
                                <td class="text-center" style="font-size: 14px;">
                                    {{number_format($item->apm_money + $item->apm_int + $item->apm_fees,2,',','.')}}
                                </td>
                            </tr>

                            @php $moneys += $item->apm_money; $ints += $item->apm_int; $feess += $item->apm_fees;
                            @endphp
                            @endforeach

                            <tr>
                                <td class="text-center" style="font-size: 14px;" colspan="2"><b>ລວມ :</b></td>
                                <td class="text-center" style="font-size: 14px;">{{number_format($moneys,2,',','.')}}
                                </td>
                                <td class="text-center" style="font-size: 14px;">{{number_format($ints,2,',','.')}}</td>
                                <td class="text-center" style="font-size: 14px;">@if($feess != 0)
                                    {{number_format($feess,2,',','.')}} @else - @endif</td>
                                <td class="text-center" style="font-size: 14px;">
                                    {{number_format($moneys + $ints + $feess,2,',','.')}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-7 py-2">
                        <table width="100%" border="2" style="color: black;">
                            <tr>
                                <td colspan="13" class="text-center" style="font-size: 14px;"><b>ຊຳລະສິນເຊື່ອຕົວຈິງ</b></td>
                            </tr>
                            <tr>
                                <td class="text-center" style="font-size: 14px;">ງວດ</td>
                                <td class="text-center" style="font-size: 14px;">ວັນຊຳລະ</td>
                                <td class="text-center" style="font-size: 14px;">ວັນກາຍກຳນົດ</td>
                                <td class="text-center" style="font-size: 14px;">ຕົ້ນທຶນ</td>
                                <td class="text-center" style="font-size: 14px;">ດອກເບ້ຍ</td>
                                <td class="text-center" style="font-size: 14px;">ຄ່າທຳນຽມ</td>
                                <td class="text-center" style="font-size: 14px;">ດອກເບ້ຍປັບໄໝ</td>
                                <td class="text-center" style="font-size: 14px;">ສ່ວນຫຼຸດ</td>
                                <td class="text-center" style="font-size: 14px;">ລວມຍອດຊຳລະ</td>
                                <td class="text-center" style="font-size: 14px;">ສະຖານະ</td>
                                <td class="text-center" style="font-size: 14px;">ພງ</td>
                                <td class="text-center" style="font-size: 14px;">ໃບບິນ</td>
                            </tr>
                            @php $pay_expire=0; $pay_moneys=0;$pay_ints=0;$pay_feess=0;$pay_int_adj=0;$pay_discount=0; @endphp
                            @foreach ($detailf as $item)
                                <tr>
                                    <td class="text-center" style="font-size: 14px;">{{$item->nguad}}</td>
                                    <td class="text-center" style="font-size: 14px;">{{date('d-m-Y',strtotime($item->pay_date))}}</td>
                                    <td class="text-center" style="font-size: 14px;">{{$item->expire_day}}</td>
                                    <td class="text-center" style="font-size: 14px;">{{number_format($item->pay,2,',','.')}}</td>
                                    <td class="text-center" style="font-size: 14px;">{{number_format($item->int,2,',','.')}}</td>
                                    <td class="text-center" style="font-size: 14px;">@if($item->fees != 0)
                                        {{number_format($item->fees,2,',','.')}} @else - @endif</td>
                                    <td class="text-center" style="font-size: 14px;">@if($item->int_adj != 0)
                                        {{number_format($item->int_adj,2,',','.')}} @else - @endif</td>
                                        <td class="text-center" style="font-size: 14px;">@if($item->discount != 0)
                                        {{number_format($item->discount,2,',','.')}} @else - @endif</td>
                                    <td class="text-center" style="font-size: 14px;">
                                        {{number_format(($item->pay + $item->int + $item->fees + $item->int_adj) - $item->discount,2,',','.')}}</td>
                                    <td class="text-center" style="font-size: 14px;">
                                        @if ($item->status == 't')
                                            ຄ້າງຊຳລະ
                                        @elseif($item->status == 'f')
                                            ຊຳລະສຳເລັດ
                                        @endif
                                    </td>
                                    <td class="text-center" style="font-size: 14px;">{{$item->username->username}}</td>
                                    <td class="text-center" style="font-size: 14px;">
                                    <button class="btn btn-orange"><i class="mdi mdi-file-link"></i></button>
                                    </td>
                                </tr>
                                @php $pay_expire += $item->expire_day; $pay_moneys += $item->pay; $pay_ints += $item->int; $pay_feess += $item->fees; $pay_int_adj += $item->int_adj; $pay_discount += $item->discount; @endphp
                            @endforeach

                            @if ($detailc)
                            <tr>
                                <td class="text-center" style="font-size: 14px;" colspan="2"><b>ລວມ :</b></td>
                                <td class="text-center" style="font-size: 14px;">{{$pay_expire}}</td>
                                <td class="text-center" style="font-size: 14px;">{{number_format($pay_moneys,2,',','.')}}
                                </td>
                                <td class="text-center" style="font-size: 14px;">{{number_format($pay_ints,2,',','.')}}</td>
                                <td class="text-center" style="font-size: 14px;">@if($pay_feess != 0)
                                    {{number_format($pay_feess,2,',','.')}} @else - @endif</td>
                                <td class="text-center" style="font-size: 14px;">@if($pay_int_adj != 0)
                                    {{number_format($pay_int_adj,2,',','.')}} @else - @endif</td>
                                <td class="text-center" style="font-size: 14px;">@if($pay_discount != 0)
                                    {{number_format($pay_discount,2,',','.')}} @else - @endif</td>
                                <td class="text-center" style="font-size: 14px;">
                                    {{number_format(($pay_moneys + $pay_ints + $pay_feess + $pay_int_adj) - $pay_discount,2,',','.')}}</td>
                            </tr>
                            @else
                            <tr>
                                <td class="text-center" style="font-size: 14px;" colspan="13">ຍັງບໍ່ມີການຊຳລະ</td>
                            </tr>
                            @endif

                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>