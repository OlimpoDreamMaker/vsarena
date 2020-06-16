<?php
  require_once("conexionBD.php");
  require_once("tomarFecha.php");
  $conexion = conectar(); 
  $idCupon = $_GET['id'];
  $selec = "SELECT * FROM cupones WHERE idCupon='$idCupon'";
  $resultado = mysqli_query($conexion,$selec);
  $fila = mysqli_fetch_assoc($resultado);
  if(isset($_POST['cupon'])){
    $cupon = $_POST['cupon'];
  }else{
    $cupon = $fila['nombreCupon'];
  }
  if(isset($_POST['fechaCupon'])){
    $fecha = $_POST['fechaCupon'];
    $primeraFecha = primeraFecha($fecha);
    $segundaFecha = segundaFecha($fecha);
  }else{
    $primeraFecha = $fila['inicioCupon'];
    $segundaFecha = $fila['finCupon'];
  }
  if(isset($_POST['porcentajeDescuento'])){
    $porcentajeDescuento = $_POST['porcentajeDescuento'];
  }else{
    $porcentajeDescuento = $fila['porcentajeDescuento'];
  }

  $consulta = "UPDATE cupones SET 
                  nombreCupon='$cupon', 
                  porcentajeDescuento='$porcentajeDescuento',
                  inicioCupon='$primeraFecha',
                  finCupon='$segundaFecha'
                  WHERE idCupon='$idCupon";
  mysqli_query($conexion,$consulta);

  $desconectar = desconectarBD($conexion);
  header("Location:../templates/cupon.php?id=$idCupon");
  //Mostrar Alerta de Juego modificado

?>