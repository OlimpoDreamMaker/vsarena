<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 
  $idProducto= $_GET['id'];
  $carpeta = "imgProductos";
  $consulta = "SELECT * FROM productos WHERE idProducto='$idProducto'";
  $resultado = mysqli_query($conexion,$consulta);
  $fila = mysqli_fetch_assoc($resultado);
  if(isset($_POST['nombreProducto'])){
    $nombre = $_POST['nombreProducto'];
  }else{
    $nombre = $fila['producto'];
  }
  if(isset($_POST['stockProducto'])){
    $stock = $_POST['stockProducto'];
  }else{
    $stock = $fila['stock'];
  }
  if(isset($_POST['precioProductoEfectivo'])){
    $precioEfectivo = $_POST['precioProductoEfectivo'];
  }else{
    $precioEfectivo = $fila['precioEfectivo'];
  }
  if(isset($_POST['precioProductoMonVirtual'])){
    $precioMonVitural = $_POST['precioProductoMonVirtual'];
  }else{
    $precioMonVitural = $fila['precioMonVitural'];
  }
  if(isset($_POST['descripcionProducto'])){
    $descripcion = $_POST['descripcionProducto'];
  }else{
    $descripcion = $fila['descripcion'];
  }
  if(isset($_FILES['foto']['name'])){
    $imgProducto = $_FILES['foto']['name'];
    $type = $_FILES["foto"]["type"];
    $origen = $_FILES["foto"]["tmp_name"]; 
    $destino = "../../$carpeta/$foto";
    if($type=="image/jpeg" OR $type=="image/jpg" OR $type=="image/png" OR type=="image/gif"){
      move_uploaded_file($origen, $destino);
      $consulta = "UPDATE productos SET 
                  producto='$nombre', 
                  descripcion='$descripcion',
                  imgProducto='$imgProducto',
                  precioEfectivo='$precioEfectivo',
                  precioMonVirutal='$precioMonVitural',
                  stock='$stock'
                  WHERE idProducto='$idProducto";
    }else{
      $consulta = "UPDATE productos SET 
                  producto='$nombre', 
                  descripcion='$descripcion',
                  precioEfectivo='$precioEfectivo',
                  precioMonVirutal='$precioMonVitural',
                  stock='$stock'
                  WHERE idProducto='$idProducto";
    }
  }else{
    $consulta = "UPDATE productos SET 
                  producto='$nombre', 
                  descripcion='$descripcion',
                  precioEfectivo='$precioEfectivo',
                  precioMonVirutal='$precioMonVitural',
                  stock='$stock'
                  WHERE idProducto='$idProducto";
  }

  mysqli_query($conexion,$consulta);

  $desconectar = desconectarBD($conexion);
  header("Location:../templates/producto.php?id=$idProducto");
  //Mostrar Alerta de producto modificado

?>