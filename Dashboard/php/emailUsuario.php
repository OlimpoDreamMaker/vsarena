<?php
require_once("conexionBD.php");
$conexion = conectar();

$from = "vsarena@email.com";//Cambiar y configurar hosting
$to = $_GET['usuario'];//email del usuario
$subject = $_POST['asunto'];
$message = $_POST['mensaje'];
$headers = "De:" . $from;
mail($to,$subject,$message, $headers);
echo "Email enviado con exito";

desconectar($conexion);
?>