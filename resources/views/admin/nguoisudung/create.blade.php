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
<div class="hh" align="center">
<form action="{!! route('admin.quanly_user.xuly') !!}" method="post" >
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
                <input type="text" value="" name="brithday" />
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
                <input type="text" value="" name="address" />
                <?php
                if ($errors->has('address')) {
                    echo $errors->first('address');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Tỉnh, T.P</label></td>
            <td>
                <select name="id_location" >
                    <option value="" >Chon tỉnh, tp</option>
                    @foreach($locations as $location)
                    <?php
                        $selected = '';
                        if ($location->id == $location->name) {
                            $selected = 'selected';
                        }
                    ?>
                    <option value="{!! $location->id !!}" {!!$selected!!} >{!! $location->name !!}</option>
                    @endforeach
                </select>
                <?php
                if ($errors->has('id_location')) {
                    echo $errors->first('id_location');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Hình Thức</label></td>
            <td>
                <select name="id_category" >
                    <option value="" >Chọn hình thức</option>
                    @foreach($categories as $category)
                    <?php
                       //$selected = '';
                        if ($category->id == $category->name) {
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
            <td><label>Lương</label></td>
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
            <td><label>Mô Tả</label></td>
            <td>
                <textarea value="" name="description">
                <?php
                if ($errors->has('description')) {
                    echo $errors->first('description');
                }
                ?>
                </textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Tạo" />
            </td>
        </tr>
    </table>
</form>
</div>
@endsection