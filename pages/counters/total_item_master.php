<?php
include 'dbconn.php';

// SQL query to get the count of books
$sql = "SELECT COUNT(im_id) AS item_master_count FROM item_master";

$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();

    echo $row['item_master_count'];
} else {
    echo "Error: " . $conn->error;
}

// Close the connection
$conn->close();
