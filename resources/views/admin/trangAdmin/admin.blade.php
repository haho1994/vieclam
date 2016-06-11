<html>

    <head>
        <title>Trang quản trị</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="<?php echo asset('/assets/css/admin.css') ?>">
    </head>

    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default top-navbar" role="navigation">
                <div class="navbar-header">
                    <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
              
                     </button>-->
                    <a class="navbar-brand"style="font-size: 20px;">Trang Quản Trị</a>
                </div>

                <ul class="nav navbar-top-links navbar-right" style="margin-right: 20px; margin-top: 16px;">
                    <div class="btn-group" >

                        @if(auth()->check())
                        <li class="menu1"><a  style="font: normal 100% arial, sans-serif;"><b>{{auth()->user()->full_name}}</b></a>

                        </li>
                    </div>
                    <div  class="btn-group">
                        <li class="menu1">
                            <a href="{{url('admin/logout')}}">Thoát</a>
                        </li>
                        @else
                        <li><a href='{!! route("dangnhap") !!}'><b>Đăng Nhập</b></a></li>
                        @endif

                    </div>
                   </ul>

            </nav>
            <!--/. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">

                        <li>
                            <a class="active-menu" href='{!! route("admin_trangchu") !!}'>Trang Chủ</a>
                        </li>
                        <li>
                            <a href='{!! route("admin.quanly_user") !!}'>Người Sử Dụng</a>
                        </li>
                        <li>
                            <a href='{!! route("admin.quanly_danhmuc") !!}'>Danh Mục</a>
                        </li>
                        <li>
                            <a href='{!! route("admin.diadiem") !!}'>Địa Điểm</a>
                        </li>

                        <li>
                            <a href='{!! route("admin.quanly-ngonngu") !!}'>Ngôn Ngữ</a>
                        </li>
                        <li>
                            <a href='{!! route("admin.quanly_companies") !!}'>Công Ty </a>
                        </li>
                        <li>
                            <a href='{!! route("admin.quanly-kynang") !!}'>Kỹ Năng</a>
                        </li>
                        <li>
                            <a  href='{!! route("admin.quanly_jobs") !!}'>Việc Làm</a>
                        </li>
                        <li>

                            <a  href='{!! route("admin.diadiem") !!}'>Tỉnh, T.p</a>
                        </li>
                        <li>
                            <a href='{!! route("admin.quanly_curriculumvitaes") !!}'>Hồ Sơ</a>
                        </li>
                        <li>
                            <a href='{!! route("admin.quanly_job") !!}'>Công Việc Yêu Thích</a>
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