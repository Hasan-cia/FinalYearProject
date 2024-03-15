

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
                        <h4 class="page-title">Patients</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="add_patient.php" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Patient</a>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-striped custom-table">
								<thead>
									<tr>
										<th>Sr.No</th>
										<th>Patient Name</th>
										<th>Mr Number</th>
										<th>Mobile Number</th>
										<th>Birth Date</th>
                                        <th>Gender</th>
                                        <th>Age</th>
                                        <th>Status</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
                                        <td>1</td>
										<td><img width="28" height="28" src="../assets/img/user.jpg" class="rounded-circle m-r-5" alt=""> Jennifer Robinson</td>
										<td>MR0001</td>
										<td>(207) 808 8863</td>
										<td>1999-05-13</td>
										<td>Male</td>
                                        <td>25</td>
                                        <td>Active</td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="edit-patient.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
								
								</tbody>
							</table>
						</div>
					</div>
                </div>
            </div>
            <div class="sidebar-overlay" data-reff=""></div>
    <!-- footer -->
    <?php include 'include/footer.php'; ?>