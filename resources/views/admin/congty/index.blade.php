@extends('admin.trangAdmin.admin')                
@section('noidung')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             <small>Companies</small>
                        </h1>
                    </div>
</div>
<a href='{!! route("admin.quanly_companies.them") !!}'>Them</a>
<table class="table">
    <tr>
        <th>id</th>
        <th>Ten</th>
        <th>Địa chỉ</th>
        <th>Người tạo</th>
        <th>Email</th> 
        <th>Số điện thoại</th>
        <th>Trạng thái</th>
        <th>Thao tác</th>
        
    </tr>
    @foreach($congty as $item)
    <tr>
        <td>{!! $item->id !!}</td>
        <td>{!! $item->name !!}</td>
        <td>{!! $item->address !!}</td>
        <td>{!! $item->user->full_name !!}</td>
        <td>{!! $item->email !!}</td> 
        <td>{!! $item->phone !!}</td>
        <td>
            @if($item->status)
                Da duyet
            @else
                Chua duyet
            @endif
        </td>
        <td>
            <a href='{!! route("admin.quanly_companies.xem", array("id" => $item->id)) !!}'>Xem</a>
            <a href='{!! route("admin.quanly_companies.sua", array("id" => $item->id)) !!}'>Sua</a>
            <a href='{!! route("admin.quanly_companies.xoa", array("id" => $item->id)) !!}'>Xoa</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection