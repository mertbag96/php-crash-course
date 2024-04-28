<?php

echo "<h1>Cookies</h1>";

/* -------------------------------- Cookies -------------------------------- */
/*
Cookies are a mechanism for storing data in the remote browser and thus
tracking or identifying return users. You can set specific data to be stored
in the browser, and then retrieve it when the user visits the site again.
*/

// Set Cookie
setcookie("name", "Mert", time() + 86400); // Set cookie for 1 day
setcookie("cookie", "My Cookie", time() + 60 * 60 * 24 * 30 * 365); // Set cookie for 1 year
setcookie("key", "hj3FRs24fgJCx32DaVoP21xkB0Q", time() + 60 * 60); // Set cookie for 1 minute

if (isset($_COOKIE["name"])) {
    echo $_COOKIE["name"], "<hr>";
}

// Unset Cookie
setcookie("cookie", "", time() - 86400); // Option 1

if (!isset($_COOKIE["cookie"])) {
    echo "The cookie was unset!", "<hr>";
}

unset($_COOKIE["key"]); // Option 2
if (!isset($_COOKIE["key"])) {
    echo "The key was unset!", "<hr>";
}

?>
