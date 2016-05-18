@extends('admin.trangAdmin.admin')
@section('noidung')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             <small>Jobs</small>
                        </h1>
                    </div>
</div>
<a href='{!! route("admin.quanly_jobs.them") !!}'>Them</a>
<table class="table">
    <tr>
        <th>id</th>
        <th>Tên công việc</th>
        <th>Địa điểm</th>
        <th>Kinh nghiệm</th>
        <th>Trang thai</th>
        <th>Thao tác</th>
    </tr>
    @foreach($jobs as $item)
    <tr>
        <td>{!! $item->id !!}</td>
        <td>{!! $item->name !!}</td>
        <td> 
            @if($item->location)
            {!! $item->location->name !!}
            @endif
        </td>
        <td>{!! $item->experience !!}</td>
        <td>
            @if($item->status)
                Da duyet
            @else
                Chua duyet
            @endif
        </td> 
        <td>
            <a href='{!! route("admin.quanly_jobs.xem", array("id" => $item->id)) !!}'>Xem</a>
            <a href='{!! route("admin.quanly_jobs.sua", array("id" => $item->id)) !!}'>Sua</a>
            <a href='{!! route("admin.quanly_jobs.xoa", array("id" => $item->id)) !!}'>Xoa</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection