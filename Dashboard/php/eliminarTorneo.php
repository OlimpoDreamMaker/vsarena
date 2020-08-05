<?php
  require_once("../../BackEnd/config.php");
  $conexion = conectar(); 

  $idTorneo = $_GET['idTorneo']; //Se recibe el ID del torneo a eliminar

  $usuario = $_POST['usuario'];
  $pass = $_POST['password'];

  $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND passUsuario='$pass'";
  if($resultado = mysqli_query($conexion, $consulta)){
    $consulta = "DELETE FROM torneos WHERE idTorneo='$idTorneo'";
    mysqli_query($conexion, $consulta);   
    $desconectar = desconectar($conexion);
    header("Location: $amigable/panel/usuarios/");
    //Torneo eliminado
    //Hacer un alert o modal
  }else{
    echo "<script>alert('Usuario o contraseña incorrecto')</script>";
    $desconectar = desconectar($conexion);
    header("Location: $amigable/panel/usuario/$idUsuario/");
  }
  
?>