<?php

  //Tablas Equipos pages Dashboard-Usuarios
  require_once("../php/conexionBD.php");
  $conexion = conectar();

  $consulta = "SELECT * FROM equipos";

  if($resultado = mysqli_query($conexion, $consulta)){
    /*id|equipo|cantDeIntegrantes|enviar Email|*/
    while($fila = mysqli_fetch_assoc($resultado)){
      echo "<tr>";
      echo "<td>
              <a href='../templates/equipo.php?id=".$fila['idEquipo']."'>".$fila['idEquipo']."</a>
            </td>";
      echo "<td>
              <a href='../templates/equipo.php?id=".$fila['idEquipo']."'>".$fila['equipo']."</a>
            </td>";
      $idEquipo = $fila['idEquipo'];
      $subConsulta = "SELECT * 
                      FROM usuarios 
                      WHERE Equipos_idEquipos='$idEquipo'";
      $subResultado = mysqli_query($conexion, $subConsulta);
      $cantIntegrantes = mysqli_num_rows($subResultado);
      echo "<td>".$cantIntegrantes."</td>";//Hacer una consulta para ver la cantidad de usuarios que tiene un equipo, Unir con la tabla de Equipos_Usuarios
      echo "</tr>";
    }
  }

  desconectarBD($conexion);
  
?>