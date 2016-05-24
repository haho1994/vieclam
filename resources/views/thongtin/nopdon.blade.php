@extends('layouts.headerfooter')
@section('noi_dung')
<div class="showjob">
    <div class="dua">
        <table>
            <tr>
                 <td><label>Ho ten</label></td>
                <td>
                    <label>{!! $user->full_name !!}</label>
                </td>
            </tr>
            <tr>
                <td><label>Địa Chỉ Email</label></td>
                <td>
                    <label>{!! $user->email !!}</label>
                </td>
            </tr>
            <tr>
                <td><label>Tuyển Dụng Công Việc</label></td>
                <td>
                    <label>
                        <em style="color: #808080;">{!!$job->name!!}</em>
                     </label>
                </td>
            </tr>
            <tr>
                <td><label>Công Ty Ứng Tuyển</label></td>
                <td>
                    <label>
                        @if($job->company)
                        <em style="color: #808080;">{!!$job->company->name!!}</em>
                        @endif
                    </label>
                </td>
            </tr>
            <tr>
                <td style="color: #808080; ">Hồ Sơ Ứng Tuyển</td>
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
