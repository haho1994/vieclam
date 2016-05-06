@extends('admin.trangAdmin.admin')
@section('kynang3')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Cập Nhật <small>Kỹ Năng</small>
                        </h1>
                    </div>
                </div>
<?php 
    if (Session::has('success')) {
        echo \Session::get('success');
    }
?>
<form action="{!! route('admin.quanly-kynang.xem', ['id' => $skills->id]) !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
        <tr>
            <td><label>ID</label></td>
            <td><label type="text" value="{!! $skills->id !!}" name="id">{!! $skills->id !!}</label></td>
        </tr>
       <tr>
            <td><label>Tên Ngôn Ngữ</label></td>
            <td><label type="text" value="{!! $skills->name !!}" name="name">{!! $skills->name !!}</label></td>
        </tr>
        <tr>
            <td><label>Tên Người Sử Dụng</label></td>
            <td><label type="text" value="{!! $skills->id_user !!}" name="id_user">{!! $user->full_name !!}</label></td>
        </tr>
        <tr>
            <td><label>Miêu Tả</label></td>
            <td><label type="text" value="{!! $skills->description !!}" name="description">{!! $skills->description !!}</label></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Trở về" href='{!! route("admin.diadiem") !!}' />
            </td>
        </tr>
    </table>
</form>
@endsection