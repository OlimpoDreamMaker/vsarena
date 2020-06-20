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
    header("Location: ../index.php");
  }
}else{
  echo "<script>alert('Necesita ser admin para podes acceder a esta pagina')</script>";
  desconectar($conexion);
  header("Location: ../index.php?err=456");
}
$idGrupo = $_GET['id'];
$consulta =  "SELECT * FROM grupos g, torneos t, juegos j
              WHERE g.idGrupo='$idGrupo' 
              AND g.Torneos_idTorneos=t.idTorneo
              AND j.idJuego=t.Juegos_idJuegos";
$resultado = mysqli_query($conexion, $consulta);
$grupo = mysqli_fetch_assoc($resultado);
$nombreGrupo = $grupo['nombreGrupo'];
$idTorneo = $grupo['Torneos_idTorneos'];
$torneo = $grupo['torneo'];
$idJuego = $grupo['idJuego'];
$juego = $grupo['juego'];
$cantMaxEquipos = $grupo['cantMaxEquipos'];
$modalidad = $grupo['modalidad'];
$estado = $grupo['estado'];
$fasesDeGrupo = $grupo['fasesDeGrupo'];

desconectar($conexion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php
  require_once("$p/components/head.php");
  mostrarHead("Grupo | $nombreGrupo", $urlDB);
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

  <?php
  require_once("$p/components/aside.php");
  $conexion = conectar();
  aside(4 ,$conexion,$amigable,$urlDB,$imagenes);
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
            <h1 class="m-0 text-dark">Torneo <?php echo "$torneo - $nombreGrupo";?></h1>
          </div>
          <!-- Titulo Page END -->

          <!-- Navegacion Pages START -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo $amigable; ?>/panel/torneos/">Torneos</a></li>
              <li class="breadcrumb-item"><a href="<?php echo $amigable; ?>/panel/torneo/<?php echo $idTorneo;?>/"><?php echo $torneo;?></a></li>
              <li class="breadcrumb-item active"><?php echo $nombreGrupo;?></li>
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
          <div class="col-6">
            <h2 class="m-0 text-dark">Informacion Grupo <?php echo $nombreGrupo;?></h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Tablas START -->
        <div class="row">
          
          <!-- Tabla Torneo START -->
          <div class="col-12">
            <div class="card">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Torneo - <?php echo $torneo;?></h3>
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
                    <th>Cantidad Max de Equipo</th>
                    <th>Fase de Grupos</th>
                    <th>Modalidad</th>
                    <th>Estado</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Torneo END -->
                  
                  <!-- Contenido Tabla Torneo START -->
                  <tbody>
                  <tr>
                    <td><a href="<?php echo $amigable;?>/panel/torneo/<?php echo $idTorneo;?>/"><?php echo $idTorneo;?></a></td>
                    <td><a href="<?php echo $amigable;?>/panel/juego/<?php echo $idJuego;?>/"><?php echo $juego;?></a></td>
                    <td><?php echo $cantMaxEquipos;?></td>
                    <td><?php if($fasesDeGrupo==1){echo "Si";}else{echo "No";}?></td>
                    <td><?php echo $modalidad;?></td>
                    <td><?php echo $estado;?></td>
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
        <!-- Tablas END -->

        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-6">
            <h2 class="m-0 text-dark">Tabla Grupo <?php echo $nombreGrupo;?></h2>
          </div>
          <div class="col-6">
            <h2 class="m-0 text-dark">Enfrentamientos Grupo <?php echo $nombreGrupo;?></h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!--IMPORTANTE HACER UNION CON EQUIPOS Y ENFRENTAMIENTOS-->
        <!-- Tabla Grupo START --
        <div class="row">

          <!-- Columna 6 START --
          <div class="col-6">


            <!-- Tabla Grupo START -->
            <div class="card">

              <!-- Card Header START --
              <div class="card-header">
                <h3 class="card-title">Grupo ?php $nombreGrupo;?--</h3>
              </div>
              <!-- Card Header END --
              
              <!-- Card Body START --
              <div class="card-body p-0">
                <table class="table table-striped">
                  
                  <!-- Cabecera Tabla Grupo START --
                  <thead>
                  <tr>
                    <th>ID-Equipo</th>
                    <th>Equipo</th>
                    <th>Puntos</th>
                    <th>Resultado</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Grupo END --
                  
                  <!-- Contenido Tabla Grupo START --
                  <tbody>
                  <?php
                  // require_once("../php/tablaGrupo.php");
                  // $conexion = conectar();
                  // grupo($conexion, $idGrupo);
                  ?>
                  <!--tr>
                    <td><a href="./juego.php">256</a></td>
                    <td><a href="./juego.php">Fuego Rapido</a></td>
                    <td>5</td>
                    <td>V - D - E - V</td>
                  </tr--
                  </tbody>
                  <!-- Cabecera Tabla Grupo END --

                </table>
              </div>
              <!-- Card Body END -->

            </div>
            <!-- Tabla Grupo END -->    

            <!-- Subtitulo START --
            <h2 class="m-0 mb-4 text-dark">Tabla Equipos Insciptos</h2>
            <!-- Subtitulo END --

            <!-- Tabla Equipos START --
            <div class="card">

              <!-- Card Header START --
              <div class="card-header">
                <h3 class="card-title">Equipos</h3>
              </div>
              <!-- Card Header END --
              
              <!-- Card Body START --
              <div class="card-body p-0">
                <table class="table table-striped">
                  
                  <!-- Cabecera Tabla Equipos START --
                  <thead>
                  <tr>
                    <th>ID-Equipo</th>
                    <th>Equipo</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Equipos END --
                  
                  <!-- Contenido Tabla Equipos START --
                  <tbody>
                  <tr>
                    <td><a href="./equipo.php">256</a></td>
                    <td><a href="./equipo.php">Fuego Rapido</a></td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">206</a></td>
                    <td><a href="./equipo.php">Las Estrellas</a></td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">056</a></td>
                    <td><a href="./equipo.php">Nube Negra</a></td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">060</a></td>
                    <td><a href="./equipo.php">Sol Naciente</a></td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">125</a></td>
                    <td><a href="./equipo.php">Frio Quemador</a></td>
                  </tr>
                  </tbody>
                  <!-- Cabecera Tabla Torneo END --

                </table>
              </div>
              <!-- Card Body END --

            </div>
            <!-- Tabla Grupo END --

          </div>
          <!-- Columna 6 END -->
          
          <!-- Columna 6 START -->
          <div class="col-6">

            <!-- Tabla Enfrentamientos START -->
            <div class="card">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Enfrentamientos Grupo 1</h3>
              </div>
              <!-- Card Header END -->
              
              <!-- Card Body START -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  
                  <!-- Cabecera Tabla Torneo START -->
                  <thead>
                  <tr>
                    <th>Equipo A</th>
                    <th>Equipo B</th>
                    <th>Fecha</th>
                    <th>Resultado</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Torneo END -->
                  
                  <!-- Contenido Tabla Torneo START -->
                  <tbody>
                  <?php
                  $conexion = conectar();
                  enfrentamientosGrupo($conexion,$idGrupo,$amigable);
                  desconectar($conexion);
                  ?>
                  </tbody>
                  <!-- Cabecera Tabla Torneo END -->

                </table>
              </div>
              <!-- Card Body END -->

            </div>
            <!-- Tabla Enfrentamientos  END -->
          </div>
          <!-- Columna 6 END -->

        </div>
        <!-- Tabla Grupo END -->

        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-12">
            <h2 class="m-0 text-dark">Acciones a Grupo <?php echo $nombreGrupo; ?></h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Acciones Grupo START -->
        <div class="row">

          <!-- Eliminar Grupo START -->
          <div class="col-6">
            <div class="card card-danger">
              
              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Eliminar Grupo</h3>
              </div>
              <!-- Card Header END -->

              <p class="m-2 text-dark">Ingrese su cuenta para eliminar el Grupo</p>

              <!-- Form START -->
              <form class="form-horizontal" action="<?php echo $urlDB;?>/php/eliminarGrupo.php?idGrupo=<?php echo $idGrupo;?>" method="POST">
                <div class="card-body">

                  <!-- Input Cuenta START -->
                  <div class="form-group row">
                    <label for="usuario" class="col-4">Cuenta</label>
                    <div class="col-8">
                      <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Cuenta">
                    </div>
                  </div>
                  <!-- Input Cuenta END -->

                  <!-- Input Contraseña START -->
                  <div class="form-group row">
                    <label for="password" class="col-4">Contraseña</label>
                    <div class="col-8">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                    </div>
                  </div>
                  <!-- Input Contraseña END -->

                </div>
                
                <!-- Submit START -->
                <div class="card-footer d-flex justify-content-center">
                  <button type="submit" class="btn btn-danger">Eliminar Grupo</button>
                </div>
                <!-- Submit END -->

              </form>
              <!-- Form END -->

            </div>
          </div>
          <!-- Eliminar Grupo END -->

          <!-- Modificar Grupo START -->
          <div class="col-6">
            <div class="card card-primary">
              
              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Modificar Grupo</h3>
              </div>
              <!-- Card Header END -->

              <!-- Form START -->
              <form class="form-horizontal" action="<?php echo $urlDB;?>/php/modificarGrupo.php?id=<?php echo $idGrupo;?>" method="POST">
                <div class="card-body">

                  <!-- Input Nombre START -->
                  <div class="form-group row">
                    <label for="nombreGrupo" class="col-4">Nombre Grupo</label>
                    <div class="col-8">
                      <input type="email" class="form-control" id="nombreGrupo" name="nombreGrupo" placeholder="<?php echo $nombreGrupo;?>" required>
                    </div>
                  </div>
                  <!-- Input Nombre END -->

                </div>
                
                <!-- Submit START -->
                <div class="card-footer d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary">Modificar Grupo</button>
                </div>
                <!-- Submit END -->

              </form>
              <!-- Form END -->

            </div>
          </div>
          <!-- Modificar Grupo END -->

          <!-- Modificar Enfrentamientos Grupo START -->
          <div class="col-12">
            <div class="card card-primary">
              
              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Agregar Equipos Al Grupo <?php echo $nombreGrupo;?></h3>
              </div>
              <!-- Card Header END -->

              <!-- Form START -->
              <form role="form" action="<?php echo $urlDB;?>/php/armarGrupo.php?id=<?php echo $idGrupo;?>" method="POST">

                <!-- Card Body START -->
                <div class="row card-body">

                  <div class="form-group col-12">
                    <label for="equiposInscriptos">Equipos Inscriptos</label>
                  </div>
                  <!--Selecciona TAGS START-->
                  <div class="form-group col-12 d-flex justify-content-around flex-wrap">
                  <?php
                  $conexion = conectar();
                  $consulta =  "SELECT * 
                                FROM equipos e, equipos_has_torneos t
                                WHERE t.Torneos_idTorneo='$idTorneo'
                                AND e.idEquipo=t.Equipos_idEquipo";
                  $resultado = mysqli_query($conexion,$consulta);
                  while($fila = mysqli_fetch_assoc($resultado)){
                    echo "<div class='form-check'>
                            <input class='form-check-input' name='equipos[]' id='".$fila['equipo']."' type='checkbox' value='".$fila['idEquipo']."'>
                            <label class='form-check-label' for='".$fila['equipo']."'>".$fila['equipo']."</label>
                          </div>";
                  }
                  desconectarBD($conexion);
                  ?>
                  </div>
                  <!--Selecciona TAGS END-->

                </div>
                <!-- Card Body END -->

                <!-- Submit START -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Agregar Equipos Al Grupo</button>
                </div>
                <!-- Submit END -->

              </form>
              <!-- Form END -->

            </div>
          </div>
          <!-- Modificar Enfrentamientos Grupo END -->        
          
          <!-- Modificar Enfrentamientos Grupo START -->
          <div class="col-12">
            <div class="card card-primary">
              
              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Modificar Enfrentamientos Grupo 1 - 5 Equipos</h3>
              </div>
              <!-- Card Header END -->

              <!-- Form START -->
              <form role="form" action="" method="POST">

                <!-- Card Body START -->
                <div class="row card-body">

                  <!-- Enfrentamiento 1 START -->
                  <div class="form-group col-12">
                    <label>Enfrentamiento 1</label>
                  </div>

                  <!-- Equipo A START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo A</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo A END -->

                  <!-- Equipo B START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo B</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Ganador Enfrentamiento START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Ganador</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Fecha enfrentamiento START -->
                  <div class="form-group col-6">
                    <label for="exampleInputPassword1">Fecha y hora enfrentamiento</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="text" class="form-control float-right" id="reservationtime">
                    </div>
                  </div>
                  <!-- Fecha enfrentamiento END -->
                  <!-- Enfrentamiento 1 END -->

                  <!-- Enfrentamiento 2 START -->
                  <div class="form-group col-12">
                    <label>Enfrentamiento 2</label>
                  </div>

                  <!-- Equipo A START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo A</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo A END -->

                  <!-- Equipo B START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo B</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Ganador Enfrentamiento START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Ganador</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Fecha enfrentamiento START -->
                  <div class="form-group col-6">
                    <label for="exampleInputPassword1">Fecha y hora enfrentamiento</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="text" class="form-control float-right" id="reservationtime">
                    </div>
                  </div>
                  <!-- Fecha enfrentamiento END -->
                  <!-- Enfrentamiento 2 END -->

                  <!-- Enfrentamiento 3 START -->
                  <div class="form-group col-12">
                    <label>Enfrentamiento 3</label>
                  </div>

                  <!-- Equipo A START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo A</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo A END -->

                  <!-- Equipo B START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo B</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Ganador Enfrentamiento START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Ganador</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Fecha enfrentamiento START -->
                  <div class="form-group col-6">
                    <label for="exampleInputPassword1">Fecha y hora enfrentamiento</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="text" class="form-control float-right" id="reservationtime">
                    </div>
                  </div>
                  <!-- Fecha enfrentamiento END -->
                  <!-- Enfrentamiento 3 END -->

                  <!-- Enfrentamiento 4 START -->
                  <div class="form-group col-12">
                    <label>Enfrentamiento 4</label>
                  </div>

                  <!-- Equipo A START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo A</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo A END -->

                  <!-- Equipo B START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo B</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Ganador Enfrentamiento START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Ganador</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Fecha enfrentamiento START -->
                  <div class="form-group col-6">
                    <label for="exampleInputPassword1">Fecha y hora enfrentamiento</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="text" class="form-control float-right" id="reservationtime">
                    </div>
                  </div>
                  <!-- Fecha enfrentamiento END -->
                  <!-- Enfrentamiento 4 END -->

                  <!-- Enfrentamiento 5 START -->
                  <div class="form-group col-12">
                    <label>Enfrentamiento 5</label>
                  </div>

                  <!-- Equipo A START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo A</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo A END -->

                  <!-- Equipo B START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo B</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Ganador Enfrentamiento START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Ganador</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Fecha enfrentamiento START -->
                  <div class="form-group col-6">
                    <label for="exampleInputPassword1">Fecha y hora enfrentamiento</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="text" class="form-control float-right" id="reservationtime">
                    </div>
                  </div>
                  <!-- Fecha enfrentamiento END -->
                  <!-- Enfrentamiento 5 END -->

                  <!-- Enfrentamiento 6 START -->
                  <div class="form-group col-12">
                    <label>Enfrentamiento 6</label>
                  </div>

                  <!-- Equipo A START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo A</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo A END -->

                  <!-- Equipo B START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo B</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Ganador Enfrentamiento START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Ganador</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Fecha enfrentamiento START -->
                  <div class="form-group col-6">
                    <label for="exampleInputPassword1">Fecha y hora enfrentamiento</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="text" class="form-control float-right" id="reservationtime">
                    </div>
                  </div>
                  <!-- Fecha enfrentamiento END -->
                  <!-- Enfrentamiento 6 END -->

                  <!-- Enfrentamiento 7 START -->
                  <div class="form-group col-12">
                    <label>Enfrentamiento 7</label>
                  </div>

                  <!-- Equipo A START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo A</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo A END -->

                  <!-- Equipo B START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo B</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Ganador Enfrentamiento START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Ganador</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Fecha enfrentamiento START -->
                  <div class="form-group col-6">
                    <label for="exampleInputPassword1">Fecha y hora enfrentamiento</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="text" class="form-control float-right" id="reservationtime">
                    </div>
                  </div>
                  <!-- Fecha enfrentamiento END -->
                  <!-- Enfrentamiento 7 END -->

                  <!-- Enfrentamiento 8 START -->
                  <div class="form-group col-12">
                    <label>Enfrentamiento 8</label>
                  </div>

                 <!-- Equipo A START -->
                 <div class="form-group col-6">
                    <label class="">Elegir Equipo A</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo A END -->

                  <!-- Equipo B START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo B</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Ganador Enfrentamiento START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Ganador</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Fecha enfrentamiento START -->
                  <div class="form-group col-6">
                    <label for="exampleInputPassword1">Fecha y hora enfrentamiento</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="text" class="form-control float-right" id="reservationtime">
                    </div>
                  </div>
                  <!-- Fecha enfrentamiento END -->
                  <!-- Enfrentamiento 8 END -->

                  <!-- Enfrentamiento 9 START -->
                  <div class="form-group col-12">
                    <label>Enfrentamiento 9</label>
                  </div>

                  <!-- Equipo A START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo A</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo A END -->

                  <!-- Equipo B START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo B</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Ganador Enfrentamiento START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Ganador</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Fecha enfrentamiento START -->
                  <div class="form-group col-6">
                    <label for="exampleInputPassword1">Fecha y hora enfrentamiento</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="text" class="form-control float-right" id="reservationtime">
                    </div>
                  </div>
                  <!-- Fecha enfrentamiento END -->
                  <!-- Enfrentamiento 9 END -->

                  <!-- Enfrentamiento 10 START -->
                  <div class="form-group col-12">
                    <label>Enfrentamiento 10</label>
                  </div>

                  <!-- Equipo A START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo A</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo A END -->

                  <!-- Equipo B START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo B</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Ganador Enfrentamiento START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Ganador</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Fecha enfrentamiento START -->
                  <div class="form-group col-6">
                    <label for="exampleInputPassword1">Fecha y hora enfrentamiento</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="text" class="form-control float-right" id="reservationtime">
                    </div>
                  </div>
                  <!-- Fecha enfrentamiento END -->
                  <!-- Enfrentamiento 10 END -->

                </div>
                <!-- Card Body END -->

                <!-- Submit START -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Modificar Enfrentamientos</button>
                </div>
                <!-- Submit END -->

              </form>
              <!-- Form END -->

            </div>
          </div>
          <!-- Modificar Enfrentamientos Grupo END -->
        
        </div>
        <!-- Acciones Grupo END -->

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
<script src="<?php echo $urlDB;?>/plugins/datatables/jquery.dataTables.min.js"></script>
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
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
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
        format: 'DD/MM/YYYY hh:mm A'
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