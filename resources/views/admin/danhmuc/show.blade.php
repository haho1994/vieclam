@extends('admin.trangAdmin.admin')
@section('noidung')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             <small>Công Ty/ Xem</small>
                        </h1>
                    </div>
</div>
<?php 
    if (Session::has('success')) {
        echo \Session::get('success');
    }
?>

<form action="{!! route('admin.quanly_danhmuc.thoat', ['id' => $category->id]) !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
        <tr>
            <td><label>Id</label></td>
            <td><label type="text" >{!! $category->id !!}</label></td>
        </tr>
       <tr>
            <td><label>Tên</label></td>
            <td><label type="text" >{!! $category->name !!}</label></td>
        </tr>
        
        <tr>
            <td colspan="2">
                <a href='{!! route("admin.quanly_danhmuc")!!}'>Thoát</a>
            </td>
        </tr>
    </table>
</form>
@endsection