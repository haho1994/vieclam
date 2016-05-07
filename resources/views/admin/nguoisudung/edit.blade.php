@extends('admin.trangAdmin.admin')
@section('user1')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             <small>User/ Sửa</small>
                        </h1>
                    </div>
</div>
<?php 
    if (Session::has('success')) {
        echo \Session::get('success');
    }
?>

<form action="{!! route('admin.quanly_user.luu', ['id' => $users->id]) !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
        <tr>
            <td><label>Họ và tên</label></td>
            <td>
                <input type="text" value="{!! $users->full_name !!}" name="full_name" />
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
                <input type="text" value="{!! $users->brithday !!}" name="brithday" />
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
                <input type="text" value="{!! $users->email !!}" name="email" />
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
                <input type="text" value="{!! $users->phone !!}" name="phone" />
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
                <input type="text" value="{!! $users->address !!}" name="address" />
                <?php
                if ($errors->has('address')) {
                    echo $errors->first('address');
                }
                ?>
            </td>
        </tr>
        <tr>
<<<<<<< HEAD
            <td><label>Công việc</label></td>
            <td>
                <select name="id_category" >
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
            <td><label>Địa điểm</label></td>
=======
            <td><label>Tỉnh, T.P</label></td>
>>>>>>> 6a0d612dd001d5aafc81983b720dd9d1f881ae41
            <td>
                <input type="text" value="{!! $users->address !!}" name="address" />
                <?php
                if ($errors->has('address')) {
                    echo $errors->first('address');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Mức lương</label></td>
            <td>
                <input type="text" value="{!! $users->salary !!}" name="salary" />
                <?php
                if ($errors->has('salary')) {
                    echo $errors->first('salary');
                }
                ?>
            </td>
        </tr>
        <tr>
<<<<<<< HEAD
=======
            <td><label>Mức Lương</label></td>
            <td>
                <input type="text" value="" name="salary" />
                <?php
                if ($errors->has('salary')) {
                    echo $errors->first('salary');
                }
                ?>
            </td>
        </tr>
        <tr>
            
>>>>>>> 6a0d612dd001d5aafc81983b720dd9d1f881ae41
            <td colspan="2">
                <input type="submit" value="Sửa" />
            </td>
        </tr>
    </table>
</form>
@endsection