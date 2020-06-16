<?php

  //Tablas Cupones pages Dashboard-Tienda
  require_once("../php/conexionBD.php");
  $conexion = conectar();

  $consulta = "SELECT * FROM cupones";

  if($resultado = mysqli_query($conexion, $consulta)){
    /*id|cupon|estado|porcentaje|fecha Inicio-Fin|*/
    while($fila = mysqli_fetch_assoc($resultado)){
      echo "<tr>";
      echo "<td>
              <a href='../templates/cupon.php?id=".$fila['idCupon']."'>".$fila['idCupon']."</a>
            </td>";
      echo "<td>
              <a href='../templates/cupon.php?id=".$fila['idCupon']."'>".$fila['nombreCupon']."</a>
            </td>";
      echo "<td>".$fila['porcentajeDescuento']."%</td>";
      if($fila['estadoCupon']==1){
        echo "<td>Activo</td>";
      }else{
        echo "<td>Inactivo</td>";
      }
      echo "<td>|".$fila['inicioCupon']."| <br/> |".$fila['finCupon']."|</td>";
      echo "</tr>";
    }
  }

  desconectarBD($conexion);
  
?>