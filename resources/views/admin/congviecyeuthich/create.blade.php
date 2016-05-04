<?php
if (Session::has('success')) {
    echo \Session::get('success');
}
?>

<form action="{!! route('admin.quanly_job.xuly') !!}" method="post">
    <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
    <table>
        <tr>
            <td><label>Tên Công Việc</label></td>
            <td>
                <input type="text" value="" name="name" />
                <?php
                if ($errors->has('id_job->job->name')) {
                    echo $errors->first('id_job->job->name');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Tên Người Sử Dụng</label></td>
            <td>
                <input type="text" value="" name="address" />
                <?php
                if ($errors->has('id_user->user->full_name')) {
                    echo $errors->first('id_user->user->full_name');
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