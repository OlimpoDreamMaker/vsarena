<?php
$p = '..';
session_start();
require_once("../config.php");
require_once("../php/conexionBD.php");
require_once("../php/isAdmin.php");
require_once("../php/dataUser.php");
$conexion = conectar();
if(isset($_SESSION['usuario'])){
  if(isAdmin($conexion,$_SESSION['usuario'])){

  }else{
    desconectarBD($conexion);
    header("Location: ../index.php");
  }
}else{
  echo "<script>alert('Necesita ser admin para podes acceder a esta pagina')</script>";
  desconectarBD($conexion);
  header("Location: ../index.php?err=456");
}
$idVenta = $_GET['id'];
$consulta = "SELECT * FROM ventas WHERE idVenta='$idVenta'";
$resultado = mysqli_query($conexion, $consulta);
$venta = mysqli_fetch_assoc($resultado);
$cantProductos = $venta['cantidadProductos'];
$total = $venta['totalVenta'];
$usario = $venta['Usuarios_idUsuario'];
desconectarBD($conexion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php
  require_once("$p/components/head.php");
  mostrarHead("Vena-Compra",$url);
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
            <h1 class="m-0 text-dark">Venta/Compra #<?php echo $idVenta?></h1>
          </div>
          <!-- Titulo Page END -->

          <!-- Navegacion Pages START -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo $amigable;?>/panel/tienda/">Tienda</a></li>
              <li class="breadcrumb-item active">Venta/Compra #<?php echo $idVenta?></li>
            </ol>
          </div>
          <!-- Navegacion Pages END -->

        </div>
      </div>
    </div>
    <!-- Content Header (Page header) END-->

    <!--Content START-->
    <section class="content">

      <!--Fluid START-->
      <div class="container-fluid">

        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-6">
            <h2 class="m-0 text-dark">Informacion Venta/Compra</h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!--Tablas START-->
        <div class="row">

          <!-- Tabla Productos START -->
          <div class="col-12">
            
            <!-- Card START -->
            <div class="card">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Productos</h3>
              </div>
              <!-- Card Header END -->

              <!-- Card Body START -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">

                  <!-- Cabecera Tabla Productos START -->
                  <thead>
                  <tr>
                    <th>ID-Productos</th>
                    <th>Nombre Producto</th>
                    <th>Precio p/unidad</th>
                    <th>Cantidad</th>
                    <th>Total Productos x Cantidad</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Productos END -->

                  <!-- Contenido Productos START -->
                  <tbody>
                  <?php
                  require_once("../php/tablaVenta.php");
                  $conexion = conectar();
                  tablaVenta($conexion, $idVenta);
                  desconectarBD($conexion);
                  ?>
                  </tbody>
                  <!-- Contenido Productos END -->

                </table>
              </div>
              <!-- Card Body END -->

            </div>
            <!-- Card END -->

          </div>
          <!-- Tabla Productos END -->

        </div>
        <!--Tablas END-->

        <!--Subtitulo START--
        <div class="row mb-4">
          <div class="col-12">
            <h2 class="m-0 text-dark">Reembolsar Venta/Compra</h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Eliminar Venta/Reembolso START -->
        <!--div class="col-6">
          <div class="card card-danger">
            
            <!-- Card Header START --
            <div class="card-header">
              <h3 class="card-title">Reembolsar Venta/Compra</h3>
            </div>
            <-- Card Header END --

            <p class="m-2 text-dark">Ingrese su cuenta para reembolsar venta</p>

            <!-- Form START --
            <form class="form-horizontal">

              <!-- Card Body START --
              <div class="card-body">

                <!-- Input Usuario START --
                <div class="form-group row">
                  <label for="inputEmail3" class="col-4">Cuenta</label>
                  <div class="col-8">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Cuenta">
                  </div>
                </div>
                <!-- Input Usuario END --

                <!-- Input Contraseña START --
                <div class="form-group row">
                  <label for="inputPassword3" class="col-4">Contraseña</label>
                  <div class="col-8">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Contraseña">
                  </div>
                </div>
                <!-- Input Contraseña END --

              </div>
              <!-- Card Body END -->

              <!-- Submit START --
              <div class="card-footer d-flex justify-content-center">
                <button type="submit" class="btn btn-danger">Reembolsar Venta</button>
              </div>
              <!-- Submit END --

            </form>
            <!-- Form END --
          </div>
        </div-->
        <!-- Eliminar Venta/Reembolso END -->

      </div>
      <!--Fluid END-->

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
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- Select2 -->
<script src="../plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
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
    $('#example3').DataTable({
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
