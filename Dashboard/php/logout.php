<?php
  require_once("./config.php");
  session_start();
  session_destroy();
  header("Location: $amigable/");//Enviar a pagina principal
?>