<?php
require_once("../BackEnd/config.php");
require_once("../BackEnd/funciones.php");
if(empty($_REQUEST['buscar'])){
    if(empty($_REQUEST['tag'])){
        $buscar = "";
    }else{
        $buscar = $_REQUEST['tag'];
    }
}else{
    $buscar = $_REQUEST['buscar'];
}
if(strpos($buscar, "-")===false){
    
}else{
    $buscar = str_replace("-", ' ', $buscar);
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!--START ROBOTS-->
    <?php
    include('estructura/robots.php');

    ?>
    <!--END ROBOTS-->
    <!--START METAS GLOBALES-->
    <?php
    include('estructura/global_meta.php');
    ?>
    <!--END METAS GLOBALES-->
    <!--START FUENTES-->
    <?php
    include('estructura/global_fuentes.php');

    ?>
    <!--END FUENTES-->
    <!--START HOJAS-->
    <?php
    include('estructura/global_hojas.php');

    ?>
    <!--END HOJAS-->
    <!--START METAS LOCALES-->
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--END METAS LOCALES-->
    <!--START TITULO-->
    <title>Buscador</title>
    <!--END TITULO-->
</head>

<body>
    <!--PRELOADER START-->
    <?php
    include('estructura/preloader.php');

    ?>
    <!--PRELOADER END-->
    <!--NAV START-->
    <?php
    include('estructura/barra_navegacion.php');

    ?>
    <!--NAV END-->
    <!--CATEGORIA START-->
    <section class="image-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="info">
                        <div class="wrap">
                            <ul class="breadcrumbs">
                                <li><a href="<?php echo $amigable?>/">Inicio</a>/</li>
                                <li>Buscador</li>
                            </ul>
                            <h1>Buscador</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CATEGORIA END-->
    <!--MAIN BUSCADOR START-->
    <section class="search-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Mostrando resultados de “<?php echo $buscar;?>”</h4>
                    <div class="search-field">
                    <form action="<?php echo $amigable;?>/buscar" method="POST">
                            <div class="wrap">
                                <input type="text" name="buscar" value="<?php echo $buscar;?>">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    if($buscar!=""){
                        $conexion = conectar();
                        buscarNoticias($conexion, $buscar, $amigable, $imagenes);
                        // buscarJuegos($conexion, $buscar, $amigable, $imagenes);
                        // buscarProductos($conexion, $buscar, $amigable, $imagenes);
                        // buscarTorneos($conexion, $buscar, $amigable, $imagenes);
                        desconectar($conexion);
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!--START FOOTER-->
    <?php
    include('estructura/footer.php');

    ?>
    <!--END FOOTER-->
    <!--START SCRIPTS-->
    <?php
    include('estructura/scripts.php');

    ?>
    <!--END SCRIPTS-->
</body>

</html>
