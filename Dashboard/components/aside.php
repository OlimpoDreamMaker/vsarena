 <?php
 require_once("../php/dataUser.php");
 $conect = conectar();
 $id = $_SESSION['usuario'];
 $user = dataUser($conect, $id);
 desconectarBD($conect);
 ?>
 <!-- ASIDE START -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- Logo Page START -->
  <a href="index3.html" class="brand-link">
    <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
    <span class="brand-text font-weight-light">VsArena</span>
  </a>
  <!-- Logo Page END -->

  <!-- Sidebar START-->
  <div class="sidebar">

    <!-- Sidebar user panel (optional) START-->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../../avatarUser/<?php echo $user['avatar'];?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo $user['usuario'];?></a>
      </div>
    </div>
    <!-- Sidebar user panel (optional) END-->

    <!-- Sidebar Menu START-->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="../templates/usuarios.php" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Usuarios
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../templates/noticias.php" class="nav-link">
            <i class="nav-icon fas fa-newspaper"></i>
            <p>
              Noticias
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../templates/torneos.php" class="nav-link">
            <i class="nav-icon fas fa-trophy"></i>
            <p>
              Torneos
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../templates/juegos.php" class="nav-link">
            <i class="nav-icon fas fa-gamepad"></i>
            <p>
              Juegos
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../templates/tienda.php" class="nav-link">
            <i class="nav-icon fas fa-store"></i>
            <p>
              Tienda
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../php/logout.php" class="nav-link">
            <i class="nav-icon fas fa-lock"></i>
            <p>
              Cerrar sesion
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- Sidebar Menu END-->

  </div>
  <!-- Sidebar END-->

</aside>
<!-- ASIDE START END-->