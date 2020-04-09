<!DOCTYPE html>
<html >
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>  <?php echo SITE_NAME;?> </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css')?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.min.css')?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet')?>">
  <!-- cloudflare -->
   <link rel="stylesheet" href="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css')?>">
   <!-- bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css')?>" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

</head>
<body class="hold-transition login-page"  >
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>login</b>ADMIN</a>                      
  </div>
  <!-- /.login-logo -->


  <div class="card" ng-app="myApp">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

     <!--  <script type="text/ng-template" id="login.html">  -->
      <form ng-submit="FormSubmit()" class="form">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Masukkan NIK Anda" ng-model="username" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" ng-model="password" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
            <span class="text-danger"><br>{{ error }}</span>
          </div>
          <!-- /.col -->
        </div>
      </form>
   <!--  </script> 
 -->
      <!-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo baseurl('assets/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo baseurl('assetts/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo baseurl('dist/js/adminlte.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/angular/angular.min.js')?>"></script>

<script src='<?php echo baseurl('http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js')?>'></script>


<script src='<?php echo baseurl('http://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.18/angular-ui-router.js')?>'></script>

<!-- <script src="<?php// echo baseurl('assets/plugins/angular/js/angular.js')?>"></script> -->

<script src="<?php echo baseurl('assets/plugins/angular/js/angular1.js')?>"></script>

</body>
</html>
