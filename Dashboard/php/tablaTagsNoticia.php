<?php
function tagsNoticia($conexion, $id){
  $consulta =  "SELECT * 
                FROM tags_has_noticias h, tags t
                WHERE h.Noticias_idNoticia='$id'
                AND h.Tags_idTag=t.idTag";
  if($resultado = mysqli_query($conexion, $consulta)){
    while($fila = mysqli_fetch_assoc($resultado)){
      echo "<tr>";
      echo "<td><a href='../templates/tag.php?id=".$fila['idTag']."'>".$fila['idTag']."</a></td>";
      echo "<td><a href='../templates/tag.php?id=".$fila['idTag']."'>".$fila['tag']."</a></td>";
      echo "</tr>";
    }
  }  
}
?>