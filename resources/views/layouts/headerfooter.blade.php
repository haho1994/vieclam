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

                                @if(auth()->check())
                                <li><a style="font: normal 100% arial, sans-serif;"><b>{{auth()->user()->full_name}}</b></a><span class="caret"></span>
                                    <ul class="dropdown-menu" role="menu">

                                        <li><a href='{!! route("quanlyNN") !!}'>Quản Lý Nghề Nghiệp</a></li>
                                        <li><a href='{!! route("hoso") !!}'>Hồ Sơ Của Tôi</a></li>
                                        <li><a href='{!! route("vieclam.cuatoi") !!}'> Việc Làm Của Tôi</a></li>
                                        <li><a href='{!! route("taikhoan_suathongtincanhan") !!}'>Thông Tin Cá Nhân</a></li>
                                        <li><a href='{!! route("doiEmail") !!}'>Đổi Email</a></li>
                                        <li><a>Đổi Mật Khẩu</a></li>
                                        <li class="divider" style="height: 1px;background-color: #e5e5e5;"></li>
                                        <li><a href="{{url('logout')}}">Thoát</a></li>
                                    </ul> 
                                    @else
                                <li><a href='{!! route("dangnhap") !!}'><b>Đăng Nhập</b></a></li>
                                @endif
                             
                            </div>
                            
                            <div class="btn-group">
                                <li><a style="font: normal 100% arial, sans-serif;"href='{!! route("dangky") !!}'><b>Đăng Ký</b></a></span>
                            </div>

                            <div class="btn-group">
                                <li><a style="font: normal 100% arial, sans-serif;" href='{!! route("tuyendung.trangtin") !!}'><b>Nhà Tuyển Dụng</b></a></span>
                            </div>

                        </ul>

                        <ul id="menu1"> 

                            <li>
                                <a href='{!! route("frontend.search.get1") !!}'>

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

