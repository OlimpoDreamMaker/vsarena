<?php
session_start();
require_once("./BackEnd/config.php");
require_once("./BackEnd/funciones.php");
require_once("./BackEnd/mostrarTablas.php");
$conexion = conectar();
$id = $_SESSION['usuario'];
$select = "SELECT * FROM usuarios WHERE idUsuario='$id'";
$rs = mysqli_query($conexion);
$fila = mysqli_fetch_assoc($rs);
if($_POST['usuario']==NULL || $_POST['usuario']==""){
  $usuario = $fila['usuario'];
}else{
  $usuario = $_POST['usuario'];
}
if($_POST['pass']==NULL || $_POST['pass']==""){
  $pass = $fila['passUsuario'];
}else{
  $pass = $_POST['pass'];
}
if($_POST['fecha']==NULL || $_POST['fecha']==""){
  $fecha = $fila['fechaNacimiento'];
}else{
  $fecha = $_POST['fecha'];
}
if($_POST['avatar']==NULL || $_POST['avatar']==""){
  $avatar = $fila['avatarUsuario'];
}else{
  $avatar = $_POST['avatar'];
}
$consulta = "UPDATE usuarios SET 
                  usuario='$usuario', 
                  passUsuario='$pass',
                  fechaNacimiento='$fecha',
                  avatarUsuario='$avatar'
                  WHERE idUsuario='$id'";
mysqli_query($conexion,$consulta);
desconectar($conexion);
//Mostrar que se guardaron los datos
header("Location: $amigable/usuario");
?>