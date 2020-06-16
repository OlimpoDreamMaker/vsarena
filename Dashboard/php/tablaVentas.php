<?php

  //Tablas Ventas pages Dashboard-Tiendas
  function tablaVentas($conexion){
    $consulta = "SELECT * FROM ventas";
    if($resultado = mysqli_query($conexion, $consulta)){
      while($fila = mysqli_fetch_assoc($resultado)){
        echo "<tr>";
        echo "<td>
                <a href='../templates/venta-compra.php?id=".$fila['idVenta']."'>".$fila['idVenta']."</a>
              </td>";
        echo "<td>
                <a href='../templates/usuario.php?id=".$fila['Usuarios_idUsuario']."'>".$fila['Usuarios_idUsuario']."</a>
              </td>";
        echo "<td>".$fila['cantidadProductos']."</td>";
        echo "<td>".$fila['totalVenta']."</td>";
        echo "</tr>"; 
      }
    }
  }
  
?>