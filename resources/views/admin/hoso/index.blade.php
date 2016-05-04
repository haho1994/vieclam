<a href='{!! route("admin.quanly_curriculumvitaes.them") !!}'>Them</a>
<table border='1px'>
    <tr>
        <th>id</th>
        <th>Họ tên</th>
        <th>Kinh nghiệm</th>
        <th>Trình độ</th>
        <th>Công ty hiện tại</th> 
        <th>Vị trí, nghề nghiệp hiện tại</th>
        
    </tr>
    @foreach($hoso as $item)
    <tr>
        <td>{!! $item->id !!}</td>
        <td>{!! $item->user->full_name !!}</td>
        <td>{!! $item->year_experience !!}</td>
        <td>{!! $item->name !!}</td>
        <td>{!! $item->company->name !!}</td> 
        <td>{!! $item->category->name !!}</td>
        <td>
            <a href='{!! route("admin.quanly_companies.xem", array("id" => $item->id)) !!}'>Xem</a>
            <a href='{!! route("admin.quanly_companies.sua", array("id" => $item->id)) !!}'>Sua</a>
            <a href='{!! route("admin.quanly_companies.xoa", array("id" => $item->id)) !!}'>Xoa</a>
        </td>
    </tr>
    @endforeach
</table>