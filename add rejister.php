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
<body class="bg-secondary">
    
     
<form method="POST" id="loginform" action="rejister.php">
   
    <div class="row">
        <div class="col">
            <label class="form-text">FIRST NAME</label>
            <input id="fname" name="fname" class="form-control" placeholder="First Name" type="text">
        </div>
        <div class="col">
            <label class="form-text">LAST NAME</label>
            <input id="lname" name="lname" class="form-control" placeholder="Last Name" type="text">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label class="form-text">USERNAME</label>
            <input id="user" name="user" class="form-control" placeholder="Username" type="text">
        </div>
        <div class="col">
            <label class="form-text">PASSWORD</label>
            <input id="pass" name="pass" class="form-control" placeholder="Password" type="Password">
        </div>
    </div>
    <div class="form-group">
        <label class="form-text">ADDRESS</label>
        <textarea id="address" name="address" class="form-control"  rows="3"></textarea>
    </div>
    <div class="form-group">
        <label class="form-text"> TELEPHONE NUMBER</label>
        <input id="tel" name="tel" class="form-control" placeholder="0812345678" type="tel" maxlength="10">
    </div>
    <button class="btn btn-primary" type="submit">SUBMIT</button>
     <a class="btn btn-primary"  href="index.php">black</a>
</form>
</body>
</html>