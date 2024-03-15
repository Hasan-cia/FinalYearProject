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
                        <h4 class="page-title">Test Particular</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="add_test_particular.php" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Test Particular</a>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
                        <?php
                            $mysqli = new mysqli('localhost', 'root', '', 'lab') or die(mysqli_error($mysqli));
                            $result = $mysqli->query("select * from test_particulars") or  die($mysqli->error);
                            // pre_r($result);
                            ?>
							<table class="table table-border table-striped custom-table datatable mb-0">
								<thead>
									<tr>
										<th>Par.No</th>
										<th>Test No</th>
                                        <th>Test Particulars</th>
                                        <th>Units</th>
                                        <th>Male Value</th>
                                        <th>Female Value</th>
                                        <th>Part Heading</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
                                <tbody>
                                    <?php while ($row = $result->fetch_assoc()) { ?>
                                        <tr>
                                            <td><?php echo $row['tp_id']; ?></td>
                                            <td><?php echo $row['test_number']; ?></td>
                                            <td><?php echo $row['particulars']; ?></td>
                                            <td><?php echo $row['units']; ?></td>
                                            <td><?php echo $row['male_value']; ?></td>
                                            <td><?php echo $row['female_value']; ?></td>
                                            <td><?php echo $row['part_heading']; ?></td>
                                            <td class=" text-center">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="edit_test_particulars.php?tp_id=<?php echo $row['tp_id']; ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="process/processtest_particulars.php?delete=<?php echo $row['tp_id']; ?>"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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

        </div>
        <div class="sidebar-overlay" data-reff=""></div>
            <!-- footer -->
            <?php include 'include/footer.php'; ?>