@extends('layouts.headerfooter')
@section('noi_dung')
<div class="up" align="center">
<a href='{!! route("admin.download.cv", ["filename" => "02367f29-a86d-4578-8172-e32ce154ffa0.docx"]) !!}'>Tai ve</a>

<form action="/upload-cv" method="post" enctype="multipart/form-data" >
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <input type="file" name="cv" />
    <input type="submit" name="upload" />
</form>

</div>
@endsection
