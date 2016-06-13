@extends('admin.trangAdmin.admin')
@section('noidung')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             Cập Nhập<small>Kỹ Năng/Xem</small>
                        </h1>
                    </div>
                </div>
<?php 
    if (Session::has('success')) {
        echo \Session::get('success');
    }
?>
<form action="{!! route('admin.quanly-kynang.thoat', ['id' => $skills->id]) !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
        <tr>
            <td><label>ID</label></td>
            <td><label type="text" >{!! $skills->id !!}</label></td>
        </tr>
       <tr>
            <td><label>Tên Ngôn Ngữ</label></td>
            <td><label type="text">{!! $skills->name !!}</label></td>
        </tr>
        <tr>
            <td><label>Tên Người Sử Dụng</label></td>
            <td>
                <label type="text" >
                    @if($skills->user)
                    {!! $skills->user->full_name !!}
                    @endif
                
                </label></td>
        </tr>
        <tr>
            <td><label>Miêu Tả</label></td>
            <td><label type="text">{!! $skills->description !!}</label></td>
        </tr>
        <td colspan="2">
            <a href='{!! route("admin.quanly-kynang")!!}'>Thoát</a>
        </td>
    </table>
</form>
@endsection