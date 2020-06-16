<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 

  $idProducto = $_GET['id']; //Se recibe el ID del producto a eliminar
  $usuario = $_POST['usuario'];
  $pass = $_POST['password'];

  $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND passUsuario='$pass'";
  if($resultado = mysqli_query($conexion, $consulta)){
    $consulta = "DELETE FROM productos WHERE idProducto='$idProducto'";
    mysqli_query($conexion, $consulta);   
    header("../templates/productos.php");
  }else{
    echo "<script>alert('Usuario o contraseña incorrecto')</script>";
    header("../templates/productos.php");
  }  
  
  $desconectar = desconectarBD($conexion);
  
?>