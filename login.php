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
</head>


<body class=" navbar-light" style="background-color: #e3f2fd";>
  
   
    <header class="navbar navbar-expand navbar-dark bg-dark">
        <!DOCTYPE html>
        <!-- MENU BAR -->
        <div class="navbar-nav-scroll">
            <ul class="nav navbar-nav bd-navbar-nav flex-row tab-content" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
            </ul>
        </div>

        <!-- LOGIN BAR -->
        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex ">
            <li class="nav-item">
                <button class="btn btn-dark nav-link" href="login.php">Login</button>
            </li>
        </ul>
    </header>
    <div class="container">
        <form method="POST" id="loginform" action="chk_login.php">
            <div class="form-group">
                <label class="form-text">Username</label>
                <input id="user" name="user" class="form-control" placeholder="Username" type="text">
            </div>
            <div class="form-group">
                <label class="form-text">Password</label>
                <input id="pass" name="pass" class="form-control" placeholder="Password" type="password">
            </div>
           
		 

            <button class="btn btn-primary" type="submit">LOGIN</button>
            <a class="btn btn-primary"  href="add rejister.php">REGISTER</a>
         
        </form>
    </div>
</body>

</html>