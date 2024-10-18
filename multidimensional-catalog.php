<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    include_once 'my-functions.php';

    $products = [
        "Plush" => $plush = [
            "name" => "plush",
            "price" => 4000,
            "weight" => 120,
            "discount" => 10,
            "picture url" => "/projet-boutique/images/plush.png"
        ],
        "T-shirt" => $tShirt = [
            "name" => "t-shirt",
            "price" => 3000,
            "weight" => 50,
            "discount" => 20,
            "picture url" => "/projet-boutique/images/t-shirt.jpg"
        ],
        "Toilet paper dispenser" => $toiletPaperDispenser = [
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
        echo "<p>Discount : " . $item["discount"] . " %</p>\n";
        echo "<img src='" . $item["picture url"] . "'<br>";
    }




    ?>


</body>

</html>