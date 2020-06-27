<?php
require_once("../../BackEnd/config.php");
$conexion = conectar();
$idComentario = $_GET['id'];
$consulta = "DELETE FROM comentarios WHERE idComentario='$idComentario'";
mysqli_query($conexion, $consulta);
desconectar($conexion);
if($_GET['b']==1){// uso la variable 'b' para ver si el comentario estaba relacionado con un producto o con una noticia
  $idNoticia = intval($_GET['noticia']);
  header("Location: $amigable/panel/noticia/$idNoticia/");
}else{
  $idProducto = intval($_GET['producto']);
  header("Location: $amigable/panel/producto/$idProducto/");
}

?>