<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminPanel</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
        </ul>


    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/admin" class="brand-link">
            <img src="/assets/img/Kollej.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Ilm-u Ziyo Kollej</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    {{-- <a href="#" class="d-block">Alexsandr</a> --}}
                    <p class="d-flex">
                        @auth
                            <a href="#" class="d-block">{{ auth()->user()->name }}</a>
                    <form class="d-block" action="{{ route('logout') }}" method="post" style="margin-top: -40px;margin-left: 70px;">
                        @csrf
                        <button class="text-primary mx-4" type="submit">chiqish</button>
                    </form>
                        @endauth
                    </p>
                </div>
            </div>


            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item has-treeview menu-open">
                        <a href="/admin" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Barchasi
                                <i class="right fas fa-angle-left" id="link"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin" class="nav-link" id="link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Barchasi</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/video" class="nav-link" id="link">
                                    <i class="far fa-circle nav-icon" id="link"></i>
                                    <p>Videoga link joylash</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/photo" class="nav-link" id="link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Talabalar hayotidan rasmlar</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/home" class="nav-link" id="link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Bosh sahifa</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/about" class="nav-link" id="link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Biz haqimizda</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/educational" class="nav-link" id="link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Ta'lim Yo'nalishlari</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/teacher" class="nav-link" id="link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>O'qituvchilar haqida</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/student" class="nav-link" id="link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Talabalar hayoti</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/partners" class="nav-link" id="link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Hamkorlarimiz</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/contact" class="nav-link" id="link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Biz bilan bog'lanish</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/question" class="nav-link" id="link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>sizni qiziqtirgan savollar</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/document" class="nav-link" id="link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Litsenziya va guvohnomalar uchun</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/number" class="nav-link" id="link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>hodimlar va kafedralar raqamlarda</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/profile" class="nav-link" id="link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Profile</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            {{ $slot }}
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.0.1-pre
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/plugins/moment/moment.min.js"></script>
<script src="/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Barcha nav-link elementlarini topish
        var navLinks = document.querySelectorAll(".nav-link");

        // Har bir nav-link elementi uchun
        navLinks.forEach(function(link) {
            // Click hodisasi qo'shamiz
            link.addEventListener("click", function(event) {
                // Barcha nav-link elementlaridan "active" klassini olib tashlaymiz
                navLinks.forEach(function(navLink) {
                    navLink.classList.remove("active");
                });

                // Bosilgan linkni "active" qilamiz
                link.classList.add("active");
            });
        });
    });
</script>


</body>
</html>
