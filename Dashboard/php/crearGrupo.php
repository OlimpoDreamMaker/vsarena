<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 

  $torneo = $_GET['tor'];
  $grupo = $_POST['grupo'];

  $consulta = "INSERT INTO grupos(nombreGrupo,Torneos_idTorneos) VALUES ('$grupo','$torneo')";
  
  mysqli_query($conexion, $consulta);   
  
  $desconectar = desconectarBD($conexion);
  header("Location: ../templates/torneo.php?id=$torneo");
  
?>