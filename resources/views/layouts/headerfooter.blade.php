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
                        <h1><a href="index.html">Seeking<span class="logo_colour">Jobs</span></a></h1>
                        <h2>Tìm Kiếm Công Việc!!</h2>
                    </div>
                    <div id="menubar">
                    <ul id="menu">
                        <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->	 
                        <li class="hh">
                            <a class="menu-main">Việc Làm</a>
                        </li>
                        <li><a href='{!! route("dangnhap") !!}'>Đăng Nhập</a></li>
                        <li><a href='{!! route("dangky") !!}'>Đăng Ký</a></li>
                    </ul>
                </div>  
                </div>
                
            </div>
            <div class="centerdangki">
                @yield('noi_dung')
                @yield('dn')
                @yield('timkiem')
                @yield('them')
                @yield('login')
                @yield('doimatkhau')
                @yield('upload')
            </div>
            <div id="footer">
                Copyright &copy; Địa Chỉ: 02 Thanh Sơn | <a href="">Trợ Giúp</a> | <a href="">Liên Hệ</a> | <a href="">Quy Định Bảo Mật</a>
            </div>
        </div>
    </body>
</html>

