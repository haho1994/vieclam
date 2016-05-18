@extends('layouts.headerfooter')
@section('noi_dung')
<div class="xemchitiethoso">
    <div class="xem" align="center">
        <form>
            <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" >
            <div style="height: 80px;">
            <div >
                <label style="color: #5e5e5e;font-size: 30px;" type="text" >
                    {!! $cv->recent_category_id !!}
                </label>

            </div>
            <div>
                <label type="text" >Cập nhật ngày: {!! $cv->updated_at !!}</label>
            </div>
            </div>
            <div style="color: #5e5e5e;border-bottom: 1px dotted #ccc;border-top:1px dotted #ccc; height: 40px;font-size: 20px ">
                <label>Thông Tin Chung </label>  
            </div>
            <table >
                <tr style="height: 30px">
                    <td style="width: 300px ">
                        Trình độ
                    </td>
                    <td style="color: #204d74">
                        <label type="text" >{!! $cv->highes_edu !!}</label>
                    </td>
                </tr>
                <tr style="height: 30px">
                    <td style="width: 300px;">
                        Tổng số năm kinh nghiệm
                    </td>
                    <td style="color: #204d74">
                        <label type="text" >{!! $cv->year_experience !!}</label>
                    </td>
                </tr>
                <tr style="height: 30px">
                    <td style="width: 300px;">
                        Công việc gần đây nhất
                    </td>
                    <td style="color: #204d74">
                        <label>
                            @if($cv->category)
                            {!!$cv->category->name!!}</em>
                            @endif
                        </label>
                    </td>
                </tr>
                <tr style="height: 30px">
                    <td style="width: 300px;">
                        Công ty gần đây nhất
                    </td>
                    <td style="color: #204d74">
                        <label>
                            @if($cv->company)
                            {!!$cv->company->name!!}</em>
                            @endif
                        </label>
                    </td>
                </tr>
                <tr style="height: 30px">
                    <td style="width: 300px;">
                        Cấp bậc hiện tại
                    </td>
                    <td style="color: #204d74">
                        <label type="text" >{!! $cv->recent_position_id !!}</label>
                    </td>
                </tr>
                <tr style="height: 30px">
                    <td style="width: 300px;">
                        Vị trí mong muốn
                    </td>
                    <td style="color: #204d74">
                        <label type="text" >{!! $cv->expected_position_id !!}</label>
                    </td>
                </tr>
                <tr style="height: 30px">
                    <td style="width: 300px;">
                        Nơi làm việc
                    </td>
                    <td style="color: #204d74">
                        <label >
                            @if($cv->location)
                            {!!$cv->location->name!!}</em>
                            @endif
                        </label>
                    </td>
                </tr>
                <tr style="height: 30px">
                    <td style="width: 300px;">
                        Mức lương
                    </td>
                    <td style="color: #204d74">
                        <label type="text" >{!! $cv->expected_salary !!}</label>
                    </td>
                </tr>
            </table>
            <div>
                <label style="" >
                    <a href='{!! route("admin.download.cv", ["filename" => "02367f29-a86d-4578-8172-e32ce154ffa0.docx"]) !!}'>
                        {!! $cv->filename!!}
                </label>
            </div>
        </form>
    </div>
</div>
@endsection

