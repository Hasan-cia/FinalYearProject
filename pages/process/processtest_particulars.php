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

$result = $mysqli->query("SELECT * FROM pathology_test");
$pathology_test = [];
while ($row = $result->fetch_assoc()) {
    $pathology_test[] = $row;
}


if (isset($_POST['submit'])) {
    $test_number = $_POST['test_number'];
    $description = $_POST['description'];
    $particulars = $_POST['particulars'];
    $units = $_POST['units'];
    $male_value = $_POST['male_value'];
    $female_value = $_POST['female_value'];
    $part_heading = $_POST['part_heading'];
    
    $mysqli->query("INSERT INTO test_particulars (test_number, description,particulars,units, male_value,female_value, part_heading) VALUES ('$test_number', '$description','$particulars','$units', '$male_value','$female_value','$part_heading')") or die($mysqli->error);

    $_SESSION['message'] = "Record has been added successfully!";
    $_SESSION['msg_type'] = "success";

    header("Location: ../test_particular.php");
}


if (isset($_POST['update'])) {
    $tp_id = $_POST['tp_id'];
    $particulars = $_POST['particulars'];
    $units = $_POST['units'];
    $male_value = $_POST['male_value'];
    $female_value = $_POST['female_value'];
    $part_heading = $_POST['part_heading'];
    
    $mysqli->query("UPDATE test_particulars SET    particulars = '$particulars' , units='$units', male_value='$male_value' ,  female_value = '$female_value' , part_heading='$part_heading' WHERE tp_id=$tp_id") or die($mysqli->error);

    $_SESSION['message'] = "Record has been updated successfully!";
    $_SESSION['msg_type'] = "warning";

    header("Location: ../test_particular.php");
}


if (isset($_GET['delete'])) {
    $tp_id = $_GET['delete'];
    
    $mysqli->query("DELETE FROM test_particulars WHERE tp_id=$tp_id") or die($mysqli->error);

    $_SESSION['message'] = "Record has been deleted successfully!";
    $_SESSION['msg_type'] = "success";

    header("Location: ../test_particular.php");
}
?>
