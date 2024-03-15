<?php
include 'dbconn.php';

// SQL query to get the count of books
$sql = "SELECT COUNT(doc_id) AS doctor_count FROM doctors";

$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();

    echo $row['doctor_count'];
} else {
    echo "Error: " . $conn->error;
}

// Close the connection
$conn->close();
