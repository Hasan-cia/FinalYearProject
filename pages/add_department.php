<?php
include 'process/processdepartment.php';
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
                    <div class="col-sm-12">
                        <h4 class="page-title">Add Department</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <form action="process/processdepartment.php" method="POST">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Department Name</label>
                                            <input type="text" name="dep_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Department Description</label>
                                            <input type="text" name="description" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="display-block">Status:</label>
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
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <!-- footer -->
    <?php include 'include/footer.php'; ?>