<?php
include 'include/header.php';
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
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Pathalogy Test</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="add_pathalogy_test.php" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add New Test</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <?php
                            $mysqli = new mysqli('localhost', 'root', '', 'lab') or die(mysqli_error($mysqli));
                            $result = $mysqli->query("select * from pathology_test") or  die($mysqli->error);
                            // pre_r($result);
                            ?>
                            <table class="table table-border table-striped custom-table">
                                <thead>
                                    <tr>
                                    <th>PT ID</th>
                                        <th>Test Number</th>
                                        <th>Department</th>
                                        <th>Test Name</th>
                                        <th class=" text-center">Test Description</th>
                                        <th>Charges</th>
                                        <th>Carry Out</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = $result->fetch_assoc()) { ?>
                                        <tr>
                                            <td><?php echo $row['pt_id']; ?></td>
                                            <td><?php echo $row['test_number']; ?></td>
                                            <td><?php echo $row['dep_name']; ?></td>
                                            <td><?php echo $row['test_name']; ?></td>
                                            <td><?php echo $row['test_description']; ?></td>
                                            <td><?php echo $row['charges']; ?></td>
                                            <td><?php echo $row['carry_out']; ?></td>
                                            <td><?php echo $row['type']; ?></td>
                                            <td>
                                                <?php
                                                $status = $row['status'];
                                                if ($status == 'active') {
                                                    echo '<span class="custom-badge status-green">Active</span>';
                                                } elseif ($status == 'inactive') {
                                                    echo '<span class="custom-badge status-red">Inactive</span>';
                                                }
                                                ?>
                                            </td>
                                            <td class=" text-center">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="edit_pathology_test.php?pt_id=<?php echo $row['pt_id']; ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="process/processpathology_test.php?delete=<?php echo $row['pt_id']; ?>"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar-overlay" data-reff=""></div>
            <!-- footer -->
            <?php include 'include/footer.php'; ?>