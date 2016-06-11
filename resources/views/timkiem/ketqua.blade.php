@extends('layouts.headerfooter')
@section('noi_dung')
<div class="form_sum">
    <div class="form">
        <div class="form1" >
            <strong class="text1" >Tìm việc làm!!!</strong>
            <div class="sum_tk" style="width: 100%">
                <form class="tim" method="get" action="{!!route('frontend.search.search1')!!}">
                    <div style="width: 100%">
                        <div class="top_tk" style=" width: 79%">
                            <input type="text" class="text2" name='keyword' placeholder="Nhập chức danh, vị trí, kỹ năng..." onFocus="this.value = '';" onBlur="if (this.value == '') {
                                        this.value = 'Enter Keyword(s)';
                                    }">
                        </div>
                        <div class="left_tk" style="width: 39%;display: inline-block">
                            <select name="category_id" class="option1" >
                                <option value="" >Nghành nghề</option>
                                @foreach($categories as $category)
                                <option value="{!! $category->id !!}">{!! $category->name !!}</option>
                                @endforeach
                            </select >
                            <select name="skill_id" class="option3">
                                <option value="" >Kỹ năng</option>
                                @foreach($skills as $skill)
                                <option value="{!! $skill->id !!}">{!! $skill->name !!}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="center_tk" style="width: 39%;display: inline-block">
                            <select name="location_id[]" multiple="multiple" id='choose-address' class="option2">
                                @foreach($locations as $location)
                                <option value="{!! $location->name !!}">{!! $location->name !!}</option>
                                @endforeach
                            </select>
                            <select name="experience" class="option4">
                                <option value="">Kinh nghiệm</option>
                                <option ></option>
                                <option>Không yêu cầu kinh nghiệm</option>
                                <option>1 năm</option>
                                <option>1-2 năm</option>
                                <option>2-5 năm</option>
                                <option>Nhiều hơn 5 năm</option>
                            </select>
                        </div>

                        <div class="right_tk" style="width: 19%;display: inline-block"">
                            <input class="input_tk" type="submit" class="login login-submit" value="Tìm Kiếm">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    $("#choose-address").select2({
        tags: true  
    })
</script>
@endsection