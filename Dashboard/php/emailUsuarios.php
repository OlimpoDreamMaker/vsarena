<?php
require_once("../../BackEnd/config.php");
$conexion = conectar();
$from = "vsarena@email.com";//Cambiar y configurar hosting
$to = "";//email de todos los usuarios
$subject = $_POST['asunto'];
$message = $_POST['mensaje'];
$headers = "De:" . $from;
mail($to,$subject,$message, $headers);
echo "Email enviado con exito";

desconectarBD($conexion);
?>