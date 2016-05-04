@extends('admin.trangAdmin.admin')
@section('ngonngu')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Cập Nhật <small>Ngôn Ngữ</small>
                        </h1>
                    </div>
                </div>
<?php
if (Session::has('success')) {
    echo \Session::get('success');
}
?>

<form action="{!! route('admin.quanly-ngonngu.xuly') !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <div>
        <label>Tên Ngôn Ngữ</label>
        <div>
            <input type="text" value=""  name="name">
            <?php
            if ($errors->has('name')) {
                echo $errors->first('name');
            }
            ?>
        </div>
    </div>
    <div>
        <div>
            <input type="submit" name="" value="Thêm">
        </div>
    </div>
</form>
@endsection