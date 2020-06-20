<?php
//Funciones

//Funciones Cantidad Compras Usuario
function cantidadComprasUsuario($conexion,$id){
  $consulta =  "SELECT * FROM ventas v
                WHERE Usuarios_idUsuario='$id'";
  $resultado = mysqli_query($conexion, $consulta);
  return mysqli_num_rows($resultado);
}
//Funciones Cantidad Cupones Totales
function cantidadCupones($conexion){
  $consulta = "SELECT * FROM cupones";
  $resultado = mysqli_query($conexion, $consulta);
  return mysqli_num_rows($resultado)-1;
}
//Funciones Cantidad Juegos Totales
function cantidadJuegos($conexion){
  $consulta = "SELECT * FROM juegos";
  $resultado = mysqli_query($conexion, $consulta);
  return mysqli_num_rows($resultado)-1;
}
//Funciones Cantidad Inscriptos Torneo
function cantidadInscriptosTorneo($conexion,$id,$equipoIndividual){
  if($equipoIndividual == "Equipo"){
    $consulta = "SELECT * FROM equipos_has_torneos WHERE Torneos_idTorneo='$id'";
  }else{
    $consulta = "SELECT * FROM torneos_has_usuarios WHERE Torneos_idTorneo='$id'";
  }
  $resultado = mysqli_query($conexion, $consulta);
  return mysqli_num_rows($resultado);
}
//Funciones Cantidad Noticias
function cantidadNoticias($conexion){
  $consulta = "SELECT * FROM noticias";
  $resultado = mysqli_query($conexion, $consulta);
  return mysqli_num_rows($resultado);
}
//Funciones Cantidad Productos
function cantidadProductos($conexion){
  $consulta = "SELECT * FROM productos";
  $resultado = mysqli_query($conexion, $consulta);
  return mysqli_num_rows($resultado);
}
//Funciones Cantidad Torneos
function cantidadTorneos($conexion){
  $consulta = "SELECT * FROM torneos";
  $resultado = mysqli_query($conexion, $consulta);
  return mysqli_num_rows($resultado);
}
//Funciones Cantidad Torneos Activos
function cantidadTorneosActivos($conexion){
  $consulta = "SELECT * FROM torneos WHERE estado='Activo'";
  $resultado = mysqli_query($conexion, $consulta);
  return mysqli_num_rows($resultado);
}
//Funciones Cantidad Torneos Cancelados
function cantidadTorneosCancelados($conexion){
  $consulta = "SELECT * FROM torneos WHERE estado='Cancelado'";
  $resultado = mysqli_query($conexion, $consulta);
  return mysqli_num_rows($resultado);
}
//Funciones Cantidad Torneos Concluidos
function cantidadTorneosConcluidos($conexion){
  $consulta = "SELECT * FROM torneos WHERE estado='Concluido'";
  $resultado = mysqli_query($conexion, $consulta);
  return mysqli_num_rows($resultado);
}
//Funciones Cantidad Usuarios Registrados
function cantidadUsuarios($conexion){
  $consulta = "SELECT * FROM usuarios";
  $resultado = mysqli_query($conexion, $consulta);
  return mysqli_num_rows($resultado);
}
//Funciones Cantidad Ventas
function cantidadVentas($conexion){
  $consulta = "SELECT * FROM ventas";
  $resultado = mysqli_query($conexion, $consulta);
  return mysqli_num_rows($resultado);
}
//Funcion IsAdmin
function isAdmin($conexion,$id){
  $consulta = "SELECT * FROM usuarios WHERE idUsuario='$id'";
  $resultado = mysqli_query($conexion, $consulta);
  $user = mysqli_fetch_assoc($resultado);
  if($user['isAdmin'] ==  1){
    return true;
  }else{
    return false;
  }
}
//Primera Fecha
function primeraFecha($fecha){
  $indiceGuion = strpos($fecha, "-");
  $longitudFecha = strlen($fecha);
  $fechaNew = trim(substr($fecha, 0, $indiceGuion-1));
  $fechaNew = trim(str_replace("/","-",$fechaNew));
  return $fechaNew;
}
//Segunda Fecha
function segundaFecha($fecha){
  $indiceGuion = strpos($fecha, "-");
  $longitudFecha = strlen($fecha);
  $fechaNew = trim(substr($fecha, $indiceGuion + 1, $longitudFecha));
  $fechaNew = trim(str_replace("/","-",$fechaNew));
  return $fechaNew;
}
//Solo Fecha
function soloFecha($fecha){
  $longitudFecha = strlen($fecha);
  $fechaNew = trim(substr($fecha, 0, 10));
  $fechaNew = trim(str_replace("/","-",$fechaNew));
  return $fechaNew;
}
//Datos de un usuario
function dataUser($conexion, $id){
  $consulta = "SELECT * FROM usuarios WHERE idUsuario='$id'";
  $resultado = mysqli_query($conexion,$consulta);
  $data = mysqli_fetch_assoc($resultado);
  $user = array("usuario" => $data['usuario'],
                "email"=>$data['emailUsuario'],
                "avatar"=>$data['avatarUsuario'],
                "saldoEfectivo"=>$data['saldoEfectivo'],
                "saldoMonVir"=>$data['saldoMonVir']);
  // var_dump($user);
  return $user;
}
//Cerrar Sesion
function logout(){
  session_start();
  session_destroy();
  header("Location: ../index.php");//Enviar a pagina principal
}
//Ingresos Totales
function ingresosTotales($conexion){
  $total = 0;
  $consulta = "SELECT * FROM ventas";
  if($resultado = mysqli_query($conexion, $consulta)){
    while($fila = mysqli_fetch_assoc($resultado)){
      $total += $fila['totalVenta'];
    }
  }
  return $total;
}
?>