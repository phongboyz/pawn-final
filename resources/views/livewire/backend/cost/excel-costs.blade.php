<table border="2" width="100%">
    <thead>
        <tr class="text-center">
            <th style="font-family: 'Phetsarath OT';"> ລຳດັບ </th>
            <th style="font-family: 'Phetsarath OT';"> ວັນທີ </th>
            <th style="font-family: 'Phetsarath OT';"> ລະຫັດທຸລະກຳ </th>
            <th style="font-family: 'Phetsarath OT';"> ຊື່ທຸລະກຳ </th>
            <th style="font-family: 'Phetsarath OT';"> ປະເພດ </th>
            <th style="font-family: 'Phetsarath OT';"> ຈຳນວນເງິນ </th>
            <th style="font-family: 'Phetsarath OT';"> ລາຍລະອຽດ </th>
            <th style="font-family: 'Phetsarath OT';"> ສາຂາ </th>
        </tr>
    </thead>
    <tbody>
        @php $no = 1; @endphp
        @forelse ($data as $key => $item)
        <tr class="text-center">
            <td>{{$no++}}</td>
            <td>{{date('d/m/Y',strtotime($item->created_date))}}</td>
            <td>{{$item->code}}</td>
            <td style="font-family: 'Phetsarath OT';">{{$item->name}}</td>
            <td style="font-family: 'Phetsarath OT';">
                @if ($item->type == 'normal')
                ແຫຼ່ງທຶນປົກກະຕິ
                @else
                ແຫຼ່ງທຶນອື່ນໆ
                @endif
            </td>
            <td>{{number_format($item->total,2,',','.')}}</td>
            <td style="font-family: 'Phetsarath OT';">{{$item->detail}}</td>
            <td style="font-family: 'Phetsarath OT';">{{$item->branchname->name}}</td>
        </tr>
        @empty
        <tr class="text-center">
            <td colspan="8" style="color: #787878;" style="font-family: 'Phetsarath OT';">ບໍ່ມີຂໍ້ມູນແຫຼ່ງທຶນ</td>
        </tr>
        @endforelse
    </tbody>
</table>