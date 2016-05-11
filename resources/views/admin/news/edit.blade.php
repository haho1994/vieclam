@extends('admin.trangAdmin.admin')
@section('noidung')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             <small>News/ Sửa</small>
                        </h1>
                    </div>
</div>
<?php 
    if (Session::has('success')) {
        echo \Session::get('success');
    }
?>

<form action="{!! route('admin.quanly_news.luu', ['id' => $news->id]) !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
        <tr>
            <td><label>Tiêu đề</label></td>
            <td>
                <input type="text" value="{!! $news->title !!}" name="title" />
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
                <input type="text" value="{!! $news->content !!}" name="content" />
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
                    <option value="" >Chọn công việc</option>
                    @foreach($categories as $category)
                    <?php
                        $selected = '';
                        if ($category->id == $category->category_id) {
                            $selected = 'selected';
                        }
                    ?>
                    <option value="{!! $category->id !!}" {!!$selected!!} >{!! $category->name !!}</option>
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
            <td colspan="2">
                <input type="submit" value="Sua" />
            </td>
        </tr>
    </table>
</form>
@endsection