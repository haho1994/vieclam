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
            <td><label type="text" value="{!! $company->name !!}" name="name">{!! $company->name !!}</label></td>
        </tr>
        <tr>
            <td><label>Địa chỉ</label></td>
            <td><label type="text" value="{!! $company->address !!}" name="name">{!! $company->address !!}</label></td>
        </tr>
        <tr>
            <td><label>Email</label></td>
            <td><label type="text" value="{!! $company->email !!}" name="name">{!! $company->email !!}</label></td>
        </tr>
        <tr>
            <td><label>Số điện thoại</label></td>
            <td><label type="text" value="{!! $company->phone !!}" name="name">{!! $company->phone !!}</label></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Trở về" />
            </td>
        </tr>
    </table>
</form>