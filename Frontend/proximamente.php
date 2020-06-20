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
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--END METAS LOCALES-->
    <!--START TITULO-->
    <title>Proximamente</title>
    <!--END TITULO-->
</head>

<body class="coming-page">
    <!--COMMING WRAP BEGIN-->
    <div class="coming-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="<?php echo $amigable;?>/" class="error-logo"><img src="<?php echo $urlFE;?>/images/vs_arena/coming-logo.png" alt="coming-logo"></a>
                </div>
            </div>
        </div>
        <div class="coming-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span class="small-text">Team 1 - Team 2</span>
                        <span class="big-text">gran final</span>
                        <div class="counter">
                            <ul>
                                <li>
                                    <div class="digit">6</div>
                                    <div class="descr">Dias</div>
                                </li>
                                <li>
                                    <div class="digit">20</div>
                                    <div class="descr">Horas</div>
                                </li>
                                <li>
                                    <div class="digit">37</div>
                                    <div class="descr">Minutos</div>
                                </li>
                                <li>
                                    <div class="digit">04</div>
                                    <div class="descr">Segundos</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--COMMING WRAP END-->
    <!--START SCRIPTS-->
    <?php
    include('estructura/scripts.php');

    ?>
    <!--END SCRIPTS-->
</body>

</html>