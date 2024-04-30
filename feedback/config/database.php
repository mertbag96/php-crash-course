<?php

define("DB_HOST", "localhost");
define("DB_USERNAME", "mert");
define("DB_PASSWORD", "12345");
define("DB_NAME", "feedback_db");

// Create connection
$connection = new mysqli(
    DB_HOST,
    DB_USERNAME,
    DB_PASSWORD,
    DB_NAME
);

// Check connection
if ($connection->connect_error) {
    die("Connection Failed: " . $connection->connect_error);
}

// echo "<h2 style='padding: .5rem 0; background-color: #09b009; font-weight: 600; color: white; text-align: center;'>Database Connection Successful!</h2>";

?>