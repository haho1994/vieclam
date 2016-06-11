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
            <div class="htkqua1"style="overflow:auto;">
                @if($jobs->isEmpty())
                Không tìm thấy hồ sơ nào
                @else

                @foreach($jobs as $job)
                <div class="showtimkiem" style="overflow:auto;">
                    @if(empty($job->expected_position_id))
                    <a href="{!! route('timhoso_xemchitiet', ['id' => $job->id]) !!}">
                        {!!$job->user->full_name!!}<br/>

                    </a>
                    @else
                                
                    <table>
                        <tr>
                            <td class="showtimkiem1"><div  >
                                    <a href="{!! route('timhoso_xemchitiet', ['id' => $job->id]) !!}">
                                    {!!$job->expected_position_id!!}<br/>
                                </a>

                                    <p style="font-size: 15px;color: #555;">
                                        {!!$job->recent_position_id!!} | 
                                        @if($job->location)
                                    {!!$job->location->name!!}  <br/>
                                    @endif <br/>
                                    </p>
                                </div>
                            </td>
                        <td  class="showtimkiem2">
                            <div>
                                <a style="color: #FF9933;">
                                    {!!$job->highes_edu!!}
                                </a>
                                <p style="font-size: 15px;color: #555;">
                                    {!!$job->year_experience!!} <br/>
                                </p>
                            </div>
                        </td>
                        </tr>
                    </table>
                    @endif
                </div>
                @endforeach
                @endif
            </div>
        </h2>
    </div>
</div>
@endsection