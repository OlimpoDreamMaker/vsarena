<?php
  require_once("../../BackEnd/config.php");
  $conexion = conectar(); 

  $idGrupo = $_GET['idGrupo']; //Se recibe el ID del grupo a eliminar

  $usuario = $_POST['usuario'];
  $pass = $_POST['password'];

  $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND passUsuario='$pass'";
  if($resultado = mysqli_query($conexion, $consulta)){
    $consulta = "DELETE FROM grupos WHERE idGrupo='$idGrupo'";
    mysqli_query($conexion, $consulta);   
    $desconectar = desconectar($conexion);
    header("Location: $amigable/panel/torneos/");
  }else{
    echo "<script>alert('Usuario o contraseña incorrecto')</script>";
    $desconectar = desconectar($conexion);
    header("Location: $amigable/panel/grupo/$idGrupo/");
  }
  
?>