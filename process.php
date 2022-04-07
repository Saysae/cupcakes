
<style>

</style>
<?php

$name = $_POST['name'];
$flavorString = implode(", ", $_POST['flavor']);
$flavorArray = $_POST['flavor'];
$cost = sizeOf($flavorArray) * 3.50;
$total = number_format($cost, 2);

echo"Thank you, $name, for your order!";

echo "<ul>";
foreach($flavorArray as $flavor){
    echo "<li>$flavor</li>";
}

echo"</ul>";

echo"Order total: $$total";