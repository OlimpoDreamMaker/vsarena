<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 

  $tag = $_POST['tag'];
  $consulta = "INSERT INTO tags(tag) VALUES ('$tag')";

  mysqli_query($conexion, $consulta);   
  
  $desconectar = desconectarBD($conexion);
  header("Location:../templates/noticias.php");
  //Mostrar Alerta de Juego creado
  
?>