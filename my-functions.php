<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    function formatPrice($priceInCents)
    {
        $priceInEuros = number_format($priceInCents / 100, 2);
        return $priceInEuros;
    }

    // formatPrice(1000);
    // echo "ça marche?";

    function priceExcludingVAT($VATIncludedPrice)
    {

        $VATexcludedPrice = (100 * $VATIncludedPrice) / (100 + 20);
        $VATexcludedPrice = formatPrice($VATexcludedPrice);
        return $VATexcludedPrice;
    }

    // $test = priceExcludingVAT(4000);
    // echo $test;

    function discountingPrice($productDiscount, $productPriceInCents)
    {
        $discount = ($productPriceInCents * $productDiscount) / 100;

        $productPriceDiscountedInCents = $productPriceInCents - $discount;

        $productPriceDiscounted = formatPrice($productPriceDiscountedInCents);

        return $productPriceDiscounted;
    }

    // function displayQuantityForm()
    // {
        
    // }

    ?>

</body>

</html>