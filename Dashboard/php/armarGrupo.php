<?php
require_once("../php/conexionBD.php");
$id = $_GET['id'];
$conexion = conectar();
$equipo = $_POST["equipos"];
$cantidadEquipos = count($equipo);
switch ($cantidadEquipos) {
  case 2:
    $enfrentamiento = "INSERT INTO enfrentamientos(NombreEnfrentamiento,Rondas_idRondas,Grupos_idGrupos) VALUES ('A','1','$id')";
    mysqli_query($conexion,$enfrentamiento);
    $rs = mysqli_query($conexion, "SELECT MAX(idEnfrentamiento) AS id FROM enfrentamientos");
    if ($row = mysqli_fetch_assoc($rs)) {
      $idEnfrentamiento = trim($row[0]);
      for($i=0; $i<$cantidadEquipos; $i++){
        $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[$i]')";
        mysqli_query($conexion,$consulta);
      }
      
    }
    break;
  case 3:
    $enfrentamiento = "INSERT INTO enfrentamientos(NombreEnfrentamiento,Rondas_idRondas,Grupos_idGrupos) VALUES ('A','1','$id')";
    mysqli_query($conexion,$enfrentamiento);
    $rs = mysqli_query($conexion, "SELECT MAX(idEnfrentamiento) AS id FROM enfrentamientos");
    if ($row = mysqli_fetch_assoc($rs)) {
      $idEnfrentamiento = trim($row[0]);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[0]')";
      mysqli_query($conexion,$consulta);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[1]')";
      mysqli_query($conexion,$consulta);
    }
    $enfrentamiento = "INSERT INTO enfrentamientos(NombreEnfrentamiento,Rondas_idRondas,Grupos_idGrupos) VALUES ('B','1','$id')";
    mysqli_query($conexion,$enfrentamiento);
    $rs = mysqli_query($conexion, "SELECT MAX(idEnfrentamiento) AS id FROM enfrentamientos");
    if ($row = mysqli_fetch_row($rs)) {
      $idEnfrentamiento = trim($row[0]);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[1]')";
      mysqli_query($conexion,$consulta);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[2]')";
      mysqli_query($conexion,$consulta);
    }
    $enfrentamiento = "INSERT INTO enfrentamientos(NombreEnfrentamiento,Rondas_idRondas,Grupos_idGrupos) VALUES ('C','1','$id')";
    mysqli_query($conexion,$enfrentamiento);
    $rs = mysqli_query($conexion, "SELECT MAX(idEnfrentamiento) AS id FROM enfrentamientos");
    if ($row = mysqli_fetch_row($rs)) {
      $idEnfrentamiento = trim($row[0]);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[2]')";
      mysqli_query($conexion,$consulta);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[0]')";
      mysqli_query($conexion,$consulta);
    }
    break;
  case 4:
    $enfrentamiento = "INSERT INTO enfrentamientos(NombreEnfrentamiento,Rondas_idRondas,Grupos_idGrupos) VALUES ('A','1','$id')";
    mysqli_query($conexion,$enfrentamiento);
    $rs = mysqli_query($conexion, "SELECT MAX(idEnfrentamiento) AS id FROM enfrentamientos");
    if ($row = mysqli_fetch_row($rs)) {
      $idEnfrentamiento = trim($row[0]);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[0]')";
      mysqli_query($conexion,$consulta);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[1]')";
      mysqli_query($conexion,$consulta);
    }
    $enfrentamiento = "INSERT INTO enfrentamientos(NombreEnfrentamiento,Rondas_idRondas,Grupos_idGrupos) VALUES ('B','1','$id')";
    mysqli_query($conexion,$enfrentamiento);
    $rs = mysqli_query($conexion, "SELECT MAX(idEnfrentamiento) AS id FROM enfrentamientos");
    if ($row = mysqli_fetch_row($rs)) {
      $idEnfrentamiento = trim($row[0]);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[0]')";
      mysqli_query($conexion,$consulta);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[2]')";
      mysqli_query($conexion,$consulta);
    }
    $enfrentamiento = "INSERT INTO enfrentamientos(NombreEnfrentamiento,Rondas_idRondas,Grupos_idGrupos) VALUES ('C','1','$id')";
    mysqli_query($conexion,$enfrentamiento);
    $rs = mysqli_query($conexion, "SELECT MAX(idEnfrentamiento) AS id FROM enfrentamientos");
    if ($row = mysqli_fetch_row($rs)) {
      $idEnfrentamiento = trim($row[0]);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[0]')";
      mysqli_query($conexion,$consulta);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[3]')";
      mysqli_query($conexion,$consulta);
    }
    $enfrentamiento = "INSERT INTO enfrentamientos(NombreEnfrentamiento,Rondas_idRondas,Grupos_idGrupos) VALUES ('D','1','$id')";
    mysqli_query($conexion,$enfrentamiento);
    $rs = mysqli_query($conexion, "SELECT MAX(idEnfrentamiento) AS id FROM enfrentamientos");
    if ($row = mysqli_fetch_row($rs)) {
      $idEnfrentamiento = trim($row[0]);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[1]')";
      mysqli_query($conexion,$consulta);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[2]')";
      mysqli_query($conexion,$consulta);
    }
    $enfrentamiento = "INSERT INTO enfrentamientos(NombreEnfrentamiento,Rondas_idRondas,Grupos_idGrupos) VALUES ('E','1','$id')";
    mysqli_query($conexion,$enfrentamiento);
    $rs = mysqli_query($conexion, "SELECT MAX(idEnfrentamiento) AS id FROM enfrentamientos");
    if ($row = mysqli_fetch_row($rs)) {
      $idEnfrentamiento = trim($row[0]);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[1]')";
      mysqli_query($conexion,$consulta);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[3]')";
      mysqli_query($conexion,$consulta);
    }
    $enfrentamiento = "INSERT INTO enfrentamientos(NombreEnfrentamiento,Rondas_idRondas,Grupos_idGrupos) VALUES ('F','1','$id')";
    mysqli_query($conexion,$enfrentamiento);
    $rs = mysqli_query($conexion, "SELECT MAX(idEnfrentamiento) AS id FROM enfrentamientos");
    if ($row = mysqli_fetch_row($rs)) {
      $idEnfrentamiento = trim($row[0]);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[2]')";
      mysqli_query($conexion,$consulta);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[3]')";
      mysqli_query($conexion,$consulta);
    }
    break;
  case 5:
    $enfrentamiento = "INSERT INTO enfrentamientos(NombreEnfrentamiento,Rondas_idRondas,Grupos_idGrupos) VALUES ('A','1','$id')";
    mysqli_query($conexion,$enfrentamiento);
    $rs = mysqli_query($conexion, "SELECT MAX(idEnfrentamiento) AS id FROM enfrentamientos");
    if ($row = mysqli_fetch_row($rs)) {
      $idEnfrentamiento = trim($row[0]);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[0]')";
      mysqli_query($conexion,$consulta);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[1]')";
      mysqli_query($conexion,$consulta);
    }
    $enfrentamiento = "INSERT INTO enfrentamientos(NombreEnfrentamiento,Rondas_idRondas,Grupos_idGrupos) VALUES ('B','1','$id')";
    mysqli_query($conexion,$enfrentamiento);
    $rs = mysqli_query($conexion, "SELECT MAX(idEnfrentamiento) AS id FROM enfrentamientos");
    if ($row = mysqli_fetch_row($rs)) {
      $idEnfrentamiento = trim($row[0]);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[0]')";
      mysqli_query($conexion,$consulta);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[2]')";
      mysqli_query($conexion,$consulta);
    }
    $enfrentamiento = "INSERT INTO enfrentamientos(NombreEnfrentamiento,Rondas_idRondas,Grupos_idGrupos) VALUES ('C','1','$id')";
    mysqli_query($conexion,$enfrentamiento);
    $rs = mysqli_query($conexion, "SELECT MAX(idEnfrentamiento) AS id FROM enfrentamientos");
    if ($row = mysqli_fetch_row($rs)) {
      $idEnfrentamiento = trim($row[0]);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[0]')";
      mysqli_query($conexion,$consulta);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[3]')";
      mysqli_query($conexion,$consulta);
    }
    $enfrentamiento = "INSERT INTO enfrentamientos(NombreEnfrentamiento,Rondas_idRondas,Grupos_idGrupos) VALUES ('D','1','$id')";
    mysqli_query($conexion,$enfrentamiento);
    $rs = mysqli_query($conexion, "SELECT MAX(idEnfrentamiento) AS id FROM enfrentamientos");
    if ($row = mysqli_fetch_row($rs)) {
      $idEnfrentamiento = trim($row[0]);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[0]')";
      mysqli_query($conexion,$consulta);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[4]')";
      mysqli_query($conexion,$consulta);
    }
    $enfrentamiento = "INSERT INTO enfrentamientos(NombreEnfrentamiento,Rondas_idRondas,Grupos_idGrupos) VALUES ('E','1','$id')";
    mysqli_query($conexion,$enfrentamiento);
    $rs = mysqli_query($conexion, "SELECT MAX(idEnfrentamiento) AS id FROM enfrentamientos");
    if ($row = mysqli_fetch_row($rs)) {
      $idEnfrentamiento = trim($row[0]);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[1]')";
      mysqli_query($conexion,$consulta);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[2]')";
      mysqli_query($conexion,$consulta);
    }
    $enfrentamiento = "INSERT INTO enfrentamientos(NombreEnfrentamiento,Rondas_idRondas,Grupos_idGrupos) VALUES ('F','1','$id')";
    mysqli_query($conexion,$enfrentamiento);
    $rs = mysqli_query($conexion, "SELECT MAX(idEnfrentamiento) AS id FROM enfrentamientos");
    if ($row = mysqli_fetch_row($rs)) {
      $idEnfrentamiento = trim($row[0]);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[1]')";
      mysqli_query($conexion,$consulta);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[3]')";
      mysqli_query($conexion,$consulta);
    }
    $enfrentamiento = "INSERT INTO enfrentamientos(NombreEnfrentamiento,Rondas_idRondas,Grupos_idGrupos) VALUES ('G','1','$id')";
    mysqli_query($conexion,$enfrentamiento);
    $rs = mysqli_query($conexion, "SELECT MAX(idEnfrentamiento) AS id FROM enfrentamientos");
    if ($row = mysqli_fetch_row($rs)) {
      $idEnfrentamiento = trim($row[0]);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[1]')";
      mysqli_query($conexion,$consulta);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[4]')";
      mysqli_query($conexion,$consulta);
    }
    $enfrentamiento = "INSERT INTO enfrentamientos(NombreEnfrentamiento,Rondas_idRondas,Grupos_idGrupos) VALUES ('H','1','$id')";
    mysqli_query($conexion,$enfrentamiento);
    $rs = mysqli_query($conexion, "SELECT MAX(idEnfrentamiento) AS id FROM enfrentamientos");
    if ($row = mysqli_fetch_row($rs)) {
      $idEnfrentamiento = trim($row[0]);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[2]')";
      mysqli_query($conexion,$consulta);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[3]')";
      mysqli_query($conexion,$consulta);
    }
    $enfrentamiento = "INSERT INTO enfrentamientos(NombreEnfrentamiento,Rondas_idRondas,Grupos_idGrupos) VALUES ('I','1','$id')";
    mysqli_query($conexion,$enfrentamiento);
    $rs = mysqli_query($conexion, "SELECT MAX(idEnfrentamiento) AS id FROM enfrentamientos");
    if ($row = mysqli_fetch_row($rs)) {
      $idEnfrentamiento = trim($row[0]);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[2]')";
      mysqli_query($conexion,$consulta);
      $consulta =  "INSERT INTO enfrentamientos_equipos(Enfrentamientos_idEnfrentamientos,Equipos_idEquipo)
                      VALUES ('$idEnfrentamiento','$equipo[4]')";
      mysqli_query($conexion,$consulta);
    }
    break;
  

    default:
    # code...
    break;
}
desconectar($conexion);
header("Location: ../templates/grupo.php?id=$id");
?>

<!-- A|B|C|D|E
A VS B
A VS C
A VS D
A VS E
B VS C
B VS D
B VS E
C VS D
C VS E -->