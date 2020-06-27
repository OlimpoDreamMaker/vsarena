<?php
  require_once("../../BackEnd/congfig.php");
  $conexion = conectar(); 

  $idPremio = $_GET['id']; //Se recibe el ID del premio a eliminar
  $usuario = $_POST['usuario'];
  $pass = $_POST['password'];

  $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND passUsuario='$pass'";
  if($resultado = mysqli_query($conexion, $consulta)){
    $consulta = "DELETE FROM premios WHERE idPremio='$idPremio'";
    mysqli_query($conexion, $consulta);   
    $desconectar = desconectar($conexion);
    header("Location: $amigable/panel/torneos/");
  }else{
    echo "<script>alert('Usuario o contraseña incorrecto')</script>";
    $desconectar = desconectar($conexion);
    header("Location: $amigable/panel/premio/$idPremio/");
  }  

  
?>