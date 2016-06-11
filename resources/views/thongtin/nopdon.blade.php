@extends('layouts.headerfooter')
@section('noi_dung')
<div class="showjob">
    <div class="dua">
        <h2>Nộp Đơn Ứng Tuyển</h2>
        <table>
            <tr class="nopdon">
                <td style="width: 300px;"><label>Họ Và Tên:</label></td>
                 <td class="nopdon1">
                    <label>{!! $user->full_name !!}</label>
                </td>
            </tr>
            <tr class="nopdon">
                <td style="width: 300px;"><label>Địa Chỉ Email:</label></td>
                <td>
                    <label>{!! $user->email !!}</label>
                </td>
            </tr>
            <tr class="nopdon">
                <td style="width: 300px;"><label>Tuyển Dụng Công Việc:</label></td>
                <td>
                    <label>
                       {!!$job->name!!}
                     </label>
                </td>
            </tr>
            <tr class="nopdon">
                <td style="width: 300px;"><label>Công Ty Ứng Tuyển:</label></td>
                <td>
                    <label>
                        @if($job->company)
                        {!!$job->company->name!!}
                        @endif
                    </label>
                </td>
            </tr>
            <tr class="nopdon">
                <td style="width: 300px;">Hồ Sơ Ứng Tuyển:</td>
                <td style="color:#3079ed;" >
                    <form action="/nop-don/upload/{!!$job->id!!}" method="post" enctype="multipart/form-data" >
                        <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
                        <input type="file" name="cv" />
                        <input type="submit" name="upload" />
                    </form>
                </td>
            </tr>
        </table>
    </div>
    @endsection
