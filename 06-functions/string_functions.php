<?php

echo "<h2>String Functions</h2>";

$string = "Hello World!";
$message = "This is a test message.";

// Get the length of a string.
echo strlen($string), "<hr>";

// Find the position of the first occurrence of a substring in a string.
echo strpos($string, "o"), "<hr>";

// Find the position of the last occurrence of a substring in a string.
echo strrpos($string, "o"), "<hr>";

// Reverse a string.
echo strrev($string), "<hr>";

// Convert all characters to lowercase.
echo strtolower($string), "<hr>";

// Convert all characters to uppercase.
echo strtoupper($string), "<hr>";

// Uppercase the first character of each word.
echo ucwords($message), "<hr>";

// String replace
echo str_replace("World", "Everyone", $string), "<hr>";

// Return portion of a string specified by the offset and length
echo substr($string, 1, 5), " - ", substr($string, 9), "<hr>";

// Starts with
echo "String starts with P: ";
var_dump(str_starts_with($string, "P"));
echo "<hr>", "String starts with H: ";
var_dump(str_starts_with($string, "H"));
echo "<hr>";

// Ends with
if (str_ends_with($string, 'ld!')) {
    echo "String ends with: " . "ld!";
}
else {
    echo "String does not end with: " . "ld!";
}
echo "<hr>";

// Html Special Characters - htmlspecialchars() Function
$html = "<h1>Hello World!</h1>";
echo $html, "<hr>";

$script = "<script>alert('Hello World!')</script>";
echo $script;
echo htmlspecialchars($script);
echo "<hr>";

// printf() Function
printf("%s enjoys %s a lot.", "Mert", "coding");
echo "<hr>";
printf("1 + 1 = %d", 1 + 1);
echo " ------------------ ";
printf("1 + 1 = %f", 1 + 1);
echo "<hr>";

?>