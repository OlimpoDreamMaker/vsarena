<?php //2020-01-01 00:00:00
function estado($fechaInicio,$fechaFin){
  $hoy = getdate();
  $yearInicio = substr($fechaInicio,0,4);
  $mesInicio = substr($fechaInicio,5,2);
  $diaInicio = substr($fechaInicio,8,2);
  $horaInicio = substr($fechaInicio,11,2);
  $minInicio = substr($fechaInicio,14,2);
  $segInicio = substr($fechaInicio,17,2);
  $yearFin = substr($fechaFin,0,4);
  $mesFin = substr($fechaFin,5,2);
  $diaFin = substr($fechaFin,8,2);
  $horaFin = substr($fechaFin,11,2);
  $minFin = substr($fechaFin,14,2);
  $segFin = substr($fechaFin,17,2);
  $difMeses = $mesFin-$mesInicio;
  /*echo "<br>Año Inicio: $yearInicio";
  echo "<br>Mes Inicio: $mesInicio";
  echo "<br>Dia Inicio: $diaInicio";
  echo "<br>Hora Inicio: $horaInicio";
  echo "<br>Minuto Inicio: $minInicio";
  echo "<br>Segundo Inicio: $segInicio";
  var_dump($hoy);*/
  if(($hoy["year"]>=$yearInicio && $hoy["year"]<=$yearFin)||($hoy["year"]<=$yearInicio && $hoy["year"]<=$yearFin)){
    if($difMeses<0){
      if($hoy["mon"]<$mesInicio && $hoy["mon"]>$mesFin){
        return "En espera";
      }elseif($hoy["mon"]>=$mesInicio && $hoy["mon"]>$mesFin){//activo
        if($hoy["mon"]==$mesInicio){
          if($hoy["mday"]<$diaInicio){
            return "En espera";
          }else{
            return "Activo";
          }
        }else{
          return "Activo";
        }
      }elseif($hoy["mon"]<$mesInicio && $hoy["mon"]<=$mesFin){//activo
        if($hoy["mon"]==$mesFin){
          if($hoy["mday"]<=$diaFin){
            return "Activo";
          }else{
            return "En espera";
          }
        }else{
          return "Activo";
        }
      }elseif($hoy["mon"]<$mesInicio && $hoy["mon"]>$mesFin){
        return "Concluido";
      }
    }elseif($difMeses>0){
      if($hoy["mon"]<$mesInicio){
        return "En espera";
      }elseif($hoy["mon"]>=$mesInicio && $hoy["mon"]<=$mesFin){
        if($hoy["mon"]==$mesInicio){
          if($hoy["mday"]<$diaInicio){
            return "En espera";
          }else{
            return "Activo";
          }
        }elseif($hoy["mon"]==$mesFin){
          if($hoy["mday"]>$diaFin){
            return "Concluido";
          }else{
            return "Activo";
          }
        }else{
          return "Activo";
        }
      }elseif ($hoy["mon"]>$mesInicio && $hoy["mon"]>$mesFin) {
        return "Concluido";
      }
    }elseif($difMeses==0){
      if($hoy["mday"]<$diaInicio){
        return "En Espera";
      }elseif ($hoy["mday"]>$diaFin) {
        return "Concluido";
      }else{
        return "Activo";
      }
    }
  }elseif($hoy["year"]>=$yearInicio && $hoy["year"]>=$yearFin){
    return "Concluido";
  }else{
    return "Concluido";
  }
}
?>