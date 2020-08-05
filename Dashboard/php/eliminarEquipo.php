<?php
  require_once("../../BackEnd/config.php");
  $conexion = conectar(); 

  $idEquipo = $_GET['idEquipo']; //Se recibe el ID del usuario a eliminar

  $consulta = "DELETE FROM equipos WHERE idEquipo='$idEquipo'";

  mysqli_query($conexion, $consulta);   
  
  $desconectar = desconectar($conexion);
  header("Location: $amigable/panel/usuarios/"); 
  
?>