<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Petty Cash | Lupa sandi</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="icon" type="image/png" href="<?php echo base_url('assets/logo/logo-cash.png'); ?>">
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
    </head>
 <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="<?php echo base_url('c_login'); ?>"><b><img src="<?php echo base_url('assets/logo/logo-cash.png'); ?>" style="width: 50px; height: 50px; margin-bottom: 20px;">&nbsp;PETTY</b>-CASH</a>
            </div>

            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Masukkan Password Baru Anda</p>
                <div class="alert alert-danger" style="display: none;"></div>
                <div class="alert alert-success" style="display: none;"></div>
                <form action="<?php echo base_url('welcome/action_reset'); ?>" method="post">
                    <div class="form-group has-feedback">
                        <input type="password"  name="txt_password1" class="form-control" placeholder="Password" required="" maxlength="8">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="txt_password2" class="form-control" placeholder="Confirm Password" required="" maxlength="8">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">

                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Reset</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <a href="<?php echo base_url("c_login"); ?>">Menu Login</a><br>
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
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.alert-danger').hide();
<?php if ($this->session->flashdata('gagal')): ?>
                    $('.alert-danger').html('<?php echo $this->session->flashdata('gagal'); ?>').fadeIn().delay(4000).fadeOut('slow');

<?php endif ?>
            });
        </script>

        <script>
// proses menampilkan info berhasil
            $(document).ready(function () {
                $('.alert-success').hide();
<?php if ($this->session->flashdata('msg')) { ?>
                    $('.alert-success').html('<?php echo $this->session->flashdata('msg'); ?>').fadeIn().delay(1000).fadeOut('slow');
                });
<?php } ?>
        </script>
    </body> 
</html>
