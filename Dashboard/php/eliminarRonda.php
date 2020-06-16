<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 

  $idRonda = $_GET['idRonda']; //Se recibe el ID de la ronda a eliminar

  $usuario = $_POST['usuario'];
  $pass = $_POST['password'];

  $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND passUsuario='$pass'";
  if($resultado = mysqli_query($conexion, $consulta)){
    $consulta = "DELETE FROM Rondas WHERE idRonda='$idRonda'";
    mysqli_query($conexion, $consulta);   
    $desconectar = desconectarBD($conexion);
    header("../templates/torneos.php");
  }else{
    echo "<script>alert('Usuario o contraseña incorrecto')</script>";
    $desconectar = desconectarBD($conexion);
    header("../templates/rondas.php?id=$idRonda");
  }
  
?>