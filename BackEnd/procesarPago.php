<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';
//require __DIR__ .  '/orderDetails.php';


// Agrega credenciales
MercadoPago\SDK::setAccessToken('TEST-7764097631664785-071302-89910601fc4ab904c4cd8909b1501c41-119284958');

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

$arrayItems = array();
session_start();
foreach ($_SESSION["PRODUCTOS"] as $clave => $valor) {
  $item = new MercadoPago\Item();
  $item->title = $valor['producto'];
  $item->quantity = $valor['cantidad'];
  $item->unit_price = $valor['precioEfectivo'];
  array_push($arrayItems, $item);
}
$preference->items = $arrayItems;
$preference->save();

?>
<!DOCTYPE html>
<form action="/procesar-pago" method="POST">
  <script
   src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
   data-preference-id="<?php echo $preference->id; ?>">
  </script>
</form> 