<?php 
    if (Session::has('success')) {
        echo \Session::get('success');
    }
?>

<form action="{!! route('admin.quanly_danhmuc.luu', ['id' => $company->id]) !!}" method="post">
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
        <tr>
            <td><label>Thuoc danh muc</label></td>
            <td>
                <select name="id_parent" >
                    <option value="" >Chon danh muc</option>
                    @foreach($parents as $parent)
                    <?php
                        $selected = '';
                        if ($parent->id == $company->id_parent) {
                            $selected = 'selected';
                        }
                    ?>
                    <option value="{!! $parent->id !!}" {!!$selected!!} >{!! $parent->name !!}</option>
                    @endforeach
                </select>
                <?php
                if ($errors->has('id_parent')) {
                    echo $errors->first('id_parent');
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