@extends('admin.trangAdmin.admin')
@section('noidung')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             Cập Nhập<small>Địa Chỉ</small>
                        </h1>
                    </div>
                </div>
<a href='{!! route("admin.diadiem.them") !!}'>Thêm</a>
<table class="table">
    <tr>
        <th>id</th>
        <th>Tên Địa Điểm</th>
        <th>Thao Tác</th>
    </tr>
    @foreach($locations as $item)
    <tr>
        <td>{!! $item->id !!}</td>
        <td>{!! $item->name !!}</td>
        <td>
            <a href='{!! route("admin.diadiem.xem", array("id" => $item->id)) !!}'>Xem</a>
            <a href='{!! route("admin.diadiem.sua", array("id" => $item->id)) !!}'>Sửa</a>
            <a href='{!! route("admin.diadiem.xoa", array("id" => $item->id)) !!}'>Xóa</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection