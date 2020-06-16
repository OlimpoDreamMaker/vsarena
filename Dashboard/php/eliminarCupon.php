<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 

  $idCupon = $_GET['id']; //Se recibe el ID del cupon a eliminar
  $usuario = $_POST['usuario'];
  $pass = $_POST['password'];

  $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND passUsuario='$pass'";
  if($resultado = mysqli_query($conexion, $consulta)){
    $consulta = "DELETE FROM Cupones WHERE idCupon='$idCupon'";
    mysqli_query($conexion, $consulta);   
    header("../templates/tienda.php");
    //Mensaje de cupon eliminado corrrectamente
  }else{
    echo "<script>alert('Usuario o contraseña incorrecto')</script>";
    //header("../templates/cupon.php?id=$idCupon");
  }

  mysqli_query($conexion, $consulta);   
  
  $desconectar = desconectarBD($conexion);
  
?>