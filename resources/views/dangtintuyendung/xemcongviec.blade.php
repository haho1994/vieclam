@extends('layouts.tuyendung')
@section('noidung1')
<div class="dangtintuyendung_text">
    <label style="margin-top: 10px;margin-left: 20px;">Quản Lý Việc Làm</label>
</div>
<div style="width: 700px;height: 1000px;background: #fff;margin-left: 100px;">
    <div style="width: 650px;height: 50px;border-bottom: 1px #B0BEC5 dotted;margin-left: 25px;">
        <label style="font-size: 17px;margin-top: 20px;">Xem Chi Tiết Công Việc</label>
    </div>
    <div style="margin-left: 50px;margin-top: 50px;">
        <form action="{!! route('ntdquanlyvieclam.xem', ['id' => $job->id]) !!}" method="post">
            <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
            <table>
                <tr style="height: 40px;">
                    <td style="width:  150px;"> Tên</td>
                    <td><label type="text" >{!! $job->name !!}</label></td>
                </tr>
                <tr style="height: 40px;">
                    <td>Công ty</td>
                    <td>
                        <label type="text">
                            @if($job->company)
                            {!! $job->company->name !!}
                            @endif
                        </label>
                    </td>
                </tr>
                <tr style="height: 40px;">
                    <td>Địa điểm</td>
                    <td>
                        <label type="text" >

                            @if($job->location)
                            {!! $job->location->name !!}
                            @endif
                        </label></td>
                </tr>
                <tr style="height: 40px;">
                    <td>Kỹ năng</td>
                    <td><label type="text" >{!! $job->skill->name !!}</label></td>
                </tr>
                <tr style="height: 40px;">
                    <td>Mức lương</td>
                    <td><label type="text">{!! $job->salary !!}</label></td>
                </tr>
                <tr style="height: 40px;">
                    <td>Nghành nghề</td>
                    <td>
                        <label type="text" >
                            @if($job->category)
                            {!! $job->category->name !!}
                            @endif
                        </label>
                    </td>
                </tr>
                <tr style="height: 40px;">
                    <td>Ngôn ngữ</td>
                    <td>
                        <label type="text">
                            @if($job->language)
                            {!! $job->language->name !!}
                            @endif

                        </label>
                    </td>
                </tr>
                <tr style="height: 40px;">
                    <td>Trình độ</td>
                    <td><label type="text">{!! $job->levels !!}</label></td>
                </tr>
                <tr style="height: 40px;">
                    <td>Kinh nghiệm</td>
                    <td><label type="text">{!! $job->experience !!}</label></td>
                </tr>
                <tr style="height: 40px;">
                    <td>Trạng thái</td>
                    <td
                        <label type="text">
                            @if($job->status)
                            <label>Duyệt</label>
                                 @else
                                <label>Chưa Duyệt</label>
                                @endif
                        </label></td>
                </tr>
                <tr style="height: 40px;">
                    <td>Mô tả</td>
                    <td><label type="text">{!! $job->description !!}</label></td>
                </tr>
                <tr style="height: 40px;">
                    <td colspan="2">
                        <a href='{!! route("ntdquanlyvieclam")!!}'>Trở về</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
@endsection