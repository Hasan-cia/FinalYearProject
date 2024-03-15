<?php
include 'process/processtest_particulars.php';
include 'include/header.php';


$result_pathology_test = $mysqli->query("SELECT * FROM pathology_test");
$pathology_test = [];
while ($row_test_name = $result_pathology_test->fetch_assoc()) {
    $pathology_test[] = $row_test_name;
}

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
                        <h4 class="page-title">Add Test Particular</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <form action="process/processtest_particulars.php" method="POST">
                            <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-4 col-form-label">Patient Number</label>
                                    <div class="col-md-6">
                                        <input type="text" name="test_number" id="test_number" class="form-control">
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-4 col-form-label">Patient Name</label>
                                    <div class="col-md-6">
                                        <input type="text" name="test_number" id="test_number" class="form-control">
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-4 col-form-label">Patient Gender</label>
                                    <div class="col-md-6">
                                        <input type="text" name="test_number" id="test_number" class="form-control">
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-4 col-form-label">Patient Age</label>
                                    <div class="col-md-6">
                                        <input type="text" name="test_number" id="test_number" class="form-control">
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-4 col-form-label">Test Name</label>
                                    <div class="col-md-6">
                                        <input type="text" name="test_number" id="test_number" class="form-control">
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-4 col-form-label">Referred By</label>
                                    <div class="col-md-6">
                                        <input type="text" name="test_number" id="test_number" class="form-control">
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-4 col-form-label">Collection Date</label>
                                    <div class="col-md-6">
                                        <input type="text" name="test_number" id="test_number" class="form-control">
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-4 col-form-label">Reported On</label>
                                    <div class="col-md-6">
                                        <input type="text" name="test_number" id="test_number" class="form-control">
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-4">
                                        <h5 class="card-title">Investigation</h5>
                                    </div>
                                    <div class="col-md-2">
                                        <h5 class="card-title">Result</h5>
                                    </div>
                                    <div class="col-md-2">
                                        <h5 class="card-title text-center">Reference Value</h5>
                                    </div>
                                    <div class="col-md-2">
                                        <h5 class="card-title text-center">Unit</h5>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-4 col-form-label">Hemoglobin (Hb)</label>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control"  readonly>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-4 col-form-label">Total RBC count</label>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control"  readonly>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-4 col-form-label">Packed Cell Volume (PCV) </label>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control"  readonly>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-4 col-form-label">Mean Corpuscular Volume (MCV)</label>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control"  readonly>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-4 col-form-label">MCH</label>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control"  readonly>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-4 col-form-label">MCHC</label>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control"  readonly>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-4 col-form-label">RDW</label>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control"  readonly>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-4 col-form-label">Total WBC count</label>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control"  readonly>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-4 col-form-label">Neutrophils</label>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control"  readonly>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-4 col-form-label">Lymphocytes</label>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control"  readonly>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-4 col-form-label">Eosinophils</label>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control"  readonly>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-4 col-form-label">Monocytes</label>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control"  readonly>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-4 col-form-label">Basophils</label>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control"  readonly>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-4 col-form-label">Platelet Count</label>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control"  readonly>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="cbc_hb" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar-overlay" data-reff=""></div>
            <!-- footer -->
            <?php include 'include/footer.php'; ?>