<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Pink Elephant Plush Shop</title>
</head>

<body class="bg-red-50	">



    <?php
    include 'header.php';

    include_once 'my-functions-etape8.php';

    $productPrice = 4000;
    $productWeight = 410;

    ?>
    <h2 class="font-['Poetsen_one'] text-[#9c6264] text-2xl mt-8 mb-6 text-center">Our cute pink super soft fluffy plush</h2>

    <div class="flex flex-col md:flex-row justify-center">

    <div class="flex flex-col">

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
        <p>Weight :
            <?php
            echo $productWeight;
            ?>
            g</p>
        <p>Discount : -10 %</p>
        <p>Only
            <?php
            echo  discountingPrice(10, $productPrice);
            ?>
            € !!!</p><br>
    </div>

        <img src='/projet-boutique/images/plush.png' <br>

    </div>
    <form action="includes/cart-etape8.php" method="post">

        <label for="quantité">Quantity :</label>
        <input type="number" name="quantité" min="1">
        <input type="submit" value="Add to cart">

        <input type="hidden" name="productPrice" value="<?php echo $productPrice; ?>">
        <input type="hidden" name="productWeight" value="<?php echo $productWeight; ?>">

    </form>

    <br><br>

    <form action="includes/empty_card.php" method="post">
        <input type="submit" value="Empty Cart" class="bg-[#b89eb6] p-2 rounded-full shadow-md shadow-[#9c6264] hover:bg-[#ff5449]">
    </form>
    <form action="includes/cart-etape8.php" method="post">
        <input type="submit" value="Show Cart" class="bg-[#b89eb6] p-2 rounded-full shadow-md shadow-[#9c6264] hover:bg-[#ff5449]">
    </form>

    <?php
    include 'footer.php';
    ?>


</body>

</html>