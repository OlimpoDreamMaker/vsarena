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
    <title>Sitio en mantenimiento</title>
    <!--END TITULO-->
</head>

<body class="error-page">
    <!--ERROR WRAP START-->
    <div class="error-wrap offline">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="index.php" class="error-logo"><img src="images/vs_arena/error-logo.png" alt="logo"></a>
                </div>
            </div>
        </div>
        <div class="offline-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span class="small-text">El sitio</span>
                        <span class="big-text">Está en</span>
                        <span class="big-text">Mantenimiento</span>
                        <ul class="offline-socials">
                            <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitch" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--ERROR WRAP END-->
    <!--START SCRIPTS-->
    <?php
    include('estructura/scripts.php');

    ?>
    <!--END SCRIPTS-->
</body>

</html>