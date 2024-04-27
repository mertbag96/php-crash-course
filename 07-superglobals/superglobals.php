<?php

/* -------------------------- Superglobals -------------------------- */
/*
  Built in variables that are always available in all scopes.
*/
/*
  $GLOBALS      A superglobal variable that holds information about any variables in global scope.
  $_GET         Contains information about variables passed through a URL or a form.
  $_POST        Contains information about variables passed through a form.
  $_COOKIE      Contains information about variables passed through a cookie.
  $_SESSION     Contains information about variables passed through a session.
  $_SERVER      Contains information about the server environment.
  $_ENV         Contains information about the environment variables.
  $_FILES       Contains information about files uploaded to the script.
  $_REQUEST     Contains information about variables passed through the form or URL.
*/

echo "<h2>Superglobals</h2>";

echo "Built in variables that are always available in all scopes.";

echo "
<ul style='list-style: disc;'>
<li>
" . htmlspecialchars('$_GET     :') . "
Contains information about variables passed through a URL or a form.
</li>
<br>
<li>
" . htmlspecialchars('$_POST     :') . "
Contains information about variables passed through a form.
</li>
<br>
<li>
" . htmlspecialchars('$_COOKIE     :') . "
Contains information about variables passed through a cookie.
</li>
<br>
<li>
" . htmlspecialchars('$_SESSION     :') . "
Contains information about variables passed through a session.
</li>
<br>
<li>
" . htmlspecialchars('$_SERVER     :') . "
Contains information about the server environment.
</li>
<br>
<li>
" . htmlspecialchars('$_ENV     :') . "
Contains information about the environment variables.
</li>
<br>
<li>
" . htmlspecialchars('$_FILES     :') . "
Contains information about files uploaded to the script.
</li>
<br>
<li>
" . htmlspecialchars('$_REQUEST     :') . "
Contains information about variables passed through the form or URL.
</li>
</ul>
";

echo "<hr>", "<h4>SERVER DETAILS (LOCAL)</h4>";

foreach ($_SERVER as $key => $server) {
    echo $key . " : " . $server, "<br><br>";
}

?>