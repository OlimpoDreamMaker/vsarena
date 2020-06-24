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
//Verificando Existencia de Usuario
function existeUsuario($conexion,$usuario){
  $consulta = "SELECT * FROM usuarios";
  $rs = mysqli_query($conexion, $consulta);
  while($fila = mysqli_fetch_assoc($rs)){
    if($fila['usuario'] == $usuario){
      return true;
    }
  }
  return false;
}
//Verificando Existencia de Email
function existeEmail($conexion,$email){
  $consulta = "SELECT * FROM usuarios";
  $rs = mysqli_query($conexion, $consulta);
  while($fila = mysqli_fetch_assoc($rs)){
    if($fila['emailUsuario'] == $email){
      return true;
    }
  }
  return false;
}
//Verificar IMG
function verificarImg($type){
  if($type=="image/jpeg" OR $type=="image/jpg" OR $type=="image/png" OR $type=="image/gif"){
    return true;
  }else{
    return false;
  }
}

//FUNCIONES PARA EL FRONT END
//Tags de las Noticias
function tagsNot($conexion, $id){
  $consulta = "SELECT * 
               FROM tags_has_noticias h, tags t 
               WHERE t.idTag=h.Tags_idTag
               AND h.Noticias_idNoticia='$id'";
  $rs = mysqli_query($conexion, $consulta);
  while($fila = mysqli_fetch_assoc($rs)){
    echo "<a href='#'>".$fila['tag']."</a>";
  }
}
//Comentarios de las Noticias
function comentariosNot($conexion,$id,$imagenes){
  $consulta = "SELECT * 
               FROM comentarios c, usuarios u, noregistrados n
               WHERE c.Noticias_idNoticia='$id'
               AND c.Usuarios_idUsuario=u.idUsuario
               AND c.NoRegistrados_idNoRegistrado=n.idNoRegistrado
               ORDER BY c.idComentario ASC";
  $rs = mysqli_query($conexion, $consulta);
  // var_dump(mysqli_fetch_assoc($rs));
  while($fila = mysqli_fetch_assoc($rs)){
    echo "<div class='comment-item'>";
      echo "<div class='avatar'>";
      if($fila['idUsuario']!=1 AND $fila['idNoRegistrado']==1 ){
        echo "<img src='$imagenes/avatarUser/".$fila['avatarUsuario']."' alt='user-avatar'>";
      }else{
        echo "<img src='$imagenes/avatarUser/pordefecto.png' alt='user-avatar'>";
      }
      echo "</div>";
      echo "<div class='info'>";
        echo "<div class='date'>";
        if($fila['idUsuario']!=1 AND $fila['idNoRegistrado']==0 ){
          echo "<a href='#'>".fechaTexto($fila['fechaComentario'])."</a> Por <a href='#'>".$fila['usuario']."</a>";
        }else{
          echo "<a href='#'>".fechaTexto($fila['fechaComentario'])."</a> Por <a href='#'>".$fila['nombreNoRegistrado']."</a>";
        }
        echo "</div>";
          echo "<p>";
          echo $fila['contenidoComentario'];
          echo "</p>";
          //echo "<a href='#' class='reply'>Responder</a>";
      echo "</div>";
    echo "</div>";
  }
}
//Cantidad Comentarios de las Noticias
function cantidadComenNoticias($conexion,$noticia){
  $consulta = "SELECT * FROM comentarios WHERE Noticias_idNoticia='$noticia'";
  $resultado = mysqli_query($conexion, $consulta);
  return mysqli_num_rows($resultado);
}
//Fecha a texto 
function fechaTexto($fecha){
  $year = trim(substr($fecha,0,4));
  $month = trim(substr($fecha,5,2));
  $day = trim(substr($fecha,8,strlen($fecha)));
  switch ($month) {
    case '1':
      $mes = "Ene";
      break;
    case '2':
      $mes = "Feb";
      break;
    case '3':
      $mes = "Mar";
      break;
    case '4':
      $mes = "Abr";
      break;
    case '5':
      $mes = "May";
      break;
    case '6':
      $mes = "Jun";
      break;
    case '7':
      $mes = "Jul";
      break;
    case '8':
      $mes = "Ago";
      break;
    case '9':
      $mes = "Sep";
      break;
    case '10':
      $mes = "Oct";
      break;
    case '11':
      $mes = "Nov";
      break;
    default:
      $mes = $month;
      break;
  }
  return "$day $mes $year";
}
//Fecha HOY
function fechaHoy(){
  $hoy = date("Y-m-d"); 
  return trim($hoy);
}
?>