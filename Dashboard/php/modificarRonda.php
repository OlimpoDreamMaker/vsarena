<?php
  require_once("../../BackEnd/config.php");
  $conexion = conectar(); 
  $idRonda = $_GET['id'];
  $ronda = $_POST['nombreRonda'];
  $consulta = "UPDATE rondas SET 
                  nombreRonda='$ronda'
                  WHERE idRonda='$idRonda'";
  mysqli_query($conexion,$consulta);

  $desconectar = desconectar($conexion);
  header("Location: $amigable/panel/rondas/$idRonda/");
  //Mostrar Alerta de Juego modificado

?>