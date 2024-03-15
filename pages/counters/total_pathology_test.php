<?php
include 'dbconn.php';

// SQL query to get the count of books
$sql = "SELECT COUNT(pt_id) AS pathology_test_count FROM pathology_test";

$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();

    echo $row['pathology_test_count'];
} else {
    echo "Error: " . $conn->error;
}

// Close the connection
$conn->close();
