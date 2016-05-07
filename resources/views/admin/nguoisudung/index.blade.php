@extends('admin.trangAdmin.admin')
@section('user')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             <small>User</small>
                        </h1>
                    </div>
                </div>
<a href='{!! route("admin.quanly_user.them") !!}'>Thêm</a>
<table class="table">
    <tr>
        <th>id</th>
        <th>Họ Và Tên</th>
        <th>Ngày Sinh</th>
        <th>Email</th>
        <th>Số Điện Thoại</th> 
        <th>Địa Chỉ</th>
         <th>Thao tác </th>
        
    </tr>
    @foreach($user as $item)
    <tr>
        <td>{!! $item->id !!}</td>
        <td>{!! $item->full_name !!}</td>
        <td>{!! $item->brithday!!}</td>
        <td>{!! $item->email !!}</td>
        <td>{!! $item->phone !!}</td>
        <td>{!! $item->address !!}</td>
        <td>
            <a href='#'>Xem</a>
            <a href='{!! route("admin.quanly_user.sua", array("id" => $item->id)) !!}'>Sua</a>
            <a href='{!! route("admin.quanly_user.xoa", array("id" => $item->id)) !!}'>Xoa</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection