@extends('admin.trangAdmin.admin')
@section('skill2')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             <small>Skill</small>
                        </h1>
                    </div>
                </div>
<?php 
    if (Session::has('success')) {
        echo \Session::get('success');
    }
?>

<form action="{!! route('admin.quanly_kynang.luu', ['id' => $skills->id]) !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
        <tr>
            <td><label>Tên</label></td>
            <td>
                <input type="text" value="{!! $skills->name !!}" name="name" />
                <?php
                if ($errors->has('name')) {
                    echo $errors->first('name');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Sua" />
            </td>
        </tr>
    </table>
</form>
@endsection