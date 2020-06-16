<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 
  $idGrupo= $_GET['id'];
  $grupo = $_POST['nombreGrupo'];
  $consulta = "UPDATE grupos SET 
                  nombreGrupo='$grupo'
                  WHERE idGrupo='$idGrupo";
  

  mysqli_query($conexion,$consulta);

  $desconectar = desconectarBD($conexion);
  header("Location:../templates/grupo.php?id=$idGrupo");
  //Mostrar Alerta de Juego modificado

?>