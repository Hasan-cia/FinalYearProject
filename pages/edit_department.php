<?php

include 'process/processdepartment.php';

if (!isset($_SESSION['username'])) {
    header("Location: login/adminlogin.php");
}

if (isset($_GET['dep_id'])) {
    $dep_id = $_GET['dep_id'];

    $result = $mysqli->query("SELECT * FROM department WHERE dep_id = $dep_id");

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $description = $row['description'];
        $status = $row['status'];
    } else {
        header("Location: department.php");
    }
} else {
    header("Location: department.php");
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
                        <h4 class="page-title">Edit Department</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <form action="process/processdepartment.php" method="POST">
                                <input type="hidden" name="dep_id" value="<?php echo $dep_id; ?>">

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Department Name</label>
                                            <input type="text" name="dep_name" class="form-control" value="<?php echo $dep_name; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Department Description</label>
                                            <input type="text" name="description" class="form-control" value="<?php echo $description; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="display-block">Status:</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="status" value="active" <?php if ($status == 'active') echo 'checked'; ?>>
                                                <label class="form-check-label" for="status">Active</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="status" value="inactive" <?php if ($status == 'inactive') echo 'checked'; ?>>
                                                <label class="form-check-label" for="status">Inactive</label>
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