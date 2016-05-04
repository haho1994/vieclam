<?php 
    if (Session::has('success')) {
        echo \Session::get('success');
    }
?>

<form action="{!! route('admin.quanly_companies.xem', ['id' => $company->id]) !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
       <tr>
            <td><label>Tên</label></td>
            <td>
<!--                <text ></text>-->
                <output type="text" value="{!! $company->name !!}" name="name" ></output>
<!--                <input type="text" value="{!! $company->name !!}" name="name" />-->
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
                <label type="text" value="{!! $company->name !!}" name="name"></label>
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
                <label type="text" value="{!! $company->name !!}" name="name"></label>
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
                <label type="text" value="{!! $company->name !!}" name="name"></label>
                <?php
                if ($errors->has('phone')) {
                    echo $errors->first('phone');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Trở về" />
            </td>
        </tr>
    </table>
</form>