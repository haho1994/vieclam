@extends('layouts.headerfooter')
@section('noi_dung')
<div class="ketqua">
    <div class="htkqua">
        <i style="font: bold;size: 18px;margin-left: 20px"> Kết quả tìm kiếm :</i>

        <h2 style="height: 70px;margin-top: 20px;font-size: 20px;font-family: Helvetica, Arial;">
            @if($jobs->isEmpty())
            Không tìm thấy kết quả nào
            @else
            @foreach($jobs as $job)
            <a href="{!! route('frontend.congviec.timkiem', ['id' => $job->id]) !!}">
                <div class="showtimkiem">
                    <div class="showtimkiem1"
                         <a>
                         {!!$job->name!!}<br/>
                        </a>
                        <p style="color: #000;font-size: 15px;">
                            @if($job->company)
                            {!!$job->company->name!!}<br/>
                            @endif
                        </p>
                    </div>
                </div>
            </a>
            @endforeach
            @endif
        </h2>

    </div>
</div>
@endsection