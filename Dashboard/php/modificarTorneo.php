<?php
  require_once("../../BackEnd/config.php");
  require_once("../../BackEnd/funciones.php");
  $conexion = conectar(); 
  $idTorneo = $_GET['id'];
  $selec = "SELECT * FROM torneos WHERE idTorneo='$idTorneo'";
  $resultado = mysqli_query($conexion,$selec);
  $fila = mysqli_fetch_assoc($resultado);
  if(isset($_POST['nombreTorneo']) && $_POST['nombreTorneo']!=""){
    $torneo = $_POST['nombreTorneo'];
  }else{
    $torneo = $fila['torneo'];
  }
  if(isset($_POST['juego']) && $_POST['juego']!=""){
    $juego = $_POST['juego'];
  }else{
    $juego = $fila['Juegos_idJuego'];
  }
  if(isset($_POST['cantMaxEquipo']) && $_POST['cantMaxEquipo']!=""){
    $cantMaxEquipo = $_POST['cantMaxEquipo'];
  }else{
    $cantMaxEquipo = $fila['cantMaxEquipos'];
  }
  if(isset($_POST['modalidad'])){
    $modalidad = $_POST['modalidad'];
    if($modalidad === "1 vs 1" || $modalidad == "Todos vs Todos"){
      $equipoIndividual = 0; //El torneo es individual
    }else{
      $equipoIndividual = 1; //El torneo es de equipos
    }
  }else{
    $modalidad = $fila['modalidad'];
    $equipoIndividual = $fila['EquipoIndividual'];
  }
  if(!isset($_POST['fecha'])){
    $fecha = $_POST['fecha'];
    $fechaInicio = primeraFecha($fecha);
    $fechaFin = segundaFecha($fecha);
  }else{
    $fechaInicio = $fila['fechaInicio'];
    $fechaFin = $fila['fechaFin'];
  }
  if(isset($_POST['fasesGrupo'])){
    $fasesGrupo = $_POST['fasesGrupo'];
  }else{
    $fasesGrupo = $fila['fasesDeGrupo'];
  }
  $consulta = "UPDATE torneos SET 
                  torneo='$torneo', 
                  cantMaxEquipos='$cantMaxEquipo',
                  modalidad='$modalidad',
                  fechaInicio='$fechaInicio',
                  fechaFin='$fechaFin',
                  fasesDeGrupo='$fasesGrupo',
                  EquipoIndividual='$equipoIndividual',
                  Juegos_idJuegos='$juego'
                  WHERE idTorneo='$idTorneo'";

  mysqli_query($conexion,$consulta);

  $desconectar = desconectar($conexion);
  
  header("Location: $amigable/panel/torneo/$idTorneo/");
  //Mostrar Alerta de Torneo modificado

?>