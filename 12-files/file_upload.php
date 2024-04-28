<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Upload - PHP</title>
</head>
<body>

<h1>File Upload</h1>

<h3>Select an image to upload:</h3>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data" style="width: 50%; display: flex; flex-direction: column;">
    <input type="file" name="file" style="padding: .5rem; margin-bottom: 1rem;">
    <input type="submit" name="submit" value="Upload" style="background-color: #7a86b8; padding: .5rem; margin-bottom: 1rem; cursor: pointer; font-weight: 600; color: white;">
</form>

<?php

$allowed_file_extensions = ["png", "jpg", "jpeg", "gif"];
if (isset($_POST["submit"])) {
    if (!empty($_FILES["file"]["name"])) {
        // print_r($_FILES);

        $file_name = $_FILES["file"]["name"];
        $file_size = $_FILES["file"]["size"];
        $file_temporary_name = $_FILES["file"]["tmp_name"];
        $target_directory = "../uploads/${file_name}";

        // Get File Extension
        $file_extension = explode(".", $file_name);
        $file_extension = strtolower(end($file_extension));

        // Validate File Extension
        if (!in_array($file_extension, $allowed_file_extensions)) {
            $alert = '<p style="font-weight: 600; font-size: 1rem; color: red;">This file type is not allowed! Only ".png, .jpg, .jpeg, .gif" file types are allowed!</p>';
        } else {
            if ($file_size >= 1000000) {
                $alert = "<p style='font-weight: 600; font-size: 1rem; color: red;'>File is too large!</p>";
            } else {
                move_uploaded_file($file_temporary_name, $target_directory);
                $alert = "<p style='font-weight: 600; font-size: 1rem; color: #09b009;'>File successfully uploaded!</p>";
            }
        }
    } else {
        $alert = "<p style='font-weight: 600; font-size: 1rem; color: red;'>Please choose a file!</p>";
    }
}

?>

<?php echo $alert ?? NULL; ?>

</body>
</html>
