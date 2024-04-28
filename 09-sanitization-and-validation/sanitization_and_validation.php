<?php

echo "<h1>Sanitization & Validation</h1>";

/* ---------------------------- Sanitization & Validation ---------------------------- */
/*
Sanitization & Validation is used for security reasons when submitting forms.
*/

?>

<?php /* ---------------------------- htmlspecialchars() ---------------------------- */ ?>

<?php
echo "<h3>Using htmlspecialchars() Function</h3>";
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" style="display: flex; flex-direction: column;">
    <input type="text" name="name" style="width: 50%; padding: .5rem; margin-bottom: 1rem;" placeholder="Name..." required>
    <input type="text" name="age" style="width: 50%; padding: .5rem; margin-bottom: 1rem;" placeholder="Age..." required>
    <input type="submit" name="submit" value="Submit" style="background-color: #7a86b8; width: 50%; padding: .5rem; margin-bottom: 1rem; cursor: pointer; font-weight: 600; color: white;">
</form>

<?php
if ( isset($_POST["submit"]) ) {
    $name = htmlspecialchars($_POST["name"]);
    $age = htmlspecialchars($_POST["age"]);
    echo "Name: " . $name;
    echo "<br>", "Age: " . $age;
}
echo "<hr>";
?>

<?php /* ---------------------------- filter_input() ---------------------------- */ ?>

<?php
echo "<h3>Using filter_input() Function</h3>";
?>

<form action="<?php echo filter_input(INPUT_POST, $_SERVER['PHP_SELF'], FILTER_SANITIZE_SPECIAL_CHARS); ?>" method="POST" style="display: flex; flex-direction: column;">
    <input type="text" name="city" style="width: 50%; padding: .5rem; margin-bottom: 1rem;" placeholder="City..." required>
    <input type="text" name="country" style="width: 50%; padding: .5rem; margin-bottom: 1rem;" placeholder="Country..." required>
    <input type="submit" name="submit2" value="Submit" style="background-color: #7a86b8; width: 50%; padding: .5rem; margin-bottom: 1rem; cursor: pointer; font-weight: 600; color: white;">
</form>

<?php
if ( isset($_POST["submit2"]) ) {
    $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_SPECIAL_CHARS);
    $country = filter_input(INPUT_POST, 'country', FILTER_SANITIZE_SPECIAL_CHARS);
    echo "City: " . $city;
    echo "<br>", "Country: " . $country;
}
echo "<hr>";
?>

<?php /* ---------------------------- filter_var() ---------------------------- */ ?>

<?php
echo "<h3>Using filter_var() Function</h3>";
?>

<form action="<?php echo filter_var($_SERVER['PHP_SELF'], FILTER_SANITIZE_SPECIAL_CHARS); ?>" method="POST" style="display: flex; flex-direction: column;">
    <input type="email" name="email" style="width: 50%; padding: .5rem; margin-bottom: 1rem;" placeholder="Email..." required>
    <input type="tel" name="phone" style="width: 50%; padding: .5rem; margin-bottom: 1rem;" placeholder="Phone..." required>
    <input type="submit" name="submit3" value="Submit" style="background-color: #7a86b8; width: 50%; padding: .5rem; margin-bottom: 1rem; cursor: pointer; font-weight: 600; color: white;">
</form>

<?php
if ( isset($_POST["submit3"]) ) {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_SPECIAL_CHARS);
    $phone = filter_var($_POST["phone"], FILTER_SANITIZE_SPECIAL_CHARS);
    echo "Email: " . $email;
    echo "<br>", "Phone: " . $phone;
}
echo "<hr>";

?>