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
                        <td>
                            <input type="text" value="{!! $cv->year_experience !!}" name="year_experience" class="taohoso2"/>
                            <?php
                            if ($errors->has('year_experience')) {
                                echo $errors->first('year_experience');
                            }
                            ?>
                    </tr>
                    <tr class="qlnn1-4">
                        <td><label><b>Bằng Cấp:</b></label></td>
                        <td>
                            <input type="text" value="{!! $cv->highes_edu !!}" name="highes_edu" class="taohoso2" />
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
                            <select name="recent_company_id" class="taohoso2" >
                                @foreach($companies as $company)
                                <?php
                                $selected = '';
                                if ($company->id == $cv->recent_company_id) {
                                    $selected = 'selected';
                                }
                                ?>
                                <option value="{!! $company->id !!}" {!!$selected!!} >{!! $company->name !!}</option>
                                @endforeach
                            </select>
                            <?php
                            if ($errors->has('recent_company_id')) {
                                echo $errors->first('recent_company_id');
                            }
                            ?>
                              
                        </td>
                    </tr>
                    <tr class="qlnn1-4">
                        <td><label><b>Nghành Nghề Gần Đây Nhất:</b></label></td>
                        <td>
                            <select name="recent_category_id"  class="taohoso2">
                                @foreach($categories as $category)
                                <?php
                                $selected = '';
                                if ($category->id == $cv->recent_category_id) {
                                    $selected = 'selected';
                                }
                                ?>
                                <option value="{!! $category->id !!}" {!!$selected!!} >{!! $category->name !!}</option>
                                @endforeach
                            </select>
                            <?php
                            if ($errors->has('recent_category_id')) {
                                echo $errors->first('recent_category_id');
                            }
                            ?>
            <!--                            <input type="text" value="{!! $cv->recent_category_id !!}" name="recent_category_id" class="taohoso2"/>-->
                            <?php
//                            if ($errors->has('recent_category_id')) {
//                                echo $errors->first('recent_category_id');
//                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="qlnn1-4">
                        <td><label><b>Vị Trí Mong Muốn:</b></label></td>
                        <td>
                            <input type="text" value="{!! $cv->expected_position_id !!}" name="expected_position_id" class="taohoso2"/>
                            <?php
                            if ($errors->has('expected_position_id')) {
                                echo $errors->first('expected_position_id');
                            }
                            ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div style="width: 48%; float: left">
                <table>
                    <tr class="qlnn1-4">
                        <td><label><b>Địa Điểm Mong Muốn:</b></label></td>
                        <td>
                            <select name="expected_location_id" class="taohoso2">
                                @foreach($locations as $location)
                                <?php
                                $selected = '';
                                if ($location->id == $cv->expected_location_id) {
                                    $selected = 'selected';
                                }
                                ?>
                                <option value="{!! $location->id !!}" {!!$selected!!}  >{!! $location->name !!}</option>
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
                        <td >
                            <input type="text" value="{!! $cv->expected_salary !!}" name="expected_salary" class="taohoso2"/>
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
                            <input type="text" value="{!! $cv->current_job_level !!}" name="current_job_level" class="taohoso2"/>
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
                            <input type="text" value="{!! $cv->expected_job_level !!}" name="expected_job_level" class="taohoso2"/>
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
                            <input type="text" value="{!! $cv->expected_job_category !!}" name="expected_job_category" class="taohoso2" />
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
                                <form action="/tai/upload/{!!$cv->id!!}" method="post" enctype="multipart/form-data" >
                                    <span class="upload-button">
                                        <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
                                        <input class="editable" type="file" name="filename" id="fileAttach" value="{!! $cv->filename !!}" tabindex="8">
                                    </span>
                                </form>
                            </label>
                        </td>
                    </tr>
                </table>
            </div>
            <div>
                <input type="submit" value="Sửa" style="height: 30px; width: 40px; margin-top: 300px;"/>
            </div>
        </form>
    </div>
</div>
</form>
@endsection