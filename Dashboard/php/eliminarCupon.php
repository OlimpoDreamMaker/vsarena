<?php
  require_once("../../BackEnd/config.php");
  $conexion = conectar(); 

  $idCupon = $_GET['id']; //Se recibe el ID del cupon a eliminar
  $usuario = $_POST['usuario'];
  $pass = $_POST['password'];

  $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND passUsuario='$pass'";
  if($resultado = mysqli_query($conexion, $consulta)){
    $consulta = "DELETE FROM cupones WHERE idCupon='$idCupon'";
    mysqli_query($conexion, $consulta);   
    $desconectar = desconectar($conexion);
    header("Location: $amigable/panel/tienda/");
    //Mensaje de cupon eliminado corrrectamente
  }else{
    $desconectar = desconectar($conexion);
    echo "<script>alert('Usuario o contraseña incorrecto')</script>";
    header("Location: $amigable/panel/cupon/$idCupon/");
  }
  
  
?>