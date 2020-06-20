<?php

//Dashboard Mostrando datos

//Tablas START
//Cupones
function cupones($conexion,$url){
  $consulta = "SELECT * FROM cupones";

  if($resultado = mysqli_query($conexion, $consulta)){
    /*id|cupon|estado|porcentaje|fecha Inicio-Fin|*/
    while($fila = mysqli_fetch_assoc($resultado)){
      echo "<tr>";
      echo "<td>
              <a href='$url/panel/cupon/".$fila['idCupon']."/'>".$fila['idCupon']."</a>
            </td>";
      echo "<td>
              <a href='$url/panel/cupon/".$fila['idCupon']."/'>".$fila['nombreCupon']."</a>
            </td>";
      echo "<td>".$fila['porcentajeDescuento']."%</td>";
      if($fila['estadoCupon']==1){
        echo "<td>Activo</td>";
      }else{
        echo "<td>Inactivo</td>";
      }
      echo "<td>|".$fila['inicioCupon']."| <br/> |".$fila['finCupon']."|</td>";
      echo "</tr>";
    }
  }
}
//Equipos
function equipos($conexion,$url){
  $consulta = "SELECT * FROM equipos";

  if($resultado = mysqli_query($conexion, $consulta)){
    /*id|equipo|cantDeIntegrantes|enviar Email|*/
    while($fila = mysqli_fetch_assoc($resultado)){
      echo "<tr>";
      echo "<td>
              <a href='$url/panel/equipo/".$fila['idEquipo']."/'>".$fila['idEquipo']."</a>
            </td>";
      echo "<td>
              <a href='$url/panel/equipo/".$fila['idEquipo']."/'>".$fila['equipo']."</a>
            </td>";
      $idEquipo = $fila['idEquipo'];
      $subConsulta = "SELECT * 
                      FROM usuarios 
                      WHERE Equipos_idEquipos='$idEquipo'";
      $subResultado = mysqli_query($conexion, $subConsulta);
      $cantIntegrantes = mysqli_num_rows($subResultado);
      echo "<td>".$cantIntegrantes."</td>";//Hacer una consulta para ver la cantidad de usuarios que tiene un equipo, Unir con la tabla de Equipos_Usuarios
      echo "</tr>";
    }
  }
}
//Juegos
function juegos($conexion, $url){
  $consulta = "SELECT * FROM juegos";

  if($resultado = mysqli_query($conexion, $consulta)){
    /*id|juego|plataforma|*/
    while($fila = mysqli_fetch_assoc($resultado)){
      if($fila['idJuego'] == 1){
        continue;
      }
      echo "<tr>";
      echo "<td>
              <a href='$url/panel/juego/".$fila['idJuego']."/'>".$fila['idJuego']."</a>
            </td>";
      echo "<td>
              <a href='$url/panel/juego/".$fila['idJuego']."/'>".$fila['juego']."</a>
            </td>";
      echo "<td>".$fila['plataforma']."</td>";
      echo "</tr>";
    }
  }
}
//Dashboard Noticias
function noticias($conexion, $url){
  $consulta = "SELECT *
  FROM noticias n
  INNER JOIN usuarios u
  ON n.Usuarios_idUsuario=u.idUsuario";

  if($resultado = mysqli_query($conexion, $consulta)){
    /*idNoticia|tituloNoticia|autor|/*/
    while($fila = mysqli_fetch_assoc($resultado)){
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
}
//Dashboard Tags
function tags($conexion, $url){
  $consulta = "SELECT * FROM tags";
  if($resultado = mysqli_query($conexion, $consulta)){
    while($fila = mysqli_fetch_assoc($resultado)){
      $id = $fila['idTag'];
      $tag = $fila['tag'];
      echo "<tr>";
      echo "<td><a href='$url/panel/tag/$id/'>$id</a></td>";
      echo "<td><a href='$url/panel/tag/$id/'>$tag</a></td>";
      echo "</tr>";
    }
  }
}
//Dashboard Productos
function productos($conexion, $url){
  $consulta = "SELECT p.idProducto,p.producto,p.precioEfectivo,p.precioMonVirtual,p.stock,c.idCupon,c.nombreCupon
  FROM productos p
  INNER JOIN cupones c
  ON p.Cupones_idCupones=c.idCupon";

  if($resultado = mysqli_query($conexion, $consulta)){
    /*id|producto|precioEfectivo/precioMonVritul|stock|cupon/*/
    while($fila = mysqli_fetch_assoc($resultado)){
    echo "<tr>";
    echo "<td>
    <a href='$url/panel/producto/".$fila['idProducto']."/'>".$fila['idProducto']."</a>
    </td>";
    echo "<td>
    <a href='$url/panel/producto/".$fila['idProducto']."/'>".$fila['producto']."</a>
    </td>";
    echo "<td>".$fila['precioEfectivo']."</td>";
    echo "<td>".$fila['precioMonVirtual']."</td>";
    echo "<td>".$fila['stock']."</td>";
    echo "<td><a href='$url/panel/cupon/".$fila['idCupon']."/'>".$fila['nombreCupon']."</a></td>";
    echo "</tr>";
    }
  }
}
//Dashboard Usuarios
function usuarios($conexion, $url){
  $consulta = "SELECT * FROM usuarios";

  if($resultado = mysqli_query($conexion, $consulta)){
    //id|usuario|email|efectivo|monVirtual|isAdmin|advertencia|/
    while($fila = mysqli_fetch_assoc($resultado)){
      echo "<tr>";
      echo "<td>
              <a href='$url/panel/usuario/".$fila['idUsuario']."/'>".$fila['idUsuario']."</a>
            </td>";
      echo "<td>
              <a href='$url/panel/usuario/".$fila['idUsuario']."/'>".$fila['usuario']."</a>
            </td>";
      echo "<td>".$fila['emailUsuario']."</td>";
      echo "<td>".$fila['saldoEfectivo']."</td>";
      echo "<td>".$fila['saldoMonVir']."</td>";
      if($fila['isAdmin']==1){
        echo "<td>Admin</td>";
      }else{
        echo "<td>No es Admin</td>";
      }
      echo "<td>
              <a href='./sendWarning.php?id=".$fila['idUsuario']."'><span class='badge bg-warning' title='Advertir posible Ban'><i class='fas fa-exclamation-triangle'></i></span></a>
            </td>";
      echo "</tr>";
    }
  }
}
//Dashboard Torneos
function torneos($conexion, $url){
  $consulta =  "SELECT * 
                FROM torneos t 
                INNER JOIN juegos j 
                ON t.Juegos_idJuegos=j.idJuego";

  if($resultado = mysqli_query($conexion, $consulta)){
    /*id|torneo|juego|cant participantes|estado/faseDeGrupos/modalidad/fecha start-end*/
    while($fila = mysqli_fetch_assoc($resultado)){
      echo "<tr>";
      echo "<td>
              <a href='$url/panel/torneo/".$fila['idTorneo']."/'>".$fila['idTorneo']."</a>
            </td>";
      echo "<td>
              <a href='$url/panel/torneo/".$fila['idTorneo']."/'>".$fila['torneo']."</a>
            </td>";
      echo "<td>
              <a href='$url/panel/juego/".$fila['idJuego']."/'>".$fila['juego']."</a>
            </td>";
      echo "<td>".$fila['cantMaxEquipos']."</td>";
      echo "<td>".$fila['estado']."</td>";
      if($fila['fasesDeGrupo']==1){
        echo "<td>Si</td>";
      }else{
        echo "<td>No</td>";
      }
      echo "<td>".$fila['modalidad']."</td>";
      echo "<td>|".$fila['fechaInicio']."|<br>|".$fila['fechaFin']."|</td>";
      echo "</tr>";
    }
  }
}
//Dashboard Ventas
function ventas($conexion, $url){
  $consulta = "SELECT * FROM ventas";
  if($resultado = mysqli_query($conexion, $consulta)){
    while($fila = mysqli_fetch_assoc($resultado)){
      echo "<tr>";
      echo "<td>
              <a href='$url/panel/venta-compra/".$fila['idVenta']."/'>".$fila['idVenta']."</a>
            </td>";
      echo "<td>
              <a href='$url/panel/usuario/".$fila['Usuarios_idUsuario']."/'>".$fila['Usuarios_idUsuario']."</a>
            </td>";
      echo "<td>".$fila['cantidadProductos']."</td>";
      echo "<td>".$fila['totalVenta']."</td>";
      echo "</tr>"; 
    }
  }
}
//Tablas END

///Tabla Individual START

//Grupo
function grupo($conexion, $idGrupo, $url){
  $consulta =  "SELECT * 
                FROM enfrentamientos e, enfrentamentos_equipos v
                WHERE e.Grupos_idGrupos='$idGrupo'
                AND v.Enfrentamientos_idEnfrentamientos=e.idEnfrentamiento";
  $idEquipos = array();  
  $bandera = 0;
  $resultado = mysqli_query($conexion,$consulta);
  while ( $fila = mysqli_fetch_assoc($resultado)) {
    if($bandera == 0){
      $idEquipos[] = $fila['Equipos_idEquipo'];
      $bandera = 1;
    }else{
      $b=0;
      for($i=0; $i<count($idEquipos); $i++){
        if($idEquipos[$i]==$fila['Equipos_idEquipo']){
          $b=1;
        }
      }
      if($b==0){
        $idEquipos[] = $fila['Equipos_idEquipo'];
      }
    }
  }
  if(count($idEquipos)>0){
    for($i=0; $i<count($idEquipos); $i++){
      $equipo = "SELECT * FROM equipos WHERE idEquipo='$idEquipos[$i]'";
      $rs = mysqli_query($consulta, $equipo);
      $f = mysqli_fetch_assoc($rs);
      echo "<td>".$f['idEquipo']."</td>";
      echo "<td>".$f['equipo']."</td>";
      echo "<td>0</td>";
      echo "<td>|-|-|-|</td>";
    }
  }
}
//Dashboard Comentarios de Noticia 
function comentariosNoticia($conexion, $idNoticia,$url){
  $consulta =  "SELECT * 
                FROM comentarios c, usuarios u
                WHERE c.Noticias_idNoticia='$idNoticia'
                AND c.Usuarios_idUsuario=u.idUsuario";
  if($resultado = mysqli_query($conexion, $consulta)){
    while($fila = mysqli_fetch_assoc($resultado)){
      echo "<tr>";
      echo "<td>".$fila['idComentario']."</td>";
      echo "<td><a href='$url/panel/usuario/".$fila['idUsuario']."/'>".$fila['idUsuario']."</a></td>";
      echo "<td><a href='$url/panel/usuario/".$fila['idUsuario']."/'>".$fila['usuario']."</a></td>";
      echo "<td>".$fila['contenidoComentario']."</td>";
      echo "<td><a href='../php/eliminarComentario.php?id=".$fila['idComentario']."&b=1&noticia=$idNoticia'><i class='fas fa-trash-alt'></i></a></td>";
      echo "</tr>";
    }
  }
}
//Dashboard Comentarios de Producto
function comentariosProducto($conexion, $idProducto,$url){
  $consulta =  "SELECT * 
                FROM comentarios c, usuarios u
                WHERE c.Productos_idProducto='$idProducto'
                AND c.Usuarios_idUsuario=u.idUsuario";
  if($resultado = mysqli_query($conexion, $consulta)){
    while($fila = mysqli_fetch_assoc($resultado)){
      echo "<tr>";
      echo "<td>".$fila['idComentario']."</td>";
      echo "<td><a href='$url/panel/usuario/".$fila['idUsuario']."/'>".$fila['idUsuario']."</a></td>";
      echo "<td><a href='$url/panel/usuario/".$fila['idUsuario']."/'>".$fila['usuario']."</td>";
      echo "<td>".$fila['contenidoComentario']."</td>";
      echo "<td><a href='../php/eliminarComentario.php?id=".$fila['idComentario']."&b=2&producto=$idProducto'><i class='fas fa-trash-alt'></i></a></td>";
      echo "</tr>";
    }
  }
}
//Dashboard Enfrentamientos Grupo
function enfrentamientosGrupo($conexion,$idGrupo,$url){
  $consulta =  "SELECT *
                FROM enfrentamientos 
                WHERE Grupos_idGrupos='$idGrupo'";
  $resultado = mysqli_query($conexion,$consulta);
  if(mysqli_num_rows($resultado)>0){
    while($fila = mysqli_fetch_assoc($resultado)){
      echo "<tr>";
      $idEnfrentamiento = $fila['idEnfrentamiento'];
      $ganador = $fila['Ganador'];
      $fecha = $fila['FechaEnfrentamiento'];
      $bandera = 0;
      $subconsulta = "SELECT * 
                      FROM enfrentamientos_equipos v, equipos e
                      WHERE v.Enfrentamientos_idEnfrentamientos='$idEnfrentamiento'
                      AND v.Equipos_idEquipo=e.idEquipo";
      $rs = mysqli_query($conexion,$subconsulta);
      while($f = mysqli_fetch_assoc($rs)){
        // var_dump($f);
        if($bandera == 0){
          echo "<td><a href='$url/panel/equipo/".$f['idEquipo']."/'>".$f['equipo']."</td>";
          $bandera = 1;
        }else{
          echo "<td><a href='$url/panel/equipo/".$f['idEquipo']."/'>".$f['equipo']."</td>";
        }
      }
      if($fecha == NULL || $fecha == ''){
        echo "<td>-</td>";
      }else{
        echo "<td>$fecha</td>";
      }
      if($ganador == NULL || $ganador == ''){
        echo "<td>-</td>";
      }else{
        echo "<td>$ganador</td>";
      }
      echo "</tr>";
    }
  }
}
//Dashboard Grupos
function mostrarGrupos($conexion, $idTorneo, $url){
  $consulta = "SELECT * FROM grupos WHERE Torneos_idTorneos='$idTorneo'";
  $resultado = mysqli_query($conexion,$consulta);
  if(mysqli_num_rows($resultado)>0){
    while($fila = mysqli_fetch_assoc($resultado)){
      ?>
      <div class="col-6">
        <div class="card">

          <!-- Card Header START -->
          <div class="card-header">
            <h3 class="card-title"><a href=<?php echo "$url/panel/grupo/".$fila['idGrupo']."/";?>><?php echo $fila['nombreGrupo'];?></a></h3>
          </div>
          <!-- Card Header END -->
          
          <!-- Card Body START -->
          <div class="card-body p-0">
            <table class="table table-striped">
              
              <!-- Cabecera Tabla Grupo START -->
              <thead>
              <tr>
                <th>ID-Equipo</th>
                <th>Equipo</th>
                <th>Puntos</th>
                <th>Resultados</th>
              </tr>
              </thead>
              <!-- Cabecera Tabla Grupo END -->
              <!--REALIZAR LECTURA DE LOS EQUIPOS Y DE LOS ENFRENTAMIENTOS QUE TUVIERON-->
              <!-- Contenido Tabla Grupo START -->
              <tbody>
              <!--tr>
                <td><a href="./equipo.php">256</a></td>
                <td><a href="./equipo.php">Fuego Rapido</a></td>
                <td>5</td>
                <td>V - D - E - V</td>
                <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
              </tr-->
              </tbody>
              <!-- Cabecera Tabla Grupo END -->

            </table>
          </div>
          <!-- Card Body END -->

        </div>
      </div>
      <?php
    }
  }else{
    echo "<div class='col-12 mb-4'>
            <h2 class='text-center'>Aun no se crearon Grupos.</h2>
          </div>";
  }
}
//Dashboard PremiosTorneos
function premiosTorneo($conexion,$idTorneo, $url){
  $consulta =  "SELECT * 
                FROM premios 
                WHERE Torneos_idTorneos='$idTorneo'";
  $resultado = mysqli_query($conexion,$consulta);
  if(isset($resultado) && mysqli_num_rows($resultado)>0){
      echo "<div class='col-6'>";
      echo  "<div class='card'>";
      echo  "<!-- Card Header START -->";
      echo  "<div class='card-header'>
              <h3 class='card-title'>Premios</h3>
            </div>";
      echo "<!-- Card Header END -->
            <!-- Card Body START -->
            <div class='card-body p-0'>
              <table class='table table-striped'>
                
                <!-- Cabecera Tabla Premio START -->
                <thead>
                <tr>
                  <th>Nombre Premio</th>
                  <th>Descripcion</th>
                  <th>Entregado</th>
                </tr>
                </thead>
                <!-- Cabecera Tabla Premio END -->
                
                <!-- Contenido Tabla Premio START -->
                <tbody>";
      
      while($fila = mysqli_fetch_assoc($resultado)){
        echo "<tr>";
        echo "<td>
                <a href='$url/panel/premio/".$fila['idPremio']."/'>".$fila['nombrePremio']."</a>
              </td>";
        echo "<td>".$fila['Premio']."</td>";
        if($fila['Equipos_idEquipo']==1 && $fila['Usuarios_idUsuario']==1){
          echo "<td>No entregado</td>";
        }else{
          echo "<td>Entregado</td>";
        }
        echo "</tr>";
      }  
      echo "<!-- Cabecera Tabla Premio END -->
              </table>
            </div>
            <!-- Card Body END -->";
      echo  "</div>";
      echo "</div>";
  }else{
    echo "<!-- Mensaje si no hay Equipos START -->
          <div class='col-12 mb-4'>
            <h2 class='text-center'>Aun no se crearon Premios</h2>
          </div>
          <!-- Mensaje si no hay Equipos END -->";
  }
}
//Dashboard Rondas
function mostrarRondas($conexion, $idTorneo){
  $consulta = "SELECT * FROM rondas WHERE Torneos_idTorneos='$idTorneo'";
  $resultado = mysqli_query($conexion,$consulta);
  if(mysqli_num_rows($resultado)>0){
    while($fila = mysqli_fetch_assoc($resultado)){
      ?>
      <div class="col-12">
        <div class="card">

          <!-- Card Header START -->
          <div class="card-header">
            <h3 class="card-title"><a href=<?php echo "$url/panel/rondas/".$fila['idRonda']."/";?>><?php echo $fila['nombreRonda'];?></a></h3>
          </div>
          <!-- Card Header END -->
          
          <!-- Card Body START -->
          <div class="card-body p-0">
            <table class="table table-striped">
              
              <!-- Cabecera Tabla Ronda START -->
              <thead>
              <tr>
                <th>Equipo A</th>
                <th>Equipo B</th>
                <th>Fecha</th>
                <th>Ganador</th>
              </tr>
              </thead>
              <!-- Cabecera Tabla Ronda END -->
              <!--REALIZAR LECTURA DE LOS EQUIPOS Y DE LOS ENFRENTAMIENTOS QUE TUVIERON-->
              <!-- Contenido Tabla Ronda START -->
              <tbody>
              <tr>
                <td><a href="./equipo.php">LLuvia Inesperada</a></td>
                <td><a href="./equipo.php">Fuego Rapido</a></td>
                <td>20/06 18:00</td>
                <td>-</td>
              </tr>
              <tr>
                <td><a href="./equipo.php">Mar sin Agua</a></td>
                <td><a href="./equipo.php">Las Estrellas</a></td>
                <td>20/06 18:00</td>
                <td>-</td>
              </tr>
              <tr>
                <td><a href="./equipo.php">Lluvia Eterna</a></td>
                <td><a href="./equipo.php">Nube Negra</a></td>
                <td>20/06 18:00</td>
                <td>-</td>
              </tr>
              <tr>
                <td><a href="./equipo.php">Mente en Llamas</a></td>
                <td><a href="./equipo.php">Sol Naciente</a></td>
                <td>20/06 18:00</td>
                <td>-</td>
              </tr>
              <tr>
                <td><a href="./equipo.php">Manda Artica</a></td>
                <td><a href="./equipo.php">Frio Quemador</a></td>
                <td>20/06 18:00</td>
                <td>-</td>
              </tr>
              <tr>
                <td><a href="./equipo.php">Lluvia Eterna</a></td>
                <td><a href="./equipo.php">Nube Negra</a></td>
                <td>20/06 18:00</td>
                <td>-</td>
              </tr>
              <tr>
                <td><a href="./equipo.php">Mente en Llamas</a></td>
                <td><a href="./equipo.php">Sol Naciente</a></td>
                <td>20/06 18:00</td>
                <td>-</td>
              </tr>
              <tr>
                <td><a href="./equipo.php">Manda Artica</a></td>
                <td><a href="./equipo.php">Frio Quemador</a></td>
                <td>20/06 18:00</td>
                <td>-</td>
              </tr>
              </tbody>
              <!-- Cabecera Tabla Ronda END -->

            </table>
          </div>
          <!-- Card Body END -->

        </div>
      </div>
      <?php
    }
  }else{
    echo "<div class='col-12 mb-4'>
            <h2 class='text-center'>Aun no se crearon Rondas.</h2>
          </div>";
  }
}
//Dashboard Equipos Inscriptos Torneo
function equiposTorneos($conexion,$idTorneo, $url){
  $consulta =  "SELECT * 
                FROM Equipos_has_Torneos h, Equipos e
                WHERE h.Torneos_idTorneo='$idTorneo' 
                AND h.Equipos_idEquipo=e.idEquipo";
  $resultado = mysqli_query($conexion,$consulta);
  if(isset($resultado) && mysqli_num_rows($resultado)>0){
    while($fila = mysqli_fetch_assoc($resultado)){
      $idEquipo = $fila['idEquipo'];
      $subconsulta = "SELECT * 
                      FROM usuarios  
                      WHERE Equipos_idEquipos='$idEquipo'";
      $resultado2 = mysqli_query($conexion, $subconsulta);
      echo "<div class='col-6'>";
      echo  "<div class='card'>";
      echo  "<!-- Card Header START -->";
      echo  "<div class='card-header'>
              <h3 class='card-title'><a href='$url/panel/equipo/".$fila['idEquipo']."/'>".$fila['equipo']."</a></h3>
            </div>";
      echo "<!-- Card Header END -->
            <!-- Card Body START -->
            <div class='card-body p-0'>
              <table class='table table-striped'>
                
                <!-- Cabecera Tabla Ronda START -->
                <thead>
                <tr>
                  <th>ID-Usuaio</th>
                  <th>Nombre Usuario</th>
                </tr>
                </thead>
                <!-- Cabecera Tabla Ronda END -->
                
                <!-- Contenido Tabla Ronda START -->
                <tbody>";
      
      while($usuarios = mysqli_fetch_assoc($resultado2)){
        echo "<tr>";
        echo "<td>
                <a href='$url/panel/usuario".$usuarios['idUsuario']."/'>".$usuarios['idUsuario']."</a>
              </td>";
        echo "<td>
                <a href='$url/panel/usuario/".$usuarios['idUsuario']."/'>".$usuarios['usuario']."</a>
              </td>";
        echo "</tr>";
      }  
      echo "<!-- Cabecera Tabla Ronda END -->

              </table>
            </div>
            <!-- Card Body END -->";
      echo  "</div>";
      echo "</div>";
    }
  }else{
    echo "<!-- Mensaje si no hay Equipos START -->
          <div class='col-12 mb-4'>
            <h2 class='text-center'>Aun no se inscribieron equipos</h2>
          </div>
          <!-- Mensaje si no hay Equipos END -->";
  }
}
//Dashboard Usuarios Inscriptos Torneo
function usuariosTorneos($conexion,$idTorneo,$url){
  $consulta =  "SELECT * 
                FROM torneos_has_usuarios h, usuarios u
                WHERE h.Torneos_idTorneo='$idTorneo' 
                AND h.Usuarios_idUsuario=u.idUsuario";
  $resultado = mysqli_query($conexion,$consulta);
  if(isset($resultado) && mysqli_num_rows($resultado)>0){
    echo "<div class='col-6'>";
    echo  "<div class='card'>";
    echo  "<!-- Card Header START -->";
    echo  "<div class='card-header'>
            <h3 class='card-title'><a href='./usuarios.php'>Usuarios</a></h3>
          </div>";
    echo "<!-- Card Header END -->
          <!-- Card Body START -->
          <div class='card-body p-0'>
            <table class='table table-striped'>
              
              <!-- Cabecera Tabla Ronda START -->
              <thead>
              <tr>
                <th>ID-Usuaio</th>
                <th>Nombre Usuario</th>
              </tr>
              </thead>
              <!-- Cabecera Tabla Ronda END -->
              
              <!-- Contenido Tabla Ronda START -->
              <tbody>";
    
    while($usuarios = mysqli_fetch_assoc($resultado)){
      echo "<tr>";
      echo "<td>
              <a href='$url/panel/usuario/".$usuarios['idUsuario']."/'>".$usuarios['idUsuario']."</a>
            </td>";
      echo "<td>
              <a href='$url/panel/usuario/".$usuarios['idUsuario']."/'>".$usuarios['usuario']."</a>
            </td>";
      echo "</tr>";
    }  
    echo "<!-- Cabecera Tabla Ronda END -->

            </table>
          </div>
          <!-- Card Body END -->";
    echo  "</div>";
    echo "</div>";
  }else{
    echo "<!-- Mensaje si no hay Usuarios START -->
          <div class='col-12 mb-4'>
            <h2 class='text-center'>Aun no se inscribieron usuarios</h2>
          </div>
          <!-- Mensaje si no hay Usuarios END -->";
  }
}
//Dashboard Tags Noticia
function tagsNoticia($conexion, $id, $url){
  $consulta =  "SELECT * 
                FROM tags_has_noticias h, tags t
                WHERE h.Noticias_idNoticia='$id'
                AND h.Tags_idTag=t.idTag";
  if($resultado = mysqli_query($conexion, $consulta)){
    while($fila = mysqli_fetch_assoc($resultado)){
      echo "<tr>";
      echo "<td><a href='$url/panel/tag/".$fila['idTag']."/'>".$fila['idTag']."</a></td>";
      echo "<td><a href='$url/panel/tag/".$fila['idTag']."/'>".$fila['tag']."</a></td>";
      echo "</tr>";
    }
  }  
}
//Dashboard Torneo Equipos
function torneosEquipo($conexion, $id, $url){
  $consulta =  "SELECT * 
                FROM torneos t, equipos_has_torneos h, juegos j
                WHERE h.Equipos_idEquipo='$id'
                AND t.idTorneo=h.Torneos_idTorneo
                AND t.Juegos_idJuegos=j.idJuego";
  if($resultado = mysqli_query($conexion, $consulta)){
    while($fila = mysqli_fetch_assoc($resultado)){
      //ID-Torneo|Nombre Torneo|Juego|Cantidad max de Participantes|Estado|Modalidad
      echo "<tr>";
      echo "<td>
              <a href='$url/panel/torneo/".$fila['idTorneo']."/'>".$fila['idTorneo']."</a>
            </td>";
      echo "<td>
              <a href='$url/panel/torneo/".$fila['idTorneo']."/'>".$fila['torneo']."</a>
            </td>";
      echo "<td>
              <a href='$url/panel/juego/".$fila['idJuego']."/'>".$fila['juego']."</a>
            </td>";
      echo "<td>".$fila['cantMaxEquipos']."</td>";
      echo "<td>".$fila['estado']."</td>";
      echo "<td>".$fila['modalidad']."</td>";
      echo "</tr>";
    }
  }
} 
//Dashboard Usuarios equipo
function usuariosEquipo($conexion, $id, $url){
  $consulta = "SELECT * FROM usuarios WHERE Equipos_idEquipos='$id'";
  if($resultado = mysqli_query($conexion, $consulta)){
    while($fila = mysqli_fetch_assoc($resultado)){
      echo "<tr>";
      echo "<td>
              <a href='$url/panel/usuario/".$fila['idUsuario']."/'>".$fila['idUsuario']."</a>
            </td>";
      echo "<td>
              <a href='$url/panel/usuario/".$fila['idUsuario']."/'>".$fila['usuario']."</a>
            </td>";
      echo "<td>".$fila['emailUsuario']."</td>";
      echo "</tr>";
    }
  }
}  
//Dashboard Venta
function tablaVenta($conexion, $idVenta,$url){
  $consulta =  "SELECT * 
                FROM DetallesVentas d, Productos p
                WHERE d.Ventas_idVenta='$idVenta'
                AND d.Productos_idProducto=p.idProducto";
  if($resultado = mysqli_query($conexion, $consulta)){
    while($fila = mysqli_fetch_assoc($resultado)){
      echo "<tr>";
      echo "<td>
              <a href='$url/panel/producto/".$fila['idProducto']."/'>".$fila['idProducto']."</a>
            </td>";
      echo "<td>
        <a href='$url/panel/producto/".$fila['idProducto']."/'>".$fila['producto']."</a>
      </td>";
      echo "<td>".$fila['precioEfectivo']."</td>";
      echo "<td>".$fila['cantidadProducto']."</td>";
      echo "<td>".$fila['precioEfectivo']."X".$fila['cantidadProducto']."</td>";
      echo "</tr>"; 
    }
  }
}
///Tabla Individual END

//Dashboard Mostrando Datos Fin
?>