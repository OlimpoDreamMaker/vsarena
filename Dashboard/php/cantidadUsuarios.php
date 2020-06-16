<?php

  function cantidadUsuarios($conexion){
    $consulta = "SELECT * FROM usuarios";
    $resultado = mysqli_query($conexion, $consulta);
    return mysqli_num_rows($resultado);
  }

?>