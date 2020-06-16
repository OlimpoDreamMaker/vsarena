<?php

  function conectar(){
    $s = 'localhost'; //Servidor
    $u = 'root'; //Root
    $p = '';//Password
    $d = 'vsarena';//Base de Datos
    $con = mysqli_connect($s, $u, $p, $d);
    return $con;
  }

  function desconectarBD($con){
    $desconectar = mysqli_close($con) or die("Ocurrio un error");
    return $desconectar;
  }

?>