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
    <title>Campeonato - Perfil</title>
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
                                <li>CAMPEONATO</li>
                            </ul>
                            <h1>CAMPEONATO</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CATEGORIA END-->
    <!--HEADER CAMPEONATO START-->
    <section class="club-wrap club-champ">
        <!--TITULO-->
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h4>Copa LCS</h4>
                </div>
                <div class="col-md-3">
                    <a href="trophies.html" class="btn small club-top-btn">Premios</a>
                </div>
            </div>
        </div>
        <!--INFORMACION CAMPEONATO START-->
        <div class="championship-header-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="club-logo">
                            <img src="images/vs_arena/champ-logo.png" class="img-responsive" alt="champ image">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="club-info">
                            <div class="item"><span>Founded:</span> 1955</div>
                            <div class="item"><span>Region:</span> Europe</div>
                            <div class="item"><span>Current champions:</span> Reasl Madrdid</div>
                            <div class="item"><span>Most successful club(s):</span> Reasl Madrdid</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="club-info">
                            <div class="item">About tornament</div>
                            <p>Curabitur id tellus mi. In laoreet lacinia luctus. Quisque ante lacus, fermentum et ante ultrices, accumsan blandit magna. Sed tincidunt placerat viverra. Integer lacinia nisi sed pharetra tempus. Nullam eu finibus odio. Etiam tristique dui posuere eros varius laoreet. Vivamus euismod neque purus, interdum eleifend nulla vulputate vel. Donec imperdiet magna sem, ut laoreet ligula dapibus sit amet. Ut interdum diam at condimentum finibus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--INFORMACION CAMPEONATO END-->
    </section>
    <!--HEADER CAMPEONATO END-->
    <!--CUERPO CAMPEONATO START-->
    <div class="championship-wrap">
        <!--BARRA DE NAVEGACION-->
        <div class="champ-navigation">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="champ-nav-list">
                            <li class="active"><a href="#participants">participants</a></li>
                            <li><a href="#matches">Matches</a></li>
                            <li><a href="#tournamentgrid">Tournament grid</a></li>
                            <li><a href="#news">News(4)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="champ-tab-wrap tab-content">
            <!--PARTICIPANTES START-->
            <div class="tab-item part-wrap tab-pane active" id="participants">
                <div class="part-list">
                    <div class="container">
                        <div class="row">
                            <!--TEAM-->
                            <div class="col-md-3">
                                <a href="club-stats.html" class="item">
                                    <span class="logo"><img src="images/vs_arena/team-logo1.png" width="80" height="80" alt="team-logo"></span>
                                    <span class="name">Team 1</span>
                                </a>
                            </div>
                            <!--TEAM-->
                            <div class="col-md-3">
                                <a href="club-stats.html" class="item">
                                    <span class="logo"><img src="images/vs_arena/team-logo2.png" width="80" height="80" alt="team-logo"></span>
                                    <span class="name">Team 2</span>
                                </a>
                            </div>
                            <!--TEAM-->
                            <div class="col-md-3">
                                <a href="club-stats.html" class="item">
                                    <span class="logo"><img src="images/vs_arena/team-logo3.png" width="80" height="80" alt="team-logo"></span>
                                    <span class="name">Team 3</span>
                                </a>
                            </div>
                            <!--TEAM-->
                            <div class="col-md-3">
                                <a href="club-stats.html" class="item">
                                    <span class="logo"><img src="images/vs_arena/team-logo4.png" width="80" height="80" alt="team-logo"></span>
                                    <span class="name">Team 4</span>
                                </a>
                            </div>
                            <!--TEAM-->
                            <div class="col-md-3">
                                <a href="club-stats.html" class="item">
                                    <span class="logo"><img src="images/vs_arena/team-logo5.png" width="80" height="80" alt="team-logo"></span>
                                    <span class="name">Team 5</span>
                                </a>
                            </div>
                            <!--TEAM-->
                            <div class="col-md-3">
                                <a href="club-stats.html" class="item">
                                    <span class="logo"><img src="images/vs_arena/team-logo1.png" width="80" height="80" alt="team-logo"></span>
                                    <span class="name">Team 6</span>
                                </a>
                            </div>
                            <!--TEAM-->
                            <div class="col-md-3">
                                <a href="club-stats.html" class="item">
                                    <span class="logo"><img src="images/vs_arena/team-logo2.png" width="80" height="80" alt="team-logo"></span>
                                    <span class="name">Team 7</span>
                                </a>
                            </div>
                            <!--TEAM-->
                            <div class="col-md-3">
                                <a href="club-stats.html" class="item">
                                    <span class="logo"><img src="images/vs_arena/team-logo3.png" width="80" height="80" alt="team-logo"></span>
                                    <span class="name">Team 8</span>
                                </a>
                            </div>
                            <!--TEAM-->
                            <div class="col-md-3">
                                <a href="club-stats.html" class="item">
                                    <span class="logo"><img src="images/vs_arena/team-logo4.png" width="80" height="80" alt="team-logo"></span>
                                    <span class="name">Team 9</span>
                                </a>
                            </div>
                            <!--TEAM-->
                            <div class="col-md-3">
                                <a href="club-stats.html" class="item">
                                    <span class="logo"><img src="images/vs_arena/team-logo5.png" width="80" height="80" alt="team-logo"></span>
                                    <span class="name">Team 10</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--PARTICIPANTES END-->
            <!--MATCHS START-->
            <div class="tab-item match-wrap tab-pane" id="matches">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main-lates-matches">
                                <!--MATCH-->
                                <a href="matches.html" class="item">
                                    <span class="championship">National cup - quarterfinal</span>
                                    <span class="teams-wrap">
                                        <span class="team"><span><img src="images/vs_arena/team-logo1.png" alt="team-logo"></span><span>Valencia Valencia</span></span>
                                        <span class="score"><span>3:2</span></span>
                                        <span class="team1"><span>Internacional Internacional</span><span><img src="images/vs_arena/team-logo2.png" alt="team-logo"></span></span>
                                    </span>
                                    <span class="game-result">(5-4) penalties</span>
                                </a>
                                <!--MATCH-->
                                <a href="matches.html" class="item">
                                    <span class="championship">National cup - quarterfinal</span>
                                    <span class="teams-wrap">
                                        <span class="team"><span><img src="images/vs_arena/team-logo3.png" alt="team-logo"></span><span>Valencia Valencia</span></span>
                                        <span class="score"><span>3:2</span></span>
                                        <span class="team1"><span>Internacional Internacional</span><span><img src="images/vs_arena/team-logo4.png" alt=""></span></span>
                                    </span>
                                    <span class="game-result">(5-4) penalties</span>
                                </a>
                                <!--MATCH-->
                                <a href="matches.html" class="item">
                                    <span class="championship">National cup - quarterfinal</span>
                                    <span class="teams-wrap">
                                        <span class="team"><span><img src="images/vs_arena/team-logo5.png" alt="team-logo"></span><span>Valencia Valencia</span></span>
                                        <span class="score"><span>3:2</span></span>
                                        <span class="team1"><span>Internacional Internacional</span><span><img src="images/vs_arena/team-logo1.png" alt=""></span></span>
                                    </span>
                                    <span class="game-result">(5-4) penalties</span>
                                </a>
                                <!--MATCH-->
                                <a href="matches.html" class="item">
                                    <span class="championship">National cup - quarterfinal</span>
                                    <span class="teams-wrap">
                                        <span class="team"><span><img src="images/vs_arena/team-logo1.png" alt="team-logo"></span><span>Valencia Valencia</span></span>
                                        <span class="score"><span>3:2</span></span>
                                        <span class="team1"><span>Internacional Internacional</span><span><img src="images/vs_arena/team-logo2.png" alt="team-logo"></span></span>
                                    </span>
                                    <span class="game-result">(5-4) penalties</span>
                                </a>
                                <!--MATCH-->
                                <a href="matches.html" class="item">
                                    <span class="championship">National cup - quarterfinal</span>
                                    <span class="teams-wrap">
                                        <span class="team"><span><img src="images/vs_arena/team-logo3.png" alt="team-logo"></span><span>Valencia Valencia</span></span>
                                        <span class="score"><span>3:2</span></span>
                                        <span class="team1"><span>Internacional Internacional</span><span><img src="images/vs_arena/team-logo4.png" alt="team-logo"></span></span>
                                    </span>
                                    <span class="game-result">(5-4) penalties</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--MATCHS END-->
            <!--TABLA POSICIONES START-->
            <div class="tab-item tournament-tab tab-pane" id="tournamentgrid">
                <div class="container">
                    <div class="row">
                        <!--TITULO TABLA-->
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <ul class="tab-filters">
                                <li class="active"><a href="#groupstage" data-toggle="tab">Group stage</a></li>
                                <li><a href="#playoff" data-toggle="tab">Playoffs</a></li>
                            </ul>
                        </div>
                        <!--TABLA POSICION START-->
                        <div class="col-md-12 col-sm-12 col-xs-12 overflow-scroll">
                            <div class="tab-content">
                                <!--GROUP STAGE-->
                                <div id="groupstage" class="tab-pane fade in active">
                                    <table class="standing-full">
                                        <tbody>
                                            <tr>
                                                <th>club</th>
                                                <th>played</th>
                                                <th>won</th>
                                                <th>drawn</th>
                                                <th>lost</th>
                                                <th>gd</th>
                                                <th>points</th>
                                                <th>form</th>
                                                <th>next</th>
                                            </tr>
                                            <tr>
                                                <td class="up">
                                                    <i class="fa fa-caret-up" aria-hidden="true"></i> 1 <span class="team"><img src="images/vs_arena/team-logo1.png" width="30" height="30" alt="team-logo"> </span>Team 1
                                                </td>
                                                <td>11</td>
                                                <td>8</td>
                                                <td>2</td>
                                                <td>1</td>
                                                <td>+16</td>
                                                <td class="points"><span>26</span></td>
                                                <td class="form">
                                                    <span class="win">w</span>
                                                    <span class="drawn">d</span>
                                                    <span class="lose">l</span>
                                                    <span class="win">w</span>
                                                    <span class="win">w</span>
                                                </td>
                                                <td><a href="matches.html"><img src="images/vs_arena/team-logo2.png" width="30" height="30" alt="team-logo"></a></td>
                                            </tr>
                                            <tr>
                                                <td class="down">
                                                    <i class="fa fa-caret-down" aria-hidden="true"></i> 1 <span class="team"><img src="images/vs_arena/team-logo2.png" width="30" height="30" alt="team-logo"> </span>Team 2
                                                </td>
                                                <td>11</td>
                                                <td>8</td>
                                                <td>2</td>
                                                <td>1</td>
                                                <td>+16</td>
                                                <td class="points"><span>26</span></td>
                                                <td class="form">
                                                    <span class="win">w</span>
                                                    <span class="drawn">d</span>
                                                    <span class="lose">l</span>
                                                    <span class="win">w</span>
                                                    <span class="lose">l</span>
                                                </td>
                                                <td><a href="matches.html"><img src="images/vs_arena/team-logo1.png" width="30" height="30" alt="team-logo"></a></td>
                                            </tr>
                                            <tr>
                                                <td class="down">
                                                    <i class="fa fa-caret-down" aria-hidden="true"></i> 1 <span class="team"><img src="images/vs_arena/team-logo3.png" width="30" height="30" alt="team-logo"> </span>Team 3
                                                </td>
                                                <td>11</td>
                                                <td>8</td>
                                                <td>2</td>
                                                <td>1</td>
                                                <td>+16</td>
                                                <td class="points"><span>26</span></td>
                                                <td class="form">
                                                    <span class="lose">l</span>
                                                    <span class="drawn">d</span>
                                                    <span class="lose">l</span>
                                                    <span class="win">w</span>
                                                    <span class="win">w</span>
                                                </td>
                                                <td><a href="matches.html"><img src="images/vs_arena/team-logo4.png" width="30" height="30" alt=""></a></td>
                                            </tr>
                                            <tr>
                                                <td class="down">
                                                    <i class="fa fa-caret-down" aria-hidden="true"></i> 1 <span class="team"><img src="images/vs_arena/team-logo4.png" width="30" height="30" alt="team-logo"> </span>Team 4
                                                </td>
                                                <td>11</td>
                                                <td>8</td>
                                                <td>2</td>
                                                <td>1</td>
                                                <td>+16</td>
                                                <td class="points"><span>26</span></td>
                                                <td class="form">
                                                    <span class="win">w</span>
                                                    <span class="drawn">d</span>
                                                    <span class="lose">l</span>
                                                    <span class="win">w</span>
                                                    <span class="lose">l</span>
                                                </td>
                                                <td><a href="matches.html"><img src="images/vs_arena/team-logo3.png" width="30" height="30" alt="team-logo"></a></td>
                                            </tr>
                                            <tr>
                                                <td class="none">
                                                    <i class="fa fa-circle" aria-hidden="true"></i> 1 <span class="team"><img src="images/vs_arena/team-logo5.png" width="30" height="30" alt="team-logo"> </span>Team 5
                                                </td>
                                                <td>11</td>
                                                <td>8</td>
                                                <td>2</td>
                                                <td>1</td>
                                                <td>+16</td>
                                                <td class="points"><span>26</span></td>
                                                <td class="form">
                                                    <span class="win">w</span>
                                                    <span class="drawn">d</span>
                                                    <span class="lose">l</span>
                                                    <span class="win">w</span>
                                                    <span class="win">w</span>
                                                </td>
                                                <td><a href="matches.html"><img src="images/vs_arena/team-logo1.png" width="30" height="30" alt="team-logo"></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--PLAY OFF-->
                                <div id="playoff" class="tab-pane fade">
                                    <table class="standing-full">
                                        <tbody>
                                            <tr>
                                                <th>club</th>
                                                <th>played</th>
                                                <th>won</th>
                                                <th>drawn</th>
                                                <th>lost</th>
                                                <th>gd</th>
                                                <th>points</th>
                                                <th>form</th>
                                                <th>next</th>
                                            </tr>
                                            <tr>
                                                <td class="up">
                                                    <i class="fa fa-caret-up" aria-hidden="true"></i> 1 <span class="team"><img src="images/vs_arena/team-logo1.png" width="30" height="30" alt="team-logo"> </span>Team 5
                                                </td>
                                                <td>11</td>
                                                <td>8</td>
                                                <td>2</td>
                                                <td>1</td>
                                                <td>+16</td>
                                                <td class="points"><span>26</span></td>
                                                <td class="form">
                                                    <span class="win">w</span>
                                                    <span class="drawn">d</span>
                                                    <span class="lose">l</span>
                                                    <span class="win">w</span>
                                                    <span class="win">w</span>
                                                </td>
                                                <td><a href="matches.html"><img src="images/vs_arena/team-logo2.png" width="30" height="30" alt="team-logo"></a></td>
                                            </tr>
                                            <tr>
                                                <td class="down">
                                                    <i class="fa fa-caret-down" aria-hidden="true"></i> 1 <span class="team"><img src="images/vs_arena/team-logo2.png" width="30" height="30" alt="team-logo"> </span>Team 3
                                                </td>
                                                <td>11</td>
                                                <td>8</td>
                                                <td>2</td>
                                                <td>1</td>
                                                <td>+16</td>
                                                <td class="points"><span>26</span></td>
                                                <td class="form">
                                                    <span class="win">w</span>
                                                    <span class="drawn">d</span>
                                                    <span class="lose">l</span>
                                                    <span class="win">w</span>
                                                    <span class="lose">l</span>
                                                </td>
                                                <td><a href="matches.html"><img src="images/vs_arena/team-logo1.png" width="30" height="30" alt="team-logo"></a></td>
                                            </tr>
                                            <tr>
                                                <td class="down">
                                                    <i class="fa fa-caret-down" aria-hidden="true"></i> 1 <span class="team"><img src="images/vs_arena/team-logo3.png" width="30" height="30" alt="team-logo"> </span>Team 4
                                                </td>
                                                <td>11</td>
                                                <td>8</td>
                                                <td>2</td>
                                                <td>1</td>
                                                <td>+16</td>
                                                <td class="points"><span>26</span></td>
                                                <td class="form">
                                                    <span class="lose">l</span>
                                                    <span class="drawn">d</span>
                                                    <span class="lose">l</span>
                                                    <span class="win">w</span>
                                                    <span class="win">w</span>
                                                </td>
                                                <td><a href="matches.html"><img src="images/vs_arena/team-logo4.png" width="30" height="30" alt=""></a></td>
                                            </tr>
                                            <tr>
                                                <td class="down">
                                                    <i class="fa fa-caret-down" aria-hidden="true"></i> 1 <span class="team"><img src="images/vs_arena/team-logo4.png" width="30" height="30" alt="team-logo"> </span>Team 2
                                                </td>
                                                <td>11</td>
                                                <td>8</td>
                                                <td>2</td>
                                                <td>1</td>
                                                <td>+16</td>
                                                <td class="points"><span>26</span></td>
                                                <td class="form">
                                                    <span class="win">w</span>
                                                    <span class="drawn">d</span>
                                                    <span class="lose">l</span>
                                                    <span class="win">w</span>
                                                    <span class="lose">l</span>
                                                </td>
                                                <td><a href="matches.html"><img src="images/vs_arena/team-logo3.png" width="30" height="30" alt="team-logo"></a></td>
                                            </tr>
                                            <tr>
                                                <td class="none">
                                                    <i class="fa fa-circle" aria-hidden="true"></i> 1 <span class="team"><img src="images/vs_arena/team-logo5.png" width="30" height="30" alt="team-logo"> </span>Team 1
                                                </td>
                                                <td>11</td>
                                                <td>8</td>
                                                <td>2</td>
                                                <td>1</td>
                                                <td>+16</td>
                                                <td class="points"><span>26</span></td>
                                                <td class="form">
                                                    <span class="win">w</span>
                                                    <span class="drawn">d</span>
                                                    <span class="lose">l</span>
                                                    <span class="win">w</span>
                                                    <span class="win">w</span>
                                                </td>
                                                <td><a href="matches.html"><img src="images/vs_arena/team-logo1.png" width="30" height="30" alt="team-logo"></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--TABLA POSICION START-->
                    </div>
                </div>
            </div>
            <!--TABLA POSICIONES END-->
            <!--NOTICIAS START-->
            <div class="tab-item news-tab tab-pane" id="news">
                <div class="news-list">
                    <div class="container">
                        <div class="row">
                            <!--NOTICIA-->
                            <div class="col-md-6">
                                <div class="item img-top">
                                    <div class="img-wrap">
                                        <div class="bage highlight">highlight</div>
                                        <a href="news-single.html"><img src="images/vs_arena/news-list-img.jpg" alt="news-list-img"></a>
                                    </div>
                                    <div class="info">
                                        <a href="news-single.html" class="name">Bauza: Bono and Tolo will start against Intercitulo</a>
                                        <div class="wrap">
                                            <a href="news-single.html">25 Sep 2017</a> by <a href="news-single.html">Mason Carrington</a>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <!--NOTICIA-->
                            <div class="col-md-6">
                                <div class="item img-top">
                                    <div class="img-wrap">
                                        <div class="bage interview">interview</div>
                                        <a href="news-single.html"><img src="images/vs_arena/news-list-img.jpg" alt="news-list-img"></a>
                                    </div>
                                    <div class="info">
                                        <a href="news-single.html" class="name">Bauza: Bono and Tolo will start against Intercitulo</a>
                                        <div class="wrap">
                                            <a href="news-single.html">25 Sep 2017</a> by <a href="news-single.html">Mason Carrington</a>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <!--NOTICIA-->
                            <div class="col-md-6">
                                <div class="item img-top">
                                    <div class="img-wrap">
                                        <div class="bage interview">interview</div>
                                        <a href="news-single.html"><img src="images/vs_arena/news-list-img.jpg" alt="news-list-img"></a>
                                    </div>
                                    <div class="info">
                                        <a href="news-single.html" class="name">Bauza: Bono and Tolo will start against Intercitulo</a>
                                        <div class="wrap">
                                            <a href="news-single.html">25 Sep 2017</a> by <a href="news-single.html">Mason Carrington</a>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <!--NOTICIA-->
                            <div class="col-md-6">
                                <div class="item img-top">
                                    <div class="img-wrap">
                                        <div class="bage interview">interview</div>
                                        <a href="news-single.html"><img src="images/vs_arena/news-list-img.jpg" alt="news-list-img"></a>
                                    </div>
                                    <div class="info">
                                        <a href="news-single.html" class="name">Bauza: Bono and Tolo will start against Intercitulo</a>
                                        <div class="wrap">
                                            <a href="news-single.html">25 Sep 2017</a> by <a href="news-single.html">Mason Carrington</a>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--NOTICIAS END-->
        </div>
    </div>
    <!--CUERPO CAMPEONATO END-->
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