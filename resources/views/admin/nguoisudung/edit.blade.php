@extends('admin.trangAdmin.admin')
@section('noidung')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             Cập Nhập<small>Người Sử Dụng/ Sửa</small>
                        </h1>
                    </div>
</div>
<?php 
    if (Session::has('success')) {
        echo \Session::get('success');
    }
?>
<div >
<form action="{!! route('admin.quanly_user.luu', ['id' => $users->id]) !!}" method="post" >
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <div class="nsdsua">
    <table>
        <tr>
            <td><label>Họ và tên</label></td>
            <td>
                <input style="width: 70%;" type="text" value="{!! $users->full_name !!}" name="full_name" />
                <?php
                if ($errors->has('full_name')) {
                    echo $errors->first('full_name');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Ngày sinh</label></td>
            <td>
                <input style="width: 70%;" type="text" value="{!! $users->brithday !!}" name="brithday" />
                <?php
                if ($errors->has('brithday')) {
                    echo $errors->first('brithday');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Email</label></td>
            <td>
                <input style="width: 70%;" type="text" value="{!! $users->email !!}" name="email" />
                <?php
                if ($errors->has('email')) {
                    echo $errors->first('email');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Số điện thoại</label></td>
            <td>
                <input style="width: 70%;" type="text" value="{!! $users->phone !!}" name="phone" />
                <?php
                if ($errors->has('phone')) {
                    echo $errors->first('phone');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Địa chỉ</label></td>
            <td>
                <input style="width: 70%;" type="text" value="{!! $users->address !!}" name="address" />
                <?php
                if ($errors->has('address')) {
                    echo $errors->first('address');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Công việc</label></td>
            <td>
                <select name="id_category"  style="width: 70%;">
                    @foreach($categories as $category)
                    <?php
                        $selected = '';
                        if ($category->id == $users->id_category) {
                            $selected = 'selected';
                        }
                    ?>
                    <option value="{!! $category->id !!}" {!!$selected!!} >{!! $category->name !!}</option>
                    @endforeach
                </select>
                <?php
                if ($errors->has('id_category')) {
                    echo $errors->first('id_category');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Mức Lương</label></td>
            <td>
                <input style="width: 70%;" type="text" value="" name="salary" />
                <?php
                if ($errors->has('salary')) {
                    echo $errors->first('salary');
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
    </div>
</form>
</div>
@endsection