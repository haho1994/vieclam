
@extends('layouts.headerfooter')
@section('noi_dung')

@foreach($jobs as $job)
<form action="{!! route('thongtin.chitiet.xem', ['id' => $job->id]) !!}" method="get">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <h1 itemprop="title" class="job-title">{!!$job->name!!}</h1>
        @if($job->company)
        <em>{!!$job->company->name!!}</em>
        @endif
        <div>
            @if($job->location)
            <em>{!!$job->location->name!!}</em>
            @endif
        </div>
</form>
@endforeach

@endsection