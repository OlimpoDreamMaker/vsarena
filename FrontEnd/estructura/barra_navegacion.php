<?php
echo ("<!--NAV START-->
<div class='main-menu-wrap sticky-menu'>
	<div class='nav_index'>
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
					<span class='margen-izquierdo'>	</span>
					<li>
						<a href='$amigable/torneos'><span>Torneos</span></a>
					</li>
					<li>
						<a href='$amigable/tienda'><span>Tienda</span></a>
					</li>
					<li>
						<a href='$amigable/noticias'><span>Noticias</span></a>
					</li>
					<li class='search'>
							<a href='$amigable/buscar'><i class='fa fa-search' aria-hidden='true'></i></a>
                    </li>
					<li>
						<a href='$amigable/login'><span>LOGIN</span></a>
					</li>				
					<li>
						<a href='$amigable/registro'><span>REGÍSTRATE</span></a>
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
						</li> 
					-->
					<li class='cart full'>
						<a href='#cart'>
							<span><i class='fa fa-shopping-cart' aria-hidden='true'></i></span>
						</a>
						<div class='cart-drop'>
							<table class='ct' id='carrito-box'>
								<script>
									fetch('$urlBE/agregarCarrito.php', {
                                    method: 'GET',
                                    headers: {
                                        'Accept': 'application/json'
                                    }
                                }).then(async (response) => {
									if (await response.ok) {
                                        response.json().then(function(json) {
                                            var html = '';
                                            var precio = 0;
                                            json.forEach(producto => {
                                                precio += parseFloat(producto.precioEfectivo) * producto.cantidad;
                                                console.log(producto);
                                                html += `<tr>
									<td class='delete'><a idProducto='` + producto.idProducto + `' onclick='borrarProducto(this)'><i class='fa fa-close' aria-hidden='true'></i></a></td>
									<td class='info'>
										<img class='product-image' src='$imagenes/imgProductos/` + producto.imgProducto + `' alt='product-image'>
										<em>` + producto.producto + `<br><em class='price'>` + producto.cantidad + ` x $ ` + producto.precioEfectivo + `</em></em>
									</td>
								</tr>`;
                                            });
                                            document.getElementById('carrito-box').innerHTML = html;
                                            document.getElementById('carrito-box-subtotal').innerHTML = `<div class='total-text'>Subtotal: </div>
								<div class='total-digit'>$ ` + precio.toFixed(2) + `</div>`;
                                        });
                                    }
                                });
								</script>
							</table>
							<div class='wrap' id='carrito-box-subtotal'>
								<div class='total-text'>Subtotal: </div>
								<div class='total-digit'>$ 0</div>
							</div>
							<div class='wrap btn-wrap'>
								<a href='$amigable/carrito' class='btn view'>Ver Carrito</a>
								<a onclick='vaciarCarrito()' class='btn check'>Vaciar Carrito</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</div>
<!--NAV END-->");
