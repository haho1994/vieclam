@extends('layouts.headerfooter')
@section('noi_dung')
<div class="showjob">
    <div class="dua">
        <form>
            <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
            <t
            <table>
                <tr>
                    <td><label>Tuyển Dụng Công Việc</label></td>
                    <td>
                        <label>
                            @if($jobcv->job)
                            <em style="color: #808080;">{!!$jobcv->job->name!!}</em>
                            @endif
                        </label>
                    </td>
                </tr>
                <tr>
                    <td><label>Công Ty Ứng Tuyển</label></td>
                    <td>
                        <label>
                            @if($jobcv->company)
                            <em style="color: #808080;">{!!$jobcv->company->name!!}</em>
                            @endif
                        </label>
                    </td>
                </tr>
                <tr>
                    <td style="color: #808080; ">Hồ Sơ Ứng Tuyển</td>
                    <td style="color:#3079ed;">
                        <label>
                            <input type="radio" name="resumeApply"value="newAttachment">
                            <span class="upload-button">
                                <input class="editable" type="file" name="resumeFile" id="fileAttach" value="Đính kèm hồ sơ" tabindex="8">
                            </span>
                            <span class="small gray-light pull-left">Hỗ trợ định dạng .doc, .docx, .pdf, nhỏ hơn 2048KB</span><br>
                        </label>
                    </td>
                </tr>
        </form>
    </div>
</div>
@endsection
