@extends('layouts.tuyendung')
@section('noidung1')
<label>{!! $jobCv->filename !!}</label>
@if(!empty($job->filename))
<a href='{!! route("admin.download.cv", ["filename" => $cv->filename]) !!}'>
    Tai ho so tai day
</a>
@endif
@endsection