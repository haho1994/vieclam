@extends('layouts.tuyendung')
@section('noidung1')
<div class="">
    <div class="dangtintuyendung_text">
        <label style="margin-top: 10px;margin-left: 20px;">Quản Lý Công Ty</label>
    </div>
    @if(!empty($company))
    <div class="ttcn_xem" style="">     
        <form method="post">
            <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
            <div style="margin-left: 20px;border-bottom: 1px #000033 dotted;height: 40px;">
                        <p style="margin-top: 10px;">Thông Tin Công Ty</p>
                    </div>
            <table class="ttcn_xem1">
                <tr>
                    <td style="color: #3079ed; font: normal 150% 'trebuchet ms', arial, sans-serif;"><label type="text" >{!! $company->name!!}</label></td>
                </tr>
                
                <tr>
                    <td style="color: #808080; ">Địa chỉ:</td>
                    <td style="color: #808080;"><label type="text" >{!! $company->address !!}</label></td>
                </tr>
                <tr>
                    <td style="color: #808080; ">Email:</td>
                    <td style="color: #808080;"><label type="text" >{!! $company->email !!}</label></td>
                </tr>
                <tr>
                    <td style="color: #808080; ">Số điện thoại:</td>
                    <td style="color: #808080;"><label >{!! $company->phone !!}</label></td>
                </tr>
                <tr>
                    <td style="color: #808080; ">Người liên hệ:</td>
                    <td style="color: #808080;"><label >{!! $company->user->full_name !!}</label></td>
                </tr>
            </table>
            <a style="margin-left: 650px;font-size: 15px;" href='{!! route("ntd_congty_sua") !!}'>Trở về</a>
        </form>
    </div>
    @endif
</div>
@endsection

