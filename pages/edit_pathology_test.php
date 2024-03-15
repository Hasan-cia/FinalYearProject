<?php

include 'process/processpathology_test.php';
include 'include/header.php';

if (isset($_GET['pt_id'])) {
    $pt_id = $_GET['pt_id'];

    $result = $mysqli->query("SELECT * FROM pathology_test WHERE pt_id = $pt_id");

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $test_number = $row['test_number'];
        $dep_name = $row['dep_name'];
        $test_name = $row['test_name'];
        $test_description = $row['test_description'];
        $charges = $row['charges'];
        $carry_out = $row['carry_out'];
        $type = $row['type'];
        $status = $row['status'];
    } else {
        header("Location: pathology_test.php");
    }
} else {
    header("Location: pathology_test.php");
}

$result_department = $mysqli->query("SELECT * FROM department");
$department = [];
while ($row_dep_name = $result_department->fetch_assoc()) {
    $department[] = $row_dep_name;
}
?>


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
                        <h4 class="page-title">Edit Pathology Test</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <form action="process/processpathology_test.php" method="POST">
                                <input type="hidden" name="pt_id" value="<?php echo $pt_id; ?>">
                                <input type="hidden" name="test_number" value="<?php echo $test_number; ?>">

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Test Number</label>
                                            <input type="text" name="test_number" class="form-control" value="<?php echo $test_number; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Department</label>
                                            <select name="dep_name" class="form-control">
                                                <?php foreach ($department as $dep_name_item) : ?>
                                                    <option value="<?php echo $dep_name_item['dep_name']; ?>" <?php if ($dep_name == $dep_name_item['dep_name']) echo 'selected'; ?>>
                                                        <?php echo $dep_name_item['dep_name']; ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Test Name</label>
                                            <input type="text" name="test_name" class="form-control" value="<?php echo $test_name; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Test Description</label>
                                            <input type="text" name="test_description" class="form-control" value="<?php echo $test_description; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Charges</label>
                                            <input type="number" name="charges" class="form-control" value="<?php echo $charges; ?>" pattern="[0-9]+" title="Please enter numbers only">
                                        </div>

                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Carry Out</label>
                                            <select name="carry_out" class="form-control">
                                                <option value="Today" <?php if ($carry_out == 'Today') echo 'selected'; ?>>Today</option>
                                                <option value="Next Day" <?php if ($carry_out == 'Next Day') echo 'selected'; ?>>Next Day</option>
                                                <option value="One Week" <?php if ($carry_out == 'One Week') echo 'selected'; ?>>One Week</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Type</label>
                                            <select name="type" class="form-control">
                                                <option class="text-center">---Select Type---</option>
                                                <option value="Routine" <?php if ($type == 'Routine') echo 'selected'; ?>>Routine</option>
                                                <option value="Special" <?php if ($type == 'Special') echo 'selected'; ?>>Special</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="display-block">Status</label>
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