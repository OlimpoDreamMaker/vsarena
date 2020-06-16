<?php
require_once("conexionBD.php");
$conexion = conectar();
$from = "vsarena@email.com";//Cambiar y configurar hosting
$to = "pegasotirius@gmail.com";//email de todos los usuarios
$subject = $_POST['asunto'];
$message = $_POST['mensaje'];
$headers = "De:" . $from;
mail($to,$subject,$message, $headers);
echo "Email enviado con exito";

desconectarBD($conexion);
?>