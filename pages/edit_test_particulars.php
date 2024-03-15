<?php

include 'process/processtest_particulars.php';

if (!isset($_SESSION['username'])) {
    header("Location: login/adminlogin.php");
}

if (isset($_GET['tp_id'])) {
    $tp_id = $_GET['tp_id'];

    $result = $mysqli->query("SELECT * FROM test_particulars WHERE tp_id = $tp_id");

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $test_number = $row['test_number'];
        $description = $row['description'];
        $particulars = $row['particulars'];
        $units = $row['units'];
        $male_value =  $row['male_value'];
        $female_value =  $row['female_value'];
        $part_heading =  $row['part_heading'];
    } else {
        header("Location: test_particulars.php");
    }
} else {
    header("Location: test_particulars.php");
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
                        <h4 class="page-title">Edit Pathalogy Test</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <form action="process/processtest_particulars.php" method="POST">
                                <input type="hidden" name="tp_id" value="<?php echo $tp_id; ?>">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Test Particulars</label>
                                                    <input type="text" name="particulars" class="form-control" value="<?php echo $particulars; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Units</label>
                                                    <input type="text" name="units" class="form-control" value="<?php echo $units; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Male Value</label>
                                                    <input type="text" name="male_value" class="form-control" value="<?php echo $male_value; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Female Value</label>
                                                    <input type="text" name="female_value" class="form-control" value="<?php echo $female_value; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Part Heading</label>
                                                    <input type="text" name="part_heading" class="form-control" value="<?php echo $part_heading; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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