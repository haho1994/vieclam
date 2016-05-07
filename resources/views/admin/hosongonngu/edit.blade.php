@extends('admin.trangAdmin.admin')
@section('hosongonngu1')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             <small>Curriculumvitaes Languages/ Sửa </small>
                        </h1>
                    </div>
</div>
<?php 
    if (Session::has('success')) {
        echo \Session::get('success');
    }
?>

<form action="{!! route('admin.quanly_curriculumvitaes_languages.luu', ['id_curriculum_vitae' => $curriculumvitalanguage->id]) !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>  
        <tr>
            <td><label>Ngôn ngữ</label></td>
            <td>
                <select name="id_language" >
                    <option value="" >Chon</option>
                    @foreach($languages as $language)
                    <?php
                        $selected = '';
                        if ($language->id == $curriculumvitalanguage->id_language) {
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
            <td colspan="2">
                <input type="submit" value="Sửa" />
            </td>
        </tr>
    </table>
</form>
@endsection