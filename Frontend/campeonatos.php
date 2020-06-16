<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Campeonatos</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7COpen+Sans:700,400%7CRaleway:400,800,900" rel="stylesheet" />
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="css/style.min.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<div class="preloader-wrapper" id="preloader">
    <div class="motion-line dark-big"></div>
    <div class="motion-line yellow-big"></div>
    <div class="motion-line dark-small"></div>
    <div class="motion-line yellow-normal"></div>
    <div class="motion-line yellow-small1"></div>
    <div class="motion-line yellow-small2"></div>
</div>

    
<!--NAV WRAP START-->
    <?php

        include('estructura/barra_navegacion.php');

    ?>
<!--NAV WRAP END-->



    <!--BREADCRUMBS BEGIN-->
<section class="image-header">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="info">
                    <div class="wrap">
                        <ul class="breadcrumbs">
                            <li><a href="index.html">Inicio</a>/</li>
                            <li>Campeonatos</li>
                        </ul>
                        <h1>Campeonatos</h1>
                    </div>
                </div>
            </div>	
        </div>
    </div>
</section>
<!--BREADCRUMBS END-->

    <!--STANDING TABLE WRAP BEGIN-->

    <section class="standing-table-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h4>Copa LCS Internacional</h4>
                    <ul class="tab-filters" role="tablist">
                        <li class="active"><a href="#2017" role="tab" data-toggle="tab">A</a></li>
                        <li><a href="#2016" role="tab" data-toggle="tab">B</a></li>
                        <li><a href="#2015" role="tab" data-toggle="tab">C</a></li>
                        <li><a href="#2014" role="tab" data-toggle="tab">D</a></li>
                    </ul>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12 overflow-scroll standings-table"> 
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="2017" role="tabpanel">
                            <table class="standing-full">
                                <tr>
                                    <th>Equipo</th>
                                    <th>Jugados</th>
                                    <th>Ganados</th>
                                    <th>Perdidos</th>
                                    <th>Empates</th>
                                    <th>GD</th>
                                    <th>Puntos</th>
                                    <th>Historial</th>
                                    <th>Siguiente</th>
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
                                    <td><a href="club-stats.html"><img src="images/vs_arena/team-logo2.png" width="30" height="30" alt="team-logo"></a></td>
                                </tr>
                                <tr>
                                    <td class="down">
                                        <i class="fa fa-caret-down" aria-hidden="true"></i> 2 <span class="team"><img src="images/vs_arena/team-logo2.png" width="30" height="30" alt="team-logo"> </span>Team 2
                                    </td>
                                    <td>11</td>
                                    <td>8</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>+14</td>
                                    <td class="points"><span>23</span></td>
                                    <td class="form">
                                        <span class="win">w</span>
                                        <span class="drawn">d</span>
                                        <span class="lose">l</span>
                                        <span class="win">w</span>
                                        <span class="lose">l</span>
                                    </td>
                                    <td><a href="club-stats.html"><img src="images/vs_arena/team-logo1.png" width="30" height="30" alt="team-logo"></a></td>
                                </tr>
                                <tr>
                                    <td class="down">
                                        <i class="fa fa-caret-down" aria-hidden="true"></i> 2 <span class="team"><img src="images/vs_arena/team-logo3.png" width="30" height="30" alt="team-logo"> </span>Team 3
                                    </td>
                                    <td>11</td>
                                    <td>8</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>+13</td>
                                    <td class="points"><span>23</span></td>
                                    <td class="form">
                                        <span class="win">w</span>
                                        <span class="lose">l</span>
                                        <span class="lose">l</span>
                                        <span class="win">w</span>
                                        <span class="drawn">d</span>
                                    </td>
                                    <td><a href="club-stats.html"><img src="images/vs_arena/team-logo4.png" width="30" height="30" alt="team-logo"></a></td>
                                </tr>
                                <tr>
                                    <td class="down">
                                        <i class="fa fa-caret-down" aria-hidden="true"></i> 2 <span class="team"><img src="images/vs_arena/team-logo4.png" width="30" height="30" alt="team-logo"> </span>Team 4
                                    </td>
                                    <td>11</td>
                                    <td>8</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>+10</td>
                                    <td class="points"><span>23</span></td>
                                    <td class="form">
                                        <span class="lose">l</span>
                                        <span class="drawn">d</span>
                                        <span class="win">w</span>
                                        <span class="win">w</span>
                                        <span class="win">w</span>
                                    </td>
                                    <td><a href="club-stats.html"><img src="images/vs_arena/team-logo3.png" width="30" height="30" alt="team-logo"></a></td>
                                </tr>
                                <tr>
                                    <td class="none">
                                        <i class="fa fa-circle" aria-hidden="true"></i> 3 <span class="team"><img src="images/vs_arena/team-logo5.png" width="30" height="30" alt="team-logo"> </span>Team 5
                                    </td>
                                    <td>11</td>
                                    <td>8</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>+16</td>
                                    <td class="points"><span>20</span></td>
                                    <td class="form">
                                        <span class="win">w</span>
                                        <span class="drawn">d</span>
                                        <span class="lose">l</span>
                                        <span class="win">w</span>
                                        <span class="win">w</span>
                                    </td>
                                    <td><a href="club-stats.html"><img src="images/vs_arena/team-logo1.png" width="30" height="30" alt="team-logo"></a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="2016" role="tabpanel">
                            <table class="standing-full">
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
                                    <td><a href="club-stats.html"><img src="images/vs_arena/team-logo2.png" width="30" height="30" alt="team-logo"></a></td>
                                </tr>
                                <tr>
                                    <td class="down">
                                        <i class="fa fa-caret-down" aria-hidden="true"></i> 1 <span class="team"><img src="images/vs_arena/team-logo2.png" width="30" height="30" alt="team-logo"> </span>Team 1
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
                                    <td><a href="club-stats.html"><img src="images/vs_arena/team-logo1.png" width="30" height="30" alt="team-logo"></a></td>
                                </tr>
                                <tr>
                                    <td class="down">
                                        <i class="fa fa-caret-down" aria-hidden="true"></i> 1 <span class="team"><img src="images/vs_arena/team-logo3.png" width="30" height="30" alt="team-logo"> </span>Team 2
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
                                    <td><a href="club-stats.html"><img src="images/vs_arena/team-logo4.png" width="30" height="30" alt="team-logo"></a></td>
                                </tr>
                                <tr>
                                    <td class="down">
                                        <i class="fa fa-caret-down" aria-hidden="true"></i> 1 <span class="team"><img src="images/vs_arena/team-logo4.png" width="30" height="30" alt="team-logo"> </span>Team 3
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
                                    <td><a href="club-stats.html"><img src="images/vs_arena/team-logo3.png" width="30" height="30" alt="team-logo"></a></td>
                                </tr>
                                <tr>
                                    <td class="none">
                                        <i class="fa fa-circle" aria-hidden="true"></i> 1 <span class="team"><img src="images/vs_arena/team-logo5.png" width="30" height="30" alt="team-logo"> </span>Team 4
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
                                    <td><a href="club-stats.html"><img src="images/vs_arena/team-logo1.png" width="30" height="30" alt="team-logo"></a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="2015" role="tabpanel">
                            <table class="standing-full">
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
                                    <td><a href="club-stats.html"><img src="images/vs_arena/team-logo2.png" width="30" height="30" alt="team-logo"></a></td>
                                </tr>
                                <tr>
                                    <td class="down">
                                        <i class="fa fa-caret-down" aria-hidden="true"></i> 2 <span class="team"><img src="images/vs_arena/team-logo2.png" width="30" height="30" alt="team-logo"> </span>Team 2
                                    </td>
                                    <td>11</td>
                                    <td>8</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>+14</td>
                                    <td class="points"><span>23</span></td>
                                    <td class="form">
                                        <span class="win">w</span>
                                        <span class="drawn">d</span>
                                        <span class="lose">l</span>
                                        <span class="win">w</span>
                                        <span class="lose">l</span>
                                    </td>
                                    <td><a href="club-stats.html"><img src="images/vs_arena/team-logo1.png" width="30" height="30" alt="team-logo"></a></td>
                                </tr>
                                <tr>
                                    <td class="down">
                                        <i class="fa fa-caret-down" aria-hidden="true"></i> 2 <span class="team"><img src="images/vs_arena/team-logo3.png" width="30" height="30" alt="team-logo"> </span>Team 3
                                    </td>
                                    <td>11</td>
                                    <td>8</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>+13</td>
                                    <td class="points"><span>23</span></td>
                                    <td class="form">
                                        <span class="win">w</span>
                                        <span class="lose">l</span>
                                        <span class="lose">l</span>
                                        <span class="win">w</span>
                                        <span class="drawn">d</span>
                                    </td>
                                    <td><a href="club-stats.html"><img src="images/vs_arena/team-logo4.png" width="30" height="30" alt="team-logo"></a></td>
                                </tr>
                                <tr>
                                    <td class="down">
                                        <i class="fa fa-caret-down" aria-hidden="true"></i> 2 <span class="team"><img src="images/vs_arena/team-logo4.png" width="30" height="30" alt="team-logo"> </span>Team 4
                                    </td>
                                    <td>11</td>
                                    <td>8</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>+10</td>
                                    <td class="points"><span>23</span></td>
                                    <td class="form">
                                        <span class="lose">l</span>
                                        <span class="drawn">d</span>
                                        <span class="win">w</span>
                                        <span class="win">w</span>
                                        <span class="win">w</span>
                                    </td>
                                    <td><a href="club-stats.html"><img src="images/vs_arena/team-logo3.png" width="30" height="30" alt="team-logo"></a></td>
                                </tr>
                                <tr>
                                    <td class="none">
                                        <i class="fa fa-circle" aria-hidden="true"></i> 3 <span class="team"><img src="images/vs_arena/team-logo5.png" width="30" height="30" alt="team-logo"> </span>Team 5
                                    </td>
                                    <td>11</td>
                                    <td>8</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>+16</td>
                                    <td class="points"><span>20</span></td>
                                    <td class="form">
                                        <span class="win">w</span>
                                        <span class="drawn">d</span>
                                        <span class="lose">l</span>
                                        <span class="win">w</span>
                                        <span class="win">w</span>
                                    </td>
                                    <td><a href="club-stats.html"><img src="images/vs_arena/team-logo1.png" width="30" height="30" alt="team-logo"></a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="2014" role="tabpanel">
                            <table class="standing-full">
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
                                    <td><a href="club-stats.html"><img src="images/vs_arena/team-logo2.png" width="30" height="30" alt="team-logo"></a></td>
                                </tr>
                                <tr>
                                    <td class="down">
                                        <i class="fa fa-caret-down" aria-hidden="true"></i> 1 <span class="team"><img src="images/vs_arena/team-logo2.png" width="30" height="30" alt="team-logo"> </span>Team 1
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
                                    <td><a href="club-stats.html"><img src="images/vs_arena/team-logo1.png" width="30" height="30" alt="team-logo"></a></td>
                                </tr>
                                <tr>
                                    <td class="down">
                                        <i class="fa fa-caret-down" aria-hidden="true"></i> 1 <span class="team"><img src="images/vs_arena/team-logo3.png" width="30" height="30" alt="team-logo"> </span>Team 2
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
                                    <td><a href="club-stats.html"><img src="images/vs_arena/team-logo4.png" width="30" height="30" alt="team-logo"></a></td>
                                </tr>
                                <tr>
                                    <td class="down">
                                        <i class="fa fa-caret-down" aria-hidden="true"></i> 1 <span class="team"><img src="images/vs_arena/team-logo4.png" width="30" height="30" alt="team-logo"> </span>Team 3
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
                                    <td><a href="club-stats.html"><img src="images/vs_arena/team-logo3.png" width="30" height="30" alt="team-logo"></a></td>
                                </tr>
                                <tr>
                                    <td class="none">
                                        <i class="fa fa-circle" aria-hidden="true"></i> 1 <span class="team"><img src="images/vs_arena/team-logo5.png" width="30" height="30" alt="team-logo"> </span>Team 4
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
                                    <td><a href="club-stats.html"><img src="images/vs_arena/team-logo1.png" width="30" height="30" alt="team-logo"></a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--STANDING TABLE WRAP END-->

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
