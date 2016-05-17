<html>
    <head>
        <title>Tìm kiếm việc làm!!</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="<?php echo asset('/assets/css/style.css') ?>">
       
    </head>
    <body>
        <div class="wrapper">
            <div class="header">
                <div class="logo">
                    <div class="logo_text">
                        <!-- class="logo_colour", allows you to change the colour of the text -->
                        <h1><a href='{!! route("frontend.search.get") !!}'>ViecLam<span class="logo_colour">.Me</span></a></h1>
                        <h2>Tìm Kiếm Công Việc!!</h2>

                    </div>
                    <div id="menubar" >

                        <ul id="menu" >
                            <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->	 
                            <div class="btn-group">
                                <li><a href='{!! route("dangnhap") !!}'><b>Đăng Nhập</b></a></li>
                             </div>
                            <div class="btn-group">
                                <li><a style="font: normal 100% arial, sans-serif;"><b>Tài Khoản</b></a><span class="caret"></span>
                                <ul class="dropdown-menu" role="menu">

                                    <li><a>Đổi Mật Khẩu</a></li>
                                    <li><a>Thông Tin Cá Nhân</a></li>
                                </ul>

                            </div>
                            
                            <div class="btn-group">
                                <li><a style="font: normal 100% arial, sans-serif;"href='{!! route("dangky") !!}'><b>Đăng Ký</b></a><span class="caret"></span>
                                <ul class="dropdown-menu" role="menu">

                                    <li><a>Người Dùng</a></li>
                                    <li><a>Nhà Tuyển Dụng</a></li>
                                </ul>

                            </div>
         
                        </ul>
                        <ul id="menu1">
                            <li>
                                <a href='{!! route("frontend.search.search") !!}'>
                                    <span class="anhkiem"></span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
            <div class="centerdangki">
                @yield('noi_dung')
                <!--                @yield('dn')
                                @yield('timkiem')
                                @yield('them')
                                @yield('login')
                                @yield('doimatkhau')
                                @yield('upload')
                                @yield('chitiet')-->
            </div>
            <div id="footer">
                Copyright &copy; Địa Chỉ: 02 Thanh Sơn | <a href='{!! route("thoathuan-sudung") !!}'>Thỏa Thuận Sử Dụng</a> | <a href='{!! route("lien-he") !!}'>Liên Hệ</a> | <a href='{!! route("quydinh-baomat") !!}'>Quy Định Bảo Mật</a>
            </div>
        </div>
    </body>
</html>

