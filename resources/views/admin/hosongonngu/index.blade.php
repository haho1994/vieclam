@extends('admin.trangAdmin.admin')
@section('hosongonngu')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             <small>Curriculumvitaes Languages</small>
                        </h1>
                    </div>
</div>
<a href='{!! route("admin.quanly_curriculumvitaes_languages.them") !!}'>Thêm</a>
<table class="table">
    <tr>
        <th>id hồ sơ</th>
        <th>Ngôn ngữ</th>
        <th>Thao tác</th>
    </tr>
    @foreach($hosongonngu as $item)
    <tr>
        <td>{!! $item->curriculumvita->id !!}</td>
        <td>{!! $item->language->name !!}</td>
        <td>
            <a href='{!! route("admin.quanly_curriculumvitaes_languages.sua", array("id" => $item->id)) !!}'>Sửa</a>
            <a href='{!! route("admin.quanly_curriculumvitaes_languages.xoa", array("id" => $item->id)) !!}'>Xóa</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection