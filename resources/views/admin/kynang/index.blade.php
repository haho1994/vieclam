@extends('admin.trangAdmin.admin')
@section('noidung')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             <small>Skill</small>
                        </h1>
                    </div>
                </div>
<a href='{!! route("admin.quanly-kynang.them") !!}'>Them</a>
<table class="table">
    <tr>
        <th>id</th>
        <th>Tên</th>
        <th>Người tạo</th>
        <th>Thao Tác</th>
        
    </tr>
    @foreach($skills as $item)
    <tr>
        <td>{!! $item->id !!}</td>
        <td>{!! $item->name !!}</td>
        <td>
            @if ($item->user)
            {!! $item->user->full_name !!}
            @endif
        </td>
     
        <td>
            <a href='{!! route("admin.quanly-kynang.xem", array("id" => $item->id)) !!}'>Xem</a>
            <a href='{!! route("admin.quanly-kynang.sua", array("id" => $item->id)) !!}'>Sua</a>
            <a href='{!! route("admin.quanly-kynang.xoa", array("id" => $item->id)) !!}'>Xoa</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection