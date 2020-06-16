<?php

  function cantidadVentas($conexion){
    $consulta = "SELECT * FROM ventas";
    $resultado = mysqli_query($conexion, $consulta);
    return mysqli_num_rows($resultado);
  }

?>