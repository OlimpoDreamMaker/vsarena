<?php
require_once(__DIR__ . "/config.php");
session_start();
// Verifica si el usuario esta logeado
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    $comentario = $_POST['comentario'];
    $idComentario = $_POST['idComentario'];
    $fecha = fechaHoy();
    // Crea el query de respuesta del comentario
    $consulta = "INSERT INTO comentarios_de_comentarios(contenidoComentario,fechaComentario,Usuarios_idUsuario,Comentarios_idComentario)
                 VALUES ('$comentario', '$fecha', '$usuario', '$idComentario')";
} else {
    // Si no esta loggeado comenta con el usuario 1, usuario 1 = anonimo
    $usuario = 1;
    $comentario = $_POST['comentario'];
    $idComentario = $_POST['idComentario'];
    $fecha = fechaHoy();
    $consulta = "INSERT INTO comentarios_de_comentarios(contenidoComentario,fechaComentario,Usuarios_idUsuario,Comentarios_idComentario)
                 VALUES ('$comentario', '$fecha', '$usuario', '$idComentario')";
}
// Ejecuta el query
$rs = mysqli_query($conexion, $consulta);
desconectar($conexion);
// Mapea el response en array
$response = array(
    "seComento" => $rs,
    "comentario" => $_POST['comentario'],
    "id" =>  $_POST['idComentario']
);
// Parsea el array a un objeto json para poder manejarlo en el FrontEnd
echo json_encode($response);
return;