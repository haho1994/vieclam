@extends('layouts.headerfooter')
@section('doimatkhau')
<div class="login-card">
    <h1>Đổi mật khẩu</h1><br>
    <form action="<?php echo route('xuly.doimatkhau'); ?>" method="POST"  >
        <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
        <input type="text" name="email" placeholder="Nhập email">
        <input type="password" name="password" placeholder="Mật khẩu hiện tại">
        <input type="password" name="password_news" placeholder="Mật khẩu mới">
        <input type="password" name="password_confirmation" placeholder="Nhập lại mật khẩu mới ">
        <input type="submit" name="login" class="login login-submit" value="Lưu">
    </form>
</div>
@endsection
