<?php
include 'dbconn.php';

// SQL query to get the count of books
$sql = "SELECT COUNT(pat_id) AS patient_count FROM patient";

$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();

    echo $row['patient_count'];
} else {
    echo "Error: " . $conn->error;
}

// Close the connection
$conn->close();
