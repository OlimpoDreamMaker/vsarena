<?php

  function primeraFecha($fecha){
    $indiceGuion = strpos($fecha, "-");
    $longitudFecha = strlen($fecha);
    $fechaNew = trim(substr($fecha, 0, $indiceGuion-1));
    $fechaNew = trim(str_replace("/","-",$fechaNew));
    return $fechaNew;
  }
  function segundaFecha($fecha){
    $indiceGuion = strpos($fecha, "-");
    $longitudFecha = strlen($fecha);
    $fechaNew = trim(substr($fecha, $indiceGuion + 1, $longitudFecha));
    $fechaNew = trim(str_replace("/","-",$fechaNew));
    return $fechaNew;
  }
  function soloFecha($fecha){
    $longitudFecha = strlen($fecha);
    $fechaNew = trim(substr($fecha, 0, 10));
    $fechaNew = trim(str_replace("/","-",$fechaNew));
    return $fechaNew;
  }

?>