<?php
  function usuariosEquipo($conexion, $id){
    include("../config.php");
    $consulta = "SELECT * FROM usuarios WHERE Equipos_idEquipos='$id'";
    if($resultado = mysqli_query($conexion, $consulta)){
      while($fila = mysqli_fetch_assoc($resultado)){
        echo "<tr>";
        echo "<td>
                <a href='".$amigable."/panel/usuario/".$fila['idUsuario']."/'>".$fila['idUsuario']."</a>
              </td>";
        echo "<td>
                <a href='".$amigable."/panel/usuario/".$fila['idUsuario']."/'>".$fila['usuario']."</a>
              </td>";
        echo "<td>".$fila['emailUsuario']."</td>";
        echo "</tr>";
      }
    }
  }  
?>