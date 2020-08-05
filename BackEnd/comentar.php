<?php
require_once("./config.php");
require_once("./funciones.php");
$conexion = conectar();
if(isset($_GET['noticia'])){
  $noticia = $_GET['noticia'];
  if(isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
    $comentario = $_POST['comentario'];
    $fecha = fechaHoy();
    $consulta = "INSERT INTO comentarios(contenidoComentario,fechaComentario,Usuarios_idUsuario,Noticias_idNoticia,Productos_idProducto)
                 VALUES ('$comentario', '$fecha', '$usuario', '$noticia', '1')";
  }else{
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $comentario = $_POST['comentario'];
    $fecha = fechaHoy();
    $aux = "INSERT INTO NoRegistrados(nombreNoRegistrado,emailNoRegistrado)
            VALUES ('$nombre', '$email')";
    mysqli_query($conexion,$aux);
    $usuario = mysqli_insert_id($conexion);
    $consulta = "INSERT INTO comentarios(contenidoComentario,fechaComentario,Usuarios_idUsuario,Noticias_idNoticia,Productos_idProducto)
                 VALUES ('$comentario', '$fecha', '1', '$noticia', '1')";
  }
  mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
  desconectar($conexion);
  header("Location: $amigable/articulo/$noticia/");
}
if(isset($_GET['producto'])){
  $producto = $_GET['producto'];
  if(isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
    $comentario = $_POST['comentario'];
    $fecha = fechaHoy();
    $consulta = "INSERT INTO comentarios(contenidoComentario,fechaComentario,Usuarios_idUsuario,Noticias_idNoticia,Productos_idProducto)
                 VALUES ('$comentario', '$fecha', '$usuario', '1', '$producto')";
  }else{
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $comentario = $_POST['comentario'];
    $fecha = fechaHoy();
    $aux = "INSERT INTO NoRegistrados(nombreNoRegistrado,emailNoRegistrado)
            VALUES ('$nombre', '$email')";
    mysqli_query($conexion,$aux);
    $usuario = mysqli_insert_id($conexion);
    $consulta = "INSERT INTO comentarios(contenidoComentario,fechaComentario,Usuarios_idUsuario,Noticias_idNoticia,Productos_idProducto)
                 VALUES ('$comentario', '$fecha', '1', '1', '$producto')";
  }
  mysqli_query($conexion,$consulta);
  desconectar($conexion);
  header("Location: $amigable/articulo/$noticia/");
}
?>