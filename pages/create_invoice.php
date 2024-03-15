

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
                        <h4 class="page-title">Create Invoice</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <form>
                                <h4>Referer Doctor</h4><br>
                                <div class="row">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label>Doctor Name</label>
                                            <select class="select">
                                                <option>Please Select</option>
                                                <option>Charles Ortega</option>
                                                <option>Denise Stevens</option>
                                                <option>Jennifer Robinson</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label>Mobile Number</label>
                                            <input class="form-control" name="doc_mobile_no" type="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label>Date</label>
                                            <div class="cal-icon">
                                                <input class="form-control datetimepicker" name="date" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label>Receipt No</label>
                                            <input class="form-control datetimepicker" name="receipt_no" type="text">
                                        </div>
                                    </div>
                                </div>
                                <h4>Patient Information</h4><br>
                                <div class="row">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label>MRNo</label>
                                            <input class="form-control" name="doc_mobile_no" type="email">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label>Patient First Name</label>
                                            <input class="form-control" name="pa_first_name" type="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label>Patient Last Name</label>
                                            <input class="form-control" name="pa_last_name" type="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label>Age</label>
                                            <input class="form-control datetimepicker" name="age" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label>Mobile Number</label>
                                            <input class="form-control datetimepicker" name="patient_mobile_no" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <input class="form-control datetimepicker" name="gender" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-white">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 20px">Sr.no</th>
                                                        <th class="col-sm-2">Test Name</th>
                                                        <th class="col-md-6">Charge</th>
                                                        <th>Action</th>
                                                        <th> </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            <input class="form-control" type="text" name="test_name" style="min-width:350px">
                                                        </td>
                                                        <td>
                                                            <input class="form-control" type="text" name="charge" style="min-width:100px">
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="text-success font-18" style="min-width: 200px;" title="Add"><i class="fa fa-plus"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>
                                                            <input class="form-control" type="text" name="test_name" style="min-width:100px">
                                                        </td>
                                                        <td>
                                                            <input class="form-control" type="text" name="charge"
                                                                style="min-width:150px">
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="text-danger font-18"
                                                                title="Remove"><i class="fa-solid fa-minus"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-hover table-white">
                                                <tbody>
                                                    <tr>
                                                        <td colspan="5" class="text-right">
                                                            Discount %
                                                        </td>
                                                        <td style="text-align: right; padding-right: 30px;width: 230px">
                                                            <input class="form-control text-right" type="text">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5" class="text-right">
                                                            Sub Total
                                                        </td>
                                                        <td style="text-align: right; padding-right: 30px;width: 230px">
                                                            <input class="form-control text-right" type="text">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5" class="text-right">
                                                            Paid
                                                        </td>
                                                        <td style="text-align: right; padding-right: 30px;width: 230px">
                                                            <input class="form-control text-right" type="text">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5" class="text-right">
                                                            Due
                                                        </td>
                                                        <td style="text-align: right; padding-right: 30px;width: 230px">
                                                            <input class="form-control text-right" type="text">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5" style="text-align: right; font-weight: bold">
                                                            Final Total
                                                        </td>
                                                        <td
                                                            style="text-align: right; padding-right: 30px; font-weight: bold; font-size: 16px;width: 230px">
                                                            $ 0.00
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Other Information</label>
                                                    <textarea class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-left">
                                    <button class="btn btn-grey submit-btn m-r-10">Save & Send</button>
                                    <button class="btn btn-primary submit-btn">Save</button>
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