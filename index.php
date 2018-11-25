<?php
     require "connect.php";


     $q = "SELECT * FROM tbl_addjob ";

     $result = mysqli_query($con, $q);
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>web mokoall 	</title>

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
                <a class="btn btn-dark nav-link" href="login.php">Login</a>
            </li>
        </ul>
    </header>
    <br>
  

    <table class="table table-hover table table-bordered ">
         <tr>
			<!-- <th style="hide" รหัสวิชา> </th>-->
		  <th><center>ชื่อผู้สอน</th></center>
           <th><center>ชื่อวิชา</th></center>
           <th><center>ดูเอกสาร</th></center>
           
       
         </tr>

         <?php
                 while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
          ?>
       <tr>
     <!--  <td style="hide" <?php echo $row['j_number']; ?>> </td></center> -->
		  <td><center><?php echo $row['j_teacher']; ?></td></center>
            <td><center><?php echo $row['j_id']; ?></td></center>
            
       
            <td><center><a href="show_addjob.php?j_number=<?php echo $row['j_number']; ?>"><button class="btn btn-success">ดู</button></a></td></center>
         
       </tr>


       <?php
                   }
                   mysqli_free_result($result);
                   mysqli_close($con)
       ?>
     </table>
    </div>
</body>

</html>