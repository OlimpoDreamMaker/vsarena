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
	<title>Mi Perfil</title>
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
								<li>Mi Perfil</li>
							</ul>
							<h1>Mi Perfil</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--CATEGORIA END-->

	<!--PLAYER WRAP START-->
	<section class="player-single-wrap">
		<div class="container">
			<div class="row">

				<!--NOMBRE PERFIL-->
				<div class="col-md-12">
					<div class="captain-bage">Capitan</div>
					<h4 class="player-name">Sniki Mid Laner</h4>
				</div>

				<!--FOTO PERFIL-->
				<div class="col-md-6">
					<div class="player-photo">
						<div class="number">1</div>
						<img class="img-responsive" src="images/vs_arena/single-player-photo.jpg" alt="player">
					</div>
				</div>

				<!--PLAYER INFO START-->
				<div class="col-md-6">
					<div class="player-info">

						<!--DATOS-->
						<h6 class="player-info-title">Mis datos</h6>
						<div class="summary">
							<div class="row">
								<div class="col-md-3 col-sm-3 col-xs-3">
									<div class="item">Usuario:</div>
								</div>
								<div class="col-md-9 col-sm-9 col-xs-9">Sniki</div>
								<div class="col-md-3 col-sm-3 col-xs-3">
									<div class="item">Posicion:</div>
								</div>
								<div class="col-md-9 col-sm-9 col-xs-9">Mid laner</div>
							</div>
						</div>

						<!--HISTORIAL-->
						<h6>Historial de equipos</h6>
						<div class="overflow-scroll">
							<table>
								<tr>
									<th class="club">Equipos</th>
									<th>Juegos</th>
									<th>Asesinatos totales</th>
								</tr>
								<tr>
									<td class="club"><img src="images/vs_arena/team-logo1.png" width="30" height="30" alt="trophy"> Internacional</td>
									<td>27</td>
									<td><span>10</span></td>
								</tr>
								<tr>
									<td class="club"><img src="images/vs_arena/team-logo2.png" width="30" height="30" alt="trophy"> Internacional</td>
									<td>27</td>
									<td><span>10</span></td>
								</tr>
							</table>
						</div>

						<!--PERFIL DESCRIPCION-->
						<h6>Sobre mi</h6>
						<p>Pabst irony tattooed, synth sriracha selvage pok pok. Wayfarers kinfolk sartorial, helvetica you </p>

						<!--SECCION PREMIOS-->
						<h6>Premios</h6>
						<ul class="player-trophey">
							<li>
								<img src="images/common/am-trophey1.png" width="100" height="150" alt="trophy">
								<div class="year">2012</div>
							</li>
							<li>
								<img src="images/common/am-trophey.png" width="100" height="150" alt="trophy">
								<div class="year">2015</div>
							</li>
							<li>
								<img src="images/common/am-trophey2.png" width="100" height="150" alt="trophy">
								<div class="year">2017</div>
							</li>
						</ul>

					</div>
				</div>
				<!--PLAYER INFO END-->

				<!--PLAYER BATTLE START-->
				<div class="col-md-12">

					<div class="col-md-12 overflow-scroll">
						<h6>Ultimos 5 partidos</h6>
						<table>
							<tr>
								<th>competitor</th>
								<th>gp</th>
								<th>gs</th>
								<th>min</th>
								<th>fgm-a</th>
								<th>fg%</th>
								<th>3pm-a</th>
								<th>3p%</th>
								<th>om</th>
								<th>or</th>
								<th>to</th>
								<th>pts</th>
							</tr>
							<tr>
								<td>
									<a href="matches.html">
										<span class="team">
											<img src="images/common/team-logo1.png" width="30" height="30" alt="main-match-icon">
										</span>
										<span>Team 1</span>
									</a>
								</td>
								<td>2</td>
								<td>55</td>
								<td>62</td>
								<td>5</td>
								<td>0</td>
								<td>8</td>
								<td>89</td>
								<td>7</td>
								<td>2</td>
								<td>2</td>
								<td><span>12</span></td>
							</tr>
							<tr>
								<td>
									<a href="matches.html">
										<span class="team">
											<img src="images/common/team-logo2.png" width="30" height="30" alt="main-match-icon">
										</span>
										<span>Team 2</span>
									</a>
								</td>
								<td>2</td>
								<td>55</td>
								<td>62</td>
								<td>5</td>
								<td>0</td>
								<td>8</td>
								<td>89</td>
								<td>7</td>
								<td>2</td>
								<td>2</td>
								<td><span>12</span></td>
							</tr>
							<tr>
								<td>
									<a href="matches.html">
										<span class="team">
											<img src="images/common/team-logo3.png" width="30" height="30" alt="main-match-icon">
										</span>
										<span>Team 3</span>
									</a>
								</td>
								<td>2</td>
								<td>55</td>
								<td>62</td>
								<td>5</td>
								<td>0</td>
								<td>8</td>
								<td>89</td>
								<td>7</td>
								<td>2</td>
								<td>2</td>
								<td><span>12</span></td>
							</tr>
							<tr>
								<td>
									<a href="matches.html">
										<span class="team">
											<img src="images/common/team-logo4.png" width="30" height="30" alt="main-match-icon">
										</span>
										<span>Team 4</span>
									</a>
								</td>
								<td>2</td>
								<td>55</td>
								<td>62</td>
								<td>5</td>
								<td>0</td>
								<td>8</td>
								<td>89</td>
								<td>7</td>
								<td>2</td>
								<td>2</td>
								<td><span>12</span></td>
							</tr>
						</table>
					</div>
				</div>
				<!--PLAYER BATTLE END-->

			</div>
		</div>
	</section>
	<!--PLAYER CONTENEDOR END-->

	<!--PLAYER SECCION FOOTER BEGIN-->
	<section class="main-club-stuff">

		<!--PLAYER EQUIPOS START-->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h4 class="soccer-h4">Equipos</h4>
					<ul class="player-filters" role="tablist">
						<li class="active">
							<a href="#managers" role="tab" data-toggle="tab">
								True Damage
							</a>
						</li>
						<li>
							<a href="#firstteam" role="tab" data-toggle="tab">
								True Color
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--PLAYER EQUIPOS END-->

		<!--PLAYER EQUIPOS START-->
		<div class="tab-content">
			<div class="tab-pane active" id="managers" role="tabpanel">
				<div id="managers_carousel" class="carousel slide main-stuff-slider" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="container">
								<div class="row">
									<div class="col-md-4">
										<div class="staff-item">
											<a href="staff.html">
												<span class="info">
													<span class="name">Lucas<br>Marshman</span>
													<span class="position">Left Forward</span>
													<span class="number">14</span>
												</span>
												<img src="images/vs_arena/stuff-person.jpg" alt="person-slider">
											</a>
										</div>
									</div>
									<div class="col-md-4">
										<div class="staff-item">
											<a href="staff.html">
												<span class="info">
													<span class="name">Lucas<br>Marshman</span>
													<span class="position">Left Midfielder</span>
													<span class="number">8</span>
												</span>
												<img src="images/vs_arena/player-2.jpg" alt="person-slider">
											</a>
										</div>
									</div>
									<div class="col-md-4 ">
										<div class="staff-item">
											<a href="staff.html">
												<span class="info">
													<span class="name">Lucas<br>Marshman</span>
													<span class="position">Central Attacking Midfielder</span>
													<span class="number">7</span>
												</span>
												<img src="images/vs_arena/player-3.jpg" alt="person-slider">
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="container">
								<div class="row">
									<div class="col-md-4">
										<div class="staff-item">
											<a href="staff.html">
												<span class="info">
													<span class="name">Lucas<br>Marshman</span>
													<span class="position">Left Forward</span>
													<span class="number">14</span>
												</span>
												<img src="images/vs_arena/player-3.jpg" alt="person-slider">
											</a>
										</div>
									</div>
									<div class="col-md-4">
										<div class="staff-item">
											<a href="staff.html">
												<span class="info">
													<span class="name">Lucas<br>Marshman</span>
													<span class="position">Left Midfielder</span>
													<span class="number">8</span>
												</span>
												<img src="images/vs_arena/player-2.jpg" alt="person-slider">
											</a>
										</div>
									</div>
									<div class="col-md-4 ">
										<div class="staff-item">
											<a href="staff.html">
												<span class="info">
													<span class="name">Lucas<br>Marshman</span>
													<span class="position">Central Attacking Midfielder</span>
													<span class="number">7</span>
												</span>
												<img src="images/vs_arena/stuff-person.jpg" alt="person-slider">
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Controls -->
						<a class="nav-arrow left-arrow" href="#managers_carousel" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only"></span>
						</a>
						<a class="nav-arrow right-arrow" href="#managers_carousel" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only"></span>
						</a>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="firstteam" role="tabpanel">
				<div id="firstteam_carousel" class="carousel slide main-stuff-slider" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="container">
								<div class="row">
									<div class="col-md-4">
										<div class="staff-item">
											<a href="staff.html">
												<span class="info">
													<span class="name">James<br>Deshon</span>
													<span class="position">Left Forward</span>
													<span class="number">14</span>
												</span>
												<img src="images/vs_arena/stuff-person.jpg" alt="person-slider">
											</a>
										</div>
									</div>
									<div class="col-md-4">
										<div class="staff-item">
											<a href="staff.html">
												<span class="info">
													<span class="name">Deshon<br>James</span>
													<span class="position">Left Midfielder</span>
													<span class="number">8</span>
												</span>
												<img src="images/vs_arena/stuff-person.jpg" alt="person-slider">
											</a>
										</div>
									</div>
									<div class="col-md-4 ">
										<div class="staff-item">
											<a href="staff.html">
												<span class="info">
													<span class="name">James<br>Deshon</span>
													<span class="position">Central Attacking Midfielder</span>
													<span class="number">7</span>
												</span>
												<img src="images/vs_arena/player-3.jpg" alt="person-slider">
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="container">
								<div class="row">
									<div class="col-md-4">
										<div class="staff-item">
											<a href="staff.html">
												<span class="info">
													<span class="name">Lucas<br>Marsh</span>
													<span class="position">Left Forward</span>
													<span class="number">14</span>
												</span>
												<img src="images/vs_arena/player-3.jpg" alt="person-slider">
											</a>
										</div>
									</div>
									<div class="col-md-4">
										<div class="staff-item">
											<a href="staff.html">
												<span class="info">
													<span class="name">Luca<br>Mas</span>
													<span class="position">Left Midfielder</span>
													<span class="number">8</span>
												</span>
												<img src="images/vs_arena/player-2.jpg" alt="person-slider">
											</a>
										</div>
									</div>
									<div class="col-md-4 ">
										<div class="staff-item">
											<a href="staff.html">
												<span class="info">
													<span class="name">Lucasoto<br>Marsh</span>
													<span class="position">Central Attacking Midfielder</span>
													<span class="number">7</span>
												</span>
												<img src="images/vs_arena/stuff-person.jpg" alt="person-slider">
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Controls -->
						<a class="nav-arrow left-arrow" href="#firstteam_carousel" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only"></span>
						</a>
						<a class="nav-arrow right-arrow" href="#firstteam_carousel" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only"></span>
						</a>
					</div>
				</div>
			</div>
		</div>

	</section>
	<!--PLAYER SECCION FOOTER END-->

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