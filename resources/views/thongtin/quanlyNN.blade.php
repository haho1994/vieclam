@extends('layouts.headerfooter')
@section('noi_dung')
<div class="wap">
    <h1 style="margin-left:140px;"><strong>Quản Lý Nghề Nghiệp</strong></h1>
<div class="lienhe">
    <div class="lienhe1">
        <form>
            <div class="row" style="width: 100%">
                <div class="avatar">
                </div>
                <div class="qlnn1" style=" width: 38.5%;">
                    <div class="qlnn1-1"> 
                        <i class="user"></i>
                        <span><strong>Ha Ho</strong></span>
                    </div>
                    <div class="qlnn1-1">
                        <i class="congty"></i>
                        <span><em>Công ty gần đây nhất</em></span>

                    </div>
                    <div class="qlnn1-1">
                        <i class="tailen"></i>
                        <span><em>Hồ Sơ Đính Kèm</em></span>
                    </div>
                </div>
                <div class="qlnn2" style="width: 41.66666667%;">
                    <div class="qlnn1-1"> 
                        <i class="mail"></i>
                        <span><strong>haha</strong></span>
                    </div>
                    <div class="qlnn1-1">
                        <i class="sdt"></i>
                        <span>Số Điện Thoại</span>
                    </div>
                </div>
            </div>
<!--            <span class="form-btn-edit">
                <button type="button" class="btn btn-sm btn-default">								
                    <i class="fa fa-pencil"></i>
                </button>
            </span>-->
        </form>
    </div>
</div>
<div class="lienhe">  
    <div class="lienhe1">
        <h2 style="color: #000033;    font-size: 23px;
    font-weight: 300;">Thông Tin Hiện Tại</h2>
        <div>
            <h3 style="margin-bottom: 20px;"><strong>Tổng Quan</strong></h3>
        </div>
        <form style="width: 100%" class="ttht">
            <div  style="width: 48%; float: left">
            <table>
                <tr class="qlnn1-4" >
                    <td ><label><b>Công Việc Gàn Đây Nhất:</b></label></td>
                    <td><label>CVGN</label></td>
                </tr>
                <tr class="qlnn1-4">
                    <td><label><b>Nghành Nghề:</b></label></td>
                    <td><label>njxsk</label></td>
                </tr>
                
            </table>
            </div>
            <div style="width: 50%; float: left">
                <table>
                    <tr class="qlnn1-4">
                        <td><label><b>Nơi Làm Việc:</b></label></td>
                    <td><label>njxsk</label></td>
                </tr>
                <tr class="qlnn1-4">
                    <td><label><b>Mức Lương:</b></label></td>
                    <td><label>njxsk</label></td>
                </tr>
                </table>
            </div>
            <div>
                <h2 style="font-size: 23px; font-weight: 300;">Kỹ Năng</h2>

            </div>
        </form>
    </div>
</div>
</div>

@endsection