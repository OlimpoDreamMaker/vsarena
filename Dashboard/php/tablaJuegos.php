<?php

  //Tablas Juegos pages Dashboard-Juegos
  require_once("../php/conexionBD.php");
  $conexion = conectar();

  $consulta = "SELECT * FROM juegos";

  if($resultado = mysqli_query($conexion, $consulta)){
    /*id|juego|plataforma|*/
    while($fila = mysqli_fetch_assoc($resultado)){
      if($fila['idJuego'] == 1){
        continue;
      }
      echo "<tr>";
      echo "<td>
              <a href='../templates/juego.php?id=".$fila['idJuego']."'>".$fila['idJuego']."</a>
            </td>";
      echo "<td>
              <a href='../templates/juego.php?id=".$fila['idJuego']."'>".$fila['juego']."</a>
            </td>";
      echo "<td>".$fila['plataforma']."</td>";
      echo "</tr>";
    }
  }

  desconectarBD($conexion);
  
?>