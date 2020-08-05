<?php
$p = '..';
require_once("../../BackEnd/config.php");
require_once("../../BackEnd/funciones.php");
require_once("../../BackEnd/mostrarTablas.php");
$conexion = conectar();
if(isset($_SESSION['usuario'])){
  if(isAdmin($conexion,$_SESSION['usuario'])){

  }else{
    desconectar($conexion);
    header("Location: $amigable/panel/");
  }
}else{
  echo "<script>alert('Necesita ser admin para podes acceder a esta pagina')</script>";
  desconectar($conexion);
  header("Location: $amigable/panel/456/");
}
$idTorneo = $_GET['id'];
$consulta =  "SELECT * FROM torneos t, juegos j
              WHERE t.idTorneo='$idTorneo' 
              AND t.Juegos_idJuegos=j.idJuego";
$resultado = mysqli_query($conexion, $consulta);
$torneo = mysqli_fetch_assoc($resultado);
$nombreTorneo = $torneo['torneo'];
$cantMaxEquipos = $torneo['cantMaxEquipos'];
$modalidad = $torneo['modalidad'];
if($torneo['EquipoIndividual'] == 0 ){
  $tipoPart = "Individual";
}else{
  $tipoPart = "Equipo";
}
$estado = $torneo['estado'];
$fechaInicio = $torneo['fechaInicio'];
$fechaFin = $torneo['fechaFin'];
$fasesDeGrupo = $torneo['fasesDeGrupo'];
$idJuego = $torneo['idJuego'];
$juego = $torneo['juego'];

