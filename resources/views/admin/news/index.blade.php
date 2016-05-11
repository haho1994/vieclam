@extends('admin.trangAdmin.admin')
@section('noidung')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             <small>News</small>
                        </h1>
                    </div>
</div>
<a href='{!! route("admin.quanly_news.them") !!}'>Thêm</a>
<table class="table">
    <tr>
        <th>id</th>
        <th>Tiêu đề</th>
        <th>Nội dung</th>
        <th>Trạng thái</th>
        <th>Thao tác</th>
    </tr>
    @foreach($news as $item)
    <tr>
        <td>{!! $item->id !!}</td>
        <td>{!! $item->title !!}</td>
        <td>{!! $item->content !!}</td>
        <td>{!! $item->status_new !!}</td>
        
        <td>
            <a href='{!! route("admin.quanly_news.xem", array("id" => $item->id)) !!}'>Xem </a>
            <a href='{!! route("admin.quanly_news.sua", array("id" => $item->id)) !!}'>Sửa </a>
            <a href='{!! route("admin.quanly_news.xoa", array("id" => $item->id)) !!}'>Xóa</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection