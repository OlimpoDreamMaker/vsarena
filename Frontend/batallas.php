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
    <meta name="description" content="Página referida a las batallas, ultimas batallas, resultados, tus momentos favoritos, y mucho más" />
    <meta name="keywords" content="torneos, batallas, juegos online, plataforma de torneos, dinero, leage of legend, rp" />
    <!--END METAS LOCALES-->

    <!--START TITULO-->
    <title>Batallas</title>
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
                                <li><a href="index.php">Inicio</a>/</li>
                                <li>Batallas</li>
                            </ul>
                            <h1>Batallas</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CATEGORIA END-->

    <!--MAIN BATALLAS BEGIN-->
    <section class="main-match-shedule amateurs-match-shedule">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h5>Próximas Batallas</h5>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <ul class="tab-filters" role="tablist">
                        <li class="active"><a href="#all" role="tab" data-toggle="tab" aria-expanded="true">LoL</a></li>
                        <li><a href="#nationalcup" role="tab" data-toggle="tab" aria-expanded="true">Free Fire</a></li>
                        <li><a href="#premierleague" role="tab" data-toggle="tab" aria-expanded="true">Dota</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="all">
                            <div class="amateurs-main-match">
                                <div class="title">Premier League - Round 28</div>
                                <a href="#" class="team">
                                    <span class="image"><img src="images/vs_arena/team-logo1.png" alt="main-match"></span>
                                    <span class="info">
                                        <span class="name">Team 1</span>
                                        <span class="city">SKT Telecom</span>
                                    </span>
                                </a>
                                <div class="score">
                                    <span>3:2</span>
                                </div>
                                <a href="#" class="team guest">
                                    <span class="info">
                                        <span class="name">Team 2</span>
                                        <span class="city">Giants</span>
                                    </span>
                                    <span class="image"><img src="images/vs_arena/team-logo2.png" alt="main-match"></span>
                                </a>
                                <div class="title">26 septiembre / 8:45 PM</div>
                            </div>
                        </div>
                        <div class="tab-pane" id="nationalcup">
                            <div class="amateurs-main-match">
                                <div class="title">LCS - Round 1</div>
                                <a href="#" class="team">
                                    <span class="image"><img src="images/vs_arena/team-logo3.png" alt="main-match"></span>
                                    <span class="info">
                                        <span class="name">Internacional</span>
                                        <span class="city">london</span>
                                    </span>
                                </a>
                                <div class="score">
                                    <span>3:2</span>
                                </div>
                                <a href="#" class="team guest">
                                    <span class="info">
                                        <span class="name">Arsenalp</span>
                                        <span class="city">Lyon</span>
                                    </span>
                                    <span class="image"><img src="images/vs_arena/team-logo4.png" alt="main-match"></span>
                                </a>
                                <div class="title">26 septiembre / 8:45 PM</div>
                            </div>
                        </div>
                        <div class="tab-pane" id="premierleague">
                            <div class="amateurs-main-match">
                                <div class="title">Premier League - Round 28</div>
                                <a href="#" class="team">
                                    <span class="image"><img src="images/vs_arena/team-logo2.png" alt="main-match"></span>
                                    <span class="info">
                                        <span class="name">Internacional</span>
                                        <span class="city">london</span>
                                    </span>
                                </a>
                                <div class="score">
                                    <span>2:2</span>
                                </div>
                                <a href="#" class="team guest">
                                    <span class="info">
                                        <span class="name">Arsenalp</span>
                                        <span class="city">Lyon</span>
                                    </span>
                                    <span class="image"><img src="images/vs_arena/team-logo4.png" alt="main-match"></span>
                                </a>
                                <div class="title">26 septiembre / 8:45 PM</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h6>Ultimas Batallas</h6>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="main-lates-matches">
                        <a href="#" class="item">
                            <span class="championship">LCS - Cuartos de final</span>
                            <span class="teams-wrap">
                                <span class="team">
                                    <span>
                                        <img src="images/common/team-logo1.png" alt="team-image">
                                    </span>
                                    <span>Team 1</span>
                                </span>
                                <span class="score">
                                    <span>3:2</span>
                                </span>
                                <span class="team1">
                                    <span>Team 2</span>
                                    <span><img src="images/common/team-logo2.png" alt="team-image"></span>
                                </span>
                            </span>
                            <span class="game-result">(5-4) lorem</span>
                        </a>
                        <a href="#" class="item">
                            <span class="championship">LCS - Cuartos de final</span>
                            <span class="teams-wrap">
                                <span class="team">
                                    <span>
                                        <img src="images/common/team-logo3.png" alt="team-image">
                                    </span>
                                    <span>Team 1</span>
                                </span>
                                <span class="score">
                                    <span>3:2</span>
                                </span>
                                <span class="team1">
                                    <span>Team 2</span>
                                    <span><img src="images/common/team-logo4.png" alt="team-image"></span>
                                </span>
                            </span>
                            <span class="game-result">(5-4) lorem</span>
                        </a>
                        <a href="#" class="item">
                            <span class="championship">LCS - Cuartos de final</span>
                            <span class="teams-wrap">
                                <span class="team">
                                    <span>
                                        <img src="images/common/team-logo5.png" alt="team-image">
                                    </span>
                                    <span>Team 1</span>
                                </span>
                                <span class="score">
                                    <span>3:2</span>

                                </span>
                                <span class="team1">
                                    <span>Team 2</span>
                                    <span><img src="images/common/team-logo1.png" alt="team-image"></span>
                                </span>
                            </span>
                            <span class="game-result">(5-4) lorem</span>
                        </a>
                        <a href="#" class="item">
                            <span class="championship">LCS - Cuartos de final</span>
                            <span class="teams-wrap">
                                <span class="team">
                                    <span>
                                        <img src="images/common/team-logo2.png" alt="team-image">
                                    </span>
                                    <span>Team 1</span>
                                </span>
                                <span class="score">
                                    <span>3:2</span>
                                </span>
                                <span class="team1">
                                    <span>Team 2</span>
                                    <span><img src="images/common/team-logo3.png" alt="team-image"></span>
                                </span>
                            </span>
                            <span class="game-result">(5-4) lorem</span>
                        </a>
                        <a href="#" class="item">
                            <span class="championship">LCS - Cuartos de final</span>
                            <span class="teams-wrap">
                                <span class="team">
                                    <span>
                                        <img src="images/common/team-logo4.png" alt="team-image">
                                    </span>
                                    <span>Team 1</span>
                                </span>
                                <span class="score">
                                    <span>3:2</span>
                                </span>
                                <span class="team1">
                                    <span>Team 2</span>
                                    <span><img src="images/common/team-logo5.png" alt="team-image"></span>
                                </span>
                            </span>
                            <span class="game-result">(5-4) lorem</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--MAIN BATALLAS END-->

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