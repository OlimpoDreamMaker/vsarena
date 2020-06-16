<?php
$p = '..';
session_start();
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
desconectarBD($conexion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php
  require_once("$p/components/head.php");
  mostrarHead("Noticia",$p);
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
            <h1 class="m-0 text-dark">Noticias</h1>
          </div>
          <!-- Titulo Page END -->

          <!-- Navegacion Pages START -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Noticias</li>
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
            <h2 class="m-0 text-dark">Informacion Noticias</h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Small boxes (Stat box) START-->
        <div class="row">

          <!-- Box 1 START -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>44</h3>
                <p>Noticias Totales</p>
              </div>
              <div class="icon">
                <i class="fas fa-money-bill-wave"></i>
              </div>
            </div>
          </div>
          <!-- Box 1 END -->

          <!-- Box 2 START -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>$6.500</h3>
                <p>Comentarios totales</p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-bar"></i>
              </div>
            </div>
          </div>
          <!-- Box 2 END -->

        </div>
        <!-- Small boxes (Stat box) END-->

        <!--Tablas START-->
        <div class="row">

          <!-- Tabla Noticias START -->
          <div class="col-12">
            
            <!-- Card START -->
            <div class="card">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Noticias</h3>
              </div>
              <!-- Card Header END -->

              <!-- Card Body START -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">

                  <!-- Cabecera Tabla Productos START -->
                  <thead>
                  <tr>
                    <th>ID-Noticia</th>
                    <th>Titulo Noticia</th>
                    <th>Autor</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Productos END -->

                  <!-- Contenido Productos START -->
                  <tbody>
                  <?php
                  require_once("../php/tablaNoticias.php");
                  ?>
                  </tbody>
                  <!-- Contenido Productos END -->

                </table>
              </div>
              <!-- Card Body END -->

            </div>
            <!-- Card END -->

          </div>
          <!-- Tabla Noticias END -->

        </div>
        <!--Tablas END-->

        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-6">
            <h2 class="m-0 text-dark">Tags</h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!--Tabla y crear Tags START-->
        <div class="row">

          <!--Crear Tag START-->
          <div class="col-6">
            <div class="card card-primary">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Crear Tag</h3>
              </div>
              <!-- Card Header END -->

              <!-- Form START -->
              <form class="form-horizontal" method="POST" action="../php/crearTag.php">

                <!-- Card Body START -->
                <div class="card-body">
                  
                  <!-- Input Tag START -->
                  <div class="form-group row">
                    <label for="tag" class="col-4">Nombre Tag:</label>
                    <div class="col-8">
                      <input type="text" class="form-control" id="tag" name="tag" placeholder="Tag">
                    </div>
                  </div>
                  <!-- Input Tag END -->

                </div>
                <!-- Card Body END -->

                <!-- Submit START -->
                <div class="card-footer d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary">Crear Tag</button>
                </div>
                <!-- Submit END -->

              </form>
              <!-- Form END -->

            </div>
          </div>
          <!--Crear Tag END-->

          <!-- Tags START -->
          <div class="col-6">
            <div class="card">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Tags</h3>
              </div>
              <!-- Card Header END -->
              
              <!-- Card Body START -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  
                  <!-- Cabecera Tabla Tag START -->
                  <thead>
                  <tr>
                    <th>ID-Tag</th>
                    <th>Nombre Tag</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Tag END -->
                  
                  <!-- Contenido Tabla Tag START -->
                  <tbody>
                  <?php
                  require_once("../php/tablaTags.php");
                  ?>
                  </tbody>
                  <!-- Cabecera Tabla Tag END -->

                </table>
              </div>
              <!-- Card Body END -->

            </div>
          </div>
          <!-- Tags END -->

        </div>
        <!--Tabla y crear Tags END-->

        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-6">
            <h2 class="m-0 text-dark">Acciones Tienda</h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Formularios START -->
        <div class="row">
          
          <!-- Crear Noticia START -->
          <div class="col-md-12">

            <!-- Card START -->
            <div class="card card-primary">

              <!-- Titulo Form START -->
              <div class="card-header">
                <h3 class="card-title">Crear Noticia</h3>
              </div>
              <!-- Titulo Form END -->
              
              <!-- Form START -->
              <form role="form" action="../php/crearNoticia.php?autor=1" method="POST" enctype="multipart/form-data">

                <div class="row card-body">
                  
                  <!-- Input Nombre Producto START -->
                  <div class="form-group col-4">
                    <label for="tituloNoticia">Titulo Noticia</label>
                    <input type="text" class="form-control" name="tituloNoticia" id="tituloNoticia" placeholder="Titulo Noticia..." required>
                  </div>
                  <!-- Input Nombre Producto END -->

                  <!-- Input Fecha START -->
                  <div class="form-group col-4">
                    <label>Fecha:</label>
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                          <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="fecha" id="fecha" />
                          <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                  </div>
                  <!-- Input Fecha END -->
                  
                  <!-- Input Portada Noticia START -->
                  <div class="form-group col-4">
                    <label for="foto">Agregar Portada</label>
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
                  <!-- Input Portada Noticia END -->


                  <div class="form-group col-12">
                    <label for="tags">Tags</label>
                  </div>
                  <!--Selecciona TAGS START-->
                  <div class="form-group col-12 d-flex justify-content-around flex-wrap">
                  <?php
                  $conexion = conectar();
                  $consulta = "SELECT * FROM tags";
                  $resultado = mysqli_query($conexion,$consulta);
                  while($fila = mysqli_fetch_assoc($resultado)){
                    echo "<div class='form-check'>
                            <input class='form-check-input' name='tags[]' id='".$fila['tag']."' type='checkbox' value='".$fila['idTag']."'>
                            <label class='form-check-label' for='".$fila['tag']."'>".$fila['tag']."</label>
                          </div>";
                  }
                  desconectarBD($conexion);
                  ?>
                  </div>
                  <!--Selecciona TAGS END-->


                  <!--Text Area Contenido Noticia START -->
                  <div class="form-group col-12">

                    <!-- Input Asunto START -->
                    <div class="form-group col-12">
                      <h3>Contenido</h3>
                    </div>
                    <!-- Input Asunto END -->

                    <div class="card-body pad">
                      <div class="mb-3">
                        <textarea class="textarea" name="contenidoNoticia" placeholder="Place some text here"
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                      </div>
                    </div>

                  </div>
                  <!--Text Area Contenido Noticia end -->

                </div>

                <!-- Submit Producto START-->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Crear Noticia</button>
                </div>
                <!-- Submit Producto END-->
                
              </form>
              <!-- Form END -->

            </div>
            <!-- Card END -->

          </div>
          <!-- Crear Noticia END -->

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
        format: 'YYYY/MM/DD'
    });
    //Date range picker
    $('#reservation').daterangepicker();
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
