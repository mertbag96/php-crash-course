<?php

/* ----------------- If Statements ----------------- */
/*
If Statement Syntax
if (condition) {
    Code to be executed if condition is true
}
*/

echo "<h2>Conditionals</h2>";

$age = 28;
if ($age >= 18) {
    echo "You are old enough to vote!";
} else {
    echo "Sorry, you are not old enough to vote!";
}

echo "<hr>";

$hour = date("H");
if ($hour < 12) {
    echo "Good Morning!";
} elseif ($hour < 17) {
    echo "Good Afternoon!";
} else {
    echo "Good Evening!";
}

echo "<hr>";

if (true) {
    echo "Condition is true.";
}

echo "<hr>";

if (0 == NULL) {
    echo '0 and NULL are equal!';
    echo "<hr>";
}

if (0 !== NULL) {
    echo '0 and NULL are not identical!';
    echo "<hr>";
}

$boys = [];
$girls = ["Jane", "Kate", "Suzan"];

if(empty($boys)) {
    echo "There are no boys!", " - ";
}

if (!empty($girls)) {
    echo "First girl's name is " . $girls[0] . ".";
}
echo "<hr>";

// Ternary Operator
echo !empty($girls) ? "First girl's name is " . $girls[0] . "." : "There are no girls!";

echo "<hr>";

$first_boy = empty($boys) ? "Not Found!" : $boys[0];
$second_girl = empty($girls) ? "Not Found!" : $girls[1];
echo "First boy: " . $first_boy, " - Second girl: " . $second_girl;

echo "<hr>";

// Null Coalescing Operator
$third_boy = $boys[2] ?? "Not Found!";
echo "Third boy: " . $third_boy;

echo "<hr>";

// Switch
$today = date("l");
switch ($today) {
    case "Monday":
        echo "Today is Monday.";
        break;
    case "Tuesday":
        echo "Today is Tuesday.";
        break;
    case "Wednesday":
        echo "Today is Wednesday.";
        break;
    case "Thursday":
        echo "Today is Thursday.";
        break;
    case "Friday":
        echo "Today is Friday.";
        break;
    case "Saturday":
        echo "Today is Saturday.";
        break;
    case "Sunday":
        echo "Today is Sunday.";
        break;
    default:
        echo "The given value is not a day!";
}

?>