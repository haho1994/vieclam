@extends('admin.trangAdmin.admin')
@section('noidung')
<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            <small>Companies/ Sửa</small>
        </h1>
    </div>
</div>
<?php
if (Session::has('success')) {
    echo \Session::get('success');
}
?>

<form action="{!! route('admin.quanly_companies.luu', ['id' => $company->id]) !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
        <tr>
            <td><label>Ten</label></td>
            <td>
                <input style="width: 400px;" type="text" value="{!! $company->name !!}" name="name" />
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
                <input style="width: 400px;" type="text" value="{!! $company->address !!}" name="address" />
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
                <input style="width: 400px;" type="text" value="{!! $company->email !!}" name="email" />
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
                <input style="width: 400px;" type="text" value="{!! $company->phone !!}" name="phone" />
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
                    <option value="">Chon trang thai</option>
                    <?php
                        $check1 = "";
                        $check2 = "";
                        if ($company->status) {
                            $check2 = 'selected';
                        }
                        if (!$company->status) {
                            $check1 = 'selected';
                        }
                    ?>
                    <option {!! $check1 !!} value="0">Chua duyet</option>
                    <option {!! $check2 !!} value="1">Duyet</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label>Mô tả</label></td>
            <td>
                <textarea style="width: 400px;" type="text" value="{!! $company->description !!}" name="description" ></textarea>
                <?php
                if ($errors->has('description')) {
                    echo $errors->first('description');
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