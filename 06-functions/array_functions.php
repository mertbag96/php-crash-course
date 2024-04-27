<?php

echo "<h2>Array Functions</h2>";

$brands = [
    "Nike",
    "Adidas",
    "Reebok",
    "Columbia",
];

// Get the length of an array: count()
echo "Array Length: " . count($brands) . "<br><br>";

// Search array for a specific value
echo "Does the array contain Reebok: ";
var_dump(in_array("Reebok", $brands));
echo "<br><br>";

// Adding element(s) to an array
$brands[] = "Converse"; // Option 1 (adds to the end)
print_r($brands);
echo "<br><br>";

array_push($brands, "Lacoste", "New Balance"); // Option 2 (adds to the end)
print_r($brands);
echo "<br><br>";

array_unshift($brands, "Puma"); // Option 3 (adds to the beginning)
print_r($brands);
echo "<br><br>";

// Removing element(s) from an array
array_pop($brands); // Option 1 (removes from the end)
print_r($brands);
echo "<br><br>";

array_shift($brands); // Option 2 (removes from the beginning)
print_r($brands);
echo "<br><br>";

unset($brands[5]); // Option 3 (removes the given index)
print_r($brands);
echo "<br><br>";

// Split into 2 chunks
$chunked_array = array_chunk($brands, 2);
print_r($chunked_array);
echo "<br><br>";

// Concatenate Arrays
$odd_numbers = [1, 3, 5, 7, 9];
$even_numbers = [0, 2, 4, 6, 8];

$all_numbers =  array_merge($odd_numbers, $even_numbers); // Option 1 (array_merge)
print_r($all_numbers);
echo "<br><br>";

$boys = ["Jack", "David", "Fred"];
$girls = ["Caitlyn", "Sera", "Helen"];

$students = [...$boys, ...$girls]; // Option 2 (Spread Operator)
print_r($students);
echo "<br><br>";

$winter = ["December", "January", "February"];
$spring = ["March", "April", "May"];
$summer = ["June", "July", "August"];
$autumn = ["September", "October", "November"];

$climates = [...$winter, ...$spring, ...$summer, ...$autumn];
print_r($climates);
echo "<br><br>";

$names = ["John", "Kevin", "Carlos"];
$surnames = ["Doe", "Stone", "Sanchez"];

$full_names = array_combine($names, $surnames); // Option 3 (Combines two arrays by making the first array's values the keys of the combined array)
print_r($full_names);
echo "<br><br>";

// Getting the keys of an array
$keys = array_keys($full_names);
print_r($keys);
echo "<br><br>";

// Flipping arrays
$countries = [
    "Germany",
    "Ukraine",
    "Russia",
    "Turkey"
];
print_r($countries);
echo "<br><br>";

$flipped_array = array_flip($countries);
print_r($flipped_array);
echo "<br><br>";

print_r(array_keys($flipped_array));
echo "<br><br>";

// Range function - Creates an array according to the given range
$digits = range(4, 9);
print_r($digits);
echo "<br><br>";

// array_map() Function
$indexes = [4, 9, 17, 23, 41];
$pages = array_map( function ($page) {
    return "Page " . $page;
}, $indexes);
print_r($pages);
echo "<br><br>";

// array_filter() Function
$years = [
    2010,
    2011,
    2012,
    2013,
    2014,
    2015,
    2016,
    2017,
    2018,
    2019,
    2020,
    2021,
    2022,
    2023,
    2024
];
$filtered_years = array_filter($years, fn($year) => $year >= 2020);
print_r($filtered_years);
echo "<br><br>";

// array_reduce() Function
$ages = [19, 22, 17, 30, 48, 21, 57, 18, 35, 29, 72, 13, 53, 87];
$sum_of_ages = array_reduce($ages, fn($previous, $age) => $previous + $age);
echo "Sum of ages: ";
print_r($sum_of_ages);
echo "<br><br>";

$avarage_of_ages = $sum_of_ages / count($ages);
echo "Avarage of ages: ";
print_r((int)$avarage_of_ages); // Converts into integer
echo "<br><br>";

?>
