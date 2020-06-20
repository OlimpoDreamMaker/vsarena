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
    <title>Donaciones</title>
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
                                <li><a href="<?php echo $amigable;?>/">Inicio</a>/</li>
                                <li>Donaciones</li>
                            </ul>
                            <h1>Donaciones</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CATEGORIA END-->
    <!--DONATIONS WRAP START-->
    <section class="donations-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Support Your team</h4>
                    <p>Pabst irony tattooed, synth sriracha selvage pok pok. Wayfarers kinfolk sartorial, helvetica you probably haven't heard of them tumeric venmo deep v mixtape semiotics brunch.</p>
                </div>
                <div class="col-md-12">
                    <!-- DONATION ITEM -->
                    <div class="donation-item">
                        <div class="row no-gutter equal-height">
                            <div class="col-md-7 col-sm-12">
                                <div class="img-wrap"><img class="img-responsive" src="<?php echo $urlFE;?>/images/vs_arena/donation-item-img.jpg" alt="donation-item"></div>
                            </div>
                            <div class="col-md-5 col-sm-12 position-relative">
                                <div class="info">
                                    <div class="wrap">
                                        <div class="title">New team arena</div>
                                        <div class="progress-wrap">
                                            <ul class="details">
                                                <li>Obtenido <span>$19000</span>/</li>
                                                <li>Donares <span>4</span>/</li>
                                                <li>Meta <span>$20000</span></li>
                                            </ul>
                                            <div class="progress-line">
                                                <div class="bar"></div>
                                            </div>
                                        </div>
                                        <p>Selvage mixtape coloring book, street art swag sriracha activated charcoal vegan hammock selfies distillery wayfarers dreamcatcher lyft beard.</p>
                                        <a href="#" class="btn small">Leer más</a>
                                        <a href="#" class="btn small">Donar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- DONATION ITEM -->
                    <div class="donation-item">
                        <div class="row no-gutter equal-height">
                            <div class="col-md-7 col-sm-12">
                                <div class="img-wrap"><img class="img-responsive" src="<?php echo $urlFE;?>/images/vs_arena/donation-item-img.jpg" alt="donation-item"></div>
                            </div>
                            <div class="col-md-5 col-sm-12 position-relative">
                                <div class="info">
                                    <div class="wrap">
                                        <div class="title">New team arena</div>
                                        <div class="progress-wrap">
                                            <ul class="details">
                                                <li>Obtenido <span>$19000</span>/</li>
                                                <li>Donares <span>4</span>/</li>
                                                <li>Meta <span>$20000</span></li>
                                            </ul>
                                            <div class="progress-line">
                                                <div class="bar-1"></div>
                                            </div>
                                        </div>
                                        <p>Selvage mixtape coloring book, street art swag sriracha activated charcoal vegan hammock selfies distillery wayfarers dreamcatcher lyft beard.</p>
                                        <a href="#" class="btn small">Leer más</a>
                                        <a href="#" class="btn small">Donar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- DONATION ITEM -->
                    <div class="donation-item">
                        <div class="row no-gutter equal-height">
                            <div class="col-md-7 col-sm-12">
                                <div class="img-wrap"><img class="img-responsive" src="<?php echo $urlFE;?>/images/vs_arena/donation-item-img.jpg" alt="donation-item"></div>
                            </div>
                            <div class="col-md-5 col-sm-12 position-relative">
                                <div class="info">
                                    <div class="wrap">
                                        <div class="title">New team arena</div>
                                        <div class="progress-wrap">
                                            <ul class="details">
                                                <li>Obtenido <span>$19000</span>/</li>
                                                <li>Donares <span>4</span>/</li>
                                                <li>Meta <span>$20000</span></li>
                                            </ul>
                                            <div class="progress-line">
                                                <div class="bar-2"></div>
                                            </div>
                                        </div>
                                        <p>Selvage mixtape coloring book, street art swag sriracha activated charcoal vegan hammock selfies distillery wayfarers dreamcatcher lyft beard.</p>
                                        <a href="#" class="btn small">Leer más</a>
                                        <a href="#" class="btn small">Donar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- DONATION ITEM -->
                    <div class="donation-item">
                        <div class="row no-gutter equal-height">
                            <div class="col-md-7 col-sm-12">
                                <div class="img-wrap"><img class="img-responsive" src="<?php echo $urlFE;?>/images/vs_arena/donation-item-img.jpg" alt="donation-item"></div>
                            </div>
                            <div class="col-md-5 col-sm-12 position-relative">
                                <div class="info">
                                    <div class="wrap">
                                        <div class="title">New team arena</div>
                                        <div class="progress-wrap">
                                            <ul class="details">
                                                <li>Obtenido <span>$19000</span>/</li>
                                                <li>Donares <span>4</span>/</li>
                                                <li>Meta <span>$20000</span></li>
                                            </ul>
                                            <div class="progress-line">
                                                <div class="bar-3"></div>
                                            </div>
                                        </div>
                                        <p>Selvage mixtape coloring book, street art swag sriracha activated charcoal vegan hammock selfies distillery wayfarers dreamcatcher lyft beard.</p>
                                        <a href="#" class="btn small">Leer más</a>
                                        <a href="#" class="btn small">Donar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- PAGINACIÓN -->
                    <div class="pagination-wrap">
                        <ul class="pagination">
                            <li><a href="#"><i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--DONATIONS WRAP END-->
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