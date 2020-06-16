<?php

  function cantidadCupones($conexion){
    $consulta = "SELECT * FROM cupones";
    $resultado = mysqli_query($conexion, $consulta);
    return mysqli_num_rows($resultado)-1;
  }

?>