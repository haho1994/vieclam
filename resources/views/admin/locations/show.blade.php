@extends('admin.trangAdmin.admin')
@section('noidung')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             Cập Nhập<small>Ngôn Ngữ / Xem</small>
                        </h1>
                    </div>
                </div>
<?php 
    if (Session::has('success')) {
        echo \Session::get('success');
    }
?>
<form action="{!! route('admin.diadiem.xem', ['id' => $locations->id]) !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
        <tr>
            <td><label>ID</label></td>
            <td><label type="text">{!! $locations->id !!}</label></td>
        </tr>
       <tr>
            <td><label>Tên Ngôn Ngữ</label></td>
            <td><label type="text">{!! $locations->name !!}</label></td>
        </tr>
        <tr>
            <td><label>Miêu Tả</label></td>
            <td><label type="text" >{!! $locations->description !!}</label></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Trở về" href='{!! route("admin.diadiem") !!}' />
            </td>
        </tr>
    </table>
</form>
@endsection