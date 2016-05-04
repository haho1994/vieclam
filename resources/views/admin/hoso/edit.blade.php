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
                <select name="id_user" >
                    <option value="" >Chọn</option>
                    @foreach($curriculumvita as $user)
                    <?php
                        $selected = '';
                        if ($user->user->id == $curriculumvita->id_user) {
                            $selected = 'selected';
                        }
                    ?>
                    <option value="{!! $user->user->id !!}" {!!$selected!!} >{!! $user->user->name !!}</option>
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
                <input type="text" value="{!! $curriculumvita->year_experience !!}" name="year_experience" />
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
                <input type="text" value="{!! $curriculumvita->highes_edu !!}" name="highes_edu" />
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
                    <option value="" >Chọn</option>
                    @foreach($curriculumvita as $user)
                    <?php
                        $selected = '';
                        if ($user->company->id == $curriculumvita->recent_company_id) {
                            $selected = 'selected';
                        }
                    ?>
                    <option value="{!! $user->company->id !!}" {!!$selected!!} >{!! $user->company->name !!}</option>
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
            <td><label>Ngành nghề gần đây</label></td>
            <td>
                <select name="recent_category_id" >
                    <option value="" >Chọn</option>
                    @foreach($curriculumvita as $user)
                    <?php
                        $selected = '';
                        if ($user->category->id == $curriculumvita->recent_category_id) {
                            $selected = 'selected';
                        }
                    ?>
                    <option value="{!! $user->category->id !!}" {!!$selected!!} >{!! $user->category->name !!}</option>
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
                <input type="text" value="{!! $curriculumvita->expected_position_id !!}" name="expected_position_id" />
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
                <select name="expected_location_id" >
                    <option value="" >Chọn</option>
                    @foreach($curriculumvita as $user)
                    <?php
                        $selected = '';
                        if ($user->location->id == $curriculumvita->expected_location_id) {
                            $selected = 'selected';
                        }
                    ?>
                    <option value="{!! $user->location->id !!}" {!!$selected!!} >{!! $user->location->name !!}</option>
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
                <input type="text" value="{!! $curriculumvita->expected_salary !!}" name="expected_salary" />
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
                <input type="text" value="{!! $curriculumvita->current_job_level !!}" name="current_job_level" />
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
                <input type="text" value="{!! $curriculumvita->expected_job_level !!}" name="expected_job_level" />
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
                    <option value="" >Chọn</option>
                    @foreach($curriculumvita as $user)
                    <?php
                        $selected = '';
                        if ($user->category->id == $curriculumvita->expected_job_category) {
                            $selected = 'selected';
                        }
                    ?>
                    <option value="{!! $user->category->id !!}" {!!$selected!!} >{!! $user->category->name !!}</option>
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
            <td><label>Thương lượng</label></td>
            <td>
                <input type="text" value="{!! $curriculumvita->is_negotiable !!}" name="is_negotiable" />
                <?php
                if ($errors->has('is_negotiable')) {
                    echo $errors->first('is_negotiable');
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