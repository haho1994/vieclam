
@extends('layouts.headerfooter')
@section('noi_dung')
<?php 
    if (Session::has('success')) {
        echo \Session::get('success');
    }
?>
<div class="showjob">
    <div >
        <form method="post" class="dua">
            <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
            <table>
                <tr>
                    <td style="color: #3079ed; font: normal 150% 'trebuchet ms', arial, sans-serif;"><label>{!! $job->name !!}</label></td>
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
                    <td style="color: #808080; ">Ngôn Ngữ:</td>
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
                    <td style="color: #808080;"><label type="text" >{!! $job->levels !!}</label></td>
                </tr>
                <tr>
                    <td style="color: #808080; ">Số Năm Kinh Nghiệm:</td>
                    <td style="color: #808080;"><label type="text" >{!! $job->experience !!}</label></td>
                </tr>

            </table>
        </form>
<div class="icon">
        <div class="icon1">
            <h4>Bạn Có Muốn</h4>
        </div>
        <div class="icon2">
            <div class="icon2-1">
                
            </div>
            <div class="icon2-2">
                <a href="{!! route('congviec.luu', ['id' => $job->id]) !!}">
                    <p>Lưu việc làm này</p>
                </a>
                
            </div>
            
        </div>
        <div class="icon2">
            <div class="icon2-3">     
            </div>
            <div class="icon2-2"  >
                <a href='{!! route("nopdonungtuyen") !!}'> 
                    <p>Nộp Đơn</p>
                </a>
                
            </div>
            
        </div>
        
    </div>
</div>
    
</div>

@endsection
