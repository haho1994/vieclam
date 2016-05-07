@extends('admin.trangAdmin.admin')
@section('congviecyeuthich3')
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

<form action="{!! route('admin.quanly_job.xem', ['id' => $job_favourite->id]) !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
        <tr>
            <td><label>id</label></td>
            <td><label type="text" value="{!! $job_favourite->id !!}" name="id">{!! $job_favourite->id !!}</label></td>
        </tr>
       <tr>
            <td><label>Tên công việc</label></td>
            <td><label type="text" value="{!! $job_favourite->job->id !!}" name="name">{!! $job_favourite->job->name !!}</label></td>
        </tr>
        <tr>
            <td><label>Tên người dùng</label></td>
            <td><label type="text" value="{!! $job_favourite->user->id !!}" name="id_company">{!! $job_favourite->user->full_name !!}</label></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Trở về" action="<?php echo route('admin.quanly_job'); ?>"/>
            </td>
        </tr>
    </table>
</form>
@endsection