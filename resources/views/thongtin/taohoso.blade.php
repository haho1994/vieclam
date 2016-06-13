@extends('layouts.headerfooter')
@section('noi_dung')
<div class="lienhe">  
    <div class="lienhe1">
        <h3 style="margin-bottom: 20px;"><strong>Thông Tin Chung</strong></h3>
        <form action="{!! route('hoso.xuly') !!}" method="post">
            <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
            <div  style="width: 48%; float: left">
                <table>
                    <tr class="qlnn1-4"  >
                        <td ><label><b>Số Năm Kinh Nghiệm:</b></label></td>
                        <td>
                            <input type="text" value="" name="year_experience" class="taohoso2"/>
                            <?php
                            if ($errors->has('year_experience')) {
                                echo $errors->first('year_experience');
                            }
                            ?>
                    </tr>
                    <tr class="qlnn1-4">
                        <td><label><b>Bằng Cấp:</b></label></td>
                        <td>
                            <input type="text" value="" name="highes_edu" class="taohoso2" />
                            <?php
                            if ($errors->has('highes_edu')) {
                                echo $errors->first('highes_edu');
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="qlnn1-4">
                        <td><label><b>Công Ty Gần Đây Nhất:</b></label></td>
                        <td>
                            <select class="taohoso2" name="recent_company_id" >
                                <option value="" >Chọn công ty</option>
                                @foreach($companies as $company)
                                <option value="{!! $company->id !!}">{!! $company->name !!}</option>
                                @endforeach
                            </select>
                            <?php
                            if ($errors->has('recent_company_id')) {
                                echo $errors->first('recent_company_id');
                            }
                            ?>
                        </td>
                        </td>
                    </tr>
                    <tr class="qlnn1-4">
                        <td><label><b>Nghành Nghề Gần Đây Nhất:</b></label></td>
                        <td>
                            <select class="taohoso2" name="recent_category_id" >
                                <option value="" >Chọn nghành nghề</option>
                                @foreach($categories as $category)
                                <option value="{!! $category->id !!}">{!! $category->name !!}</option>
                                @endforeach
                            </select>
                            <?php
                            if ($errors->has('recent_category_id')) {
                                echo $errors->first('recent_category_id');
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="qlnn1-4">
                        <td><label><b>Vị Trí Mong Muốn:</b></label></td>
                        <td>
                            <input type="text" value="" name="expected_position_id" class="taohoso2"/>
                            <?php
                            if ($errors->has('expected_position_id')) {
                                echo $errors->first('expected_position_id');
                            }
                            ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div style="width: 50%; float: left">
                <table>
                    <tr class="qlnn1-4">
                        <td><label><b>Địa Điểm Mong Muốn:</b></label></td>
                        <td>
                            <select class="taohoso2" name="expected_location_id" >
                                <option value="" >Chọn địa điểm</option>
                                @foreach($locations as $location)
                                <option value="{!! $location->id !!}">{!! $location->name !!}</option>
                                @endforeach
                            </select>
                            <?php
                            if ($errors->has('expected_location_id')) {
                                echo $errors->first('expected_location_id');
                            }
                            ?>
                    </tr>
                    <tr class="qlnn1-4">
                        <td><label><b>Mức Lương Mong Muốn:</b></label></td>
                        <td>
                            <input type="text" value="" name="expected_salary" class="taohoso2"/>
                            <?php
                            if ($errors->has('expected_salary')) {
                                echo $errors->first('expected_salary');
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="qlnn1-4">
                        <td><label><b>Mức Độ Công Việc Hiện Tại:</b></label></td>
                        <td>
                            <input type="text" value="" name="current_job_level" class="taohoso2"/>
                            <?php
                            if ($errors->has('current_job_level')) {
                                echo $errors->first('current_job_level');
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="qlnn1-4">
                        <td><label><b>Mức Độ Công Việc Dự Kiến:</b></label></td>
                        <td>
                            <input type="text" value="" name="expected_job_level" class="taohoso2"/>
                            <?php
                            if ($errors->has('expected_job_level')) {
                                echo $errors->first('expected_job_level');
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="qlnn1-4">
                        <td><label><b>Loại Công Việc Dự Kiến:</b></label></td>
                        <td>
                            <input type="text" value="" name="expected_job_category" class="taohoso2" />
                            <?php
                            if ($errors->has('expected_job_category')) {
                                echo $errors->first('expected_job_category');
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="radio">
                        <td>
                            <label>
                                <form action="/tai/upload/{id}" method="post" enctype="multipart/form-data" >
                                    <span class="upload-button">
                                        <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
                                        <input class="editable" type="file" name="filename" id="fileAttach" value="Đính kèm hồ sơ" tabindex="8">
                                    </span>
                                </form>
                            </label>
                        </td>
                    </tr>
                </table>
            </div>
            <div>
                <input type="submit" value="Tạo" style="height: 30px; width: 40px;"/>
            </div>
        </form>
    </div>
</div>
</form>
@endsection