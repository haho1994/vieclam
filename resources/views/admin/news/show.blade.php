@extends('admin.trangAdmin.admin')
@section('noidung')
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
            <td><label type="text" >{!! $news->title !!}</label></td>
        </tr>
        <tr>
            <td><label>Nội dung</label></td>
            <td><label type="text">{!! $news->content !!}</label></td>
        </tr>
        <tr>
            <td><label>Nghành nghề</label></td>
            <td>
                <label type="text" >
                    @if($news->category)
                    {!! $news->category->name !!}
                    @endif
                    
                </label>
            </td>
        </tr>
        <tr>
            <td><label>Trạng thái</label></td>
            <td><label type="text" >{!! $news->status_new !!}</label></td>
        </tr>
        <tr>
            <td><label>Người tạo</label></td>
            <td>
                <label type="text" >
                    @if($news->user)
                    {!! $news->user->full_name !!}
                    @endif
                </label>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Trở về" />
            </td>
        </tr>
    </table>
</form>
@endsection