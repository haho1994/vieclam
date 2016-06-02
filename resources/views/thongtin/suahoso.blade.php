@extends('layouts.headerfooter')
@section('noi_dung')
<div class="lienhe">  
            <div class="lienhe1">
                <h3 style="margin-bottom: 20px;"><strong>Thông Tin Chung</strong></h3>
              <form action="{!! route('hoso.luu', ['id' => $cv->id]) !!}" method="post">
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
                        <input type="submit" value="Sửa" style="height: 30px; width: 40px;"/>
                    </div>
                </form>
            </div>
        </div>
</form>
@endsection