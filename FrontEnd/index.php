<?php
require_once('../BackEnd/config.php');
session_start();
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
	<title>Inicio</title>
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
	<!--SLIDER START-->
	<div id="home" class="esport-team-landing-main-slider">
		<div class="msp_post_slider" id="amateurs-slider">
			<div class="owl-carousel owl-theme" role="listbox">
				<div class="item msp_post_slide slide-4">
					<div class="slider-caption">
						<div class="container">
							<div class="row">
								<div class="col-md-6 col-sm-8">
									<div class="sub-title">
										Sorprendentes
									</div>
									<div class="big-title">
										PREMIOS
									</div>
									<a href="<?php echo $amigable; ?>/noticias" class="btn">
										PREMIOS
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item msp_post_slide slide-1">
					<div class="slider-caption">
						<div class="container">
							<div class="row">
								<div class="col-md-6 col-sm-8">
									<div class="sub-title">
										Increibles
									</div>
									<div class="big-title">
										TORNEOS
									</div>
									<a href="<?php echo $amigable; ?>/torneos" class="btn">
										TORNEOS
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item msp_post_slide slide-2">
					<div class="slider-caption">
						<div class="container">
							<div class="row">
								<div class="col-md-6 col-sm-8">
									<div class="sub-title">
										Inimaginables
									</div>
									<div class="big-title">
										BATALLAS
									</div>
									<a href="<?php echo $amigable; ?>/batallas" class="btn">
										BATALLAS
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item msp_post_slide slide-3">
					<div class="slider-caption">
						<div class="container">
							<div class="row">
								<div class="col-md-6 col-sm-8">
									<div class="sub-title">
										Super
									</div>
									<div class="big-title">
										NOTICIAS
									</div>
									<a href="<?php echo $amigable; ?>/noticias" class="btn">
										NOTICIAS
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Controls -->
			<a class="nav-arrow left-arrow" href="#main-slider" role="button" data-slide="prev">
				<i class="fa fa-angle-left" aria-hidden="true"></i>
				<span class="sr-only">Anterior</span>
			</a>
			<a class="nav-arrow right-arrow" href="#main-slider" role="button" data-slide="next">
				<i class="fa fa-angle-right" aria-hidden="true"></i>
				<span class="sr-only">Siguiente</span>
			</a>
			<div class="progress-line">
				<div class="bar"></div>
			</div>
		</div>
	</div>
	<!--SLIDER END-->
	<!--SPONSORS START-->
	<div class="esport-team-landing-sponsors">
		<div class="container">
			<div class="row flex">
				<div class="col-md-3 sponsors">
					<span>Nuestros</span>
					<span>Sponsors</span>
				</div>
				<div class="col-md-3 col-sm-4 text-center">
					<a><img src="<?php echo $urlFE; ?>/images/common/sponsor-img.jpg" alt="sponsor-image" class="img_sponsor""></a>
				</div>
				<div class=" col-md-3 col-sm-4 text-center">
						<a><img src="<?php echo $urlFE; ?>/images/common/sponsor-img.jpg" alt="sponsor-image" class="img_sponsor""></a>
				</div>
				<div class=" col-md-3 col-sm-4 text-center">
							<a><img src="<?php echo $urlFE; ?>/images/common/sponsor-img.jpg" alt="sponsor-image" class="img_sponsor""></a>
				</div>
			</div>
		</div>
	</div>
	<!--SPONSORS END-->
	<!--PRIMER FILA START-->
	<div id=" matches" class="esport-landing-next-event-section">
								<div class="container">
									<div class="row">
										<!--ENFRENTAMIENTOS START-->
										<div class="col-md-7">
											<h5 class="esport-landing-header">Últimos enfrentamientos</h5>
											<div class="esport-team-landing-latest-matches">
												<!--ENFRENTAMIENTO-->
												<a href="#">
													<img src="<?php echo $urlFE; ?>/images/common/esport-champ-late-match.jpg" alt="background">
													<span>Enfrentamiento</span>
													<div>
														<div class="team left">
															<span>
																<img src="<?php echo $urlFE; ?>/images/common/team-logo.png" alt="team-logo">
															</span>
															<span class="team-name">Equipo</span>
														</div>
														<div class="score">
															<span>0 : 0</span>
														</div>
														<div class="team right">
															<span class="image">
																<img src="<?php echo $urlFE; ?>/images/common/team-logo.png" alt="team-logo">
															</span>
															<span class="team-name">Equipo</span>
														</div>
													</div>
													<span>
														<!-- aca va de donde proviene la batalla --></span>
												</a>
												<!--ENFRENTAMIENTO-->
												<a href="#">
													<img src="<?php echo $urlFE; ?>/images/common/esport-champ-late-match.jpg" alt="background">
													<span>Enfrentamiento</span>
													<div>
														<div class="team left">
															<span>
																<img src="<?php echo $urlFE; ?>/images/common/team-logo.png" alt="team-logo">
															</span>
															<span class="team-name">Equipo</span>
														</div>
														<div class="score">
															<span>0 : 0</span>
														</div>
														<div class="team right">
															<span class="image">
																<img src="<?php echo $urlFE; ?>/images/common/team-logo.png" alt="team-logo">
															</span>
															<span class="team-name">Equipo</span>
														</div>
													</div>
													<span>
														<!-- aca va de donde proviene la batalla --></span>
												</a>
											</div>
										</div>
										<!--ENFRENTAMIENTOS END-->
										<!--PROXIMO TORNEO START-->
										<div class="col-md-5 prox_torneo">
											<h5 class="esport-landing-header">Próximo torneo</h5>
											<div class="esport-team-landing-next-event">
												<img src="<?php echo $urlFE; ?>/images/common/esport-team-landing-next-event-logo.png" alt="next-event">
												<div class="name">
													<a href="#"><span>PRÓXIMAMENTE</span></a>
												</div>
												<div class="date">
													XX-XX-2020
												</div>
											</div>
										</div>
										<!--PROXIMO TORNEO END-->
									</div>
								</div>
				</div>
				<!--PRIMER FILA END-->
				<!--SEGUNDA FILA START-->
				<div id="team" class="esport-team-landing-players-sllider-section">
					<!--ESPORT CHAMPIONSHIP PLAYERS START-->
					<div class="esport-team-landing-players">
						<div class="container">
							<!--EQUIPOS DESTACADOS-->
							<div class="row">
								<div class="col-md-12">
									<h5 class="esport-landing-header">Equipos Destacados</h5>
									<ul class="esport-players">
										<li class="active">
											<a data-toggle="tab" href="#panters">Equipo</a>
										</li>
										<li>
											<a data-toggle="tab" href="#bears">Equipo</a>
										</li>
									</ul>
								</div>
							</div>
							<!--CONTENEDOR DE PANELES DE JUGADORES START-->
							<div class="tab-content">
								<!--PANEL DE 5 JUGADORES START-->
								<div id="panters" class="tab-pane fade in active">
									<div class="wrap">
										<div class="width players-wrapper">
											<!--JUGADOR-->
											<a href="#" data-id="0">
												<img class="player-img" alt="player-img" src="<?php echo $urlFE; ?>/images/common/esport-players.jpg">
												<span class="name">
													Jugador
												</span>
												<span class="info-bord">
													<span class="name">Jugador</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">P. Jugados</span>
															<span class="score">10</span>
														</span>
													</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">P. Ganados</span>
															<span class="score">23</span>
														</span>
													</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">P. Perdidos</span>
															<span class="score">23</span>
														</span>
													</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">Campeonatos</span>
															<span class="score">23</span>
														</span>
													</span>
												</span>
											</a>
											<!--JUGADOR-->
											<a href="#" data-id="0">
												<img class="player-img" alt="player-img" src="<?php echo $urlFE; ?>/images/common/esport-players.jpg">
												<span class="name">
													Jugador
												</span>
												<span class="info-bord">
													<span class="name">Jugador</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">P. Jugados</span>
															<span class="score">10</span>
														</span>
													</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">P. Ganados</span>
															<span class="score">23</span>
														</span>
													</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">P. Perdidos</span>
															<span class="score">23</span>
														</span>
													</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">Campeonatos</span>
															<span class="score">23</span>
														</span>
													</span>
												</span>
											</a>
											<!--JUGADOR-->
											<a href="#" data-id="0">
												<img class="player-img" alt="player-img" src="<?php echo $urlFE; ?>/images/common/esport-players.jpg">
												<span class="name">
													Jugador
												</span>
												<span class="info-bord">
													<span class="name">Jugador</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">P. Jugados</span>
															<span class="score">10</span>
														</span>
													</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">P. Ganados</span>
															<span class="score">23</span>
														</span>
													</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">P. Perdidos</span>
															<span class="score">23</span>
														</span>
													</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">Campeonatos</span>
															<span class="score">23</span>
														</span>
													</span>
												</span>
											</a>
											<!--JUGADOR-->
											<a href="#" data-id="0">
												<img class="player-img" alt="player-img" src="<?php echo $urlFE; ?>/images/common/esport-players.jpg">
												<span class="name">
													Jugador
												</span>
												<span class="info-bord">
													<span class="name">Jugador</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">P. Jugados</span>
															<span class="score">10</span>
														</span>
													</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">P. Ganados</span>
															<span class="score">23</span>
														</span>
													</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">P. Perdidos</span>
															<span class="score">23</span>
														</span>
													</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">Campeonatos</span>
															<span class="score">23</span>
														</span>
													</span>
												</span>
											</a>
											<!--JUGADOR-->
											<a href="#" data-id="0">
												<img class="player-img" alt="player-img" src="<?php echo $urlFE; ?>/images/common/esport-players.jpg">
												<span class="name">
													Jugador
												</span>
												<span class="info-bord">
													<span class="name">Jugador</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">P. Jugados</span>
															<span class="score">10</span>
														</span>
													</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">P. Ganados</span>
															<span class="score">23</span>
														</span>
													</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">P. Perdidos</span>
															<span class="score">23</span>
														</span>
													</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">Campeonatos</span>
															<span class="score">23</span>
														</span>
													</span>
												</span>
											</a>
										</div>
									</div>
								</div>
								<!--PANEL DE 5 JUGADORES END-->
								<!--PANEL DE 5 JUGADORES START-->
								<div id="bears" class="tab-pane fade">
									<div class="wrap">
										<div class="width players-wrapper">
											<!--JUGADOR-->
											<a href="#" data-id="0">
												<img class="player-img" alt="player-img" src="<?php echo $urlFE; ?>/images/common/esport-players.jpg">
												<span class="name">
													Jugador
												</span>
												<span class="info-bord">
													<span class="name">Jugador</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">P. Jugados</span>
															<span class="score">10</span>
														</span>
													</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">P. Ganados</span>
															<span class="score">23</span>
														</span>
													</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">P. Perdidos</span>
															<span class="score">23</span>
														</span>
													</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">Campeonatos</span>
															<span class="score">23</span>
														</span>
													</span>
												</span>
											</a>
											<!--JUGADOR-->
											<a href="#" data-id="0">
												<img class="player-img" alt="player-img" src="<?php echo $urlFE; ?>/images/common/esport-players.jpg">
												<span class="name">
													Jugador
												</span>
												<span class="info-bord">
													<span class="name">Jugador</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">P. Jugados</span>
															<span class="score">10</span>
														</span>
													</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">P. Ganados</span>
															<span class="score">23</span>
														</span>
													</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">P. Perdidos</span>
															<span class="score">23</span>
														</span>
													</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">Campeonatos</span>
															<span class="score">23</span>
														</span>
													</span>
												</span>
											</a>
											<!--JUGADOR-->
											<a href="#" data-id="0">
												<img class="player-img" alt="player-img" src="<?php echo $urlFE; ?>/images/common/esport-players.jpg">
												<span class="name">
													Jugador
												</span>
												<span class="info-bord">
													<span class="name">Jugador</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">P. Jugados</span>
															<span class="score">10</span>
														</span>
													</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">P. Ganados</span>
															<span class="score">23</span>
														</span>
													</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">P. Perdidos</span>
															<span class="score">23</span>
														</span>
													</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">Campeonatos</span>
															<span class="score">23</span>
														</span>
													</span>
												</span>
											</a>
											<!--JUGADOR-->
											<a href="#" data-id="0">
												<img class="player-img" alt="player-img" src="<?php echo $urlFE; ?>/images/common/esport-players.jpg">
												<span class="name">
													Jugador
												</span>
												<span class="info-bord">
													<span class="name">Jugador</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">P. Jugados</span>
															<span class="score">10</span>
														</span>
													</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">P. Ganados</span>
															<span class="score">23</span>
														</span>
													</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">P. Perdidos</span>
															<span class="score">23</span>
														</span>
													</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">Campeonatos</span>
															<span class="score">23</span>
														</span>
													</span>
												</span>
											</a>
											<!--JUGADOR-->
											<a href="#" data-id="0">
												<img class="player-img" alt="player-img" src="<?php echo $urlFE; ?>/images/common/esport-players.jpg">
												<span class="name">
													Jugador
												</span>
												<span class="info-bord">
													<span class="name">Jugador</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">P. Jugados</span>
															<span class="score">10</span>
														</span>
													</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">P. Ganados</span>
															<span class="score">23</span>
														</span>
													</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">P. Perdidos</span>
															<span class="score">23</span>
														</span>
													</span>
													<!--PROGRESS ITEM-->
													<span class="progress-item">
														<span class="progress-line">
															<span class="bar"></span>
														</span>
														<span class="bar-label">
															<span class="achievement">Campeonatos</span>
															<span class="score">23</span>
														</span>
													</span>
												</span>
											</a>
										</div>
									</div>
								</div>
								<!--PANEL DE 5 JUGADORES END-->
							</div>
							<!--CONTENEDOR DE PANELES DE JUGADORES START-->
						</div>
					</div>
					<!--ESPORT CHAMPIONSHIP PLAYERS END-->
				</div>
				<!--SEGUNDA FILA END-->
				<!--TERCER FILA START-->
				<div id="about" class="esport-team-landing-about">
					<div class="container">
						<div class="row">
							<!--NOSOTROS-->
							<div class="col-md-7">
								<div class="row">
									<!--DESCRIPCION-->
									<div class="col-md-12">
										<span class="title">Sobre nosotros</span>
										<p class="about_description"><b>VsArena</b> te ofrece <b>oportunidades únicas.</b> Una comunidad hecha por jugadores para jugadores, quienes dedicamos
											todos nuestros esfuerzos a impulsar a los gamers de categoría amateur y semiprofesional de los
											eSports. ¡Desafiate continuamente! <b>Totalmente gratis.</b> Compite por <b>puntos de gloria</b>, canjealos en <b>premios</b>,
											Invierte solamente tus mejores jugadas y estrategias.</p>
									</div>
									<!--PREMIOS-->
									<div class="col-xs-6">
										<span class="feature">
											<img src="<?php echo $urlFE; ?>/images/common/icon_gamepad.png" alt="feature">
											<span>Diversión Asegurada</span>
										</span>
										<span class="feature">
											<img src="<?php echo $urlFE; ?>/images/common/icon_free.png" alt="feature">
											<span>Puntos Gloria</span>
										</span>
									</div>
									<div class="col-xs-6">
										<span class="feature">
											<img src="<?php echo $urlFE; ?>/images/common/icon_trofy.png" alt="feature">
											<span>Premios Únicos</span>
										</span>
										<span class="feature">
											<img src="<?php echo $urlFE; ?>/images/common/icon_glory.png" alt="feature">
											<span>Totalmente Gratis</span>
										</span>
									</div>
								</div>
							</div>
							<!--BIENVENIDOS-->
							<div class="col-md-5 text-right">
								<span class="small-title">Bienvenidos a</span>
								<span class="big-title">VsArena</span>
								<p>Dedicados a impulsar el mercado amateur y semiprofesional de los eSports por medio de la organización de torneos.
									a través de nuestra plataforma de competición en donde gestionamos y organizamos torneos y eventos online para
									que los gamers se conviertan en leyendas al mejorar sus habilidades competitivas.
									En nuestros torneos, todos los jugadores tienen la oportunidad de hacerse un nombre (...)</p>
								<a href="<?php echo $amigable; ?>/nosotros">Nosotros</a>
							</div>
						</div>
					</div>
				</div>
				<!--TERCERA FILA START-->
				<!--PREMIOS INICIO-->
				<div class="amateurs-award-box">
					<div class="container">
						<div class="row">
							<!--PREMIO TITULO-->
							<div class="col-md-7">
								<div class="text">
									<div class="title">Conoce nuestros</div>
									<div class="big-title">Increibles premios</div>
									<p>Gana <b>premios</b> y <b>puntos de gloría</b> totalmente <b>gratis.</b><br>
									 Canjealos por magnificos <b>premios.</b></p>
									<a href="<?php echo $amigable; ?>/premios" class="btn">Premios</a>
								</div>
							</div>
							<div class="col-md-5">
								<div class="am-trophey">
									<div class="row">
										<!--PREMIO-->
										<div class="col-md-4 col-sm-4">
											<div class="item">
												<img src="<?php echo $urlFE; ?>/images/common/trophy_b1.png" alt="am-trophey">
												<div class="name">Trofeo</div>
												<div class="year">Primero</div>
											</div>
										</div>
										<!--PREMIO-->
										<div class="col-md-4 col-sm-4">
											<div class="item">
												<img src="<?php echo $urlFE; ?>/images/common/trophy_f1.png" alt="am-trophey">
												<div class="name">Trofeo</div>
												<div class="year">Tercero</div>
											</div>
										</div>
										<!--PREMIO-->
										<div class="col-md-4 col-sm-4">
											<div class="item">
												<img src="<?php echo $urlFE; ?>/images/common/trophy_b2.png" alt="am-trophey">
												<div class="name">Trofeo</div>
												<div class="year">Segundo</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--PREMIO FINAL-->
				<!--SLYDER INFO START-->
				<div id="twitter-slider" class="esport-team-landing-twitter-slider" data-ride="carousel">
					<!--INFO START-->
					<div class="owl-carousel owl-theme">
						<div class="item">
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<div class="wrap">
											<img src="<?php echo $urlFE; ?>/images/vs_arena/footer-logo.png" alt="logo_vsarena">
											<br>
											<div class="text">
												Compite <span style="color: #51fd51">Gratis.<span>	<br>
											</div>
											<br>
											<div class="copyright">VsArena</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<div class="wrap">
											<img src="<?php echo $urlFE; ?>/images/vs_arena/footer-logo.png" alt="logo_vsarena">
											<br>
											<div class="text">
												Gana <span style="color: #FFE16B">Gloria.<span>	<br>
											</div>
											<br>
											<div class="copyright">VsArena</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<div class="wrap">
											<img src="<?php echo $urlFE; ?>/images/vs_arena/footer-logo.png" alt="logo_vsarena">
											<br>
											<div class="text">
												Canjea <span style="color: #51fd51">Premios.<span>	<br>
											</div>
											<br>
											<div class="copyright">VsArena</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--INFO END-->
					<!--CONTROL LEFT-->
					<a class="nav-arrow left-arrow" href="#twitter-slider" role="button" data-slide="prev">
						<i class="fa fa-angle-left" aria-hidden="true"></i>
						<span class="sr-only"></span>
					</a>
					<!--CONTROL RIGTH-->
					<a class="nav-arrow right-arrow" href="#twitter-slider" role="button" data-slide="next">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
						<span class="sr-only"></span>
					</a>
				</div>
				<!--SLYDER INFO END-->
				<div id="news" class="esport-landing-big-section">
					<!--ESPORT TEAM LANDING NEWS BEGIN-->
					<div class="esport-team-landing-news">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<h5 class="esport-landing-header">Ultimas noticias</h5>
								</div>
							</div>
							<div class="row row-eq-height">
								<div class="col-md-4">
									<a href="#" class="news-wprapper">
										<img src="<?php echo $urlFE; ?>/images/common/esport-team-landing-news-big.jpg" alt="news-img">
										<div class="news-border">
											<span class="date">25 august</span>
											<span class="name">Internacional inertns</span>
										</div>
									</a>
								</div>
								<div class="col-md-8">
									<div class="row no-gutters row-eq-height">
										<div class="col-md-6">
											<a href="#" class="news-wprapper">
												<img src="<?php echo $urlFE; ?>/images/common/esport-team-landing-news-1.jpg" alt="news-img">
												<div class="news-border">
													<span class="date">25 august</span>
													<span class="name">Internacional inertns</span>
												</div>
											</a>
										</div>
										<div class="col-md-6">
											<a href="#" class="news-wprapper">
												<img src="<?php echo $urlFE; ?>/images/common/esport-team-landing-news-2.jpg" alt="news-img">
												<div class="news-border">
													<span class="date">25 august</span>
													<span class="name">Internacional inertns</span>
												</div>
											</a>
										</div>
									</div>
									<div class="row no-gutters row-eq-height">
										<div class="col-md-6">
											<a href="#" class="news-wprapper">
												<img src="<?php echo $urlFE; ?>/images/common/esport-team-landing-news-3.jpg" alt="news-img">
												<div class="news-border">
													<span class="date">25 august</span>
													<span class="name">Internacional inertns</span>
												</div>
											</a>
										</div>
										<div class="col-md-6">
											<a href="#" class="news-wprapper">
												<img src="<?php echo $urlFE; ?>/images/common/esport-team-landing-news-4.jpg" alt="news-img">
												<div class="news-border">
													<span class="date">25 august</span>
													<span class="name">Internacional inertns</span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--ESPORT TEAM LANDING NEWS BEGIN-->
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h5 class="esport-landing-header">Suscribete a las Noticias</h5>
							</div>
							<div class="col-md-12">
								<div class="esport-team-landing-subscribe">
									<form>
										<input type="text" name="text" placeholder="Escribe tu e-mail aqui">
										<button>Suscribir</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!--ESPORT TEAM LANDING STORE CONTAINER BEGIN-->
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h5 class="esport-landing-header">Tienda</h5>
							</div>
							<div class="col-md-12">
								<ul class="esport-team-landing-store-filter">
									<li class="active"><a data-toggle="tab" href="#new">Nuevo</a></li>
									<li><a data-toggle="tab" href="#hotdeals">Destacado</a></li>
									<li><a data-toggle="tab" href="#officialapparel">Tienda Oficial</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!--ESPORT TEAM LANDING STORE CONTAINER BEGIN-->
					<!--ESPORT TEAM LANDING STORE BEGIN-->
					<div class="esport-team-landing-store">
						<div class="container">
							<div class="tab-content">
								<div id="new" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-3 col-sm-6">
											<div class="esport-store-list-item">
												<div>
													<a href="#">
														<span class="store-badge hot">Destacado</span>
														<img src="<?php echo $urlFE; ?>/images/common/store-item-img.jpg" alt="product-image">
													</a>
													<div class="info">
														<span class="name">Lorem Lorem Lorem</span>
														<span class="price">£ 80</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-6">
											<div class="esport-store-list-item">
												<div>
													<a href="#">
														<span class="store-badge new">Nuevo</span>
														<img src="<?php echo $urlFE; ?>/images/common/store-item-img.jpg" alt="product-image">
													</a>
													<div class="info">
														<span class="name">Lorem lorem lorem</span>
														<span class="price">£ 155</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-6">
											<div class="esport-store-list-item">
												<div>
													<a href="#">
														<img src="<?php echo $urlFE; ?>/images/common/store-item-img.jpg" alt="product-image">
													</a>
													<div class="info">
														<span class="name">Lorem lorem lorem</span>
														<span class="price">£ 155</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-6">
											<div class="esport-store-list-item">
												<div>
													<a href="#">
														<img src="<?php echo $urlFE; ?>/images/common/store-item-img.jpg" alt="product-image">
													</a>
													<div class="info">
														<span class="name">Lorem lorem lorem</span>
														<span class="price">£ 155</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="hotdeals" class="tab-pane fade">
									<div class="row">
										<div class="col-md-3 col-sm-6">
											<div class="esport-store-list-item">
												<div>
													<a href="#">
														<span class="store-badge hot">Destacado</span>
														<img src="<?php echo $urlFE; ?>/images/common/store-item-img.jpg" alt="product-image">
													</a>
													<div class="info">
														<span class="name">Lorem Lorem Lorem</span>
														<span class="price">£ 80</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-6">
											<div class="esport-store-list-item">
												<div>
													<a href="#">
														<span class="store-badge new">Nuevo</span>
														<img src="<?php echo $urlFE; ?>/images/common/store-item-img.jpg" alt="product-image">
													</a>
													<div class="info">
														<span class="name">Lorem lorem lorem</span>
														<span class="price">£ 155</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-6">
											<div class="esport-store-list-item">
												<div>
													<a href="#">
														<img src="<?php echo $urlFE; ?>/images/common/store-item-img.jpg" alt="product-image">
													</a>
													<div class="info">
														<span class="name">Lorem lorem lorem</span>
														<span class="price">£ 155</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-6">
											<div class="esport-store-list-item">
												<div>
													<a href="#">
														<img src="<?php echo $urlFE; ?>/images/common/store-item-img.jpg" alt="product-image">
													</a>
													<div class="info">
														<span class="name">Lorem lorem lorem</span>
														<span class="price">£ 155</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="officialapparel" class="tab-pane fade">
									<div class="row">
										<div class="col-md-3 col-sm-6">
											<div class="esport-store-list-item">
												<div>
													<a href="#">
														<span class="store-badge hot">Destacado</span>
														<img src="<?php echo $urlFE; ?>/images/common/store-item-img.jpg" alt="product-image">
													</a>
													<div class="info">
														<span class="name">Lorem Lorem Lorem</span>
														<span class="price">£ 80</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-6">
											<div class="esport-store-list-item">
												<div>
													<a href="#">
														<span class="store-badge new">Nuevo</span>
														<img src="<?php echo $urlFE; ?>/images/common/store-item-img.jpg" alt="product-image">
													</a>
													<div class="info">
														<span class="name">Lorem lorem lorem</span>
														<span class="price">£ 155</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-6">
											<div class="esport-store-list-item">
												<div>
													<a href="#">
														<img src="<?php echo $urlFE; ?>/images/common/store-item-img.jpg" alt="product-image">
													</a>
													<div class="info">
														<span class="name">Lorem lorem lorem</span>
														<span class="price">£ 155</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-6">
											<div class="esport-store-list-item">
												<div>
													<a href="#">
														<img src="<?php echo $urlFE; ?>/images/common/store-item-img.jpg" alt="product-image">
													</a>
													<div class="info">
														<span class="name">Lorem lorem lorem</span>
														<span class="price">£ 155</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--ESPORT TEAM LANDING STORE END-->
				</div>
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