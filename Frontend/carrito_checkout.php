<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Orden de compra</title>
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
                            <li>Orden</li>
                        </ul>
                        <h1>Orden</h1>
                    </div>
                </div>
            </div>	
        </div>
    </div>
</section>
<!--BREADCRUMBS END-->

    <!--CHECKOUT WRAP BEGIN-->
<section class="checkout-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert team-alert fade in" role="alert"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-close" aria-hidden="true"></span></button> 
                    Usuario registrado? <a href="#">CLICK aqui para ENTRAR</a>
                </div>
                <div class="alert team-alert fade in" role="alert"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-close" aria-hidden="true"></span></button> 
                    Tienes un cupon? <a href="#">CLICK aqui para INGRESARLO</a>
                </div>
            </div>
            <div class="col-md-7">
                <h4>Detalles de compra</h4>
                <div class="customer-info">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="item">
                                    <label>
                                        <span>Nombre <i>*</i></span>
                                        <input type="text" name="first name" placeholder="Nombre">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item">
                                    <label>
                                        <span>Apellido <i>*</i></span>
                                        <input type="text" name="last name" placeholder="Apellido">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item">
                                    <label>
                                        <span>Direccion de E-mail <i>*</i></span>
                                        <input type="text" name="email" placeholder="Direccion de E-mail">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item">
                                    <label>
                                        <span>Telefono <i>*</i></span>
                                        <input type="text" name="phone" placeholder="Nro de telefono">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="item">
                                    <label>
                                        <span>Ciudad <i>*</i></span>
                                        <select class="basic">
                                            <option>Mexico</option>
                                            <option>Chile</option>
                                            <option>Otros</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="item">
                                    <label>
                                        <span>Direccion <i>*</i></span>
                                        <input type="text" placeholder="Nombre y Numero" name="address">
                                    </label>
                                    <input type="text" placeholder="Apartamento, piso, suite (opcional)" name="address">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="item">
                                    <label>
                                        <span>Ciudad <i>*</i></span>
                                        <input type="text" name="town" placeholder="Ciudad">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item">
                                    <label>
                                        <span>Codigo Postal <i>*</i></span>
                                        <input type="text" name="postcode" placeholder="Codigo postal">
                                    </label>
                                </div>
                            </div>
                        </div>                        
                    </form>
                </div>
                <h4>Informacion adicional</h4>
                <div class="customer-info">
                    <div class="item">
                        <label>
                            <span>Notas de la orden <i>*</i></span>
                            <textarea placeholder="Comentarios relevantes que puedan ayudar a recibir tu envio"></textarea>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <h4>Tu orden</h4>
                <table class="cart-table">
                    <tbody><tr>
                            <th class="product">Producto</th>
                            <th class="total">Total</th>
                        </tr>
                        <tr>
                            <td><img class="product-image" src="images/common/cart-product.jpg" alt="cart-product"><strong>Lorem Impsum</strong></td>
                            <td class="total">£ 120</td>
                        </tr>
                        <tr>
                            <td>Subtotal<br>Envio</td>
                            <td class="total">£ 120<br>£ 2</td>
                        </tr>
                        <tr>
                            <td><strong>Total</strong></td>
                            <td class="total">£ 122</td>
                        </tr>
                    </tbody></table>
                <div class="cart-total">
                    <div class="delivery-list">
                        <label class="item">
                            <input name="del-check" type="radio">
                            <span class="name">Pago con cheque</span>	
                        </label>
                        <label class="item">
                            <input name="del-check" type="radio">
                            <span class="name">Transferencia bancaria</span>	
                            <span class="delivery-text">Realice su pago directamente en nuestra cuenta bancaria. Utilice el ID del pedido como referencia de pago. Su pedido no se enviará hasta que los fondos se hayan liquidado en nuestra cuenta.</span>
                        </label>
                        <label class="item">
                            <input name="del-check" type="radio">
                            <span class="name">PayPal</span>
                            <span class="price"><img src="images/common/card-img.jpg" alt="card"></span>	
                        </label>
                        <label class="item">
                            <input name="del-check" type="radio">
                            <span class="name">Cash on Delivery</span>	
                        </label> <br>

                        <div class="filter-item">

                            <ul>
                                <li>
                                    <input type="checkbox" class="filter-check" id="test22">
                                    <label for="test22">Crear cuenta de usuario adicionalmente?</label>
                                </li>
                            </ul>
                        </div>

                        <button class="proceed">Realizar Pedido<i class="fa fa-check" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--CHECKOUT WRAP END-->

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
