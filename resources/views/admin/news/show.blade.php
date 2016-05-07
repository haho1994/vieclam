@extends('admin.trangAdmin.admin')
@section('news3')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             <small>News/ Xem</small>
                        </h1>
                    </div>
</div>
<?php 
    if (Session::has('success')) {
        echo \Session::get('success');
    }
?>

<form action="{!! route('admin.quanly_news.thoat', ['id' => $news->id]) !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
       <tr>
            <td><label>Tiêu đề</label></td>
            <td><label type="text" value="{!! $news->title !!}" name="title">{!! $news->title !!}</label></td>
        </tr>
        <tr>
            <td><label>Nội dung</label></td>
            <td><label type="text" value="{!! $news->content !!}" name="content">{!! $news->content !!}</label></td>
        </tr>
        <tr>
            <td><label>Nghành nghề</label></td>
            <td><label type="text" value="{!! $news->category->id !!}" name="category_id">{!! $news->category->name !!}</label></td>
        </tr>
        <tr>
            <td><label>Trạng thái</label></td>
            <td><label type="text" value="{!! $news->status_new !!}" name="status_new">{!! $news->status_new !!}</label></td>
        </tr>
        <tr>
            <td><label>Người tạo</label></td>
            <td><label type="text" value="{!! $news->user->id !!}" name="user_id">{!! $news->user->full_name !!}</label></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Trở về" />
            </td>
        </tr>
    </table>
</form>
@endsection