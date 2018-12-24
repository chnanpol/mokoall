<?php session_start(); ?>
<?php
     require "connect.php";
$user = $_SESSION['user'];

     $q = "SELECT * FROM tbl_addjob A
     INNER JOIN tbl_addjob_mka5 B ON A.j_number = B.j_number
     WHERE A.c_user = '$user'";

     $result = mysqli_query($con, $q);
 ?>
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


   

<body>
  
  <body class=" navbar-light" style="background-color: #e3f2fd";>
    
          <!DOCTYPE html>
        <!DOCTYPE html>
        <!-- MENU BAR -->  
        <nav class="navbar navbar-dark bg-dark">

     <a class="navbar-brand" href="#">    
     
    <?php  
  echo ' ชื่อผู้ใช้' ;
  echo '&nbsp';
   echo $_SESSION["user"]; 
   ?>
  </a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
     <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
     <li class="nav-item active">
        <a class="nav-link"  href="mainpage.php">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <a  class="nav-link"  href="pageAddJob.php">ม.อ.ค.3 </a>
      </li>

 <li class="nav-item">
      <a class="nav-link" href="mainpage.php">กลับไปหน้าแรก</a>
      </li>

    <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
    </div>
    
  
  </div>
</nav>
    
    </header>



    <table class="table table-hover table table-bordered ">
         <tr>
			<!-- <th style="hide" รหัสวิชา> </th>-->
           <th><center>ชื่อวิชา</th></center>
           <th><center>ภาคการศึกษา</th></center>
            <th><center>ปีการศึกษา</th></center>
          
           <th><center>กลุ่มที่</th></center>
           
            <th><center>แก้ไข ม.อ.ค.5 </th></center>
            <th><center>ดูเอกสาร</th></center>
           <th><center>ลบ</th></center>
       
         </tr>

         <?php
                 while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
          ?>
       <tr>
     <!--  <td style="hide" <?php echo $row['j_number']; ?>> </td></center> -->
	
            <td><center><?php echo $row['j_id']; ?></td></center>
            <td><center><?php echo $row['j_semester_f']; ?></td></center>
            <td><center><?php echo $row['j_semester']; ?></td></center>

            <td><center><?php echo $row['number_group']; ?></td></center>
       
            <td><center><a href="up_addjob_mka5.php?number_group=<?php echo $row['number_group']; ?>&j_number=<?php echo $row['j_number']; ?>"><button class="btn btn-success">แก้ไข</button></a></td></center>
            <td><center><a href="show_addjob_mka5.php?number_group=<?php echo $row['number_group']; ?>&j_number=<?php echo $row['j_number']; ?>"><button class="btn btn-success">เอกสารที่เป็น pdf</button></a></td></center>
            <td><center><a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='delete_mka5.php?number_group=<?php echo $row['number_group']; ?>&j_number=<?php echo $row["j_number"];?>';}"><button class="btn btn-danger">ลบ</button></a></td></center>
       </tr>


       <?php
                   }
                   mysqli_free_result($result);
                   mysqli_close($con)
       ?>
     </table>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

     </body>
     </div>
</html>
