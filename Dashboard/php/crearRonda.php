<?php
  require_once("../../BackEnd/config.php");
  $conexion = conectar(); 

  $torneo = $_GET['tor'];
  $ronda = $_POST['ronda'];

  $consulta = "INSERT INTO rondas(nombreRonda,Torneos_idTorneos) VALUES ('$ronda','$torneo')";
  
  mysqli_query($conexion, $consulta);   
  
  $desconectar = desconectar($conexion);
  header("Location: $amigable/panel/torneo/$torneo/");
  
?>