@extends('layouts.headerfooter')
@section('noi_dung')
<?php 
    if (Session::has('success')) {
        echo \Session::get('success');
    }
?>

<div class="suattcn">
    <div class="taikhoan_div">
        <u class="taikhoan">Tài Khoản</u>
    </div>
    <a style="margin-left: 200px;margin-bottom: 50px;" href='{!! route("taikhoan_xemthongtincanhan") !!}'>Xem</a>
    <div class="ttcn1">
    <div class="ttcn">

        <div class="text_div">
            <strong class="text_ttcn">Cập nhập thông tin cá nhân</strong>
        </div>
        <form action="{!! route('xuly.taikhoan_suathongtincanhan')!!}" method="POST"  >
            <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
            <table class="form_ttcn">
                <tr>
                    <td><label>Email</label></td>
                <td>
                    <input class="suatt_canhan_input" type="text" value="{!! $users->email !!}" name="email" disabled placeholder="Nhập email"/>
                </td>
            </tr>
            <tr>
                <td><label>Mật khẩu hiện tại</label></td>
                <td>
                    <input class="suatt_canhan_input" type="password" value="" name="password" placeholder="Mật khẩu hiện tại"/>
                    <?php
                    if ($errors->has('password')) {
                        echo $errors->first('password');
                    }
                    ?>
                </td>
            </tr>
                <tr>
                    <td><label>Họ Tên</label></td>
                    <td>
                        <input class="suatt_canhan_input" type="text" value="{!! $users->full_name !!}" name="full_name" />
                        <?php
                        if ($errors->has('name')) {
                            echo $errors->first('name');
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><label>Ngày Sinh</label></td>
                    <td>
                        <input class="suatt_canhan_input" type="date" value="{!! date('Y-m-d', strtotime($users->brithday)) !!}" name="brithday" />
                        <?php
                        if ($errors->has('brithday')) {
                            echo $errors->first('brithday');
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td><label>Số điện thoại</label></td>
                    <td>
                         <input class="suatt_canhan_input" type="text" value="{!! $users->phone !!}" name="phone" />
                        <?php
                        if ($errors->has('phone')) {
                            echo $errors->first('phone');
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><label>Địa Chỉ</label></td>
                    <td>
                         <input class="suatt_canhan_input" type="text" value="{!! $users->address !!}" name="address" />
                        <?php
                        if ($errors->has('address')) {
                            echo $errors->first('address');
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input  class="luucn_input" type="submit" value="Lưu cập nhập" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
    </div>
</div>
@endsection
