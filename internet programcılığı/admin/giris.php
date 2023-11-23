<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>site girişi</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body style="background-color:black" class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="islem.php" class="h1"><b>Blog</b>Sitesi</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Lütfen giriş bilgilerinizi giriniz </p>
<b style="color:redb "><?php if(@$_GET['durum']=="hata"){echo "hatalı";} ?></b>
      <form action="islem.php" method="post">
        <div class="input-group mb-3">
          <input name="email" type="email" class="form-control" placeholder="Email adresinizi giriniz">
          <div class="input-group-append">
            <div class="input-group-text">
              <span style="color: black;" class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="sifre" type="password" class="form-control" placeholder="şifrenizi giriniz">
          <div class="input-group-append">
            <div class="input-group-text">
              <span tyle="color: black;" class="fas fa-lock"></span>
            </div>
          </div>
        </div>
       
          <!-- /.col -->
          <div class="col-4">
            <button name="girisyap" type="submit" class="btn btn-primary btn-block">Giriş Yap</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      

      
      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
