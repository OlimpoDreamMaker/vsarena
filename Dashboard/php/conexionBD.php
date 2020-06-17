<?php

  function conectar(){
    $s = 'localhost'; //Servidor
    $u = 'u932243340_154152'; //Root
    $p = '123456789';//Password
    $d = 'u932243340_vsarena';//Base de Datos
    $con = mysqli_connect($s, $u, $p, $d);
    return $con;
  }

  function desconectarBD($con){
    $desconectar = mysqli_close($con) or die("Ocurrio un error");
    return $desconectar;
  }

?>