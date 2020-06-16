<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 

  $torneo = $_GET['tor'];
  $ronda = $_POST['ronda'];

  $consulta = "INSERT INTO rondas(nombreRonda,Torneos_idTorneos) VALUES ('$ronda','$torneo')";
  
  mysqli_query($conexion, $consulta);   
  
  $desconectar = desconectarBD($conexion);
  header("Location: ../templates/torneo.php?id=$torneo");
  
?>