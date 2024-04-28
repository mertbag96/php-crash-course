<?php

echo "<h1>Sessions</h1>";

/* ------------------------------------- Sessions ------------------------------------- */
/*
Sessions are a way to store information (in variables) to be used across multiple pages.
Unlike cookies, sessions are stored on the server.
*/

?>

<h3>Log in</h3>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" style="display: flex; flex-direction: column;">
    <input type="text" name="username" style="width: 50%; padding: .5rem; margin-bottom: 1rem;" placeholder="Username..." required>
    <input type="password" name="password" style="width: 50%; padding: .5rem; margin-bottom: 1rem;" placeholder="Password..." required>
    <input type="submit" name="submit" value="Log in" style="background-color: #7a86b8; width: 50%; padding: .5rem; margin-bottom: .5rem; cursor: pointer; font-weight: 600; color: white;">
</form>

<?php
session_start();

if ( isset($_POST["submit"]) ) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST["password"];

    if ($username == "Mert" && $password == "password") {
        $_SESSION["username"] = "Mert";
        header("Location: /11-sessions/welcome.php");
    } else {
        echo "<p style='font-weight: 600; color: red;'>Incorrect username or password!</p>";
    }
}
?>

<hr>