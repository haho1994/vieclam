@extends('layouts.tuyendung')
@section('noidung1')
<div class="dangtintuyendung_text">
    <label style="margin-top: 10px;margin-left: 20px;">Quản Lý Việc Làm</label>
</div>
<div style="width: 700px;height: 500px;background: #fff;margin-left: 100px;">
    <div style="width: 650px;height: 50px;border-bottom: 1px #B0BEC5 dotted;margin-left: 25px;">
        <label style="font-size: 15px;margin-top: 20px;">Tải Các Hồ Sơ Ứng Tuyển</label>
    </div>
    <div style="margin-left: 50px;margin-top: 20px;">
        @foreach($jobCvs as $jobCv)

        @if(!empty($jobCv->filename))
        <a href='{!! route("admin.download.ungtuyen", ["filename" => $jobCv->filename, "job_id" => $job->id]) !!}'>
            <label style="font-size: 13px;margin-bottom: 10px;">{!! $jobCv->filename !!}</label></br>
        </a>
        @endif
        @endforeach
    </div>
</div>
@endsection