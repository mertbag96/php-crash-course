<?php
global $connection;
include "inc/header.php";
?>

<?php
// Fetch data from the database
$sql = "SELECT * FROM feedbacks ORDER BY date DESC";
$result = mysqli_query($connection, $sql);
$feedbacks = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<?php
// Remove data from the database
if (isset($_POST["remove"])) {
    // Check id
    if (!empty($_POST["id"])) {
        // Remove from database
        $id = $_POST["id"];
        $remove = "DELETE FROM feedbacks WHERE id = '$id'";
        if (mysqli_query($connection, $remove)) {
            // Success
            header("Location: feedback.php");
        } else {
            // Error
            echo "Error: " . mysqli_error($connection);
        }
    }
}
?>

<div class="container d-flex flex-column align-items-center">

    <h2>Feedbacks</h2>

    <?php if (empty($feedbacks)) : ?>
    <p class="lead mt-3">There is no feedback!</p>
    <?php endif; ?>

    <?php foreach ($feedbacks as $feedback) : ?>
    <div class="card my-3 w-75">

        <div class="card-body text-center">

            <?php echo $feedback["body"]; ?>

            <div class="text-secondary mt-2 mb-3 fw-light">
                by <?php echo "<a href='mailto:" . $feedback["email"] ."' class='text-dark'>" . $feedback["name"] . "</a>"; ?>
                on <?php echo date("l, d.m.Y", strtotime($feedback["date"])); ?>
                at <?php echo date("H:i", strtotime($feedback["date"])); ?>
            </div>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <input type="hidden" name="id" value="<?php echo $feedback["id"]; ?>">
                <input type="submit" name="remove" value="Remove feedback" class="bg-danger text-white text-decoration border-0 rounded">
            </form>

        </div>

    </div>
    <?php endforeach; ?>

</div>

<?php include "inc/footer.php"; ?>

