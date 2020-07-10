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
$idPremio = $_GET['id'];
$consulta =  "SELECT * FROM premios p, torneos t
              WHERE p.idPremio='$idPremio' 
              AND t.idTorneo=p.Torneos_idTorneos";
$resultado = mysqli_query($conexion, $consulta);
$premio = mysqli_fetch_assoc($resultado);
$nombrePremio = $premio['nombrePremio'];
$detalles = $premio['Premio'];
$equipo = $premio['Equipos_idEquipo'];
$usuario = $premio['Usuarios_idUsuario'];
if($equipo == 1 && $usuario == 1 ){
  $entregado = "No entregado";
}else{
  $entregado = "Entregado";
}
$torneo = $premio['torneo'];
$equipoIndividual = $premio['EquipoIndividual'];
$idTorneo = $premio['idTorneo'];
desconectar($conexion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php
  require_once("$p/components/head.php");
  mostrarHead("Premio | $nombrePremio",$urlDB);
  ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Wrapper START -->
<div class="wrapper">

  <!-- Navbar START-->
  <?php
  require_once("$p/components/aside.php");
  $conexion = conectar();
  aside(4,$conexion,$amigable,$urlDB,$imagenes);
  desconectar($conexion);
  ?>
  <!-- Navbar END-->

  <!-- Main Sidebar Container START-->
  <?php
  require_once("$p/components/aside.php");
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
            <h1 class="m-0 text-dark"><?php echo "$torneo - $nombrePremio";?></h1>
          </div>
          <!-- Titulo Page END -->

          <!-- Navegacion Pages START -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo $amigable;?>/panel/torneos/">Torneos</a></li>
              <li class="breadcrumb-item"><a href="<?php echo $amigable;?>/panel/torneo/<?php echo $idTorneo?>/"><?php echo $torneo;?></a></li>
              <li class="breadcrumb-item active"><?php echo $nombrePremio;?></li>
            </ol>
          </div>
          <!-- Navegacion Pages END -->

        </div>
      </div>
    </div>
    <!-- Content Header (Page header) END -->

    <!-- Content START -->
    <section class="content">
      <div class="container-fluid">
        
        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-12">
            <h2 class="m-0 text-dark">Informacion <?php echo "$torneo - $nombrePremio";?></h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <div class="row">

          <!-- Info Ronda START -->
          <div class="col-12">
            <div class="card">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Premio</h3>
              </div>
              <!-- Card Header END -->
              
              <!-- Card Body START -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  
                  <!-- Cabecera Tabla Premio START -->
                  <thead>
                  <tr>
                    <th>ID-Premio</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Entregado</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Premio END -->
                  
                  <!-- Contenido Tabla Premio START -->
                  <tbody>
                  <tr>
                    <td><?php echo $idPremio;?></td>
                    <td><?php echo $nombrePremio;?></td>
                    <td><?php echo $detalles;?></td>
                    <td><?php echo $entregado;?></td>
                  </tr>
                  </tbody>
                  <!-- Cabecera Tabla Premio END -->

                </table>
              </div>
              <!-- Card Body END -->

            </div>
          </div>
          <!-- Info Ronda END -->
          
        </div>

        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-12">
            <h2 class="m-0 text-dark">Modificar Premio - <?php echo $nombrePremio;?></h2>
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
                <h3 class="card-title">Modificar Premio <?php echo $nombrePremio;?></h3>
              </div>
              <!-- Card Header END -->

              <!-- Form START -->
              <form role="form" action="<?php echo $urlDB;?>/php/modificarPremio.php?id=<?php echo $idPremio;?>" method="POST">
                
                <!-- Card Body START -->
                <div class="row card-body">

                  <!-- Input Nombre Torneo START -->
                  <div class="form-group col-6">
                    <label for="nombrePremio">Nombre Premio</label>
                    <input type="text" class="form-control" id="nombrePremio" name="nombrePremio" placeholder="<?php echo $nombrePremio;?>">
                  </div>
                  <!-- Input Nombre Torneo END -->

                  <!-- Input Descripcion Premio START -->
                  <div class="form-group col-6">
                    <label for="detalles">Descripcion</label>
                    <input type="text" class="form-control" id="detalles" name="detalles" placeholder="<?php echo $detalles;?>">
                  </div>
                  <!-- Input Descripcion Premio END -->

                  <?php
                  if($equipoIndividual==0){
                  ?>
                  <!-- Input Juego START -->
                  <div class="form-group col-6">
                    <label for="usuarios">Usuario Ganador</label>
                    <select class="form-control" id="usuarios" name="usuarios">
                      <option value="1">Sin Ganador</option>
                      <?php
                      require_once("../php/conexionBD.php");
                      $conexion = conectar();
                      $consulta =  "SELECT * 
                                    FROM usuarios u, torneos_has_usuarios t
                                    WHERE u.idUsuario=t.Usuarios_idUsuario
                                    AND t.Torneos_idTorneo='$idTorneo'";
                      $resultado = mysqli_query($conexion, $consulta);
                      while($fila = mysqli_fetch_assoc($resultado)){
                        echo "<option value='".$fila['idusuario']."'>".$fila['usuario']."</option>";
                      }
                      $desconectar = desconectar($conexion);
                      ?>
                    </select>
                  </div>
                  <!-- Input Ganador END -->
                  <?php
                  }else{
                  ?>
                  <!-- Input Ganador START -->
                  <div class="form-group col-6">
                    <label for="equipos">Equipo Ganador</label>
                    <select class="form-control" id="equipos" name="equipos">
                      <option value="1">Sin Equipo</option>
                      <?php
                      require_once("../php/conexionBD.php");
                      $conexion = conectar();
                      $consulta =  "SELECT * 
                                    FROM equipos e, equipos_has_torneos t
                                    WHERE e.idEquipo=t.Equipos_idEquipo
                                    AND t.Torneos_idTorneo='$idTorneo'";
                      $resultado = mysqli_query($conexion, $consulta);
                      while($fila = mysqli_fetch_assoc($resultado)){
                        echo "<option value='".$fila['idEquipo']."'>".$fila['equipo']."</option>";
                      }
                      $desconectar = desconectar($conexion);
                      ?>
                    </select>
                  </div>
                  <!-- Input Ganador END -->
                  <?php
                  }
                  ?>


                </div>
                <!-- Card Body END -->

                <!-- Submit START -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Modificar Premio</button>
                </div>
                <!-- Submit END -->

              </form>
              <!-- Form END -->

            </div>
          </div>
          <!-- Modificar Torneo END -->

        </div>
        <!-- Acciones Torneos END -->

        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-12">
            <h2 class="mb-4 text-dark">Eliminar Premio</h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <div class="row">

          <!-- Eliminar Ronda START -->
          <div class="col-6">
            <div class="card card-danger">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Eliminar <?php echo $nombrePremio;?></h3>
              </div>
              <!-- Card Header END -->

              <p class="m-2 text-dark">Ingrese su cuenta para eliminar el premio</p>

              <!-- Form START -->
              <form class="form-horizontal" action ="<?php echo $urlDB;?>/php/eliminarPremio.php?id=<?php echo $idPremio;?>" method="POST">
                
                <!-- Card Body START -->
                <div class="card-body">

                  <!-- Input Usuario START -->
                  <div class="form-group row">
                    <label for="usuario" class="col-4">Cuenta</label>
                    <div class="col-8">
                      <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Cuenta">
                    </div>
                  </div>
                  <!-- Input Usuario END -->

                  <!-- Input Contraseña START -->
                  <div class="form-group row">
                    <label for="password" class="col-4">Contraseña</label>
                    <div class="col-8">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                    </div>
                  </div>
                  <!-- Input Usuario END -->

                </div>
                <!-- Input Usuario END -->
                
                <!-- Submit START -->
                <div class="card-footer d-flex justify-content-center">
                  <button type="submit" class="btn btn-danger">Eliminar Premio</button>
                </div>
                <!-- Submit END -->

              </form>
              <!-- Form END -->
            </div>
          </div>
          <!-- Eliminar Ronda END -->
          
        </div>
        
      </div>
    </section>
    <!-- Content END -->

  </div>
  <!-- Content Wrapper. Contains page content END-->

  <!--FOOTER START-->
  <?php
  require_once("../components/footer.php");
  ?>
  <!--FOOTER END-->

</div>
<!-- Wrapper END -->

<!-- SCRIPTS -->
<!-- jQuery -->
<script src="<?php echo $urlDB;?>/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo $urlDB;?>/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo $urlDB;?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?php echo $urlDB;?>/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo $urlDB;?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo $urlDB;?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo $urlDB;?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo $urlDB;?>/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo $urlDB;?>/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo $urlDB;?>/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo $urlDB;?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo $urlDB;?>/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo $urlDB;?>/plugins/moment/moment.min.js"></script>
<script src="<?php echo $urlDB;?>/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo $urlDB;?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo $urlDB;?>/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo $urlDB;?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- Select2 -->
<script src="<?php echo $urlDB;?>/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo $urlDB;?>/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?php echo $urlDB;?>/plugins/moment/moment.min.js"></script>
<script src="<?php echo $urlDB;?>/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="<?php echo $urlDB;?>/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo $urlDB;?>/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo $urlDB;?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?php echo $urlDB;?>/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $urlDB;?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $urlDB;?>/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo $urlDB;?>/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $urlDB;?>/dist/js/demo.js"></script>
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
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
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
        format: 'MM/DD/YYYY hh:mm A'
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