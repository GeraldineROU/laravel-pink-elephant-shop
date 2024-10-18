<?php

include_once '../my-functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $productQuantity = $_POST['quantité'];
    $productPrice = $_POST['productPrice'];

    $discountedProductPrice = discountingPrice(10, $productPrice);

    $productPriceWithoutVAT = priceExcludingVAT($productPrice);

    if (empty($productQuantity)) {
        echo 'Votre panier est vide !<br>';
        echo '<a href="../plush-shop.php">Return to shop</a>';
    } else {
        $totalPrice = $productQuantity * $discountedProductPrice;
        $totalPriceWithoutVAT = $productQuantity * $productPriceWithoutVAT;
        echo "Votre panier contient actuellement :";
        echo '<br>';
        echo $productQuantity, ' produit(s).<br>';
        echo "Price : " . $discountedProductPrice . " €<br>";
        echo "Total of your cart : " . $totalPrice . " €<br>";
        echo "Total without VAT : " . $totalPriceWithoutVAT . " €<br>";
        echo "Total of your purchase : " . $totalPrice . " €<br>";

        echo '<a href="../plush-shop.php">Return to shop</a>';
    }
}
