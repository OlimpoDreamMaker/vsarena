<?php
  require_once("../../BackEnd/config.php");
  $conexion = conectar(); 

  $torneo = $_GET['tor'];
  $grupo = $_POST['grupo'];

  $consulta = "INSERT INTO grupos(nombreGrupo,Torneos_idTorneos) VALUES ('$grupo','$torneo')";
  
  mysqli_query($conexion, $consulta);   
  
  $desconectar = desconectar($conexion);
  header("Location: $amigable/panel/torneo/$torneo/");
  
?>