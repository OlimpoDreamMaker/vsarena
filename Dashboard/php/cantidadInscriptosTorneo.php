<?php

function cantidadInscriptosTorneo($conexion,$id,$equipoIndividual){
  if($equipoIndividual == "Equipo"){
    $consulta = "SELECT * FROM equipos_has_torneos WHERE Torneos_idTorneo='$id'";
  }else{
    $consulta = "SELECT * FROM torneos_has_usuarios WHERE Torneos_idTorneo='$id'";
  }
  $resultado = mysqli_query($conexion, $consulta);
  return mysqli_num_rows($resultado);
}

?>