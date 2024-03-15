

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
                        <h4 class="page-title">ledger</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="add_ledger_group.php" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i>Add Group</a>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-striped custom-table datatable mb-0">
								<thead>
									<tr>
										<th>Sr.No</th>
										<th>Ledger Group</th>
                                        <th>Under Group</th>
                                        <th>Trial Balance</th>
                                        <th>Profit & Loss</th>
                                        <th>Balance Sheet</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
                                        <td>1</td>
										<td>Bank Accounts</td>
                                        <td>Bank Accounts</td>
                                        <td>Debit</td>
                                        <td>None</td>
                                        <td>Debit</td>
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
        </div>
        <div class="sidebar-overlay" data-reff=""></div>
    <!-- footer -->
    <?php include 'include/footer.php'; ?>