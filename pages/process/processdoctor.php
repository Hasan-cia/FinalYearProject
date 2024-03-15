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


$result = $mysqli->query("SELECT * FROM department");
$dep_name = [];
while ($row = $result->fetch_assoc()) {
    $dep_name[] = $row;
}


if (isset($_POST['submit'])) {
    $salutation = $_POST['salutation'];
    $doctor_name = $_POST['doctor_name'];
    $doc_mobile_no = $_POST['doc_mobile_no'];
    $email = $_POST['email'];
    $designation = $_POST['designation'];
    $dep_name = $_POST['dep_name'];
    $speacialist = $_POST['speacialist'];
    $qualification = $_POST['qualification'];
    $address = $_POST['address'];
    $hospital = $_POST['hospital'];
    $comission = $_POST['comission'];
    $status = $_POST['status'];

    // Concatenate salutation and doctor name
    $full_name = $salutation . '. ' . $doctor_name;


    $mysqli->query("INSERT INTO doctors (salutation , doctor_name, full_name, doc_mobile_no, email, designation, dep_name, speacialist, qualification, address, hospital, comission, status) VALUES ('$salutation', '$doctor_name','$full_name', '$doc_mobile_no', '$email', '$designation', '$dep_name', '$speacialist', '$qualification', '$address', '$hospital', '$comission', '$status')") or die($mysqli->error);
    

    $_SESSION['message'] = "Record has been added successfully!";
    $_SESSION['msg_qualification'] = "success";

    header("Location: ../doctor.php");
}


if (isset($_POST['update'])) {
    $doc_id = $_POST['doc_id'];
    $salutation = $_POST['salutation'];
    $doctor_name = $_POST['doctor_name'];
    $doc_mobile_no = $_POST['doc_mobile_no'];
    $email = $_POST['email'];
    $designation = $_POST['designation'];
    $dep_name = $_POST['dep_name'];
    $speacialist = $_POST['speacialist'];
    $qualification = $_POST['qualification'];
    $address = $_POST['address'];
    $hospital = $_POST['hospital'];
    $comission = $_POST['comission'];
    $status = $_POST['status'];

      // Concatenate salutation and doctor name
      $full_name = $salutation . '. ' . $doctor_name;

    $mysqli->query("UPDATE doctors SET salutation='$salutation' , doctor_name='$doctor_name' ,  full_name='$full_name' ,   doc_mobile_no = '$doc_mobile_no' , email='$email', designation='$designation' ,  dep_name = '$dep_name' , speacialist='$speacialist', qualification='$qualification' ,   address = '$address' , hospital ='$hospital' , comission ='$comission' , status ='$status' WHERE doc_id=$doc_id") or die($mysqli->error);

    $_SESSION['message'] = "Record has been updated successfully!";
    $_SESSION['msg_qualification'] = "warning";

    header("Location: ../doctor.php");
}


if (isset($_GET['delete'])) {
    $doc_id = $_GET['delete'];

    $mysqli->query("DELETE FROM doctors WHERE doc_id=$doc_id") or die($mysqli->error);

    $_SESSION['message'] = "Record has been deleted successfully!";
    $_SESSION['msg_qualification'] = "success";

    header("Location: ../doctor.php");
}
