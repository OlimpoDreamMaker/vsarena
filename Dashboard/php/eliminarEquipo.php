<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 

  $idEquipo = $_GET['idEquipo']; //Se recibe el ID del usuario a eliminar

  $consulta = "DELETE FROM Equipos WHERE idEquipo='$idEquipo'";

  mysqli_query($conexion, $consulta);   
  
  $desconectar = desconectarBD($conexion);
  
?>