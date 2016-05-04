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
                    <a class="navbar-brand">Admin</a>
                </div>

                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">Thông Báo
                            <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Doe</strong>
                                        <span class="pull-right text-muted">
                                            <em>Today</em>
                                        </span>
                                    </div>
                                    <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>Read All Messages</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" >Đăng Nhập
                            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">Đăng Ký
                            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <!-- /.dropdown-user -->
                    </li>
                </ul>
            </nav>
            <!--/. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">

                        <li>
                            <a class="active-menu" href=""><i class="fa fa-dashboard"></i>Trang Chủ</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-desktop"></i> Quản Lý Người Dùng</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-bar-chart-o"></i> Quản Lý Danh Mục</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-qrcode"></i>Địa Điểm</a>
                        </li>

                        <li>
                            <a href=""><i class="fa fa-table"></i>Ngôn Ngữ</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-edit"></i> Công Ty </a>
                        </li>


                        <li>
                            <a href="#"><i class="fa fa-sitemap"></i> Kỷ Năng</a>
                        </li>

                    </ul>

                </div>

            </nav>
            <!-- /. NAV SIDE  -->
            <div id="page-wrapper">
                <div id="page-inner">
                    @yield('dangnhap')
                    @yield('ngonngu2')
                    @yield('ngonngu')
                    @yield('ngonngu1')
                    @yield('location')
                    @yield('location1')
                    @yield('location2')
                    @yield('user')
                    @yield('user1')
                    @yield('user2')
                    @yield('skill')
                    @yield('skill1')
                    @yield('skill2')

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