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
    <title>Orden de compra</title>
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
                                <li>Orden</li>
                            </ul>
                            <h1>Orden</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CATEGORIA END-->
    <!--CHECKOUT WRAP BEGIN-->
    <section class="checkout-wrap">
        <div class="container">
            <div class="row">
                <!--CONT TOP-->
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
                <!--FORMULARIO START-->
                <div class="col-md-7">
                    <h4>Detalles de compra</h4>
                    <div class="customer-info">
                        <form>
                            <div class="row">
                                <!--DATO-->
                                <div class="col-md-6">
                                    <div class="item">
                                        <label>
                                            <span>Nombre <i>*</i></span>
                                            <input type="text" name="first name" placeholder="Nombre">
                                        </label>
                                    </div>
                                </div>
                                <!--DATO-->
                                <div class="col-md-6">
                                    <div class="item">
                                        <label>
                                            <span>Apellido <i>*</i></span>
                                            <input type="text" name="last name" placeholder="Apellido">
                                        </label>
                                    </div>
                                </div>
                                <!--DATO-->
                                <div class="col-md-6">
                                    <div class="item">
                                        <label>
                                            <span>Direccion de E-mail <i>*</i></span>
                                            <input type="text" name="email" placeholder="Direccion de E-mail">
                                        </label>
                                    </div>
                                </div>
                                <!--DATO-->
                                <div class="col-md-6">
                                    <div class="item">
                                        <label>
                                            <span>Telefono <i>*</i></span>
                                            <input type="text" name="phone" placeholder="Nro de telefono">
                                        </label>
                                    </div>
                                </div>
                                <!--DATO-->
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
                                <!--DATO-->
                                <div class="col-md-12">
                                    <div class="item">
                                        <label>
                                            <span>Direccion <i>*</i></span>
                                            <input type="text" placeholder="Nombre y Numero" name="address">
                                        </label>
                                        <input type="text" placeholder="Apartamento, piso, suite (opcional)" name="address">
                                    </div>
                                </div>
                                <!--DATO-->
                                <div class="col-md-12">
                                    <div class="item">
                                        <label>
                                            <span>Ciudad <i>*</i></span>
                                            <input type="text" name="town" placeholder="Ciudad">
                                        </label>
                                    </div>
                                </div>
                                <!--DATO-->
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
                    <!--DATO-->
                    <div class="customer-info">
                        <div class="item">
                            <label>
                                <span>Notas de la orden <i>*</i></span>
                                <textarea placeholder="Comentarios relevantes que puedan ayudar a recibir tu envio"></textarea>
                            </label>
                        </div>
                    </div>
                </div>
                <!--FORMULARIO END-->
                <!--DETALLES ORDEN START-->
                <div class="col-md-5">
                    <h4>Tu orden</h4>
                    <table class="cart-table">
                        <tbody>
                            <tr>
                                <th class="product">Producto</th>
                                <th class="total">Total</th>
                            </tr>
                            <tr>
                                <td><img class="product-image" src="<?php echo $urlFE;?>/images/common/cart-product.jpg" alt="cart-product"><strong>Lorem Impsum</strong></td>
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
                        </tbody>
                    </table>
                    <!--INFORMACION DE PAGO-->
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
                                <span class="price"><img src="<?php echo $urlFE;?>/images/common/card-img.jpg" alt="card"></span>
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
                <!--DETALLES ORDEN END-->
            </div>
        </div>
    </section>
    <!--CHECKOUT WRAP END-->
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