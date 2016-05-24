@extends('layouts.tuyendung')
@section('noidung1')
<div class="form_ntdtimkiem">
    <div style="width: 89%;height: 50px;border: 1px #ddd solid;background: #FFF;margin-bottom: 30px;font-size: 20px;margin-left: 170px;">
        <label style="margin-top: 10px;margin-left: 20px;">Tìm Kiếm Hồ Sơ</label>
    </div>
    <div class="form_ntdtimkiem1">
        <div class="form_ntdtimkiem2" >
            <div class="form_ntdtimkiem_text">
                <p class="form_ntdtimkiem_text1">Tìm Hồ Sơ</p>
            </div>
            <div class="form_ntdtimkiem3" style="width: 100%">
                <form class="form_ntdtimkiem4" action="{!!route('timhoso_xuly')!!}"  method="get" >

                    <div style="width: 100%">
                        <div class="left_tk" style="width: 39%;display: inline-block">
                            <input type="text" class="ntdtimkiem1" name='keyword' value="Nhập chức danh, vị trí, kỹ năng..." onFocus="this.value = '';" onBlur="if (this.value == '') {
                                        this.value = 'Enter Keyword(s)';
                                    }">
                            <select name="expected_job_category" class="ntdtimkiem1" >
                                <option value="" >Chọn nghành nghề</option>
                                @foreach($categories as $category)
                                <option value="{!! $category->id !!}">{!! $category->name !!}</option>
                                @endforeach
                            </select >
                            <select name="recent_position_id" class="ntdtimkiem1">
                                <option>Cấp bậc</option>
                                <option>Mới tốt nghiệp</option>
                                <option>Nhân viên</option>
                                <option>Trưởng phòng</option>
                                <option>Giám đốc và cấp cao hơn</option>
                            </select>
                            
                        </div>
                        <div class="center_tk" style="width: 39%;display: inline-block">
                            <select name="highes_edu" class="ntdtimkiem1">
                                <option >Trình độ</option>
                                <option ></option>
                                <option>Đại học</option>
                                <option>Cao đẳng</option>
                                <option>Trung cấp</option>
                                <option>Tốt nghiệp phổ thông</option>
                            </select>
                            <select name="expected_location_id" class="ntdtimkiem1">
                                <option value="" >Chọn nơi làm việc</option>
                                @foreach($locations as $location)
                                <option value="{!! $location->id !!}">{!! $location->name !!}</option>
                                @endforeach
                            </select>
                            <select name="year_experience" class="ntdtimkiem1">
                                <option >Năm kinh nghiệm</option>
                                <option>Không yêu cầu kinh nghiệm</option>
                                <option>1 năm</option>
                                <option>1-2 năm</option>
                                <option>2-5 năm</option>
                                <option>Nhiều hơn 5 năm</option>
                            </select>
                        </div>
                        <div class="right_tk" style="width: 19%;display: inline-block"">
                            <input class="input_ntdtk" type="submit" class="login login-submit" value="Tìm Kiếm">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
