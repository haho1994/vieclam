@extends('admin.trangAdmin.admin')
@section('noidung')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             <small>Danh mục</small>
                        </h1>
                    </div>
</div>
<a href='{!! route("admin.quanly_danhmuc.them") !!}'>Them</a>
<table class="table">
    <tr>
        <th>id</th>
        <th>Ten</th>
        <th>Thao tac</th>
    </tr>
    @foreach($danhmuc as $item)
    <tr>
        <td>{!! $item->id !!}</td>
        <td>{!! $item->name !!}</td>
        <td>
            <a href='#'>Xem</a>
            <a href='{!! route("admin.quanly_danhmuc.sua", array("id" => $item->id)) !!}'>Sua</a>
            <a href='{!! route("admin.quanly_danhmuc.xoa", array("id" => $item->id)) !!}'>Xoa</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection