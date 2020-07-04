<?php
  // Login Dasboard
  require_once("./config.php");
  $conexion = conectar(); 

  $usuario = $_POST['usuario'];
  $pass = $_POST['password'];

  $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND passUsuario='$pass'";
  $resultado = mysqli_query($conexion, $consulta);
  if($user = mysqli_fetch_assoc($resultado)){
    session_start();
    $idUser = $user['idUsuario'];
    $_SESSION['usuario'] = $idUser;
    desconectar($conexion);
    if ($user['isAdmin']) {
      header("Location: $amigable/panel/usuarios/");
    } else {
      header("Location: $amigable/");
    }
    
  }else{
    desconectar($conexion);
    header("Location: $amigable/panel/123/");//no es usuario ?err=123
  }


?>