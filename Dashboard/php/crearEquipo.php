<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 

  $equipo = $_POST['nombreEquipo'];
  $foto = $_FILES["avatarEquipo"]["name"];
  $type = $_FILES["avatarEquipo"]["type"];
  $origen = $_FILES["avatarEquipo"]["tmp_name"]; 
  $destino = "../../$carpeta/$foto";
  if($type=="image/jpeg" OR $type=="image/jpg" OR $type=="image/png" OR type=="image/gif"){
    $consulta = "INSERT INTO Equipos(nombreEquipo, avatarEquipo) VALUES ('$equipo','$foto')";
  }else{
    $consulta = "INSERT INTO Equipos(nombreEquipo) VALUES ('$equipo')";
  }

  mysqli_query($conexion, $consulta);   
  
  $desconectar = desconectarBD($conexion);
  
?>