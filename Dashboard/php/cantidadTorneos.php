<?php

  function cantidadTorneos($conexion){
    $consulta = "SELECT * FROM torneos";
    $resultado = mysqli_query($conexion, $consulta);
    return mysqli_num_rows($resultado);
  }

?>