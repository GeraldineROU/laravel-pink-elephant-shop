<?php session_start();
var_dump($_POST);

include_once '../my-functions-etape8.php';

//////////////si une quantité a été ajoutée au panier, les valeurs dans post passent dans session 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['quantité'])) {
        // Une quantité arrive dans le POST -> on modifie le panier

        $_SESSION['productQuantity'] = $_POST['quantité'];
        $_SESSION['productPrice'] = $_POST['productPrice'];
        $_SESSION['productWeight'] = $_POST['productWeight'];
    }


//////////// si user n'a rien ajouté = panier vide //////////////
    if (empty($_SESSION['productQuantity'])) {
        echo '<p>Oh no, your cart is empty !<br><br>Too bad, no fluffiness for you :( </p><br>';
        echo '<br><br><br>...<br><p>... Unless...</p><br>';
        echo '<br>';
        echo '<p>Unless you go back to shop to get you the cutest pink fluffy elephent plush !!! :)</p>';
        echo '<a href="../plush-shop-etape8.php">Return to shop</a>';
    } else {

        /////////////

        $discountedProductPrice = discountingPrice(10, (int)$_SESSION['productPrice']);

        $productPriceWithoutVAT = priceExcludingVAT((int)$_SESSION['productPrice']);

        $totalCartWeight = calculatingTotalWeight((int)$_SESSION['productWeight'], (int)$_SESSION['productQuantity']);

        $totalPrice = (int)$_SESSION['productQuantity'] * $discountedProductPrice;

        $totalPriceWithoutVAT = (int)$_SESSION['productQuantity'] * $productPriceWithoutVAT;

        echo "Your cart contains :";
        echo '<br>';
        echo (int)$_SESSION['productQuantity'], ' product(s).<br>';
        echo "Price : " . $discountedProductPrice . " €<br>";
        echo "Total of your cart : " . $totalPrice . " €<br>";

        displayTotalOfVAT((int)$_SESSION['productPrice'], (int)$_SESSION['productQuantity']);

        displayTotalWeight($totalCartWeight);

        /////////// choix du transporteur ////////

?>

        <form action="purchase.php" method="post">

            <label for="carierChoice">Choose a carier :</label>

            <select name="carier" id="carierChoice">
                <option value="">--Please choose an option--</option>
                <option value="economic">UPS economic slow and green delivery</option>
                <option value="premium">UPS ultra fast premium delivery</option>
            </select>
            <input type="submit">

        </form>
        <br><br>
        <a href="../plush-shop-etape8.php">Return to shop</a>
        

<?php

        
    }
}

var_dump($_SESSION);
?>