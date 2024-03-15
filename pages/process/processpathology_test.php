<?php

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

$result = $mysqli->query("SELECT * FROM department");
$dep_name = [];
while ($row = $result->fetch_assoc()) {
    $dep_name[] = $row;
}


if (isset($_POST['submit'])) {
    $dep_name = $_POST['dep_name'];
    $test_name = $_POST['test_name'];
    $test_description = $_POST['test_description'];
    $charges = $_POST['charges'];
    $carry_out = $_POST['carry_out'];
    $type = $_POST['type'];
    $status = $_POST['status'];
    
    // Generate the next auto-incrementing test number
    $latest_test_number_query = "SELECT test_number FROM pathology_test ORDER BY pt_id DESC LIMIT 1";
    $latest_test_number_result = $mysqli->query($latest_test_number_query);
    $latest_test_number = $latest_test_number_result->fetch_assoc();
    $latest_test_number = $latest_test_number['test_number'];

    $latest_test_number_parts = explode('-', $latest_test_number);
    $latest_test_number_number = (int) $latest_test_number_parts[1];

    $new_test_number_number = $latest_test_number_number + 1;
    $new_test_number = 'TEST-' . sprintf('%03d', $new_test_number_number);

    // Insert the new record with the generated test number
    $mysqli->query("INSERT INTO pathology_test (test_number, dep_name, test_name, test_description, charges, carry_out, type, status) VALUES ('$new_test_number', '$dep_name', '$test_name', '$test_description', '$charges', '$carry_out', '$type', '$status')") or die($mysqli->error);

    $_SESSION['message'] = "Record has been added successfully!";
    $_SESSION['msg_type'] = "success";

    header("Location: ../pathology_test.php");
}


if (isset($_POST['update'])) {
    $pt_id = $_POST['pt_id'];
    $test_number = $_POST['test_number'];
    $dep_name = $_POST['dep_name'];
    $test_name = $_POST['test_name'];
    $test_description = $_POST['test_description'];
    $charges = $_POST['charges'];
    $carry_out = $_POST['carry_out'];
    $type = $_POST['type'];
    $status = $_POST['status'];
    
    $mysqli->query("UPDATE pathology_test SET test_number='$test_number', dep_name='$dep_name', test_name='$test_name', test_description='$test_description', charges='$charges', carry_out='$carry_out', type='$type', status='$status' WHERE pt_id=$pt_id") or die($mysqli->error);

    $_SESSION['message'] = "Record has been updated successfully!";
    $_SESSION['msg_type'] = "warning";

    header("Location: ../pathology_test.php");
}


if (isset($_GET['delete'])) {
    $pt_id = $_GET['delete'];
    
    $mysqli->query("DELETE FROM pathology_test WHERE pt_id=$pt_id") or die($mysqli->error);

    $_SESSION['message'] = "Record has been deleted successfully!";
    $_SESSION['msg_type'] = "success";

    header("Location: ../pathology_test.php");
}
?>

