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
        <td>
            @if (!empty($item->user))
            {!! $item->user->full_name !!}
            @endif
        </td>
        <td>{!! $item->year_experience !!}</td>
        <td>{!! $item->highes_edu !!}</td>
        <td>
            @if (!empty($item->company))
            {!! $item->company->name !!}
            @endif
        </td> 
        <td>
            @if (!empty($item->category))
            {!! $item->category->name !!}
            @endif
        </td>
        <td>
            <a href='{!! route("admin.quanly_curriculumvitaes.sua", array("id" => $item->id)) !!}'>Sua</a>
            <a href='{!! route("admin.quanly_curriculumvitaes.xoa", array("id" => $item->id)) !!}'>Xoa</a>
        </td>
    </tr>
    @endforeach
</table>