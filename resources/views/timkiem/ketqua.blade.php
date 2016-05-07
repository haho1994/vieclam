@extends('layouts.headerfooter')
@section('noi_dung')
@foreach($jobs as $job)
{!!$job->name!!}<br/>
@endforeach
<div class="search_form" align="center">
    <form action="{!! route('frontend.search.search1') !!}" method="get">
        <div>
            
        </div>
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
        <select name="skill_id" class="option2">
            <option value="" >Kỹ năng</option>
            @foreach($skills as $skill)
            <option value="{!! $skill->id !!}">{!! $skill->name !!}</option>
            @endforeach
        </select>
        <input id="input" type="submit" class="login login-submit" value="Tìm Kiếm">
    </form>
</div>
@endsection