<?php
$p = '..';
session_start();
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
desconectar($conexion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php
  require_once("$p/components/head.php");
  mostrarHead("Torneos",$urlDB);
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

    <!-- Content Header (Page header) START-->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

          <!-- Titulo Page START -->
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Torneos</h1>
          </div>
          <!-- Titulo Page END -->

          <!-- Navegacion Pages START -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Torneos</li>
            </ol>
          </div>
          <!-- Navegacion Pages END -->

        </div>
      </div>
    </div>
    <!-- Content Header (Page header) END-->

    <!--Content START-->
    <section class="content">
      <div class="container-fluid">

        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-6">
            <h2 class="m-0 text-dark">Informacion Torneos</h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Small boxes (Stat box) START-->
        <div class="row">

          <!-- Box 1 START -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
              <div class="inner">
                <?php
                $conexion = conectar();
                echo "<h3>".cantidadTorneos($conexion)."</h3>";
                desconectar($conexion);
                ?>
                <p>Torneos Totales</p>
              </div>
              <div class="icon">
                <i class="fas fa-trophy"></i>
              </div>
            </div>
          </div>
          <!-- Box 1 END -->

          <!-- Box 2 START -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <?php
                $conexion = conectar();
                echo "<h3>".cantidadTorneosActivos($conexion)."</h3>";
                desconectar($conexion);
                ?>
                <p>Torneos Activos</p>
              </div>
              <div class="icon">
                <i class="fas fa-trophy"></i>
              </div>
            </div>
          </div>
          <!-- Box 2 END -->

          <!-- Box 3 START -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <?php
                $conexion = conectar();
                echo "<h3>".cantidadTorneosConcluidos($conexion)."</h3>";
                desconectar($conexion);
                ?>
                <p>Torneos Concluidos</p>
              </div>
              <div class="icon">
                <i class="fas fa-trophy"></i>
              </div>
            </div>
          </div>
          <!-- Box 3 END -->

          <!-- Box 4 START -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <?php
                $conexion = conectar();
                echo "<h3>".cantidadTorneosCancelados($conexion)."</h3>";
                desconectar($conexion);
                ?>
                <p>Torneos Cancelados</p>
              </div>
              <div class="icon">
                <i class="fas fa-trophy"></i>
              </div>
            </div>
          </div>
          <!-- Box 4 END -->

        </div>
        <!-- Small boxes (Stat box) END-->

        <!-- Tablas START -->
        <div class="row">

          <!-- Tabla Torneos START -->
          <div class="col-12">
            <div class="card">
              
              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Torneos</h3>
              </div>
              <!-- Card Header END -->

              <!-- Card Body START -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">

                  <!-- Cabecera Tabla Torneos START -->
                  <thead>
                  <tr>
                    <th>ID-Torneo</th>
                    <th>Torneo</th>
                    <th>Juego</th>
                    <th>Cantidad Max de Equipos</th>
                    <th>Estado</th>
                    <th>Fases De Grupo</th>
                    <th>Modalidad</th>
                    <th>Fecha Inicio/Fin</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Torneos END -->

                  <!-- Contenido Tienda START -->
                  <tbody>
                  <?php
                  $conexion = conectar();
                  torneos($conexion,$amigable);
                  desconectar($conexion);
                  ?>
                  </tbody>
                  <!-- Contenido Tienda END -->

                </table>
              </div>
              <!-- Card Body END -->

            </div>
          </div>
          <!-- Tabla Torneos END -->

        </div>
        <!-- Tablas END -->

        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-6">
            <h2 class="m-0 text-dark">Acciones Torneos</h2>
          </div>
        </div>
        <!--Subtitulo END-->
        
        <!-- Formularios START -->
        <div class="row">

          <!-- Crear Torneo START -->
          <div class="col-md-12">
            <div class="card card-primary">

              <!-- Titulo Form START -->
              <div class="card-header">
                <h3 class="card-title">Crear Torneo</h3>
              </div>
              <!-- Titulo Form END -->

              <!-- Form START -->
              <form role="form" action="<?php echo $urlDB;?>/php/crearTorneo.php" method="POST">
                
                <!-- Card Body START -->
                <div class="row card-body">

                  <!-- Input Nombre Torneo START -->
                  <div class="form-group col-6">
                    <label for="nombreTorneo">Nombre Torneo</label>
                    <input type="text" class="form-control" id="nombreTorneo" name="nombreTorneo" placeholder="Nombre Torneo...">
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
                        echo "<option value='".$fila['idJuego']."'>".$fila['juego']."</option>";
                      }
                      $desconectar = desconectar($conexion);
                      ?>
                    </select>
                  </div>
                  <!-- Input Juego END -->

                  <!-- Input Cantidad de Participantes START -->
                  <div class="form-group col-6">
                    <label for="cantMaxEquipo">Cantidad Max de Equipos</label>
                    <input type="number" class="form-control" id="cantMaxEquipo" name="cantMaxEquipo" placeholder="Cantidad Max de Equipos...">
                  </div>
                  <!-- Input Cantidad de Participantes END -->

                  <!-- Input Modalidad START -->
                  <div class="form-group col-6">
                    <label for="modalidad">Modalidad</label>
                    <select class="form-control" id="modalidad" name="modalidad">
                      <option value="1 vs 1">1 vs 1</option>
                      <option value="2 vs 2">2 vs 2</option>
                      <option value="3 vs 3">3 vs 3</option>
                      <option value="4 vs 4">4 vs 4</option>
                      <option value="5 vs 5">5 vs 5</option>
                      <option value="6 vs 6">6 vs 6</option>
                      <option value="Todos vs Todos">Todos vs Todos</option>
                    </select>
                  </div>
                  <!-- Input Modalidad END -->

                  <!-- Input Fase de Grupo START -->
                  <div class="form-group col-6">
                    <label for="fasesGrupo">Tiene fase de grupos</label>
                    <select class="form-control" id="fasesGrupo" name="fasesGrupo">
                      <option value="1">SI</option>
                      <option value="0">NO</option>
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
                  <button type="submit" class="btn btn-primary">Crear Torneo</button>
                </div>
                <!-- Submit END -->

              </form>
              <!-- Form END -->

            </div>
          </div>
          <!-- Crear Torneo END -->

        </div>
        <!-- Formularios END -->

      </div>
    </section>
    <!--Content END-->

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
        format: 'YYYY/MM/DD HH:mm:ss '
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