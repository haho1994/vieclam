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
                        <span class="qlvieclam">Trạng Thái</span>
                        <span class="qlvieclam">Thao Tác</span>
                        <br class="clear">
                        </dt>
                        @forelse($jobs as $job)
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
                            <span class="qlvl_ten3">
                                @if($job->status)
                                Duyệt
                                @else
                                Chưa duyệt
                                @endif
                            </span>
                            <span class="qlvl_ten4">
                                <a href='{!! route("ntdquanlyvieclam.xem", array("id" => $job->id)) !!}'>Xem</a>
                                <a href='{!! route("ntdquanlyvieclam.sua", array("id" => $job->id)) !!}'>Sửa</a>
                                <a href='{!! route("ntdquanlyvieclam.xoa", array("id" => $job->id)) !!}'>Xóa</a>
                            </span>
                        </dd>
                        @empty
                        <div style="margin-left: 350px;margin-top: 30px;font-size: 13px">
                        <em>Hiện tại không có công việc nào!!!</em>
                        </div>
                        @endforelse
                    </dl>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection