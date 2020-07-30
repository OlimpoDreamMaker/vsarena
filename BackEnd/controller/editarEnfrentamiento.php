<?php
require_once(__DIR__ . "/config.php");
session_start();

// Datos necesarios:
// METHOD -> POST
// idEnfrentamiento -> identificador del enfretamiento
// NombreEnfrentamiento -> nombre del enfretamiento
// Ganador -> Ganador de la ronda, puede ser null
// Rondas_IdRondas -> identificador de la ronda donde esta el enfretamiento
// Grupos_IdGrupos -> identificador del grupo donde esta el enfretamiento
// FechaEnfrentamiento -> fecha del enfretamiento

// Variables
$idEnfrentamiento = $_POST['idEnfrentamiento'];
$NombreEnfrentamiento = $_POST['NombreEnfrentamiento'];
$Ganador = $_POST['Ganador'];
$Rondas_IdRondas = $_POST['Rondas_IdRondas'];
$Grupos_IdGrupos = $_POST['Grupos_IdGrupos'];
$FechaEnfrentamiento = $_POST['FechaEnfrentamiento'];
// Conexion
$conexion = conectar();
// Query
$consulta = "INSERT INTO enfrentamientos(idEnfrentamiento,NombreEnfrentamiento,Ganador,Rondas_IdRondas,Grupos_IdGrupos,FechaEnfrentamiento)
                 VALUES ('$idEnfrentamiento', '$NombreEnfrentamiento', '$Ganador', '$Rondas_IdRondas', '$Grupos_IdGrupos', '$FechaEnfrentamiento')";
$rs = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
desconectar($conexion);
// Mapea el response en array
// Si se necesitan mas datos desde el frontend, agregar al response
$response = array(
    "seEdito" => $rs
);
// Parsea el array a un objeto json para poder manejarlo en el FrontEnd
echo json_encode($response);
return;

?>