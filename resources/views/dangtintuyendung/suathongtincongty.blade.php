@extends('layouts.tuyendung')
@section('noidung1')
<?php
if (Session::has('success')) {
    echo \Session::get('success');
}
?>
<div class="dangtintuyendung" >
    <div class="dangtintuyendung_text">
        <label style="margin-top: 10px;margin-left: 20px;">Công Ty</label>
    </div>
    <div class="tuyendung_conty">
        <div class="tuyendung_form">
            <form action="{!! route('xuly.ntd_congty_sua') !!}" method="post">
                <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
                <div >
                    <div class="tuyendung_text">
                        <p style="margin-top: 10px;">Thông Tin Công Ty</p>
                    </div>
                    <table style="margin-top: 20px;">
                        <tr>
                            <td><label>Tên Công Ty</label></td>
                            <td>
                                <input class="suatt_canhan_input" type="text" value="{!! $company->name !!}" name="name"  />
                                <?php
                                if ($errors->has('name')) {
                                    echo $errors->first('name');
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Địa Chỉ Công Ty</label></td>
                            <td>
                                <select name="id_location" >
                                    @foreach($locations as $location)
                                    <?php
                                    $selected = '';
                                    if ($location->id == $company->id_location) {
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
                            <td><label>Email</label></td>
                            <td>
                                <input class="suatt_canhan_input" type="text" value="{!! $company->email !!}" name="email" />
                                <?php
                                if ($errors->has('email')) {
                                    echo $errors->first('email');
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Số Điện Thoại</label></td>
                            <td>
                                <input class="suatt_canhan_input" type="text" value="{!! $company->phone !!}" name="phone" />
                                <?php
                                if ($errors->has('phone')) {
                                    echo $errors->first('phone');
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Mô Tả Công Ty</label></td>
                            <td>
                                <input class="suatt_canhan_input" type="text" value="{!! $company->description !!}" name="description" />
                                <?php
                                if ($errors->has('description')) {
                                    echo $errors->first('description');
                                }
                                ?>
                            </td>
                        </tr>
                    </table>
                    <div class="right_tk" style="width: 10%;display: inline-block; margin-left: 300px;margin-top: 50px;">
                        <input class="input_ntdtk" type="submit" class="login login-submit" value="Lưu">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
