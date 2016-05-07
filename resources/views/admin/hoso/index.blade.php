@extends('admin.trangAdmin.admin')
@section('hoso')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             <small>Curriculumvitaes</small>
                        </h1>
                    </div>
</div>
<a href='{!! route("admin.quanly_curriculumvitaes.them") !!}'>Them</a>
<table class="table">
    <tr>
        <th>id</th>
        <th>Họ tên</th>
        <th>Kinh nghiệm</th>
        <th>Trình độ</th>
        <th>Công ty gần đây</th> 
        <th>Ngành nghề gần đây</th>
        <th>Thao tác</th>
        
    </tr>
    @foreach($hoso as $item)
    <tr>
        <td>{!! $item->id !!}</td>
<!--        <td>
            @if (!empty($item->user))
            {!! $item->user->full_name !!}
            @endif
        </td>-->
        <td>{!! $item->user->full_name !!}</td>
        <td>{!! $item->year_experience !!}</td>
        <td>{!! $item->highes_edu !!}</td>
        <td> @if(!empty($item->company))
            {!!$item->recent_company_id !!}
            @endif
        </td>
        <td> @if(!empty($item->company))
           {!!$item->recent_category_id !!}
            @endif 
        </td>
        <td>
            <a href='{!! route("admin.quanly_curriculumvitaes.xem", array("id" => $item->id)) !!}'>Xem</a>
            <a href='{!! route("admin.quanly_curriculumvitaes.sua", array("id" => $item->id)) !!}'>Sửa </a>
            <a href='{!! route("admin.quanly_curriculumvitaes.xoa", array("id" => $item->id)) !!}'>Xóa</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection