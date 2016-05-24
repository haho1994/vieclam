@extends('layouts.tuyendung')
@section('noidung1')

<div class="quanlyvieclam">
    <div class="qlvl">
        <div class="lienhe1">
            <h3>Quản Lý Việc Làm</h3>
            <form>
                <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
                <div>
                    <dl class="hoso">
                        <dt class="hoso1" style="width: 100%">
                        <span class="qlvieclam">Tên Việc Làm</span>
                        <span class="qlvieclam">Ngày Cập Nhập</span>
                        <span class="qlvieclam">Hồ Sơ Ứng Tuyển</span>
                        <br class="clear">
                        </dt>
                        @foreach($jobs as $job)
                        @if(!empty($job ->status))
                        <dd class="hoso2" style="width: 100%">
                            <span class="qlvl_ten">
                                <strong>{!! $job->name !!}</strong>
                            </span>
                            <span class="qlvl_ten1">
                                {!! $job->updated_at !!}
                            </span>
                            <span class="qlvl_ten2">
                                <a href='{!! route("ntdvieclam_hoso", array("id" => $job->id)) !!}'>Xem</a>
                            </span>
                        </dd>
                        @endif
                        @endforeach
<!--                        <div style="margin-left: 320px;margin-top: 20px;font-size: 13px">
                        <em>Hiện tại chưa có việc làm nào!</em>
                        </div>-->
                    </dl>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection