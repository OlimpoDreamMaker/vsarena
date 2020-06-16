<?php
$p = '..';
session_start();
require_once("../config.php");
require_once("./php/conexionBD.php");
require_once("./php/isAdmin.php");
require_once("./php/dataUser.php");
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
desconectarBD($conexion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php
  require_once("$p/components/head.php");
  mostrarHead("Tienda",$url);
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
            <h1 class="m-0 text-dark">Tienda</h1>
          </div>
          <!-- Titulo Page END -->

          <!-- Navegacion Pages START -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Tienda</li>
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
            <h2 class="m-0 text-dark">Informacion Tienda</h2>
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
                require_once("../php/cantidadVentas.php");
                echo "<h3>".cantidadVentas($conexion)."</h3>";
                desconectarBD($conexion);
                ?>
                <p>Ventas Totales</p>
              </div>
              <div class="icon">
                <i class="fas fa-money-bill-wave"></i>
              </div>
            </div>
          </div>
          <!-- Box 1 END -->

          <!-- Box 2 START -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <?php
                require_once("../php/conexionBD.php");
                $conexion = conectar();
                require_once("../php/cantidadProductos.php");
                echo "<h3>".cantidadProductos($conexion)."</h3>";
                desconectarBD($conexion); 
                ?>
                <p>Cantidad de Productos</p>
              </div>
              <div class="icon">
                <i class="fas fa-box"></i>
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
                require_once("../php/ingresosTotales.php");
                echo "<h3>$".ingresosTotales($conexion)."</h3>";
                desconectarBD($conexion);
                ?>
                <p>Ingresos totales</p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-bar"></i>
              </div>
            </div>
          </div>
          <!-- Box 3 END -->

          <!-- Box 4 START -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>0</h3>
                <p>Ventas Canceladas</p>
              </div>
              <div class="icon">
                <i class="far fa-chart-bar"></i>
              </div>
            </div>
          </div>
          <!-- Box 4 END -->

        </div>
        <!-- Small boxes (Stat box) END-->

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
                    <th>Precio Efectivo</th>
                    <th>Precio Mon Virtual</th>
                    <th>Stock</th>
                    <th>Cupon</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Productos END -->

                  <!-- Contenido Productos START -->
                  <tbody>
                  <?php
                  require_once("../php/tablaProducto.php");
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

          <!-- Tabla Ventas START -->
          <div class="col-12">

            <!-- Card START -->
            <div class="card">
              
              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Ventas</h3>
              </div>
              <!-- Card Header END -->

              <!-- Card Body START -->
              <div class="card-body">

                <table id="example3" class="table table-bordered table-hover">
                  
                  <!-- Cabecera Tabla Ventas START -->
                  <thead>
                  <tr>
                    <th>ID-Venta</th>
                    <th>ID-Comprador</th>
                    <th>Cant Productos</th>
                    <th>Total</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Ventas END -->

                  <!-- Contenido Ventas START -->
                  <tbody>
                  <?php
                  require_once("../php/tablaVentas.php");
                  $conexion = conectar();
                  tablaVentas($conexion);
                  desconectarBD($conexion);
                  ?>
                  </tbody>
                  <!-- Contenido Ventas END -->

                </table>

              </div>
              <!-- Card Body END -->

            </div>
            <!-- Card END -->

          </div>
          <!-- Tabla Ventas END -->

          <!-- Tabla Cupones START -->
          <div class="col-12">

            <!-- Card START -->
            <div class="card">
              
              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Cupones</h3>
              </div>
              <!-- Card Header END -->

              <!-- Card Body START -->
              <div class="card-body">

                <table id="example4" class="table table-bordered table-hover">
                  
                  <!-- Cabecera Tabla Ventas START -->
                  <thead>
                  <tr>
                    <th>ID-Cupon</th>
                    <th>Nombre</th>
                    <th>Porcentaje Descuento</th>
                    <th>Estado</th>
                    <th>Duracion de Cupon</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Ventas END -->

                  <!-- Contenido Ventas START -->
                  <tbody>
                  <?php
                  require_once("../php/tablaCupones.php");
                  ?>
                  </tbody>
                  <!-- Contenido Ventas END -->

                </table>

              </div>
              <!-- Card Body END -->

            </div>
            <!-- Card END -->

          </div>
          <!-- Tabla Cupones END -->

        </div>
        <!--Tablas END-->

        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-6">
            <h2 class="m-0 text-dark">Acciones Tienda</h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Formularios START -->
        <div class="row">
          
          <!-- Crear Producto y Cupon START -->
          <div class="col-md-12">

            <!-- Card START -->
            <div class="card card-primary">

              <!-- Titulo Form START -->
              <div class="card-header">
                <h3 class="card-title">Crear Producto</h3>
              </div>
              <!-- Titulo Form END -->
              
              <!-- Form START -->
              <form role="form" action="<?php echo $url;?>/php/crearProducto.php" method="POST" enctype="multipart/form-data">
                <div class="row card-body">
                  
                  <!-- Input Nombre Producto START -->
                  <div class="form-group col-6">
                    <label for="nombreProducto">Nombre Producto</label>
                    <input type="text" class="form-control" name="nombreProducto" id="nombreProducto" placeholder="Nombre Producto..." required>
                  </div>
                  <!-- Input Nombre Producto END -->

                  <!-- Input Stock Producto START -->
                  <div class="form-group col-6">
                    <label for="stockProducto">Stock</label>
                    <input type="number" class="form-control" name="stockProducto" id="stockProducto" placeholder="Stock del Producto..." required>
                  </div>
                  <!-- Input Stock Producto END -->

                  <!-- Input Precio Producto START -->
                  <div class="form-group col-6">
                    <label for="precioProductoEfectivo">Precio Producto Efectivo</label>
                    <input type="text" class="form-control" name="precioProductoEfectivo" id="precioProductoEfectivo" placeholder="Precio Producto Efectivo..." required>
                  </div>
                  <!-- Input Precio Producto END -->

                  <!-- Input Precio Producto START -->
                  <div class="form-group col-6">
                    <label for="precioProductoMonVirtual">Precio Producto Moneda Virutal</label>
                    <input type="text" class="form-control" name="precioProductoMonVirtual" id="precioProductoMonVirtual" placeholder="Precio Producto Mon Virtual..." required>
                  </div>
                  <!-- Input Precio Producto END -->

                  <!-- Input Imgaen Producto START -->
                  <div class="form-group col-6">
                    <label for="foto">Agregar imagen</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="foto" id="foto" required>
                        <label class="custom-file-label" for="foto">Elija la imagen</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Subir</span>
                      </div>
                    </div>
                  </div>
                  <!-- Input Imgaen Producto END -->

                  <!-- Input Descripcion Producto START -->
                  <div class="form-group col-6">
                    <label for="descrpcionProducto">Descripcion Producto</label>
                    <textarea class="form-control" name="descripcionProducto" id="descrpcionProducto" rows="3" placeholder="Descripcion Producto ..." required></textarea>
                  </div>
                  <!-- Input Descripcion Producto END -->

                </div>

                <!-- Submit Producto START-->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Crear Producto</button>
                </div>
                <!-- Submit Producto END-->

              </form>
              <!-- Form END -->

            </div>
            <!-- Card END -->

            <!-- Card START -->
            <div class="card card-primary">

              <!-- Titulo Form START -->
              <div class="card-header">
                <h3 class="card-title">Crear Cupon</h3>
              </div>
              <!-- Titulo Form END -->
              
              <!-- Form START -->
              <form role="form" action="<?php echo $url;?>/php/crearCupon.php" method="POST" enctype="multipart/form-data">
                <div class="row card-body">
                  
                  <!-- Input Nombre Cupon START -->
                  <div class="form-group col-6">
                    <label for="nombreCupon">Nombre Cupon</label>
                    <input type="text" class="form-control" name="nombreCupon" id="nombreProducto" placeholder="" required>
                  </div>
                  <!-- Input Nombre Cupon END -->

                  <!-- Input Porcentaje Descuento Cupon START -->
                  <div class="form-group col-6">
                    <label for="porcentajeDescuento">Porcentaje de descuento</label>
                    <input type="text" class="form-control" name="porcentajeDescuento" id="porcentajeDescuento" placeholder="" required>
                  </div>
                  <!-- Input Porcentaje Descuento Cupono END -->

                  <!-- Input Fechas START -->
                  <div class="form-group col-6">
                    <label for="reservationtime">Fecha y tiempo de rango del cupon:</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="text" class="form-control float-right" id="reservationtime" name="fechaCupon">
                    </div>
                  </div>
                  <!-- Input Fechas END -->

                </div>

                <!-- Submit Cupon START-->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Crear Cupon</button>
                </div>
                <!-- Submit Cupon END-->

              </form>
              <!-- Form END -->

            </div>
            <!-- Card END -->


          </div>
          <!-- Crear Producto yCupon END -->

        </div>
        <!-- Formularios END -->

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
    $('#example4').DataTable({
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
        format: 'YYYY/MM/DD HH:mm:ss ' //'MM/DD/YYYY hh:mm A'
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
