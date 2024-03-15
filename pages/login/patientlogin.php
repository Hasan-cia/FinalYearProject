<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['pausername'])) {
    header("Location: ../patient/dashboardpa.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    print_r($email . " " . $password);

    $sql = "SELECT * FROM `patient_login` WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['pausername'] = $row['pausername'];
        header("Location: ../patient/dashboardst.php");
    } else {
        echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
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
    <title>VitaLab | Sign In</title>
</head>

<body>

    <div class="wrapper">
        <div class="logo">
            <img src="../../assets/img/logo1.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            Sign In
        </div>
        <form action="" method="POST" class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>" required>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" placeholder="Password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <button type="submit" name="submit" class="btn mt-3">Login</button>
        </form>
        <div class="text-center fs-6">
            <p>Don't have an account?<a href="patientcreate.php"> &nbsp; Sign Up</a></p>
            <a href="#">Forget your Password?</a>
        </div>
    </div>

    <script src="../../assets/js/jquery-3.6.1.min.js"></script>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>