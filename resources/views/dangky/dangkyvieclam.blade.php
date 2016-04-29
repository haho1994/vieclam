@extends('layouts.headerfooter')
@section('noi_dung')
<div class="login-card">
    <h1>Đăng Kí</h1>
    <form action="<?php echo route('xuly.dangky'); ?>" method="POST" >
        <input type='hidden' name='_token' value="<?php echo csrf_token() ?>" />
        <div class="{!! $errors->has('full_name') ? 'has-error' : '' !!}">
            <?php
//            if ($errors->has('full_name')) {
//                echo "has-error";
//            } else {
//                echo "";
//            };
            ?>
            <input type="text" name="full_name" type="text" placeholder="Họ Tên" class="form-control" />
            <p>
                <?php
                if ($errors->has('full_name')) {
                    echo $errors->first('full_name');
                }
                ?>
            </p>
        </div>
        <div class="{!! $errors->has('full_name') ? 'has-error' : '' !!}"> 
        <input name='password' type="password" placeholder="Mật Khẩu" class="form-control" />
        <p>
        <?php
        if ($errors->has('password')) {
            echo $errors->first('password');
        }
        ?>
        </p>
        </div>
        <div class="{!! $errors->has('full_name') ? 'has-error' : '' !!}">
        <input name='password_confirmation' type="password" placeholder="Nhập Lại Mật Khẩu" class="form-control"/>
        <p>
        <?php
        if ($errors->has('password_confirmation')) {
            echo $errors->first('password_confirmation');
        }
        ?>
        </p>
        </div>
        <div class="{!! $errors->has('full_name') ? 'has-error' : '' !!}">
        <input type="text"  name='brithday' type="text" placeholder="Ngày Sinh" path="dob" class="form-control"/>
        <p>
        <?php
        if ($errors->has('brithday')) {
            echo $errors->first('brithday');
        }
        ?>
        </p>
        </div>
        <div class="{!! $errors->has('full_name') ? 'has-error' : '' !!}">
        <input type="text" name="email" placeholder="Email" type="text" path="email" class="form-control"/>
        <p>
        <?php
        if ($errors->has('email')) {
            echo $errors->first('email');
        }
        ?>
        </p>
        </div>
        <div class="{!! $errors->has('full_name') ? 'has-error' : '' !!}">
        <input type="text" name="phone" placeholder="Số Điện Thoại" type="text" path="phone" class="form-control"/> 
        <p>
        <?php
        if ($errors->has('phone')) {
            echo $errors->first('phone');
        }
        ?>
        </p>
        </div>
        <div class="{!! $errors->has('full_name') ? 'has-error' : '' !!}">
        <input type = "text" name = 'address' placeholder = "Địa Chỉ" type = "text" class="form-control"/>
        <p>
        <?php
        if ($errors->has('address')) {
            echo $errors->first('address');
        }
        ?>
        <p>
        </div>
        <input type="submit" name="dangky" class="login login-submit" value="Đăng Kí"/>               
    </form>           
</div>
@endsection