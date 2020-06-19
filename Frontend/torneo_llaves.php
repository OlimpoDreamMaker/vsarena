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
    <title>Llaves</title>
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
                                <li><a href="index.html">Inicio</a>/</li>
                                <li>Llaves</li>
                            </ul>
                            <h1>Llaves</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CATEGORIA END-->
    <!--STANDING CUP BEGIN-->
    <section class="standing-cup">
        <div class="container">
            <div class="row">
                <!--TITULO-->
                <div class="col-md-12">
                    <h4>Copa CLS</h4>
                    <ul class="tab-filters">
                        <li class="active"><a href="#qualification">Calificados</a></li>
                        <li><a href="#quarterfinal">Cuartos</a></li>
                        <li><a href="#semifinal">Semifinal</a></li>
                        <li><a href="#final">Final</a></li>
                    </ul>
                </div>
                <!--LLAVES-->
                <div class="col-md-12 overflow-scroll">
                    <div class="tab-content">
                        <div class="cup-body tab-pane active" id="qualification">
                        </div>
                        <div class="cup-body tab-pane" id="quarterfinal">
                        </div>
                        <div class="cup-body tab-pane" id="semifinal">
                        </div>
                        <div class="cup-body tab-pane" id="final">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--STANDING CUP END-->
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