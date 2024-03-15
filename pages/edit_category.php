<?php

include 'process/processcategory.php';

if (!isset($_SESSION['username'])) {
    header("Location: login/adminlogin.php");
}

if (isset($_GET['id'])) {
    $cat_id = $_GET['id'];

    $result = $mysqli->query("SELECT * FROM categories WHERE cat_id = $cat_id");

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $category = $row['category'];
        $short_name = $row['short_name'];
    } else {
        header("Location: categories.php");
    }
} else {
    header("Location: categories.php");
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
                        <h4 class="page-title">Edit Category</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <form action="process/processcategory.php" method="POST">
                                <input type="hidden" name="cat_id" value="<?php echo $cat_id; ?>">

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <input type="text" name="category" class="form-control" value="<?php echo $category; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Short Name</label>
                                            <input type="text" name="short_name" class="form-control" value="<?php echo $short_name; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>
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