<a href='{!! route("admin.diadiem.them") !!}'>Them</a>
<table border='1px'>
    <tr>
        <th>id</th>
        <th>Tên Địa Điểm</th>
        <th>Thao tac</th>
    </tr>
    @foreach($locations as $item)
    <tr>
        <td>{!! $item->id !!}</td>
        <td>{!! $item->name !!}</td>
        <td>
            <a href='#'>Xem</a>
            <a href='{!! route("admin.diadiem.sua", array("id" => $item->id)) !!}'>Sua</a>
            <a href='{!! route("admin.diadiem.xoa", array("id" => $item->id)) !!}'>Xoa</a>
        </td>
    </tr>
    @endforeach
</table>