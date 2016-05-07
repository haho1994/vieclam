@extends('admin.trangAdmin.admin')
@section('image2')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             <small>Images/ Thêm</small>
                        </h1>
                    </div>
</div>
<?php 
    if (Session::has('success')) {
        echo \Session::get('success');
    }
?>

<form action="{!! route('admin.quanly_images.xuly') !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
        <tr>
            <td><label>Tên</label></td>
            <td>
                <input type="text" value="" name="name" />
                <?php
                if ($errors->has('name')) {
                    echo $errors->first('name');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Mục tiêu</label></td>
            <td>
                <select name="target_id" >
                    <option value="" >Chọn</option>
                    @foreach($users as $user ) and ($companies as $company)
                    <option value="{!! $user->id!!}">{!! $user->id !!}</option>
                    @endforeach
                </select>
                <?php
                if ($errors->has('target_id')) {
                    echo $errors->first('target_id');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Nội dung mục tiêu</label></td>
            <td>
                <select name="target_content" >
                    <option value="" >Chọn</option>
                    @foreach($images as $image )
                    <option value="{!! $image->target_content!!}">{!! $image->target_content !!}</option>
<!--                    <option value="" >companies</option>-->
                    @endforeach
                </select>
                <?php
                if ($errors->has('target_content')) {
                    echo $errors->first('target_content');
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