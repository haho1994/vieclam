@extends('layouts.headerfooter')
@section('noi_dung')
<form action="{!! route('luu', ['id' => $curriculumvitaes->id]) !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
        <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
        <table>
            <tr>
                <td><label>Tên Người Dùng</label></td>
                <td>
                    <select name="id_user" >
                        @foreach($users as $user)
                        <?php
                        $selected = '';
                        if ($user->id == $curriculumvitaes->id_user) {
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
                    <input type="text" value="{!! $curriculumvitaes->year_experience !!}" name="year_experience" />
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
                    <input type="text" value="{!! $curriculumvitaes->highes_edu !!}" name="highes_edu" />
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
                    <select name="recent_company_id" >
                        @foreach($companies as $company)
                        <?php
                        $selected = '';
                        if ($company->id == $curriculumvitaes->recent_company_id) {
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
                    <select name="recent_category_id" >
                        @foreach($categories as $category)
                        <?php
                        $selected = '';
                        if ($category->id == $curriculumvitaes->recent_category_id) {
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
                    <select name="expected_position_id" >
                        @foreach($categories as $category)
                        <?php
                        $selected = '';
                        if ($category->id == $curriculumvitaes->expected_position_id) {
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
                    <select name="expected_location_id" >
                        @foreach($locations as $location)
                        <?php
                        $selected = '';
                        if ($location->id == $curriculumvitaes->expected_location_id) {
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
                    <input type="text" value="{!! $curriculumvitaes->expected_salary !!}" name="expected_salary" />
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
                    <input type="text" value="{!! $curriculumvitaes->current_job_level !!}" name="current_job_level" />
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
                    <input type="text" value="{!! $curriculumvitaes->expected_job_level !!}" name="expected_job_level" />
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
                    <select name="expected_job_category" >
                        @foreach($categories as $category)
                        <?php
                        $selected = '';
                        if ($category->id == $curriculumvitaes->expected_job_category) {
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
                <td colspan="2">
                    <input type="submit" value="Sửa" />
                </td>
            </tr>
        </table>
</form>
@endsection