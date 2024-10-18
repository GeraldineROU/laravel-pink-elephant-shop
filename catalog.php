<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pink Elephant shop</title>
</head>

<body>



    <?php
    include 'header.php';

    include_once 'my-functions.php';

    echo '<h2>Our products</h2>';

    $products = [
        "Plush" =>
        [
            "name" => "plush",
            "price" => 4000,
            "weight" => 120,
            "discount" => 10,
            "picture url" => "/projet-boutique/images/plush.png"
        ],
        "T-shirt" =>
        [
            "name" => "t-shirt",
            "price" => 3000,
            "weight" => 50,
            "discount" => 20,
            "picture url" => "/projet-boutique/images/t-shirt.jpg"
        ],
        "Toilet paper dispenser" =>
        [
            "name" => "Toilet paper dipenser",
            "price" => 7500,
            "weight" => 320,
            "discount" => 12,
            "picture url" => "/projet-boutique/images/toiletPaperDispenser.jpg"
        ]
    ];

    foreach ($products as $item) {
        echo "<h2>" . $item["name"] . "</h2><br>";
        echo "<p>Price with VAT : ";
        echo formatPrice($item["price"]) . "<p>Price without VAT : ";
        echo priceExcludingVAT($item["price"]) . "<p>Weight : " . $item["weight"] . " g</p>\n";
        echo "<p>Discount : -" . $item["discount"] . " %</p>\n";
        echo "<p>Only " . discountingPrice($item["discount"], $item["price"]) . "!!!</p><br>";
        echo "<img src='" . $item["picture url"] . "'<br>";
        echo '<form action="includes/cart.php" method="post">

            <label for="quantité">Quantité :</label>
            <input type="number" id="quantité" name="quantité" min="1">
            <input type="submit" value="Rajouter au panier">

            </form>';
    }

    include 'footer.php';
    


    ?>




</body>

</html>