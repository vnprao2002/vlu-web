<?php
$connection = mysqli_connect('localhost', 'root', '', 'travel_book');

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT MONTH(arrivals) AS month, COUNT(*) AS count FROM book_form WHERE YEAR(arrivals) = 2023 GROUP BY MONTH(arrivals)";
$result = mysqli_query($connection, $query);

if (!$result) {
    die("Query execution failed: " . mysqli_error($connection));
}

$bookingData = array();
while ($row = mysqli_fetch_assoc($result)) {
    $bookingData[$row['month']] = $row['count'];
}

mysqli_close($connection);
?>
