@extends('admin.trangAdmin.admin')
@section('noidung')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             <small>Companies/ Xem</small>
                        </h1>
                    </div>
</div>
<?php 
    if (Session::has('success')) {
        echo \Session::get('success');
    }
?>

<form action="{!! route('admin.quanly_companies.thoat', ['id' => $company->id]) !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
       <tr>
            <td><label>Tên</label></td>
            <td><label type="text" >{!! $company->name !!}</label></td>
        </tr>
        <tr>
            <td><label>Địa chỉ</label></td>
            <td><label type="text">{!! $company->address !!}</label></td>
        </tr>
        <tr>
            <td><label>Email</label></td>
            <td><label type="text" >{!! $company->email !!}</label></td>
        </tr>
        <tr>
            <td><label>Số điện thoại</label></td>
            <td><label type="text" >{!! $company->phone !!}</label></td>
        </tr>
        <tr>
            <td colspan="2">
                <a href='{!! route("admin.quanly_companies")!!}'>Thoát</a>
            </td>
        </tr>
    </table>
</form>
@endsection