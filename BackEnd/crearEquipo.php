<?php
session_start();
require_once("./config.php");
require_once("./funciones.php");

$conexion = conectar();
$carpeta = "avatarTeam";

$lider = $_SESSION['usuario'];
$equipo = $_POST['equipo'];
$foto = $_FILES["avatarEquipo"]["name"];
$type = $_FILES["avatarEquipo"]["type"];
$origen = $_FILES["avatarEquipo"]["tmp_name"]; 
$destino = "../imagenes/$carpeta/$foto";
if(verificarImg($type)){
  move_uploaded_file($origen, $destino);
  $consulta = "INSERT INTO Equipos(nombreEquipo, avatarEquipo) VALUES ('$equipo','$foto')";
  mysqli_query($conexion, $consulta);
  //Crear Cartel que diga equipo creado   
}else{
  //El archivo q ingreso no es una imagen
}
desconectar($conexion);
header("Location: $amigable/usuario");
