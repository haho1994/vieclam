@extends('layouts.tuyendung')
@section('noidung1')
<div class="">
    <div class="dangtintuyendung_text">
        <label style="margin-top: 10px;margin-left: 20px;">Tài Khoản</label>
    </div>
    <div class="ttcn_xem" style="margin-left: 80px;">     
        <form>
            <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
            <div style="margin-left: 20px;border-bottom: 1px #000033 dotted;height: 40px;">
                        <p style="margin-top: 10px;">Thông Tin Nhà Tuyển Dụng</p>
                    </div>
            <table class="ttcn_xem1">
                <tr>
                    <td style="color: #3079ed; font: normal 150% 'trebuchet ms', arial, sans-serif;"><label type="text" >{!! $user->full_name!!}</label></td>
                </tr>
                
                <tr>
                    <td style="color: #808080; ">Ngày sinh:</td>
                    <td style="color: #808080;"><label type="text" >{!! $user->brithday !!}</label></td>
                </tr>
                <tr>
                    <td style="color: #808080; ">Email:</td>
                    <td style="color: #808080;"><label type="text" >{!! $user->email !!}</label></td>
                </tr>
                <tr>
                    <td style="color: #808080; ">Số điện thoại:</td>
                    <td style="color: #808080;"><label >{!! $user->phone !!}</label></td>
                </tr>
                <tr>
                    <td style="color: #808080; ">Địa chỉ:</td>
                    <td style="color: #808080;"><label >{!! $user->address !!}</label></td>
                </tr>
            </table>
            <a style="margin-left: 650px;font-size: 15px;" href='{!! route("nhatuyendung_taikhoan_suathongtinnhatuyendung") !!}'>Trở về</a>
        </form>
        
    </div>
</div>
@endsection

