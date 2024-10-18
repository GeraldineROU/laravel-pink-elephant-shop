<?php session_start() ?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $productQuantity = htmlspecialchars($_POST['quantité']);
    $_SESSION['quantité'] = $productQuantity;

    // if (empty($productQuantity)) {
    //     echo 'Votre panier est vide !<br>';
    // } else {
    //     echo "Votre panier contient actuellement :";
    //     echo '<br>';
    //     echo $productQuantity, ' produit(s).<br>';
    // }
}
