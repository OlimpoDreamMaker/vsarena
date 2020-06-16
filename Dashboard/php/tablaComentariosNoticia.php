<?php
function comentariosNoticia($conexion, $idNoticia){
  $consulta =  "SELECT * 
                FROM comentarios c, usuarios u
                WHERE c.Noticias_idNoticia='$idNoticia'
                AND c.Usuarios_idUsuario=u.idUsuario";
  if($resultado = mysqli_query($conexion, $consulta)){
    while($fila = mysqli_fetch_assoc($resultado)){
      echo "<tr>";
      echo "<td>".$fila['idComentario']."</td>";
      echo "<td><a href='../templates/usuario.php?id=".$fila['idUsuario']."'>".$fila['idUsuario']."</a></td>";
      echo "<td><a href='../templates/usuario.php?id=".$fila['idUsuario']."'>".$fila['usuario']."</td>";
      echo "<td>".$fila['contenidoComentario']."</td>";
      echo "<td><a href='../php/eliminarComentario.php?id=".$fila['idComentario']."&b=1&noticia=$idNoticia'><i class='fas fa-trash-alt'></i></a></td>";
      echo "</tr>";
    }
  }
}
?>