<html>

    <head>
        <title>Trang Người Tuyển Dụng</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="<?php echo asset('/assets/css/admin.css') ?>">
        <link rel="stylesheet" href="<?php echo asset('/assets/css/style.css') ?>">
    </head>

    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default top-navbar" role="navigation">
                <div class="navbar-header">
                    <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
              
                     </button>-->
                    <a class="navbar-brand" style=" font-size: 20px;" href='{!! route("tuyendung.trangtin") !!}'>Nhà Tuyển Dụng</a>
                </div>

                <ul class="nav navbar-top-links navbar-right">
                    <div class="btn-group">
                        @if(auth()->check())
                        <li><a style="font: normal 100% arial, sans-serif;font-size: 13px"><b>{{auth()->user()->full_name}}</b></a><span class="caret"></span>
                            <ul class="dropdown-menu1" role="menu" style="height: 100px;">
                                <li><a style="font-size: 13px;" href='{!! route("nhatuyendung_taikhoan_suathongtinnhatuyendung") !!}'>Thông Tin Nhà Tuyển Dụng</a></li>
                                <li><a style="font-size: 13px;" href='{!! route("nhatuyendung_doimatkhau") !!}'>Đổi Mật Khẩu</a></li>           
                                <li class="divider" style="height: 1px;background-color: #e5e5e5;"></li>
                                
                                <li><a style="font-size: 13px;" href="{{url('logout')}}">Thoát</a></li>
                            </ul> 
                            @else
                        <li class="dn">
                            <a  href='{!! route("dangnhap.nhatuyendung") !!}'>
                                <b>Đăng Nhập</b>
                            </a>
                        </li>
                        @endif

                    </div>

                    <li>
                        <a href='{!! route("dangky_tuyendung") !!}' style=" font-size: 14px;">Đăng Ký
                        </a>
                    </li>
                    <li>
                        <a  style=" font-size: 14px;" href='{!! route("frontend.search.get")!!}'>Người Tìm Việc
                        </a>

                    </li>
                </ul>
            </nav>

            <!--/. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">

                        <li>
                            <a  href='{!! route("tuyendung.trangtin") !!}' style=" font-size: 14px;">Trang Chủ</a>
                        </li>
                        <li>
                            <a href='{!! route("timhoso") !!}' style=" font-size: 14px;">Tìm Kiếm Hồ Sơ</a>
                        </li>
                        @if(!empty(auth()->user()->company->id))
                        <li>
                            <a href='{!! route("dangtin") !!}' style=" font-size: 14px;">Đăng Tuyển Dụng</a>
                        </li>
                        @endif
                        <li>
                            <a href='' style=" font-size: 14px;">Quản Lý Công Ty</a>
                            <ul class="ntd_taocongty">
                                @if(empty(auth()->user()->company->id))
                                <li>  
                                    <div style="width: 216px;height: 28px;font-size: 14px;color: #000033;margin-top: 20px;">    
                                        <a href='{!! route("ntd_congty") !!}'>Đăng Ký Công Ty</a>  
                                    </div>
                                </li>
                                @else
                                <li>
                                    <div style="width: 216px;height: 28px;font-size: 14px;color: #000033;margin-top: 20px;">
                                        <a href='{!! route("ntd_congty_sua") !!}'>Thông Tin Công Ty</a>
                                    </div>
                                </li>
                                @endif
                            </ul>
                        </li>
                        <li>
                            <a href='' style=" font-size: 14px;">Tài Khoản</a>
                            <ul class="ntd_taocongty">
                                <li>
                                    <div style="width: 216px;height: 28px;font-size: 14px;color:#000033;margin-top: 20px;">
                                        <a href='{!! route("nhatuyendung_doimatkhau") !!}'>Đổi Mật Khẩu</a>
                                    </div>
                                </li>
                                <li>
                                    <div style="width: 216px;height: 28px;font-size: 14px;color: #000033;margin-top: 20px;">
                                        <a href='{!! route("nhatuyendung_taikhoan_suathongtinnhatuyendung") !!}'>Thông Tin Nhà Tuyển Dụng</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href='{!! route("ntdquanlyvieclam") !!}' style=" font-size: 14px;">Quản Lý Việc Làm</a>
                        </li>
                    </ul>

                </div>

            </nav>
            <!-- /. NAV SIDE  -->
            <div id="page-wrapper">
                <div id="page-inner">
                    @yield('noidung1')
                </div>
            </div>
        </div>

    </div>
</div>
<!-- /. ROW  -->
<footer><p>Hồ Thị Hạ - Hồ Thị Thu Hà</p></footer>
</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->

<!-- /. WRAPPER  -->

</body>

</html>