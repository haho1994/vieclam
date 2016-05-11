@extends('admin.trangAdmin.admin')
@section('noidung')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             <small>Curriculumvitaes/ Xem</small>
                        </h1>
                    </div>
</div>
<?php 
    if (Session::has('success')) {
        echo \Session::get('success');
    }
?>

<form action="{!! route('admin.quanly_curriculumvitaes.xem', ['id' => $curriculumvita->id]) !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
        <tr>
            <td><label>Id</label></td>
            <td><label type="text" >{!! $curriculumvita->id !!}</label></td>
        </tr>
        <tr>
            <td><label>Tên</label></td>
            <td><label type="text" >{!! $curriculumvita->user->full_name !!}</label></td>
        </tr>
        <tr>
            <td><label>Kinh nghiệm</label></td>
            <td><label type="text" >{!! $curriculumvita->year_experience !!}</label></td>
        </tr>
        <tr>
            <td><label>Trình độ</label></td>
            <td><label type="text">{!! $curriculumvita->highes_edu !!}</label></td>
        </tr>
        <tr>
            <td><label>Công ty gần đây</label></td>
            <td>
                <label type="text">
                    @if($curriculumvita->company)
                    {!! $curriculumvita->company->name !!}
                    @endif
                </label>
            </td>
        </tr>
        <tr>
            <td><label>Ngành nghề gần đây</label></td>
            <td>
                <label type="text" >
                    @if($curriculumvita->category)
                    {!! $curriculumvita->category->name !!}
                    @endif
                </label>
            </td>
        </tr>
        <tr>
            <td><label>Vị trí công việc dự kiến</label></td>
            <td>
                <label type="text" >
                    @if($curriculumvita->category)
                    {!! $curriculumvita->category->name !!}
                    @endif
                </label>
            </td>
        </tr>
        <tr>
            <td><label>Đia điểm dự kiến</label></td>
            <td>
                <label type="text">
                    @if($curriculumvita->location)
                    {!! $curriculumvita->location->name !!}
                    @endif
                </label>
            </td>
        </tr>
        <tr>
            <td><label>Mức lương dự kiến</label></td>
            <td><label type="text">{!! $curriculumvita->expected_salary !!}</label></td>
        </tr>
        <tr>
            <td><label>Mức độ công việc hiện tại</label></td>
            <td><label type="text" >{!! $curriculumvita->current_job_level !!}</label></td>
        </tr>
        <tr>
            <td><label>Mức độ công việc dự kiến</label></td>
            <td><label type="text">{!! $curriculumvita->expected_job_level !!}</label></td>
        </tr>
        <tr>
            <td><label>Loại công việc dự kiến</label></td>
            <td>
                <label type="text" >
                    @if($curriculumvita->category)
                    {!! $curriculumvita->category->name !!}
                    @endif
                </label>
            </td>
        </tr>
        <tr>
            <td><label>Thương lượng</label></td>
            <td><label type="text" >{!! $curriculumvita->is_negotiable !!}</label></td>
        </tr>
<!--        <tr>
            <td><label>Ngôn ngữ</label></td>
            <td>
                <label type="text" >
                    @if($curriculumvita->languages)
                    {!! $curriculumvita->languages->name !!}
                    @endif
                </label>
            </td>
        </tr>-->
        <tr>
            <td colspan="2">
                <input type="submit" value="Trở về" />
            </td>
        </tr>
    </table>
</form>
@endsection