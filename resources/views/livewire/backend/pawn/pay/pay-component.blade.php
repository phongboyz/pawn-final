<div>
<div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ການບໍລິການ</a></li>
                        <li class="breadcrumb-item active">ຊຳລະເງິນກູ້ຢືມ</li>
                    </ol>
                </div>
                <h4 class="page-title">ຊຳລະເງິນກູ້ຢືມ</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-12">
                        @if($pawn->balance != 0)
                        <button class="btn btn-info phetsarath-font" wire:click="payNguad"><i class="mdi mdi-cash-usd-outline"></i>
                            ຊຳລະງວດ</button>
                        <button  class="btn btn-success phetsarath-font" wire:click="payAll"><i class="mdi mdi-check-underline-circle"></i>
                            ປິດງວດ</button>
                        @endif
                        <a href="{{route('pawn-detail',$pawnid)}}" class="btn btn-pink float-right phetsarath-font"><i
                                class="mdi mdi-backspace"></i> ກັບຄືນ</a>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                    <hr>
                        <h4 style="color:black;"><b>ຕາຕະລາງ ການຊຳລະເງິນກູ້ຢືມ</b></h4>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12 py-2">
                        <table width="100%" border="1" style="color: black;">
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
                                <td class="text-center" style="font-size: 14px;">ລວມຍອດຄ້າງຊຳລະ</td>
                                <td class="text-center" style="font-size: 14px;">ສະຖານະ</td>
                            </tr>
                            @php $pay_expire=0; $pay_moneys=0;$pay_ints=0;$pay_feess=0;$pay_int_adj=0;$pay_discount=0;$no=1; @endphp
                            @foreach ($detailf as $item)
                                <tr>
                                    <td class="text-center" style="font-size: 14px;">{{$item->apm_count}}</td>
                                    <td class="text-center" style="font-size: 14px;">{{date('d-m-Y',strtotime($item->apm_date))}}</td>
                                    <td class="text-center" style="font-size: 14px;">{{$item->expire_day}}</td>
                                    <td class="text-center" style="font-size: 14px;">{{number_format($item->apm_money,2,',','.')}}</td>
                                    <td class="text-center" style="font-size: 14px;">{{number_format($item->apm_int,2,',','.')}}</td>
                                    <td class="text-center" style="font-size: 14px;">@if($item->apm_fees != 0)
                                        {{number_format($item->apm_fees,2,',','.')}} @else - @endif</td>
                                    <td class="text-center" style="font-size: 14px;">@if($item->int_adj != 0)
                                        {{number_format($item->int_adj,2,',','.')}} @else - @endif</td>
                                    <td class="text-center" style="font-size: 14px;">
                                        {{number_format(($item->apm_money + $item->apm_int + $item->apm_fees + $item->int_adj) - $item->discount,2,',','.')}}</td>
                                    <td class="text-center" style="font-size: 14px;">
                                    @if($pawn->balance != 0)
                                        @if ($item->status == 't')
                                            <span class="text-danger">ຄ້າງຊຳລະ</span>
                                        @elseif($item->status == 'f')
                                            ຊຳລະສຳເລັດ
                                        @endif
                                    @else
                                        <span class="text-info">ປິດງວດ</span>
                                    @endif
                                    </td>
                                </tr>
                                @php $no++; $pay_expire += $item->expire_day; $pay_moneys += $item->apm_money; $pay_ints += $item->apm_int; $pay_feess += $item->apm_fees; $pay_int_adj += $item->int_adj; $pay_discount += $item->discount; @endphp
                            @endforeach

                            @if ($detailc)
                            <tr>
                                <td class="text-center" style="font-size: 14px;" colspan="2"><b>ລວມ :</b></td>
                                <td class="text-center" style="font-size: 14px;">{{$pay_expire}}</td>
                                <td class="text-center" style="font-size: 14px;">{{number_format(round($pay_moneys),2,',','.')}}
                                </td>
                                <td class="text-center" style="font-size: 14px;">{{number_format($pay_ints,2,',','.')}}</td>
                                <td class="text-center" style="font-size: 14px;">@if($pay_feess != 0)
                                    {{number_format($pay_feess,2,',','.')}} @else - @endif</td>
                                <td class="text-center" style="font-size: 14px;">@if($pay_int_adj != 0)
                                    {{number_format($pay_int_adj,2,',','.')}} @else - @endif</td>
                                <td class="text-center" style="font-size: 14px;">
                                    {{number_format(round(($pay_moneys + $pay_ints + $pay_feess + $pay_int_adj) - $pay_discount),2,',','.')}}</td>
                            </tr>
                            @else
                            <tr>
                                <td class="text-center" style="font-size: 14px;" colspan="13">ປິດງວດການຊຳລະ</td>
                            </tr>
                            @endif

                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @include('livewire.backend.pawn.modal-create.modal-pay-nguad')
</div>

@push('scripts')
<script>
$('.money').simpleMoneyFormat();

window.addEventListener('show-payNguad', event => {
    $('#payNguad-width-modal').modal('show');
})
window.addEventListener('hide-payNguad', event => {
    $('#payNguad-width-modal').modal('hide');
})
</script>
@endpush