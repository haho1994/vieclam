@extends('admin.trangAdmin.admin')
@section('noidung')
<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            <small>Companies/ Thêm</small>
        </h1>
    </div>
</div>
<?php
if (Session::has('success')) {
    echo \Session::get('success');
}
?>

<form action="{!! route('admin.quanly_companies.xuly') !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
        <tr>
            <td><label>Tên</label></td>
            <td>
                <input style="width: 400px;" type="text" value="" name="name" />
                <?php
                if ($errors->has('name')) {
                    echo $errors->first('name');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Địa chỉ</label></td>
            <td>
                <input style="width: 400px;" type="text" value="" name="address" />
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
                <input style="width: 400px;" type="text" value="" name="email" />
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
                <input style="width: 400px;" type="text" value="" name="phone" />
                <?php
                if ($errors->has('phone')) {
                    echo $errors->first('phone');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Trang thai</label></td>
            <td>
                <select name="status">
                    <option  value="">Chọn trạng thái</option>  
                    <option  value="0">Chua duyet</option>
                    <option value="1">Duyet</option>
                </select>
            </td>
        </tr>
        <tr>
            <td style="width: 200px;"><label>Mô tả công ty</label></td>
            <td >
                <textarea style="width: 400px;" value=""  name="description" placeholder="Nhập mô tả công việc"></textarea>
                <?php
                if ($errors->has('description')) {
                    echo $errors->first('description');
                }
                ?>
            </td>
        </tr> 
        <tr>
            <td colspan="2">
                <input type="submit" value="Tạo" />
            </td>
        </tr>
    </table>
</form>
@endsection