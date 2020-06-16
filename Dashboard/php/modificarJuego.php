<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 
  $idJuego= $_GET['id'];
  $carpeta = "imgJuegos";
  $selec = "SELECT * FROM juegos WHERE idJuego='$idJuego'";
  $resultado = mysqli_query($conexion,$consulta);
  $fila = mysqli_fetch_assoc($resultado);
  if(isset($_POST['juego'])){
    $juego = $_POST['juego'];
  }else{
    $juego = $fila['juego'];
  }
  if(isset($_POST['plataforma'])){
    $plataforma = $_POST['plataforma'];
  }else{
    $juego = $fila['plataforma'];
  }
  if(isset($_POST['descripcionJuego'])){
    $descripcionJuego = $_POST['descripcionJuego'];
  }else{
    $descripcionJuego = $fila['descripcionJuego'];
  }
  if(isset($_FILES['foto']['name'])){
    $imgJuego = $_FILES['foto']['name'];
    $type = $_FILES["foto"]["type"];
    $origen = $_FILES["foto"]["tmp_name"]; 
    $destino = "../../$carpeta/$foto";
    if($type=="image/jpeg" OR $type=="image/jpg" OR $type=="image/png" OR type=="image/gif"){
      move_uploaded_file($origen, $destino);
      $consulta = "UPDATE juegos SET 
                  juego='$juego', 
                  descripcionJuego='$descripcionJuego',
                  imgJuego='$imgJuego',
                  plataforma='$plataforma'
                  WHERE idJuego='$idJuego";
    }else{
      $consulta = "UPDATE juegos SET 
                  juego='$juego', 
                  descripcionJuego='$descripcionJuego',
                  plataforma='$plataforma'
                  WHERE idJuego='$idJuego";
    }
  }else{
    $consulta = "UPDATE juegos SET 
                  juego='$juego', 
                  descripcionJuego='$descripcionJuego',
                  plataforma='$plataforma'
                  WHERE idJuego='$idJuego";
  }

  mysqli_query($conexion,$consulta);

  $desconectar = desconectarBD($conexion);
  header("Location:../templates/juego.php?id=$idJuego");
  //Mostrar Alerta de Juego modificado

?>