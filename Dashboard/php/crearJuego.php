<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 

  $carpeta = "imgJuegos";
  $juego = $_POST['nombreJuego'];
  $descripcion = $_POST['descripcionJuego'];
  $plataforma = $_POST['plataforma'];
  $foto = $_FILES["foto"]["name"];
  $type = $_FILES["foto"]["type"];
  $origen = $_FILES["foto"]["tmp_name"]; 
  $destino = "../../$carpeta/$foto";
  if($type=="image/jpeg" OR $type=="image/jpg" OR $type=="image/png" OR $type=="image/gif"){
    move_uploaded_file($origen, $destino);
    $consulta = "INSERT INTO juegos(juego,descripcionJuego,plataforma, imgJuego) VALUES ('$juego', '$descripcion', '$plataforma', '$foto')";
  }else{
    $consulta = "INSERT INTO juegos(juego,descripcionJuego,plataforma) VALUES ('$juego', '$descripcion', '$plataforma')";
  }

  mysqli_query($conexion, $consulta);   
  
  $desconectar = desconectarBD($conexion);
  header("Location:../templates/juegos.php");
  //Mostrar Alerta de Juego creado
  
?>