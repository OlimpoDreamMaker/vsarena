<?php
  require_once("../../BackEnd/config.php");
  $conexion = conectar(); 

  $idProducto = $_GET['id']; //Se recibe el ID del producto a eliminar
  $usuario = $_POST['usuario'];
  $pass = $_POST['password'];

  $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND passUsuario='$pass'";
  if($resultado = mysqli_query($conexion, $consulta)){
    $consulta = "DELETE FROM productos WHERE idProducto='$idProducto'";
    mysqli_query($conexion, $consulta);   
    $desconectar = desconectar($conexion);
    header("Location: $amigable/panel/productos/");
  }else{
    echo "<script>alert('Usuario o contraseña incorrecto')</script>";
    $desconectar = desconectar($conexion);
    header("Location: $amigable/panel/producto/$idProducto/");
  }  
  
  
  
?>