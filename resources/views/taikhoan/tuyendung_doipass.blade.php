@extends('layouts.headerfooter')
@section('noi_dung')
<div class="form_nhatuyendung">
    <div class="tdungdoipass">
        <div class="form_tdpass">
            <h1>Thay đổi mật khẩu</h1><br>
            <form action="{!! route('xuly.nhatuyendung_doimatkhau') !!}" method="POST"  >
                <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
                <table>
            <tr>
                <td>
                    <input style="width: 320px;height: 44px; border-radius: 5px;margin-bottom: 10px; border: 1px solid #d9d9d9" type="text" value="{!! $users->email !!}" name="email" disabled />
                </td>
            </tr>
            <tr>
                <td>
                    <input type="password" value="" name="password" placeholder="Mật khẩu hiện tại"/>
                    <?php
                    if ($errors->has('password')) {
                        echo $errors->first('password');
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="password" name="password_news" placeholder="Mật khẩu mới"/>
                    <?php
                    if ($errors->has('password_news')) {
                        echo $errors->first('password_news');
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="password" name="password_confirmation" placeholder="Nhập lại mật khẩu mới "/>
                    <?php
                    if ($errors->has('password_confirmation')) {
                        echo $errors->first('password_confirmation');
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="login" class="login login-submit" value="Lưu"/>
                </td>
            </tr>
        </table>
            </form>
        </div>
    </div>
</div>
@endsection
