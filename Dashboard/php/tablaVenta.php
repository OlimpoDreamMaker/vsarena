<?php
//Tablas Venta pages Dashboard-Tienda-Venta
function tablaVenta($conexion, $idVenta){
  $consulta =  "SELECT * 
                FROM DetallesVentas d, Productos p
                WHERE d.Ventas_idVenta='$idVenta'
                AND d.Productos_idProducto=p.idProducto";
  if($resultado = mysqli_query($conexion, $consulta)){
    while($fila = mysqli_fetch_assoc($resultado)){
      echo "<tr>";
      echo "<td>
              <a href='../templates/producto.php?id=".$fila['idProducto']."'>".$fila['idProducto']."</a>
            </td>";
      echo "<td>
        <a href='../templates/producto.php?id=".$fila['idProducto']."'>".$fila['producto']."</a>
      </td>";
      echo "<td>".$fila['precioEfectivo']."</td>";
      echo "<td>".$fila['cantidadProducto']."</td>";
      echo "<td>".$fila['precioEfectivo']*$fila['cantidadProducto']."</td>";
      echo "</tr>"; 
    }
  }
}
  
?>