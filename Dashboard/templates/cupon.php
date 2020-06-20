<?php
$p = '..';
session_start();
require_once("../../BackEnd/config.php");
require_once("$p/php/conexionBD.php");
require_once("$p/php/isAdmin.php");
require_once("$p/php/dataUser.php");
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
$idCupon = $_GET['id'];
$consulta = "SELECT * FROM cupones WHERE idCupon='$idCupon'";
$resultado = mysqli_query($conexion, $consulta);
$cupon = mysqli_fetch_assoc($resultado);
$nombreCupon = $cupon['nombreCupon'];
$estadoCupon = $cupon['estadoCupon'];
$porcentajeDescuento = $cupon['porcentajeDescuento'];
$inicioCupon = $cupon['inicioCupon'];
$finCupon = $cupon['finCupon'];
desconectarBD($conexion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php
  require_once("$p/components/head.php");
  mostrarHead("Cupon | $nombreCupon", $url);
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

    <!-- Content Header (Page header) START -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

          <!-- Titulo Page START -->
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Cupon <?php echo $nombreCupon;?></h1>
          </div>
          <!-- Titulo Page END -->

          <!-- Navegacion Pages START -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo $amigable;?>/panel/tienda/">Tienda</a></li>
              <li class="breadcrumb-item active"><?php echo $nombreCupon;?></li>
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
            <h2 class="m-0 text-dark">Informacion <?php echo $nombreCupon;?></h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Small boxes (Stat box) START -->
        <!--div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box --
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>30</h3>

                <p>Participantes Inscriptos</p>
              </div>
              <div class="icon">
                <i class="fas fa-trophy"></i>
              </div>
              <a href="#" class="small-box-footer">Ver Usuarios Inscriptos <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><i class="fas fa-coins"></i> s/Premios</h3>
                <p>Premio</p>
              </div>
              <div class="icon">
                <i class="fas fa-trophy"></i>
              </div>
              <a href="#" class="small-box-footer">Ver Premios <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            -- small box --
            <div class="small-box bg-success">
              <div class="inner">
                <h3>16/05-18:00</h3>
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
                <h3>20/05-20:00</h3>
                <p>Fecha de Fin</p>
              </div>
              <div class="icon">
                <i class="fas fa-trophy"></i>
              </div>
            </div>
          </div>
        </div-->
        <!-- Small boxes (Stat box) END -->

        <!-- Tabla Cupon START -->
        <div class="row">
          
          <!-- Tabla Cupon START -->
          <div class="col-12">
            <div class="card">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Cupon - <?php echo $nombreCupon;?></h3>
              </div>
              <!-- Card Header END -->
              
              <!-- Card Body START -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  
                  <!-- Cabecera Tabla Cupon START -->
                  <thead>
                  <tr>
                    <th>ID-Cupon</th>
                    <th>Cupon</th>
                    <th>Porcentaje Descuento</th>
                    <th>Estado</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Cupon END -->
                  
                  <!-- Contenido Tabla Cupon START -->
                  <tbody>
                  <tr>
                    <td><?php echo $idCupon;?></td>
                    <td><?php echo $nombreCupon;?></td>
                    <td><?php echo $porcentajeDescuento;?>%</td>
                    <td><?php if($estadoCupon==1){echo "Activo";}else{echo "Incactivo";}?></td>
                    <td>|<?php echo $inicioCupon;?>|</td>
                    <td>|<?php echo $finCupon;?>|</td>
                  </tr>
                  </tbody>
                  <!-- Cabecera Tabla Cupon END -->

                </table>
              </div>
              <!-- Card Body END -->

            </div>
          </div>
          <!-- Tabla Cupon END -->

        </div>
        <!-- Tablas Cupon END -->

        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-12">
            <h2 class="m-0 text-dark">Usuarios o Productos que poseen este cupon</h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Equipos START -->
        <div class="row">

          <!-- Mensaje si no se asigno a nadie el cupon START -->
          <div class="col-12 mb-4">
            <h2 class="text-center">Ningun usuario y ningun producto poseen este cupon</h2>
          </div>
          <!-- Mensaje si no se asigno a nadie el cupon END -->

          <!-- Usuarios START -->
          <div class="col-6">
            <div class="card">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Usuarios que poseen el cupon</h3>
              </div>
              <!-- Card Header END -->
              
              <!-- Card Body START -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  
                  <!-- Cabecera Tabla Usuarios START -->
                  <thead>
                  <tr>
                    <th>ID-Usuaio</th>
                    <th>Nombre Usuario</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Usuarios END -->
                  
                  <!-- Contenido Tabla Usuarios START -->
                  <tbody>
                  <tr>
                    <td><a href="./usuario.php">038</a></td>
                    <td><a href="./usuario.php">Tornado323</a></td>
                  </tr>
                  <tr>
                    <td><a href="./usuario.php">127</a></td>
                    <td><a href="./usuario.php">xxXBlackGladiatorXxx</a></td>
                  </tr>
                  <tr>
                    <td><a href="./usuario.php">320</td>
                    <td><a href="./usuario.php">Thor123</a></td>
                  </tr>
                  <tr>
                    <td><a href="./usuario.php">415</a></td>
                    <td><a href="./usuario.php">Zeus2mil</a></td>
                  </tr>
                  <tr>
                    <td><a href="./usuario.php">369</a></td>
                    <td><a href="./usuario.php">BunnyFire</a></td>
                  </tr>
                  </tbody>
                  <!-- Cabecera Tabla Usuarios END -->

                </table>
              </div>
              <!-- Card Body END -->

            </div>
          </div>
          <!-- Usuarios END -->

          <!-- Productos START -->
          <div class="col-6">
            <div class="card">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Productos que poseen el cupon</h3>
              </div>
              <!-- Card Header END -->
              
              <!-- Card Body START -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  
                  <!-- Cabecera Tabla Productos START -->
                  <thead>
                  <tr>
                    <th>ID-Producto</th>
                    <th>Nombre Producto</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Productos END -->
                  
                  <!-- Contenido Tabla Productos START -->
                  <tbody>
                  <tr>
                    <td><a href="./producto.php">038</a></td>
                    <td><a href="./producto.php">Taza de LOL</a></td>
                  </tr>
                  <tr>
                    <td><a href="./producto.php">127</a></td>
                    <td><a href="./producto.php">Gorra Fortnite</a></td>
                  </tr>
                  <tr>
                    <td><a href="./producto.php">320</td>
                    <td><a href="./producto.php">Remera CS:GO</a></td>
                  </tr>
                  <tr>
                    <td><a href="./producto.php">415</a></td>
                    <td><a href="./producto.php">Llavero Free Fire</a></td>
                  </tr>
                  </tbody>
                  <!-- Cabecera Tabla Productos END -->

                </table>
              </div>
              <!-- Card Body END -->

            </div>
          </div>
          <!-- Productos END -->

        </div>
        <!-- Equipos END -->
        
        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-6">
            <h2 class="m-0 text-dark">Acciones Cupon <?php echo $nombreCupon;?></h2>
          </div>
        </div>
        <!--Subtitulo END-->
        
        <!-- Acciones Cupon START -->
        <div class="row">

          <!-- Modificar Cupon START -->
          <div class="col-md-12">

            <!-- Card START -->
            <div class="card card-primary">

              <!-- Titulo Form START -->
              <div class="card-header">
                <h3 class="card-title">Modificar Cupon <?php echo $nombreCupon;?></h3>
              </div>
              <!-- Titulo Form END -->
              
              <!-- Form START -->
              <form role="form" action="<?php echo $url; ?>/php/modificarCupon.php" method="POST" enctype="multipart/form-data">
                <div class="row card-body">
                  
                  <!-- Input Nombre Cupon START -->
                  <div class="form-group col-6">
                    <label for="nombreCupon">Nombre Cupon</label>
                    <input type="text" class="form-control" name="nombreCupon" id="nombreProducto" placeholder="<?php echo $nombreCupon;?>">
                  </div>
                  <!-- Input Nombre Cupon END -->

                  <!-- Input Porcentaje Descuento Cupon START -->
                  <div class="form-group col-6">
                    <label for="porcentajeDescuento">Porcentaje de descuento</label>
                    <input type="text" class="form-control" name="porcentajeDescuento" id="porcentajeDescuento" placeholder="<?php echo $porcentajeDescuento;?>">
                  </div>
                  <!-- Input Porcentaje Descuento Cupono END -->

                  <!-- Input Fechas START -->
                  <div class="form-group col-6">
                    <label for="reservationtime">Fecha y tiempo de rango del cupon:</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="text" class="form-control float-right" id="reservationtime" name="fechaCupon" value="">
                    </div>
                  </div>
                  <!-- Input Fechas END -->

                </div>

                <!-- Submit Cupon START-->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Modificar Cupon</button>
                </div>
                <!-- Submit Cupon END-->

              </form>
              <!-- Form END -->

            </div>
            <!-- Card END -->


          </div>
          <!-- Modificar Cupon END -->

          <!-- Eliminar Cupon START -->
          <div class="col-6">
            <div class="card card-danger">
              
              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Eliminar Cupon</h3>
              </div>
              <!-- Card Header END -->

              <p class="m-2 text-dark">Ingrese su cuenta para eliminar el Cupon</p>

              <!-- Form START -->
              <form class="form-horizontal" method="POST" action="<?php echo $url;?>/php/eliminarCupon.php?id=<?php echo $idCupon;?>">

                <!-- Card Body START -->
                <div class="card-body">

                  <!-- Input ID-Cupon START -->
                  <div class="form-group row">
                    <label for="idCupon" class="col-4">ID-Cupon</label>
                    <div class="col-8">
                      <input type="text" class="form-control" id="idCupon" name="idCupon" disabled value="<?php echo $idCupon;?>">
                    </div>
                  </div>
                  <!-- Input ID-Cupon END -->

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
                  <!-- Input Contraseña END -->

                </div>
                <!-- Card Body END -->

                <!-- Submit START -->
                <div class="card-footer d-flex justify-content-center">
                  <button type="submit" class="btn btn-danger">Eliminar Cupon</button>
                </div>
                <!-- Submit END -->

              </form>
              <!-- Form END -->
            </div>
          </div>
          <!-- Eliminar Cupon END -->

        </div>
        <!-- Acciones Cupon END -->

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
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
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
        format: 'YYYY/MM/DD HH:mm:ss'
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