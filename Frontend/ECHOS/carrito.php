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
    <title>Carrito</title>
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
                                <li>Carrito</li>
                            </ul>
                            <h1>Carrito</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CATEGORIA END-->

    <!--CART WRAP BEGIN-->
    <section class="cart-wrap">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h4>Tu carrito de compras</h4>
                </div>

                <!--TABLA DE PRODUCTOS-->
                <div class="col-md-12 overflow-scroll">
                    <table class="cart-table">
                        <tr>
                            <th></th>
                            <th class="product">Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th class="total">Total</th>
                        </tr>
                        <tr class="cart_iem">
                            <td class="delete"><a href="#"><i class="fa fa-close" aria-hidden="true"></i></a></td>
                            <td class="name"><img class="product-image" src="images/common/cart-product.jpg" alt="cart-product">Lorem ipsum</td>
                            <td class="cost">$ 60</td>
                            <td class="quantity"><input type="number"></td>
                            <td class="total">$ 120</td>
                        </tr>
                        <tr>
                            <td class="delete"><a href="#"><i class="fa fa-close" aria-hidden="true"></i></a></td>
                            <td class="name"><img class="product-image" src="images/common/cart-product.jpg" alt="cart-product">Lorem ipsum</td>
                            <td class="cost">$ 60</td>
                            <td class="quantity"><input type="number"></td>
                            <td class="total">$ 120</td>
                        </tr>
                    </table>
                </div>

                <!--BEFORE TABLA-->
                <div class="col-md-4 col-sm-6">
                    <div class="coupon">
                        <input type="text">
                        <button><span>Aplicar cupon</span></button>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6">
                    <div class="update-wrap">
                        <button class="update" disabled="">Actualizar carrito</button>
                    </div>
                </div>

                <!--OFERTA ESPECIAL-->
                <div class="col-md-8 col-sm-12">
                    <div class="cart-offer">
                        <h5>Oferta especial para ti</h5>
                        <div class="offer">
                            <div class="store-badge new">Nueva</div>
                            <div class="title">Tienda <span>Oficial</span></div>
                            <img src="images/vs_arena/cart-offer.jpg" alt="cart-offer">
                        </div>
                    </div>
                </div>

                <!--CARRITO TOTAL START-->
                <div class="col-md-4 col-sm-12">
                    <div class="cart-total">
                        <h5>Carrito Total</h5>
                        <div class="delivery-list">
                            <label class="item">
                                <input name="del-check" type="radio">
                                <span class="name">Envio Express</span>
                                <span class="price">$ 4</span>
                            </label>
                            <label class="item">
                                <input name="del-check" type="radio">
                                <span class="name">Envio Express</span>
                                <span class="price">$ 4</span>
                                <span class="delivery-text">Realice su pago directamente en nuestra cuenta bancaria. Utilice su ID de pedido como referencia de pago.</span>
                            </label>
                            <label class="item">
                                <input name="del-check" type="radio">
                                <span class="name">Envio Express</span>
                                <span class="price">$ 4</span>
                            </label>
                            <div class="cart-total-info">
                                <div class="title">Total</div>
                                <div class="price">$ 194</div>
                            </div>
                            <button class="proceed">Ir a pagar<i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
                <!--CARRITO TOTAL END-->

            </div>
        </div>
    </section>
    <!--CART WRAP END-->

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