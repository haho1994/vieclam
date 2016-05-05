@extends('admin.trangAdmin.admin')
@section('congviecyeuthich2')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             <small>User</small>
                        </h1>
                    </div>
                </div>
<?php 
    if (Session::has('success')) {
        echo \Session::get('success');
    }
?>
<form class="table"action="{!! route('admin.quanly_job.luu', ['id' => $job_favourites->id]) !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
       <tr>
            <td><label>Tên Công Việc</label></td>
            <td>
                <input type="text" value="{!! $job_favourites->id_job !!}" name="" />
                <?php
                if ($errors->has('id_job->job->name')) {
                    echo $errors->first('id_job->job->name');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Tên Người Dùng</label></td>
            <td>
                <input type="text" value="{!! $job_favourites->id_user !!}" name="" />
                <?php
                if ($errors->has('id_user->user->full_name')) {
                    echo $errors->first('id_user->user->full_name');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Sửa" />
            </td>
        </tr>
    </table>
</form>
@endsection