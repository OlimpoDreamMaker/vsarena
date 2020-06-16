<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 


  //Este id se lo tomara se SESSION 
  $idUsuario = $idUsuario;


  //$productos seran los productos que se fue agregando aal carrito
  $productos = array();
  //$id es el id de producto que se quiere comprar
  //$cant es la cantidad que se quiere comprar del mismo producto
  //$cantTotal es la cantidad Total de productos
  //$total es el total gastado
  //$cantAux es la cantidad de productos al venderse $cant productos

  $cantTotal = 0;
  $cantAux = 0;
  //En este ciclo contamos los productos comprados y el valor total de la compra
  foreach ($productos as $id => $cant) {
    $consulta = "SELECT * FROM Productos WHERE idProductos='$id'";
    $resultado = mysqli_query($conexion, $consulta);
    $fila = mysqli_fetch_assoc($resultado);
    $total = $total + ($cant * $fila['precio']);
    $cantTotal += $cant;
    $cantAux = $fila['stock'] - $cant;
    $consulta = "UPDATE Productos SET stock='$cantAux' WHERE idProductos='$id'";
    $resultado = mysqli_query($conexion, $consulta);
    $cantAux = 0;
  }

  //Creo la Venta
  $consulta = "INSERT INTO Ventas(Usuarios_idUsuarios, cantidadProductos, precioTotal) VALUES ('$idUsuario', '$cantTotal', '$total')";
  mysqli_query($conexion, $consulta);   
  $idVenta = ""; //Buscar function para obtener el ultimo ID

  //En este ciclo unimos los productos comprados, la cantidad de productos y el total de la compra a la tabla detalles de venta
  foreach ($productos as $id => $cant) {
    $consulta = "INSERT INTO DetallesVenta(Productos_idProducto, Ventas_idVenta) VALUES ('$id', '$idVenta')";
    mysqli_query($conexion, $consulta);   
  }

  $desconectar = desconectarBD($conexion);
  
?>