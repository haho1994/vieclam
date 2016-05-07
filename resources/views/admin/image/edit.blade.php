@extends('admin.trangAdmin.admin')
@section('image1')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             <small>Images/ Sửa</small>
                        </h1>
                    </div>
</div>
<?php 
    if (Session::has('success')) {
        echo \Session::get('success');
    }
?>

<form action="{!! route('admin.quanly_images.luu', ['id' => $images->id]) !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
        <tr>
            <td><label>Tên</label></td>
            <td>
                <input type="text" value="{!! $images->name !!}" name="name" />
                <?php
                if ($errors->has('name')) {
                    echo $errors->first('name');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Mục tiêu</label></td>
            <td>
                <select name="target_id" >
                    <option value="" >Chọn user</option>
                    @foreach($users as $user)
                    <?php
                        $selected = '';
                        if ($user->id == $images->target_id) {
                            $selected = 'selected';
                        }
                    ?>
                    <option value="{!! $user->id !!}" {!!$selected!!} >{!! $user->id !!}</option>
                    @endforeach
                </select>
                <?php
                if ($errors->has('target_id')) {
                    echo $errors->first('target_id');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Nội dung mục tiêu</label></td>
            <td>
                <select name="target_content" >
                    @foreach($hinhanh as $anh)
                    <?php
                        $selected = '';
                        if ($anh->target_content == $images->target_content) {
                            $selected = 'selected';
                        }
                    ?>
                    <option value="{!! $anh->target_content !!}" {!!$selected!!} >{!! $anh->target_content !!}</option>
                    @endforeach
                </select>
                <?php
                if ($errors->has('target_content')) {
                    echo $errors->first('target_content');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Sửa" />
            </td>
        </tr>
    </table>
</form>
@endsection