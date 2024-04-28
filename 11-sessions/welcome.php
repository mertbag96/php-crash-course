<?php

session_start();

$user = "Guest";

if (isset($_SESSION["username"])) {
    $user = $_SESSION["username"];
}

echo "<h1>Welcome $user</h1>";

if (isset($_SESSION["username"])) {
    echo "<a href='../00-introduction-syntax-outputs/introduction_syntax_outputs.php' style='font-weight: 600; font-size: 1.5rem; color: #7a86b8;'>00 - Introduction, Syntax & Outputs</a><br>";
    echo "<a href='../01-variables-and-data-types/variables_and_data_types.php' style='font-weight: 600; font-size: 1.5rem; color: #7a86b8;'>01 - Variables & Data Types</a><br>";
    echo "<a href='../02-operators/operators.php' style='font-weight: 600; font-size: 1.5rem; color: #7a86b8;'>02 - Operators</a><br>";
    echo "<a href='../03-arrays/arrays.php' style='font-weight: 600; font-size: 1.5rem; color: #7a86b8;'>03 - Arrays</a><br>";
    echo "<a href='../04-conditionals/conditionals.php' style='font-weight: 600; font-size: 1.5rem; color: #7a86b8;'>04 - Conditionals</a><br>";
    echo "<a href='../05-loops/loops.php' style='font-weight: 600; font-size: 1.5rem; color: #7a86b8;'>05 - Loops</a><br>";
    echo "<a href='../06-functions/functions.php' style='font-weight: 600; font-size: 1.5rem; color: #7a86b8;'>06 - Functions (General)</a><br>";
    echo "<a href='../06-functions/array_functions.php' style='font-weight: 600; font-size: 1.5rem; color: #7a86b8;'>06 - Array Functions</a><br>";
    echo "<a href='../06-functions/string_functions.php' style='font-weight: 600; font-size: 1.5rem; color: #7a86b8;'>06 - String Functions</a><br>";
    echo "<a href='../07-superglobals/superglobals.php' style='font-weight: 600; font-size: 1.5rem; color: #7a86b8;'>07 - Superglobals</a><br>";
    echo "<a href='../08-get-post/get_post.php' style='font-weight: 600; font-size: 1.5rem; color: #7a86b8;'>08 - Get & Post</a><br>";
    echo "<a href='../09-sanitization-and-validation/sanitization_and_validation.php' style='font-weight: 600; font-size: 1.5rem; color: #7a86b8;'>09- Sanitization & Validation</a><br>";
    echo "<a href='../10-cookies/cookies.php' style='font-weight: 600; font-size: 1.5rem; color: #7a86b8;'>10 - Cookies</a><br>";
    echo "<br><br><a href='logout.php' style='font-weight: 600; font-size: 1.5rem; color: #7a86b8;'>Log out</a>";
} else {
    echo "<a href='sessions.php' style='font-weight: 600; font-size: 1.5rem; color: #7a86b8;'>Log in</a>";
}


?>
