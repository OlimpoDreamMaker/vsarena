<?php
  require_once("../../BackEnd/config.php");
  $conexion = conectar(); 

  $tag = $_POST['tag'];
  $consulta = "INSERT INTO tags(tag) VALUES ('$tag')";

  mysqli_query($conexion, $consulta);   
  
  $desconectar = desconectar($conexion);
  header("Location: $amigable/panel/noticias/");
  //Mostrar Alerta de Juego creado
  
?>