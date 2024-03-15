

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
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Manage Doctor</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="add_doctor.php" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Doctor</a>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
						<?php
                            $mysqli = new mysqli('localhost', 'root', '', 'lab') or die(mysqli_error($mysqli));
                            $result = $mysqli->query("select * from doctors") or  die($mysqli->error);
                            // pre_r($result);
                            ?>
							<table class="table table-border table-striped custom-table datatable mb-0">
								<thead>
									<tr>
										<th>Doc Id</th>
										<th>Doctor</th>
                                        <th>Designation</th>
                                        <th>Mobile Number</th>
                                        <th>Department</th>
                                        <th>Hospital Name</th>
                                        <th>Commission</th>
                                        <th>Status</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
                                    <?php while ($row = $result->fetch_assoc()) { ?>
                                        <tr>
                                            <td><?php echo $row['doc_id']; ?></td>
                                            <td><?php echo $row['full_name']; ?></td>
                                            <td><?php echo $row['designation']; ?></td>
                                            <td><?php echo $row['doc_mobile_no']; ?></td>
                                            <td><?php echo $row['dep_name']; ?></td>
											<td><?php echo $row['hospital']; ?></td>
											<td><?php echo $row['comission']; ?></td>
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
                                                        <a class="dropdown-item" href="edit_doctor.php?doc_id=<?php echo $row['doc_id']; ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="process/processdoctor.php?delete=<?php echo $row['doc_id']; ?>"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
		<div id="delete_patient" class="modal fade delete-modal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body text-center">
						<img src="../assets/img/sent.png" alt="" width="50" height="46">
						<h3>Are you sure want to delete this Patient?</h3>
						<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
							<button type="submit" class="btn btn-danger">Delete</button>
						</div>
					</div>
				</div>
			</div>
			
		</div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <!-- footer -->
    <?php include 'include/footer.php'; ?>