@extends('layouts.headerfooter')
@section('noi_dung')
<div class="showttcn">
    <a style="margin-left: 1300px;" href='{!! route("taikhoan_suathongtincanhan") !!}'>Trở về</a>
    <div class="ttcn_xem">
        
        <form>
            <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
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
            
        </form>
        
    </div>
</div>
@endsection

