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
                                    <label class="col-md-2 col-form-label">Test Name</label>
                                    <div class="col-md-8">
                                        <select name="test_name" id="test_name" class="select text-center" onchange="fetchTestDetails()">
                                            <option class="text-center">---Select Test Name---</option>
                                            <?php foreach ($pathology_test as $test_name) : ?>
                                                <option value="<?php echo $test_name['test_name']; ?>"><?php echo $test_name['test_name']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-2 col-form-label">Test Number</label>
                                    <div class="col-md-8">
                                        <input type="text" name="test_number" id="test_number" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-2 col-form-label">Department</label>
                                    <div class="col-md-8">
                                        <input type="text" name="dep_name" id="dep_name" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-2">
                                        <h5 class="card-title">Investigation</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="card-title text-center">Reference Value</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="card-title text-center">Unit</h5>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-2 col-form-label">Hemoglobin (Hb)</label>
                                    <div class="col-md-4">
                                        <input type="text" name="cbc_hb" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <select name="cbc_hb_unit" class="select form-control">
                                            <option class="text-center">---Select Unit---</option>
                                            <option value="g">g</option>
                                            <option value="g/dl">g/dl</option>
                                            <option value="g/L">g/L</option>
                                            <option value="mcg/dL">mcg/dL</option>
                                            <option value="mg/dL">mg/dL</option>
                                            <option value="mU/L">mU/L</option>
                                            <option value="ng/dL">ng/dL</option>
                                            <option value="nmol/L">nmol/L</option>
                                            <option value="pg">pg</option>
                                            <option value="U/L">U/L</option>
                                            <option value="%">%</option>
                                            <option value="fL">fL</option>
                                            <option value="cumm">cumm</option>
                                            <option value="mill/cumm">mill/cumm</option>
                                            <option value="Index">Index</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-2 col-form-label">Total RBC count</label>
                                    <div class="col-md-4">
                                        <input type="text" name="cbc_rbc" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <select name="cbc_rbc_unit" class="select form-control">
                                            <option class="text-center">---Select Unit---</option>
                                            <option value="g">g</option>
                                            <option value="g/dl">g/dl</option>
                                            <option value="g/L">g/L</option>
                                            <option value="mcg/dL">mcg/dL</option>
                                            <option value="mg/dL">mg/dL</option>
                                            <option value="mU/L">mU/L</option>
                                            <option value="ng/dL">ng/dL</option>
                                            <option value="nmol/L">nmol/L</option>
                                            <option value="pg">pg</option>
                                            <option value="U/L">U/L</option>
                                            <option value="%">%</option>
                                            <option value="fL">fL</option>
                                            <option value="cumm">cumm</option>
                                            <option value="mill/cumm">mill/cumm</option>
                                            <option value="Index">Index</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-2 col-form-label">Packed Cell Volume (PCV) </label>
                                    <div class="col-md-4">
                                        <input type="text" name="cbc_pcv" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <select name="cbc_pcv_unit" class="select form-control">
                                            <option class="text-center">---Select Unit---</option>
                                            <option value="g">g</option>
                                            <option value="g/dl">g/dl</option>
                                            <option value="g/L">g/L</option>
                                            <option value="mcg/dL">mcg/dL</option>
                                            <option value="mg/dL">mg/dL</option>
                                            <option value="mU/L">mU/L</option>
                                            <option value="ng/dL">ng/dL</option>
                                            <option value="nmol/L">nmol/L</option>
                                            <option value="pg">pg</option>
                                            <option value="U/L">U/L</option>
                                            <option value="%">%</option>
                                            <option value="fL">fL</option>
                                            <option value="cumm">cumm</option>
                                            <option value="mill/cumm">mill/cumm</option>
                                            <option value="Index">Index</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-2 col-form-label">Mean Corpuscular Volume (MCV)</label>
                                    <div class="col-md-4">
                                        <input type="text" name="cbc_mcv" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <select name="cbc_mcv_unit" class="select form-control">
                                            <option class="text-center">---Select Unit---</option>
                                            <option value="g">g</option>
                                            <option value="g/dl">g/dl</option>
                                            <option value="g/L">g/L</option>
                                            <option value="mcg/dL">mcg/dL</option>
                                            <option value="mg/dL">mg/dL</option>
                                            <option value="mU/L">mU/L</option>
                                            <option value="ng/dL">ng/dL</option>
                                            <option value="nmol/L">nmol/L</option>
                                            <option value="pg">pg</option>
                                            <option value="U/L">U/L</option>
                                            <option value="%">%</option>
                                            <option value="fL">fL</option>
                                            <option value="cumm">cumm</option>
                                            <option value="mill/cumm">mill/cumm</option>
                                            <option value="Index">Index</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-2 col-form-label">MCH</label>
                                    <div class="col-md-4">
                                        <input type="text" name="cbc_mch" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <select name="cbc_mch_unit" class="select form-control">
                                            <option class="text-center">---Select Unit---</option>
                                            <option value="g">g</option>
                                            <option value="g/dl">g/dl</option>
                                            <option value="g/L">g/L</option>
                                            <option value="mcg/dL">mcg/dL</option>
                                            <option value="mg/dL">mg/dL</option>
                                            <option value="mU/L">mU/L</option>
                                            <option value="ng/dL">ng/dL</option>
                                            <option value="nmol/L">nmol/L</option>
                                            <option value="pg">pg</option>
                                            <option value="U/L">U/L</option>
                                            <option value="%">%</option>
                                            <option value="fL">fL</option>
                                            <option value="cumm">cumm</option>
                                            <option value="mill/cumm">mill/cumm</option>
                                            <option value="Index">Index</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-2 col-form-label">MCHC</label>
                                    <div class="col-md-4">
                                        <input type="text" name="cbc_mchc" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <select name="cbc_mchc_unit" class="select form-control">
                                            <option class="text-center">---Select Unit---</option>
                                            <option value="g">g</option>
                                            <option value="g/dl">g/dl</option>
                                            <option value="g/L">g/L</option>
                                            <option value="mcg/dL">mcg/dL</option>
                                            <option value="mg/dL">mg/dL</option>
                                            <option value="mU/L">mU/L</option>
                                            <option value="ng/dL">ng/dL</option>
                                            <option value="nmol/L">nmol/L</option>
                                            <option value="pg">pg</option>
                                            <option value="U/L">U/L</option>
                                            <option value="%">%</option>
                                            <option value="fL">fL</option>
                                            <option value="cumm">cumm</option>
                                            <option value="mill/cumm">mill/cumm</option>
                                            <option value="Index">Index</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-2 col-form-label">RDW</label>
                                    <div class="col-md-4">
                                        <input type="text" name="cbc_rdw" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <select name="cbc_rdw_unit" class="select form-control">
                                            <option class="text-center">---Select Unit---</option>
                                            <option value="g">g</option>
                                            <option value="g/dl">g/dl</option>
                                            <option value="g/L">g/L</option>
                                            <option value="mcg/dL">mcg/dL</option>
                                            <option value="mg/dL">mg/dL</option>
                                            <option value="mU/L">mU/L</option>
                                            <option value="ng/dL">ng/dL</option>
                                            <option value="nmol/L">nmol/L</option>
                                            <option value="pg">pg</option>
                                            <option value="U/L">U/L</option>
                                            <option value="%">%</option>
                                            <option value="fL">fL</option>
                                            <option value="cumm">cumm</option>
                                            <option value="mill/cumm">mill/cumm</option>
                                            <option value="Index">Index</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-2 col-form-label">Total WBC count</label>
                                    <div class="col-md-4">
                                        <input type="text" name="cbc_wbc" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <select name="cbc_wbc_unit" class="select form-control">
                                            <option class="text-center">---Select Unit---</option>
                                            <option value="g">g</option>
                                            <option value="g/dl">g/dl</option>
                                            <option value="g/L">g/L</option>
                                            <option value="mcg/dL">mcg/dL</option>
                                            <option value="mg/dL">mg/dL</option>
                                            <option value="mU/L">mU/L</option>
                                            <option value="ng/dL">ng/dL</option>
                                            <option value="nmol/L">nmol/L</option>
                                            <option value="pg">pg</option>
                                            <option value="U/L">U/L</option>
                                            <option value="%">%</option>
                                            <option value="fL">fL</option>
                                            <option value="cumm">cumm</option>
                                            <option value="mill/cumm">mill/cumm</option>
                                            <option value="Index">Index</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-2 col-form-label">Neutrophils</label>
                                    <div class="col-md-4">
                                        <input type="text" name="cbc_neutrophils" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <select name="cbc_neutrophils_unit" class="select form-control">
                                            <option class="text-center">---Select Unit---</option>
                                            <option value="g">g</option>
                                            <option value="g/dl">g/dl</option>
                                            <option value="g/L">g/L</option>
                                            <option value="mcg/dL">mcg/dL</option>
                                            <option value="mg/dL">mg/dL</option>
                                            <option value="mU/L">mU/L</option>
                                            <option value="ng/dL">ng/dL</option>
                                            <option value="nmol/L">nmol/L</option>
                                            <option value="pg">pg</option>
                                            <option value="U/L">U/L</option>
                                            <option value="%">%</option>
                                            <option value="fL">fL</option>
                                            <option value="cumm">cumm</option>
                                            <option value="mill/cumm">mill/cumm</option>
                                            <option value="Index">Index</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-2 col-form-label">Lymphocytes</label>
                                    <div class="col-md-4">
                                        <input type="text" name="cbc_lymphocytes" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <select name="cbc_lymphocytes_unit" class="select form-control">
                                            <option class="text-center">---Select Unit---</option>
                                            <option value="g">g</option>
                                            <option value="g/dl">g/dl</option>
                                            <option value="g/L">g/L</option>
                                            <option value="mcg/dL">mcg/dL</option>
                                            <option value="mg/dL">mg/dL</option>
                                            <option value="mU/L">mU/L</option>
                                            <option value="ng/dL">ng/dL</option>
                                            <option value="nmol/L">nmol/L</option>
                                            <option value="pg">pg</option>
                                            <option value="U/L">U/L</option>
                                            <option value="%">%</option>
                                            <option value="fL">fL</option>
                                            <option value="cumm">cumm</option>
                                            <option value="mill/cumm">mill/cumm</option>
                                            <option value="Index">Index</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-2 col-form-label">Eosinophils</label>
                                    <div class="col-md-4">
                                        <input type="text" name="cbc_eosinophils" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <select name="cbc_eosinophils_unit" class="select form-control">
                                            <option class="text-center">---Select Unit---</option>
                                            <option value="g">g</option>
                                            <option value="g/dl">g/dl</option>
                                            <option value="g/L">g/L</option>
                                            <option value="mcg/dL">mcg/dL</option>
                                            <option value="mg/dL">mg/dL</option>
                                            <option value="mU/L">mU/L</option>
                                            <option value="ng/dL">ng/dL</option>
                                            <option value="nmol/L">nmol/L</option>
                                            <option value="pg">pg</option>
                                            <option value="U/L">U/L</option>
                                            <option value="%">%</option>
                                            <option value="fL">fL</option>
                                            <option value="cumm">cumm</option>
                                            <option value="mill/cumm">mill/cumm</option>
                                            <option value="Index">Index</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-2 col-form-label">Monocytes</label>
                                    <div class="col-md-4">
                                        <input type="text" name="cbc_monocytes" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <select name="cbc_monocytes_unit" class="select form-control">
                                            <option class="text-center">---Select Unit---</option>
                                            <option value="g">g</option>
                                            <option value="g/dl">g/dl</option>
                                            <option value="g/L">g/L</option>
                                            <option value="mcg/dL">mcg/dL</option>
                                            <option value="mg/dL">mg/dL</option>
                                            <option value="mU/L">mU/L</option>
                                            <option value="ng/dL">ng/dL</option>
                                            <option value="nmol/L">nmol/L</option>
                                            <option value="pg">pg</option>
                                            <option value="U/L">U/L</option>
                                            <option value="%">%</option>
                                            <option value="fL">fL</option>
                                            <option value="cumm">cumm</option>
                                            <option value="mill/cumm">mill/cumm</option>
                                            <option value="Index">Index</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-2 col-form-label">Basophils</label>
                                    <div class="col-md-4">
                                        <input type="text" name="cbc_basophils" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <select name="cbc_basophils_unit" class="select form-control">
                                            <option class="text-center">---Select Unit---</option>
                                            <option value="g">g</option>
                                            <option value="g/dl">g/dl</option>
                                            <option value="g/L">g/L</option>
                                            <option value="mcg/dL">mcg/dL</option>
                                            <option value="mg/dL">mg/dL</option>
                                            <option value="mU/L">mU/L</option>
                                            <option value="ng/dL">ng/dL</option>
                                            <option value="nmol/L">nmol/L</option>
                                            <option value="pg">pg</option>
                                            <option value="U/L">U/L</option>
                                            <option value="%">%</option>
                                            <option value="fL">fL</option>
                                            <option value="cumm">cumm</option>
                                            <option value="mill/cumm">mill/cumm</option>
                                            <option value="Index">Index</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-2 col-form-label">Platelet Count</label>
                                    <div class="col-md-4">
                                        <input type="text" name="cbc_pc" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <select name="cbc_pc_unit" class="select form-control">
                                            <option class="text-center">---Select Unit---</option>
                                            <option value="g">g</option>
                                            <option value="g/dl">g/dl</option>
                                            <option value="g/L">g/L</option>
                                            <option value="mcg/dL">mcg/dL</option>
                                            <option value="mg/dL">mg/dL</option>
                                            <option value="mU/L">mU/L</option>
                                            <option value="ng/dL">ng/dL</option>
                                            <option value="nmol/L">nmol/L</option>
                                            <option value="pg">pg</option>
                                            <option value="U/L">U/L</option>
                                            <option value="%">%</option>
                                            <option value="fL">fL</option>
                                            <option value="cumm">cumm</option>
                                            <option value="mill/cumm">mill/cumm</option>
                                            <option value="Index">Index</option>
                                        </select>
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