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
    <title>Sobre Nosotros</title>
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
                                <li>Nosotros</li>
                            </ul>
                            <h1>Nosotros</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--BREADCRUMBS END-->

    <!--TROPHEY ROOM BEGIN-->

    <section class="trophey-room">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Nuestra historia</h4>
                </div>
                <div class="col-md-12">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit facilis, mollitia laboriosam nihil soluta exercitationem saepe deserunt! Laboriosam saepe officia est hic sapiente eos soluta earum autem? Molestiae, nisi. Inventore.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi vel recusandae aliquid eos nihil! Doloremque nostrum illum omnis a, temporibus atque consequatur minus deserunt totam accusamus possimus velit, nulla incidunt!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, maxime cupiditate corrupti sapiente eum voluptatem? Fugiat quis consectetur esse debitis itaque vero. Quisquam maiores sit rerum doloribus esse iusto laborum!
                    </p>
                </div>
            </div>
        </div>

        <div class="container mb-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="trophey-media">
                        <img src="images/vs_arena/about-us-img.jpg" alt="club-image">
                    </div>
                </div>
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit facilis, mollitia laboriosam nihil soluta exercitationem saepe deserunt! Laboriosam saepe officia est hic sapiente eos soluta earum autem? Molestiae, nisi. Inventore.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi vel recusandae aliquid eos nihil! Doloremque nostrum illum omnis a, temporibus atque consequatur minus deserunt totam accusamus possimus velit, nulla incidunt!</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit facilis, mollitia laboriosam nihil soluta exercitationem saepe deserunt! Laboriosam saepe officia est hic sapiente eos soluta earum autem? Molestiae, nisi. Inventore.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi vel recusandae aliquid eos nihil! Doloremque nostrum illum omnis a, temporibus atque consequatur minus deserunt totam accusamus possimus velit, nulla incidunt!</p>
                </div>
                <div class="col-md-4">
                    <ul class="done-list">
                        <li>Ganadores mundiales</li>
                        <li>El mejor equipo de la historia</li>
                        <li>Los mejores de nuestro barrio</li>
                        <li>Mucho mas</li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <br><br>
                <div class="col-md-12">
                    <h4 class="sponsor-title">Nuestros Sponsores</h4>
                </div>
            </div>
        </div>
    </section>

    <!--TROPHEY ROOM END-->

    <!--MAIN SPONSOR SLIDER BEGIN-->
    <div class="main-sponsor-slider-background">
        <div id="main-sponsor-slider" class="carousel slide main-sponsor-slider" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-4 text-center">
                                <img class="sponsor-icons" src="images/common/sponsor-img.png" alt="sponsor-image">
                            </div>
                            <div class="col-xs-4 text-center">
                                <img class="sponsor-icons" src="images/common/sponsor-img.png" alt="sponsor-image">
                            </div>
                            <div class="col-xs-4 text-center">
                                <img class="sponsor-icons" src="images/common/sponsor-img.png" alt="sponsor-image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-4 text-center">
                                <img class="sponsor-icons" src="images/common/sponsor-img.png" alt="sponsor-image">
                            </div>
                            <div class="col-xs-4 text-center">
                                <img class="sponsor-icons" src="images/common/sponsor-img.png" alt="sponsor-image">
                            </div>
                            <div class="col-xs-4 text-center">
                                <img class="sponsor-icons" src="images/common/sponsor-img.png" alt="sponsor-image">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Controls -->
                <a class="nav-arrow left-arrow" href="#main-sponsor-slider" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="nav-arrow right-arrow" href="#main-sponsor-slider" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
    </div>
    <!--MAIN SPONSOR SLIDER END-->


    <script type="text/javascript" src="js/library/jquery.js"></script>
    <script type="text/javascript" src="js/library/jquery-ui.js"></script>
    <script type="text/javascript" src="js/library/bootstrap.js"></script>
    <script type="text/javascript" src="js/library/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/library/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="js/library/jcarousel.connected-carousels.js"></script>
    <script type="text/javascript" src="js/library/owl.carousel.js"></script>
    <script type="text/javascript" src="js/library/progressbar.js"></script>
    <script type="text/javascript" src="js/library/jquery.bracket.min.js"></script>
    <script type="text/javascript" src="js/library/chartist.js"></script>
    <script type="text/javascript" src="js/library/Chart.js"></script>
    <script type="text/javascript" src="js/library/fancySelect.js"></script>
    <script type="text/javascript" src="js/library/isotope.pkgd.js"></script>
    <script type="text/javascript" src="js/library/imagesloaded.pkgd.js"></script>

    <script type="text/javascript" src="js/jquery.team-coundown.js"></script>
    <script type="text/javascript" src="js/matches-slider.js"></script>
    <script type="text/javascript" src="js/header.js"></script>
    <script type="text/javascript" src="js/matches_broadcast_listing.js"></script>
    <script type="text/javascript" src="js/news-line.js"></script>
    <script type="text/javascript" src="js/match_galery.js"></script>
    <script type="text/javascript" src="js/main-club-gallery.js"></script>
    <script type="text/javascript" src="js/product-slider.js"></script>
    <script type="text/javascript" src="js/circle-bar.js"></script>
    <script type="text/javascript" src="js/standings.js"></script>
    <script type="text/javascript" src="js/shop-price-filter.js"></script>
    <script type="text/javascript" src="js/timeseries.js"></script>
    <script type="text/javascript" src="js/radar.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>
    <script type="text/javascript" src="js/preloader.js"></script>
    <script type="text/javascript" src="js/diagram.js"></script>
    <script type="text/javascript" src="js/bi-polar-diagram.js"></script>
    <script type="text/javascript" src="js/label-placement-diagram.js"></script>
    <script type="text/javascript" src="js/donut-chart.js"></script>
    <script type="text/javascript" src="js/animate-donut.js"></script>
    <script type="text/javascript" src="js/advanced-smil.js"></script>
    <script type="text/javascript" src="js/svg-path.js"></script>
    <script type="text/javascript" src="js/pick-circle.js"></script>
    <script type="text/javascript" src="js/horizontal-bar.js"></script>
    <script type="text/javascript" src="js/gauge-chart.js"></script>
    <script type="text/javascript" src="js/stacked-bar.js"></script>

    <script type="text/javascript" src="js/library/chartist-plugin-legend.js"></script>
    <script type="text/javascript" src="js/library/chartist-plugin-threshold.js"></script>
    <script type="text/javascript" src="js/library/chartist-plugin-pointlabels.js"></script>

    <script type="text/javascript" src="js/treshold.js"></script>
    <script type="text/javascript" src="js/visible.js"></script>
    <script type="text/javascript" src="js/anchor.js"></script>
    <script type="text/javascript" src="js/landing_carousel.js"></script>
    <script type="text/javascript" src="js/landing_sport_standings.js"></script>
    <script type="text/javascript" src="js/twitterslider.js"></script>
    <script type="text/javascript" src="js/champions.js"></script>
    <script type="text/javascript" src="js/landing_mainnews_slider.js"></script>
    <script type="text/javascript" src="js/carousel.js"></script>
    <script type="text/javascript" src="js/video_slider.js"></script>
    <script type="text/javascript" src="js/footer_slides.js"></script>
    <script type="text/javascript" src="js/player_test.js"></script>

    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>