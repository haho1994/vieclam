@extends('layouts.headerfooter')
@section('noi_dung')
<div class="form_ntdtimkiem">
    <div class="form_ntdtimkiem1">
        <div class="form_ntdtimkiem2" >
            <div class="form_ntdtimkiem_text">
                <strong class="form_ntdtimkiem_text1">Tìm Hồ Sơ</strong>
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
                            <select name="expected_position_id" class="ntdtimkiem1">
                                <option>Chọn vị trí</option>
                                <option>Nhân viên</option>
                                <option>Trưởng phòng</option>
                                <option>Nhân viên lập trình</option>
                                <option>Tester</option>
                                <option>Thực tập sinh</option>
                                <option>Chuyên viên kinh doanh</option>
                            </select>
                        </div>
                        <div class="center_tk" style="width: 39%;display: inline-block">
                            <select name="highes_edu" class="ntdtimkiem1">
                                <option >Trình độ</option>
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
