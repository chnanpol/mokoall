<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>UTCC JOBs</title>

    <!-- INCLUDE LIB CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="./css/bootstrap-grid.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/bootstrap-reboot.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/bootstrap.min.css" />

    <!-- INCULDE LIB JAVASCRIPT -->
    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>

    <script src="./js/get_company_job_detail.js"></script>
</head>

<body class="bg-secondary">
    <img src="./pic/header.jpg" class="img-fluid col-md-12 ">
    <header class="navbar navbar-expand navbar-dark bg-dark">
        <!DOCTYPE html>
        <!-- MENU BAR -->
        <div class="navbar-nav-scroll">
            <ul class="nav navbar-nav bd-navbar-nav flex-row tab-content" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link btn btn-dark" href="pageCompany.php">Home</a>
                </li>
            </ul>
        </div>

        <!-- LOGIN BAR -->
        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex ">
            <li class="nav-item">
                <a class="btn btn-dark nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
    </header>
    <br>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-hover table-secondary rounded">
                <thead class="thead-dark">
                    <tr>
                        <th colspan="5">
                            <!-- <span class="d-inline-flex"> -->
                                <h3 class="w-75">Job Post</h3>
                            <!-- </span> -->
                        </th>
                        <th class="text-right">
                            <button id="pageAddJob" class="btn btn-success">
                                +
                            </button>
                        </th>
                    </tr>
                </thead>
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Company Name</th>
                        <th scope="col">Postion</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Date</th>
                        <th></th>
                    </tr>
                </thead>
                <?php require 'get_company_job.php'; ?>
            </table>
        </div>
        <ul class="pagination">
            <?php require 'get_pagination_index.php'; ?>
        </ul>
    </div>
</body>

</html>