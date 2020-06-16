<?php
require_once("../php/conexionBD.php");
$conexion = conectar();
$idComentario = $_GET['id'];
$consulta = "DELETE FROM comentarios WHERE idComentario='$idComentario'";
mysqli_query($conexion, $consulta);
desconectarBD($conexion);
if($_GET['b']==1){
  $idNoticia = intval($_GET['noticia']);
  header("Location: ../templates/noticia.php?id=$idNoticia");
}else{
  $idProducto = intval($_GET['producto']);
  header("Location: ../templates/producto.php?id=$idProducto");
}

?>