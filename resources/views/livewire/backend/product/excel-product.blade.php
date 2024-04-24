<table border="2" width="100%">
    <thead>
        <tr class="text-center">
            <th style="font-family: 'Phetsarath OT';"> ລຳດັບ </th>
            <th style="font-family: 'Phetsarath OT';"> ຮູບແບບ </th>
            <th style="font-family: 'Phetsarath OT';"> ໝວດ </th>
            <th style="font-family: 'Phetsarath OT';"> ປະເພດ </th>
            <th style="font-family: 'Phetsarath OT';"> ຫຼັກຊັບ </th>
            <th style="font-family: 'Phetsarath OT';"> ຫົວໜ່ວຍ </th>
            <th style="font-family: 'Phetsarath OT';"> ລາຍລະອຽດ </th>
        </tr>
    </thead>
    <tbody>
        @php $no = 1; @endphp
        @forelse ($data as $key => $item)
        <tr class="text-center">
            <td>{{$no++}}</td>
            <td style="font-family: 'Phetsarath OT';">
                @if ($item->type == 'gen')
                ຫຼັກຊັບທົ່ວໄປ
                @else
                ອະສັງຫາລິມະຊັບ
                @endif
            </td>
            <td style="font-family: 'Phetsarath OT';">{{$item->muadname->name}}</td>
            <td style="font-family: 'Phetsarath OT';">{{$item->catename->name}}</td>
            <td style="font-family: 'Phetsarath OT';">{{$item->name}}</td>
            <td style="font-family: 'Phetsarath OT';">{{$item->unit}}</td>
            <td style="font-family: 'Phetsarath OT';">{{$item->note}}</td>
        </tr>
        @empty
        <tr class="text-center">
            <td colspan="8" style="color: #787878;">ບໍ່ມີຂໍ້ມູນຫຼັກຊັບ</td>
        </tr>
        @endforelse
    </tbody>
</table>