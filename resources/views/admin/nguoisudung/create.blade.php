@extends('admin.trangAdmin.admin')
@section('user2')
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             <small>User</small>
                        </h1>
                    </div>
                </div>
<?php
if (Session::has('success')) {
    echo \Session::get('success');
}
?>

<form action="{!! route('admin.quanly_user.xuly') !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
        <tr>
            <td><label>Họ Và Tên</label></td>
            <td>
                <input type="text" value="" name="name" />
                <?php
                if ($errors->has('name')) {
                    echo $errors->first('name');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Ngày Sinh</label></td>
            <td>
                <input type="text" value="" name="address" />
                <?php
                if ($errors->has('address')) {
                    echo $errors->first('address');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Email</label></td>
            <td>
                <input type="text" value="" name="email" />
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
                <input type="text" value="" name="phone" />
                <?php
                if ($errors->has('phone')) {
                    echo $errors->first('phone');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Địa Chỉ</label></td>
            <td>
                <input type="text" value="" name="phone" />
                <?php
                if ($errors->has('phone')) {
                    echo $errors->first('phone');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Tỉnh, T.P</label></td>
            <td>
                <select name="id_location" >
                    <option value="" >Chon tỉnh, tp</option>
                    @foreach($location as $location)
                    <?php
//                        $selected = '';
                        if ($location->id == $user->id_location) {
                            $selected = 'selected';
                        }
                    ?>
                    <option value="{!! $location->id !!}" {!!$selected!!} >{!! $location->name !!}</option>
                    @endforeach
                </select>
                //<?php
                if ($errors->has('id')) {
                    echo $errors->first('id');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Hình Thức</label></td>
            <td>
                <select name="id_location" >
                    <option value="" >Chọn hình thức</option>
                    @foreach($category as $category)
                    <?php
                       $selected = '';
                        if ($category->id == $user->id_category) {
                            $selected = 'selected';
                        }
                    ?>
                    <option value="{!! $category->id !!}" {!!$selected!!} >{!! Category->name !!}</option>
                    @endforeach
                </select>
                //<?php
                if ($errors->has('id')) {
                    echo $errors->first('id');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Tao" />
            </td>
        </tr>
    </table>
</form>
@endsection