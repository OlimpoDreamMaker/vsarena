<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 
  $idTorneo = $_GET['id'];

  $premio = $_POST['nombrePremio'];
  $detalles = $_POST['detalles'];
  $consulta ="INSERT 
              INTO premios(nombrePremio,Premio,Torneos_idTorneos,Equipos_idEquipo,Usuarios_idUsuario) 
              VALUES ('$premio','$detalles','$idTorneo','1','1')";
  
  mysqli_query($conexion, $consulta);   
  
  $desconectar = desconectarBD($conexion);
  header("Location: ../templates/torneo.php?id=$idTorneo");
  
?>