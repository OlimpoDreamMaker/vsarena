<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 

  $idPremio = $_GET['id']; //Se recibe el ID del premio a eliminar
  $usuario = $_POST['usuario'];
  $pass = $_POST['password'];

  $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND passUsuario='$pass'";
  if($resultado = mysqli_query($conexion, $consulta)){
    $consulta = "DELETE FROM premios WHERE idPremio='$idPremio'";
    mysqli_query($conexion, $consulta);   
    $desconectar = desconectarBD($conexion);
    header("Location: ../templates/torneos.php");
  }else{
    echo "<script>alert('Usuario o contraseña incorrecto')</script>";
    $desconectar = desconectarBD($conexion);
    header("Location: ../templates/premio.php?id=$idPremio");
  }  

  
?>