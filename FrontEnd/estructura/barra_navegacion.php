<?php
echo ("<!--NAV START-->
<div class='main-menu-wrap sticky-menu'>
	<div class='container nav_index'>
		<a href='$amigable/' class='custom-logo-link'><img src='$urlFE/images/vs_arena/ilogo.png' alt='logo' class='custom-logo'></a>
		<!--START BOTON MOBILE-->
		<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#team-menu' aria-expanded='false'>
		<span class='sr-only'>Navegación</span>
		<span class='icon-bar'></span>
		<span class='icon-bar'></span>
		<span class='icon-bar'></span>
		</button>
		<!--END BOTON MOBILE-->
		<nav class='navbar'>
			<div class='collapse navbar-collapse' id='team-menu'>
				<ul class='main-menu nav'>
					<li>
						<a href='$amigable/torneos'><span>Torneos2</span></a>
					</li>
					<li>
						<a href='$amigable/tienda'><span>Tienda</span></a>
					</li>
					<li>
						<a href='$amigable/noticias'><span>Noticias</span></a>
					</li>
					<li>
						<a href='$amigable/noticias><span>Noticias</span></a>
							</li>
							<li class='login'>
						<a href='#'><span><i class='fa fa-user' aria-hidden='true'></i></span></a>
					</li>
					<li>
						<a href='$amigable/registro'><span>Regístrate</span></a>
					</li>
					<li>
						<a href='$amigable/buscar'><span>BUSQUEDA</span></a>
					</li>
					<!-- SUBMENUES 
						<li>
						    <a href='#other'><span>Submenues</span></a>
						    <ul>
						        <li><a href='#'><span>lorem</span></a></li>
						        <li><a href='#'><span>lorem</span></a></li>
						        <li><a href='#'><span>lorem</span></a></li>
						        <li><a href='#'><span>lorem</span></a></li>
						        <li><a href='#'><span>lorem</span></a></li>
						        <li><a href='#'><span>lorem</span></a></li>
						        <li><a href='#'><span>lorem</span></a></li>
						        <li><a href='#'><span>lorem</span></a></li>
						    </ul>
						</li>-->
					<li class='cart full'>
						<a href='#cart'>
						<span><i class='fa fa-shopping-cart' aria-hidden='true'></i></span>
						</a>
						<div class='cart-drop'>
							<table class='ct'>
								<tr>
									<td class='delete'><a href='#'><i class='fa fa-close' aria-hidden='true'></i></a></td>
									<td class='info'>
										<img class='product-image' src='$urlFE/images/common/cart-product.jpg' alt='product-image'>
										<em>lorem lorem lorem<br><em class='price'>1 x $ 600</em></em>
									</td>
								</tr>
								<tr>
									<td class='delete'><a href='#'><i class='fa fa-close' aria-hidden='true'></i></a></td>
									<td class='info'>
										<img class='product-image' src='$urlFE/images/common/cart-product.jpg' alt='product-image'>
										<em>lorem lorem lorem<br><em class='price'>1 x $ 900</em></em>
									</td>
								</tr>
							</table>
							<div class='wrap'>
								<div class='total-text'>Subtotal: </div>
								<div class='total-digit'>$ 120</div>
							</div>
							<div class='wrap btn-wrap'>
								<a href='$amigable/carrito' class='btn view'>Ver Carrito</a>
								<a href='#' class='btn check'>Vaciar Carrito</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</div>
<!--NAV END-->");
