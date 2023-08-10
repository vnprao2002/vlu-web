<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Establish connection to the database
    $connection = mysqli_connect('localhost', 'root', '', 'travel_book');

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Perform the delete operation
    $query = "DELETE FROM book_form WHERE id = $id";
    $result = mysqli_query($connection, $query);

    if ($result) {
        // Redirect back to the admin dashboard after successful deletion
        header('Location: admin_dashboard.php');
        exit();
    } else {
        die("Delete operation failed: " . mysqli_error($connection));
    }
} else {
    header('Location: admin_dashboard.php'); // Redirect back to the admin dashboard if no ID is provided
    exit();
}
?>
