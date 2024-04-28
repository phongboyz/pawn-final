<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ສັນຍາຊວດຈຳ</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    .next-page {
        page-break-after: always;
    }
    </style>
</head>

<body>
    <div class="row" style="padding-left: 50px;padding-right: 30px;">
        <div class="col-12">
            <table width="100%">
                <tr>
                    <td style="padding-left: 30px;vertical-align: bottom;" class="text-center">
                        <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 16px; padding-top: 0px;">
                            <br><b>ຕາຕະລາງການຊຳລະເງິນກູ້ຢືມ</b><br><br>
                        </span>
                    </td>
                </tr>
            </table>

            <table width="100%">
                <tr>
                    <td width="15%" style="text-align: right;padding-right: 5px;"><span
                            style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">ເລກທີສັນຍາ</span>
                    </td>
                    <td width="35%">
                        <input type="text" name="no" id="no" class="form-control" value="{{$data->code}}"
                            style="background-color: white;text-align: center;font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px;"
                            disabled>
                    </td>
                    <td width="50%" style="text-align:center;">
                        <span
                            style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 18px; padding-top: 0px;"><b>ຊຳລະເງິນກູ້ຢືມຜ່ານທະນາຄານການຄ້າ</b></span>
                    </td>
                </tr>
                <tr>
                    <td width="15%" style="text-align: right;padding-right: 5px;"><span
                            style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">ຊື່
                            ແລະ ນາມສະກຸນ</span></td>
                    <td width="35%">
                        <input type="text" name="no" id="no" class="form-control"
                            value="{{$data->cusname->name}} {{$data->cusname->lname}}"
                            style="background-color: white;text-align: center;font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px;"
                            disabled>
                    </td>
                    <td width="50%" style="text-align:center;">
                        <span style="font-family: 'Times New Roman';font-size: 18px; padding-top: 0px;"><b>SOMPHONE
                                BOUBPHACHANH.MR</b></span>
                    </td>
                </tr>
                <tr>
                    <td width="15%" style="text-align: right;padding-right: 5px;"><span
                            style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">ທີ່ຢູ່ປະຈຸບັນ</span>
                    </td>
                    <td width="35%">
                        <input type="text" name="no" id="no" class="form-control"
                            value="@if($data->cusname->address){{$data->cusname->address}}@else - @endif"
                            style="background-color: white;text-align: center;font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px;"
                            disabled>
                    </td>
                    <td rowspan="4" width="50%" style="text-align:center;">
                        <img src="{{public_path('backend/img/QR.png')}}" width="140px" height="140px" alt="kajum">
                    </td>
                </tr>
                <tr>
                    <td width="15%" style="text-align: right;padding-right: 5px;"><span
                            style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">ຫຼັກຊັບຄ້ຳປະກັນ</span>
                    </td>
                    <td width="35%">
                        <input type="text" name="no" id="no" class="form-control"
                            value="{{$data->proname->muadname->name}}, {{$data->proname->catename->name}}, {{$data->proname->name}}"
                            style="background-color: white;text-align: center;font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px;"
                            disabled>
                    </td>
                </tr>
                <tr>
                    <td width="15%" style="text-align: right;padding-right: 5px;"><span
                            style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">ທີ່ຕັ້ງຫຼັກຊັບ
                            N-E</span></td>
                    <td width="35%">
                        <input type="text" name="no" id="no" class="form-control"
                            value="@if($data->proname->location){{$data->proname->location}}@else - @endif"
                            style="background-color: white;text-align: center;font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px;"
                            disabled>
                    </td>
                </tr>
                <tr>
                    <td width="15%" style="text-align: right;padding-right: 5px;"><span
                            style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">ອື່ນໆ</span>
                    </td>
                    <td width="35%">
                        <input type="text" name="no" id="no" class="form-control"
                            value="@if($data->note){{$data->note}}@else - @endif"
                            style="background-color: white;text-align: center;font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px;"
                            disabled>
                    </td>
                </tr>
            </table>
            <br>

            <table width="100%" border="2">
                <tr>
                    <td class="text-center"
                        style="border: 2px solid;border-bottom: 2px solid;font-size: 12px;font-family: 'DejaVu Sans','Phetsarath OT'">
                        ງວດ</td>
                    <td class="text-center"
                        style="border: 2px solid;border-bottom: 2px solid;font-size: 12px;font-family: 'DejaVu Sans','Phetsarath OT'">
                        ວັນຄົບກຳນົດ</td>
                    <td class="text-center"
                        style="border: 2px solid;border-bottom: 2px solid;font-size: 12px;font-family: 'DejaVu Sans','Phetsarath OT'">
                        ຕົ້ນທຶນຕໍ່ງວດ</td>
                    <td class="text-center"
                        style="border: 2px solid;border-bottom: 2px solid;font-size: 12px;font-family: 'DejaVu Sans','Phetsarath OT'">
                        ດອກເບ້ຍ</td>
                    <td class="text-center"
                        style="border: 2px solid;border-bottom: 2px solid;font-size: 12px;font-family: 'DejaVu Sans','Phetsarath OT'">
                        ຄ່າທຳນຽມ</td>
                    <td class="text-center"
                        style="border: 2px solid;border-bottom: 2px solid;font-size: 12px;font-family: 'DejaVu Sans','Phetsarath OT'">
                        ລວມຕ້ອງຈ່າຍ</td>
                    <td class="text-center"
                        style="border: 2px solid;border-bottom: 2px solid;font-size: 12px;font-family: 'DejaVu Sans','Phetsarath OT'">
                        ຜູ້ຮັບເງິນ</td>
                </tr>
                @php $moneys=0;$ints=0;$feess=0; @endphp
                @foreach ($detail as $item)
                <tr>
                    <td class="text-center" style="border: 2px solid;border-bottom: 2px solid;font-size: 12px;">
                        {{$item->apm_count}}</td>
                    <td class="text-center" style="border: 2px solid;border-bottom: 2px solid;font-size: 12px;">
                        {{date('d-m-Y',strtotime($item->apm_date))}}</td>
                    <td class="text-center" style="border: 2px solid;border-bottom: 2px solid;font-size: 12px;">
                        {{number_format($item->apm_money,2,',','.')}}</td>
                    <td class="text-center" style="border: 2px solid;border-bottom: 2px solid;font-size: 12px;">
                        {{number_format($item->apm_int,2,',','.')}}</td>
                    <td class="text-center" style="border: 2px solid;border-bottom: 2px solid;font-size: 12px;">
                        @if($item->apm_fees != 0)
                        {{number_format($item->apm_fees,2,',','.')}} @else - @endif</td>
                    <td class="text-center" style="border: 2px solid;border-bottom: 2px solid;font-size: 12px;">
                        {{number_format($item->apm_money + $item->apm_int + $item->apm_fees,2,',','.')}}
                    </td>
                    <td style="border: 2px solid;border-bottom: 2px solid;font-size: 12px;"></td>
                </tr>

                @php $moneys += $item->apm_money; $ints += $item->apm_int; $feess += $item->apm_fees;
                @endphp
                @endforeach

                <tr>
                    <td class="text-center"
                        style="border: 2px solid;border-bottom: 2px solid;font-size: 12px;font-family: 'DejaVu Sans','Phetsarath OT'"
                        colspan="2"><b>ລວມ :</b></td>
                    <td class="text-center" style="border: 2px solid;border-bottom: 2px solid;font-size: 12px;">
                        {{number_format($data->money,2,',','.')}}
                    </td>
                    <td class="text-center" style="border: 2px solid;border-bottom: 2px solid;font-size: 12px;">
                        {{number_format($ints,2,',','.')}}</td>
                    <td class="text-center" style="border: 2px solid;border-bottom: 2px solid;font-size: 12px;">
                        @if($feess != 0)
                        {{number_format($feess,2,',','.')}} @else - @endif</td>
                    <td class="text-center" style="border: 2px solid;border-bottom: 2px solid;font-size: 12px;">
                        {{number_format($data->money + $ints + $feess,2,',','.')}}</td>
                    <td style="border: 2px solid;border-bottom: 2px solid;font-size: 12px;"></td>
                </tr>
            </table>
        </div>
    </div>

</body>

</html>