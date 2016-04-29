<a href='{!! route("admin.quanly-ngonngu.them") !!}'>Them</a>
<table border='1px'>
    <tr>
        <th>id</th>
        <th>Tên Ngôn Ngữ</th>
        <th>Thao tac</th>
    </tr>
    @foreach($ngonngu as $item)
    <tr>
        <td>{!! $item->id !!}</td>
        <td>{!! $item->name !!}</td>
        <td>
            <a href='#'>Xem</a>
            <a href='{!! route("admin.quanly-ngonngu.sua", array("id" => $item->id)) !!}'>Sua</a>
            <a href='{!! route("admin.quanly-ngonngu.xoa", array("id" => $item->id)) !!}'>Xoa</a>
        </td>
    </tr>
    @endforeach
</table>