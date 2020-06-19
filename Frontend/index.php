<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>Inicio</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat%7COpen+Sans:700,400%7CRaleway:400,800,900" rel="stylesheet" />
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link href="css/style.min.css" rel="stylesheet" type="text/css" />
	</head>
	<body class="esport-black">
		<div class="preloader-wrapper" id="preloader">
			<div class="motion-line dark-big"></div>
			<div class="motion-line yellow-big"></div>
			<div class="motion-line dark-small"></div>
			<div class="motion-line yellow-normal"></div>
			<div class="motion-line yellow-small1"></div>
			<div class="motion-line yellow-small2"></div>
		</div>
		<?php
			include('estructura/barra_navegacion.php');
			
			?>
		<!--ESPORT TEAM LANDING MAIN SLIDER BEGIN-->
		<div id="home" class="esport-team-landing-main-slider">
			<div class="msp_post_slider" id="amateurs-slider">
				<div class="owl-carousel owl-theme" role="listbox">
					<div class="item msp_post_slide slide-1" >
						<div class="slider-caption">
							<div class="container">
								<div class="row">
									<div class="col-md-6 col-sm-8">
										<div class="sub-title">
											Tornament Gaming
										</div>
										<div class="big-title">
											VSARENA
										</div>
										<a href="/" class="btn">
										TORNEOS
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item msp_post_slide slide-2" >
						<div class="slider-caption">
							<div class="container">
								<div class="row">
									<div class="col-md-6 col-sm-8">
										<div class="sub-title">
											Tornament Gaming
										</div>
										<div class="big-title">
											Magnificas noticias
										</div>
										<a href="/" class="btn">
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
		<!--ESPORT TEAM LANDING MAIN SLIDER BEGIN-->
		<!--ESPORT TEAM LANDING SPONSORS BEGIN-->
		<div class="esport-team-landing-sponsors">
			<div class="container">
				<div class="row">
					<div class="col-md-3 sponsors">
						<span>Nuestros</span> 
						<span>Sponsors</span>
					</div>
					<div class="col-md-3 col-sm-4 text-center">
						<img src="images/common/sponsor-img.png" alt="sponsor-image">
					</div>
					<div class="col-md-3 col-sm-4  text-center">
						<img src="images/common/sponsor-img.png" alt="sponsor-image">
					</div>
					<div class="col-md-3 col-sm-4  text-center">
						<img src="images/common/sponsor-img.png" alt="sponsor-image">
					</div>
				</div>
			</div>
		</div>
		<!--ESPORT TEAM LANDING SPONSORS END-->
		<div id="matches" class="esport-landing-next-event-section">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h5 class="esport-landing-header">Proximo torneo</h5>
						<div class="esport-team-landing-next-event">
							<img src="images/common/esport-team-landing-next-event-logo.png" alt="next-event">
							<div class="name">
								Majestic Skull proyect
							</div>
							<div class="date">
								20-25 september
							</div>
						</div>
					</div>
					<div class="col-md-7">
						<h5 class="esport-landing-header">Ultimos enfrentamientos</h5>
						<!--ESPORT TEAM LANDING LATEST MATCHES BEGIN-->
						<div class="esport-team-landing-latest-matches">
							<a href="#">
								<img src="images/common/esport-champ-late-match.jpg" alt="background">
								<span>Cuartos de finales</span>
								<div>
									<div class="team left">
										<span>
										<img src="images/common/team-logo2.png" alt="team-logo">
										</span>
										<span class="team-name">internacional</span>
									</div>
									<div class="score">
										<span>3:2</span>
									</div>
									<div class="team right">
										<span class="image">
										<img src="images/common/team-logo2.png" alt="team-logo">
										</span>
										<span class="team-name">internacional</span>
									</div>
								</div>
								<span>full time</span>
							</a>
							<a href="#">
								<img src="images/common/esport-champ-late-match.jpg" alt="background">
								<span>Cuartos de finales</span>
								<div>
									<div class="team left">
										<span>
										<img src="images/common/team-logo2.png" alt="team-logo">
										</span>
										<span class="team-name">internacional</span>
									</div>
									<div class="score">
										<span>3:2</span>
									</div>
									<div class="team right">
										<span class="image">
										<img src="images/common/team-logo2.png" alt="team-logo">
										</span>
										<span class="team-name">internacional</span>
									</div>
								</div>
								<span>full time</span>
							</a>
						</div>
						<!--ESPORT TEAM LANDING LATEST MATCHES END-->
					</div>
				</div>
			</div>
		</div>
		<div id="team" class="esport-team-landing-players-sllider-section">
			<!--ESPORT CHAMPIONSHIP PLAYERS BEGIN-->
			<div class="esport-team-landing-players">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h5 class="esport-landing-header">Equipos</h5>
							<ul class="esport-players">
								<li class="active">
									<a data-toggle="tab" href="#panters">T1</a>
								</li>
								<li>
									<a data-toggle="tab" href="#bears">Giants</a>
								</li>
								<li>
									<a data-toggle="tab" href="#horses">Fnatic</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="tab-content">
						<div id="panters" class="tab-pane fade in active">
							<div class="wrap">
								<div class="width players-wrapper">
									<a href="#" data-id="0">
									<img class="player-img" alt="player-img" src="images/common/esport-players.jpg">
									<span class="name">
									Robert Fitzgerald
									</span>
									<span class="info-bord">
									<span class="name">Robert Fitzgerald</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									</span>
									</a>
									<a href="#" data-id="0">
									<img class="player-img" alt="player-img" src="images/common/esport-players.jpg">
									<span class="name">
									Robert Fitzgerald
									</span>
									<span class="info-bord">
									<span class="name">Robert Fitzgerald</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									</span>
									</a>
									<a href="#" data-id="0">
									<img class="player-img" alt="player-img" src="images/common/esport-players.jpg">
									<span class="name">
									Robert Fitzgerald
									</span>
									<span class="info-bord">
									<span class="name">Robert Fitzgerald</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									</span>
									</a>
									<a href="#" data-id="0">
									<img class="player-img" alt="player-img" src="images/common/esport-players.jpg">
									<span class="name">
									Robert Fitzgerald
									</span>
									<span class="info-bord">
									<span class="name">Robert Fitzgerald</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									</span>
									</a>    
									<a href="#" data-id="0">
									<img class="player-img" alt="player-img" src="images/common/esport-players.jpg">
									<span class="name">
									Robert Fitzgerald
									</span>
									<span class="info-bord">
									<span class="name">Robert Fitzgerald</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									</span>
									</a>     
								</div>
							</div>
						</div>
						<div id="bears" class="tab-pane fade">
							<div class="wrap">
								<div class="width players-wrapper">
									<a href="#" data-id="0">
									<img class="player-img" alt="player-img" src="images/common/esport-players.jpg">
									<span class="name">
									Robert Fitzgerald
									</span>
									<span class="info-bord">
									<span class="name">Robert Fitzgerald</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									</span>
									</a>
									<a href="#" data-id="0">
									<img class="player-img" alt="player-img" src="images/common/esport-players.jpg">
									<span class="name">
									Robert Fitzgerald
									</span>
									<span class="info-bord">
									<span class="name">Robert Fitzgerald</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									</span>
									</a>
									<a href="#" data-id="0">
									<img class="player-img" alt="player-img" src="images/common/esport-players.jpg">
									<span class="name">
									Robert Fitzgerald
									</span>
									<span class="info-bord">
									<span class="name">Robert Fitzgerald</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									</span>
									</a>
									<a href="#" data-id="0">
									<img class="player-img" alt="player-img" src="images/common/esport-players.jpg">
									<span class="name">
									Robert Fitzgerald
									</span>
									<span class="info-bord">
									<span class="name">Robert Fitzgerald</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									</span>
									</a>    
									<a href="#" data-id="0">
									<img class="player-img" alt="player-img" src="images/common/esport-players.jpg">
									<span class="name">
									Robert Fitzgerald
									</span>
									<span class="info-bord">
									<span class="name">Robert Fitzgerald</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									</span>
									</a>     
								</div>
							</div>
						</div>
						<div id="horses" class="tab-pane fade">
							<div class="wrap">
								<div class="width players-wrapper">
									<a href="#" data-id="0">
									<img class="player-img" alt="player-img" src="images/common/esport-players.jpg">
									<span class="name">
									Robert Fitzgerald
									</span>
									<span class="info-bord">
									<span class="name">Robert Fitzgerald</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									</span>
									</a>
									<a href="#" data-id="0">
									<img class="player-img" alt="player-img" src="images/common/esport-players.jpg">
									<span class="name">
									Robert Fitzgerald
									</span>
									<span class="info-bord">
									<span class="name">Robert Fitzgerald</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									</span>
									</a>
									<a href="#" data-id="0">
									<img class="player-img" alt="player-img" src="images/common/esport-players.jpg">
									<span class="name">
									Robert Fitzgerald
									</span>
									<span class="info-bord">
									<span class="name">Robert Fitzgerald</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									</span>
									</a>
									<a href="#" data-id="0">
									<img class="player-img" alt="player-img" src="images/common/esport-players.jpg">
									<span class="name">
									Robert Fitzgerald
									</span>
									<span class="info-bord">
									<span class="name">Robert Fitzgerald</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									</span>
									</a>    
									<a href="#" data-id="0">
									<img class="player-img" alt="player-img" src="images/common/esport-players.jpg">
									<span class="name">
									Robert Fitzgerald
									</span>
									<span class="info-bord">
									<span class="name">Robert Fitzgerald</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									<span class="progress-item">
									<span class="progress-line">
									<span class="bar"></span>
									</span>
									<span class="bar-label">
									<span class="achievement">played</span>
									<span class="score">23</span>
									</span>
									</span>
									</span>
									</a>     
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--ESPORT CHAMPIONSHIP PLAYERS END-->
		</div>
		<div id="about" class="esport-team-landing-about">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<div class="row">
							<div class="col-md-12">
								<span>Nosotros</span>
								<p>Pabst irony tattooed, synth sriracha selvage pok pok. Wayfarers kinfolk sartorial, helvetica you probably haven't heard of them tumeric venmo deep v mixtape semiotics brunch. </p>
							</div>
							<div class="col-xs-6">
								<span class="feature">
								<img src="images/common/esport-team-lp-feature-ico.png" alt="feature">
								<span>Diversion</span>
								</span>
								<span class="feature">
								<img src="images/common/esport-team-lp-feature-ico.png" alt="feature">
								<span>Jugabilidad</span>
								</span>
							</div>
							<div class="col-xs-6">
								<span class="feature">
								<img src="images/common/esport-team-lp-feature-ico.png" alt="feature">
								<span>Premios</span>
								</span>
								<span class="feature">
								<img src="images/common/esport-team-lp-feature-ico.png" alt="feature">
								<span>Aventura</span>
								</span>
							</div>
						</div>
					</div>
					<div class="col-md-5 text-right">
						<span class="small-title">Bienvenidos a</span>
						<span class="big-title">vsarena</span>
						<p>Hella pop-up flexitarian, semiotics migas humblebrag schlitz literally tofu deep v thundercats skateboard viral cornhole.</p>
						<a href="#">Torneos</a>
					</div>
				</div>
			</div>
		</div>
		<!-- PREMIOS INICIO -->
		<div class="amateurs-award-box">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="text">
							<div class="title">Visita nuestros</div>
							<div class="big-title">Magnificos premios</div>
							<p>Snackwave tote bag fixie gluten-free, affogato master cleane cronut portland prism knausgaard.  Chartreuse fingerstache gentrify you probably</p>
							<a href="trophies.html" class="btn">Detalles</a>
						</div>
					</div>
					<div class="col-md-7">
						<div class="am-trophey">
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<div class="item">
										<img src="images/common/am-trophey.png" alt="am-trophey">
										<div class="name">National cup</div>
										<div class="year">2010</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="item">
										<img src="images/common/am-trophey1.png" alt="am-trophey">
										<div class="name">Championship trophy</div>
										<div class="year">2012</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="item">
										<img src="images/common/am-trophey2.png" alt="am-trophey">
										<div class="name">Super cup</div>
										<div class="year">2017</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- PREMIO FINAL -->
		<!--ESPORT TEAN LANDING TWITTER SLIDER BEGIN-->
		<div id="twitter-slider" class="esport-team-landing-twitter-slider"  data-ride="carousel">
			<!--<div class="wrapper-width">-->
			<div class="owl-carousel owl-theme">
				<div class="item">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="wrap">
									<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
									<div class="text">
										Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga quaerat excepturi debitis, dolore fugit perspiciatis qui ipsa praesentium provident sint, quidem reprehenderit possimus est ad assumenda voluptates, exercitationem odio adipisci.
									</div>
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
									<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
									<div class="text">
										Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio cumque vero dicta! Facere quam harum ratione error aspernatur quisquam iusto cupiditate praesentium omnis pariatur, non voluptates autem ut, laborum molestiae?
									</div>
									<div class="copyright">VsArena</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--</div>-->
			<!-- Controls -->
			<a class="nav-arrow left-arrow" href="#twitter-slider" role="button" data-slide="prev">
			<i class="fa fa-angle-left" aria-hidden="true"></i>
			<span class="sr-only"></span>
			</a>
			<a class="nav-arrow right-arrow" href="#twitter-slider" role="button" data-slide="next">
			<i class="fa fa-angle-right" aria-hidden="true"></i>
			<span class="sr-only"></span>
			</a>
		</div>
		<!--ESPORT TEAN LANDING TWITTER SLIDER END-->
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
							<a href ="#" class="news-wprapper">
								<img src="images/common/esport-team-landing-news-big.jpg" alt="news-img">
								<div class="news-border">
									<span class="date">25 august</span>
									<span class="name">Internacional inertns</span>
								</div>
							</a>
						</div>
						<div class="col-md-8">
							<div class="row no-gutters row-eq-height">
								<div class="col-md-6">
									<a href ="#" class="news-wprapper">
										<img src="images/common/esport-team-landing-news-1.jpg" alt="news-img">
										<div class="news-border">
											<span class="date">25 august</span>
											<span class="name">Internacional inertns</span>
										</div>
									</a>
								</div>
								<div class="col-md-6">
									<a href ="#" class="news-wprapper">
										<img src="images/common/esport-team-landing-news-2.jpg" alt="news-img">
										<div class="news-border">
											<span class="date">25 august</span>
											<span class="name">Internacional inertns</span>
										</div>
									</a>
								</div>
							</div>
							<div class="row no-gutters row-eq-height">
								<div class="col-md-6">
									<a href ="#" class="news-wprapper">
										<img src="images/common/esport-team-landing-news-3.jpg" alt="news-img">
										<div class="news-border">
											<span class="date">25 august</span>
											<span class="name">Internacional inertns</span>
										</div>
									</a>
								</div>
								<div class="col-md-6">
									<a href ="#" class="news-wprapper">
										<img src="images/common/esport-team-landing-news-4.jpg" alt="news-img">
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
											<img src="images/common/store-item-img.jpg" alt="product-image">
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
											<img src="images/common/store-item-img.jpg" alt="product-image">
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
											<img src="images/common/store-item-img.jpg" alt="product-image">
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
											<img src="images/common/store-item-img.jpg" alt="product-image">
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
											<img src="images/common/store-item-img.jpg" alt="product-image">
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
											<img src="images/common/store-item-img.jpg" alt="product-image">
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
											<img src="images/common/store-item-img.jpg" alt="product-image">
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
											<img src="images/common/store-item-img.jpg" alt="product-image">
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
											<img src="images/common/store-item-img.jpg" alt="product-image">
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
											<img src="images/common/store-item-img.jpg" alt="product-image">
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
											<img src="images/common/store-item-img.jpg" alt="product-image">
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
											<img src="images/common/store-item-img.jpg" alt="product-image">
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