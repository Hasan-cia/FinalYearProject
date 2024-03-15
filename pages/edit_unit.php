<?php

include 'process/processunit.php';

if (!isset($_SESSION['username'])) {
    header("Location: login/adminlogin.php");
}

if (isset($_GET['un_id'])) {
    $un_id = $_GET['un_id'];

    $result = $mysqli->query("SELECT * FROM unit WHERE un_id = $un_id");

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $unit = $row['unit'];
        $unit_description = $row['unit_description'];
    } else {
        header("Location: units.php");
    }
} else {
    header("Location: units.php");
}

?>

<?php include 'include/header.php'; ?>

<body>
    <div class="main-wrapper">
        <?php
        // navbar
        include 'include/navbar.php';
        // sidebar
        include 'include/sidebar.php';
        ?>

        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Edit Unit</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <form action="process/processunit.php" method="POST">
                                <input type="hidden" name="un_id" value="<?php echo $un_id; ?>">

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Unit</label>
                                            <input type="text" name="unit" class="form-control" value="<?php echo $unit; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Unit Description</label>
                                            <input type="text" name="unit_description" class="form-control" value="<?php echo $unit_description; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">
                                        <button type="submit" name="update" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <!-- footer -->
    <?php include 'include/footer.php'; ?>