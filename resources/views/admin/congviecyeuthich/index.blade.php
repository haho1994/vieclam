<a href='{!! route("admin.quanly_job.them") !!}'>Them</a>
<table border='1px'>
    <tr>
        <th>id</th>
        <th>Tên Công Việc</th>
        <th>Tên Người Dùng</th>
         <th>Thao Tác</th>
        
    </tr>
    @foreach($job_favourites as $item)
    <tr>
        <td>{!! $item->id !!}</td>
        <td>{!! $item->user->full_name !!}</td>
        <td>{!! $item->jobs->name !!}</td> 
        <td></td>
        <td>
            <a href='#'>Xem</a>
            <a href='{!! route("admin.quanly_companies.sua", array("id" => $item->id)) !!}'>Sua</a>
            <a href='{!! route("admin.quanly_companies.xoa", array("id" => $item->id)) !!}'>Xoa</a>
         </td>
    </tr>
    @endforeach
</table>