desconectar($conexion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php
  require_once("$p/components/head.php");
  mostrarHead("Torneo | $nombreTorneo",$urlDB);
  ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Wrapper START -->
<div class="wrapper">

  <!-- Navbar START-->
  <?php
  require_once("$p/components/nav.php")
  ?>
  <!-- Navbar END-->

  <!-- Main Sidebar Container START-->
  <?php
  require_once("$p/components/aside.php");
  $conexion = conectar();
  aside(4,$conexion,$amigable,$urlDB,$imagenes);
  desconectar($conexion);
  ?>
  <!-- Main Sidebar Container END-->

  <!-- Content Wrapper. Contains page content START-->
  <div class="content-wrapper">

    <!-- Content Header (Page header) START -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

          <!-- Titulo Page START -->
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Torneo <?php echo $nombreTorneo;?></h1>
          </div>
          <!-- Titulo Page END -->

          <!-- Navegacion Pages START -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo $amigable;?>/panel/torneos/">Torneos</a></li>
              <li class="breadcrumb-item active"><?php echo $nombreTorneo;?></li>
            </ol>
          </div>
          <!-- Navegacion Pages END -->

        </div>
      </div>
    </div>
    <!-- Content Header (Page header) END -->
    
    <!-- Contento START -->
    <section class="content">
      <div class="container-fluid">
        
        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-6">
            <h2 class="m-0 text-dark">Informacion <?php echo $nombreTorneo;?></h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Small boxes (Stat box) START -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box --><!--HACER-->
            <div class="small-box bg-primary">
              <div class="inner">
              <?php
              $conexion = conectar();
              echo "<h3>".cantidadInscriptosTorneo($conexion,$idTorneo,$tipoPart)."</h3>";
              desconectar($conexion);
              ?>

                <p>Participantes Inscriptos</p>
              </div>
              <div class="icon">
                <i class="fas fa-trophy"></i>
              </div>
            </div>
          </div>
          <!--HACER-->
          <!--div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><i class="fas fa-coins"></i> s/Premios</h3>
                <p>Premio</p>
              </div>
              <div class="icon">
                <i class="fas fa-trophy"></i>
              </div>
            </div>
          </div-->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php
                $dia = substr($fechaInicio,8,2);
                $mes = substr($fechaInicio,5,2);
                $hora = substr($fechaInicio,11,2);
                $min = substr($fechaInicio,14,2);
                echo "<h3>$dia/$mes $hora:$min</h3>";
                ?>
                <p>Fecha de Inicio</p>
              </div>
              <div class="icon">
                <i class="fas fa-trophy"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
              <?php
                $dia = substr($fechaFin,8,2);
                $mes = substr($fechaFin,5,2);
                $hora = substr($fechaFin,11,2);
                $min = substr($fechaFin,14,2);
                echo "<h3>$dia/$mes $hora:$min</h3>";
                ?>
                <p>Fecha de Fin</p>
              </div>
              <div class="icon">
                <i class="fas fa-trophy"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- Small boxes (Stat box) END -->

        <!-- Tabla Torneo START -->
        <div class="row">
          
          <!-- Tabla Torneo START -->
          <div class="col-12">
            <div class="card">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Torneo - <?php echo $nombreTorneo;?></h3>
              </div>
              <!-- Card Header END -->
              
              <!-- Card Body START -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  
                  <!-- Cabecera Tabla Torneo START -->
                  <thead>
                  <tr>
                    <th>ID-Torneo</th>
                    <th>Juego</th>
                    <th>Cantidad Max de Equipos</th>
                    <th>Fase de Grupos</th>
                    <th>Modalidad</th>
                    <th>Estado</th>
                    <th>Tipo de Participantes</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Torneo END -->
                  
                  <!-- Contenido Tabla Torneo START -->
                  <tbody>
                  <tr>
                    <td><?php echo $idTorneo;?></td>
                    <td><a href="<?php echo $amigable;?>/panel/juego/<?php echo $idJuego;?>/"><?php echo $juego;?></a></td>
                    <td><?php echo $cantMaxEquipos;?></td>
                    <td>
                      <?php if($fasesDeGrupo==1){echo "Si";}else{echo "No";}?>
                    </td>
                    <td><?php echo $modalidad;?></td>
                    <td><?php echo $estado;?></td>
                    <td><?php echo $tipoPart;?></td>
                  </tr>
                  </tbody>
                  <!-- Cabecera Tabla Torneo END -->

                </table>
              </div>
              <!-- Card Body END -->

            </div>
          </div>
          <!-- Tabla Torneo END -->

        </div>
        <!-- Tablas Torneo END -->

        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-12">
            <h2 class="m-0 text-dark"><?php if($tipoPart=="Equipo"){echo "Equipos";}elseif($tipoPart=="Individual"){echo "Usuarios";}?> Inscriptos</h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Equipos o Individuos START -->
        <div class="row">
          <?php
          $conexion = conectar();
          if($tipoPart=="Equipo"){
            equiposTorneos($conexion,$idTorneo,$amigable);
          }elseif($tipoPart=="Individual"){
            usuariosTorneos($conexion,$idTorneo,$amigable);
          }
          desconectar($conexion);
          ?>
        </div>
        <!-- Equipos o Individuos END -->

        <?php
        if($fasesDeGrupo == 1){
        ?>
        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-12">
            <h2 class="m-0 text-dark">Grupos</h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Grupos (en caso de haber) START -->
        <div class="row">

          <!--Mostrando Grupos o no START-->
          <?php
          $conexion = conectar();
          mostrarGrupos($conexion,$idTorneo,$amigable);
          desconectar($conexion);
          ?>
          <!--Mostrando Grupos o no END-->

        </div>
        <!-- Grupos (en caso de haber) END -->
        <?php
        }
        ?>

        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-6">
            <h2 class="m-0 text-dark">Rondas</h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Rondas START -->
        <div class="row">

          <!--Mostrando Grupos o no START-->
          <?php
          $conexion = conectar();
          mostrarRondas($conexion,$idTorneo, $amigable);
          desconectar($conexion);
          ?>
          <!--Mostrando Grupos o no END-->

        </div>
        <!-- Rondas END -->

        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-6">
            <h2 class="m-0 text-dark">Premios</h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Premios START -->
        <div class="row">
          <?php
          $conexion = conectar();
          premiosTorneo($conexion,$idTorneo,$amigable);
          desconectar($conexion);
          ?>
        </div>
        <!-- Premios END -->
        
        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-6">
            <h2 class="m-0 text-dark">Acciones Torneo <?php echo $nombreTorneo;?></h2>
          </div>
        </div>
        <!--Subtitulo END-->
        
        <!-- Acciones Torneos START -->
        <div class="row">

          <!-- Modificar Torneo START -->
          <div class="col-md-12">
            <div class="card card-primary">
              
              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Modificar <?php echo $nombreTorneo;?></h3>
              </div>
              <!-- Card Header END -->

              <!-- Form START -->
              <form role="form" action="<?php echo $urlDB;?>/php/modificarTorneo.php?id=<?php echo $idTorneo;?>" method="POST">
                
                <!-- Card Body START -->
                <div class="row card-body">

                  <!-- Input Nombre Torneo START -->
                  <div class="form-group col-6">
                    <label for="nombreTorneo">Nombre Torneo</label>
                    <input type="text" class="form-control" id="nombreTorneo" name="nombreTorneo" placeholder="<?php echo $nombreTorneo;?>">
                  </div>
                  <!-- Input Nombre Torneo END -->

                  <!-- Input Inscripcion Torneo START -->
                  <div class="form-group col-6">
                    <label for="inscripcion">Inscripcion Torneo</label>
                    <input type="text" class="form-control" id="inscripcion" name="inscripcion" placeholder="Inscripcion Torneo...">
                  </div>
                  <!-- Input Inscripcion Torneo END -->

                  <!-- Input Juego START -->
                  <div class="form-group col-6">
                    <label for="juego">Juego</label>
                    <select class="form-control" id="juego" name="juego">
                      <?php
                      $conexion = conectar();
                      $consulta = "SELECT * FROM juegos";
                      $resultado = mysqli_query($conexion, $consulta);
                      while($fila = mysqli_fetch_assoc($resultado)){
                        if($fila['idJuego']==1){
                          continue;
                        }
                        if($idJuego==$fila['idJuego']){
                          echo "<option value='".$fila['idJuego']."' selected>".$fila['juego']."</option>";
                        }else{
                          echo "<option value='".$fila['idJuego']."'>".$fila['juego']."</option>";
                        }
                      }
                      desconectar($conexion);
                      ?>
                    </select>
                  </div>
                  <!-- Input Juego END -->

                  <!-- Input Cantidad de Participantes START -->
                  <div class="form-group col-6">
                    <label for="cantMaxEquipo">Cantidad Max de Equipos</label>
                    <input type="number" class="form-control" id="cantMaxEquipo" name="cantMaxEquipo" placeholder="<?php echo $cantMaxEquipos;?>">
                  </div>
                  <!-- Input Cantidad de Participantes END -->

                  <!-- Input Modalidad START -->
                  <div class="form-group col-6">
                    <label for="modalidad">Modalidad</label>
                    <select class="form-control" id="modalidad" name="modalidad">
                      <option value="1 vs 1" <?php if($modalidad=="1 vs 1"){echo "selected";}?>>1 vs 1</option>
                      <option value="2 vs 2" <?php if($modalidad=="2 vs 2"){echo "selected";}?>>2 vs 2</option>
                      <option value="3 vs 3" <?php if($modalidad=="3 vs 3"){echo "selected";}?>>3 vs 3</option>
                      <option value="4 vs 4" <?php if($modalidad=="4 vs 4"){echo "selected";}?>>4 vs 4</option>
                      <option value="5 vs 5" <?php if($modalidad=="5 vs 5"){echo "selected";}?>>5 vs 5</option>
                      <option value="6 vs 6" <?php if($modalidad=="6 vs 6"){echo "selected";}?>>6 vs 6</option>
                      <option value="Todos vs Todos" <?php if($modalidad=="Todos vs Todos"){echo "selected";}?>>Todos vs Todos</option>
                    </select>
                  </div>
                  <!-- Input Modalidad END -->

                  <!-- Input Fase de Grupo START -->
                  <div class="form-group col-6">
                    <label for="fasesGrupo">Tiene fase de grupos</label>
                    <select class="form-control" id="fasesGrupo" name="fasesGrupo">
                      <option value="1"<?php if($fasesDeGrupo==1){echo "selected";}?>>SI</option>
                      <option value="0"<?php if($fasesDeGrupo==0){echo "selected";}?>>NO</option>
                    </select>
                  </div>
                  <!-- Input Fase de Grupo END -->

                  <!-- Input Fechas START -->
                  <div class="form-group col-6">
                    <label>Fecha y tiempo de rango del torneo:</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="text" class="form-control float-right" name="fecha" id="reservationtime">
                    </div>
                  </div>
                  <!-- Input Fechas END -->

                </div>
                <!-- Card Body END -->

                <!-- Submit START -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Modificar Torneo</button>
                </div>
                <!-- Submit END -->

              </form>
              <!-- Form END -->

            </div>
          </div>
          <!-- Modificar Torneo END -->

          <!-- Cancelar Torneo START -->
          <div class="col-6">
            <div class="card card-warning">
              
              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Cancelar Torneo</h3>
              </div>
              <!-- Card Header END -->

              <p class="m-2 text-dark">Ingrese su cuenta para cancelar el torneo</p>
              
              <!-- Form START -->
              <form class="form-horizontal" action="<?php echo $urlDB;?>/php/cancelarTorneo.php?id=<?php echo $idTorneo;?>" method="POST">
                
                <!-- Card Body START -->
                <div class="card-body">

                  <!-- Input Usuario START -->
                  <div class="form-group row">
                    <label for="usuario" class="col-4">Cuenta</label>
                    <div class="col-8">
                      <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Cuenta">
                    </div>
                  </div>
                  <!-- Input Usuario END -->

                  <!-- Input Contraseña START -->
                  <div class="form-group row">
                    <label for="password" class="col-4">Contraseña</label>
                    <div class="col-8">
                      <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña">
                    </div>
                  </div>
                  <!-- Input Contraseña END -->
                </div>
                <!-- Card Body END -->

                <!-- Submit START -->
                <div class="card-footer d-flex justify-content-center">
                  <button type="submit" class="btn btn-warning">Cancelar Torneo</button>
                </div>
                <!-- Submit END -->

              </form>
              <!-- Form END -->
            </div>
          </div>
          <!-- Cancelar Torneo END -->

          <!-- Eliminar Torneo START -->
          <div class="col-6">
            <div class="card card-danger">
              
              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Eliminar torneo</h3>
              </div>
              <!-- Card Header END -->

              <p class="m-2 text-dark">Ingrese su cuenta para eliminar el torneo</p>

              <!-- Form START -->
              <form class="form-horizontal" action="<?php echo $urlDB;?>/php/eliminarTorneo.php=id<?php echo $idTorneo;?>" method="POST">

                <!-- Card Body START -->
                <div class="card-body">

                  <!-- Input Usuario START -->
                  <div class="form-group row">
                    <label for="usuario" class="col-4">Cuenta</label>
                    <div class="col-8">
                      <input type="email" class="form-control" name="usuario" id="usuario" placeholder="Cuenta">
                    </div>
                  </div>
                  <!-- Input Usuario END -->

                  <!-- Input Contraseña START -->
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-4">Contraseña</label>
                    <div class="col-8">
                      <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña">
                    </div>
                  </div>
                  <!-- Input Contraseña END -->

                </div>
                <!-- Card Body END -->

                <!-- Submit START -->
                <div class="card-footer d-flex justify-content-center">
                  <button type="submit" class="btn btn-danger">Eliminar Torneo</button>
                </div>
                <!-- Submit END -->

              </form>
              <!-- Form END -->
            </div>
          </div>
          <!-- Eliminar Torneo END -->

          <?php
          if($fasesDeGrupo == 1){
          ?>
          <!-- Crear Grupo START -->
          <div class="col-6">
            <div class="card card-success">
              
              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Crear Grupo</h3>
              </div>
              <!-- Card Header END -->

              <!-- Form START -->
              <form class="form-horizontal" action="<?php echo $url;?>/php/crearGrupo.php?tor=<?php echo $idTorneo;?>" method="POST">

                <!-- Card Body START -->
                <div class="card-body">

                  <!-- Input Nombre Grupo START -->
                  <div class="form-group row">
                    <label for="grupo" class="col-4">Nombre Grupo</label>
                    <div class="col-8">
                      <input type="text" class="form-control" id="grupo" name="grupo" placeholder="Nombre Grupo">
                    </div>
                  </div>
                  <!-- Input Nombre Grupo END -->
                  
                </div>
                <!-- Card Body END -->

                <!-- Submit START -->
                <div class="card-footer d-flex justify-content-center">
                  <button type="submit" class="btn btn-success">Crear Grupo</button>
                </div>
                <!-- Submit END -->

              </form>
              <!-- Form END -->
            </div>
          </div>
          <!-- Crear Grupo END -->
          <?php
          }
          ?>

          <!-- Crear Ronda START -->
          <div class="col-6">
            <div class="card card-success">
              
              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Crear Ronda</h3>
              </div>
              <!-- Card Header END -->

              <!-- Form START -->
              <form class="form-horizontal" action="<?php echo $urlDB;?>/php/crearRonda.php?tor=<?php echo $idTorneo;?>" method="POST">

                <!-- Card Body START -->
                <div class="card-body">

                  <!-- Input Nombre Grupo START -->
                  <div class="form-group row">
                    <label for="ronda" class="col-4">Nombre Ronda</label>
                    <div class="col-8">
                      <input type="text" class="form-control" id="ronda" name="ronda" placeholder="Nombre Ronda">
                    </div>
                  </div>
                  <!-- Input Nombre Grupo END -->
                  
                </div>
                <!-- Card Body END -->

                <!-- Submit START -->
                <div class="card-footer d-flex justify-content-center">
                  <button type="submit" class="btn btn-success">Crear Ronda</button>
                </div>
                <!-- Submit END -->

              </form>
              <!-- Form END -->
            </div>
          </div>
          <!-- Crear Ronda END -->

          <!-- Crear Premio START -->
          <div class="col-6">
            <div class="card card-success">
              
              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Crear Premio</h3>
              </div>
              <!-- Card Header END -->

              <!-- Form START -->
              <form class="form-horizontal" action="<?php echo $url;?>/php/crearPremios.php?id=<?php echo $idTorneo;?>" method="POST">

                <!-- Card Body START -->
                <div class="card-body">

                  <!-- Input Nombre Premio START -->
                  <div class="form-group row">
                    <label for="nombrePremio" class="col-4">Nombre Premio</label>
                    <div class="col-8">
                      <input type="text" class="form-control" id="nombrePremio" name="nombrePremio" placeholder="Nombre Premio">
                    </div>
                  </div>
                  <!-- Input Nombre Premio END -->

                  <!-- Input Detalles Premio START -->
                  <div class="form-group row">
                    <label for="detalles" class="col-4">Detalles Premio</label>
                    <div class="col-8">
                      <input type="text" class="form-control" id="detalles" name="detalles" placeholder="Detalles Premio">
                    </div>
                  </div>
                  <!-- Input Nombre Grupo END -->
                  
                </div>
                <!-- Card Body END -->

                <!-- Submit START -->
                <div class="card-footer d-flex justify-content-center">
                  <button type="submit" class="btn btn-success">Crear Premio</button>
                </div>
                <!-- Submit END -->

              </form>
              <!-- Form END -->
            </div>
          </div>
          <!-- Crear Premio END -->

        </div>
        <!-- Acciones Torneos END -->

        <!--Subtitulo START-->
        <div class="row mt-4 mb-4">
          <div class="col-12">
            <h2 class="m-0 text-dark">Enviar un email a los participantes de {Nombre Torneo}</h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Enviar un email a todos los Usuarios START -->
        <div class="row">
          <div class="col-12">
            <form class="card card-outline card-info">

              <!-- Card Header START -->
              <div class="card-header">

                <!-- Input Asunto START -->
                <div class="form-group col-6">
                  <label for="exampleInputEmail1">Asunto</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Asunto...">
                </div>
                <!-- Input Asunto END -->

                <!-- Tools Box START -->
                <div class="card-tools">
                  <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                          title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                          title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
                <!-- Tools Box END -->

              </div>
              <!-- Tools Box END -->

              <div class="card-body pad">
                <div class="mb-3">
                  <textarea class="textarea" placeholder="Place some text here"
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </div>

              <!-- Card Submit START -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Enviar Email</button>
              </div>
                <!-- Card Submit END -->
            </form>
          </div>
        </div>
        <!-- Enviar un email a todos los Usuarios END -->

      </div>
    </section>
    <!-- Contento END -->

  </div>
  <!-- Content Wrapper. Contains page content END-->

  <!--FOOTER START-->
  <?php
  require_once("../components/footer.php");
  ?>
  <!--FOOTER END-->

</div>
<!-- Wrapper END -->



<!--SCRIPTS-->
<!-- jQuery -->
<script src="<?php echo $urlDB?>/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo $urlDB?>/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo $urlDB?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?php echo $urlDB?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $urlDB?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo $urlDB?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo $urlDB?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo $urlDB?>/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo $urlDB?>/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo $urlDB?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo $urlDB?>/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo $urlDB?>/plugins/moment/moment.min.js"></script>
<script src="<?php echo $urlDB?>/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo $urlDB?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo $urlDB?>/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo $urlDB?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- Select2 -->
<script src="<?php echo $urlDB?>/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo $urlDB?>/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?php echo $urlDB?>/plugins/moment/moment.min.js"></script>
<script src="<?php echo $urlDB?>/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="<?php echo $urlDB?>/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo $urlDB?>/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo $urlDB?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?php echo $urlDB?>/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $urlDB?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $urlDB?>/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo $urlDB?>/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $urlDB?>/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'YYYY/MM/DD/ HH:mm:ss'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  });
</script>
</body>
</html>