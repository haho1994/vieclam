@extends('layouts.headerfooter')
@section('noi_dung')

<div class="search_form" align="center">
    <h1 class='text'>Tìm Kiếm Công Việc Mơ Ước.<strong>Nâng Cao Thành Công!</strong></h1>
    <form  method="get" action="{!!route('frontend.search.search')!!}">
        <input type="text" class="text" name='keyword'  value="Nhập chức danh, vị trí, kỹ năng..." onFocus="this.value = '';" onBlur="if (this.value == '') {
                    this.value = 'Enter Keyword(s)';
                }">
        <select name="category_id" class="option1" >
            <option value="" >Chọn nghành nghề</option>
            @foreach($categories as $category)
            <option value="{!! $category->id !!}">{!! $category->name !!}</option>
            @endforeach
        </select >
        <select name="location_id" class="option2">
            <option value="" >Chọn địa điểm</option>
            @foreach($locations as $location)
            <option value="{!! $location->id !!}">{!! $location->name !!}</option>
            @endforeach
        </select>
        <input id="input" type="submit" class="login login-submit" value="Tìm Kiếm">
    </form>
    <a class="upload" href='{!! "/upload-cv" !!}' type='hidden' name='_token' value="<?php echo csrf_token() ?>" />Tải Hồ Sơ</a>
<form action="/upload-cv" method="post" enctype="multipart/form-data" >
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
<!--    <input type="file" name="cv" />
    <input type="submit" name="upload" />-->
</form>
</div>
<div>
    <div class="h3">
        <h3>Viêc Làm Mới Nhất</h3>
    </div>
    <div align="center">
        <div id="scroll_box">
            @foreach($jobs as $key => $job)
            @if ($key %2 == 0)
            <div class='job-wrap' style="width: 100%;">
                @endif
                <div class='job-content' style="width: 49%; display: inline-block">
                    {!!$job->name!!}
                    @if($job->company)
                    <p>{!!$job->company->name!!}</p>
                    @endif
                </div>
                @if ($key+1 %2 == 0)
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>
@endsection

