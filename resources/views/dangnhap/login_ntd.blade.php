@extends('layouts.tuyendung')
@section('noidung1')
<div class="cao1">
<div class="login-card">
    <h1>Đăng Nhập</h1><br>
    <form  action="<?php echo route('xuly.dangnhap.nhatuyendung'); ?>" method="POST" class="dnntd">
        <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
        <input type="text" name="email" placeholder="Tên đăng nhập">
        <input type="password" name="password" placeholder="Mật khẩu">
        <input type="submit" name="login" class="login login-submit" value="Đăng Nhập">
    </form>
</div>
</div>
@endsection



