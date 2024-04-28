<?php

echo "<h1>File Handling</h1>";

/* ------------------------- File Handling ------------------------- */
/*
File handling is the ability to read and write files on the server.
PHP has built-in functions for reading and writing files.

Built-in Functions
file_exists()       Check if thee file exists
readfile()          Reads the file, prints out its contents
fopen()             Opens a file for the given mode
fclose()            Closes the file
fread()             Reads the file
filesize()          Gets the file size
fwrite()            Writes a file

PHP_EOL             Puts a line break when writing a file
*/

$users_file = "../files/users.txt";

// readfile()
echo "<h3>readfile() Function</h3>";
if (file_exists($users_file)) {
    readfile($users_file);
    echo "<br><br>", readfile($users_file);
}
echo "<hr>";

// fopen(), fclose(), fread(), filesize() and fwrite()
echo "<h3>fopen(), fclose(), fread(), filesize() and fwrite() Functions</h3>";

$colors_file = "../files/colors.txt";
// Red Blue Gray Yellow Orange Purple Green Pink Brown

if (file_exists($colors_file)) {
    $handle = fopen($colors_file, "r");
    $colors = fread($handle, filesize($colors_file));
    fclose($handle);
    echo $colors;
} else {
    $handle = fopen($colors_file, 'w');
    $colors = "Red" . PHP_EOL . "Blue" . PHP_EOL . "Gray" . PHP_EOL . "Yellow" . PHP_EOL . "Orange" . PHP_EOL . "Purple" . PHP_EOL . "Green" . PHP_EOL . "Pink" . PHP_EOL . "Brown";
    fwrite($handle, $colors);
    fclose($handle);
}

echo "<hr>";

?>