@extends('layouts.tuyendung')
@section('noidung1')
<div class="dangtintuyendung_text">
    <label style="margin-top: 10px;margin-left: 20px;">Quản Lý Việc Làm</label>
</div>
<div style="font-size: 15px;margin-left: 50px;">
<?php
if (Session::has('success')) {
    echo \Session::get('success');
}
?>
</div>
<div style="width: 800px;height: 1000px;background: #fff;margin-left: 50px">
    <div style="width: 750px;height: 50px;border-bottom: 1px #B0BEC5 dotted;margin-left: 25px;">
        <label style="font-size: 17px;margin-top: 20px;">Sửa Công Việc</label>
    </div>
    <div style="margin-left: 70px;margin-top: 30px;">
        <form action="{!! route('ntdquanlyvieclam.luu', ['id' => $job->id]) !!}" method="post">
            <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
            <table class="ntdsuacongviec">
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
                    <td style="width: 150px;"><label>Công ty</label></td>
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
                    <td><label>Trang thai</label></td>
                    <td>
                        <select name="status">
                            <option value="">Chon trang thai</option>
                            <?php
                            $check1 = "";
                            $check2 = "";
                            if ($job->status) {
                                $check2 = 'selected';
                            }
                            if (!$job->status) {
                                $check1 = 'selected';
                            }
                            ?>
                            <option {!! $check1 !!} value="0">Chua duyet</option>
                            <option {!! $check2 !!} value="1">Duyet</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Người Liên Hệ</label></td>
                    <td>
                        <input class="tuyendung_form_ipput" type="text" disabled value="{!! $job->user->full_name !!}" name="full_name" />
                        <?php
                        if ($errors->has('name')) {
                            echo $errors->first('name');
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><label>Mô tả</label></td>
                    <td>
                        <input type="text" value="{!! $job->description !!}" name="description" />
                        <?php
                        if ($errors->has('description')) {
                            echo $errors->first('description');
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
    </div>
</div>
@endsection