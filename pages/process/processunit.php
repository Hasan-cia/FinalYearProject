<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab";

$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if (isset($_POST['submit'])) {
    $unit = $_POST['unit'];
    $unit_description = $_POST['unit_description']; 
    $mysqli->query("INSERT INTO unit (unit, unit_description) VALUES ('$unit', '$unit_description')") or die($mysqli->error);

    $_SESSION['message'] = "Record has been added successfully!";
    $_SESSION['msg_type'] = "success";
    header("Location: ../units.php");
}

if (isset($_POST['update'])) {
    $un_id = $_POST['un_id'];
    $unit = $_POST['unit'];
    $unit_description = $_POST['unit_description'];
    $mysqli->query("UPDATE unit SET unit='$unit', unit_description='$unit_description' WHERE un_id=$un_id") or die($mysqli->error);

    $_SESSION['message'] = "Record has been updated successfully!";
    $_SESSION['msg_type'] = "warning";
    header("Location: ../units.php");
}


if (isset($_GET['delete'])) {
    $un_id = $_GET['delete'];
    $mysqli->query("DELETE FROM unit WHERE un_id=$un_id") or die($mysqli->error);

    $_SESSION['message'] = "Record has been deleted successfully!";
    $_SESSION['msg_type'] = "success";
    header("Location: ../units.php");
}
?>
