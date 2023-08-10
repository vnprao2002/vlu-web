<?php
$connection = mysqli_connect('localhost', 'root', '', 'travel_book');

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Set character encoding for the database connection
mysqli_set_charset($connection, 'utf8');

$query = "SELECT * FROM book_form";
$result = mysqli_query($connection, $query);

if (!$result) {
    die("Query execution failed: " . mysqli_error($connection));
}

// File name for download
$filename = "booking_data_" . date('Y-m-d') . ".csv";

// Create the "uploads" directory if it doesn't exist
if (!is_dir('uploads')) {
    mkdir('uploads');
}

// Create a file pointer
$file = fopen('uploads/' . $filename, 'w');

// Add BOM to specify UTF-8 encoding for the CSV file
fputs($file, $bom =( chr(0xEF) . chr(0xBB) . chr(0xBF) ));

// Set column headers for the CSV file
$headers = array('ID', 'Họ tên', 'Email', 'Số điện thoại', 'Địa chỉ', 'Địa điểm', 'Số khách', 'Ngày đến', 'Ngày đi');
fputcsv($file, $headers);

// Fetch and write data to the CSV file
while ($row = mysqli_fetch_assoc($result)) {
    $data = array(
        $row['id'],
        $row['name'],
        $row['email'],
        $row['phone'],
        $row['address'],
        $row['location'],
        $row['guests'],
        $row['arrivals'],
        $row['leaving']
    );
    fputcsv($file, $data);
}

// Close the file pointer
fclose($file);

// Download the CSV file
header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename="' . $filename . '"');
readfile('uploads/' . $filename);
exit();
?>
