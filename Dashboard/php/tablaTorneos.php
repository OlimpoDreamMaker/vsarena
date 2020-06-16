<?php
  //Tablas Torneos pages Dashboard-Torneos
  require_once("../php/conexionBD.php");
  $conexion = conectar();

  $consulta =  "SELECT * 
                FROM torneos t 
                INNER JOIN juegos j 
                ON t.Juegos_idJuegos=j.idJuego";

  if($resultado = mysqli_query($conexion, $consulta)){
    /*id|torneo|juego|cant participantes|estado/faseDeGrupos/modalidad/fecha start-end*/
    while($fila = mysqli_fetch_assoc($resultado)){
      echo "<tr>";
      echo "<td>
              <a href='../templates/torneo.php?id=".$fila['idTorneo']."'>".$fila['idTorneo']."</a>
            </td>";
      echo "<td>
              <a href='../templates/torneo.php?id=".$fila['idTorneo']."'>".$fila['torneo']."</a>
            </td>";
      echo "<td>
              <a href='../templates/juego.php?id=".$fila['idJuego']."'>".$fila['juego']."</a>
            </td>";
      echo "<td>".$fila['cantMaxEquipos']."</td>";
      echo "<td>".$fila['estado']."</td>";
      if($fila['fasesDeGrupo']==1){
        echo "<td>Si</td>";
      }else{
        echo "<td>No</td>";
      }
      echo "<td>".$fila['modalidad']."</td>";
      echo "<td>|".$fila['fechaInicio']."|<br>|".$fila['fechaFin']."|</td>";
      echo "</tr>";
    }
  }

  desconectarBD($conexion);
  
?>