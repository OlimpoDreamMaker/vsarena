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
    <!--TROPHEY ROOM START-->
    <section class="trophey-room">
        <div class="container">
            <div class="row">
                <!--TITULO-->
                <div class="col-md-12">
                    <h4>Nuestra historia</h4>
                </div>
                <!--SINOPSIS-->
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
                <!--DESCRIPCION-->
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit facilis, mollitia laboriosam nihil soluta exercitationem saepe deserunt! Laboriosam saepe officia est hic sapiente eos soluta earum autem? Molestiae, nisi. Inventore.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi vel recusandae aliquid eos nihil! Doloremque nostrum illum omnis a, temporibus atque consequatur minus deserunt totam accusamus possimus velit, nulla incidunt!
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit facilis, mollitia laboriosam nihil soluta exercitationem saepe deserunt! Laboriosam saepe officia est hic sapiente eos soluta earum autem? Molestiae, nisi. Inventore.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi vel recusandae aliquid eos nihil! Doloremque nostrum illum omnis a, temporibus atque consequatur minus deserunt totam accusamus possimus velit, nulla incidunt!
                    </p>
                </div>
                <!--ASIDE-->
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
                <!--TITULO-->
                <div class="col-md-12">
                    <h4 class="sponsor-title">Nuestros Sponsores</h4>
                </div>
            </div>
        </div>
    </section>
    <!--TROPHEY ROOM END-->
    <!--MAIN SPONSOR SLIDER START-->
    <div class="main-sponsor-slider-background">
        <div id="main-sponsor-slider" class="carousel slide main-sponsor-slider" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <!--SPONSOR-->
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
                <!--SPONSOR-->
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
                <!--CONTROLES-->
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