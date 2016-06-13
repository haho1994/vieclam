@extends('layouts.tuyendung')
@section('noidung1')
<?php
if (Session::has('success')) {
    echo \Session::get('success');
}
?>
<div class="dangtintuyendung" >
    <div class="dangtintuyendung_text">
        <label style="margin-top: 10px;margin-left: 20px;">Quản Lý Công Ty</label>
    </div>
    <div class="tuyendung_conty">
        <div class="tuyendung_form">
            <form action="{!! route('xuly.ntd_taocongty') !!}" method="post">
                <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
                <div >
                    <div class="tuyendung_text">
                        <p style="margin-top: 10px;">Đăng Ký Công Ty</p>
                    </div>
                    <table style="margin-top: 20px;">
                        <tr>
                            <td style="width: 205px;"><label>Tên Công Ty</label></td>
                            <td>
                                <input class="tuyendung_form_ipput" type="text" value="" name="name" placeholder="Nhập tên công ty" />
                                <?php
                                if ($errors->has('name')) {
                                    echo $errors->first('name');
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Người Liên Hệ</label></td>
                            <td>
                                <input class="tuyendung_form_ipput" type="text" disabled value="{!! $users->full_name !!}" name="full_name" />
                                <?php
                                if ($errors->has('full_name')) {
                                    echo $errors->first('full_name');
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 205px;"><label>Địa Chỉ Công Ty</label></td>
                            <td class="tuyendung_form_ipput">
                                <select name="address" >
                                    <option value="" >Chọn địa chỉ</option>
                                    @foreach($locations as $location)
                                    <option value="{!! $location->id !!}">{!! $location->name !!}</option>
                                    @endforeach
                                </select>
                                <?php
                                if ($errors->has('id_location')) {
                                    echo $errors->first('id_location');
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 205px;"><label>Email</label></td>
                            <td>
                                <input class="tuyendung_form_ipput" type="text" value="" name="email" placeholder="Nhập email" />
                                <?php
                                if ($errors->has('email')) {
                                    echo $errors->first('email');
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 205px;"><label>Số Điện Thoại</label></td>
                            <td>
                                <input class="tuyendung_form_ipput" type="text" value="" name="phone" placeholder="Nhập số điện thoại" />
                                <?php
                                if ($errors->has('phone')) {
                                    echo $errors->first('phone');
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 205px;"><label>Mô Tả Công Ty</label></td>
                            <td >
                                <textarea class="tuyendung_form_ipput" value=""  name="description" placeholder="Nhập mô tả công việc"></textarea>
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
