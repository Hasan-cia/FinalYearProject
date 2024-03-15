<?php
include 'dbconn.php';

// SQL query to get the count of books
$sql = "SELECT COUNT(in_id) AS invoice_count FROM invoice";

$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();

    echo $row['invoice_count'];
} else {
    echo "Error: " . $conn->error;
}

// Close the connection
$conn->close();
