<?php

  function cantidadJuegos($conexion){
    $consulta = "SELECT * FROM juegos";
    $resultado = mysqli_query($conexion, $consulta);
    return mysqli_num_rows($resultado)-1;
  }

?>