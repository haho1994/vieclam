@extends('layouts.headerfooter')
@section('noi_dung')
<div class="ketqua">
<div class="htkqua">
    <i style="font: bold;size: 18px;margin-left: 20px"> Kết quả tìm kiếm hồ sơ:</i>
    <h2 style="height: 70px;margin-left: 150px;margin-top: 20px;font-size: 20px;font-family: Helvetica, Arial;">
        @if($jobs->isEmpty())
        Không tìm thấy kết quả nào
        @else
        
            @foreach($jobs as $job)
            @if(empty($job->recent_category_id))
            <a href="{!! route('timhoso_xemchitiet', ['id' => $job->id]) !!}">
            {!!$job->user->full_name!!}<br/>
            </a>
            @else
            <a href="{!! route('timhoso_xemchitiet', ['id' => $job->id]) !!}">
            {!!$job->category->name!!}<br/>
            </a>
            @endif
            @endforeach
        @endif
    </h2>
</div>
</div>
@endsection