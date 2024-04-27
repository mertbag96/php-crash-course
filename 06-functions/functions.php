<?php

echo "<h2>Functions</h2>";

// Standard Functions
function introduceYourself()
{
    echo "Hello. My name is Mert. I'm 28. I enjoy coding a lot.";
}

introduceYourself();

echo "<hr>";

function sum($number1, $number2)
{
    return $number1 + $number2;
}

$total = sum(7, 3);
echo $total;

echo "<hr>";

// Functions with default parameters
function substract($number1 = 8, $number2 = 2)
{
    return $number1 - $number2;
}

$difference = substract();
echo $difference;

echo "<hr>";

// Anonymous Functions
$multiply = function ($number1, $number2) {
    return $number1 * $number2;
};
$product = $multiply(3, 8);
echo $product;

echo "<hr>";

// Arrow Functions
$divide = fn ($number1, $number2) => $number1 / $number2;
$division = $divide($difference, $product);
echo $division;

echo "<hr>";


?>
