<?php

$urlDB = "https://vsarena.net/Dashboard";
$urlBE = "https://vsarena.net/BackEnd";
$urlFE = "https://vsarena.net/FrontEnd";
$amigable = "https://vsarena.net";
$imagenes = "https://vsarena.net/imagenes";
// $urlDB = "http://localhost/VSARENA/Dashboard";//Mientras use en local usar esta direccion
// $urlFE = "http://localhost/VSARENA/FrontEnd"; //Mientras use en local usar esta direccion
// $urlBE = "http://localhost/VSARENA/BackEnd";//Mientras use en local usar esta direccion
// $amigable = "http://localhost/VSARENA";//Mientras use en local usar esta direccion
// $imagenes = "http://localhost/VSARENA/imagenes";//Mientras use en local usar esta direccion
//Redes
$facebook = "https://www.facebook.com/TorneosVSArena";
$twitch = "https://www.twitch.tv/vsarenatv";
$youtube = "https://www.youtube.com/channel/UCZVyunNGfuDfM5PChogFDtw";
$twitter = "https://www.youtube.com/channel/UCZVyunNGfuDfM5PChogFDtw";
$nimotv = "https://www.nimo.tv/live/1473663661";
$telefono = "+52 7711230678";
$correo = "vsarenatorneos@gmail.com";
//Conectar Base de Datos
function conectar()
{
  $s = 'localhost'; //Servidor
  $u = 'u932243340_154152'; //Root
  $p = '123456789'; //Password
  $d = 'u932243340_vsarena'; //Base de Datos
  $u = 'root'; //Root
  $p = ''; //Password
  $d = 'vsarena'; //Base de Datos
  $con = mysqli_connect($s, $u, $p, $d);
  return $con;
}
//Desconectar Base de Datos
function desconectar($conexion)
{
  $desconectar = mysqli_close($conexion) or die("Ocurrio un error");
  return $desconectar;
}
