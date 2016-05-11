@extends('admin.trangAdmin.admin')
@section('noidung')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             <small>Jobs/ Thêm</small>
                        </h1>
                    </div>
</div>
<?php 
    if (Session::has('success')) {
        echo \Session::get('success');
    }
?>

<form action="{!! route('admin.quanly_jobs.xuly') !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
        <tr>
            <td><label>Tên công việc</label></td>
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
            <td><label>Công ty</label></td>
            <td>
                <select name="id_company" >
                <option value="" >Chọn công ty</option>
                @foreach($companies as $company)
                <option value="{!! $company->id !!}">{!! $company->name !!}</option>
                @endforeach
                </select>
                <?php
                if ($errors->has('id_company')) {
                    echo $errors->first('id_company');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Địa điểm</label></td>
            <td>
                 <select name="id_location" >
                <option value="" >Chọn địa điểm</option>
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
            <td><label>Kỹ năng</label></td>
            <td>
                <select name="id_skill" >
                    <option value="" >Chọn</option>
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
            <td><label>Mức lương</label></td>
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
            <td><label>Nghành nghề</label></td>
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
            <td><label>Giới tính</label></td>
            <td>
                <input   name="gender" type="radio"  value="">Nam<br>
                <input   name="gender" type="radio"  value="">Nữ<br>
                <?php
                if ($errors->has('gender')) {
                    echo $errors->first('gender');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Trình độ</label></td>
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
            <td><label>Kinh nghiệm</label></td>
            <td>
                <input type="text" value="" name="experience" />
                <?php
                if ($errors->has('experience')) {
                    echo $errors->first('experience');
                }
                ?>
            </td>
        </tr> 
        <tr>
            <td colspan="2">
                <input type="submit" value="Tao" />
            </td>
        </tr>
    </table>
</form>
@endsection