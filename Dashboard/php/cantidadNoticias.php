<?php

  function cantidadNoticias($conexion){
    $consulta = "SELECT * FROM noticias";
    $resultado = mysqli_query($conexion, $consulta);
    return mysqli_num_rows($resultado);
  }

?>