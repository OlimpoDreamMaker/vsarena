<?php
  //BANNEAR USUARIO
  require_once("../../BackEnd/config.php");
  $conexion = conectar(); 

  $idUsuario = $_GET['id']; //Se recibe el ID del usuario a eliminar

  $usuario = $_POST['usuario'];
  $pass = $_POST['password'];

  $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND passUsuario='$pass'";
  if($resultado = mysqli_query($conexion, $consulta)){
    $consulta = "DELETE FROM usuarios WHERE idUsuario='$idUsuario'";
    mysqli_query($conexion, $consulta);   
    $desconectar = desconectar($conexion);
    header("Location: $amigable/panel/usuarios/");
    //Usuario Banneado
  }else{
    echo "<script>alert('Usuario o contraseña incorrecto')</script>";
    $desconectar = desconectar($conexion);
    header("Location: $amigable/panel/usuario/$idUsuario/");
  }

  
?>