<?php
$url = "https://vsarena.net/Dashboard";
$amigable = "https://vsarena.net";
$imagenes = "https://vsarena.net/imagenes";
$urlDB = "http://localhost/VSARENA/Dashboard";//Mientras use en local usar esta direccion
$urlFE = "http://localhost/VSARENA/FrontEnd";//Mientras use en local usar esta direccion
$urlBE = "http://localhost/VSARENA/BackEnd";//Mientras use en local usar esta direccion
$amigable = "http://localhost/VSARENA";//Mientras use en local usar esta direccion
$imagenes = "http://localhost/VSARENA/imagenes";//Mientras use en local usar esta direccion
//Conectar Base de Datos
function conectar(){
  $s = 'localhost'; //Servidor
  $u = 'u932243340_154152'; //Root
  $p = '123456789';//Password
  $d = 'root';//Base de Datos
  $u = 'root'; //Root
  $p = '';//Password
  $d = 'vsarena';//Base de Datos
  $con = mysqli_connect($s, $u, $p, $d);
  return $con;
}
//Desconectar Base de Datos
function desconectar($conexion){
  $desconectar = mysqli_close($conexion) or die("Ocurrio un error");
  return $desconectar;
}
?>