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
    <title>Campeonatos - Tabla</title>
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
                                <li>Campeonatos</li>
                            </ul>
                            <h1>Campeonatos</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CATEGORIA END-->
    <!--STANDING TABLE WRAP BEGIN-->
    <section class="standing-table-wrap">
        <div class="container">
            <div class="row">
                <!--TITULO-->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h4>Copa LCS Internacional</h4>
                    <ul class="tab-filters" role="tablist">
                        <li class="active"><a href="#2017" role="tab" data-toggle="tab">Lorem lorem</a></li>
                        <li><a href="#2016" role="tab" data-toggle="tab">Lorem lorem</a></li>
                    </ul>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 overflow-scroll standings-table">
                    <div class="tab-content">
                        <!--EQUIPO-->
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
                                        <i class="fa fa-caret-up" aria-hidden="true"></i> 1 <span class="team"><img src="<?php echo $urlFE;?>/images/vs_arena/team-logo1.png" width="30" height="30" alt="team-logo"> </span>Team 1
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
                                    <td><a href="club-stats.html"><img src="<?php echo $urlFE;?>/images/vs_arena/team-logo2.png" width="30" height="30" alt="team-logo"></a></td>
                                </tr>
                                <tr>
                                    <td class="down">
                                        <i class="fa fa-caret-down" aria-hidden="true"></i> 2 <span class="team"><img src="<?php echo $urlFE;?>/images/vs_arena/team-logo2.png" width="30" height="30" alt="team-logo"> </span>Team 2
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
                                    <td><a href="club-stats.html"><img src="<?php echo $urlFE;?>/images/vs_arena/team-logo1.png" width="30" height="30" alt="team-logo"></a></td>
                                </tr>
                                <tr>
                                    <td class="down">
                                        <i class="fa fa-caret-down" aria-hidden="true"></i> 2 <span class="team"><img src="<?php echo $urlFE;?>/images/vs_arena/team-logo3.png" width="30" height="30" alt="team-logo"> </span>Team 3
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
                                    <td><a href="club-stats.html"><img src="<?php echo $urlFE;?>/images/vs_arena/team-logo4.png" width="30" height="30" alt="team-logo"></a></td>
                                </tr>
                                <tr>
                                    <td class="down">
                                        <i class="fa fa-caret-down" aria-hidden="true"></i> 2 <span class="team"><img src="<?php echo $urlFE;?>/images/vs_arena/team-logo4.png" width="30" height="30" alt="team-logo"> </span>Team 4
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
                                    <td><a href="club-stats.html"><img src="<?php echo $urlFE;?>/images/vs_arena/team-logo3.png" width="30" height="30" alt="team-logo"></a></td>
                                </tr>
                                <tr>
                                    <td class="none">
                                        <i class="fa fa-circle" aria-hidden="true"></i> 3 <span class="team"><img src="<?php echo $urlFE;?>/images/vs_arena/team-logo5.png" width="30" height="30" alt="team-logo"> </span>Team 5
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
                                    <td><a href="club-stats.html"><img src="<?php echo $urlFE;?>/images/vs_arena/team-logo1.png" width="30" height="30" alt="team-logo"></a></td>
                                </tr>
                            </table>
                        </div>
                        <!--EQUIPO-->
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
                                        <i class="fa fa-caret-up" aria-hidden="true"></i> 1 <span class="team"><img src="<?php echo $urlFE;?>/images/vs_arena/team-logo1.png" width="30" height="30" alt="team-logo"> </span>Team 5
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
                                    <td><a href="club-stats.html"><img src="<?php echo $urlFE;?>/images/vs_arena/team-logo2.png" width="30" height="30" alt="team-logo"></a></td>
                                </tr>
                                <tr>
                                    <td class="down">
                                        <i class="fa fa-caret-down" aria-hidden="true"></i> 1 <span class="team"><img src="<?php echo $urlFE;?>/images/vs_arena/team-logo2.png" width="30" height="30" alt="team-logo"> </span>Team 1
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
                                    <td><a href="club-stats.html"><img src="<?php echo $urlFE;?>/images/vs_arena/team-logo1.png" width="30" height="30" alt="team-logo"></a></td>
                                </tr>
                                <tr>
                                    <td class="down">
                                        <i class="fa fa-caret-down" aria-hidden="true"></i> 1 <span class="team"><img src="<?php echo $urlFE;?>/images/vs_arena/team-logo3.png" width="30" height="30" alt="team-logo"> </span>Team 2
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
                                    <td><a href="club-stats.html"><img src="<?php echo $urlFE;?>/images/vs_arena/team-logo4.png" width="30" height="30" alt="team-logo"></a></td>
                                </tr>
                                <tr>
                                    <td class="down">
                                        <i class="fa fa-caret-down" aria-hidden="true"></i> 1 <span class="team"><img src="<?php echo $urlFE;?>/images/vs_arena/team-logo4.png" width="30" height="30" alt="team-logo"> </span>Team 3
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
                                    <td><a href="club-stats.html"><img src="<?php echo $urlFE;?>/images/vs_arena/team-logo3.png" width="30" height="30" alt="team-logo"></a></td>
                                </tr>
                                <tr>
                                    <td class="none">
                                        <i class="fa fa-circle" aria-hidden="true"></i> 1 <span class="team"><img src="<?php echo $urlFE;?>/images/vs_arena/team-logo5.png" width="30" height="30" alt="team-logo"> </span>Team 4
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
                                    <td><a href="club-stats.html"><img src="<?php echo $urlFE;?>/images/vs_arena/team-logo1.png" width="30" height="30" alt="team-logo"></a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--STANDING TABLE WRAP END-->
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