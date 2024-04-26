<?php

/* -------------------- PHP Data Types -------------------- */
/*
- String        Series of characters surrounded by quotes
- Integer       Whole numbers
- Float         Decimal numbers
- Boolean       true or false
- Array         Special variable that holds more than one value
- Object        A class
- NULL          Empty variable
- Resource      Special variable that holds a resource
*/

/* -------------------- Variable Rules -------------------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore ( _ ) character
- Variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores ( A-z, 0-9 and _ )
- Variables are case-sensitive ( $name and $NAME are two different variables )
*/


// String
$full_name = "Mert Bağ";
echo $full_name, " - ";
var_dump($full_name);
echo "<hr>";

// Integer
$age = 28;
echo $age, " - ";
var_dump($age);
echo "<hr>";

// Float
$rate = 4.3;
echo $rate, " - ";
var_dump($rate);
echo "<hr>";

// Boolean
$is_male = true;
echo $is_male, " - ";
var_dump($is_male);
echo "<hr>";

// Concatenation
echo $full_name . ' is ' . $age . ' years old.', " - By using ( '' )";
echo "<hr>";
echo "$full_name is $age years old.", ' - By using ( "" )';
echo "<hr>";
echo "${full_name} is ${age} years old.", ' - By using ( "" and {} )';
echo "<hr>";

// Constants
define('HOST', 'localhost');
define('DB_NAME', 'dev_db');
define('USER_NAME', 'root');
define('PASSWORD', '12345');

echo "HOST: " . HOST, "<br>";
echo "DATABASE: " . DB_NAME, "<br>";
echo "USER: " . USER_NAME, "<br>";
echo "PASSWORD: " . PASSWORD, "<hr>";

?>
