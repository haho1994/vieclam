@extends('admin.trangAdmin.admin')
@section('congviecyeuthich')
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
        <th>Tên Công Việc</th>
        <th>Tên Người Dùng</th>
         <th>Thao Tác</th>
        
    </tr>
    @foreach($congviecyeuthich as $item)
    <tr>
        <td>{!! $item->id !!}</td>
        <td>{!! $item->user->full_name !!}</td>
        <td>{!! $item->jobs->name !!}</td> 
        <td></td>
        <td>
            <a href='#'>Xem</a>
            <a href='{!! route("admin.quanly_job.sua", array("id" => $item->id)) !!}'>Sửa</a>
            <a href='{!! route("admin.quanly_job.xoa", array("id" => $item->id)) !!}'>Xóa</a>
         </td>
    </tr>
    @endforeach
</table>
@endsection