<?php
  function torneosEquipo($conexion, $id){
    include("../config.php");
    $consulta =  "SELECT * 
                  FROM torneos t, equipos_has_torneos h, juegos j
                  WHERE h.Equipos_idEquipo='$id'
                  AND t.idTorneo=h.Torneos_idTorneo
                  AND t.Juegos_idJuegos=j.idJuego";
    if($resultado = mysqli_query($conexion, $consulta)){
      while($fila = mysqli_fetch_assoc($resultado)){
        //ID-Torneo|Nombre Torneo|Juego|Cantidad max de Participantes|Estado|Modalidad
        echo "<tr>";
        echo "<td>
                <a href='".$amigable."/panel/torneo/".$fila['idTorneo']."/'>".$fila['idTorneo']."</a>
              </td>";
        echo "<td>
                <a href='".$amigable."/panel/torneo/".$fila['idTorneo']."/'>".$fila['torneo']."</a>
              </td>";
        echo "<td>
                <a href=".$amigable."/panel/juego/".$fila['idJuego']."/'>".$fila['juego']."</a>
              </td>";
        echo "<td>".$fila['cantMaxEquipos']."</td>";
        echo "<td>".$fila['estado']."</td>";
        echo "<td>".$fila['modalidad']."</td>";
        echo "</tr>";
      }
    }
  }  
?>