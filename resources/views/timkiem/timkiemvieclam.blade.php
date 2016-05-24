@extends('layouts.headerfooter')
@section('noi_dung')
<div class="search_form" align="center">
    <h1 class='text'>Tìm Kiếm Công Việc Mơ Ước.<strong>Nâng Cao Thành Công!</strong></h1>
    <form  method="get" action="{!!route('frontend.search.search')!!}">
        <input type="text" class="text" name='keyword'  placeholder="Nhập chức danh, vị trí, kỹ năng..." >
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
<!-- <a class="upload" href='{!! "/upload-cv" !!}' type='hidden' name='_token' value="<?php echo csrf_token() ?>" /><strong>Tải Hồ Sơ</strong></a>-->
</form>
</div>
<div>
    <div class="hhh">
        <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2">Viêc Làm Mới Nhất</marquee></marquee>
    </div>
    <div >
    <div class="job">
        <div id="scroll_box">
            @foreach($jobs as $key => $job)
                @if ($key %2 == 0)
                    <div class='job-wrap' style="width: 100%;">
                @endif
               
                <div class='job-content' style="width: 49%; display: inline-block" >
                    <div class="hot">HOT</div>
                    <a class="chitiet" href="{!! route('frontend.congviec.timkiem', ['id' => $job->id]) !!}" target="_blank"><b>{!!$job->name!!}</b></a>
                    @if($job->company)
                    <em>{!!$job->company->name!!}</em>
                    @endif
                </div>
                @if ($key+1 %2 == 0)
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    </div>
</div>
@endsection

