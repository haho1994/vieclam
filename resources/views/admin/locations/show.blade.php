@extends('admin.trangAdmin.admin')
@section('diadiem3')
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
<form action="{!! route('admin.diadiem.xem', ['id' => $locations->id]) !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
        <tr>
            <td><label>ID</label></td>
            <td><label type="text" value="{!! $locations->id !!}" name="id">{!! $locations->id !!}</label></td>
        </tr>
       <tr>
            <td><label>Tên Ngôn Ngữ</label></td>
            <td><label type="text" value="{!! $locations->name !!}" name="name">{!! $locations->name !!}</label></td>
        </tr>
        <tr>
            <td><label>Miêu Tả</label></td>
            <td><label type="text" value="{!! $locations->description !!}" name="description">{!! $locations->description !!}</label></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Trở về" href='{!! route("admin.diadiem") !!}' />
            </td>
        </tr>
    </table>
</form>
@endsection