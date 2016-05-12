@extends('admin.trangAdmin.admin')
@section('noidung')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             Job<small>Favourites</small>
                        </h1>
                    </div>
                </div>
<a href='{!! route("admin.quanly_job.them") !!}'>Thêm</a>
<table class="table">
    <tr>
        <th>id</th>
        <th>Tên Người Dùng</th>
        <th>Tên công việc</th>
         <th>Thao Tác</th>
        
    </tr>
    @foreach($jobfavourites as $item)
    <tr>
        <td>{!! $item->id !!}</td>
        <td>
            @if($item->user)
            {!! $item->user->full_name !!} 
            @endif
        </td>
        <td>
            @if($item->job)
            {!! $item->job->name !!} 
            @endif
        </td> 
        <td>
            <a href='{!! route("admin.quanly_job.xem", array("id" => $item->id)) !!}'>Xem</a>
            <a href='{!! route("admin.quanly_job.sua", array("id" => $item->id)) !!}'>Sửa</a>
            <a href='{!! route("admin.quanly_job.xoa", array("id" => $item->id)) !!}'>Xóa</a>
         </td>
    </tr>
    @endforeach
</table>
@endsection