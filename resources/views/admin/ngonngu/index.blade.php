@extends('admin.trangAdmin.admin')
@section('noidung')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Cập Nhật <small>Ngôn Ngữ</small>
                        </h1>
                    </div>
                </div>
<a href='{!! route("admin.quanly-ngonngu.them") !!}'>Thêm</a>

<table class="table">

    <tr>
        <th>id</th>
        <th>Tên Ngôn Ngữ</th>
        <th>Thao Tác</th>
    </tr>
    @foreach($ngonngu as $item)
    <tr>
        <td>{!! $item->id !!}</td>
        <td>{!! $item->name !!}</td>
        <td>
            <a href='{!! route("admin.quanly-ngonngu.xem", array("id" => $item->id)) !!}'>Xem</a>
            <a href='{!! route("admin.quanly-ngonngu.sua", array("id" => $item->id)) !!}'>Sua</a>
            <a href='{!! route("admin.quanly-ngonngu.xoa", array("id" => $item->id)) !!}'>Xoa</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection