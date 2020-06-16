<?php

  function cantidadTorneosCancelados($conexion){
    $consulta = "SELECT * FROM torneos WHERE estado='Cancelado'";
    $resultado = mysqli_query($conexion, $consulta);
    return mysqli_num_rows($resultado);
  }

?>