<?php
$p = '..';
session_start();
require_once("../php/conexionBD.php");
require_once("../php/isAdmin.php");
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
$idUsuario = $_GET['id'];
$consulta = "SELECT * FROM usuarios WHERE idUsuario='$idUsuario'";
$resultado = mysqli_query($conexion, $consulta);
$usuario = mysqli_fetch_assoc($resultado);
$nombreUsuario = $usuario['usuario'];
$email = $usuario['emailUsuario'];
$saldoEfectivo = $usuario['saldoEfectivo'];
$saldoMonVir = $usuario['saldoMonVir'];
$isAdmin = $usuario['isAdmin'];
$cupon = $usuario['Cupones_idCupon'];
$avatar = $usuario['avatarUsuario'];

desconectarBD($conexion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php
  require_once("$p/components/head.php");
  mostrarHead("Usuario | $nombreUsuario",$p);
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
            <h1 class="m-0 text-dark">Usuario <?php echo $nombreUsuario;?></h1>
          </div>
          <!-- Titulo Page END -->

          <!-- Navegacion Pages START -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../templates/usuarios.php">Usuarios</a></li>
              <li class="breadcrumb-item active"><?php echo $nombreUsuario;?></li>
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
            <h2 class="m-0 text-dark">Informacion <?php echo $nombreUsuario;?></h2>
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
                require_once("../php/cantidadComprasUsuario.php");
                $conexion = conectar();
                echo "<h3>".cantidadComprasUsuario($conexion,$idUsuario)."</h3>";
                desconectarBD($conexion);
                ?>
                <p>Compras Realizadas</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-bag"></i>
              </div>
            </div>
          </div>
          <!-- Box 1 END -->

          <!-- Box 2 START -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>30</h3>
                <p>Torneos en los que Participo</p>
              </div>
              <div class="icon">
                <i class="fas fa-trophy"></i>
              </div>
            </div>
          </div>
          <!-- Box 2 END -->

          <!-- Box 3 START -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>0</h3>
                <p>Advertencia de Bann</p>
              </div>
              <div class="icon">
                <i class="fas fa-trophy"></i>
              </div>
            </div>
          </div>
          <!-- Box 3 END -->

        </div>       
        <!-- Small boxes (Stat box) END--> 


        <div class="row">

            <!-- Perfil Usuario START -->
            <div class="col-6">
              <h2 class="m-0 mb-4 text-dark">Perfil Usuario</h2>
              <!-- Vista Usuario START -->
              <div class="card card-solid">
                <div class="card-body">
                  <div class="row">

                    <!-- Nombre Usuario START -->
                    <div class="col-12">
                      <h3 class="my-3"><?php echo $nombreUsuario;?></h3>
                    </div>
                    <!-- Nombre Usuario END -->

                    <!-- Imagen Producto START -->
                    <div class="col-12">
                      <img src="../../avatarUser/<?php echo $avatar;?>" class="product-image" alt="Avatar <?php echo $nombreUsuario?>">
                    </div>
                    <!-- Imagen Producto END -->

                  </div>
                </div>
              </div>
              <!-- Vista Usuario END -->
            </div>
            <!-- Perfil Usuario END -->

            <!-- Equipos START -->
            <div class="col-6">
              <h2 class="m-0 mb-4 text-dark">Equipo al que pertenece</h2>
              <!-- Card START -->
              <div class="card">
                
                <!-- Card Header START -->
                <div class="card-header">
                  <h3 class="card-title">Equipo</h3>
                </div>
                <!-- Card Header END -->

                <!-- Card Body START -->
                <div class="card-body">

                  <table id="example3" class="table table-bordered table-hover">
                    
                    <!-- Cabecera Tabla Equipos START -->
                    <thead>
                    <tr>
                      <th>ID-Equipo</th>
                      <th>Nombre Equipo</th>
                    </tr>
                    </thead>
                    <!-- Cabecera Tabla Equipos END -->

                    <!-- Contenido Equipos START -->
                    <tbody>
                    <tr>
                      <td><a href="#">256</a></td>
                      <td><a href="#">El sol antartico</a></td>
                    </tr>
                    </tbody>
                    <!-- Contenido Equipos END -->

                  </table>

                </div>
                <!-- Card Body END -->

              </div>
              <!-- Card END -->
            </div>
            <!-- Equipos END -->

        </div>

        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-6">
            <h2 class="m-0 text-dark">Compras Realizadas</h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <div class="row">

          <!-- Tabla Compras START -->
          <div class="col-6">

            <!-- Card START -->
            <div class="card">
              
              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title"><a href="./venta.php">Compra N°{id compra}</a></h3>
              </div>
              <!-- Card Header END -->

              <!-- Card Body START -->
              <div class="card-body">
                <table id="example3" class="table table-bordered table-hover">
                  
                  <!-- Cabecera Tabla Ventas START -->
                  <thead>
                  <tr>
                    <th>ID-Producto</th>
                    <th>Nombre Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Ventas END -->

                  <!-- Contenido Ventas START -->
                  <tbody>
                  <tr>
                    <td><a href="./producto.php">256</a></td>
                    <td><a href="./producto.php">Remera Fortnite</a></td>
                    <td>2</td>
                    <td>$17</td>
                  </tr>
                  <tr>
                    <td><a href="./producto.php">125</a></td>
                    <td><a href="./producto.php">Taza LOL</a></td>
                    <td>1</td>
                    <td>$7</td>
                  </tr>
                  <tr>
                    <td><a href="./producto.php">012</a></td>
                    <td><a href="./producto.php">1000 monedas de oro</a></td>
                    <td>1</td>
                    <td>$9.99</td>
                  </tr>
                  </tbody>
                  <!-- Contenido Ventas END -->

                </table>
              </div>
              <!-- Card Body END -->

              <div class="card-footer d-flex justify-content-end">
                <button class="btn btn-outline-secondary">Total = $33.99</button>
              </div>


            </div>
            <!-- Card END -->

          </div>
          <!-- Tabla Compras END -->

          <!-- Tabla Compras START -->
          <div class="col-6">

            <!-- Card START -->
            <div class="card">
              
              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title"><a href="./venta.php">Compra N°{id compra}</a></h3>
              </div>
              <!-- Card Header END -->

              <!-- Card Body START -->
              <div class="card-body">
                <table id="example3" class="table table-bordered table-hover">
                  
                  <!-- Cabecera Tabla Ventas START -->
                  <thead>
                  <tr>
                    <th>ID-Producto</th>
                    <th>Nombre Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Ventas END -->

                  <!-- Contenido Ventas START -->
                  <tbody>
                  <tr>
                    <td><a href="./producto.php">256</a></td>
                    <td><a href="./producto.php">Remera Fortnite</a></td>
                    <td>2</td>
                    <td>$17</td>
                  </tr>
                  <tr>
                    <td><a href="./producto.php">125</a></td>
                    <td><a href="./producto.php">Taza LOL</a></td>
                    <td>1</td>
                    <td>$7</td>
                  </tr>
                  <tr>
                    <td><a href="./producto.php">012</a></td>
                    <td><a href="./producto.php">1000 monedas de oro</a></td>
                    <td>1</td>
                    <td>$9.99</td>
                  </tr>
                  </tbody>
                  <!-- Contenido Ventas END -->

                </table>
              </div>
              <!-- Card Body END -->

              <div class="card-footer d-flex justify-content-end">
                <button class="btn btn-outline-secondary">Total = $33.99</button>
              </div>


            </div>
            <!-- Card END -->

          </div>
          <!-- Tabla Compras END -->

        </div>

        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-12">
            <h2 class="m-0 text-dark">Torneos en los que Participo</h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Torneos en los que Participo START -->
        <div class="row">
          <!-- Tabla Compras START -->
          <div class="col-12">

            <!-- Card START -->
            <div class="card">
              
              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Torneos</h3>
              </div>
              <!-- Card Header END -->

              <!-- Card Body START -->
              <div class="card-body">
                <table id="example3" class="table table-bordered table-hover">
                  
                  <!-- Cabecera Tabla Ventas START -->
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nombre Torneo</th>
                    <th>Juego</th>
                    <th>Cantidad de Participantes</th>
                    <th>Estado</th>
                    <th>Modalidad</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Ventas END -->

                  <!-- Contenido Ventas START -->
                  <tbody>
                  <tr>
                    <td><a href="./torneo.php">256</a></td>
                    <td><a href="./torneo.php">Champions League</a></td>
                    <td><a href="./juego.php">LOL</a></td>
                    <td>40</td>
                    <td>En Espera</td>
                    <td>5 vs 5</td>
                  </tr>
                  <tr>
                    <td><a href="./torneo.php">125</a></td>
                    <td><a href="./torneo.php">Fire in House</a></td>
                    <td><a href="./juego.php">CS:GO</a></td>
                    <td>30</td>
                    <td>Concluido</td>
                    <td>3 vs 3</td>
                  </tr>
                  <tr>
                    <td><a href="./torneo.php">056</a></td>
                    <td><a href="./torneo.php">La ultima bala</a></td>
                    <td><a href="./juego.php">Free Fire</a></td>
                    <td>32</td>
                    <td>Activo</td>
                    <td>Todos vs Todos</td>
                  </tr>
                  </tbody>
                  <!-- Contenido Ventas END -->

                </table>
              </div>
              <!-- Card Body END -->

            </div>
            <!-- Card END -->

          </div>
          <!-- Tabla Compras END -->
        </div>
        <!-- Torneos en los que Participo END -->

        <div class="row">

          <!-- Dar/Quitar Admin a usuario START -->
          <div class="col-6">

            <h2 class="m-0 text-dark mb-4"><?php if($isAdmin==1){echo "Quitar";}else{echo "Dar";}?> Admin</h2><!--O QUITAR ADMIN-->

            <div class="card card-<?php if($isAdmin==1){echo "danger";}else{echo "success";}?>"><!--Dar success|Quitar danger-->
              
              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title"><?php if($isAdmin==1){echo "Quitar";}else{echo "Dar";}?> Admin</h3>
              </div>
              <!-- Card Header END -->

              <p class="m-2 text-dark">Ingrese su cuenta para <?php if($isAdmin==1){echo "quitar";}else{echo "dar";}?> permisos de administrador</p>
              
              <!-- Form START -->
              <form class="form-horizontal" action="../php/darQuitarAdmin.php?id=<?php echo $idUsuario;?>" method="POST">
                
                <!-- Card Body START -->
                <div class="card-body">

                  <!-- Input Usuario START -->
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-4">Cuenta</label>
                    <div class="col-8">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Cuenta">
                    </div>
                  </div>
                  <!-- Input Usuario END -->

                  <!-- Input Contraseña START -->
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-4">Contraseña</label>
                    <div class="col-8">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Contraseña">
                    </div>
                  </div>
                  <!-- Input Contraseña END -->
                </div>
                <!-- Card Body END -->

                <!-- Submit START -->
                <div class="card-footer d-flex justify-content-center">
                  <button type="submit" class="btn btn-<?php if($isAdmin==1){echo "danger";}else{echo "success";}?>"><?php if($isAdmin==1){echo "Quitar";}else{echo "Dar";}?> Admin</button>
                </div>
                <!-- Submit END -->

              </form>
              <!-- Form END -->
            </div>
          </div>
          <!-- Dar/Quitar Admin a usuario END -->

          <!-- Eliminar usuario START -->
          <div class="col-6">

            <h2 class="m-0 text-dark mb-4">Bannear Usuario</h2><!--Eliminar Bannear-->

            <div class="card card-danger">
              
              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Banner Usuario</h3>
              </div>
              <!-- Card Header END -->

              <p class="m-2 text-dark">Ingrese su cuenta para bannear</p>
              
              <!-- Form START -->
              <form class="form-horizontal" action="../php/eliminarUsuario.php?id=<?php echo $idUsuario;?>" method="POST">
                
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
                  <button type="submit" class="btn btn-danger">Bannear Usuario</button>
                </div>
                <!-- Submit END -->

              </form>
              <!-- Form END -->
            </div>
          </div>
          <!-- Eliminar usuario END -->

        </div>

        <!--Subtitulo START-->
        <div class="row mt-4 mb-4">
          <div class="col-6">
            <h2 class="m-0 text-dark">Enviar un email a <?php echo $nombreUsuario;?></h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Enviar un email a todos los Usuarios START -->
        <div class="row">
          <div class="col-12">
            <form class="card card-outline card-info" action="../php/emailUsuario.php?usuario=<?php echo $email ;?>" method="POST">

              <!-- Card Header START -->
              <div class="card-header">

                <!-- Input Asunto START -->
                <div class="form-group col-6">
                  <label for="asunto">Asunto</label>
                  <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Asunto...">
                </div>
                <!-- Input Asunto END -->

              </div>
              <!-- Tools Box END -->

              <div class="card-body pad">
                <div class="mb-3">
                  <textarea class="textarea" name="mensaje" id="mensaje" placeholder="Place some text here"
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
