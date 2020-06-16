<?php

  //Tablas Productos pages Dashboard-Tienda
  require_once("../php/conexionBD.php");
  $conexion = conectar();

  $consulta = "SELECT p.idProducto,p.producto,p.precioEfectivo,p.precioMonVirtual,p.stock,c.idCupon,c.nombreCupon
               FROM productos p
               INNER JOIN cupones c
               ON p.Cupones_idCupones=c.idCupon";

  if($resultado = mysqli_query($conexion, $consulta)){
    /*id|producto|precioEfectivo/precioMonVritul|stock|cupon/*/
    while($fila = mysqli_fetch_assoc($resultado)){
      echo "<tr>";
      echo "<td>
              <a href='../templates/producto.php?id=".$fila['idProducto']."'>".$fila['idProducto']."</a>
            </td>";
      echo "<td>
              <a href='../templates/producto.php?id=".$fila['idProducto']."'>".$fila['producto']."</a>
            </td>";
      echo "<td>".$fila['precioEfectivo']."</td>";
      echo "<td>".$fila['precioMonVirtual']."</td>";
      echo "<td>".$fila['stock']."</td>";
      echo "<td><a href='../templates/cupon.php?id=".$fila['idCupon']."'>".$fila['nombreCupon']."</a></td>";
      echo "</tr>";
    }
  }

  desconectarBD($conexion);
  
?>