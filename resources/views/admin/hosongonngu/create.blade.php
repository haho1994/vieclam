@extends('admin.trangAdmin.admin')
@section('hosongonngu2')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             <small>Curriculumvitaes Languages/ Thêm</small>
                        </h1>
                    </div>
</div>
<?php 
    if (Session::has('success')) {
        echo \Session::get('success');
    }
?>

<form action="{!! route('admin.quanly_curriculumvitaes_languages.xuly') !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
        <tr>
            <td><label>id hồ sơ</label></td>
            <td>
                <select name="id_curriculum_vitae" >
                    <option value="" >Chọn</option>
                    @foreach($curriculumvitaes as $curriculumvita)
                    <option value="{!! $curriculumvita->id !!}" >{!! $curriculumvita->id !!}</option>
                    @endforeach
                </select>
                <?php
                if ($errors->has('id_curriculum_vitae')) {
                    echo $errors->first('id_curriculum_vitae');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Chọn ngôn ngữ</label></td>
            <td>
                <select name="id_language" >
                    <option value="" >Chon danh muc</option>
                    @foreach($languages as $language)
                    <option value="{!! $language->id !!}" >{!! $language->name !!}</option>
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
            <td colspan="2">
                <input type="submit" value="Tạo" />
            </td>
        </tr>
    </table>
</form>
@endsection