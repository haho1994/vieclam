@extends('layouts.headerfooter')
@section('noi_dung')
<div class="ketqua">
    <div class="htkqua" >
        <i style="font: bold;size: 18px;margin-left: 20px"> Kết quả tìm kiếm:</i>
        <div class="htkqua1"style="overflow:auto;">

            @if($jobs->isEmpty())
            Không tìm thấy kết quả nào
            @else
            @foreach($jobs as $job) 
            <div class="showtimkiem" style="overflow:auto;">
                <table>
                    <tr>
                        <td class="showtimkiem1"><div  >
                                <a href="{!! route('frontend.congviec.timkiem', ['id' => $job->id]) !!}">
                                    {!!$job->name!!}<br/>
                                </a>
                                
                                <p style="font-size: 15px;color: #555;">
                                    @if($job->location)
                                    {!!$job->location->name!!} | <br/>
                                    @endif
                                </p>
                            </div>
                        </td>
                        <td  class="showtimkiem2">
                            <div>
                                <a style="color: #FF9933;">
                                    {!!$job->salary!!}
                                </a>
                                <p style="font-size: 15px;color: #555;">
                                    @if($job->company)
                                    {!!$job->company->name!!} <br/>
                                    @endif
                                </p>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            @endforeach
            @endif

        </div>

    </div>
</div>
@endsection