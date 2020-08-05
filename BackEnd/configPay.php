
<?php define('ProPayPal', 0);
    if(ProPayPal){
        define("PayPalClientId", "AVntAtzphjrkN-TNLLd0M_eJZ3eEEFHagby9pStEQSMaYjV3MWiIpYJxF_9UxbFsoOnP6BE-XqkGqgxT");
        define("PayPalSecret", "EMWPrI7mIzHGhyfUTUEg1DcgLwxRVW6EElBZ86hMGu3jx0dqn8c1sxafJwm7TtJiF8RxRukEHpHx5m6n");
        define("PayPalBaseUrl", "https://api.paypal.com/v1/");
        define("PayPalENV", "production");
    } else {
        define("PayPalClientId", "AVntAtzphjrkN-TNLLd0M_eJZ3eEEFHagby9pStEQSMaYjV3MWiIpYJxF_9UxbFsoOnP6BE-XqkGqgxT");
        define("PayPalSecret", "EMWPrI7mIzHGhyfUTUEg1DcgLwxRVW6EElBZ86hMGu3jx0dqn8c1sxafJwm7TtJiF8RxRukEHpHx5m6n");
        define("PayPalBaseUrl", "https://api.sandbox.paypal.com/v1/");
        define("PayPalENV", "sandbox");
}
?>