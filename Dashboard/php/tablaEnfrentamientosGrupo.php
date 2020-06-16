<?php
function enfrentamientosGrupo($conexion,$idGrupo){
  $consulta =  "SELECT *
                FROM enfrentamientos 
                WHERE Grupos_idGrupos='$idGrupo'";
  $resultado = mysqli_query($conexion,$consulta);
  if(mysqli_num_rows($resultado)>0){
    while($fila = mysqli_fetch_assoc($resultado)){
      echo "<tr>";
      $idEnfrentamiento = $fila['idEnfrentamiento'];
      $ganador = $fila['Ganador'];
      $fecha = $fila['FechaEnfrentamiento'];
      $bandera = 0;
      $subconsulta = "SELECT * 
                      FROM enfrentamientos_equipos v, equipos e
                      WHERE v.Enfrentamientos_idEnfrentamientos='$idEnfrentamiento'
                      AND v.Equipos_idEquipo=e.idEquipo";
      $rs = mysqli_query($conexion,$subconsulta);
      while($f = mysqli_fetch_assoc($rs)){
        // var_dump($f);
        if($bandera == 0){
          echo "<td><a href='../templates/equipo.php?id=".$f['idEquipo']."'>".$f['equipo']."</td>";
          $bandera = 1;
        }else{
          echo "<td><a href='../templates/equipo.php?id=".$f['idEquipo']."'>".$f['equipo']."</td>";
        }
      }
      if($fecha == NULL || $fecha == ''){
        echo "<td>-</td>";
      }else{
        echo "<td>$fecha</td>";
      }
      if($ganador == NULL || $ganador == ''){
        echo "<td>-</td>";
      }else{
        echo "<td>$ganador</td>";
      }
      echo "</tr>";
    }
  }
}
?>