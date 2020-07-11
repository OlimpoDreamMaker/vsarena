<?php
  require_once("../../BackEnd/config.php");
  $conexion = conectar(); 
  $idJuego = $_POST['idJuego']; //Se recibe el ID del juego a eliminar
  $usuario = $_POST['usuario'];
  $pass = $_POST['password'];

  $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND passUsuario='$pass'";
  if($resultado = mysqli_query($conexion, $consulta)){
    $consulta = "DELETE FROM juegos WHERE idJuego='$idJuego'";
    mysqli_query($conexion, $consulta);   
    $desconectar = desconectar($conexion);
    header("Location: $amigable/panel/juegos/");
  }else{
    echo "<script>alert('Usuario o contraseña incorrecto')</script>";
    $desconectar = desconectar($conexion);
    header("Location: $amigable/panel/juego/$idJuego/");
  }
?>