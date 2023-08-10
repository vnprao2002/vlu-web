<?php
session_start(); // Start the session to use session variables

$connection = mysqli_connect('localhost', 'root', '', 'travel_book');

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $request = "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) 
                VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

    if (mysqli_query($connection, $request)) {
        $_SESSION['message'] = 'Booking successful!';
        header('location: book.php');
    } else {
        $_SESSION['message'] = 'Booking failed. Please try again.';
        header('location: book.php');
    }
    exit(); // Important to exit after header redirections.
}
?>
