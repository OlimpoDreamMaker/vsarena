<?php
require_once("../php/conexionBD.php");
$conexion = conectar();
$consulta = "SELECT * FROM tags";
if($resultado = mysqli_query($conexion, $consulta)){
  while($fila = mysqli_fetch_assoc($resultado)){
    $id = $fila['idTag'];
    $tag = $fila['tag'];
    echo "<tr>";
    echo "<td><a href='../templates/tag.php?id=$id'>$id</a></td>";
    echo "<td><a href='../templates/tag.php?id=$id'>$tag</a></td>";
    echo "</tr>";
  }
}
?>