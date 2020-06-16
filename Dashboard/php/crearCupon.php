<?php
  require_once("conexionBD.php");
  require_once("tomarFecha.php");
  $conexion = conectar(); 

  $cupon = $_POST['nombreCupon'];
  $porcentajeDescuento = $_POST['porcentajeDescuento'];
  $fecha = $_POST['fechaCupon'];
  $fechaInicio = primeraFecha($fecha);
  $fechaFin = segundaFecha($fecha);
  $consulta = "INSERT INTO Cupones(nombreCupon,porcentajeDescuento,inicioCupon,finCupon) VALUES ('$cupon','$porcentajeDescuento', '$fechaInicio', '$fechaFin')";
  
  mysqli_query($conexion, $consulta);   
  
  $desconectar = desconectarBD($conexion);
  header("Location: ../templates/tienda.php");
  
?>