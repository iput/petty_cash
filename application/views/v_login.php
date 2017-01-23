<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Petty Cash | Log in</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo base_url() . "assets/bootstrap/css/bootstrap.min.css"; ?>">
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
        <!-- Morris chart -->
        <link rel="stylesheet" href="<?php echo base_url() . "assets/plugins/morris/morris.css"; ?>">
        <!-- jvectormap -->
        <link rel="stylesheet" href="<?php echo base_url() . "assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css"; ?>">
        <!-- Date Picker -->
        <link rel="stylesheet" href="<?php echo base_url() . "assets/plugins/datepicker/datepicker3.css"; ?>">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="<?php echo base_url() . "assets/plugins/daterangepicker/daterangepicker.css"; ?>">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="<?php echo base_url() . "assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"; ?>">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style type="text/css">
            body{
                background: url('<?php echo base_url(assets/upload/bg.jpg); ?>') no-repeat center;
            }
        </style>
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="../../index2.html"><b>PETTY</b>-CASH</a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Gunakan akun anda untuk akses Petty Cash</p>

                <form action="<?php echo base_url('c_login/login_process');?>" method="post">
                    <div class="form-group has-feedback">
                        <input type="text"  name="txt_log_user" class="form-control" placeholder="Username / Email">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="txt_log_password" class="form-control" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">

                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <a href="<?php echo base_url("c_login/lupa_password"); ?>">Saya Lupa Kata sandi saya</a><br>
<<<<<<< HEAD

=======
>>>>>>> df9c4164f9393df7ab3877879d5051477a95eb08
            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

        <!-- jQuery 2.2.3 -->
        <script src="<?php echo base_url("assets/plugins/jQuery/jquery-2.2.3.min.js"); ?>"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js"); ?>"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url("assets/plugins/iCheck/icheck.min.js"); ?>"></script>
        <script>
            $(function() {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>
