<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['pausername'])) {
    header("Location: patientlogin.php");
}

if (isset($_POST['submit'])) {
    $pausername = $_POST['pausername'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM `patient_login` WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO `patient` (pausername, email, password)
					VALUES ('$pausername', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Wow! User Registration Completed.')</script>";
                $pausername = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
                header("Location: adminlogin.php");
            } else {
                echo "<script>alert('Woops! Something Wrong Went.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Already Exists.')</script>";
        }
    } else {
        echo "<script>alert('Password Not Matched.')</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="../../assets/css/login.css">
    <title>VitaLab | Sign Up</title>
</head>

<body>

    <div class="wrapper">
        <div class="logo">
            <img src="../../assets/img/logo1.png" alt="">
        </div>
        <div class="text-center mt-4 name">
        Sign Up
        </div>
        <form action="" method="POST" class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="pausername" placeholder="Username" value="<?php echo $pausername; ?>" required>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>" required>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="password" name="password" placeholder="Create Password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="cpassword" placeholder="Confirm Password" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
            <button type="submit" name="submit" class="btn mt-3">Create Account</button>
        </form>
    </div>

    <script src="../../assets/js/jquery-3.6.1.min.js"></script>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>