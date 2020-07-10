<?php
  require_once("../../BackEnd/config.php");
  session_start();
  session_destroy();
  header("Location: $amigable/");//Enviar a pagina principal
?>