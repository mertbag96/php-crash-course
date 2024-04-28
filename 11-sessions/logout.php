<?php

session_start();

session_destroy();

header("Location: /11-sessions/sessions.php");

?>