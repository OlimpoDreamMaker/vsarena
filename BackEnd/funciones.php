<?php
require_once(__DIR__."/config.php");
//Funciones
session_start();
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
//Noticia destacada
function noticiaDestacada($conexion){
  $consulta = "SELECT * FROM noticias";
  $rs = mysqli_query($conexion, $consulta);
  $idMax = 0;
  $comentariosMax = 0;
  while($fila = mysqli_fetch_assoc($rs)){
    if($comentariosMax<cantidadComenNoticias($conexion,$fila['idNoticia']) AND $fila['idNoticia']!=1){
      $idMax=$fila['idNoticia'];
      $comentariosMax = cantidadComenNoticias($conexion, $fila['idNoticia']);
    }
  }
  return $idMax;
}
//Noticias Resumidas
function noticiasFE($conexion,$amigable,$imagenes,$id,$pagina){
  $consulta = paginadorNoticias($conexion,$pagina);
  $rs = mysqli_query($conexion, $consulta);
  while($fila = mysqli_fetch_assoc($rs)){
    if($fila['idNoticia']==$id){
      continue;
    }
    echo "<!--ARTICULO-->";
    echo "<div class='item'>";
      echo "<div class='info'>";
        echo "<a href='$amigable/articulo/".$fila['idNoticia']."/' class='name'>".$fila['tituloNoticia']."</a>";
        echo "<div class='wrap'>";
          echo "<a href='#'>".fechaTexto($fila['fechaNoticia'])."</a> Por <a href='$amigable/perfil/".$fila['idUsuario']."/'>".$fila['usuario']."</a>";
        echo "</div>";
        echo "<div class='comment-quantity'>";
        echo cantidadComenNoticias($conexion,$fila['idNoticia'])." comentarios";
        echo "</div>";
        echo "<br/>";
        echo "<div class='img-wrap'>";
          echo "<img src='$imagenes/imgNoticias/".$fila['imgNoticia']."' />";
        echo "</div>";
        echo "<div class='clear'></div>";
        echo "<p>";
        if(strlen($fila['contenidoNoticia'])>500){
          echo substr($fila['contenidoNoticia'], 0, 500);
        }else{
          echo $fila['contenidoNoticia'];
        }
        echo "</p>";
        echo "<a href='$amigable/articulo/".$fila['idNoticia']."/' class='read-more'>Leer Mas</a>";
      echo "</div>";
    echo "</div>";
  }

}
//Tags de la Noticia
function tagsNot($conexion, $id,$amigable){
  $consulta = "SELECT * 
               FROM tags_has_noticias h, tags t 
               WHERE t.idTag=h.Tags_idTag
               AND h.Noticias_idNoticia='$id'";
  $rs = mysqli_query($conexion, $consulta);
  while($fila = mysqli_fetch_assoc($rs)){
    if(strpos($fila['tag'], " ")===false){ 
      $urlTag = $fila['tag'];
    }else{
      $urlTag = str_replace(' ', '-', $fila['tag']);
    }
    echo "<a href='$amigable/buscar/$urlTag/'>".$fila['tag']."</a>";
  }
}
//Tags de las Noticias
function tagsNots($conexion,$amigable){
  $consulta = "SELECT * FROM tags";
  $rs = mysqli_query($conexion,$consulta);
  while($fila = mysqli_fetch_assoc($rs)){
    if(strpos($fila['tag'], " ")===false){ 
      $urlTag = $fila['tag'];
    }else{
      $urlTag = str_replace(' ', '-', $fila['tag']);
    }
    echo "<a href='$amigable/buscar/$urlTag/'>".$fila['tag']."</a>";
  }
}
//Comentarios de las Noticias
function comentariosNot($conexion,$id,$imagenes){
  $consulta = "SELECT * 
               FROM comentarios c, usuarios u
               WHERE c.Noticias_idNoticia='$id'
               AND c.Usuarios_idUsuario=u.idUsuario
               ORDER BY c.idComentario ASC";
  // $consulta = "SELECT * 
  //              FROM comentarios c, usuarios u, noregistrados n
  //              WHERE c.Noticias_idNoticia='$id'
  //              AND c.Usuarios_idUsuario=u.idUsuario
  //              AND c.NoRegistrados_idNoRegistrado=n.idNoRegistrado
  //              ORDER BY c.idComentario ASC";
  $rs = mysqli_query($conexion, $consulta);
  // var_dump(mysqli_fetch_assoc($rs));
  if ($rs) {
    while ($fila = mysqli_fetch_assoc($rs)) {
      echo "<div class='comment-item'>";
      echo "<div class='avatar'>";
      if ($fila['idUsuario'] != 1) {
        echo "<img src='$imagenes/avatarUser/" . $fila['avatarUsuario'] . "' alt='user-avatar'>";
      } else {
        echo "<img src='$imagenes/avatarUser/pordefecto.png' alt='user-avatar'>";
      }
      echo "</div>";
      echo "<div class='info'>";
      echo "<div class='date'>";
      if ($fila['idUsuario'] != 1) {
        echo "<a href='#'>" . fechaTexto($fila['fechaComentario']) . "</a> Por <a href='#'>" . $fila['usuario'] . "</a>";
      } else {
        echo "<a href='#'>" . fechaTexto($fila['fechaComentario']) . "</a> Por <a href='#'>" . "Anonimo" . "</a>";
      }
      echo "</div>";
      echo "<p>";
      echo $fila['contenidoComentario'];
      echo "</p>";
      echo "<a id='".$fila['idComentario']."' class='reply'>Responder</a>";
      echo "</div>";
      echo "</div>";
      $idComentario = $fila['idComentario'];
      $consultaComentarios = "SELECT * 
               FROM comentarios_de_comentarios c, usuarios u
               WHERE c.Comentarios_idComentario='$idComentario'
               AND c.Usuarios_idUsuario=u.idUsuario
               ORDER BY c.idComentario ASC";
      $rsComentarios = mysqli_query($conexion, $consultaComentarios);
      while ($filaComentarios = mysqli_fetch_assoc($rsComentarios)) {
        $nombre = "Anonimo";
        $imagen = "pordefecto.png";
        if ($filaComentarios['idUsuario'] != 1) {
          $nombre = $filaComentarios['usuario'];
          $imagen = $filaComentarios['avatarUsuario'];
        }
        echo '<div class="comment-item answer">
                                    <div class="avatar"><img src="'.$imagenes.'/avatarUser/' . $imagen .'" alt="user-avatar"></div>
                                    <div class="info">
                                        <div class="date">
                                            <a href="#">'. fechaTexto($filaComentarios['fechaComentario']).'</a> Por <a href="#">'. $nombre .'</a>
                                            <a href="#" class="quote">#</a>
                                        </div>
                                        <p>'. $filaComentarios['contenidoComentario'].'</p>
                                        <a href="#" class="reply">Responder</a>
                                    </div>
                                </div>';
      }
    }
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

//BUSQUEDAS FRONT END
//Buscar Noticas
function buscarNoticias($conexion, $buscar, $amigable, $imagenes){
  $consulta = "SELECT * 
               FROM noticias n, usuarios u, tags t, tags_has_noticias h 
               WHERE (n.tituloNoticia LIKE '%$buscar%' 
               OR n.contenidoNoticia LIKE '%$buscar%'
               OR n.fechaNoticia LIKE '%$buscar%'
               OR u.usuario LIKE '%$buscar%'
               OR t.tag LIKE '%$buscar%')
               AND (u.idUsuario=n.Usuarios_idUsuario)
               AND (n.idNoticia=h.Noticias_idNoticia)
               AND (h.Tags_idTag=t.idTag)";
  $rs = mysqli_query($conexion, $consulta);
  while($fila = mysqli_fetch_assoc($rs)){
    $idNoticia = $fila['idNoticia'];
    $idUsuario = $fila['idUsuario'];
    // $titulo = $fila['tituloNoticia'];
    // $contenido = $fila['contenidoNoticia'];
    // $fecha = $fila['fechaNoticia'];
    // $usuario = $fila['usuario'];
    if(strpos($fila['tituloNoticia'], $buscar) !== false){
      $titulo = str_replace($buscar, "<span>$buscar</span>", $fila['tituloNoticia']);
    }else{
      $titulo = $fila['tituloNoticia'];
    }
    if(strpos($fila['contenidoNoticia'], $buscar) !== false){
      $contenido = str_replace($buscar, "<span>$buscar</span>", $fila['contenidoNoticia']);
    }else{
      $contenido = $fila['contenidoNoticia'];
    }
    if(strpos($fila['fechaNoticia'], $buscar) !== false){
      $fecha = str_replace($buscar, "<span>$buscar</span>", $fila['fechaNoticia']);
    }else{
      $fecha = $fila['fechaNoticia'];
    }
    if(strpos($fila['usuario'], $buscar) !== false){
      $usuario = str_replace($buscar, "<span>$buscar</span>", $fila['usuario']);
    }else{
      $usuario = $fila['usuario'];
    }
    echo "<!--ELEMENTO START-->";
    echo "<div class='search-item'>";
      echo "<div class='row'>";
        echo "<div class='col-md-4'>";
          echo "<div class='image'>";
            echo "<img class='img-responsive' src='$imagenes/imgNoticias/".$fila['imgNoticia']."' alt='imagen $titulo' />";
          echo "</div>";
        echo "</div>";
        echo "<div class='col-md-8'>";
          echo "<div class='info'>";
            echo "<a href='$amigable/articulo/$idNoticia/' class='name'>$titulo";
            echo "<div class='wrap'>";
              echo "<a href='#'>".fechaTexto($fila['fechaNoticia'])."</a> Por <a href='$amigable/perfil/$idUsuario/'>$usuario</a>";
            echo "</div><div>";
            if(strlen($contenido)>250){
              echo substr($contenido, 0, 250);
            }else{
              echo $contenido;
            }
            echo "</div><a href='$amigable/articulo/$idNoticia/' class='read-more'>Leer Mas</a>";
          echo "</div>";
        echo "</div>";
      echo "</div>";
    echo "</div>";
    echo "<!--ELEMENTO END-->";
  }

}
//Paginador Noticias
function paginadorNoticias($conexion,$pagina){
  $consulta = "SELECT COUNT(*) AS total_registro FROM noticias ";
  $sql_registe = mysqli_query($conexion,$consulta);
  $result_register = mysqli_fetch_array($sql_registe);
  $total_registro = $result_register['total_registro'];

  $por_pagina = 5;

  $desde = ($pagina-1) * $por_pagina;
  if($total_registro>$por_pagina){
    $total_paginas = ceil($total_registro / $por_pagina);
  }else{
    $total_paginas = $total_registro;
  }
  

  return "SELECT * FROM usuarios u, noticias n
          WHERE n.Usuarios_idUsuario=u.idUsuario
          LIMIT $desde,$total_paginas";

}
//Paginador 
function paginador($conexion,$pagina,$amigable,$where,$like){
  if($where!='' OR $where!="NULL"){
    $consulta = "SELECT COUNT(*) AS total_registro FROM noticias WHERE '$where'";
  }elseif ($like!='' OR $like!="NULL") {
    $consulta = "SELECT COUNT(*) AS total_registro FROM noticias n, usuarios u
               WHERE (n.tituloNoticia LIKE '%$like%' 
               OR n.contenidoNoticia LIKE '%$like%'
               OR n.fechaNoticia LIKE '%$like%'
               OR u.usuario LIKE '%$like%')
               AND u.idUsuario=n.Usuarios_idUsuario";
  }elseif (($where!='' OR $where!="NULL") AND ($like!='' OR $like!="NULL")){
    $consulta = "SELECT COUNT(*) AS total_registro FROM noticias n, usuarios u
               WHERE (n.tituloNoticia LIKE '%$like%' 
               OR n.contenidoNoticia LIKE '%$like%'
               OR n.fechaNoticia LIKE '%$like%'
               OR u.usuario LIKE '%$like%')
               AND (u.idUsuario=n.Usuarios_idUsuario)
               AND ".$where;
  }else{
    $consulta = "SELECT COUNT(*) AS total_registro FROM noticias ";
  }
  $sql_registe = mysqli_query($conexion,$consulta);
  $result_register = mysqli_fetch_array($sql_registe);
  $total_registro = $result_register['total_registro'];
  $por_pagina = 5;
  $total_paginas = ceil($total_registro / $por_pagina);
  if($total_registro>$por_pagina){
    if($pagina != 1){
      echo "<li>";
        echo "<a href='$amigable/noticia/".($pagina-1)."/'><i class='fa fa-chevron-left' aria-hidden='true'></i>";
        echo "</a>";
      echo "</li>";
    }else{
      echo "<li>";
        echo "<a href='#' class='disabled'><i class='fa fa-chevron-left' aria-hidden='true'></i>";
        echo "</a>";
      echo "</li>";
    }
    for($i=0;$i<$total_paginas;$i++){
      if($pagina==$i){
      echo "<li class='active'>";  
      }else{
      echo "<li>";    
      }
        echo "<a href='$amigable/noticias/$i/'>$i</a>";
      echo "</li>";
    }
    if($pagina != ($total_paginas-1)){
      echo "<li>";
        echo "<a href='$amigable/noticia/".($pagina+1)."/'><i class='fa fa-chevron-right' aria-hidden='true'></i>";
        echo "</a>";
      echo "</li>";
    }else{
      echo "<li>";
        echo "<a href='#' class='disabled'><i class='fa fa-chevron-right' aria-hidden='true'></i>";
        echo "</a>";
      echo "</li>";
    }
  }else{
    echo "<li class='disabled'>";
      echo "<a href='#'><i class='fa fa-chevron-left' aria-hidden='true'></i>";
      echo "</a>";
    echo "</li>";
    echo "<li class='active'>";
      echo "<a href='$amigable/noticias'>1</a>";
    echo "</li>";
    echo "<li class='disabled'>";
      echo "<a href='#' class='disabled'><i class='fa fa-chevron-right' aria-hidden='true'></i>";
      echo "</a>";
    echo "</li>";
  }
}

//Irvana
function noticiasPorFecha ($fechaInicio, $fechaFinal) {
  $fechaInicio = soloFecha($fechaInicio);
  $fechaFinal = soloFecha($fechaFinal);
  $conexion = conectar();
  $query = "SELECT * FROM noticias n, usuarios u WHERE (u.idUsuario = n.Usuarios_idUsuario) AND n.fechaNoticia BETWEEN ('$fechaInicio') AND ('$fechaFinal')";
  $rs = mysqli_query($conexion, $query);
  desconectar($conexion);
  return $rs;
}

function findLemaByUsuario ($idUsuario) {
  $lema = "SELECT * FROM usuarios WHERE idUsuario=$idUsuario";
  $conexion = conectar();
  $rs = mysqli_query($conexion, $lema);
  $fila = mysqli_fetch_assoc($rs);
  desconectar($conexion);
  return $fila['lema'];
}

function modificarLemaByUsuario ($idUsuario, $nuevoLema) {
  //$lema = "UPDATE usuarios SET lema = $nuevoLema WHERE idUsuario=$idUsuario";
  $lema = "UPDATE usuarios SET lema = '$nuevoLema' WHERE idUsuario = $idUsuario";
  $conexion = conectar();
  $rs = mysqli_query($conexion, $lema);
  desconectar($conexion);
  return $rs;
}

function imprimirNoticiaPorFecha ($rs){
  global $amigable;
  global $imagenes;
  while($fila = mysqli_fetch_assoc($rs)) {
    $contenido = $fila['contenidoNoticia'];
    $idNoticia = $fila['idNoticia'];
    $idUsuario = $fila['Usuarios_idUsuario'];
    $usuario = $fila['usuario'];
    $titulo = $fila['tituloNoticia'];
    echo "<!--ELEMENTO START-->";
    echo "<div class='search-item'>";
      echo "<div class='row'>";
        echo "<div class='col-md-4'>";
          echo "<div class='image'>";
            echo "<img class='img-responsive' src='$imagenes/imgNoticias/".$fila['imgNoticia']."' alt='imagen $titulo' />";
          echo "</div>";
        echo "</div>";
        echo "<div class='col-md-8'>";
          echo "<div class='info'>";
            echo "<a href='$amigable/articulo/$idNoticia/' class='name'>$titulo";
            echo "<div class='wrap'>";
              echo "<a href='#'>".fechaTexto($fila['fechaNoticia'])."</a> Por <a href='$amigable/perfil/$idUsuario/'>$usuario</a>";
            echo "</div><div>";
            if(strlen($contenido)>250){
              echo substr($contenido, 0, 250);
            }else{
              echo $contenido;
            }
            echo "</div><a href='$amigable/articulo/$idNoticia/' class='read-more'>Leer Mas</a>";
          echo "</div>";
        echo "</div>";
      echo "</div>";
    echo "</div>";
    echo "<!--ELEMENTO END-->";
  }
}

function noticiaDashboard ($rs) {
  global $amigable;
  $url = $amigable;
  while($fila = mysqli_fetch_assoc($rs)){
    echo "<tr>";
    echo "<td>
    <a href='$url/panel/noticia/".$fila['idNoticia']."/'>".$fila['idNoticia']."</a>
    </td>";
    echo "<td>
    <a href='$url/panel/noticia/".$fila['idNoticia']."/'>".$fila['tituloNoticia']."</a>
    </td>";
    echo "<td>
    <a href='$url/panel/usuario/".$fila['idUsuario']."/'>".$fila['usuario']."</a>
    </td>";
    echo "</tr>";
  }
}

function findNoticiasByCategoria ($categoria) {
  // SELECT * FROM categorias_has_noticias cn, noticias n, categorias c WHERE (n.idNoticia = cn.Noticias_idNoticia) AND (c.idCategoria = cn.Categorias_idCategoria)
  $conexion = conectar();
  $query = "SELECT * FROM categorias_has_noticias cn, noticias n, categorias c WHERE (n.idNoticia = cn.Noticias_idNoticia) AND (c.idCategoria = cn.Categorias_idCategoria) AND (cn.Categorias_idCategoria = $categoria)";
  $rs = mysqli_query($conexion, $query);
  desconectar($conexion);
  return $rs;
}

function findAllProductos () {
  $conexion = conectar();
  $query = "SELECT * FROM productos";
  $rs = mysqli_query($conexion, $query);
  desconectar($conexion);
  return $rs;
}

function imprimirProductos ($rs) {
  global $imagenes;
  while ($fila = mysqli_fetch_assoc($rs)) {
    echo '<div style="height:500" class="col-md-4 col-sm-6">
                            <div class="store-list-item">
                                <div>
                                <form name="formulario" action="" onSubmit="enviarDatos(this); return false" >
                                    <input type="hidden" name="producto" value="'.openssl_encrypt($fila["producto"], COD, KEY).'"/>
                                    <input type="hidden" name="idProducto" value="'.openssl_encrypt($fila["idProducto"], COD, KEY). '"/>
                                    <input type="hidden" name="precioEfectivo" value="'.openssl_encrypt($fila["precioEfectivo"], COD, KEY). '"/>
                                    <input type="hidden" name="imgProducto" value="'.openssl_encrypt($fila["imgProducto"], COD, KEY).'"/>
                                    <a href="#">
                                        <img style="height:370px" src="'.$imagenes.'/imgProductos/'.$fila["imgProducto"].'" alt="product">
                                    </a>
                                    <div class="info">
                                        <span class="name">'.$fila["producto"].'</span>
                                        <span class="price">$'.$fila["precioEfectivo"]. '</span>
                                        <div class="btn-wrap">
                                            <button class="btn small">Detalles</button>
                                            <button class="spinner-border btn small" type="submit" value="Agregar"/>Agregar</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>';
  }
}

function imprimirCarrito () {
  echo isset($_SESSION["PRODUCTOS"]);
  global $imagenes;
  if (isset($_SESSION["PRODUCTOS"])) {
    foreach ($_SESSION["PRODUCTOS"] as $clave => $valor) {
      $precio = $valor["precioEfectivo"];
      $cantidad = $valor["cantidad"];
      $total = $precio * $cantidad;
      echo '<tr class="cart_iem">
                            <td class="delete"><a idProducto="' . $valor["idProducto"] . '" onclick="borrarProducto(this)"><i class="fa fa-close" aria-hidden="true"></i></a></td>
                            <td class="name"><img style="max-height: 100px" class="product-image" src="' . $imagenes . '/imgProductos/' . $valor["imgProducto"] . '" alt="cart-product">Lorem ipsum</td>
                            <td class="cost">$ '.$valor["precioEfectivo"].'</td>
                            <td class="quantity"><input value="'. $valor["cantidad"].'" type="number"></td>
                            <td class="total">$ '.$valor["cantidad"] * $valor["precioEfectivo"].'</td>
                        </tr>';
    }
  }
}