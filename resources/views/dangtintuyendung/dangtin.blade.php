@extends('layouts.tuyendung')
@section('noidung1')
<div style="font-size: 10px;color: #398439">
<?php
if (Session::has('success')) {
    echo \Session::get('success');
}
?>
</div>
<div class="dangtintuyendung" >
    <div class="dangtintuyendung_text">
        <label style="margin-top: 10px;margin-left: 20px;">Đăng Tuyển Dụng</label>
    </div>
    <div class="tuyendung">
        <div class="tuyendung_form">
            <form action="{!! route('xuly_dangtin') !!}" method="post">
                <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
                <div >
                    <div class="tuyendung_text">
                        <p style="margin-top: 10px;">Mô tả công việc</p>
                    </div>
                    <table style="margin-top: 20px;">
                        <tr>
                            <td style="width: 200px;"><label>Tên Công Việc</label></td>
                            <td >
                                <input class="tuyendung_form_ipput" type="text" value="" name="name" placeholder="Nhập công việc" />
                                <?php
                                if ($errors->has('name')) {
                                    echo $errors->first('name');
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 200px;"><label>Trình Độ</label></td>
                            <td>
                                <select name="levels" >
                                    <option value="" >Chọn trình độ</option> 
                                    <option></option>
                                    <option>Đại học</option>
                                    <option>Cao đẳng</option>
                                    <option>Trung cấp</option>
                                    <option>Tốt nghiệp phổ thông</option>
                                </select>
                                <?php
                                if ($errors->has('levels')) {
                                    echo $errors->first('levels');
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 200px;"><label>Nghành Nghề</label></td>
                            <td class="tuyendung_form_ipput">
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
                            <td style="width: 200px;"><label>Nơi Làm Việc</label></td>
                            <td class="tuyendung_form_ipput">
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
                            <td style="width: 200px;"><label>Kỹ Năng</label></td>
                            <td class="tuyendung_form_ipput">
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
                            <td style="width: 200px;"><label>Yêu cầu ngôn ngữ</label></td>
                            <td class="tuyendung_form_ipput">
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
                            <td style="width: 200px;"><label>Yêu cầu kinh nghiệm</label></td>
                            <td class="tuyendung_form_ipput">
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
                            <td style="width: 200px;"><label>Mức Lương</label></td>
                            <td >
                                <input class="tuyendung_form_ipput" type="text" value="" name="salary" placeholder="Nhập mức lương"/>
                                <?php
                                if ($errors->has('salary')) {
                                    echo $errors->first('salary');
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Người Liên Hệ</label></td>
                            <td>
                                <input class="tuyendung_form_ipput" type="text" disabled value="{!! $users->full_name !!}" name="full_name" />
                                <?php
                                if ($errors->has('name')) {
                                    echo $errors->first('name');
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 200px;"><label>Mô tả công việc</label></td>
                            <td >
                                <textarea class="tuyendung_form_ipput" value=""  name="description" placeholder="Nhập mô tả công việc"></textarea>
                                <?php
                                if ($errors->has('description')) {
                                    echo $errors->first('description');
                                }
                                ?>
                            </td>
                        </tr> 

                    </table>
                    <div class="right_tk" style="width: 19%;display: inline-block; margin-left: 350px;margin-top: 50px;">
                        <input class="input_ntdtk" type="submit" class="login login-submit" value="Lưu Và Tiếp Tục">
                    </div>
                </div>
            </form>
            </form>
        </div>
    </div>
</div>
@endsection

