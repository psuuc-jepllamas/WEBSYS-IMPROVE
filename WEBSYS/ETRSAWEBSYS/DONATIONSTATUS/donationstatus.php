<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Donation Status</title>
    <style>
        .hi {
            padding: 2%;
            color: rgb(78, 78, 78);
        }

        .custom-table-responsive {
            margin: 30px 0;
        }

        .custom-table-wrapper {
            min-width: 1000px;
            background: #fff;
            padding: 20px 25px;
            border-radius: 3px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .custom-table-wrapper .custom-btn {
            float: right;
            color: #333;
            background-color: #fff;
            border-radius: 3px;
            border: none;
            outline: none !important;
            margin-left: 10px;
        }

        .custom-table-wrapper .custom-btn:hover {
            color: #333;
            background: #f2f2f2;
        }

        .custom-table-wrapper .custom-btn.custom-btn-primary {
            color: #fff;
            background: #03A9F4;
        }

        .custom-table-wrapper .custom-btn.custom-btn-primary:hover {
            background: #03a3e7;
        }

        .custom-table-wrapper .custom-table-title .custom-btn {
            font-size: 13px;
            border: none;
        }

        .custom-table-wrapper .custom-table-title .custom-btn i {
            float: left;
            font-size: 21px;
            margin-right: 5px;
        }

        .custom-table-wrapper .custom-table-title .custom-btn span {
            float: left;
            margin-top: 2px;
        }

        .custom-table-wrapper .custom-table-title {
            color: #fff;
            background: #4b5366;
            padding: 16px 25px;
            margin: -20px -25px 10px;
            border-radius: 3px 3px 0 0;
        }

        .custom-table-wrapper .custom-table-title h2 {
            margin: 5px 0 0;
            font-size: 24px;
        }

        .custom-show-entries select.form-control {
            width: 60px;
            margin: 0 5px;
        }

        .custom-table-filter .custom-filter-group {
            float: right;
            margin-left: 15px;
        }

        .custom-table-filter input,
        .custom-table-filter select {
            height: 34px;
            border-radius: 3px;
            border-color: #ddd;
            box-shadow: none;
        }

        .custom-table-filter {
            padding: 5px 0 15px;
            border-bottom: 1px solid #e9e9e9;
            margin-bottom: 5px;
        }

        .custom-table-filter .custom-btn {
            height: 34px;
        }

        .custom-table-filter label {
            font-weight: normal;
            margin-left: 10px;
        }

        .custom-table-filter select,
        .custom-table-filter input {
            display: inline-block;
            margin-left: 5px;
        }

        .custom-table-filter input {
            width: 200px;
            display: inline-block;
        }

        .custom-filter-group select.form-control {
            width: 110px;
        }

        .custom-filter-icon {
            float: right;
            margin-top: 7px;
        }

        .custom-filter-icon i {
            font-size: 18px;
            opacity: 0.7;
        }

        .custom-table table tr th,
        .custom-table table tr td {
            border-color: #e9e9e9;
            padding: 12px 15px;
            vertical-align: middle;
        }

        .custom-table table tr th:first-child {
            width: 60px;
        }

        .custom-table table tr th:last-child {
            width: 80px;
        }

        .custom-table table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }

        .custom-table table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }

        .custom-table table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }

        .custom-table table td a {
            font-weight: bold;
            color: #566787;
            display: inline-block;
            text-decoration: none;
        }

        .custom-table table td a:hover {
            color: #2196F3;
        }

        .custom-table table td a.custom-view {
            width: 30px;
            height: 30px;
            color: #2196F3;
            border: 2px solid;
            border-radius: 30px;
            text-align: center;
        }

        .custom-table table td a.custom-view i {
            font-size: 22px;
            margin: 2px 0 0 1px;
        }

        .custom-table .custom-avatar {
            border-radius: 50%;
            vertical-align: middle;
            margin-right: 10px;
        }

        .custom-status {
            font-size: 30px;
            margin: 2px 2px 0 0;
            display: inline-block;
            vertical-align: middle;
            line-height: 10px;
        }

        .custom-text-success {
            color: #10c469;
        }

        .custom-text-info {
            color: #62c9e8;
        }

        .custom-text-warning {
            color: #FFC107;
        }

        .custom-text-danger {
            color: #ff5b5b;
        }

        .pagination {
            float: right;
            margin: 0 0 5px;
        }

        .pagination li a {
            border: none;
            font-size: 13px;
            min-width: 30px;
            min-height: 30px;
            color: #999;
            margin: 0 2px;
            line-height: 30px;
            border-radius: 2px !important;
            text-align: center;
            padding: 0 6px;
        }

        .pagination li a:hover {
            color: #666;
        }

        .pagination li.custom-active a {
            background: #03A9F4;
        }

        .pagination li.custom-active a:hover {
            background: #0397d6;
        }

        .pagination li.custom-disabled i {
            color: #ccc;
        }

        .pagination li i {
            font-size: 16px;
            padding-top: 6px;
        }

        .custom-hint-text {
            float: left;
            margin-top: 10px;
            font-size: 13px;
        }
    </style>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand mr-auto d-flex align-items-center justify-content-center" href="/WEBSYS-LAST-REVISE/WEBSYS/ETRSAWEBSYS/DASHBOARD/adminDash.php">
                <div class="sidebar-brand-text mx-3">FundMe</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/WEBSYS-LAST-REVISE/WEBSYS/ETRSAWEBSYS/DASHBOARD/adminDash.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Actions</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Actions:</h6>
                        <a class="collapse-item" href="/WEBSYS-LAST-REVISE/WEBSYS/ETRSAWEBSYS/ACCOUNTMANAGEMENT/account.php">Account Management</a>
                        <a class="collapse-item" href="/WEBSYS-LAST-REVISE/WEBSYS/ETRSAWEBSYS/MANAGECAMPAIGNEVENTS/campaign.php">Manage Campaign Events</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Donation Status</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="donationstatus.php"><b>Donation Status</b></a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="sidebar-brand-icon px-3">
                        <img src="img/logo.png" alt="" srcset="" height="50" width="50">
                    </div>
                    <h1 class="hi"><span><b>Donation Status</b></span></h1>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <?php
                        include('conn.php');

                        // * ADMIN DISPLAY

                        $sql = "SELECT * FROM admins WHERE adminID = '1'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $username = $row['adminName'];
                        } else {
                            $username = "User Not Found";
                        }


                        ?>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $username; ?></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid-xl">
                    <div class="custom-table-responsive">
                        <div class="custom-table-wrapper">
                            <div class="custom-table-title">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h2>FundMe Donation <b>History</b></h2>
                                    </div>
                                   
                                </div>
                            </div>

                            <?php
                            $sql = "SELECT * FROM transactions";
                            $result = $conn->query($sql);
                            ?>

                         

                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Amount</th>
                                        <th>First name</th>
                                        <th>Last name</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    if ($result->num_rows > 0) {
                                        // Output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>" . $row["id"] . "</td>";
                                            echo "<td>" . $row["amount"] . "</td>";
                                            echo "<td>" . $row["firstname"] . "</td>";
                                            echo "<td>" . $row["lastname"] . "</td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='5'>0 results</td></tr>";
                                    }
                                    ?>

                                </tbody>
                            </table>

                            <div class="clearfix">
                                <!-- Add your pagination code here if needed -->
                            </div>

                            <?php
                            // Close connection
                            $conn->close();
                            ?>
                        </div>
                    </div>
                </div>
                <!-- End of Page Wrapper -->

                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>

                <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-primary" href="logout.php">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bootstrap core JavaScript-->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                <!-- Core plugin JavaScript-->
                <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                <!-- Custom scripts for all pages-->
                <script src="js/sb-admin-2.min.js"></script>

                <!-- Page level plugins -->
                <script src="vendor/chart.js/Chart.min.js"></script>

                <!-- Page level custom scripts -->
                <script src="js/demo/chart-area-demo.js"></script>
                <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>