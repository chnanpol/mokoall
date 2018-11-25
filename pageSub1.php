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

    <script src="./js/approve_job.js"></script>
</head>

<body class="bg-secondary">
    <img src="./pic/header.jpg" class="img-fluid col-md-12 ">
    <header class="navbar navbar-expand navbar-dark bg-dark">
        <!-- MENU BAR -->
        <div class="navbar-nav-scroll">
            <ul class="nav navbar-nav bd-navbar-nav flex-row tab-content" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link btn btn-dark" href="pageAdmin.php">Home</a>
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
	<center>
	<nav class="nav flex-column navbar-dark bg-dark">
  <a class="nav-link active" href="#">วิชา </a>
  <a class="nav-link" href="#">เพิ่มจุดดำ-จุดดขาว </a>
  <a class="nav-link" href="#">logout</a>
 
</nav>   
   	</center>
   <div class="table-responsive">
            <table class="table table-hover table-secondary rounded">
                <thead class="thead-dark">
                      <?php require 'moallko2.php'; ?>
                </thead>
              
            </table>
        </div>
</body>

</html>