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
                <input type="text" value="{!! $company->name !!}" name="name" />
                <?php
                if ($errors->has('name')) {
                    echo $errors->first('name');
                }
                ?>
            </td>
        </tr>
<!--        <tr>
            <td><label>Thuoc danh muc</label></td>
            <td>
                <select name="id_parent" >
                    <option value="" >Chon danh muc</option>
                    @foreach($parents as $parent)
                    <?php
//                        $selected = '';
//                        if ($parent->id == $category->id_parent) {
//                            $selected = 'selected';
//                        }
                    ?>
                    <option value="{!! $parent->id !!}" {!!$selected!!} >{!! $parent->name !!}</option>
                    @endforeach
                </select>
                //<?php
//                if ($errors->has('id_parent')) {
//                    echo $errors->first('id_parent');
//                }
//                ?>
            </td>
        </tr>-->
        <tr>
            <td><label>Địa chỉ</label></td>
            <td>
                <input type="text" value="{!! $company->name !!}" name="address" />
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
                <select name="location_id" >
                    <option value="" >Chon tỉnh, tp</option>
                    @foreach($locations as $location)
                    <?php
                        $selected = '';
                        if ($location->id == $company->location_id) {
                            $selected = 'selected';
                        }
                    ?>
                    <option value="{!! $location->id !!}" {!!$selected!!} >{!! $location->name !!}</option>
                    @endforeach
                </select>
                //<?php
                if ($errors->has('location_id')) {
                    echo $errors->first('location_id');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Email</label></td>
            <td>
                <input type="text" value="{!! $company->name !!}" name="email" />
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
                <input type="text" value="{!! $company->name !!}" name="phone" />
                <?php
                if ($errors->has('phone')) {
                    echo $errors->first('phone');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Sua" />
            </td>
        </tr>
    </table>
</form>