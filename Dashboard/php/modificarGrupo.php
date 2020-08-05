<?php
  require_once("../../BackEnd/config.php");
  $conexion = conectar(); 
  $idGrupo= $_GET['id'];
  $grupo = $_POST['nombreGrupo'];
  $consulta = "UPDATE grupos SET 
                  nombreGrupo='$grupo'
                  WHERE idGrupo='$idGrupo";
  

  mysqli_query($conexion,$consulta);

  $desconectar = desconectar($conexion);
  header("Location: $amigable/panel/grupo/$idGrupo/");
  //Mostrar Alerta de Juego modificado

?>