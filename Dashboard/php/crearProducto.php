<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 

  $carpeta = "imgProductos";
  $producto = $_POST['nombreProducto'];
  $stock = $_POST['stockProducto'];
  $precioEfectivo = $_POST['precioProductoEfectivo'];
  $precioMonVirtual = $_POST['precioProductoMonVirtual'];
  $descripcion = $_POST['descripcionProducto'];
  $foto = $_FILES["foto"]["name"];
  $type = $_FILES["foto"]["type"];
  $origen = $_FILES["foto"]["tmp_name"]; 
  $destino = "../../$carpeta/$foto";
  if($type=="image/jpeg" OR $type=="image/jpg" OR $type=="image/png" OR type=="image/gif"){
    move_uploaded_file($origen, $destino);
    $consulta = "INSERT INTO productos(producto,precioEfectivo,precioMonVirtual,stock,descripcion,imgProducto, Cupones_idCupones) VALUES ('$producto', '$precioEfectivo', '$precioMonVirtual','$stock', '$descripcion', '$foto', '1')";
  }else{
    $consulta = "INSERT INTO productos(producto,precioEfectivo,precioMonVirtual,stock,descripcion,Cupones_idCupones) VALUES ('$producto', '$precioEfectivo', '$precioMonVirtual','$stock', '$descripcion', '1')";
  }
  echo "<hr/>$consulta<hr/>";

  mysqli_query($conexion, $consulta);   
  
  $desconectar = desconectarBD($conexion);
  header("Location:../templates/tienda.php");
  
?>