@extends('layouts.headerfooter')
@section('noi_dung')
<div class="wap">
<div class="lienhe">
    <div class="lienhe1">
        <h3>Hồ Sơ Của Tôi</h3>
        <form>
            <div>
                <dl class="hoso">
                    <dt class="hoso1" style="width: 100%">
                        <span class="hoso1-1">HỒ SƠ</span>
                        <span class="hoso1-2">NGÀY CẬP NHẬT</span>
                        <span class="hoso1-3">THAO TÁC</span>
                        <br class="clear">
                    </dt>
                    @foreach($curriculumvitae as $item)
                    <dd class="hoso2" style="width: 100%">
                        <span class="hoso2-1">
                            @if($item->user)
                            <strong>{!! $item->user->full_name !!}</strong>
                            @endif
                        </span>
                        <span class="hoso2-2">
                            
                            {!! $item->updated_at !!}
                        </span>
                        <span class="hoso2-3">
                            <a title="Xem Thông Tin Hồ Sơ">Xem</a>
                            |
                            <a title="Cập Nhật Thông Tin Hồ Sơ">Cập Nhật</a>
                            |
                            <a title="Xóa Thông Tin Hồ Sơ">Xóa</a>
                        </span>
                    </dd>
                    @endforeach
                </dl>
            </div>
        </form>
    </div>
</div>
</div>
@endsection