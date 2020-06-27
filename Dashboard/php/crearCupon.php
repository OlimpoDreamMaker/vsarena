<?php
  require_once("../../BackeEnd/config.php");
  require_once("../../BackeEnd/funciones.php");
  $conexion = conectar(); 

  $cupon = $_POST['nombreCupon'];
  $porcentajeDescuento = $_POST['porcentajeDescuento'];
  $fecha = $_POST['fechaCupon'];
  $fechaInicio = primeraFecha($fecha);
  $fechaFin = segundaFecha($fecha);
  $consulta = "INSERT INTO Cupones(nombreCupon,porcentajeDescuento,inicioCupon,finCupon) VALUES ('$cupon','$porcentajeDescuento', '$fechaInicio', '$fechaFin')";
  
  mysqli_query($conexion, $consulta);   
  
  $desconectar = desconectar($conexion);
  header("Location: $amigable/panel/tienda/");
  
?>