@extends('layouts.tuyendung')
@section('noidung1')

<div class="dangtintuyendung" >
    <div class="dangtintuyendung_text">
        <label style="margin-top: 10px;margin-left: 20px;">Quản Lý Công Ty</label>
    </div>
    <div style="font-size: 13px;margin-left: 50px;">
        <?php
        if (Session::has('success')) {
            echo \Session::get('success');
        }
        ?>
    </div>
    <div class="tuyendung_conty">
        <div class="tuyendung_form">
            <form action="{!! route('xuly.ntd_congty_sua') !!}" method="post">
                <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
                <div >
                    <div class="tuyendung_text">
                        <a style="margin-left: 730px;font-size: 15px;" href='{!! route("congty_xemthongtincongty") !!}'>Xem</a>
                        <p style="margin-top: 10px;">Thông Tin Công Ty</p>
                    </div>
                    <table style="margin-top: 20px;">
                        <tr>
                            <td style="width: 200px;"><label>Tên Công Ty</label></td>
                            <td>
                                <input class="suatt_canhan_input" type="text" value="{!! $company->name !!}" name="name"  />
                                <?php
                                if ($errors->has('name')) {
                                    echo $errors->first('name');
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Địa Chỉ Công Ty</label></td>
                            <td>
                                <input class="suatt_canhan_input" type="text" value="{!! $company->address !!}" name="address"  />
                                <?php
                                if ($errors->has('address')) {
                                    echo $errors->first('address');
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Email</label></td>
                            <td>
                                <input class="suatt_canhan_input" type="text" value="{!! $company->email !!}" name="email" />
                                <?php
                                if ($errors->has('email')) {
                                    echo $errors->first('email');
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Số Điện Thoại</label></td>
                            <td>
                                <input class="suatt_canhan_input" type="text" value="{!! $company->phone !!}" name="phone" />
                                <?php
                                if ($errors->has('phone')) {
                                    echo $errors->first('phone');
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Mô Tả Công Ty</label></td>
                            <td>
                                <input class="suatt_canhan_input" type="text" value="{!! $company->description !!}" name="description" />
                                <?php
                                if ($errors->has('description')) {
                                    echo $errors->first('description');
                                }
                                ?>
                            </td>
                        </tr>
                    </table>
                    <div class="right_tk" style="width: 10%;display: inline-block; margin-left: 300px;margin-top: 50px;">
                        <input class="input_ntdtk" type="submit" class="login login-submit" value="Lưu">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
