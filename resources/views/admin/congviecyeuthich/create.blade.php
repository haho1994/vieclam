@extends('admin.trangAdmin.admin')
@section('noidung')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             Job<small>Favourites</small>
                        </h1>
                    </div>
                </div>
<?php
if (Session::has('success')) {
    echo \Session::get('success');
}
?>
<form action="{!! route('admin.quanly_job.xuly') !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
        <tr>
            <td><label>Tên Công Việc</label></td>
            <td>
                <select name="id_job" >
                    <option value="" >Chọn công việc</option>
                    @foreach($jobs as $job)
                    <option value="{!! $job->id !!}" >{!! $job->name !!}</option>
                    @endforeach
                </select>
                <?php
                if ($errors->has('id_job')) {
                    echo $errors->first('id_job');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Tên Người Sử Dụng</label></td>
            <td>
                <select name="id_user" >
                    <option value="" >Chọn người dùng</option>
                    @foreach($users as $user)
                    <option value="{!! $user->id !!}" >{!! $user->full_name !!}</option>
                    @endforeach
                </select>
                <?php
                if ($errors->has('id_user')) {
                    echo $errors->first('id_user');
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