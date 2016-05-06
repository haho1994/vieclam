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
            <td><label type="text" value="{!! $user->id !!}" name="name">{!! $user->id !!}</label></td>
        </tr>
       <tr>
            <td><label>Họ Và Tên</label></td>
            <td><label type="text" value="{!! $user->full_name !!}" name="full_name">{!! $user->full_name !!}</label></td>
        </tr>
        <tr>
            <td><label>Ngày Sinh</label></td>
            <td><label type="text" value="{!! $user->name !!}" name="brithday">{!! $user->brithday !!}</label></td>
        </tr>
        <tr>
            <td><label>Email</label></td>
            <td><label type="text" value="{!! $user->email !!}" name="email">{!! $user->email !!}</label></td>
        </tr> 
        <tr>
            <td><label>Số điện thoại</label></td>
            <td><label type="text" value="{!! $user->phone !!}" name="phone">{!! $user->phone !!}</label></td>
        </tr>
        <tr>
            <td><label>Địa chỉ</label></td>
            <td><label type="text" value="{!! $user->address !!}" name="address">{!! $user->address !!}</label></td>
        </tr>
        <tr>
            <td><label>Tên Tỉnh, T.p</label></td>
            <td><label type="text" value="{!! $locations->id !!}" name="id_location">{!! $locations->name !!}</label></td>
        </tr>
        <tr>
            <td><label>Hình Thức</label></td>
            <td><label type="text" value="{!! $category->id !!}" name="id_catedory">{!! $category->name !!}</label></td>
        </tr>
        <tr>
            <td><label>Mức Lương</label></td>
            <td><label type="text" value="{!! $user->salary !!}" name="salary">{!! $user->salary !!}</label></td>
        </tr>
        <tr>
            <td><label>Mô Tả</label></td>
            <td><label type="text" value="{!! $user->description !!}" name="description">{!! $user->description !!}</label></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Trở về" />
            </td>
        </tr>
    </table>
</form>