<?php
//registrar Usuario
require_once("conexionBD.php");
$conexion = conectar();
$carpeta = "avatarUser";
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$email = $_POST['email'];
$avatar = $_FILES["avatar"]["name"];
$type = $_FILES["avatar"]["type"];
$origen = $_FILES["avatar"]["tmp_name"]; 
$destino = "../../$carpeta/$foto";
if($type=="image/jpeg" OR $type=="image/jpg" OR $type=="image/png" OR $type=="image/gif"){
  move_uploaded_file($origen, $destino);
  $consulta =  "INSERT INTO usuarios(usuarios,emailUsuario,passUsuario,avatarUsuario,saldoEfectivo,saldoMonVir,isAdmin,Cupones_idCupon,Equipos_idEquipos) 
                VALUES ('$usuario','$email','$password','$avatar','0','0','0','1','1')";
}else{
  $consulta =  "INSERT INTO usuarios(usuarios,emailUsuario,passUsuario,avatarUsuario,saldoEfectivo,saldoMonVir,isAdmin,Cupones_idCupon,Equipos_idEquipos) 
                VALUES ('$usuario','$email','$password',NULL,'0','0','0','1','1')";
}
mysqli_query($conexion, $consulta); 

desconectarBD($conexion);
?>