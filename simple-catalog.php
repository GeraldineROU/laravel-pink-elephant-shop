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

    $products = ["Plush", "T-Shirt", "Toilet Paper Dispenser"];
    sort($products);

    // $i = 0;

    // while ($i<count($products)) {
    //     echo $products[$i] . "<br>";
    //     $i++;
    // }

    // do {
    //     echo $products[$i] . "<br>";
    //     $i++;
    // } while ($i < count($products));

    // for ($i = 0; $i<count($products); $i++) {
    //     echo $products[$i] . "<br>";
    // }

    foreach ($products as $item) {
        echo $item . "<br>";
    }

    ?>

</body>

</html>