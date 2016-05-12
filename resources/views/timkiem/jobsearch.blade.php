@extends('layouts.headerfooter')
@section('noi_dung')
<div class="showjob">
    <div class="dua">
        <form>
            <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
            <table>
                <tr>
                    <td style="color: #3079ed; font: normal 150% 'trebuchet ms', arial, sans-serif;"><label type="text" >{!! $job->name !!}</label></td>
                </tr>
                <tr>
                    <td>
                        <label>
                            @if($job->company)
                            <em style="color: #808080;">{!!$job->company->name!!}</em>
                            @endif
                        </label>
                    </td>
                </tr>
                <tr>
                    <td style="color: #808080; ">Nơi Làm Việc:</td>
                    <td style="color:#3079ed;">
                        <label>
                            @if($job->location)
                            {!!$job->location->name!!}
                            @endif
                        </label>
                    </td>
                </tr>
                <tr>
                    <td style="color: #808080; ">Kỹ Năng:</td>
                    <td style="color: #808080;">
                        <label>
                            @if($job->skill)
                            {!!$job->skill->name!!}
                            @endif
                        </label>
                    </td>
                </tr>
                <tr>
                    <td style="color: #808080; ">Mức Lương:</td>
                    <td style="color: #808080;"><label >{!! $job->salary !!}</label></td>
                </tr>
                <tr>
                    <td style="color: #808080; ">Thể Loại:</td>
                    <td style="color: #808080;">
                        <label>
                            @if($job->category)
                            {!!$job->category->name!!}
                            @endif
                        </label>
                    </td>
                </tr>
                <tr>
                    <td style="color: #808080; ">Ngôn Ngữ::</td>
                    <td style="color: #808080;">
                        <label>
                            @if($job->language)
                            {!!$job->language->name!!}
                            @endif
                        </label>
                    </td>
                </tr>
                <tr>
                    <td style="color: #808080; ">Bằng Cấp:</td>
                    <td style="color: #808080;"><label type="text" >{!! $job->levers !!}</label></td>
                </tr>
                <tr>
                    <td style="color: #808080; ">Số Năm Kinh Nghiệm:</td>
                    <td style="color: #808080;"><label type="text" >{!! $job->experience !!}</label></td>
                </tr>

            </table>
        </form>
        <div class="dua2">
                        <button type="button" class="btn btn-default">
                            
                            <span class="glyphicon glyphicon-star" aria-pressed="false" aria-label="Lưu" role="button"></span>
                        </button>
                  
                        <button type="button" class="btn btn-default">
                                <span class="glyphicon glyphicon-envelope"></span> 
                        
        </div>
    </div>
</div>
@endsection