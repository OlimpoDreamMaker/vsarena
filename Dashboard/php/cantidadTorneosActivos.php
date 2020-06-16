<?php

  function cantidadTorneosActivos($conexion){
    $consulta = "SELECT * FROM torneos WHERE estado='Activo'";
    $resultado = mysqli_query($conexion, $consulta);
    return mysqli_num_rows($resultado);
  }

?>