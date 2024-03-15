<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$test_name = $_POST['test_name'];

$result = $conn->query("SELECT * FROM pathology_test WHERE test_name='$test_name'");

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode($row);
} else {
    echo json_encode([]);
}

$conn->close();