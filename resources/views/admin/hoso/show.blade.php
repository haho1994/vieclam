<?php 
    if (Session::has('success')) {
        echo \Session::get('success');
    }
?>

<form action="{!! route('admin.quanly_curriculumvitaes.xem', ['id' => $curriculumvitaes->id]) !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
        <tr>
            <td><label>Id</label></td>
            <td><label type="text" value="{!! $curriculumvitaes->id !!}" name="id">{!! $company->id !!}</label></td>
        </tr>
        <tr>
            <td><label>Tên</label></td>
            <td><label type="text" value="{!! $curriculumvitaes->user->name !!}" name="id_user">{!! $company->user->name !!}</label></td>
        </tr>
        <tr>
            <td><label>Kinh nghiệm</label></td>
            <td><label type="text" value="{!! $curriculumvitaes->year_experience !!}" name="year_experience">{!! $company->year_experience !!}</label></td>
        </tr>
        <tr>
            <td><label>Trình độ</label></td>
            <td><label type="text" value="{!! $curriculumvitaes->highes_edu !!}" name="highes_edu">{!! $company->highes_edu !!}</label></td>
        </tr>
        <tr>
            <td><label>Công ty gần đây</label></td>
            <td><label type="text" value="{!! $curriculumvitaes->company->name !!}" name="recent_company_id">{!! $company->company->name !!}</label></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Trở về" />
            </td>
        </tr>
    </table>
</form>