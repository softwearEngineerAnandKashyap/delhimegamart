<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="<?php echo base_url(); ?>assets/admin_assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin_assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin_assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin_assets/css/style.css" rel="stylesheet">
</head>
<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">IN+</h1>

            </div>
            <h3>Welcome to IN+</h3>
            <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Login in. To see it in action.</p>
            <form class="m-t" role="form" action="<?php echo base_url(); ?>AuthenticationController/doLogin" method="post">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Username" required="" name="email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="" name="password">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
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

</body>

</html>
