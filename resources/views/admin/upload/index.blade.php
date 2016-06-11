@extends('layouts.headerfooter')
@section('noi_dung')
<div class="up" align="center">
<a href=''>Tai ve</a>
<form action="/upload/{$cvId}" method="post" enctype="multipart/form-data" >
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <input type="file" name="cv" />
    <input type="submit" name="upload" />
</form>
</div>
@endsection
