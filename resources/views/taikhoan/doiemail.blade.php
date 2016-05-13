@extends('layouts.headerfooter')
@section('noi_dung')
<div class="form_nhatuyendung">
    <div class="tdungdoipass">
        <div class="form_tdpass">
            <h1>Đổi Email</h1><br>
            <form action="{!! route('xuly.email') !!}" method="POST"  >
                <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
                <table>
                    <tr>
                        <td>
                            <input id="input_td" type="text" value="{!! $user->email !!}" name="email" disabled placeholder="Nhập email"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="input_td" type="password" value="" name="password" placeholder="Mật khẩu hiện tại"/>
                            <?php
                            if ($errors->has('password')) {
                                echo $errors->first('password');
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="input_td" type="text" name="email_news" placeholder="Nhập email mới">
                            <?php
                            if ($errors->has('email_news')) {
                                echo $errors->first('email_news');
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="input_td" type="text" name="email_confirmation" placeholder="Xác nhận email mới ">
                            <?php
                            if ($errors->has('email_confirmation')) {
                                echo $errors->first('email_confirmation');
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="login" class="login login-submit" value="Lưu">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
@endsection
