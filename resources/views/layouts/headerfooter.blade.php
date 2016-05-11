<html>
    <head>
        <title>Tìm kiếm việc làm!!</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="<?php echo asset('/assets/css/style.css') ?>">
        <link rel="stylesheet" href="<?php echo asset('/assets/bootstrap/css/bootstrap.min.css') ?>">
    </head>
    <body>
        <div class="wrapper">
            <div class="header">
                <div class="logo">
                    <div class="logo_text">
                        <!-- class="logo_colour", allows you to change the colour of the text -->
                        <h1><a href='{!! route("frontend.search.get")!!}'>Seeking<span class="logo_colour">Jobs</span></a></h1>
                        <h2>Tìm Kiếm Công Việc!!</h2>
                        
                    </div>
                    <div id="menubar">
                    <ul id="menu">
                        <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->	 
                        <li class="hh">
                            <a class="menu-main"><b>Việc Làm</b></a>
                        </li>
                        <li><a href='{!! route("dangnhap") !!}'><b>Đăng Nhập</b></a></li>
                        <li><a href='{!! route("dangky") !!}'><b>Đăng Ký</b></a></li>
                    </ul>
                </div>  
                </div>
                
            </div>
            <div class="centerdangki">
                @yield('noi_dung')
               
            </div>
            <div id="footer">
                Copyright &copy; Địa Chỉ: 02 Thanh Sơn | <a href="">Trợ Giúp</a> | <a href="">Liên Hệ</a> | <a href="">Quy Định Bảo Mật</a>
            </div>
        </div>
        <script src="<?php echo asset('/assets/bootstrap/js/bootstrap.min.js') ?>" ></script>
    </body>
</html>

