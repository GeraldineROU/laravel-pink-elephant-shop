<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test formulaire</title>
</head>

<body>

    <h1>pour comprendre comment que ça marche les forms, les carts, toussa...</h1>

    <form action="includes-test/test-cart.php" method="post">

        <input type="text" id="petitTexte">
        <label for="quantité">Quantité :</label>

        <input type="number" id="quantité" name="quantité" min="1">
        <input type="submit" value="Rajouter au panier">

    </form>

    <a href="./includes-test/test-session.php">Test session</a>


</body>

</html>