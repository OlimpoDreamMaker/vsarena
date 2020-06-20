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
  mostrarHead("Juegos",$urlDB);
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
  aside(3,$conexion,$amigable,$urlDB,$imagenes);
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
            <h1 class="m-0 text-dark">Juegos</h1>
          </div>
          <!-- Titulo Page END -->

          <!-- Navegacion Pages START -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Juegos</li>
            </ol>
          </div>
          <!-- Navegacion Pages END -->

        </div>
      </div>
    </div>
    <!-- Content Header (Page header) END-->

    <!-- Content START -->
    <section class="content">

      <div class="container-fluid">

        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-6">
            <h2 class="m-0 text-dark">Informacion Juegos</h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Small boxes (Stat box) START-->
        <div class="row">

          <!-- Box 1 START -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <?php
                $conexion = conectar();
                echo "<h3>".cantidadJuegos($conexion)."</h3>";
                desconectar($conexion); 
                ?>
                <p>Juegos Totales</p>
              </div>
              <div class="icon">
                <i class="fas fa-gamepad"></i>
              </div>
              <!--a href="#" class="small-box-footer">Mas informacion <i class="fas fa-arrow-circle-right"></i></a-->
            </div>
          </div>
          <!-- Box 1 END -->

        </div>
        <!-- Small boxes (Stat box) END-->

        <!-- Tablas START -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Juegos</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID-Juego</th>
                    <th>Juego</th>
                    <th>Plataforma</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $conexion = conectar();
                  juegos($conexion, $amigable);
                  desconectar($conexion);
                  ?>
                  <!--tr>
                    <td><a href=".juego.php">256</a></td>
                    <td><a href="./juego.php">LOL</a></td>
                    <td>PC</td>
                  </tr-->
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- Tablas END -->

        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-6">
            <h2 class="m-0 text-dark">Agregar Juego</h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Formularios START -->
        <div class="row">
          <div class="col-md-12">

            <!-- Card START -->
            <div class="card card-primary">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Crear Juego</h3>
              </div>
              <!-- Card Header END -->

              <!-- Form START -->
              <form role="form" action="<?php echo $urlDB; ?>/php/crearJuego.php" method="POST" enctype="multipart/form-data">
                <div class="row card-body">

                  <!-- Input Nombre Juego START -->
                  <div class="form-group col-6">
                    <label for="nombreJuego">Nombre Juego</label>
                    <input type="text" class="form-control" id="nombreJuego" name="nombreJuego" placeholder="Nombre Juego...">
                  </div>
                  <!-- Input Nombre Juego END -->

                  <!-- Input Plataforma START -->
                  <div class="form-group col-6">
                    <label>Plataforma</label>
                    <select class="form-control" name="plataforma">
                      <option value="PC">PC</option>
                      <option value="PS3/4">PS3/4</option>
                      <option value="XBOX">XBOX</option>
                      <option value="MOBILE">MOBILE</option>
                      <option value="Multi Plataforma">Multi Plataforma</option>
                    </select>
                  </div>
                  <!-- Input Plataforma END -->

                  <!-- Portada Juego START -->
                  <div class="form-group col-6">
                    <label for="exampleInputFile">Subir Portada</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="foto" id="foto">
                        <label class="custom-file-label" for="foto">Elija el archivo</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Subir</span>
                      </div>
                    </div>
                  </div>
                  <!-- Portada Juego END -->

                  <!-- Detalles Juego START -->
                  <div class="form-group col-6">
                    <label>Detalles Juego</label>
                    <textarea class="form-control" rows="3" id="descripcionJuego" name="descripcionJuego" placeholder="Detalles Juego ..."></textarea>
                  </div>
                  <!-- Detalles Juego END -->

                </div>

                <!-- Submit START -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Crear Juego</button>
                </div>
                <!-- Submit END -->

              </form>
              <!-- Form END -->

            </div>
            <!-- Card END -->

          </div>
        </div>
        <!-- Formularios END -->

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
