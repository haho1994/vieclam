@extends('admin.trangAdmin.admin')
@section('noidung')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             <small>User</small>
                        </h1>
                    </div>
                </div>
<?php 
    if (Session::has('success')) {
        echo \Session::get('success');
    }
?>

<form action="{!! route('admin.quanly_user.xem', ['id' => $users->id]) !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
        <tr>
            <td><label>ID</label></td>
            <td>
                <label>
                    {!! $users->id !!}
                </label>
            </td>
        </tr>
       <tr>
            <td><label>Họ Và Tên</label></td>
            <td><label type="text" >{!! $users->full_name !!}</label></td>
        </tr>
        <tr>
            <td><label>Ngày Sinh</label></td>
            <td><label type="text">{!! $users->brithday !!}</label></td>
        </tr>
        <tr>
            <td><label>Email</label></td>
            <td><label type="text">{!! $users->email !!}</label></td>
        </tr> 
        <tr>
            <td><label>Số điện thoại</label></td>
            <td><label type="text" >{!! $users->phone !!}</label></td>
        </tr>
        <tr>
            <td><label>Địa chỉ</label></td>
            <td><label type="text" >{!! $users->address !!}</label></td>
        </tr>
        <tr>
            <td><label>Hình Thức</label></td>
            <td>
                <label type="text">
                    
                    @if($users->category)
                    {!! $users->category->name !!}
                    @endif
                </label>
            </td>
        </tr>
        <tr>
            <td><label>Mức Lương</label></td>
            <td><label type="text">{!! $users->salary !!}</label></td>
        </tr>
        <tr>
            <td><label>Mô Tả</label></td>
            <td><label type="text" >{!! $users->description !!}</label></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Trở về" />
            </td>
        </tr>
    </table>
</form>
@endsection