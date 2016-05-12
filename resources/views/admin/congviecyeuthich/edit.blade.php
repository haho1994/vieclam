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
<form action="{!! route('admin.quanly_job.luu', ['id' => $job_favourite->id]) !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
        <tr>
            <td><label>Tên công việc</label></td>
            <td>
                <select name="id_job" >
                    @foreach($jobs as $job)
                    <?php
                        $selected = '';
                        if ($job->id == $job_favourite->id_job) {
                            $selected = 'selected';
                        }
                    ?>
                    <option value="{!! $job->id !!}" {!!$selected!!} >{!! $job->name !!}</option>
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
            <td><label>Tên người dùng</label></td>
            <td>
                <select name="id_user" >
                    @foreach($users as $user)
                    <?php
                        $selected = '';
                        if ($user->id == $job_favourite->id_user) {
                            $selected = 'selected';
                        }
                    ?>
                    <option value="{!! $user->id !!}" {!!$selected!!} >{!! $user->full_name !!}</option>
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
                <input type="submit" value="Sửa" />
            </td>
        </tr>
    </table>
</form>
@endsection