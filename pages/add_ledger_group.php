

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
                        <h4 class="page-title">Add Ledger Group</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Ledger Group Name</label>
                                            <input type="text" name="group" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select Under Group</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option value="1">Bank Accounts</option>
                                                <option value="2">Cash</option>
                                            </select>
                                        </div>
                                    </div><br>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Side of the Group in Accounts</h4>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Trial Balance</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option value="1">None</option>
                                                <option value="2">Debit</option>
                                                <option value="2">Credit</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Profit & Loss</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option value="1">None</option>
                                                <option value="2">Debit</option>
                                                <option value="2">Credit</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Balance Sheet</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option value="1">None</option>
                                                <option value="2">Debit</option>
                                                <option value="2">Credit</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-left">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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