@extends('layouts.headerfooter')
@section('noi_dung')
<div>
    <i style="font: bold;size: 18px;margin-left: 150px"> Kết quả tìm kiếm :</i>
    <h2 style="height: 70px;margin-left: 270px;margin-top: 20px;font-size: 20px;font-family: Helvetica, Arial;">
        @if($jobs->isEmpty())
        Không tìm thấy kết quả nào
        @else
        <a>
            @foreach($jobs as $job)
            {!!$job->name!!}<br/>
            @endforeach
        </a>
        @endif
    </h2>
</div>
@endsection