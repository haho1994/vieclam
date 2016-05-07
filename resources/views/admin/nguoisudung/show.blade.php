<?php 
    if (Session::has('success')) {
        echo \Session::get('success');
    }
?>

<form action="{!! route('admin.quanly_user.xem', ['id' => $user->id]) !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
        <tr>
            <td><label>ID</label></td>
            <td><label type="text" >{!! $user->id !!}</label></td>
        </tr>
       <tr>
            <td><label>Họ Và Tên</label></td>
            <td><label type="text" >{!! $user->full_name !!}</label></td>
        </tr>
        <tr>
            <td><label>Ngày Sinh</label></td>
            <td><label type="text">{!! $user->brithday !!}</label></td>
        </tr>
        <tr>
            <td><label>Email</label></td>
            <td><label type="text">{!! $user->email !!}</label></td>
        </tr> 
        <tr>
            <td><label>Số điện thoại</label></td>
            <td><label type="text" >{!! $user->phone !!}</label></td>
        </tr>
        <tr>
            <td><label>Địa chỉ</label></td>
            <td><label type="text" >{!! $user->address !!}</label></td>
        </tr>
        <tr>
            <td><label>Tên Tỉnh, T.p</label></td>
            <td><label type="text">{!! $locations->name !!}</label></td>
        </tr>
        <tr>
            <td><label>Hình Thức</label></td>
            <td><label type="text">{!! $category->name !!}</label></td>
        </tr>
        <tr>
            <td><label>Mức Lương</label></td>
            <td><label type="text">{!! $user->salary !!}</label></td>
        </tr>
        <tr>
            <td><label>Mô Tả</label></td>
            <td><label type="text" >{!! $user->description !!}</label></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Trở về" />
            </td>
        </tr>
    </table>
</form>