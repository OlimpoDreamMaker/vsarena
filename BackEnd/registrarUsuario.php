<?php
require_once("./config.php");
require_once("./funciones.php");
$conexion = conectar();
$usuario = $_POST['usuario'];
echo $usuario;
if (existeUsuario($conexion, $usuario)) {
  desconectar($conexion);
  header("Location: $amigable/registro/A7/"); //Error A7 nombre de usuario ya existente
} else {
  $email = $_POST['email'];
  if (existeEmail($conexion, $email)) {
    desconectar($conexion);
    header("Location: $amigable/registro/B7/"); //Error B7 email ya en uso
  } else {
    $pass = $_POST['pass'];
    $fecha = $_POST['nacimiento'];
    $consulta = "INSERT INTO usuarios(usuario,emailUsuario,passUsuario,saldoEfectivo,saldoMonVir,isAdmin,Cupones_idCupon,Equipos_idEquipos) VALUES ('$usuario', '$email','$pass', '0', '0','0','1','1')";
    mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
    session_start();
    $_SESSION['usuario'] = mysqli_insert_id($conexion);
    desconectar($conexion);
    header("Location: $amigable/");
  }
}
