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


    $plush = [
        "name" => "plush",
        "price" => formatPrice(4000),
        "weight" => 120,
        "discount" => 10,
        "picture url" => "/htdocs/projet-boutique/images/plush.png"
    ];

    $tShirt = [
        "name" => "t-shirt",
        "price" => formatPrice(3000),
        "weight" => 50,
        "discount" => 15,
        "picture url" => "/htdocs/projet-boutique/images/t-shirt.jpg"
    ];

    $toiletPaperDispenser = [
        "name" => "t-shirt",
        "price" => formatPrice(75000),
        "weight" => 320,
        "discount" => 10,
        "picture url" => "/htdocs/projet-boutique/images/toiletPaperDispenser.jpg"
    ]



    ?>

    <div>
        <h3>Plush</h3>
        <p>Prix : 40€</p>
        <img src="/projet-boutique/images/plush.png" alt="peluche d'un éléphant rose">
    </div>

    <div>
        <h3>T-shirt</h3>
        <p>Prix : 30€</p>
        <img src="/projet-boutique/images/t-shirt.jpg" alt="t-shirt noir avec un dessin d'éléphant rose">
    </div>

    <div>
        <h3>Toilet paper dispenser</h3>
        <p>Prix : 75€</p>
        <img src="/projet-boutique/images/toiletPaperDispenser.jpg" alt="distributeur de papier toilette en forme d'un éléphant rose">
    </div>

</body>

</html>