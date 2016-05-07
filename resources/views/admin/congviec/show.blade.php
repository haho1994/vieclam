@extends('admin.trangAdmin.admin')
@section('job3')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             <small>Jobs/ Xem</small>
                        </h1>
                    </div>
</div>
<?php 
    if (Session::has('success')) {
        echo \Session::get('success');
    }
?>

<form action="{!! route('admin.quanly_jobs.xem', ['id' => $job->id]) !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
        <tr>
            <td><label>id</label></td>
            <td><label type="text" value="{!! $job->id !!}" name="id">{!! $job->id !!}</label></td>
        </tr>
       <tr>
            <td><label>Tên</label></td>
            <td><label type="text" value="{!! $job->name !!}" name="name">{!! $job->name !!}</label></td>
        </tr>
        <tr>
            <td><label>Công ty</label></td>
            <td><label type="text" value="{!! $job->company->id !!}" name="id_company">{!! $job->company->name !!}</label></td>
        </tr>
        <tr>
            <td><label>Địa điểm</label></td>
            <td><label type="text" value="{!! $job->location->id !!}" name="id_location">{!! $job->location->name !!}</label></td>
        </tr>
        <tr>
            <td><label>Kỹ năng</label></td>
            <td><label type="text" value="{!! $job->skill->id !!}" name="id_skill">{!! $job->skill->name !!}</label></td>
        </tr>
        <tr>
            <td><label>Mức lương</label></td>
            <td><label type="text" value="{!! $job->salary !!}" name="salary">{!! $job->salary !!}</label></td>
        </tr>
        <tr>
            <td><label>Nghành nghề</label></td>
            <td><label type="text" value="{!! $job->category->id !!}" name="id_category">{!! $job->category->name !!}</label></td>
        </tr>
        <tr>
            <td><label>Ngôn ngữ</label></td>
            <td><label type="text" value="{!! $job->language->id !!}" name="id_language">{!! $job->language->name !!}</label></td>
        </tr>
        <tr>
            <td><label>Người chủ</label></td>
            <td><label type="text" value="{!! $job->user->id !!}" name="id_user">{!! $job->user->full_name !!}</label></td>
        </tr>
       <tr>
            <td><label>Giới tính</label></td>
            <td><label type="text" value="{!! $job->gender !!}" name="gender">{!! $job->gender !!}</label></td>
        </tr>
       <tr>
            <td><label>Trình độ</label></td>
            <td><label type="text" value="{!! $job->levels !!}" name="levels">{!! $job->levels !!}</label></td>
        </tr>
       <tr>
            <td><label>Kinh nghiệm</label></td>
            <td><label type="text" value="{!! $job->experience !!}" name="experience">{!! $job->experience !!}</label></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Trở về" />
            </td>
        </tr>
    </table>
</form>
@endsection