@extends('admin.trangAdmin.admin')
@section('hoso3')
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
            <td><label type="text" value="{!! $curriculumvita->id !!}" name="id">{!! $curriculumvita->id !!}</label></td>
        </tr>
        <tr>
            <td><label>Tên</label></td>
            <td><label type="text" value="{!! $curriculumvita->user->id !!}" name="id_user">{!! $curriculumvita->user->full_name !!}</label></td>
        </tr>
        <tr>
            <td><label>Kinh nghiệm</label></td>
            <td><label type="text" value="{!! $curriculumvita->year_experience !!}" name="year_experience">{!! $curriculumvita->year_experience !!}</label></td>
        </tr>
        <tr>
            <td><label>Trình độ</label></td>
            <td><label type="text" value="{!! $curriculumvita->highes_edu !!}" name="highes_edu">{!! $curriculumvita->highes_edu !!}</label></td>
        </tr>
        <tr>
            <td><label>Công ty gần đây</label></td>
            <td><label type="text" value="{!! $curriculumvita->company->id !!}" name="recent_company_id">{!! $curriculumvita->company->name !!}</label></td>
        </tr>
        <tr>
            <td><label>Ngành nghề gần đây</label></td>
            <td><label type="text" value="{!! $curriculumvita->category->id !!}" name="recent_category_id">{!! $curriculumvita->category->name !!}</label></td>
        </tr>
        <tr>
            <td><label>Vị trí công việc dự kiến</label></td>
            <td><label type="text" value="{!! $curriculumvita->category->id !!}" name="expected_position_id">{!! $curriculumvita->category->name !!}</label></td>
        </tr>
        <tr>
            <td><label>Đia điểm dự kiến</label></td>
            <td><label type="text" value="{!! $curriculumvita->location->id !!}" name="expected_location_id">{!! $curriculumvita->location->name !!}</label></td>
        </tr>
        <tr>
            <td><label>Mức lương dự kiến</label></td>
            <td><label type="text" value="{!! $curriculumvita->expected_salary!!}" name="expected_salary">{!! $curriculumvita->expected_salary !!}</label></td>
        </tr>
        <tr>
            <td><label>Mức độ công việc hiện tại</label></td>
            <td><label type="text" value="{!! $curriculumvita->current_job_level !!}" name="current_job_level">{!! $curriculumvita->current_job_level !!}</label></td>
        </tr>
        <tr>
            <td><label>Mức độ công việc dự kiến</label></td>
            <td><label type="text" value="{!! $curriculumvita->expected_job_level !!}" name="expected_job_level">{!! $curriculumvita->expected_job_level !!}</label></td>
        </tr>
        <tr>
            <td><label>Loại công việc dự kiến</label></td>
            <td><label type="text" value="{!! $curriculumvita->category->id !!}" name="expected_job_category">{!! $curriculumvita->category->name !!}</label></td>
        </tr>
        <tr>
            <td><label>Thương lượng</label></td>
            <td><label type="text" value="{!! $curriculumvita->is_negotiable !!}" name="is_negotiable">{!! $curriculumvita->is_negotiable !!}</label></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Trở về" />
            </td>
        </tr>
    </table>
</form>
@endsection