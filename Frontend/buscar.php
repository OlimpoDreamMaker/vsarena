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
                    <h4>Mostrando resultados de “Tier”</h4>
                    <div class="search-field">
                        <form>
                            <div class="wrap">
                                <input type="text" value="Tier">
                                <button><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--ELEMENTO-->
                    <div class="search-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="image"><img class="img-responsive" src="<?php echo $urlFE?>/images/vs_arena/gallery-slide-img.jpg" alt="gallery-slide-img"></div>
                            </div>
                            <div class="col-md-8">
                                <div class="info">
                                    <a href="#" class="name">Phanteon, actualmente mas fuerte que nunca</a>
                                    <div class="wrap">
                                        <a href="#">25 Sep 2020</a> Por <a href="#">Arena Admin</a>
                                    </div>
                                    <p>Phanteon, actualmente mas fuerte que nunca esta primero en la <span>Tier</span> List</p>
                                    <a href="#" class="read-more">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--ELEMENTO-->
                    <div class="search-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="image"><img class="img-responsive" src="<?php echo $urlFE?>/images/vs_arena/single-player-photo.jpg" alt="single-player-photo"></div>
                            </div>
                            <div class="col-md-8">
                                <div class="info">
                                    <a href="#" class="name">En busqueda de Sneaky actualmente <span>Tier</span> list main</a>
                                    <div class="wrap">
                                        <a href="#">25 Sep 2020</a> Por <a href="#">Arena Admin</a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae et doloremque necessitatibus reiciendis accusantium alias quas deleniti maxime expedita, quae eligendi, dolores temporibus quasi, amet id non! Quas, temporibus? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam repellat sapiente impedit ad totam, dicta libero fuga mollitia beatae explicabo quasi, eaque ipsum rerum amet perferendis repellendus? Rerum, harum consequatur?.</p>
                                    <a href="#" class="read-more">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
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