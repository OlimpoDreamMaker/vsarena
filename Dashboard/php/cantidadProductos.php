<?php

  function cantidadProductos($conexion){
    $consulta = "SELECT * FROM productos";
    $resultado = mysqli_query($conexion, $consulta);
    return mysqli_num_rows($resultado);
  }

?>