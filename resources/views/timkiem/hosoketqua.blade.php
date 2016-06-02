@extends('layouts.tuyendung')
@section('noidung1')
<div style="width: 104%;height: 50px;border: 1px #ddd solid;background: #FFF;margin-bottom: 30px;font-size: 20px;margin-left: 0px;">
    <label style="margin-top: 10px;margin-left: 20px;">Tìm Kiếm Hồ Sơ</label>
</div>
<div class="htkquahoso">
    <div class="" style="margin-left: 20px;">
        <div style="height: 35px;width: 98%;border-bottom: 1px #E5EBF2 dashed;">
            <i style="font-size: 20px;"> Kết quả tìm kiếm hồ sơ:</i>
        </div>
        <h2 style="height: 70px;margin-left: 0px;margin-top: 20px;font-size: 20px;font-family: Helvetica, Arial;">
            @if($jobs->isEmpty())
            Không tìm thấy hồ sơ nào
            @else

            @foreach($jobs as $job)
            @if(empty($job->expected_position_id))
            <a href="{!! route('timhoso_xemchitiet', ['id' => $job->id]) !!}">
                {!!$job->user->full_name!!}<br/>
            </a>
            @else
            <a href="{!! route('timhoso_xemchitiet', ['id' => $job->id]) !!}">
                {!!$job->expected_position_id!!}<br/>
            </a>
            @endif
            @endforeach
            @endif
        </h2>
    </div>
</div>
@endsection