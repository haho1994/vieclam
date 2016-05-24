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
                    <a class="navbar-brand" style=" font-size: 20px;" >Nhà Tuyển Dụng</a>
                </div>

                <ul class="nav navbar-top-links navbar-right">
                    
                    <li>
                        <a  href='{!! route("dangnhap.nhatuyendung")!!}' aria-expanded="false" style=" font-size: 14px;">Đăng Nhập
                        </a>
                    </li>
                    <li>
                        <a href="#" style=" font-size: 14px;">Đăng Ký
                        </a>
                    </li>
                     <li>
                        <a href="#" style=" font-size: 14px;" href='{!! route("frontend.search.get")!!}'>Người Sử Dụng
                        </a>
                    </li>
                </ul>
            </nav>
            <!--/. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">

                        <li>
                            <a class="active-menu" href="" style=" font-size: 14px;">Trang Chủ</a>
                        </li>
                        <li>
                            <a href='{!! route("timhoso") !!}' style=" font-size: 14px;">Tìm Kiếm Hồ Sơ</a>
                        </li>
                        <li>
                            <a href='' style=" font-size: 14px;">Đăng Tuyển Dụng</a>
                        </li>
                        
                    </ul>

                </div>

            </nav>
            <!-- /. NAV SIDE  -->
            <div id="page-wrapper">
                <div id="page-inner">
                    @yield('noidung')
                    @yield('dangnhap')
                    
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