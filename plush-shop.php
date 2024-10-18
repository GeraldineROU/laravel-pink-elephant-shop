<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pink Elephant Plush Shop</title>
</head>

<body>



    <?php
    include 'header.php';

    include_once 'my-functions.php';

    $productPrice = 4000;

    ?>
    <h2>Our cute pink super soft fluffy plush</h2>

    <p>Price with VAT :
        <?php
        echo formatPrice($productPrice);
        ?>
        €</p>
    <p>Price without VAT :
        <?php
        echo priceExcludingVAT($productPrice);
        ?>
        €</p>
    <p>Weight : 120g</p>
    <p>Discount : -10 %</p>
    <p>Only
        <?php
        echo  discountingPrice(10, $productPrice);
        ?>
        € !!!</p><br>
    <img src='/projet-boutique/images/plush.png' <br>
    <form action="includes/cart.php" method="post">

        <label for="quantité">Quantity :</label>
        <input type="number" name="quantité" min="1">
        <input type="submit" value="Add to cart">

        <input type="hidden" name="productPrice" value="<?php echo $productPrice; ?>">

    </form>

    <br><br>

    <?php
    include 'footer.php';
    ?>


</body>

</html>