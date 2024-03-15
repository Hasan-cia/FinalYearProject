<?php

include 'include/header.php'; ?>

<body>
    <div class="main-wrapper">

        <?php
        // navbar
        include 'include/navbar.php';
        // sidebar
        include 'include/sidebar.php';
        // session_message
        include 'include/session_message.php';
        ?>

        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Blood Groups</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="add_blood_group.php" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Blood Group</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <?php
                            $mysqli = new mysqli('localhost', 'root', '', 'lab') or die(mysqli_error($mysqli));
                            $result = $mysqli->query("SELECT * FROM blood_groups") or die($mysqli->error);
                            ?>

                            <table class="table table-border table-striped custom-table">
                                <thead>
                                    <tr>
                                    <th class="col-4">BG.Id</th>
                                    <th class="col-4">Blood Group Name</th>
                                    <th class="col-4">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = $result->fetch_assoc()) : ?>
                                        <tr>
                                            <td><?php echo $row['bg_id']; ?></td>
                                            <td><?php echo $row['blood_group_name']; ?></td>
                                            <td><?php echo $row['description']; ?></td>
                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar-overlay" data-reff=""></div>
            <!-- footer -->
            <?php include 'include/footer.php'; ?>