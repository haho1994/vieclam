@extends('layouts.headerfooter')
@section('noi_dung')

@foreach($jobs as $job)
    {!!$job->name!!}<br/>
@endforeach

@endsection