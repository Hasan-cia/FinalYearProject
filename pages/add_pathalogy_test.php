<?php
include 'process/processpathology_test.php';
include 'include/header.php';

$latest_test_number_query = "SELECT test_number FROM pathology_test ORDER BY pt_id DESC LIMIT 1";
$latest_test_number_result = $mysqli->query($latest_test_number_query);
$latest_test_number = $latest_test_number_result->fetch_assoc();
$latest_test_number = $latest_test_number ? $latest_test_number['test_number'] : 'TEST-000';

$latest_test_number_parts = explode('-', $latest_test_number);
$latest_test_number_number = isset($latest_test_number_parts[1]) ? (int) $latest_test_number_parts[1] : 0;

$new_test_number_number = $latest_test_number_number + 1;
$new_test_number = 'TEST-' . sprintf('%03d', $new_test_number_number);

$result_department = $mysqli->query("SELECT * FROM department");
$department = [];
while ($row_dep_name = $result_department->fetch_assoc()) {
    $department[] = $row_dep_name;
}
?>

<body>
    <div class="main-wrapper">
        <?php
        include 'include/navbar.php';
        include 'include/sidebar.php';
        ?>

        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Add Pathology Test</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <form action="process/processpathology_test.php" method="POST">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Test Number</label>
                                            <input type="text" name="test_number" class="form-control" value="<?php echo $new_test_number; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Department</label>
                                            <select name="dep_name" class="select text-center">
                                                    <option class="text-center">---Select Department---</option>
                                                <?php foreach ($department as $dep_name) : ?>
                                                    <option value="<?php echo $dep_name['dep_name']; ?>"><?php echo $dep_name['dep_name']; ?></option>
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
                                            <input type="text" name="test_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Test Description</label>
                                            <input type="text" name="test_description" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Charges</label>
                                            <input type="number" name="charges" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Carry Out</label>
                                            <select name="carry_out" class="select form-control">
                                                <option class="text-center">---Select Carry Out---</option>
                                                <option value="Today">Today</option>
                                                <option value="Next Day">Next Day</option>
                                                <option value="One Week">One Week</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                    <div class="form-group">
                                            <label>Type</label>
                                            <select name="type" class="select form-control">
                                                <option class="text-center">---Select Type---</option>
                                                <option value="Routine">Routine</option>
                                                <option value="Special">Special</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                    <div class="form-group">
                                            <label class="display-block">Status</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="status" value="active">
                                                <label class="form-check-label" for="status">Active</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="status" value="inactive">
                                                <label class="form-check-label" for="status">Inactive</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar-overlay" data-reff=""></div>
            <!-- footer -->
            <?php include 'include/footer.php'; ?>