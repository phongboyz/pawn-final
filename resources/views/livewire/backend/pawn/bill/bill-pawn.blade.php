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
    <div class="next-page">
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
                        <td  style="padding-left: 30px;" width="40%">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 16px; padding-top: 0px;">
                                <b>ສັນຍາຊວດຈຳ</b><br>
                            </span>
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ລະຫວ່າງ
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
                    <tr>
                        <td colspan="4" style="text-align: justify; text-justify: inter-word;">
                            <span
                                style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">1.
                                ຜູ້ໃຫ້ກູ້ຢືມເງິນ: ໂຮງຊວດຈໍາ ສົມພອນ ຈໍາກັດຜູ້ດຽວ ສໍານັກງານຕັ້ງຢູ່ ໜ່ວຍ 14 ບ. ທ່າພະລານໄຊ
                                ມ.
                                ສີສັດຕະນາກ ນະຄອນຫຼວງວຽງຈັນ ໂທລະສັບ: 020 97778889 ຕໍ່ໄປນີ້ເອີ້ນຫຍໍ້ວ່າ ຝ່າຍ " ກ "
                                ແລະ</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align: justify; text-justify: inter-word;">
                            <span
                                style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">2.
                                ຜູ້ກູ້ຢືມເງິນ: @if($data->cusname->gender == 'm') ທ້າວ @else ນາງ @endif
                                {{$data->cusname->name}} {{$data->cusname->lname}} ວັນເດືອນປີເກີດ:.............. ,ອາຊີບ:
                                ອື່ນໆ, ທີ່ຢູ່ປັດຈຸບັນບ້ານ: {{$data->cusname->address}} , ເບີໂທ:
                                {{$data->cusname->phone}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <span
                                style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">ຕໍ່ໄປນີ້ເອີ້ນຫຍໍ້ວ່າ
                                ຝ່າຍ "ຂ"</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align: center;">
                            <span
                                style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;"><b>ທັງສອງຝ່າຍໄດ້ຕົກລົງເປັນເອກະພາບກັນສ້າງສັນຍາຊວດຈຳນີ້ຂື້ນໂດຍມີເນື້ອໃນລາຍລະອຽດດັ່ງນີ້:</b></span>
                        </td>
                    </tr>

                </table>
                <table width="100%">
                    <tr>
                        <td width="10%">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                                <b> ມາດຕາ 1:</b>
                            </span>
                        </td>
                        <td width="90%" style="text-align: justify; text-justify: inter-word;">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                                ຝ່າຍ"ຂ" ໄດ້ຕົກລົງເອົາຫຼັກຊັບຂອງຕົນ ຫຼື ຫຼັກຊັບຂອງຄົນອື່ນທີ່ຍິນຍອມມອບໃຫ້ ຝ່າຍ"ກ"
                                ເພື່ອຄໍ້າປະກັນໜີ້ສິນ
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td width="10%"></td>
                        <td style="text-align: justify; text-justify: inter-word;">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                                - ຫຼັກຊັບຄໍ້າປະກັນ
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td width="10%"></td>
                        <td style="text-align: justify; text-justify: inter-word;">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                                &nbsp;&nbsp;ໝວດຫຼັກຊັບ:{{$data->proname->muadname->name}}
                                ,ປະເພດ:{{$data->proname->catename->name}} ,ຈໍານວນ: 1
                                {{$data->proname->catename->unitname}}
                                ,ລາຍລະອຽດ: {{$data->proname->name}}
                                , ຂໍ້ມູນເພີ່ມເຕີມ: {{$data->proname->note}}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"
                            style=" text-justify: inter-word; padding-left: 60px;padding-right: 30px;">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px;">
                                ຫຼັກຊັບທີ່ນໍາມາຄໍ້າປະກັນເງິນກູ້ຢືມຄັ້ງນີ້ຜູ້ກູ້ຢືມຂໍຮັບຮອງວ່າບໍ່ແມ່ນເຄື່ອງຜິດກົດໝາຍໃນກໍລະນີເຄື່ອງທີ່ນໍາມາຄໍ້າປະກັນ ນັ້ນໄດ້ຈາກການລັກ,
                                ສໍ້ໂກງ, ຍັກຍອກຊັບ, ຂ້າພະເຈົ້າເປັນຜູ້ເອົາເຄື່ອງມາຄໍ້າປະກັນຂໍຮັບຜິດຊອບທຸກກໍລະນີທີ່ເກີດ ຂຶ້ນແຕ່ພຽງຜູ້ດຽວ.
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td width="10%">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                                <b> ມາດຕາ 2:</b>
                            </span>
                        </td>
                        <td style="text-align: justify; text-justify: inter-word;">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                                ຝ່າຍ “ກ” ໄດ້ຕົກລົງອະນຸມັດເງິນກູ້ຢືມໃຫ້ແກ່ຝ່າຍ “ຂ” ແລະ ຝ່າຍ “ຂ” ໄດ້ຮັບເງິນຄົບຖ້ວນແລ້ວ
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td width="10%"></td>
                        <td style="text-align: justify; text-justify: inter-word;">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                                - ຈຳນວນເງິນກູ້ຢືມ {{number_format($data['money'],2,',','.')}} {{$data->crcname->name}},
                                ຈຳນວນເງິນເປັນຕົວໜັງສື:
                                {{$data['money_name']}}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td width="10%"></td>
                        <td style="text-align: justify; text-justify: inter-word;">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                                - ໄລຍະເວລາກູ້ຢືມ {{$data['count_date']}} ວັນ ວັນທີເປີດສັນຍາ
                                {{date('d/m/Y',strtotime($data['created_date']))}} ວັນທີໝົດສັນຍາ
                                {{date('d/m/Y',strtotime($data['expire_date']))}}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td width="10%"></td>
                        <td style="text-align: justify; text-justify: inter-word;">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                                - ອັດຕາດອກເບ້ຍ {{$data['interest_percent']}}% / ເດືອນ
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td width="10%"></td>
                        <td style="text-align: justify; text-justify: inter-word;">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                                - ຄ່າທຳນຽມການບໍລິການໂຮງຊວດຈຳສົມພອນ ຂອງວົງເງິນທີ່ໄດ້ອະນຸມັດໃຫ້ກູ້ຢືມ
                                {{number_format(($data['money'] * $data['fees_percent'])/100,2,',','.')}}
                                {{$data->crcname->name}}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td width="10%"></td>
                        <td style="text-align: justify; text-justify: inter-word;">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                                - ໃນກໍລະນີຜູ້ຊວດຈຳ ຊັກຊ້າບໍ່ມາຊຳລະເງິນຕາມຕາຕະລາງເງິນກູ້ ຝ່າຍ "ຂ" ເຕັມໃຈຈ່າຍຄ່າຕິດຕາມ,
                                ຄ່າທຳນຽມການດຳເນີນ
                                ການ, ຄ່າປ່ວຍການ, ຄ່າປັບໄໝ ແລະ ຄ່າໃຊ້ຈ່າຍອື່ນໆທີ່ກ່ຽວຂ້ອງ
                                {{number_format((($data['money'] * $data['adj_percent'])/100),2,',','.')}}
                                {{$data->crcname->name}} / ມື້
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td width="10%"></td>
                        <td style="text-align: justify; text-justify: inter-word;">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                                - ຈຸດປະສົງຂອງການນຳໃຊ້ເງິນກູ້: ອື່ນໆ
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td width="10%" width="10%" style="vertical-align: top;">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                                <b> ມາດຕາ 3:</b>
                            </span>
                        </td>
                        <td style="text-align: justify; text-justify: inter-word;">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                                ຜູ້ຊວດຈໍາຕ້ອງນໍາເອົາເງິນທັງຕົ້ນທຶນ ແລະ
                                ດອກເບ້ຍມາໄຖ່ເອົາຊັບຊວດຈໍາຂອງຕົນຄືນພາຍໃນກໍານົດເວລາທີ່ໄດ້ກໍານົດໃນມາດຕາ 2 ຂອງສັນຍາສະບັບນີ້.
                                ຖ້າຜູ້ຊວດຈໍາບໍ່ມາໄຖ່ເອົາຊັບຊວດຈໍາຄືນ ຕາມກໍານົດເວລາດັ່ງກ່າວ ຊັບຊວດ
                                ຈໍາກໍ່ຈະຕົກເປັນກໍາມະສິດຂອງຜູ້ຮັບຊວດຈໍາ ແລະ
                                ຜູ້ຊວດຈຳມີສິດຂາຍເລຫຼັກຊັບຄໍ້າປະກັນດັ່ງກ່າວເພື່ອມາຊຳລະໜີ້ສິນ ໂດຍປາດສະຈາກການໂຕ້ແຍງໃດໆ
                                ຍົກເວັ້ນໃນກໍລະນີທີ່ໄດ້ກໍານົດໃນ ມາດຕາ 10 ວັກ 3 ຂອງດໍາລັດ.
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td width="10%" style="vertical-align: top;">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                                <b> ມາດຕາ 4:</b>
                            </span>
                        </td>
                        <td style="text-align: justify; text-justify: inter-word;">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                                ໃນກໍລະນີເກີດມີຂໍ້ຂັດແຍ່ງໃນສັນຍາສະບັບນີ້ ຝ່າຍ "ກ" ແລະ ຝ່າຍ "ຂ" ຈະຮ່ວມກັນແກ້ໄຂຂັ້ນບ້ານ ຫຼື
                                ຂັ້ນສານ. ຄ່າໃຊ້ຈ່າຍຕ່າງໆທີ່ກ່ຽວຂ້ອງທັງໝົດໃນການດໍາເນີນຄະດີ ແມ່ນຖືກຮັບຜິດຊອບໂດຍ ຝ່າຍ “ຂ”
                                ທັງໝົດ.
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td width="10%" width="10%" style="vertical-align: top;">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                                <b> ມາດຕາ 5:</b>
                            </span>
                        </td>
                        <td style="text-align: justify; text-justify: inter-word;">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                                ສັນຍາສະບັບນີ້ໄດ້ເຮັດຂຶ້ນໂດຍມີການເຫັນດີເຫັນພ້ອມ, ສະເໝີພາບ,
                                ບໍ່ມີການບັງຄັບຈາກຝ່າຍໃດຝ່າຍໜຶ່ງ ແລະ ຍິນຍອມປະຕິບັດທຸກມາດຕາ,
                                ທຸກເງື່ອນໄຂຂອງສັນຍາສະບັບນີ້ທຸກປະການ ແລະ ມີຜົນສັກສິດນັບແຕ່ມື້ລົງລາຍເຊັນເປັນຕົ້ນໄປ.
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: right;">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                                ນະຄອນຫຼວງວຽງຈັນ, ວັນທີ {{date('d/m/Y',strtotime($data['created_date']))}}
                            </span>
                        </td>
                    </tr>
                </table>
                <table width="100%">
                    <tr>
                        <td width="30%" class="text-center">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                                <b>ໂຮງຊວດຈຳສົມພອນ</b>
                            </span>
                        </td>
                        <td width="40%"></td>
                        <td width="30%" class="text-center">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                                <b>ຜູ້ກູ້ຢືມເງິນ</b>
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
    </div>
    
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
                                <b>ໃບຖອນເງິນສົດ</b><br>
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
                            ທີີ່ຢູ່ປັດຈຸບັນໜ່ວຍບ້ານ: @if($data->cusname->address){{$data->cusname->address}} @else ............................... @endif
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
                        <td class="text-center" style="border: 2px solid;border-bottom: 2px solid;"><span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">ຖອນເງິນສົດຈາກບັນຊີ <br>ຈຳນວນເງິນເປັນຕົວໜັງສື :</span></td>
                        <td class="text-center" style="border: 2px solid;border-bottom: 2px solid;text-align: center;">{{number_format($data->money,2,',','.')}} <br> <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">({{$data->money_name}})</span></td>
                    </tr>
                    <tr>
                        <td style="border: 2px solid;border-bottom: 2px solid;"></td>
                        <td class="text-center" style="border: 2px solid;border-bottom: 2px solid;"><span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">ລວມ :</span></td>
                        <td class="text-center" style="border: 2px solid;border-bottom: 2px solid;"><span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">{{number_format($data->money,2,',','.')}}</span></td>
                    </tr>
                </table>
                <table width="100%">
                    <tr>
                        <td colspan="2" style="text-align: right;">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                                ນະຄອນຫຼວງວຽງຈັນ, ວັນທີ {{date('d/m/Y',strtotime($data['created_date']))}}
                            </span>
                        </td>
                    </tr>
                </table>
                <table width="100%">
                    <tr>
                        <td width="30%" class="text-center">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                                <b>ຜູ້ຈ່າຍເງິນ</b>
                            </span>
                        </td>
                        <td width="40%"></td>
                        <td width="30%" class="text-center">
                            <span style="font-family: 'DejaVu Sans','Phetsarath OT';font-size: 12px; padding-top: 0px;">
                                <b>ຜູ້ຮັບເງິນ</b>
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