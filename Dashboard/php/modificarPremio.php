<?php
  require_once("conexionBD.php");
  require_once("tomarFecha.php");
  $conexion = conectar(); 
  $idPremio = $_GET['id'];
  $selec = "SELECT * FROM premios p, torneos t
            WHERE p.idPremio='$idPremio'
            AND p.Torneos_idTorneos=t.idTorneo";
  $resultado = mysqli_query($conexion,$selec);
  $fila = mysqli_fetch_assoc($resultado);
  if(isset($_POST['nombrePremio']) && $_POST['nombrePremio']!=""){
    $premio = $_POST['nombrePremio'];
  }else{
    $premio = $fila['nombrePremio'];
  }
  if(isset($_POST['detalles']) && $_POST['detalles']!=""){
    $detalles = $_POST['detalles'];
  }else{
    $detalles = $fila['Premio'];
  }
  if($fila['EquipoIndividual'] == 0){//Individual
    if(isset($_POST['usuarios']) && $_POST['usuarios']!=""){
      $ganador = $_POST['usuarios'];
      $consulta = "UPDATE premios SET
                    nombrePremio='$premio',
                    Premio='$detalles',
                    Usuarios_idUsuario='$ganador'
                    WHERE idPremio='$idPremio'";
    }else{  
      $consulta =  "UPDATE premios SET
                    nombrePremio='$premio',
                    Premio='$detalles'
                    WHERE idPremio='$idPremio'";
    }
  }else{//Equipo
    if(isset($_POST['equipos']) && $_POST['equipos']!=""){
      $ganador = $_POST['equipos'];
      $consulta = "UPDATE premios SET
                    nombrePremio='$premio',
                    Premio='$detalles',
                    Equipos_idEquipo='$ganador'
                    WHERE idPremio='$idPremio'";
    }else{  
      $consulta =  "UPDATE premios SET
                    nombrePremio='$premio',
                    Premio='$detalles'
                    WHERE idPremio='$idPremio'";
    }
  }

  mysqli_query($conexion,$consulta);

  $desconectar = desconectarBD($conexion);
  header("Location:../templates/premio.php?id=$idPremio");
  //Mostrar Alerta de Torneo modificado

?>