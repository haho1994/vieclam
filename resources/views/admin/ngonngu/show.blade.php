@extends('admin.trangAdmin.admin')
@section('ngonngu3')
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

<form action="{!! route('admin.quanly-ngonngu.xem', ['id' => $languages->id]) !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
        <tr>
            <td><label>ID</label></td>
            <td><label type="text" value="{!! $languages->id !!}" name="id">{!! $languages->id !!}</label></td>
        </tr>
       <tr>
            <td><label>Tên Ngôn Ngữ</label></td>
            <td><label type="text" value="{!! $languages->name !!}" name="name">{!! $languages->name !!}</label></td>
        </tr>
        <tr>
            <td><label>Miêu Tả</label></td>
            <td><label type="text" value="{!! $languages->description !!}" name="$locations">{!! $languages->description !!}</label></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Trở về" href='{!! route("admin.quanly-ngonngu") !!}' />
            </td>
        </tr>
    </table>
</form>
@endsection