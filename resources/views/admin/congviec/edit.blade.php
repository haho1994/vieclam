@extends('admin.trangAdmin.admin')
@section('job2')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             <small>Jobs/ Sửa</small>
                        </h1>
                    </div>
</div>
<?php 
    if (Session::has('success')) {
        echo \Session::get('success');
    }
?>

<form action="{!! route('admin.quanly_jobs.luu', ['id' => $job->id]) !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
        <tr>
            <td><label>Tên công viêc</label></td>
            <td>
                <input type="text" value="{!! $job->name !!}" name="year_experience" />
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
                    @foreach($companies as $company)
                    <?php
                        $selected = '';
                        if ($company->id == $job->id_company) {
                            $selected = 'selected';
                        }
                    ?>
                    <option value="{!! $company->id !!}" {!!$selected!!} >{!! $company->name !!}</option>
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
                    @foreach($locations as $location)
                    <?php
                        $selected = '';
                        if ($location->id == $job->id_location) {
                            $selected = 'selected';
                        }
                    ?>
                    <option value="{!! $location->id !!}" {!!$selected!!} >{!! $location->name !!}</option>
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
                    @foreach($skills as $skill)
                    <?php
                        $selected = '';
                        if ($skill->id == $job->id_skill) {
                            $selected = 'selected';
                        }
                    ?>
                    <option value="{!! $skill->id !!}" {!!$selected!!} >{!! $skill->name !!}</option>
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
                <input type="text" value="{!! $job->salary !!}" name="salary" />
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
                    @foreach($categories as $category)
                    <?php
                        $selected = '';
                        if ($category->id == $job->id_category) {
                            $selected = 'selected';
                        }
                    ?>
                    <option value="{!! $category->id !!}" {!!$selected!!} >{!! $category->name !!}</option>
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
            <td><label>Ngôn ngữ</label></td>
            <td>
                <select name="id_language" >
                    @foreach($languages as $language)
                    <?php
                        $selected = '';
                        if ($language->id == $job->id_language) {
                            $selected = 'selected';
                        }
                    ?>
                    <option value="{!! $language->id !!}" {!!$selected!!} >{!! $language->name !!}</option>
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
            <td><label>Trình độ</label></td>
            <td>
                <input type="text" value="{!! $job->levels !!}" name="expected_salary" />
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
                <input type="text" value="{!! $job->experience !!}" name="experience" />
                <?php
                if ($errors->has('experience')) {
                    echo $errors->first('experience');
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