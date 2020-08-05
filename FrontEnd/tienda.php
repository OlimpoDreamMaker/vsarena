<?php
require_once("../BackEnd/config.php");
require_once("../BackEnd/funciones.php");
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
    <title>Tienda</title>
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
                                <li><a href="<?php echo $amigable; ?>/">Inicio</a>/</li>
                                <li>Tienda</li>
                            </ul>
                            <h1>Tienda</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CATEGORIA END-->
    <!--TIENDA CUERPO START-->
    <div class="store-wrap">
        <!--CONTAINER START-->
        <div class="container">
            <!--ROW START-->
            <div class="row row-offcanvas row-offcanvas-left">
                <!--LEFT SIDEBAR START-->
                <div class="sidebar col-xs-6 col-sm-6 col-md-3 sidebar-offcanvas" id="sidebar">
                    <!--CATEGORIA START-->
                    <div class="sidebar-menu-wrap">
                        <h6>Categoria</h6>
                        <ul class="categories-list">
                            <li>
                                <a href="#"><span class="count">4</span>Nuevos</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="count">22</span>Lorem lorem</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><span class="count">12</span>Lorem lorem</a></li>
                                    <li><a href="#"><span class="count">10</span>Lorem lorem</a></li>
                                    <li><a href="#"><span class="count">9</span>Lorem lorem</a></li>
                                    <li><a href="#"><span class="count">8</span>Lorem lorem</a></li>
                                    <li><a href="#"><span class="count">7</span>Lorem lorem</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="count">4</span>Lorem lorem</a>
                            </li>
                            <li>
                                <a href="#"><span class="count">4</span>Lorem lorem</a>
                            </li>
                            <li>
                                <a href="#"><span class="count">4</span>Lorem lorem</a>
                            </li>
                        </ul>
                    </div>
                    <!--CATEGORIA END-->
                    <!--FILTROS START-->
                    <div class="filter-wrap">
                        <h6>Filtros</h6>
                        <div class="filter-items-wrap">
                            <!--JUEGOS START-->
                            <div class="filter-title">Juego</div>
                            <div class="filter-item">
                                <ul>
                                    <li>
                                        <input type="checkbox" class="filter-check" id="test1">
                                        <label for="test1">Lorem</label>
                                    </li>
                                    <li>
                                        <input checked="" type="checkbox" class="filter-check" id="test2">
                                        <label for="test2">Lorem</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="filter-check" id="test3">
                                        <label for="test3">Lorem</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="filter-check" id="test4">
                                        <label for="test4">Lorem</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="filter-check" id="test5">
                                        <label for="test5">Lorem</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="filter-check" id="test6">
                                        <label for="test6">Lorem</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="filter-check" id="test7">
                                        <label for="test7">Lorem</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="filter-check" id="test8">
                                        <label for="test8">Lorem</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="filter-check" id="test9">
                                        <label for="test9">Lorem</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="filter-check" id="test10">
                                        <label for="test10">Lorem</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="filter-check" id="test11">
                                        <label for="test11">Lorem Lorem</label>
                                    </li>
                                </ul>
                            </div>
                            <!--JUEGOS END-->
                            <!--MARCA START-->
                            <div class="filter-title">Marca</div>
                            <div class="filter-item">
                                <ul>
                                    <li>
                                        <input type="checkbox" class="filter-check" id="test12">
                                        <label for="test12">Lorem</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="filter-check" id="test13">
                                        <label for="test13">Lorem</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="filter-check" id="test14">
                                        <label for="test14">Lorem</label>
                                    </li>
                                </ul>
                            </div>
                            <!--MARCA END-->
                            <!--MARCA START-->
                            <div class="filter-title">Marca</div>
                            <div class="filter-item">
                                <ul>
                                    <li>
                                        <input type="checkbox" class="filter-check" id="test15">
                                        <label for="test15">Lorem</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="filter-check" id="test16">
                                        <label for="test16">Lorem</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="filter-check" id="test17">
                                        <label for="test17">Lorem</label>
                                    </li>
                                </ul>
                            </div>
                            <!--MARCA END-->
                            <!--COLORES START-->
                            <div class="filter-title">Colores</div>
                            <div class="color-filter-item">
                                <ul>
                                    <li>
                                        <label class="color-check green">
                                            <input type="checkbox">
                                            <span class="check"><i class="fa fa-check" aria-hidden="true"></i></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="color-check black">
                                            <input type="checkbox">
                                            <span class="check"><i class="fa fa-check" aria-hidden="true"></i></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="color-check purple">
                                            <input type="checkbox">
                                            <span class="check"><i class="fa fa-check" aria-hidden="true"></i></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="color-check gray">
                                            <input type="checkbox">
                                            <span class="check"><i class="fa fa-check" aria-hidden="true"></i></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="color-check red">
                                            <input type="checkbox">
                                            <span class="check"><i class="fa fa-check" aria-hidden="true"></i></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="color-check green">
                                            <input type="checkbox">
                                            <span class="check"><i class="fa fa-check" aria-hidden="true"></i></span>
                                        </label>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <label class="color-check black">
                                            <input type="checkbox">
                                            <span class="check"><i class="fa fa-check" aria-hidden="true"></i></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="color-check purple">
                                            <input type="checkbox">
                                            <span class="check"><i class="fa fa-check" aria-hidden="true"></i></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="color-check gray">
                                            <input type="checkbox">
                                            <span class="check"><i class="fa fa-check" aria-hidden="true"></i></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="color-check white">
                                            <input type="checkbox">
                                            <span class="check"><i class="fa fa-check" aria-hidden="true"></i></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <!--COLORES END-->
                            <!--TAMAÑO START-->
                            <div class="filter-title">Tamaño</div>
                            <div class="size-filter-item">
                                <ul>
                                    <li>
                                        <label class="size-check">
                                            <input type="checkbox">
                                            <span class="size">xs</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="size-check">
                                            <input type="checkbox">
                                            <span class="size">s</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="size-check">
                                            <input type="checkbox">
                                            <span class="size">m</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="size-check">
                                            <input type="checkbox">
                                            <span class="size">l</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="size-check">
                                            <input type="checkbox">
                                            <span class="size">xl</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="size-check">
                                            <input type="checkbox">
                                            <span class="size">xxl</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="size-check">
                                            <input type="checkbox">
                                            <span class="size">xxxl</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <!--TAMAÑO END-->
                        </div>
                    </div>
                    <!--FILTROS END-->
                </div>
                <!--LEFT SIDEBAR END-->
                <!--CANJEAR START-->
                <div class="col-xs-12 col-sm-12 col-md-9">
                    <!--BOTON MOBILE START-->
                    <p class="hidden-md hidden-lg">
                        <button type="button" class="btn sidebar-btn" data-toggle="offcanvas" title="Toggle sidebar">Sidebar</button>
                    </p>
                    <!--BOTON MOBILE END-->
                    <!--TITULO CANJEAR START-->
                    <h6>Canjear productos</h6>
                    <!--PRODUCTOS CANJEAR START-->
                    <div class="row">
                        <script>
                            function vaciarCarrito() {
                                var formData = new FormData();
                                formData.append("action", "vaciar");
                                fetch('<?php echo $urlBE ?>/agregarCarrito.php', {
                                    method: "POST",
                                    body: formData,
                                    headers: {
                                        'Accept': 'application/json'
                                    }
                                }).then(response => {
                                        response.json().then(json => {
                                            console.log(json);
                                            document.getElementById("carrito-box").innerHTML = "";
                                            document.getElementById("carrito-box-subtotal").innerHTML = `<div class='total-text'>Subtotal: </div>
								<div class='total-digit'>$ ` + 0 + `</div>`;
                                        });
                                });
                            }

                            function borrarProducto(producto) {
                                var formData = new FormData();
                                formData.append("idProducto", producto.getAttribute("idProducto"));
                                formData.append("action", "borrar");
                                fetch('<?php echo $urlBE ?>/agregarCarrito.php', {
                                    method: "POST",
                                    body: formData,
                                    headers: {
                                        'Accept': 'application/json'
                                    }
                                }).then(response => {
                                    response.json().then(json => {
                                        var html = "";
                                        var precio = 0;
                                        json.forEach(producto => {
                                            precio += parseFloat(producto.precioEfectivo) * producto.cantidad;
                                            html += `<tr>
									<td class='delete'><a idProducto="` + producto.idProducto + `" onclick='borrarProducto(this)'><i class='fa fa-close' aria-hidden='true'></i></a></td>
									<td class='info'>
										<img class='product-image' src='<?php echo $imagenes ?>/imgProductos/` + producto.imgProducto + `' alt='product-image'>
										<em>` + producto.producto + `<br><em class='price'>` + producto.cantidad + ` x $ ` + producto.precioEfectivo + `</em></em>
									</td>
								</tr>`;
                                        });
                                        document.getElementById("carrito-box").innerHTML = html;
                                        document.getElementById("carrito-box-subtotal").innerHTML = `<div class='total-text'>Subtotal: </div>
								<div class='total-digit'>$ ` + precio.toFixed(2) + `</div>`;
                                    });
                                });

                            }

                            function enviarDatos(form) {
                                let formulario = new FormData(form);
                                fetch('<?php echo $urlBE ?>/agregarCarrito.php', {
                                    method: "POST",
                                    body: formulario,
                                    headers: {
                                        'Accept': 'application/json'
                                    }
                                }).then(async response => {
                                    if (await response.ok) {
                                        response.json().then(function(json) {
                                            var html = "";
                                            var precio = 0;
                                            json.forEach(producto => {
                                                precio += parseFloat(producto.precioEfectivo) * producto.cantidad;
                                                html += `<tr>
									<td class='delete'><a idProducto="` + producto.idProducto + `" onclick='borrarProducto(this)'><i class='fa fa-close' aria-hidden='true'></i></a></td>
									<td class='info'>
										<img class='product-image' src='<?php echo $imagenes ?>/imgProductos/` + producto.imgProducto + `' alt='product-image'>
										<em>` + producto.producto + `<br><em class='price'>` + producto.cantidad + ` x $ ` + producto.precioEfectivo + `</em></em>
									</td>
								</tr>`;
                                            });
                                            document.getElementById("carrito-box").innerHTML = html;
                                            document.getElementById("carrito-box-subtotal").innerHTML = `<div class='total-text'>Subtotal: </div>
								<div class='total-digit'>$ ` + precio.toFixed(2) + `</div>`;
                                        });
                                    }
                                });
                            }
                        </script>
                        <?php imprimirProductos(findAllProductos()); ?>
                        <!--PAGINACION START-->
                        <div class="col-md-12">
                            <div class="pagination-wrap">
                                <ul class="pagination">
                                    <li><a href="#"><i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--PAGINACION END-->
                    </div>
                    <!--PRODUCTOS CANJEAR END-->
                </div>
                <!--CANJEAR END-->
            </div>
            <!--ROW END-->
        </div>
        <!--CONTAINER END-->
        <!--TIENDA OFICIAL START-->
        <div class="store-banner position-relative">
            <div class="store-banner-info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">Tienda <span>Oficial</span></div>
                            <a href="store.html" class="btn">Detalles</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--TIENDA OFICIAL END-->
    </div>
    <!--TIENDA CUERPO END-->
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