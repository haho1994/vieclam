@extends('layouts.headerfooter')
@section('noi_dung')
<div class="dangtintuyendung">
    <div class="tuyendung">
        <form>
            <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" >
            <div>
                <div>
                    <label>Mô tả công việc</label>
                </div>
                <table>
                    <tr>
                        <td><label>Tên Công Việc</label></td>
                        <td>
                            <input type="text" value="" name="name" />
                            <?php
                            if ($errors->has('name')) {
                                echo $errors->first('name');
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Trình Độ</label></td>
                        <td>
                            <input type="text" value="" name="levels" />
                            <?php
                            if ($errors->has('levels')) {
                                echo $errors->first('levels');
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Nghành Nghề</label></td>
                        <td>
                            <select name="id_category" >
                                <option value="" >Chọn nghành nghề</option>
                                @foreach($categories as $category)
                                <option value="{!! $category->id !!}">{!! $category->name !!}</option>
                                @endforeach
                            </select>
                            <?php
                            if ($errors->has('id_category')) {
                                echo $errors->first('id_category');
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Nơi Làm Việc</label></td>
                        <td>
                            <select name="id_location" >
                                <option value="" >Chọn nơi làm việc</option>
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
                        <td><label>Kỹ Năng</label></td>
                        <td>
                            <select name="id_skill" >
                                <option value="" >Chọn kỹ năng</option>
                                @foreach($skills as $skill)
                                <option value="{!! $skill->id !!}">{!! $skill->name !!}</option>
                                @endforeach
                            </select>
                            <?php
                            if ($errors->has('id_skill')) {
                                echo $errors->first('id_skill');
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Yêu cầu ngôn ngữ</label></td>
                        <td>
                            <select name="id_language" >
                                <option value="" >Chọn ngôn ngữ</option>
                                @foreach($languages as $language)
                                <option value="{!! $language->id !!}">{!! $language->name !!}</option>
                                @endforeach
                            </select>
                            <?php
                            if ($errors->has('id_language')) {
                                echo $errors->first('id_language');
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Yêu cầu kinh nghiệm</label></td>
                        <td>
                            <select name="experience" >
                                <option value="" >Chọn kinh nghiệm</option> 
                                <option>Không yêu cầu kinh nghiệm</option>
                                <option>1 năm</option>
                                <option>1-2 năm</option>
                                <option>2-5 năm</option>
                                <option>Nhiều hơn 5 năm</option>
                            </select>
                            <?php
                            if ($errors->has('experience')) {
                                echo $errors->first('experience');
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Mức Lương</label></td>
                        <td>
                            <input type="text" value="" name="salary" />
                            <?php
                            if ($errors->has('salary')) {
                                echo $errors->first('salary');
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Mô tả công việc</label></td>
                        <td>
                            <input  required="required" maxlength="14500" data-counter-target="jobDescription" cols="30" rows="7" placeholder="Nhập mô tả công việc" data-show-error-after=".hint-container" data-show-error-container=".col-sm-9" tabindex="10" data-bind="jobDes" aria-required="true"  type="text" value="" name="description" />
                            <?php
                            if ($errors->has('description')) {
                                echo $errors->first('description');
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Người Liên Hệ</label></td>
                        <td>
                            <input type="text" value="{!! $job->$user->id !!}" name="full_name" disabled />
                            <?php
                            if ($errors->has('id_user')) {
                                echo $errors->first('id_user');
                            }
                            ?>
                        </td>
                    </tr>
<!--                    <tr>
                        <td><label>Địa Chỉ Email Nhận Hồ Sơ</label></td>
                        <td>

                            <?php
                            if ($errors->has('id_user')) {
                                echo $errors->first('id_user');
                            }
                            ?>
                        </td>
                    </tr>-->
                </table>
            </div>
        </form>
    </div>
</div>
@endsection

