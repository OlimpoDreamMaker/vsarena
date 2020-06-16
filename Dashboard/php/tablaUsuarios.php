<?php

  //Tablas Usuarios pages Dashboard-Usuarios
  require_once("../php/conexionBD.php");
  $conexion = conectar();

  $consulta = "SELECT * FROM usuarios";

  if($resultado = mysqli_query($conexion, $consulta)){
    //id|usuario|email|efectivo|monVirtual|isAdmin|advertencia|/
    while($fila = mysqli_fetch_assoc($resultado)){
      echo "<tr>";
      echo "<td>
              <a href='../templates/usuario.php?id=".$fila['idUsuario']."'>".$fila['idUsuario']."</a>
            </td>";
      echo "<td>
              <a href='../templates/usuario.php?id=".$fila['idUsuario']."'>".$fila['usuario']."</a>
            </td>";
      echo "<td>".$fila['emailUsuario']."</td>";
      echo "<td>".$fila['saldoEfectivo']."</td>";
      echo "<td>".$fila['saldoMonVir']."</td>";
      if($fila['isAdmin']==1){
        echo "<td>Admin</td>";
      }else{
        echo "<td>No es Admin</td>";
      }
      echo "<td>
              <a href='./sendWarning.php?id=".$fila['idUsuario']."'><span class='badge bg-warning' title='Advertir posible Ban'><i class='fas fa-exclamation-triangle'></i></span></a>
            </td>";
      echo "</tr>";
    }
  }


  desconectarBD($conexion);
?>