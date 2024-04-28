<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ໃບບິນຮັບເງິນ</title>

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
            <div class="col-2">
                <table width="100%">
                    <tr>
                        <td colspan="4" class="text-center">
                            <span
                                style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-bottom: 0px;">ສາທາລະນະລັດ
                                ປະຊາທິປະໄຕ ປະຊາຊົນລາວ</span><br>
                            <span
                                style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">ສັນຕິພາບ
                                ເອກະລາດ
                                ປະຊາທິປະໄຕ ເອກະພາບ ວັດທະນາຖາວອນ</span><br>
                                <span>------------&&&-----------</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="30%" class="text-center" colspan="2">
                            <span
                                style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-bottom: 0px; padding-top: 0px;"">ສະຖາບັນການເງິນ</span><br>
                        <span
                            style=" font-family: 'DejaVu Sans' ,'Phetsarath OT';font-size: 12px; padding-top:
                                0px;">ໂຮງຊວດຈຳ
                                ສົມພອນ ຈຳກັດຜູ້ດຽວ </span>
                        </td>
                        <td width="70%" colspan="2"></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{public_path('backend/img/QR.png')}}" width="100px" height="100px" alt="kajum">
                        </td>
                        <td>
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                                ຊໍາລະເງິນກູ້ຜ່ານທະນາຄານ <br>
                                ການຄ້າ ເລກບັນຊີ ຫຼື QR <br>
                                1651222169948
                            </span>
                        </td>
                        <td width="40%" style="padding-left: 30px;vertical-align: bottom;">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 16px; padding-top: 0px;">
                                <b>ໃບຮັບເງິນ</b>
                                <br>(ງວດ​ {{$detail->apm_count}})
                            </span>
                        </td>
                        <td width="30%" style="text-align: right;">
                            <span
                                style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px;color:red; padding-top: 0px;">
                                ເລກທີ : {{$data['code']}} <br>
                            </span>
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                                ວັນທີ : {{date('d/m/Y',strtotime($data['created_date']))}} <br>
                            </span>
                            <span
                                style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 20px;">
                                <br>
                                <img src="data:image/jpeg;base64,{{DNS1D::getBarcodeJPG($data['code'], 'C39+',3,33,array(1,1,1), true)}}"
                                    alt="barcode" width="80%" height="30px" />
                            </span>
                        </td>
                    </tr>
                    <tr style="">
                        <td colspan="4" style="text-align: justify; text-justify: inter-word;padding-top: 30px;">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                            - ອີງຕາມ ສັນຍາກູ້ຢືມເງິນ ໂຮງຊວດຈຳ ສົມພອນ ເລກທີ {{$data->code}} ລົງວັນທີ {{date('d/m/Y',strtotime($data->created_date))}}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align: justify; text-justify: inter-word;">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                            ຊື່ ແລະ ນາມສະກຸນ : 
                            @if($data->cusname->gender == 'm') ທ້າວ @else ນາງ @endif
                            {{$data->cusname->name}} {{$data->cusname->lname}}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align: justify; text-justify: inter-word;">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                            ທີີ່ຢູ່ປັດຈຸບັນໜ່ວຍບ້ານ: @if($data->cusname->address){{$data->cusname->address}} @else ............................... @endif <br>
                            </span>
                        </td>
                    </tr>
                </table>
                <table width="100%" border="2">
                    <tr>
                        <th class="text-center" style="border: 2px solid;border-bottom: 2px solid;"><span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">ລ/ດ</span></th>
                        <th class="text-center" style="border: 2px solid;border-bottom: 2px solid;"><span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">ລາຍການ</span></th>
                        <th class="text-center" style="border: 2px solid;border-bottom: 2px solid;"><span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">ຈຳນວນເງິນ ({{$data->crcname->name}})</span></th>
                    </tr>
                    <tr>
                        <td class="text-center" style="border: 2px solid;border-bottom: 2px solid;">1</td>
                        <td class="text-center" style="border: 2px solid;border-bottom: 2px solid;"><span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">ຕົ້ນທຶນຊຳລະ</span></td>
                        <td class="text-center" style="border: 2px solid;border-bottom: 2px solid;text-align: center;">{{number_format($detail->pay,2,',','.')}} <br></td>
                    </tr>
                    @if($detail->int != 0)
                    <tr>
                        <td class="text-center" style="border: 2px solid;border-bottom: 2px solid;">2</td>
                        <td class="text-center" style="border: 2px solid;border-bottom: 2px solid;"><span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">ດອກເບ້ຍຊຳລະ</span></td>
                        <td class="text-center" style="border: 2px solid;border-bottom: 2px solid;text-align: center;">{{number_format($detail->int,2,',','.')}} <br></td>
                    </tr>
                    @endif
                    @if($detail->fees != 0)
                    <tr>
                        <td class="text-center" style="border: 2px solid;border-bottom: 2px solid;">3</td>
                        <td class="text-center" style="border: 2px solid;border-bottom: 2px solid;"><span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">ຄ່າທຳນຽມ</span></td>
                        <td class="text-center" style="border: 2px solid;border-bottom: 2px solid;text-align: center;">{{number_format($detail->fees,2,',','.')}} <br></td>
                    </tr>
                        @if($detail->int_adj != 0)
                        <tr>
                            <td class="text-center" style="border: 2px solid;border-bottom: 2px solid;">4</td>
                            <td class="text-center" style="border: 2px solid;border-bottom: 2px solid;"><span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">ດອກເບ້ຍປັບໄໝ</span></td>
                            <td class="text-center" style="border: 2px solid;border-bottom: 2px solid;text-align: center;">{{number_format($detail->int_adj,2,',','.')}} <br></td>
                        </tr>
                        @endif
                    @else
                        @if($detail->int_adj != 0)
                        <tr>
                            <td class="text-center" style="border: 2px solid;border-bottom: 2px solid;">3</td>
                            <td class="text-center" style="border: 2px solid;border-bottom: 2px solid;"><span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">ດອກເບ້ຍປັບໄໝ</span></td>
                            <td class="text-center" style="border: 2px solid;border-bottom: 2px solid;text-align: center;">{{number_format($detail->int_adj,2,',','.')}} <br></td>
                        </tr>
                        @endif
                    @endif
                    
                    <tr>
                        <td style="border: 2px solid;border-bottom: 2px solid;"></td>
                        <td class="text-center" style="border: 2px solid;border-bottom: 2px solid;"><span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">ລວມ :</span></td>
                        <td class="text-center" style="border: 2px solid;border-bottom: 2px solid;text-align: center;">{{number_format($detail->total,2,',','.')}}</td>
                    </tr>
                </table>
                <table width="100%">
                    <tr>
                        <td colspan="2" style="text-align: right;">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                              <br>  ນະຄອນຫຼວງວຽງຈັນ, ວັນທີ {{date('d/m/Y',strtotime($data['created_date']))}}
                            </span>
                        </td>
                    </tr>
                </table>
                <table width="100%">
                    <tr>
                        <td width="30%" class="text-center">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                                <b>ຜູ້ຮັບເງິນ</b>
                            </span>
                        </td>
                        <td width="40%"></td>
                        <td width="30%" class="text-center">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                                <b>ຜູ້ຈ່າຍເງິນ</b>
                            </span>
                        </td>
                    </tr>
                    <td width="30%" class="text-center">
                        <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                            <img src="{{public_path('backend/img/KAJUM.png')}}" width="150px" height="180px" alt="line">
                        </span>
                    </td>
                    <td width="40%"></td>
                    <td width="30%" style="vertical-align: bottom;">
                        <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-left: 50px;">
                            @if($data->cusname->gender == 'm') ທ້າວ @else ນາງ @endif
                            {{$data->cusname->name}} {{$data->cusname->lname}}
                        </span>
                    </td>
                    </tr>
                </table>
            </div>
            <div class="col-10"></div>
        </div>

</body>

</html>