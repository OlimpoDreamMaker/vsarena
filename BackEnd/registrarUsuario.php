<?php
require_once("./config.php");
require_once("./funciones.php");
$conexion = conectar();
$usuario = $_POST['usuario'];
if(existeUsuario($conexion,$usuario)){
  header("$amigable/registro/A7/");//Error A7 nombre de usuario ya existente
}
$email = $_POST['email'];
if(existeEmail($conexion,$email)){
  header("$amigable/registro/B7/");//Error B7 email ya en uso
}
$pass = $_POST['pass'];
$fecha = $_POST['nacimiento'];
$consulta = "INSERT INTO usuarios(usuario,emailUsuario,fechaNacimiento,passUsuario,saldoEfectivo,saldoMonVir,isAdmin,Cupones_idCupon,Equipos_idEquipo) VALUES ('$usuario', '$email', '$fecha','$pass', '0', '0','0','1','1')";
mysqli_query($conexion,$consulta);
desconectar($conexion);
session_start();
$_SESSION['usuario'] = mysqli_last_id($conexion);
header("Location: $amigable/");
?>
