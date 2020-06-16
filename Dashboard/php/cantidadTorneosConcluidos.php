<?php

  function cantidadTorneosConcluidos($conexion){
    $consulta = "SELECT * FROM torneos WHERE estado='Concluido'";
    $resultado = mysqli_query($conexion, $consulta);
    return mysqli_num_rows($resultado);
  }

?>