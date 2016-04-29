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
                        <h2>Tìm Kiếm Công Việc Mơ Ước</h2>
                    </div>
                </div>
                <div id="menubar">
                    <ul id="menu">
                        <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
                        <li class="selected">
                            <a href="index.html">Trang Chủ</a>
                        </li>	 
                        <li class="hh">
                            <a class="menu-main">Việc Làm</a>
                            <ul class="nm1">
                                <li><a href="location.html">Việc Làm Theo Địa Điểm</a></li>
                                <li><a href="location.html">Việc Làm Theo Nghành</a></li>
                                <li><a href="location.html">Việc Làm Công Ty</a></li>
                            </ul>
                        </li>
                        <li>
                            <a  class="menu-main">Nhà Tuyển Dụng</a>
                            <ul class="nm1">
                                <li><a href="login.html">Cập Nhật Của Nhà Tuyển Dụng</a></li>
                                <li><a href="recruiters.html">Nhà Tuyển Dụng Bạn Theo Dõi</a></li>
                            </ul>
                        </li>
                        <li><a href="another_page.html">Đăng Nhập</a></li>
                        <li><a href="contact.html">Đăng Ký</a></li>
                    </ul>
                </div>  
            </div>
            <div class="centerdangki">
                @yield('noi_dung')
                @yield('dn')
                @yield('timkiem')
                @yield('login')
                @yield('doimatkhau')
            </div>
            <div id="footer">
                Copyright &copy; Địa Chỉ: 02 Thanh Sơn | <a href="">Trợ Giúp</a> | <a href="">Liên Hệ</a> | <a href="">Quy Định Bảo Mật</a>
            </div>
        </div>
    </body>
</html>

