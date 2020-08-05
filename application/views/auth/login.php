<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo SITE_NAME; ?> | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b><?php echo SITE_NAME; ?> </b> <?php echo SITE_VERSION; ?></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">

      <h4 class="text-center"><?php echo lang('login_heading');?></h4>
      <p><?php echo lang('login_subheading');?></p>

      <div id="infoMessage"><?php echo $message;?></div>

      <!-- <form action="../../index3.html" method="post"> -->
      <?php echo form_open("auth/login");?>

        <!-- username -->
        <div class="input-group mb-3">
          <?php //echo lang('login_identity_label', 'identity');?>
          <?php //echo form_input($identity);?>
          <input type="text" class="form-control" placeholder="Email/Username" name="identity" id="identity">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <!-- password -->
        <div class="input-group mb-3">
          <?php //echo lang('login_password_label', 'password');?>
          <?php //echo form_input($password);?>
          <input type="password" class="form-control" placeholder="Password" name="password" id="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <!-- tahun ajaran -->
        <?php //echo pre($s01_thaj); ?>
        <div class="input-group mb-3">
            <select class="form-control" name="idthaj">
              <option>Tahun Ajaran</option>
              <?php foreach ($s01_thaj as $r) {
                ?>
                <option value="<?php echo $r->idthaj; ?>"><?php echo $r->TahunAjaran; ?></option>
                <?php
              } ?>
            </select>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="far fa-calendar-alt"></span>
              </div>
            </div>
        </div>

        <!-- sekolah -->
        <?php //echo pre($s01_thaj); ?>
        <div class="input-group mb-3">
            <select class="form-control" name="idsklh">
              <option>Sekolah</option>
              <?php foreach ($s02_sklh as $r) {
                ?>
                <option value="<?php echo $r->idsklh; ?>"><?php echo $r->Nama; ?></option>
                <?php
              } ?>
            </select>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-school"></span>
              </div>
            </div>
        </div>

        <div class="row">
          <div class="col">
            <!-- <p><?php //echo form_submit('submit', lang('login_submit_btn'));?></p> -->
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>

      <!-- </form> -->
      <?php echo form_close();?>

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

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->
      <!-- <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/adminlte/dist/js/adminlte.min.js"></script>

<script>
  $(function () {
    $('body').addClass('text-sm')
    $('.btn').addClass('btn-sm')
    $('.table').addClass('table-sm')
    $('.form-control').addClass('form-control-sm')
  })
</script>

</body>
</html>
