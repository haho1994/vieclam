<a href='{!! route("admin.quanly_companies.them") !!}'>Them</a>
<table border='1px'>
    <tr>
        <th>id</th>
        <th>Ten</th>
        <th>Địa chỉ</th>
        <th>Người tạo</th>
        <th>Email</th> 
        <th>Số điện thoại</th>
        
    </tr>
    @foreach($congty as $item)
    <tr>
        <td>{!! $item->id !!}</td>
        <td>{!! $item->name !!}</td>
        <td>{!! $item->address !!}</td>
        <td>{!! $item->user->full_name !!}</td>
        <td>{!! $item->email !!}</td> 
        <td>{!! $item->phone !!}</td>
        
        
        <td></td>
        <td>
            <a href='#'>Xem</a>
            <a href='{!! route("admin.quanly_companies.sua", array("id" => $item->id)) !!}'>Sua</a>
            <a href='{!! route("admin.quanly_companies.xoa", array("id" => $item->id)) !!}'>Xoa</a>
        </td>
    </tr>
    @endforeach
</table>