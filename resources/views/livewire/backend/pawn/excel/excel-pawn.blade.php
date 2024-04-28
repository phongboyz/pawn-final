<table border="2" width="100%">
    <thead>
        <tr class="text-center">
            <th rowspan="2" style="font-size: 12px;font-family: 'Phetsarath OT';"> ລຳດັບ </th>
            <th rowspan="2" style="font-size: 12px;font-family: 'Phetsarath OT';"> ເລກທີ <br> ສັນຍາ </th>
            <th rowspan="2" style="font-size: 12px;font-family: 'Phetsarath OT';"> ວັນທີເປີດ/ຄົບ <br> ສັນຍາ </th>
            <th rowspan="2" style="font-size: 12px;font-family: 'Phetsarath OT';"> ວັນກູ້ຢືມ </th>
            <th rowspan="2" style="font-size: 12px;font-family: 'Phetsarath OT';"> ງວດ </th>
            <th rowspan="2" style="font-size: 12px;font-family: 'Phetsarath OT';"> ຂໍ້ມູນລູກຄ້າ</th>
            <th colspan="3" style="font-size: 12px;font-family: 'Phetsarath OT';"> ຫຼັກຊັບຄ້ຳປະກັນ </th>
            <th colspan="2" style="font-size: 12px;font-family: 'Phetsarath OT';"> ເງິນກູ້ຢືມ </th>
            <th rowspan="2" style="font-size: 12px;font-family: 'Phetsarath OT';"> ສະຖານະ </th>
        </tr>
        <tr>
            <th class="text-center" style="font-size: 12px;font-family: 'Phetsarath OT';">ໝວດ</th>
            <th class="text-center" style="font-size: 12px;font-family: 'Phetsarath OT';">ປະເພດ</th>
            <th class="text-center" style="font-size: 12px;font-family: 'Phetsarath OT';">ລາຍລະອຽດ</th>
            <th class="text-center" style="font-size: 12px;font-family: 'Phetsarath OT';">ປ່ອຍກູ້</th>
            <th class="text-center" style="font-size: 12px;font-family: 'Phetsarath OT';">ຍອດເຫຼືອ</th>
        </tr>
    </thead>
    <tbody>
        @php $no = 1; @endphp
        @forelse ($data as $key => $item)
        <tr class="text-center">
            <td>{{$no++}}</td>
            <td class="text-center" style="font-size: 12px;font-family: 'Phetsarath OT';">{{$item->code}}</td>
            <td class="text-center" style="font-size: 12px;font-family: 'Phetsarath OT';">
                ສ້າງ: {{date('d/m/Y',strtotime($item->created_date))}}
                <br> ໝົດ: {{date('d/m/Y',strtotime($item->expire_date))}}
            </td>
            <td class="text-center" style="font-size: 12px;font-family: 'Phetsarath OT';">{{$item->count_date}}</td>
            <td class="text-center" style="font-size: 12px;font-family: 'Phetsarath OT';">{{$item->nguad}}</td>
            <td class="text-center" style="font-size: 12px;font-family: 'Phetsarath OT';">
                @if($item->cusname->gender == 'm') ທ້າວ @else ນາງ @endif
                {{$item->cusname->name}} {{$item->cusname->lname}}
            </td>
            <td class="text-center" style="font-size: 12px;font-family: 'Phetsarath OT';">
                {{$item->proname->muadname->name}}
            </td>
            <td class="text-center" style="font-size: 12px;font-family: 'Phetsarath OT';">
                {{$item->proname->catename->name}}
            </td>
            <td class="text-center" style="font-size: 12px;font-family: 'Phetsarath OT';">
                {{$item->proname->name}} {{$item->proname->note}}
            </td>
            <td class="text-center" style="font-size: 12px;font-family: 'Phetsarath OT';">
                {{number_format($item->money,2,',','.')}} {{$item->crcname->name}}
            </td>
            <td class="text-center" style="font-size: 12px;font-family: 'Phetsarath OT';">
                {{number_format($item->balance,2,',','.')}} {{$item->crcname->name}}
            </td>
            <td class="text-center" style="font-size: 12px;font-family: 'Phetsarath OT';">
                @if ($item->status == 'p')
                ລໍຖ້າອະນຸມັດ
                @elseif ($item->status == 'c')
                ອະນຸມັດສຳເລັດ
                @elseif ($item->status == 't')
                ກຳລັງເຄື່ອນໄຫວ
                @elseif ($item->status == 'x')
                ກາຍກຳນົດ
                @elseif ($item->status == 'f')
                ປິດງວດ
                @elseif ($item->status == 'r')
                ຍົກເລີກ
                @endif
            </td>
        </tr>
        @empty
        <tr class="text-center">
            <td colspan="8" style="color: #787878;font-size: 12px;font-family: 'Phetsarath OT';">ບໍ່ມີຂໍ້ມູນສິນເຊື່ອ</td>
        </tr>
        @endforelse
    </tbody>
</table>