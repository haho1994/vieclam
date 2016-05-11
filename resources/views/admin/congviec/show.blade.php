@extends('admin.trangAdmin.admin')
@section('noidung')
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
            <td><label type="text">{!! $job->id !!}</label></td>
        </tr>
       <tr>
            <td><label>Tên</label></td>
            <td><label type="text" >{!! $job->name !!}</label></td>
        </tr>
        <tr>
            <td><label>Công ty</label></td>
            <td>
                <label type="text">
                    @if($job->company)
                    {!! $job->company->name !!}
                    @endif
                </label>
            </td>
        </tr>
        <tr>
            <td><label>Địa điểm</label></td>
            <td>
                <label type="text" >
                    
                    @if($job->location)
                    {!! $job->location->name !!}
                    @endif
                </label></td>
        </tr>
        <tr>
            <td><label>Kỹ năng</label></td>
            <td><label type="text" >{!! $job->skill->name !!}</label></td>
        </tr>
        <tr>
            <td><label>Mức lương</label></td>
            <td><label type="text">{!! $job->salary !!}</label></td>
        </tr>
        <tr>
            <td><label>Nghành nghề</label></td>
            <td>
                <label type="text" >
                    @if($job->category)
                    {!! $job->category->name !!}
                    @endif
                </label>
            </td>
        </tr>
        <tr>
            <td><label>Ngôn ngữ</label></td>
            <td>
                <label type="text">
                    @if($job->language)
                    {!! $job->language->name !!}
                    @endif
                    
                </label>
            </td>
        </tr>
        <tr>
            <td><label>Người chủ</label></td>
            <td>
                <label type="text">
                    @if($job->user)
                    {!! $job->user->full_name !!}
                    @endif
                </label>
            </td>
        </tr>
       <tr>
            <td><label>Giới tính</label></td>
            <td><label type="text" >{!! $job->gender !!}</label></td>
        </tr>
       <tr>
            <td><label>Trình độ</label></td>
            <td><label type="text">{!! $job->levels !!}</label></td>
        </tr>
       <tr>
            <td><label>Kinh nghiệm</label></td>
            <td><label type="text">{!! $job->experience !!}</label></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Trở về" />
            </td>
        </tr>
    </table>
</form>
@endsection