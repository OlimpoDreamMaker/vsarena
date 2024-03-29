<?php
require_once("../BackEnd/config.php");
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
    <meta name="description" content="Página no encontrada, posible error de escritura, si el problema persiste, contactanos" />
    <meta name="keywords" content="error, 404, not found, 404 not found, pagina no encontrada" />
    <!--END METAS LOCALES-->
    <!--START TITULO-->
    <title>404 NOT FOUND</title>
    <!--END TITULO-->
</head>

<body class="error-page">
    <!--START BOX ERROR-->
    <div class="error-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="<?php echo $amigable;?>/" class="error-logo"><img src="<?php echo $urlFE;?>/images/vs_arena/error-logo.png" alt="logo"></a>
                </div>
            </div>
        </div>
        <div class="error-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span class="big-text">404</span>
                        <span class="small-text">Página <br> no encontrada</span>
                        <br>
                        <a href="<?php echo $amigable;?>/" class="back"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>Volver</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="error-menu-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="error-menu">
                            <li><a href="<?php echo $facebook;?>">facebook</a></li>
                            <li><a href="<?php echo $twitter;?>">Twitter</a></li>
                            <li><a href="<?php echo $twitch;?>">Twich</a></li>
                            <li><a href="<?php echo $youtube;?>">YouTube</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END BOX ERROR-->
    <!--START SCRIPTS-->
    <?php
    include('estructura/scripts.php');

    ?>
    <!--END SCRIPTS-->
</body>

</html>