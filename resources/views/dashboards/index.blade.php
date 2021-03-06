<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href={{ url('assets1/vendor/fontawesome-free/css/all.min.css')}} rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href={{ url('assets1/vendor/datatables/dataTables.bootstrap4.css')}} rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href={{ url('assets1/css/sb-admin.css')}} rel="stylesheet">

</head>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
            <img src="assets/Logo.png" class="" alt="User Image">

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
           
        </form>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i>
                    <span class="hidden-xs">{{auth()->user()->name}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/logout" data-toggle="modal" data-target="#logoutModal">Logout</a>
                </div>
            </li>
        </ul>

    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Laporan RAPB</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header text-info">Transitoris:</h6>
                    <a class="dropdown-item" href="#">Dana Bangunan</a>
                    <a class="dropdown-item" href="#">Dana Tetap</a>
                    <a class="dropdown-item" href="#">Biaya SKS</a>
                    <a class="dropdown-item" href="#">Biaya Praktikum</a>
                    <h6 class="dropdown-header text-info">Non-Transitoris:</h6>
                    <a class="dropdown-item" href="#">Registrasi</a>
                    <a class="dropdown-item" href="#">Perpustakaan</a>
                    <a class="dropdown-item" href="#">Kemahasiswaan</a>
                    <a class="dropdown-item" href="#">KP</a>
                    <a class="dropdown-item" href="#">TA</a>
                    <a class="dropdown-item" href="#">Biaya PBMA</a>
                    <a class="dropdown-item" href="#">Biaya UTS</a>
                    <a class="dropdown-item" href="#">Biaya UAS</a>
                    <a class="dropdown-item" href="#">Biaya Wisuda</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-file"></i>
                    <span>RAB</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/perencanaan">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Perencanaan</span></a>
            </li>
        </ul>

        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Overview</li>
                </ol>

                <!-- Icon Cards-->
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-comments"></i>
                                </div>
                                <div class="mr-5">26 New Messages!</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-warning o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-list"></i>
                                </div>
                                <div class="mr-5">11 New Tasks!</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-success o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-shopping-cart"></i>
                                </div>
                                <div class="mr-5">123 New Orders!</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-danger o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-life-ring"></i>
                                </div>
                                <div class="mr-5">13 New Tickets!</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <strong>Copyright &copy;> Akademi Manajemen Informatika dan Komputer</a>.</strong> All rights
                        reserved.
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src={{ url('assets1/vendor/jquery/jquery.min.js')}}></script>
    <script src={{ url('assets1/vendor/bootstrap/js/bootstrap.bundle.min.js')}}></script>

    <!-- Core plugin JavaScript-->
    <script src={{ url('assets1/vendor/jquery-easing/jquery.easing.min.js')}}></script>

    <!-- Page level plugin JavaScript-->
    <script src={{ url('assets1/vendor/chart.js/Chart.min.js')}}></script>
    <script src={{ url('assets1/vendor/datatables/jquery.dataTables.js')}}></script>
    <script src={{ url('assets1/vendor/datatables/dataTables.bootstrap4.js')}}></script>

    <!-- Custom scripts for all pages-->
    <script src={{ url('assets1/js/sb-admin.min.js')}}></script>

    <!-- Demo scripts for this page-->
    <script src={{ url('assets1/js/demo/datatables-demo.js')}}></script>
    <script src={{ url('assets1/js/demo/chart-area-demo.js')}}></script>

</body>

</html>







{{-- <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AMIK</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href={{ url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}> 
<!-- Font Awesome -->
<link rel="stylesheet" href={{ url('assets/bower_components/font-awesome/css/font-awesome.min.css')}}>
<!-- Ionicons -->
<link rel="stylesheet" href={{ url('assets/bower_components/Ionicons/css/ionicons.min.css')}}>
<!-- jvectormap -->
<link rel="stylesheet" href={{ url('assets/bower_components/jvectormap/jquery-jvectormap.css')}}>
<!-- Theme style -->
<link rel="stylesheet" href={{ url('assets/dist/css/AdminLTE.min.css')}}>
<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href={{ url('assets/dist/css/skins/_all-skins.min.css')}}>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

<!-- Google Font -->
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">

            <!-- Logo -->
            <a href="dashboard" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>S</b>ILK</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Sistem</b>ILK</span>
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">

                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="hidden-xs">{{auth()->user()->name}}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="assets/dist/img/user2-160x160.jpg" class="rounded-circle" alt="User Image">

                                    <p>
                                        Admin - AMIK GARUT
                                        <small>Admin Sistem Laporan Keuangan</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <!-- Menu Footer-->
                                <li class="user-footer">

                                    <div class="col-md-12">
                                        <a href="/logout" class="btn btn-default btn-flat">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="assets/dist/img/user2-160x160.jpg" class="rounded-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>{{auth()->user()->name}}</p>
                    </div>
                </div>
                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active treeview menu-open">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href="/dashboard"><i class="fa fa-circle-o"></i> Dashboard</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#"><i class="glyphicon glyphicon-list"></i> <span>Laporan RAPB</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Transitoris</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Non-Transitoris</a></li>

                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-folder-open"></i> <span>RAB</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-file"></i> <span>Perencanaan</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-file"></i> <span>Laporan Realisasi</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-th"></i> <span>Mutasi</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="glyphicon glyphicon-info-sign"></i> <span>Info</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Tutorial</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> About</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Contact</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="pages/calendar.html">
                            <i class="fa fa-calendar"></i> <span>Calendar</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-red">3</small>
                                <small class="label pull-right bg-blue">17</small>
                            </span>
                        </a>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Dashboard</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <strong>Copyright &copy;> Akademi Manajemen Informatika dan Komputer</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src={{ url('assets/bower_components/jquery/dist/jquery.min.js')}}></script>
    <!-- Bootstrap 3.3.7 -->
    <script src={{ url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}></script>
    <!-- FastClick -->
    <script src={{ url('assets/bower_components/fastclick/lib/fastclick.js')}}></script>
    <!-- AdminLTE App -->
    <script src={{ url('assets/dist/js/adminlte.min.js')}}></script>
    <!-- Sparkline -->
    <script src={{ url('assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}></script>
    <!-- jvectormap  -->
    <script src={{ url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}></script>
    <script src={{ url('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}></script>
    <!-- SlimScroll -->
    <script src={{ url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}></script>
    <!-- ChartJS -->
    <script src={{ url('assets/bower_components/chart.js/Chart.js')}}></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src={{ url('assets/dist/js/pages/dashboard2.js')}}></script>
    <!-- AdminLTE for demo purposes -->
    <script src={{ url('assets/dist/js/demo.js')}}></script>
</body>

</html>
 --}}