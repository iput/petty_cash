<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Petty Cash | Rencanakan keuangan anda</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo base_url() . "assets/bootstrap/css/bootstrap.min.css"; ?>">
        <link rel="icon" type="image/png" href="<?php echo base_url('assets/logo/logo-cash.png'); ?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url() . "assets/dist/css/AdminLTE.min.css"; ?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo base_url() . "assets/dist/css/skins/_all-skins.min.css"; ?>">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo base_url() . "assets/plugins/iCheck/flat/blue.css"; ?>">
        <!-- jvectormap -->
        <link rel="stylesheet" href="<?php echo base_url() . "assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css"; ?>">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="<?php echo base_url() . "assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"; ?>">

        <link rel="stylesheet" href="<?php echo base_url() . "assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css"; ?>">
        <script type="text/javascript" src="<?php echo base_url() . "assets/plugins/jQuery/jquery-2.2.3.min.js"; ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . "assets/plugins/jQueryMaskMoney/jquery.maskMoney.min.js"; ?>"></script>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="<?php echo base_url('S_beranda'); ?>" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>Petty</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Petty</b>-Cash</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">

                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo base_url("assets/logo/user.png"); ?>" class="user-image" alt="User Image">
                                    <span class="hidden-xs"><?php echo $this->session->userdata('username'); ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo base_url("assets/logo/user.png"); ?>" class="img-circle" alt="User Image">

                                        <p>
                                            <?php echo $this->session->userdata('username'); ?>
                                            <small>Petty Cash Member's</small>
                                        </p>
                                    </li>

                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <a href="<?php echo base_url("c_login"); ?>" class="btn btn-default btn-flat">Keluar</a>
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
                            <img src="<?php echo base_url("assets/logo/user.png"); ?>" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p><?php echo $this->session->userdata('username'); ?></p>
                            <a href="#"><i class="fa fa-user bg-green"></i>User Petty Cash</a>
                        </div>
                    </div>

                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MENU NAVIGASI UTAMA</li>
                        <li class="treeview">
                            <a href="<?php echo base_url("s_beranda/index"); ?>">
                                <i class="fa fa-home"></i><span>&nbsp;Beranda</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="<?php echo base_url("s_pengeluaran/index"); ?>">
                                <i class="fa fa-edit"></i><span>&nbsp;Pengeluaran</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="<?php echo base_url("s_statistik/index"); ?>">
                                <i class="fa fa-fw fa-bar-chart-o"></i><span>&nbsp;Statistik</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url('s_statistik'); ?>"><i class="fa fa-bar-chart-o"></i>&nbsp;Data Pengeluaran</a></li>
                                <li><a href="<?php echo base_url('s_statistik/get_stats_project_user'); ?>"><i class="fa fa-calendar"></i>&nbsp;Pengeluaran project</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-gears"></i><span>&nbsp;Setting</span>
                            </a>
                        </li>
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">