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
$idNoticia = $_GET['id'];
$consulta =  "SELECT * FROM noticias n, usuarios u 
              WHERE n.idNoticia='$idNoticia' 
              AND n.Usuarios_idUsuario=u.idUsuario";
$resultado = mysqli_query($conexion, $consulta);
$noticia = mysqli_fetch_assoc($resultado);
$tituloNoticia = $noticia['tituloNoticia'];
$imgNoticia = $noticia['imgNoticia'];
$contenidoNoticia = $noticia['contenidoNoticia'];
$fechaNoticia = $noticia['fechaNoticia'];
$idUsuario = $noticia['idUsuario'];
$usuario = $noticia['usuario'];

desconectar($conexion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php
  require_once("$p/components/head.php");
  mostrarHead("Noticia $tituloNoticia",$urlDB);
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
  aside(2,$conexion,$amigable,$urlDB,$imagenes);
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
            <h1 class="m-0 text-dark">Noticia - <?php echo $tituloNoticia;?></h1>
          </div>
          <!-- Titulo Page END -->

          <!-- Navegacion Pages START -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo $amigable;?>/panel/noticias/">Noticias</a></li>
              <li class="breadcrumb-item active"><?php echo $tituloNoticia;?></li>
            </ol>
          </div>
          <!-- Navegacion Pages END -->

        </div>
      </div>
    </div>
    <!-- Content Header (Page header) END -->

    <!-- Content START -->
    <section class="content">

      <!-- Fluid START -->
      <div class="container-fluid">
        
        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-6">
            <h2 class="m-0 text-dark">Informacion <?php echo $tituloNoticia;?></h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Small boxes (Stat box) START-->
        <div class="row">

          <!-- Box 1 START -->
          <!--div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>30</h3>
                <p>Torneos Realizados</p>
              </div>
              <div class="icon">
                <i class="fas fa-trophy"></i>
              </div>
            </div>
          </div-->
          <!-- Box 1 END -->

        </div>
        <!-- Small boxes (Stat box) START-->

      </div>
      <!-- Fluid END -->

      <!-- Info Noticia START -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">

            <div class="col-12 col-sm-6">

              <!-- Imagen Juego START -->
              <div class="col-12">
                <img src="<?php echo "$imagenes/imgNoticias/$imgNoticia";?>" class="product-image" alt="Product Image">
              </div>
              <!-- Imagen Juego END -->

            </div>

            <!-- Resumen Juego START -->
            <div class="col-12 col-sm-6">
              <h3 class="my-3"><?php echo $tituloNoticia;?></h3>
              <p>Fecha:&nbsp;&nbsp;<?php echo $fechaNoticia;?>&nbsp;&nbsp;&nbsp;Autor:&nbsp;&nbsp;<a href="../templates/usuario.php?id=<?php echo $idUsuario;?>"><?php echo $usuario;?></a></p>
              <p><?php echo $contenidoNoticia;?></p>

              <hr>

            </div>
            <!-- Resumen Juego END -->

          </div>

        </div>
        <!-- /.card-body -->
      </div>
      <!-- Info Noticia END -->

      <!-- Fluid START -->
      <div class="container-fluid">

        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-12">
            <h2 class="m-0 text-dark">Comentarios</h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!--Tabla Comentarios START-->
        <div class="row">

          <!-- Tags START -->
          <div class="col-12">
            <div class="card">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Comentarios</h3>
              </div>
              <!-- Card Header END -->
              
              <!-- Card Body START -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  
                  <!-- Cabecera Tabla Tag START -->
                  <thead>
                  <tr>
                    <th>ID-Comentario</th>
                    <th>ID-Usuario</th>
                    <th>Usuario</th>
                    <th>Contenido</th>
                    <th>Eliminar Comentario</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Tag END -->
                  
                  <!-- Contenido Tabla Tag START -->
                  <tbody>
                  <?php
                  $conexion = conectar();
                  comentariosNoticia($conexion, $idNoticia, $amigable);
                  desconectar($conexion);
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
        <!--Tabla Comentarios END-->

        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-12">
            <h2 class="m-0 text-dark">Tags</h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!--Tabla TAGS START-->
        <div class="row">

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
                  $conexion = conectar();
                  tagsNoticia($conexion, $idNoticia, $amigable);
                  desconectar($conexion);
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
        <!--Tabla TAGS END-->
        
        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-12">
            <h2 class="m-0 text-dark">Acciones Noticia - <?php echo $tituloNoticia;?></h2>
          </div>
        </div>
        <!--Subtitulo END-->
        
        <div class="row">

          <!-- Modificar Juego START -->
          <div class="col-md-12">

            <!-- Card START -->
            <div class="card card-primary">

              <!-- Titulo Form START -->
              <div class="card-header">
                <h3 class="card-title">Modificar - <?php echo $tituloNoticia;?></h3>
              </div>
              <!-- Titulo Form END -->
              
              <!-- Form START -->
              <form role="form" action="<?php echo $urlDB;?>/php/modificarNoticia.php?id=<?php echo $idNoticia; ?>" method="POST" enctype="multipart/form-data">

                <div class="row card-body">
                  
                  <!-- Input Nombre Producto START -->
                  <div class="form-group col-4">
                    <label for="tituloNoticia">Titulo Noticia</label>
                    <input type="text" class="form-control" name="tituloNoticia" id="tituloNoticia" placeholder="<?php echo $tituloNoticia;?>">
                  </div>
                  <!-- Input Nombre Producto END -->

                  <!-- Input Fecha START -->
                  <div class="form-group col-4">
                    <label>Fecha Noticia:</label>
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                          <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="fecha" id="fecha" placeholder="<?php echo $fechaNoticia;?>" />
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
                        <input type="file" class="custom-file-input" name="foto" id="foto">
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
                    $tag = $fila['tag'];
                    $idTag = $fila['idTag'];
                    $consulta =  "SELECT * FROM tags_has_noticias 
                                  WHERE Tags_idTag='$idTag'
                                  AND Noticias_idNoticia='$idNoticia' ";
                    $sub = mysqli_query($conexion, $consulta);
                    if($subF = mysqli_fetch_assoc($sub)){
                      echo "<div class='form-check'>";
                        echo "<input class='form-check-input' name='tags[]' id='$tag' type='checkbox' value='$idTag' checked>";
                        echo "<label class='form-check-label' for='$tag'>$tag</label>";
                      echo "</div>";
                    }else{    
                      echo "<div class='form-check'>";
                        echo "<input class='form-check-input' name='tags[]' id='$tag' type='checkbox' value='$idTag'>";
                        echo "<label class='form-check-label' for='$tag'>$tag</label>";
                      echo "</div>";
                    }
                  }
                  desconectar($conexion);
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
                        <textarea class="textarea" name="contenidoNoticia" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" placeholder=<?php echo $contenidoNoticia;?>></textarea>
                      </div>
                    </div>

                  </div>
                  <!--Text Area Contenido Noticia end -->

                </div>

                <!-- Submit Producto START-->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Modificar Noticia</button>
                </div>
                <!-- Submit Producto END-->
                
              </form>
              <!-- Form END -->

            </div>
            <!-- Card END -->

          </div>
          <!-- Modificar Juego END -->

          <!-- Eliminar Juego START -->
          <div class="col-6">
            <div class="card card-danger">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Eliminar Noticia</h3>
              </div>
              <!-- Card Header END -->

              <!-- Subtitulo START -->
              <p class="m-2 text-dark">Ingrese su cuenta para eliminar la noticia</p>
              <!-- Subtitulo END -->

              <!-- Form START -->
              <form class="form-horizontal" method="POST" action="<?php echo $urlDB;?>/php/eliminarNoticia.php?id=<?php echo $idNoticia;?>&autor=<?php echo $idUsuario;?>">

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
                      <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña">
                    </div>
                  </div>
                  <!-- Input Contraseña END -->

                </div>
                <!-- Card Body END -->

                <!-- Submit START -->
                <div class="card-footer d-flex justify-content-center">
                  <button type="submit" class="btn btn-danger">Eliminar Noticia</button>
                </div>
                <!-- Submit END -->

              </form>
              <!-- Form END -->

            </div>
          </div>
          <!-- Eliminar Juego END -->
          
        </div>
      </div>
      <!-- Fluid END -->

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
        format: 'YYYY/MM/DD'
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
