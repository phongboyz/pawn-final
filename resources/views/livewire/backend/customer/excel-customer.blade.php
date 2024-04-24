<table border="2" width="100%">
    <thead>
        <tr class="text-center">
            <th style="font-family: 'Phetsarath OT';"> ລຳດັບ </th>
            <th style="font-family: 'Phetsarath OT';"> ບໍລິການ </th>
            <th style="font-family: 'Phetsarath OT';"> ເພດ </th>
            <th style="font-family: 'Phetsarath OT';"> ຊື່ ແລະ ນາມສະກຸນ </th>
            <th style="font-family: 'Phetsarath OT';"> ເບີໂທຕິດຕໍ່ </th>
            <th style="font-family: 'Phetsarath OT';"> ທີ່ຢູ່ </th>
        </tr>
    </thead>
    <tbody>
        @php $no = 1; @endphp
        @forelse ($data as $key => $item)
        <tr class="text-center">
            <td>{{$no++}}</td>
            <td>
                {{$item->count_sv}}
            </td>
            <td style="font-family: 'Phetsarath OT';">
                @if ($item->gender == 'm')
                    ທ້າວ
                @else
                    ນາງ
                @endif
            </td>
            <td style="font-family: 'Phetsarath OT';">{{$item->name}} {{$item->lname}}</td>
            <td>{{$item->phone}}</td>
            <td style="font-family: 'Phetsarath OT';">{{$item->address}}</td>
        </tr>
        @empty
        <tr class="text-center">
            <td colspan="8" style="color: #787878;">ບໍ່ມີຂໍ້ມູນລູກຄ້າ</td>
        </tr>
        @endforelse
    </tbody>
</table>