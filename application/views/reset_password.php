<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Petty Cash | Lupa sandi</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
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
    <body class="hold-transition register-page">
        <div class="register-box">
            <div class="register-logo">
                <a href="../../index2.html"><b>Petty</b>-Cash</a>
            </div>

            <div class="register-box-body">
                <p class="login-box-msg">Reset Password</p>
                
                <?php echo form_open('Welcome/action_reset') ; ?>

        <table border="0">
        <tr>
            <td>Username</td>
            <td><?php echo form_input(array('name' => 'username', 'id' => 'username', 'value' => set_value('text', ''), 'maxlength' => '100', 'size' => '50', 'style' => 'width:100%')); ?></td>
        </tr>
        <tr>
            <td>User Email</td>
            <td><?php echo form_input(array('name' => 'email', 'id' => 'email', 'value' => set_value('email', ''), 'maxlength' => '100', 'size' => '50', 'style' => 'width:100%')); ?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><?php echo form_password(array('name' => 'password1', 'id' => 'password1', 'value' => set_value('password1', ''), 'maxlength' => '100', 'size' => '50', 'style' => 'width:100%')); ?></td>
        </tr>
        <tr>
            <td>Confirm Password</td>
            <td><?php echo form_password(array('name' => 'password2', 'id' => 'password2', 'value' => set_value('password2', ''), 'maxlength' => '100', 'size' => '50', 'style' => 'width:100%')); ?></td>
        </tr>
        
    <!--     <?php echo form_hidden('code', $code) ; ?> -->
    </table>
    <?php echo form_submit('submit', 'Submit'); ?>
    or <?php echo anchor('form', 'cancel'); ?>
        <?php echo form_close(); ?>

                <a href="<?php echo base_url("c_login/index"); ?>" class="text-center">Kembali ke menu </a>
            </div>
            <!-- /.form-box -->
        </div>
        <!-- /.register-box -->

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
