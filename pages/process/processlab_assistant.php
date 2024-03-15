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


$result = $mysqli->query("SELECT * FROM blood_groups");
$blood_group_name = [];
while ($row = $result->fetch_assoc()) {
    $blood_group_name[] = $row;
}


if (isset($_POST['submit'])) {
    $pat_id = $POST['pat_id'];
    $pa_first_name = $_POST['pa_first_name'];
    $pa_last_name = $_POST['pa_last_name'];
    $pa_mobile_no = $_POST['pa_mobile_no'];
    $email = $_POST['email'];
    $blood_group_name = $_POST['blood_group_name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $status = $_POST['status'];

    $image = $_FILES["image"]["name"];
    $target_dir = "assets/img/";
    $target_file = $target_dir . basename($image);
    
    // Upload image to the server
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    
    // Concatenate pa_first_name and doctor name
    $pa_full_name = $pa_first_name . '. ' . $pa_last_name;


    $mysqli->query("INSERT INTO patient (pat_id , pa_first_name , pa_last_name, pa_full_name, pa_mobile_no, image, email, blood_group_name, gender, dob, age, address, status, status) VALUES ('$pat_id' , '$pa_first_name', '$pa_last_name','$pa_full_name', '$pa_mobile_no', '$target_file', '$email', '$blood_group_name', '$gender', '$dob', '$age', '$address', '$status', '$status')") or die($mysqli->error);
    

    $_SESSION['message'] = "Record has been added successfully!";
    $_SESSION['msg_dob'] = "success";

    header("Location: ../patient.php");
}


if (isset($_POST['update'])) {
    $pat_id = $_POST['pat_id'];
    $pa_first_name = $_POST['pa_first_name'];
    $pa_last_name = $_POST['pa_last_name'];
    $pa_mobile_no = $_POST['pa_mobile_no'];
    $image = $_POST['image'];
    $email = $_POST['email'];
    $blood_group_name = $_POST['blood_group_name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $status = $_POST['status'];

      // Concatenate pa_first_name and doctor name
      $pa_full_name = $pa_first_name . '. ' . $pa_last_name;

    $mysqli->query("UPDATE patient SET pa_first_name='$pa_first_name' , pa_last_name='$pa_last_name' ,  pa_full_name='$pa_full_name' ,   pa_mobile_no = '$pa_mobile_no' , image='$image', email='$email' ,  blood_group_name = '$blood_group_name' , gender='$gender', dob='$dob' ,   age = '$age' , address ='$address' , status ='$status' , status ='$status' WHERE pat_id=$pat_id") or die($mysqli->error);

    $_SESSION['message'] = "Record has been updated successfully!";
    $_SESSION['msg_dob'] = "warning";

    header("Location: ../patient.php");
}


if (isset($_GET['delete'])) {
    $doc_id = $_GET['delete'];

    $mysqli->query("DELETE FROM patient WHERE doc_id=$doc_id") or die($mysqli->error);

    $_SESSION['message'] = "Record has been deleted successfully!";
    $_SESSION['msg_dob'] = "success";

    header("Location: ../patient.php");
}
