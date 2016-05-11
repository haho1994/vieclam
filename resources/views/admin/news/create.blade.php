@extends('admin.trangAdmin.admin')
@section('noidung')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             <small>News/ Thêm</small>
                        </h1>
                    </div>
</div>
<?php 
    if (Session::has('success')) {
        echo \Session::get('success');
    }
?>

<form action="{!! route('admin.quanly_news.xuly') !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
        <tr>
            <td><label>Tiêu đề</label></td>
            <td>
                <input type="text" value="" name="title" />
                <?php
                if ($errors->has('title')) {
                    echo $errors->first('title');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Nội dung</label></td>
            <td>
                <input type="text" value="" name="content" />
                <?php
                if ($errors->has('content')) {
                    echo $errors->first('content');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Công việc</label></td>
            <td>
                <select name="category_id" >
                    <option value="" >Chon công việc</option>
                    @foreach($categories as $category)
                    <option value="{!! $category->id !!}" >{!! $category->name !!}</option>
                    @endforeach
                </select>
                <?php
                if ($errors->has('category_id')) {
                    echo $errors->first('category_id');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Trạng thái</label></td>
            <td>
                <input   name="status_new" type="radio"  value="">Duyệt<br>
                <input   name="status_new" type="radio"  value="">Không duyệt<br>
                <?php
                if ($errors->has('status_new')) {
                    echo $errors->first('status_new');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Người tạo</label></td>
            <td>
                <select name="user_id" >
                    <option value="" >Chon</option>
                    @foreach($users as $user)
                    <option value="{!! $user->id !!}" >{!! $user->full_name !!}</option>
                    @endforeach
                </select>
                <?php
                if ($errors->has('user_id')) {
                    echo $errors->first('user_id');
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