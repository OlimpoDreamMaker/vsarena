<?php
  require_once("../../BackEnd/config.php");
  require_once("../../BackEnd/funciones.php");
  require_once("estadoTorneo.php");
  $conexion = conectar(); 

  $torneo = $_POST['nombreTorneo'];
  $juego = $_POST['juego'];
  $cantMaxEquipo = $_POST['cantMaxEquipo'];
  $modalidad = $_POST['modalidad'];
  if($modalidad === "1 vs 1" || $modalidad == "Todos vs Todos"){
    $equipoIndividual = 0; //El torneo es individual
  }else{
    $equipoIndividual = 1; //El torneo es de equipos
  }
  $inscripcion = $_POST['inscripcion'];
  $fecha = $_POST['fecha'];
  $fechaInicio = primeraFecha($fecha);
  $fechaFin = segundaFecha($fecha);
  $estado = estado($fechaInicio,$fechaFin);//Estado automatico dependiendo de la fecha. Cuatro estado posibles, a En espera, Activo, Concluido, cancelado
  $fasesDeGrupo = $_POST['fasesGrupo'];
  $consulta ="INSERT 
              INTO torneos(torneo,cantMaxEquipos,modalidad,estado,fechaInicio,fechaFin,fasesDeGrupo,inscripcion,Juegos_idJuegos,EquipoIndividual) 
              VALUES ('$torneo','$cantMaxEquipo','$modalidad','$estado','$fechaInicio','$fechaFin','$fasesDeGrupo','$inscripcion','$juego','$equipoIndividual')";
  
  mysqli_query($conexion, $consulta);   
  
  $desconectar = desconectar($conexion);
  header("Location: $amigable/panel/torneos/");
  
?>