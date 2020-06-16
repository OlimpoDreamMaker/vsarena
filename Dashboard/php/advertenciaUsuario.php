<?php
require_once("conexionBD.php");
$conexion = conectar();
$idUsuario = $_GET['id'];
$consulta =  "SELECT * 
              FROM usuarios 
              WHERE idUsuario='$idUsuario'";
$resultado = mysqli_query($conexion,$consulta);
$fila = mysqli_fetch_assoc($resultado);
$from = $fila['emailUsuario'];//Cambiar y configurar hosting
$to = "pegasotirius@gmail.com";//email de todos los usuarios
$subject = $_POST['asunto'];
$message = $_POST['mensaje'];
$headers = "De:" . $from;
mail($to,$subject,$message, $headers);
echo "Email enviado con exito";

desconectarBD($conexion);
?>