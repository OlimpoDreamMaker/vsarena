<?php
  //BANNEAR USUARIO
  require_once("conexionBD.php");
  $conexion = conectar(); 

  $idUsuario = $_GET['id']; //Se recibe el ID del usuario a eliminar

  $usuario = $_POST['usuario'];
  $pass = $_POST['password'];

  $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND passUsuario='$pass'";
  if($resultado = mysqli_query($conexion, $consulta)){
    $consulta = "DELETE FROM usuarios WHERE idUsuario='$idUsuario'";
    mysqli_query($conexion, $consulta);   
    $desconectar = desconectarBD($conexion);
    header("Location: ../templates/usuarios.php");
    //Usuario Banneado
  }else{
    echo "<script>alert('Usuario o contraseña incorrecto')</script>";
    $desconectar = desconectarBD($conexion);
    header("Location: ../templates/usuario.php?id=$idUsuario");
  }

  
?>