@extends('layouts.headerfooter')
@section('noi_dung')
<div class="wap">
<div class="lienhe">
    <div class="lienhe1">
        <h3>Việc Làm Của Tôi</h3>
        <form>
            <div>
                <dl class="hoso">
                    <dt class="hoso1" style="width: 100%">
                        <span class="vieclam">Tên Việc Làm</span>
                        <span class="vieclam1">Ngày Lưu</span>
                        <span class="vieclam3">Tình Trạng</span>
                        <br class="clear">
                    </dt>
                    @foreach($job_favourites as $item)
                    <dd class="hoso2" style="width: 100%">
                        <span class="vieclam">
                             @if($item->job)
                            <strong>{!! $item->job->name !!}</strong>
                            @endif
                        </span>
                        <span class="vieclam1">
                            {!! $item->updated_at !!}
                        </span>
                        <span class="vieclam3">
                            <a>Nộp Đơn</a> | <a href='{!! route("vieclam.cuatoi.xoa", array("id" => $item->id)) !!}'>Xóa</a>
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