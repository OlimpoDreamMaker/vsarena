<?php
  require_once("../../BackEnd/config.php");
  $conexion = conectar(); 

  $idRonda = $_GET['idRonda']; //Se recibe el ID de la ronda a eliminar

  $usuario = $_POST['usuario'];
  $pass = $_POST['password'];

  $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND passUsuario='$pass'";
  if($resultado = mysqli_query($conexion, $consulta)){
    $consulta = "DELETE FROM ondas WHERE idRonda='$idRonda'";
    mysqli_query($conexion, $consulta);   
    $desconectar = desconectar($conexion);
    header("Location: $amigable/panel/torneos/");
  }else{
    echo "<script>alert('Usuario o contraseña incorrecto')</script>";
    $desconectar = desconectar($conexion);
    header("Location: $amigable/panel/rondas/$idRonda/");
  }
  
?>