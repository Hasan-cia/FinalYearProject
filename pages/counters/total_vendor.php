<?php
include 'dbconn.php';

// SQL query to get the count of books
$sql = "SELECT COUNT(ven_id) AS vendor_count FROM vendor";

$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();

    echo $row['vendor_count'];
} else {
    echo "Error: " . $conn->error;
}

// Close the connection
$conn->close();
