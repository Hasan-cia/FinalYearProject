<?php

include 'process/processdoctor.php';



if (isset($_GET['doc_id'])) {
    $doc_id = $_GET['doc_id'];

    $result = $mysqli->query("SELECT * FROM doctors WHERE doc_id = $doc_id");

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $salutation = $row['salutation'];
        $doctor_name = $row['doctor_name'];
        $doc_mobile_no = $row['doc_mobile_no'];
        $email = $row['email'];
        $designation = $row['designation'];
        $dep_name = $row['dep_name'];
        $speacialist = $row['speacialist'];
        $qualification = $row['qualification'];
        $address = $row['address'];
        $hospital = $row['hospital'];
        $comission = $row['comission'];
        $status = $row['status'];

        
    } else {
        header("Location: doctor.php");
    }
} else {
    header("Location: doctor.php");
}

$result_department = $mysqli->query("SELECT * FROM department");
$department = [];
while ($row_dep_name = $result_department->fetch_assoc()) {
    $department[] = $row_dep_name;
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
                        <h4 class="page-title">Edit Doctor</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <form action="process/processdoctor.php" method="POST">
                                <input type="hidden" name="doc_id" value="<?php echo $doc_id; ?>">

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Salutation</label>
                                            <select class="select" name="salutation">
                                                <option class="text-center">---Select Salutation---</option>
                                                <option value="Mr" <?php if ($salutation == 'Mr') echo 'selected'; ?>>Mr</option>
                                                <option value="Miss" <?php if ($salutation == 'Miss') echo 'selected'; ?>>Miss</option>
                                                <option value="Mrs" <?php if ($salutation == 'Mrs') echo 'selected'; ?>>Mrs</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Doctor Name</label>
                                            <input type="text" name="doctor_name" class="form-control" value="<?php echo $doctor_name; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Mobile Number</label>
                                            <input type="text" name="doc_mobile_no" class="form-control" value="<?php echo $doc_mobile_no; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Designation</label>
                                            <input type="text" name="designation" class="form-control" value="<?php echo $designation; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Department</label>
                                            <select name="dep_name" class="form-control">
                                                <?php foreach ($department as $dep_name_item) : ?>
                                                    <option class="text-center">---Select Department---</option>
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
                                            <label>Specialist</label>
                                            <input type="text" name="speacialist" class="form-control" value="<?php echo $speacialist; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Qualification</label>
                                            <input type="text" name="qualification" class="form-control" value="<?php echo $qualification; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" name="address" class="form-control" value="<?php echo $address; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Hospital</label>
                                            <input type="text" name="hospital" class="form-control" value="<?php echo $hospital; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Commission</label>
                                            <input type="text" name="comission" class="form-control" value="<?php echo $comission; ?>">
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