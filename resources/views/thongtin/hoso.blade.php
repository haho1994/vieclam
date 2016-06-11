@extends('layouts.headerfooter')
@section('noi_dung')
<div class="wap">

    <div class="lienhe">
        <h2>Hồ Sơ Của Tôi</h2>

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
        @if(!empty(auth()->user()->curriculumvita->id))
        <a href="{!! route('hoso.tao') !!}">Tạo Hồ Sơ</a>
        @else
        <div>

            <div class="lienhe">  
                <div class="lienhe1">
                    <h3 style="margin-bottom: 20px;"><strong>Thông Tin Chung</strong></h3>
                    <form style="width: 100%" class="ttht" action="{!! route('hoso.sua', array('id' => $cv->id)) !!}" method="get" >
                        <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
                        <div  style="width: 55%; float: left">
                            <table>
                                <tr class="qlnn1-4"  >
                                    <td><label><b>Số Năm Kinh Nghiệm:</b></label></td>
                                    <td><label class="hoso">{!! $cv->year_experience !!}</label></td>
                                </tr>
                                <tr class="qlnn1-4">
                                    <td><label><b>Bằng Cấp:</b></label></td>
                                    <td><label class="hoso">{!! $cv->highes_edu !!}</label></td>
                                </tr>
                                <tr class="qlnn1-4">
                                    <td><label><b>Công Ty Gần Đây Nhất:</b></label></td>
                                    <td>
                                        <label class="hoso">
                                            @if($cv->company)
                                            {!!$cv->company->name!!}
                                            @endif
                                        </label>
                                    </td>
                                </tr>
                                <tr class="qlnn1-4">
                                    <td><label><b>Nghành Nghề Gần Đây Nhất:</b></label></td>
                                    <td>
                                        <label>
                                            @if($cv->category)
                                            {!!$cv->category->name!!}
                                            @endif
                                        </label>
                                    </td>
                                </tr>
                                <tr class="qlnn1-4">
                                    <td><label><b>Vị Trí Mong Muốn:</b></label></td>
                                    <td><label>{!! $cv->expected_position_id!!}</label></td>
                                </tr>

                            </table>
                        </div>
                        <div style="width: 45%; float: left">
                            <table>
                                <tr class="qlnn1-4">
                                    <td><label><b>Địa Điểm Mong Muốn:</b></label></td>
                                    <td>
                                        <label>
                                            @if($cv->location)
                                            {!!$cv->location->name!!}
                                            @endif
                                        </label>
                                    </td>
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
                                @if(!empty($lg))    
                                <tr>
                                    <td><label><b>Ngôn ngữ</b></label></td>
                                    <td><label>{!! $lg->id_language!!}</label></td>
                                </tr>
                                @endif
                                <tr class="qlnn1-4">
                                    <td><label><b>Hồ Sơ:</b></label></td>
                                    <td><label>{!! $cv->filename!!}</label></td>
                                </tr>
                            </table>
                        </div>
                        <div>
                            <input type="submit" value="Sửa" style="height: 30px; width: 40px;"  />
                        </div>
                    </form>
                </div>
            </div>

        </div>

        @endif
    </div>
</div>
@endsection