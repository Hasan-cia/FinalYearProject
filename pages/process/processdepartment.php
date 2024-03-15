<?php

$serverdep_name = "localhost";
$userdep_name = "root";
$password = "";
$dbdep_name = "lab";

$mysqli = new mysqli($serverdep_name, $userdep_name, $password, $dbdep_name);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if (isset($_POST['submit'])) {
    $dep_name = $_POST['dep_name'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $mysqli->query("INSERT INTO department (dep_name, description,status) VALUES ('$dep_name', '$description','$status')") or die($mysqli->error);

    $_SESSION['message'] = "Record has been added successfully!";
    $_SESSION['msg_type'] = "success";
    header("Location: ../department.php");
}


if (isset($_POST['update'])) {
    $dep_id = $_POST['dep_id'];
    $dep_dep_name = $_POST['dep_name'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    
    $mysqli->query("UPDATE department SET dep_name='$dep_name', description='$description' ,   status = '$status' WHERE dep_id=$dep_id") or die($mysqli->error);

    $_SESSION['message'] = "Record has been updated successfully!";
    $_SESSION['msg_type'] = "warning";

    header("Location: ../department.php");
}


if (isset($_GET['delete'])) {
    $dep_id = $_GET['delete'];
    
    $mysqli->query("DELETE FROM department WHERE dep_id=$dep_id") or die($mysqli->error);

    $_SESSION['message'] = "Record has been deleted successfully!";
    $_SESSION['msg_type'] = "success";

    header("Location: ../department.php");
}
?>
