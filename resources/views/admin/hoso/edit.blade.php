@extends('admin.trangAdmin.admin')
@section('noidung')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             <small>Curriculumvitaes/ Sửa</small>
                        </h1>
                    </div>
</div>
<?php 
    if (Session::has('success')) {
        echo \Session::get('success');
    }
?>

<form action="{!! route('admin.quanly_curriculumvitaes.luu', ['id' => $curriculumvita->id]) !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
        <tr>
            <td><label>Id user</label></td>
            <td>
                <select style="width: 70%;" name="id_user" >
                    @foreach($users as $user)
                    <?php
                        $selected = '';
                        if ($user->id == $curriculumvita->id_user) {
                            $selected = 'selected';
                        }
                    ?>
                    <option value="{!! $user->id !!}" {!!$selected!!} >{!! $user->full_name !!}</option>
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
                <input style="width: 70%;" type="text" value="{!! $curriculumvita->year_experience !!}" name="year_experience" />
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
                <input style="width: 70%;" type="text" value="{!! $curriculumvita->highes_edu !!}" name="highes_edu" />
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
                    @foreach($companies as $company)
                    <?php
                        $selected = '';
                        if ($company->id == $curriculumvita->recent_company_id) {
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
        <tr>
            <td><label>Nghành nghề gần đây</label></td>
            <td>
                <select style="width: 70%;" name="recent_category_id" >
                    @foreach($categories as $category)
                    <?php
                        $selected = '';
                        if ($category->id == $curriculumvita->recent_category_id) {
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
            </td>
        </tr>
        <tr>
            <td><label>Vị trí công việc dự kiến</label></td>
            <td>
                <select style="width: 70%;" name="expected_position_id" >
                    @foreach($categories as $category)
                    <?php
                        $selected = '';
                        if ($category->id == $curriculumvita->expected_position_id) {
                            $selected = 'selected';
                        }
                    ?>
                    <option value="{!! $category->id !!}" {!!$selected!!} >{!! $category->name !!}</option>
                    @endforeach
                </select>
                <?php
                if ($errors->has('expected_position_id')) {
                    echo $errors->first('expected_position_id');
                }
                ?>
        </tr>
        <tr>
            <td><label>Đia điểm dự kiến</label></td>
            <td>
                <select style="width: 70%;" name="expected_location_id" >
                    @foreach($locations as $location)
                    <?php
                        $selected = '';
                        if ($location->id == $curriculumvita->expected_location_id) {
                            $selected = 'selected';
                        }
                    ?>
                    <option value="{!! $location->id !!}" {!!$selected!!} >{!! $location->name !!}</option>
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
                <input style="width: 70%;" type="text" value="{!! $curriculumvita->expected_salary !!}" name="expected_salary" />
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
                <input style="width: 70%;" type="text" value="{!! $curriculumvita->current_job_level !!}" name="current_job_level" />
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
                <input style="width: 70%;" type="text" value="{!! $curriculumvita->expected_job_level !!}" name="expected_job_level" />
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
                    @foreach($categories as $category)
                    <?php
                        $selected = '';
                        if ($category->id == $curriculumvita->expected_job_category) {
                            $selected = 'selected';
                        }
                    ?>
                    <option value="{!! $category->id !!}" {!!$selected!!} >{!! $category->name !!}</option>
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
            <td><label>Ngon ngu</label></td>
            <td>
                <select style="width: 70%;"  >
                    @foreach($languages as $language)
                    <option value="{!!$language->id!!}" >{!!$language->name!!}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td><label>Trạng thái</label></td>
            <td>
                <select style="width: 500px;" name="is_negotiable">
                    <?php
                        $check1 = "";
                        $check2 = "";
                        if ($company->is_negotiable) {
                            $check2 = 'selected';
                        }
                        if (!$company->is_negotiable) {
                            $check1 = 'selected';
                        }
                    ?>
                    <option {!! $check1 !!} value="0">Chua duyet</option>
                    <option {!! $check2 !!} value="1">Duyet</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Sửa" />
            </td>
        </tr>
    </table>
</form>
@endsection