<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 
  $idRonda = $_GET['id'];
  $ronda = $_POST['nombreRonda'];
  $consulta = "UPDATE rondas SET 
                  nombreRondas='$ronda'
                  WHERE idRonda='$idRonda";  

  mysqli_query($conexion,$consulta);

  $desconectar = desconectarBD($conexion);
  header("Location:../templates/rondas.php?id=$idRonda");
  //Mostrar Alerta de Juego modificado

?>