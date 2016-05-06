@extends('admin.trangAdmin.admin')
@section('congviecyeuthich3')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Job <small>Favourite</small>
                        </h1>
                    </div>
                </div>
<?php 
    if (Session::has('success')) {
        echo \Session::get('success');
    }
?>
<form action="{!! route('admin.quanly_job.xem', ['id' => $job_favourites->id]) !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
        <tr>
            <td><label>ID</label></td>
            <td><label type="text" value="{!! $job_favourites->id !!}" name="id">{!! $job_favourites->id !!}</label></td>
        </tr>
       <tr>
            <td><label>Tên Công Việc</label></td>
            <td><label type="text" value="{!! $job_favourites->id_job !!}" name="id_job">{!! $job->name !!}</label></td>
        </tr>
        <tr>
            <td><label>Tên Người Sử Dụng</label></td>
            <td><label type="text" value="{!! $job_favourites->id_user !!}" name="id_user">{!! $user->full_name !!}</label></td>
        </tr>
        <tr>
            <td><label>Miêu Tả</label></td>
            <td><label type="text" value="{!! id_job->description !!}" name="description">{!! id_job->description !!}</label></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Trở về" href='{!! route("admin.quanly_job") !!}' />
            </td>
        </tr>
    </table>
</form>
@endsection