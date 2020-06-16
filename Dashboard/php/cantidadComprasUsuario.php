<?php

function cantidadComprasUsuario($conexion,$id){
  $consulta =  "SELECT * FROM ventas v
                WHERE Usuarios_idUsuario='$id'";
  $resultado = mysqli_query($conexion, $consulta);
  return mysqli_num_rows($resultado);
}

?>