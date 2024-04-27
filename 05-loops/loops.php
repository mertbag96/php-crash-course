<?php

echo "<h2>Loops</h2>";

/* --------------- For Loop --------------- */
/*
for (initialize; condition; increment/decrement) {
    Code to be executed
}
*/

echo "<h4>For Loop</h4>";

for ($x = 0; $x < 10; $x++) {
    echo $x . "<br>";
}

echo "<hr>";

/* --------------- While Loop --------------- */
/*
while (condition) {
    Code to be executed
}
*/

echo "<h4>While Loop</h4>";

$y = 1;
while ($y <= 20) {
    if($y < 20) {
        echo $y . " - ";
    } else {
        echo $y;
    }
    $y++;
}

echo "<hr>";

/* --------------- Do - While Loop --------------- */
/*
do {
    Code to be executed
} while (condition);

Do - While Loop will always execute the block of code once, even if the condition is false.
*/

echo "<h4>Do - While Loop</h4>";

$z = 1;
do {
    echo "Number: " . $z . "<br>";
    $z++;
} while ($z <= 3);

echo "<br>";

$w = 10;
do {
    echo "Category " . $w . "<br>";
    $w++;
} while ($w <= 3);

echo "w is: " . $w;

echo "<hr>";

/* --------------- Foreach Loop --------------- */
/*
foreach ($array as $value) {
    Code to be executed
}

foreach ($array as $index => $value) {
    Code to be executed
}
Note: $index represents the index of the element.
*/

echo "<h4>Foreach Loop</h4>";

$subjects = [
    "Chemistry",
    "Mathematics",
    "History",
    "Biology",
    "Spanish",
    "Physics",
];

foreach ($subjects as $index => $subject) {
    echo $index + 1 . ". subject is " . $subject . "<br>";
}

echo "<br>";

$country = [
    "Name" => "Turkey",
    "Capital" => "Ankara",
    "Language" => "Turkish",
    "Population" => "85 millions",
    "Currency" => "Turkish Lira"
];

foreach ($country as $key => $c) {
    if($key == "Name") {
        echo "<h4 style='text-decoration: underline; margin-bottom: 4px;'>Country:</h4>";
    }
    echo $key . ": " . $c . "<br>";
}

echo "<hr>";

?>