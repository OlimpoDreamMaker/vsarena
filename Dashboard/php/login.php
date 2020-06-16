<?php

  require_once("../php/conexionBD.php");
  $conexion = conectar(); 

  $usuario = $_POST['usuario'];
  $pass = $_POST['password'];

  $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND passUsuario='$pass'";
  $resultado = mysqli_query($conexion, $consulta);
  if($user = mysqli_fetch_assoc($resultado)){
    session_start();
    $idUser = $user['idUsuario'];
    $_SESSION['usuario'] = $idUser;
    header("Location: ../templates/usuarios.php");
  }else{
    header("Location: ../index.php?err=123");//no es usuario
  }


  $desconectar = desconectarBD($conexion);

?>