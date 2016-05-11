@extends('admin.trangAdmin.admin')
@section('noidung')
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

<form action="{!! route('admin.quanly_job.xem', ['id' => $job_favourite->id]) !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
        <tr>
            <td><label>id</label></td>
            <td>
                <label type="text">
                    {!! $job_favourite->id !!}
                </label>
            </td>
        </tr>
       <tr>
            <td><label>Tên công việc</label></td>
            <td>
                <label type="text" >
                    @if($job_favourite->job)
                    {!! $job_favourite->job->name !!}
                    @endif
                </label>
            </td>
        </tr>
        <tr>
            <td><label>Tên người dùng</label></td>
            <td>
                <label type="text">
                    @if($job_favourite->user)
                    {!! $job_favourite->user->full_name !!}
                    @endif
                </label>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Trở về" action="<?php echo route('admin.quanly_job'); ?>"/>
        </tr>
    </table>
</form>
@endsection