<?php

// Single line comment

/*
Multiple line comment
Line 1
Line 2
*/

// echo - Output strings, numbers, html, etc.
echo 12345, " - ", "Hello World!", " - ", 10.5;
echo "<h1>This is a title.</h1>";

echo "<hr>";

// print - Works like echo but can only take a single argument. Slower than the echo.
print("555");
print("<h1>This is an another title.</h1>");

echo "<hr>";

// print_r() - Print single values and arrays
print_r([1, 2, 3, 4, 5]);
echo "<br>";
print_r([1, 2, 3, 4, 5][3]);
echo "<br>";
print_r(count([1, 2, 3, 4, 5]));

echo "<hr>";

// var_dump() - Returns more info like data type and length
var_dump("Hello World");
echo "<br>";
var_dump(10);
echo "<br>";
var_dump(24.5);
echo "<br>";
var_dump(false);

echo "<hr>";

// var_export() - Similar to var_dump(). Outputs a string representation of a variable.
var_export("Welcome!");
echo "<br>";
var_export(123);
echo "<br>";
var_export(0.25);
echo "<br>";
var_export(true);
echo "<br>";
var_export(array("x", -82, 25, "g", "V"));

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Introduction, Syntax & Outputs</title>
</head>
<body>

<h1 style="color: red;"><?php echo "This is the first title."; ?></h1>
<h1 style="color: blue;"><?= "This is the second title."; ?></h1>

</body>
</html>