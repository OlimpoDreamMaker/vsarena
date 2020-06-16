<?php
function ingresosTotales($conexion){
  $total = 0;
  $consulta = "SELECT * FROM ventas";
  if($resultado = mysqli_query($conexion, $consulta)){
    while($fila = mysqli_fetch_assoc($resultado)){
      $total += $fila['totalVenta'];
    }
  }
  return $total;
}
?>