<?php

var_dump($_POST);


include_once '../my-functions-etape7.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $productQuantity = $_POST['quantité'];
    $productPrice = $_POST['productPrice'];
    $productWeight = $_POST['productWeight'];
    // $carierChoice = $_POST['carier'];




    if (empty($productQuantity)) {
        echo '<p>Oh no, your cart is empty !<br><br>Too bad, no fluffiness for you :( </p><br>';
        echo '<br><br><br>...<br><p>... Unless...</p><br>';
        echo '<br>';
        echo '<p>Unless you go back to shop to get you the cutest pink fluffy elephent plush !!! :)</p>';
        echo '<a href="../plush-shop.php">Return to shop</a>';
    } else {

        $discountedProductPrice = discountingPrice(10, $productPrice);

        $productPriceWithoutVAT = priceExcludingVAT($productPrice);

        $totalCartWeight = calculatingTotalWeight($productWeight, $productQuantity);

        // $shippingFees = calculatingShippingFees($totalCartWeight);

        $totalPrice = $productQuantity * $discountedProductPrice;

        $totalPriceWithoutVAT = $productQuantity * $productPriceWithoutVAT;

        // $cartPrice = calculatingTotalOfCart($productPrice, 10, $productWeight, $productQuantity);

        echo "Your cart contains :";
        echo '<br>';
        echo $productQuantity, ' product(s).<br>';
        echo "Price : " . $discountedProductPrice . " €<br>";
        echo "Total of your cart : " . $totalPrice . " €<br>";

        displayTotalOfVAT($productPrice, $productQuantity);

        displayTotalWeight($totalCartWeight);

        /////////// choix du transporteur ////////

?>

        <form action="" method="post">

            <label for="carierChoice">Choose a carier :</label>

            <select name="carier" id="carierChoice">
                <option value="">--Please choose an option--</option>
                <option value="economic">UPS economic slow and green delivery</option>
                <option value="premium">UPS ultra fast premium delivery</option>
            </select>
            <input type="submit">

            <input type="hidden" name="productPrice" value="<?php echo $productPrice; ?>">
            <input type="hidden" name="productWeight" value="<?php echo $productWeight; ?>">
            <input type="hidden" name="quantité" value="<?php echo $productQuantity; ?>">


        </form>

<?php


        ///////////// prix final de la commande ///////////////////

        if (isset($_POST['carier'])) {

            // echo "calcul des frais de port<br>";
            $carierChoice = $_POST['carier'];



            if ($carierChoice === 'economic') {
                // echo 'livraison pas cher!!! <br>';
                $shippingFees = calculatingShippingFeesEconomic($totalCartWeight);
                echo "Shipping fees : " . $shippingFees . " €<br><br>";
                $totalOfPurchase = calculatingTotalOfCart($productPrice, 10, $productQuantity, $shippingFees);
                echo "Total of your purchase : " . $totalOfPurchase . " €<br><br>";
            }
            if ($carierChoice === 'premium') {
                // echo 'livraison rapide !!! <br>';
                $shippingFees = calculatingShippingFeesPremium($totalCartWeight);
                echo "Shipping fees : " . $shippingFees . " €<br><br>";
                $totalOfPurchase = calculatingTotalOfCart($productPrice, 10, $productQuantity, $shippingFees);
                echo "Total of your purchase : " . $totalOfPurchase . " €<br><br>";
            }

            // // echo "Shipping fees : " . $shippingFees . " €<br>";

            // // echo "Total of your purchase : " . $cartPrice . " €<br>";

            echo '<a href="../plush-shop-etape7.php">Return to shop</a>';
        }
    }
}

?>