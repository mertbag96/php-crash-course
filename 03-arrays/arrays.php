<?php

// Simple Arrays
echo "<h2>Simple Arrays</h2>";

$numbers = [61, 44, 79, 13, 50, 28, 35];
$fruits = array("apple", "orange", "pear");

var_dump($numbers);
echo "<br><br>", $fruits[1], "<br><br>", count($numbers), "<hr>";

// Associative Arrays
echo "<h2>Associative Arrays</h2>";

$hex = [
    "red" => "#f00",
    "blue" => "#0f0",
    "green" => "#00f"
];
echo "Red: " . $hex["red"] . " - Blue: " . $hex["blue"] . " - Green: " . $hex["green"], "<br><br>";

$person = [
    "first_name" => "Mert",
    "last_name" => "Bağ",
    "age" => 28
];

echo $person["first_name"] . " " . $person["last_name"] . " is " . $person["age"] . " years old.", "<hr>";

// Multidimensional Arrays
echo "<h2>Multidimensional Arrays</h2>";

$people = [
    [
        "first_name" => "Mert",
        "last_name" => "Bağ",
        "age" => 28
    ],
    [
        "first_name" => "John",
        "last_name" => "Doe",
        "age" => 39
    ],
    [
        "first_name" => "Jane",
        "last_name" => "Stone",
        "age" => 53
    ]
];

echo $people[1]["last_name"], "<br><br>";
echo var_dump(json_encode($people)), "<br><br>";
echo var_dump(json_decode(json_encode($people))), "<br><br>";

?>