<?php
  function usuariosEquipo($conexion, $id){
    $consulta = "SELECT * FROM usuarios WHERE Equipos_idEquipos='$id'";
    if($resultado = mysqli_query($conexion, $consulta)){
      while($fila = mysqli_fetch_assoc($resultado)){
        echo "<tr>";
        echo "<td>
                <a href='../templates/usuario.php?id=".$fila['idUsuario']."'>".$fila['idUsuario']."</a>
              </td>";
        echo "<td>
                <a href='../templates/usuario.php?id=".$fila['idUsuario']."'>".$fila['usuario']."</a>
              </td>";
        echo "<td>".$fila['emailUsuario']."</td>";
        echo "</tr>";
      }
    }
  }  
?>