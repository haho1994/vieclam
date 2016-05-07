@extends('admin.trangAdmin.admin')
@section('image')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             <small>Images</small>
                        </h1>
                    </div>
</div>
<a href='{!! route("admin.quanly_images.them") !!}'>Them</a>
<table class="table">
    <tr>
        <th>id</th>
        <th>Tên</th>
        <th>Mục tiêu</th>
        <th>Nội dung mục tiêu</th>
        <th>Thao tác</th> 
    </tr>
    @foreach($images as $item)
    <tr>
        <td>{!! $item->id !!}</td> 
        <td>{!! $item->name !!}</td>
        <td>{!!$item->target_id !!} </td>
        <td> {!!$item->target_content !!}</td>
        <td>
            <a href='{!! route("admin.quanly_images.sua", array("id" => $item->id)) !!}'>Sua</a>
            <a href='{!! route("admin.quanly_images.xoa", array("id" => $item->id)) !!}'>Xoa</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection