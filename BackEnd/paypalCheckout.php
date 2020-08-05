<?php

include('configPay.php');   
session_start();
$precioFinal = 0;
foreach ($_SESSION["PRODUCTOS"] as $clave => $valor) {
    global $precioFinal;
    $precioFinal += $valor['precioEfectivo'] * $valor['cantidad'];
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <style>
            @media screen and (max-width: 400px) {
                #paypal-button-container {
                    width: 100%;
                }
            }
            @media screen and (min-width: 400px) {
                #paypal-button-container {
                    width: 250px;
                }
            }
        </style>
    </head>

    <body>
    
        <!-- Set up a container element for the button -->
        <div id="paypal-button-container"></div>

        <!-- Include the PayPal JavaScript SDK -->
        <script src="https://www.paypal.com/sdk/js?client-id=<?php echo PayPalClientId?>"></script>
        <div class="paypal-button-container"></div>

        <script>
            paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '<?php echo $precioFinal?>'
          }
        }]
      });
    },
    onApprove: function(data) {
  return fetch('/orderDetails.php', {
    headers: {
      'content-type': 'application/json'
    },
    body: JSON.stringify({
      orderID: data.orderID
    })
  }).then(function(res) {
    return res.json();
  }).then(function(details) {
    alert('Transaction funds captured from ' + details.payer_given_name);
  })
}
  }).render('#paypal-button-container');
        </script>
    </body>
</html>