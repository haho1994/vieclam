@extends('layouts.tuyendung')
@section('noidung1')
<div class="cao">
<div class="login-card">
    <h1>Đăng Nhập</h1><br>
    <form  action="<?php echo route('xuly.dangnhap.nhatuyendung'); ?>" method="POST" >
        <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
        <input type="text" name="email" placeholder="Tên đăng nhập">
        <input style="width: 194px"type="password" name="password" placeholder="Mật khẩu">
        <input type="submit" name="login" class="login login-submit" value="Đăng Nhập">
        <a href="{!! route('doimatkhau')!!}">Quên mật khẩu???</a>
    </form>
</div>
</div>
@endsection


