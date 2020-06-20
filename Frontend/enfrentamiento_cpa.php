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
   <title>COPA - Enfrentamiento</title>
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
                        <li>En Vivo</li>
                     </ul>
                     <h1>En Vivo</h1>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--CATEGORIA END-->
   <!--BROADCASTS START-->
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <!--TITULO PADRE-->
            <h3>Match Replay</h3>
            <!--VIDEO START-->
            <div class="mathc-live-broadcasts">
               <div class="background">
                  <!--TITULOS VIDEOS-->
                  <div class="broadcast-tabs-wrapper">
                     <ul class="nav nav-tabs" role="tablist">
                        <li class="active" role="presentation">
                           <a href="#title1" role="tab" data-toggle="tab"><img src="images/common/brod-1.png" alt="chanel">
                              <span class="info">
                                 <span class="title">SoloQ - Hight Elo</span>
                                 <span class="language">Leage of Legend</span>
                              </span>
                           </a>
                        </li>
                        <li>
                           <a href="#title1" role="tab" data-toggle="tab"><img src="images/common/brod-1.png" alt="chanel">
                              <span class="info">
                                 <span class="title">SoloQ - Hight Elo</span>
                                 <span class="language">TFT</span>
                              </span>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <!--VIDEOS CONTENEDOR-->
                  <div class="tab-content">
                     <!--VIDEO-->
                     <div class="tab-pane fade in active" role="tabpanel" id="title1">
                        <iframe class="video" src="https://www.dailymotion.com/embed/video/x5howth" allowfullscreen></iframe>
                        <div class="comment">
                           <div class="avatar">
                              <img src="images/common/commenator-ava.jpg" alt="">
                           </div>
                           <span class="comment-info">
                              <span class="name">
                                 Gavin Belson
                              </span>
                              <span class="country">
                                 Admin Page
                              </span>
                           </span>
                        </div>
                     </div>
                     <!--VIDEO-->
                     <div class="tab-pane fade" role="tabpanel" id="title2">
                        <iframe class="video" src="https://www.dailymotion.com/embed/video/x5howth" allowfullscreen></iframe>
                        <div class="comment">
                           <div class="avatar">
                              <img src="images/common/commenator-ava.jpg" alt="">
                           </div>
                           <span class="comment-info">
                              <span class="name">
                                 Robert Jhonson
                              </span>
                              <span class="country">
                                 Support
                              </span>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--VIDEO END-->
         </div>
      </div>
   </div>
   <!--BROADCASTS END-->
   <!--MACTH LIVE INFO START-->
   <div class="match-live-info-bg">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="match-live-info">
                  <!--TITULO-->
                  <div class="title"> Team 1 – Team 2 </div>
                  <!--INFO BATALLA-->
                  <div class="match-info">
                     <div class="team">
                        <div class="avatar">
                           <img src="images/vs_arena/team-logo1.png" alt="team-logo">
                        </div>
                        <div class="text">
                           Team 1
                        </div>
                     </div>
                     <div class="score">
                        0:0
                     </div>
                     <div class="team right  wpb_animate_when_almost_visible wpb_flipInX flipInX wpb_start_animation animated">
                        <div class="text">
                           Team 2
                        </div>
                        <div class="avatar">
                           <img src="images/vs_arena/team-logo2.png" alt="team-logo">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--MACTH LIVE INFO END-->
   <!--LIVE MATCH STAT START-->
   <section class="live-match-stat">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <!--TITULO-->
               <h3 class="h3-tactic">Formación</h3>
               <!--TACTIC PANEL START-->
               <div class="tactic dota">
                  <div class="field text-center">
                     <div class="top mid">
                        <!--PLAYER-->
                        <a href="player.html" class="player top dota mid " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="TheuGa: Queenofpain ">
                           <img width="56" height="56" src="images/common/member-avatar.jpg" alt="player">
                           <img class="hero" src="images/common/champ_icon.jpg">
                        </a>
                        <!--PLAYER-->
                        <a href="player-second-page.html" class="player top dota mid " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="SseaSapartan: Enigma ">
                           <img width="56" height="56" src="images/common/member-avatar.jpg" class=" " alt="player">
                           <img class="hero" src="images/common/champ_icon.jpg">
                        </a>
                     </div>
                     <div class="top hard">
                        <!--PLAYER-->
                        <a href="player.html" class="player top dota hard " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="SkeyLaark: Beastmaster ">
                           <img width="56" height="56" src="images/common/member-avatar.jpg" class=" " alt="player">
                           <img class="hero" src="images/common/champ_icon.jpg">
                        </a>
                     </div>
                     <div class="top ease">
                        <!--PLAYER-->
                        <a href="player-second-page.html" class="player top dota ease " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Maedaara: Juggernaut ">
                           <img width="56" height="56" src="images/common/member-avatar.jpg" class=" " alt="player">
                           <img class="hero" src="images/common/champ_icon.jpg">
                        </a>
                     </div>
                     <div class="top jungle">
                        <!--PLAYER-->
                        <a href="player.html" class="player top dota jungle " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Maeybae Neexta Tiemea: Bounty hunter ">
                           <img width="56" height="56" src="images/common/member-avatar.jpg" class=" " alt="player">
                           <img class="hero" src="images/common/champ_icon.jpg">
                        </a>
                     </div>
                     <div class="bottom mid">
                        <!--PLAYER-->
                        <a href="player.html" class="player bottom dota mid " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="13eabayKnight: Ember spirit ">
                           <img width="56" height="56" src="images/common/member-avatar.jpg" class=" " alt="player">
                           <img class="hero" src="images/common/champ_icon.jpg" alt="ember spirit">
                        </a>
                        <!--PLAYER-->
                        <a href="player-second-page.html" class="player bottom dota mid " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Aceea: Centaur ">
                           <img width="56" height="56" src="images/common/member-avatar.jpg" class=" " alt="player">
                           <img class="hero" src="images/common/champ_icon.jpg" alt="centaur">
                        </a>
                     </div>
                     <div class="bottom hard">
                        <!--PLAYER-->
                        <a href="player.html" class="player bottom dota hard " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Noeiaa: Earth spirit ">
                           <img width="56" height="56" src="images/common/member-avatar.jpg" class=" " alt="player">
                           <img class="hero" src="images/common/champ_icon.jpg" alt="earth spirit">
                        </a>
                     </div>
                     <div class="bottom ease">
                        <!--PLAYER-->
                        <a href="player.html" class="player bottom dota ease " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="HeestaeJoe-Rotten: Queenofpain ">
                           <img width="56" height="56" src="images/common/member-avatar.jpg" class=" " alt="player">
                           <img class="hero" src="images/common/champ_icon.jpg" alt="queenofpain">
                        </a>
                     </div>
                     <div class="bottom jungle">
                        <!--PLAYER-->
                        <a href="player-second-page.html" class="player bottom dota jungle " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Ryezea: Shadow demon ">
                           <img width="56" height="56" src="images/common/member-avatar.jpg" class=" " alt="player">
                           <img class="hero" src="images/common/champ_icon.jpg" alt="shadow demon">
                        </a>
                     </div>
                     <img class="img-responsive center-block" src="images/common/dota-match-field.jpg" alt="match-field">
                  </div>
               </div>
               <!--TACTIC PANEL END-->
               <!--TITULO-->
               <h3>Alineación</h3>
               <!--FORMACION START-->
               <div class="match-lineup">
                  <div class="no-gutter">
                     <div class="col-sm-6">
                        <!--EQUIPO NAME-->
                        <div class="head">
                           <div class="name">SKT T1</div>
                        </div>
                        <!--CONTENEDOR PLAYER START-->
                        <div class="team-wrap">
                           <!--PLAYER-->
                           <div class="member">
                              <a href="player.html" class="avatar"><img src="images/common/member-avatar.jpg" alt="member-avatar"></a>
                              <div class="info">
                                 <div class="wrap">
                                    <a href="player.html" class="name">Pasveer (GK)</a>
                                    <div class="card yellow" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                                    <div class="card red" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                                 </div>
                                 <div class="country"><img src="images/common/group_icon1.png" alt="flag">Lorem</div>
                              </div>
                           </div>
                           <!--PLAYER-->
                           <div class="member">
                              <a href="player.html" class="avatar"><img src="images/common/member-avatar.jpg" alt="member-avatar"></a>
                              <div class="info">
                                 <div class="wrap">
                                    <a href="player.html" class="name">Pasveer (GK)</a>
                                    <div class="card yellow" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                                    <div class="card red" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                                 </div>
                                 <div class="country"><img src="images/common/group_icon1.png" alt="flag">Lorem</div>
                              </div>
                           </div>
                           <!--PLAYER-->
                           <div class="member">
                              <a href="player.html" class="avatar"><img src="images/common/member-avatar.jpg" alt="member-avatar"></a>
                              <div class="info">
                                 <div class="wrap">
                                    <a href="player.html" class="name">Pasveer (GK)</a>
                                    <div class="goal" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                                 </div>
                                 <div class="country"><img src="images/common/group_icon1.png" alt="flag">Lorem</div>
                              </div>
                           </div>
                           <!--PLAYER-->
                           <div class="member">
                              <a href="player.html" class="avatar"><img src="images/common/member-avatar.jpg" alt="member-avatar"></a>
                              <div class="info">
                                 <div class="wrap">
                                    <a href="player.html" class="name">Pasveer (GK)</a>
                                    <div class="card yellow" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                                 </div>
                                 <div class="country"><img src="images/common/group_icon1.png" alt="flag">Lorem</div>
                              </div>
                           </div>
                           <!--PLAYER-->
                           <div class="member">
                              <a href="player.html" class="avatar"><img src="images/common/member-avatar.jpg" alt="member-avatar"></a>
                              <div class="info">
                                 <div class="wrap">
                                    <a href="player.html" class="name">Pasveer (GK)</a>
                                    <div class="card yellow" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                                    <div class="card red" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                                 </div>
                                 <div class="country"><img src="images/common/group_icon1.png" alt="flag">Lorem</div>
                              </div>
                           </div>
                           <!--PLAYER-->
                           <div class="member">
                              <a href="player.html" class="avatar"><img src="images/common/member-avatar.jpg" alt="member-avatar"></a>
                              <div class="info">
                                 <div class="wrap">
                                    <a href="player.html" class="name">Pasveer (GK)</a>
                                    <div class="card yellow" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                                    <div class="card red" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                                 </div>
                                 <div class="country"><img src="images/common/group_icon1.png" alt="flag">Lorem</div>
                              </div>
                           </div>
                        </div>
                        <!--CONTENEDOR PLAYER END-->
                     </div>
                     <div class="col-sm-6">
                        <div class="head">
                           <div class="name right">Giants</div>
                        </div>
                        <!--CONTENEDOR PLAYER START-->
                        <div class="team-wrap right">
                           <!--PLAYER-->
                           <div class="member">
                              <div class="info">
                                 <div class="wrap">
                                    <div class="card yellow" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                                    <div class="goal" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                                    <a href="player.html" class="name">Pasveer (GK)</a>
                                 </div>
                                 <div class="country"><img src="images/common/group_icon.png" alt="ícono del grupo"> Lorem</div>
                              </div>
                              <a href="player.html" class="avatar"><img src="images/common/member-avatar.jpg" alt="member-avatar"></a>
                           </div>
                           <!--PLAYER-->
                           <div class="member">
                              <div class="info">
                                 <div class="wrap">
                                    <div class="card yellow" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                                    <div class="goal" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                                    <a href="player.html" class="name">Pasveer (GK)</a>
                                 </div>
                                 <div class="country"><img src="images/common/group_icon.png" alt="ícono del grupo"> Lorem</div>
                              </div>
                              <a href="player.html" class="avatar"><img src="images/common/member-avatar.jpg" alt="member-avatar"></a>
                           </div>
                           <!--PLAYER-->
                           <div class="member">
                              <div class="info">
                                 <div class="wrap">
                                    <div class="card yellow" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                                    <div class="goal" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                                    <a href="player.html" class="name">Pasveer (GK)</a>
                                 </div>
                                 <div class="country"><img src="images/common/group_icon.png" alt="ícono del grupo"> Lorem</div>
                              </div>
                              <a href="player.html" class="avatar"><img src="images/common/member-avatar.jpg" alt="member-avatar"></a>
                           </div>
                           <!--PLAYER-->
                           <div class="member">
                              <div class="info">
                                 <div class="wrap">
                                    <div class="card yellow" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                                    <div class="goal" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                                    <a href="player.html" class="name">Pasveer (GK)</a>
                                 </div>
                                 <div class="country"><img src="images/common/group_icon.png" alt="ícono del grupo"> Lorem</div>
                              </div>
                              <a href="player.html" class="avatar"><img src="images/common/member-avatar.jpg" alt="member-avatar"></a>
                           </div>
                           <!--PLAYER-->
                           <div class="member">
                              <div class="info">
                                 <div class="wrap">
                                    <div class="card yellow" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                                    <div class="goal" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                                    <a href="player.html" class="name">Pasveer (GK)</a>
                                 </div>
                                 <div class="country"><img src="images/common/group_icon.png" alt="ícono del grupo"> Lorem</div>
                              </div>
                              <a href="player.html" class="avatar"><img src="images/common/member-avatar.jpg" alt="member-avatar"></a>
                           </div>
                           <!--PLAYER-->
                           <div class="member">
                              <div class="info">
                                 <div class="wrap">
                                    <div class="card yellow" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                                    <div class="goal" data-toggle="tooltip" data-placement="top" title="" data-original-title="32’"></div>
                                    <a href="player.html" class="name">Pasveer (GK)</a>
                                 </div>
                                 <div class="country"><img src="images/common/group_icon.png" alt="ícono del grupo"> Lorem</div>
                              </div>
                              <a href="player.html" class="avatar"><img src="images/common/member-avatar.jpg" alt="member-avatar"></a>
                           </div>
                        </div>
                        <!--CONTENEDOR PLAYER END-->
                     </div>
                  </div>
               </div>
               <!--FORMACION END-->
            </div>
            <!--CONTENEDOR ASIDE START-->
            <div class="col-lg-6">
               <!--APARTADO ESTADISTICAS START-->
               <h3>Estadísticas</h3>
               <div class="match-stat-table">
                  <!--ESTADIS-->
                  <div class="item">
                     <div class="name">Component 1</div>
                     <div class="percent">1</div>
                     <div class="percent right">1</div>
                     <div class="percent-bar">
                        <div class="bar bar-1"></div>
                     </div>
                  </div>
                  <!--ESTADIS-->
                  <div class="item">
                     <div class="name">Component 2</div>
                     <div class="percent">48</div>
                     <div class="percent right">52</div>
                     <div class="percent-bar">
                        <div class="bar bar-2"></div>
                     </div>
                  </div>
                  <!--ESTADIS-->
                  <div class="item">
                     <div class="name">Component 3</div>
                     <div class="percent">15</div>
                     <div class="percent right">13</div>
                     <div class="percent-bar">
                        <div class="bar bar-3"></div>
                     </div>
                  </div>
                  <!--ESTADIS-->
                  <div class="item">
                     <div class="name">Component 4</div>
                     <div class="percent">7</div>
                     <div class="percent right">5</div>
                     <div class="percent-bar">
                        <div class="bar bar-4"></div>
                     </div>
                  </div>
                  <!--ESTADIS-->
                  <div class="item">
                     <div class="name">Component 5</div>
                     <div class="percent">2</div>
                     <div class="percent right">1</div>
                     <div class="percent-bar">
                        <div class="bar bar-5"></div>
                     </div>
                  </div>
                  <!--ESTADIS-->
                  <div class="item">
                     <div class="name">Component 6</div>
                     <div class="percent">4</div>
                     <div class="percent right">3</div>
                     <div class="percent-bar">
                        <div class="bar bar-6"></div>
                     </div>
                  </div>
               </div>
               <!--APARTADO ESTADISTICAS END-->
               <!--INFO CAMPEONATO START-->
               <div class="live-championship">
                  <h3>Campeonato</h3>
                  <div class="header">LCS CHAMPIONSHIP</div>
                  <div class="border">
                     <div class="row">
                        <!--LOGO-->
                        <div class="col-md-4 col-sm-5">
                           <span class="img-champ">
                              <a href="championship.html" title="The Greatest League">
                                 <img src="images/vs_arena/championship-ico.jpg" alt="champ-img">
                              </a>
                           </span>
                        </div>
                        <!--INFO-->
                        <div class="col-md-8 col-sm-7">
                           <div class="info">
                              <dl>
                                 <dt>Iniciado:</dt>
                                 <dd>16 may 2020</dd>
                                 <dt>Region:</dt>
                                 <dd>Europe</dd>
                                 <dt>Ultimo Champion:</dt>
                                 <dd>Team Name 1</dd>
                              </dl>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--APARTADO ESTADISTICAS END-->
               <!--COACH CONT START-->
               <h3>Coaches</h3>
               <div class="match-lineup">
                  <div class="no-gutter">
                     <!--COACH-->
                     <div class="col-sm-6">
                        <div class="team-wrap">
                           <div class="member">
                              <a href="player.html" class="avatar"><img src="images/common/member-avatar.jpg" alt="member-avatar"></a>
                              <div class="info">
                                 <div class="wrap">
                                    <a href="player.html" class="name">Coach 1</a>
                                 </div>
                                 <div class="country"><img src="images/common/group_icon1.png" alt="flag">Lorem</div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--COACH-->
                     <div class="col-sm-6">
                        <div class="team-wrap right">
                           <div class="member">
                              <div class="info">
                                 <div class="wrap">
                                    <a href="player.html" class="name">Coach 2 </a>
                                 </div>
                                 <div class="country"><img src="images/common/group_icon.png" alt="ícono del grupo"> Lorem</div>
                              </div>
                              <a href="player.html" class="avatar"><img src="images/common/member-avatar.jpg" alt="member-avatar"></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--COACH CONT END-->
               <!--ABOUT-->
               <h3>Sobre el campeonato</h3>
               <div class="match-lineup">
                  <div class="live-details">
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum vero debitis voluptatibus dolores aspernatur, nulla, consequatur nesciunt adipisci, ipsa distinctio deserunt error minus fugit. Sequi et, suscipit! Tenetur, laboriosam facere?.</ <div>
                  </div>
               </div>
            </div>
            <!--CONTENEDOR ASIDE END-->
   </section>
   <!--LIVE MATCH STAT END-->
   <!--SHARE BOX START-->
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="share-box">
               <div class="item">
                  <div class="container-fluid">
                     <div class="row no-gutter">
                        <!--TITLE-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                           <div class="title">COMPARTE ESTE CAMPEONATO</div>
                        </div>
                        <div class="col-md-8 col-sm-6 col-xs-12 text-right">
                           <ul class="share-socials  wpb_animate_when_almost_visible wpb_fadeInRight fadeInRight wpb_start_animation animated">
                              <!-- Digg -->
                              <li class="digg">
                                 <a href="http://www.digg.com/">
                                    <i class="fa fa-digg" aria-hidden="true"></i>
                                 </a>
                              </li>
                              <!-- Facebook -->
                              <li class="facebook">
                                 <a href="http://www.facebook.com/">
                                    <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                 </a>
                              </li>
                              <!-- Google+ -->
                              <li class="google">
                                 <a href="https://plus.google.com/">
                                    <i class="fa fa-google-plus-square" aria-hidden="true"></i>
                                 </a>
                              </li>
                              <!-- LinkedIn -->
                              <li class="linkedin">
                                 <a href="http://www.linkedin.com/">
                                    <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                                 </a>
                              </li>
                              <!-- Pinterest -->
                              <li class="pinterest">
                                 <a href="http://assets.pinterest.com/">
                                    <i class="fa fa-pinterest-square" aria-hidden="true"></i>
                                 </a>
                              </li>
                              <!-- Reddit -->
                              <li class="reddit">
                                 <a href="http://reddit.com/">
                                    <i class="fa fa-reddit-square" aria-hidden="true"></i>
                                 </a>
                              </li>
                              <!-- StumbleUpon-->
                              <li class="StumbleUpon">
                                 <a href="http://www.stumbleupon.com/">
                                    <i class="fa fa-stumbleupon-circle" aria-hidden="true"></i>
                                 </a>
                              </li>
                              <!-- Tumblr-->
                              <li class="tumbler">
                                 <a href="http://www.tumblr.com/">
                                    <i class="fa fa-tumblr-square" aria-hidden="true"></i>
                                 </a>
                              </li>
                              <!-- Twitter -->
                              <li class="twitter">
                                 <a href="https://twitter.com/">
                                    <i class="fa fa-twitter-square" aria-hidden="true"></i>
                                 </a>
                              </li>
                              <!-- VK -->
                              <li class="vk">
                                 <a href="http://vkontakte.ru/">
                                    <i class="fa fa-vk" aria-hidden="true"></i>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--SHARE BOX END-->
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

</html>