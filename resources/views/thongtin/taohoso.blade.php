@extends('layouts.headerfooter')
@section('noi_dung')
<div class="wap">

    <div class="lienhe">
        <h2>Hồ Sơ Của Tôi</h2>
        <div class="lienhe">  
            <div class="lienhe1">
                <h3 style="margin-bottom: 20px; margin-left: 400px; color: #0000FF"><strong>Thông Tin Chung</strong></h3>

                <form action="{!! route('hoso.xuly') !!}" method="post" >
                    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
                    <table class="taohoso">
                        <tr>
                            <td><label class="taohoso1">Họ Và Tên:</label></td>
                            <td><input class="taohoso2" type="text" value="{!! $user->full_name !!}" name="full_name"/></td>
                        </tr>
                        <tr>
                            <td><label class="taohoso1">Số Năm Kinh Nghiệm:</label></td>
                            <td >
                                <input type="text" value="" name="year_experience" class="taohoso2"/>
                                <?php
                                if ($errors->has('year_experience')) {
                                    echo $errors->first('year_experience');
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="taohoso1">Bằng Cấp:</label></td>
                            <td>
                                <input type="text" value="" name="highes_edu" class="taohoso2" />
                                <?php
                                if ($errors->has('highes_edu')) {
                                    echo $errors->first('highes_edu');
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="taohoso1">Công Ty Gần Đây Nhất:</label></td>
                            <td>
                                <input type="text" value="" name="recent_company_id" class="taohoso2"/>
                                <?php
                                if ($errors->has('recent_company_id')) {
                                    echo $errors->first('recent_company_id');
                                }
                                ?>
                            </td>
                        </tr>  
                        <tr>
                            <td><label class="taohoso1">Nghành Nghề Gần Đây Nhất:</label></td>
                            <td>
                                <input type="text" value="" name="recent_category_id" class="taohoso2"/>
                                <?php
                                if ($errors->has('recent_category_id')) {
                                    echo $errors->first('recent_category_id');
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="taohoso1">Vị Trí Mong Muốn:</label></td>
                            <td>
                                <input type="text" value="" name="expected_position_id" class="taohoso2"/>
                                <?php
                                if ($errors->has('expected_position_id')) {
                                    echo $errors->first('expected_position_id');
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="taohoso1">Địa Điểm Mong Muốn:</label></td>
                            <td>
                                <input type="text" value="" name="expected_location_id" class="taohoso2"/>
                                <?php
                                if ($errors->has('expected_location_id')) {
                                    echo $errors->first('expected_location_id');
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="taohoso1">Mức Lương Mong Muốn:</label></td>
                            <td>
                                <input type="text" value="" name="expected_salary" class="taohoso2"/>
                                <?php
                                if ($errors->has('expected_salary')) {
                                    echo $errors->first('expected_salary');
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="taohoso1">Mức Độ Công Việc Hiện Tại:</label></td>
                            <td>
                                <input type="text" value="" name="current_job_level" class="taohoso2"/>
                                <?php
                                if ($errors->has('current_job_level')) {
                                    echo $errors->first('current_job_level');
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="taohoso1">Mức Độ Công Việc Dự Kiến:</label></td>
                            <td>
                                <input type="text" value="" name="expected_job_level" class="taohoso2"/>
                                <?php
                                if ($errors->has('expected_job_level')) {
                                    echo $errors->first('expected_job_level');
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="taohoso1">Loại Công Việc Dự Kiến:</label></td>
                            <td>
                                <input type="text" value="" name="expected_job_category" class="taohoso2" />
                                <?php
                                if ($errors->has('expected_job_category')) {
                                    echo $errors->first('expected_job_category');
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" value="Tao" style="height: 30px; width: 40px;"/>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            @endsection