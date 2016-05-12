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
    <div class="ttcn1">
    <div class="ttcn">

        <div class="text_div">
            <strong class="text_ttcn">Cập nhập thông tin cá nhân</strong>
        </div>
        <form action="{!! route('xuly.taikhoan_suathongtincanhan', ['id' => $users->id]) !!}" method="POST"  >
            <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
            <table class="form_ttcn">
<!--                <tr>
                    <td><label>Email hiện tại</label></td>
                    <td>
                        <input type="password" value="" name="password" />
                        //<?php
//                        if ($errors->has('password')) {
//                            echo $errors->first('password');
//                        }
//                        ?>
                    </td>
                </tr>-->
                <tr>
                    <td><label>Họ Tên</label></td>
                    <td>
                        <input type="text" value="{!! $users->full_name !!}" name="full_name" />
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
                        <input style="width:558px;height: 44px;border-radius: 5px;border: 1px solid #d9d9d9;margin-bottom: 10px;" type="date" value="{!! $users->brithday !!}" name="brithday" />
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
                         <input type="text" value="{!! $users->phone !!}" name="phone" />
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
                         <input type="text" value="{!! $users->address !!}" name="address" />
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
