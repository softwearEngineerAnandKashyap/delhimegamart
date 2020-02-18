<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Register</title>

    <link href="<?php echo base_url(); ?>assets/admin_assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin_assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin_assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin_assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin_assets/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">IN+</h1>

            </div>
            <h3>Register to IN+</h3>
            <p>Create account to see it in action.</p>
            <form class="m-t" role="form" method="post" action="<?php echo base_url(); ?>AuthenticationController/create">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" required="" name="name">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" required="" name="email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="" name="password">
                </div><div class="form-group">
                    <input type="password" class="form-control" placeholder="Confirm Password" required="" name="cpassword">
                </div>
                <div class="form-group">
                        <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Agree the terms and policy </label></div>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b" name="submit">Register</button>

                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="login.html">Login</a>
            </form>
            <?php 
                if(!empty($this->session->flashdata('message'))): ?>
                <div class="row">
                   <div class="col-md-12 text-center">
                      <div class="text-center" style="font-size: 16px; font-style: italic; color:red;">
                          <p class="m-t"> <small><?php print_r($this->session->flashdata('message')['message']); ?></small></p>
                      </div>
                   </div>
                </div>
            <?php endif; ?>
           
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url(); ?>assets/admin_assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin_assets/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>assets/admin_assets/js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>
