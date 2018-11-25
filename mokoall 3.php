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

    <script src="./js/pageAddJob.js"></script>
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
    <div class="container bg-light rounded">
        <br>
        <form method="POST" id="addform" action="add_job_company.php">
            <div class="row">
                <div class="col">
                    <label class="form-text">Faculty</label>
                    <select id="faculty" name="faculty" class="form-control">
                    <?php require 'get_faculty_company.php'?>
                    </select>
                </div>
                <div class="col">
                    <label class="form-text">Major</label>
                    <select id="major" name="major" class="form-control" disabled>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-10">
                    <label class="form-text">Position</label>
                    <input id="position" name="position" class="form-control" type="text" placeholder="Position / ตำแหน่ง">
                </div>
                <div class="form-group col-md-2">
                    <label class="form-text">Amount</label>
                    <input id="amount" name="amount" class="form-control" type="number" placeholder="Amonut / จำนวน">
                </div>
            </div>
            <div class="form-group">
                <label class="form-text">Address</label>
                <input id="address" name="address" class="form-control" type="text" value="<?php require 'get_address_company.php' ?>">
            </div>
            <div class="form-group">
                <label class="form-text">Detail</label>
                <textarea id="detail" class="form-control" name="detail" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label class="form-text">Property</label>
                <textarea id="property" class="form-control" name="property" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label class="form-text">Document</label>
                <textarea id="document" class="form-control" name="document" rows="4"></textarea>
            </div>
            <div class="form-group text-right">
                <button class="btn btn-danger" type="reset">Clear</button>
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </form>
        <br>
    </div>
</body>

</html>