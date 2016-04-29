<a href='{!! route("admin.quanly_danhmuc.them") !!}'>Them</a>
<table border='1px'>
    <tr>
        <th>id</th>
        <th>Ten</th>
        <th>Thuoc danh muc</th>
        <th>Thao tac</th>
    </tr>
    @foreach($danhmuc as $item)
    <tr>
        <td>{!! $item->id !!}</td>
        <td>{!! $item->name !!}</td>
        <td></td>
        <td>
            <a href='#'>Xem</a>
            <a href='{!! route("admin.quanly_danhmuc.sua", array("id" => $item->id)) !!}'>Sua</a>
            <a href='{!! route("admin.quanly_danhmuc.xoa", array("id" => $item->id)) !!}'>Xoa</a>
        </td>
    </tr>
    @endforeach
</table>