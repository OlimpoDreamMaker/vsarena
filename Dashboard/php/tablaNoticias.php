<?php
  //Tablas Noticias pages Dashboard-Noticias
  require_once("../php/conexionBD.php");
  $conexion = conectar();

  $consulta = "SELECT *
               FROM noticias n
               INNER JOIN usuarios u
               ON n.Usuarios_idUsuario=u.idUsuario";

  if($resultado = mysqli_query($conexion, $consulta)){
    /*idNoticia|tituloNoticia|autor|/*/
    while($fila = mysqli_fetch_assoc($resultado)){
      echo "<tr>";
      echo "<td>
              <a href='../templates/noticia.php?id=".$fila['idNoticia']."'>".$fila['idNoticia']."</a>
            </td>";
      echo "<td>
              <a href='../templates/noticia.php?id=".$fila['idNoticia']."'>".$fila['tituloNoticia']."</a>
            </td>";
      echo "<td>
              <a href='../templates/usuario.php?id=".$fila['idUsuario']."'>".$fila['usuario']."</a>
            </td>";
      echo "</tr>";
    }
  }

  desconectarBD($conexion);
  
?>