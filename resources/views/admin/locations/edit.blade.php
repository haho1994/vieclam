@extends('admin.trangAdmin.admin')
@section('noidung')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             Cập Nhập<small>Địa Chỉ/ Sửa</small>
                        </h1>
                    </div>
                </div>
<?php 
    if (Session::has('success')) {
        echo \Session::get('success');
    }
?>
<form action="{!! route('admin.diadiem.luu', ['id' => $locations->id]) !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <div>
        <label>Tên Địa Điểm</label>
        <div>
            <input type="text" value="{!! $locations->name !!}"  name="name">
            <?php
            if ($errors->has('name')) {
                echo $errors->first('name');
            }
            ?>
        </div>
    </div>
    <div>
        <div>
            <input type="submit" name="" value="Sửa">
        </div>
    </div>
</form>
@endsection