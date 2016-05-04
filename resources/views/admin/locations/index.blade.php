@extends('admin.trangAdmin.admin')
@section('location')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             <small>Location</small>
                        </h1>
                    </div>
                </div>
<a href='{!! route("admin.diadiem.them") !!}'>Thêm</a>
<table class="table">
    <tr>
        <th>id</th>
        <th>Tên Địa Điểm</th>
        <th>Thao tac</th>
    </tr>
    @foreach($locations as $item)
    <tr>
        <td>{!! $item->id !!}</td>
        <td>{!! $item->name !!}</td>
        <td>
            <a href='#'>Xem</a>
            <a href='{!! route("admin.diadiem.sua", array("id" => $item->id)) !!}'>Sua</a>
            <a href='{!! route("admin.diadiem.xoa", array("id" => $item->id)) !!}'>Xoa</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection