<?php
$connection = mysqli_connect('localhost', 'root', '', 'travel_book');

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT guests, COUNT(*) AS count FROM book_form GROUP BY guests";
$result = mysqli_query($connection, $query);

if (!$result) {
    die("Query execution failed: " . mysqli_error($connection));
}

$guestsData = array();
while ($row = mysqli_fetch_assoc($result)) {
    $guestsData[$row['guests']] = $row['count'];
}

mysqli_close($connection);
?>
