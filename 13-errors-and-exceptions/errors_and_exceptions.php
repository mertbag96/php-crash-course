<?php

echo "<h1>Errors & Exceptions</h1>";

/* ---------------------------- Errors & Exceptions ---------------------------- */
/*
PHP has an exception model similar to that of other programming languages.
An exception can be thrown, and caught ("catched") within PHP.
Code may be surrounded in a try block, to facilitate the catching of potential exceptions.
Each try must have at least one corresponding catch or finally block.
*/

// Throwing an exception

/**
 * @throws Exception
 */

function inverse($x)
{
    if (!$x) {
        throw new Exception("Division by zero!");
    }
    return 1 / $x;
}

// Try - Catch (Error Handling)
try {
    echo inverse(5), "<br><br>", inverse(0);
} catch(Exception $exception) {
    echo "Caught Exception: ", $exception->getMessage();
}

// Finally

try {
    echo inverse(0) + inverse(3);
} catch (Exception $e) {
    echo "<br><br>", $e->getMessage();
} finally {
    echo "<br><br><br>", "------------------- End of file -------------------";
}

?>