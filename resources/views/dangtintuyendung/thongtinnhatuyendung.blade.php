@extends('layouts.tuyendung')
@section('noidung1')
<div class="dangtintuyendung" >
    <div class="dangtintuyendung_text">
        <label style="margin-top: 10px;margin-left: 20px;">Tài Khoản</label>     
    </div>
    <div>
        <?php
        if (Session::has('success')) {
            echo \Session::get('success');
        }
        ?>
    </div> 
    <div class="tuyendung_conty">
        <div class="tuyendung_form">
            <form action="{!! route('xuly.nhatuyendung_taikhoan_suathongtinnhatuyendung')!!}" method="POST"  >
                <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
                <div >
                    <div class="tuyendung_text">
                        <a style="margin-left: 730px;font-size: 15px;" href='{!! route("taikhoan.nhatuyendung_xemthongtinnhatuyendung") !!}'>Xem</a>
                        <p style="margin-top: 10px;">Thông Tin Nhà Tuyển Dụng</p>

                    </div>
                    <table class="form_ttcn">
                        <tr >
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
                                <input class="suatt_canhan_input" type="date" value="{!! $users->brithday !!}" name="brithday" />
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
</div>
@endsection
