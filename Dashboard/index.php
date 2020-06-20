<?php
require_once("../BackEnd/config.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard VsArena | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $urlDB;?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo $urlDB;?>https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo $urlDB;?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $urlDB;?>/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">

<!-- Login Box Start -->
<div class="login-box">
    
  <!-- Login START -->
  <div class="login-logo">
    <a href="#">Dashboard<b>VsArena</b></a>
  </div>
  <!-- Login END -->

  <!-- Card START -->
  <div class="card">

    <div class="card-body login-card-body">

      <p class="login-box-msg">
      <?php
       if(isset($_GET['err'])){
         if($_GET['err']==123){
            echo "<span style='color:red;'>Usuario o contraseña incorrectos, Ingrese nuevamente su cuenta.</span>";
         }elseif($_GET['err']==456){
            echo "<span style='color:red;'>Necesitar permisos de administrador para acceder.</span>";
        }
        }else{
          echo "Ingresa tu cuenta para comenzar tu sesión";
        }
       ?>
      </p>

      <!-- Form START -->
      <form action="./php/login.php" method="POST">
        <!-- Input Cuenta START -->
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Cuenta" name="usuario" id="usuario" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <!-- Input Cuenta END -->

        <!-- Input Contraseña START -->
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" name="password" id="password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <!-- Input Contraseña END -->

        <div class="row justify-content-end">

          <!--div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">Recuerdame</label>
            </div>
          </div-->

          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>

        </div>

      </form>
      <!-- Form END -->

      <!--p class="mb-1">
        <a href="forgot-password.html">Olvide mi contraseña</a>
      </p-->
    </div>

  </div>
  <!-- Card END -->

</div>
<!-- Login Box END -->


<!-- SCRIPTS -->
<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>
</body>
</html>
