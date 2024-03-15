<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}



if (isset($_POST['submit'])) {
    $blood_group_name = $_POST['blood_group_name'];
    $description = $_POST['description'];
    
    $mysqli->query("INSERT INTO blood_groups (blood_group_name, description) VALUES ('$blood_group_name', '$description')") or die($mysqli->error);

    $_SESSION['message'] = "Record has been added successfully!";
    $_SESSION['msg_type'] = "success";

    header("Location: ../blood_groups.php");
}
