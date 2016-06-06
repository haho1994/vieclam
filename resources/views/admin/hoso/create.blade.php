@extends('admin.trangAdmin.admin')
@section('noidung')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             <small>Curriculumvitaes/ Thêm</small>
                        </h1>
                    </div>
</div>
<?php 
    if (Session::has('success')) {
        echo \Session::get('success');
    }
?>

<form action="{!! route('admin.quanly_curriculumvitaes.xuly') !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
        <tr>
            <td><label>Id user</label></td>
            <td>
                <select style="width: 70%;" name="id_user" >
                    <option value="" >Chọn user</option>
                    @foreach($users as $user)
                    <option value="{!! $user->id !!}">{!! $user->full_name !!}</option>
                    @endforeach
                </select>
                <?php
                if ($errors->has('id_user')) {
                    echo $errors->first('id_user');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Kinh nghiệm</label></td>
            <td>
                <input style="width: 70%;" type="text" value="" name="year_experience" />
                <?php
                if ($errors->has('year_experience')) {
                    echo $errors->first('year_experience');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Trình độ</label></td>
            <td>
                <input style="width: 70%;" type="text" value="" name="highes_edu" />
                <?php
                if ($errors->has('highes_edu')) {
                    echo $errors->first('highes_edu');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Công ty gần đây</label></td>
            <td>
                <select style="width: 70%;" name="recent_company_id" >
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
        </tr>  
        <tr>
            <td><label>Nghành nghề gần đây</label></td>
            <td>
                <select style="width: 70%;" name="recent_category_id" >
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
        <tr>
            <td><label>Vị trí công việc dự kiến</label></td>
            <td>
                <input style="width: 70%;" type="text" value="" name="expected_position_id" />
                <?php
                if ($errors->has('expected_position_id')) {
                    echo $errors->first('expected_position_id');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Đia điểm dự kiến</label></td>
            <td>
                <select style="width: 70%;" name="expected_location_id" >
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
            </td>
        </tr>
        <tr>
            <td><label>Mức lương dự kiến</label></td>
            <td>
                <input style="width: 70%;" type="text" value="" name="expected_salary" />
                <?php
                if ($errors->has('expected_salary')) {
                    echo $errors->first('expected_salary');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Mức độ công việc hiện tại</label></td>
            <td>
                <input style="width: 70%;" type="text" value="" name="current_job_level" />
                <?php
                if ($errors->has('current_job_level')) {
                    echo $errors->first('current_job_level');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Mức độ công việc dự kiến</label></td>
            <td>
                <input style="width: 70%;" type="text" value="" name="expected_job_level" />
                <?php
                if ($errors->has('expected_job_level')) {
                    echo $errors->first('expected_job_level');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Loại công việc dự kiến</label></td>
            <td>
                <select style="width: 70%;" name="expected_job_category" >
                    <option value="" >Chọn nghành nghề</option>
                    @foreach($categories as $category)
                    <option {!! $category->id !!}>{!! $category->name !!}</option>
                    @endforeach
                </select>
                <?php
                if ($errors->has('expected_job_category')) {
                    echo $errors->first('expected_job_category');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Trạng thái</label></td>
            <td>
                <select style="width: 70%;" name="is_negotiable">
                    <option  value="">Chọn trạng thái</option>  
                    <option  value="0">Chua duyet</option>
                    <option value="1">Duyet</option>
                </select>
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