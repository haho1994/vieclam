@extends('layouts.headerfooter')
@section('noi_dung')
<div class="wap">

    <div class="lienhe">
        <h2>Hồ Sơ Của Tôi</h2>
        <a href="{!! route('hoso.tao') !!}">Tạo Hồ Sơ</a>
        <div class="lienhe1">


            <form style="width: 100%" class="ttht" method="post" >
                    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
                <div class="row" style="width: 100%">
                    <div class="avatar">
                    </div>
                    <div class="qlnn1" style=" width: 38.5%;">
                        <div class="qlnn1-1"> 
                            <i class="user"></i>
                            <span><strong>{!! $user->full_name !!}</strong></span>
                        </div>
                        <div class="qlnn1-1"> 
                            <i class="mail"></i>
                            <span><strong>{!! $user->email !!}</strong></span>
                        </div>
                      
                    </div>
                </div>
            </form>
        </div>
        @if(!empty($cv))
        <div class="lienhe">  
            <div class="lienhe1">
                <h3 style="margin-bottom: 20px;"><strong>Thông Tin Chung</strong></h3>
                <form style="width: 100%" class="ttht" method="post">
                    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
                    <div  style="width: 48%; float: left">
                        <table>
                            <tr class="qlnn1-4"  >
                                <td ><label><b>Số Năm Kinh Nghiệm:</b></label></td>
                                <td><label class="hoso">{!! $cv->year_experience !!}</label></td>
                            </tr>
                            <tr class="qlnn1-4">
                                <td><label><b>Bằng Cấp:</b></label></td>
                                <td><label class="hoso">{!! $cv->highes_edu !!}</label></td>
                            </tr>
                            <tr class="qlnn1-4">
                                <td><label><b>Công Ty Gần Đây Nhất:</b></label></td>
                                <td><label class="hoso">{!! $cv->recent_company_id !!}</label></td>
                            </tr>
                            <tr class="qlnn1-4">
                                <td><label><b>Nghành Nghề Gần Đây Nhất:</b></label></td>
                                <td><label>{!! $cv->recent_category_id !!}</label></td>
                            </tr>
                            <tr class="qlnn1-4">
                                <td><label><b>Vị Trí Mong Muốn:</b></label></td>
                                <td><label>{!! $cv->expected_position_id!!}</label></td>
                            </tr>
                        </table>
                    </div>
                    <div style="width: 50%; float: left">
                        <table>
                            <tr class="qlnn1-4">
                                <td><label><b>Địa Điểm Mong Muốn:</b></label></td>
                                <td><label>{!! $cv->expected_location_id!!}</label></td>
                            </tr>
                            <tr class="qlnn1-4">
                                <td><label><b>Mức Lương Mong Muốn:</b></label></td>
                                <td><label>{!! $cv->expected_salary!!}</label></td>
                            </tr>
                            <tr class="qlnn1-4">
                                <td><label><b>Mức Độ Công Việc Hiện Tại:</b></label></td>
                                <td><label>{!! $cv->current_job_level!!}</label></td>
                            </tr>
                            <tr class="qlnn1-4">
                                <td><label><b>Mức Độ Công Việc Dự Kiến:</b></label></td>
                                <td><label>{!! $cv->expected_job_level!!}</label></td>
                            </tr>
                            <tr class="qlnn1-4">
                                <td><label><b>Loại Công Việc Dự Kiến:</b></label></td>
                                <td><label>{!! $cv->expected_job_category!!}</label></td>
                            </tr>
                        </table>
                    </div>
                    <div>
                        <input type="submit" value="Sửa" style="height: 30px; width: 40px;"  href='{!! route("hoso.sua", array("id" => $cv->id)) !!}'/>
                    </div>
                </form>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection