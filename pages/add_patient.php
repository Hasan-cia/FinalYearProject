<?php
include 'process/processpatient.php';

$result_blood_groups = $mysqli->query("SELECT * FROM blood_groups");
$blood_groups = [];
while ($row_blood_group_name = $result_blood_groups->fetch_assoc()) {
    $blood_groups[] = $row_blood_group_name;
}

include 'include/header.php'; ?>

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
                        <h4 class="page-title">Add Patient</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>MR Number</label>
                                            <input type="text" name="r.mr.no" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" name="pa_first_name" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" name="pa_last_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Mobile Number</label>
                                            <input type="text" name="pa_mobile_no" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Patient Photo</label>
                                            <div class="profile-upload">
                                                <div class="upload-img">
                                                    <img alt="" src="../assets/img/user.jpg">
                                                </div>
                                                <div class="upload-input">
                                                    <input type="file" name="image" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Blood Group</label>
                                            <select name="blood_group_name" class="select form-control">
                                                <?php foreach ($blood_group_name as $blood_group_name) : ?>
                                                    <option class="text-center">------Select Blood Group------</option>
                                                    <option value="<?php echo $blood_group_name['blood_group_name']; ?>"><?php echo $blood_group_name['blood_group_name']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="select" name="gender">
                                                <option class="text-center">---Select Gender---</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <div class="cal-icon">
                                                <input type="text" name="dob" class="form-control datetimepicker">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Age</label>
                                            <input type="text" name="age" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="1"></textarea>
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
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <!-- footer -->
    <?php include 'include/footer.php'; ?>