<?php

echo "<h1>". htmlspecialchars('$_GET & $_POST') . "</h1>";

/* ---------------------------- $_GET & $_POST ---------------------------- */
/*
We can pass data through URLs and forms using $_GET and $_POST superglobals.
*/

?>

<?php // $_GET ?>
<span style="font-weight: 600; font-size: 1.5rem;">$_GET :</span>
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Mert&age=28" style="font-weight: 600; font-size: 1.5rem; color: #7a86b8;">
    Click here
</a>

<?php
if (isset($_GET["name"]) && isset($_GET["age"])) {
    echo "<br><br>", "Name: " . $_GET["name"];
    echo "<br>", "Age: " . $_GET["age"];
}
echo "<hr>";
?>

<?php // $_POST ?>
<span style="font-weight: 600; font-size: 1.5rem;">$_POST :</span>
<br><br>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" style="display: flex; flex-direction: column;">
    <input type="text" name="name" style="width: 50%; padding: .5rem; margin-bottom: 1rem;" placeholder="Name..." required>
    <input type="text" name="age" style="width: 50%; padding: .5rem; margin-bottom: 1rem;" placeholder="Age..." required>
    <input type="submit" name="submit" value="Submit" style="background-color: #7a86b8; width: 50%; padding: .5rem; margin-bottom: 1rem; cursor: pointer; font-weight: 600; color: white;">
</form>

<?php
if ( isset($_POST["submit"]) ) {
    echo "Name: " . $_POST["name"];
    echo "<br>", "Age: " . $_POST["age"];
}
echo "<hr>";
?>
