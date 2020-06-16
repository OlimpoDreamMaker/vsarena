<?php
function grupo($conexion, $idGrupo){
  $consulta =  "SELECT * 
                FROM enfrentamientos e, enfrentamentos_equipos v
                WHERE e.Grupos_idGrupos='$idGrupo'
                AND v.Enfrentamientos_idEnfrentamientos=e.idEnfrentamiento";
  $idEquipos = array();  
  $bandera = 0;
  $resultado = mysqli_query($conexion,$consulta);
  while ( $fila = mysqli_fetch_assoc($resultado)) {
    if($bandera == 0){
      $idEquipos[] = $fila['Equipos_idEquipo'];
      $bandera = 1;
    }else{
      $b=0;
      for($i=0; $i<count($idEquipos); $i++){
        if($idEquipos[$i]==$fila['Equipos_idEquipo']){
          $b=1;
        }
      }
      if($b==0){
        $idEquipos[] = $fila['Equipos_idEquipo'];
      }
    }
  }
  if(count($idEquipos)>0){
    for($i=0; $i<count($idEquipos); $i++){
      $equipo = "SELECT * FROM equipos WHERE idEquipo='$idEquipos[$i]'";
      $rs = mysqli_query($consulta, $equipo);
      $f = mysqli_fetch_assoc($rs);
      echo "<td>".$f['idEquipo']."</td>";
      echo "<td>".$f['equipo']."</td>";
      echo "<td>0</td>";
      echo "<td>|-|-|-|</td>";
    }
  }
}
?>