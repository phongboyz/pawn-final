<table border="2" width="100%">
    <thead>
        <tr class="text-center">
            <th style="font-family: 'Phetsarath OT';"> ລຳດັບ </th>
            <th style="font-family: 'Phetsarath OT';"> ຊື່ເຂົ້າໃຊ້ລະບົບ </th>
            <th style="font-family: 'Phetsarath OT';"> ລະຫັດຜ່ານ </th>
            <th style="font-family: 'Phetsarath OT';"> ເບີໂທຕິດຕໍ່ </th>
            <th style="font-family: 'Phetsarath OT';"> ສິດນຳໃຊ້ </th>
            <th style="font-family: 'Phetsarath OT';"> ສາຂາ </th>
        </tr>
    </thead>
    <tbody>
        @php $no = 1; @endphp
        @forelse ($data as $key => $item)
        <tr class="text-center">
            <td>{{$no++}}</td>
            <td style="font-family: 'Phetsarath OT';">{{$item->username}}</td>
            <td>*****</td>
            <td>{{$item->phone}}</td>
            <td>Super Admin</td>
            <td style="font-family: 'Phetsarath OT';">ສຳນັກງານໃຫຍ່</td>
        </tr>
        @empty
        <tr class="text-center">
            <td colspan="8" style="color: #787878;">ບໍ່ມີຂໍ້ມູນຜູ້ໃຊ້ງານລະບົບ</td>
        </tr>
        @endforelse
    </tbody>
</table>