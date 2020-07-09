<?php
require_once(__DIR__ . "/config.php");
session_start();
if (isset($_POST["action"])) {
    switch ($_POST["action"]) {
        case "borrar":
            foreach ($_SESSION["PRODUCTOS"] as $clave => $valor) {
                // Si el producto existe en el carrito, se la agrega uno a la cantidad
                if ($valor["idProducto"] == $_POST["idProducto"]) {
                    unset($_SESSION["PRODUCTOS"][$clave]);
                    $_SESSION["PRODUCTOS"] = array_values($_SESSION["PRODUCTOS"]);
                    echo json_encode($_SESSION["PRODUCTOS"]);
                    return;
                }
            }
        break;
        case "vaciar":
            unset($_SESSION["PRODUCTOS"]);
            echo json_encode("{}");
            return;
        break;
    }
}
if (isset($_POST["producto"])) {
    if (!isset($_SESSION['PRODUCTOS'])) {
        $producto = array(
            "producto" => openssl_decrypt($_POST["producto"], COD, KEY),
            "idProducto" => openssl_decrypt($_POST["idProducto"], COD, KEY),
            "precioEfectivo" => openssl_decrypt($_POST["precioEfectivo"], COD, KEY),
            "imgProducto" => openssl_decrypt($_POST["imgProducto"], COD, KEY),
            "cantidad" => 1,
        );
        $_SESSION['PRODUCTOS'][0] = $producto;
    } else {
        // Se recorre la sesion para ver si ya existe el producto
        foreach ($_SESSION["PRODUCTOS"] as $clave => $valor) {
            // Si el producto existe en el carrito, se la agrega uno a la cantidad
            if ($valor["idProducto"] == openssl_decrypt($_POST["idProducto"], COD, KEY)) {
                $_SESSION["PRODUCTOS"][$clave]["cantidad"]++;
                echo json_encode($_SESSION["PRODUCTOS"]);
                return;
            }
        }
        // Si el producto no existe se crea
        $producto = array(
            "producto" => openssl_decrypt($_POST["producto"], COD, KEY),
            "idProducto" => openssl_decrypt($_POST["idProducto"], COD, KEY),
            "precioEfectivo" => openssl_decrypt($_POST["precioEfectivo"], COD, KEY),
            "imgProducto" => openssl_decrypt($_POST["imgProducto"], COD, KEY),
            "cantidad" => 1,
        );
        $_SESSION["PRODUCTOS"][count($_SESSION["PRODUCTOS"])] = $producto;
    }
}
//unset($_SESSION["PRODUCTOS"]);
//var_dump($_SESSION["PRODUCTOS"]);
echo json_encode($_SESSION["PRODUCTOS"]);