<!DOCTYPE html>
<html>
<body>


<img src="" alt="">
<?php
include_once 'my-functions.php';

include 'header.php';

$name = "Bibi";
$price = 0;
$imageUrl = "/projet-boutique/images/bibi.jpg";

echo "Nom : ".$name;
echo "<br>";
echo "Prix : ". $price;
echo "<br>";
echo "<img src=". $imageUrl.">";

include 'footer.php';

?> 

</body>
</html>
