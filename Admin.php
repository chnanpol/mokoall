<?php
     require "connect.php";

     $q = "SELECT * FROM subject1 ";

     $result = mysqli_query($con, $q);
 ?>

<html lang="en">
      <header >
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
       <title>UTCC JOB</title>

  <nav class="navbar navbar-expand navbar-dark bg-dark">
     <a class="navbar-brand" href="#">ADMIN PANEL</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
     <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
     <li class="nav-item active">
        <a class="nav-link"  href="Admin.php">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link"  href="insert.php">INSERT<span class="sr-only">(current)</span></a>
      </li>
    </div>
    <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex ">
            <li class="nav-item">
                <a class="btn btn-dark nav-link" href="logout.php">LOGOUT</a>
            </li>
        </ul>

  </div>
</nav>
       <style>
         table,th,td {
           border: 1px solid black;
           border-collapse: collapse;
           }
          img.resize  {
              width: 70px;
              height: 70px;
              border: 10px;
                 }
           img:hover.resize  {
              width: 200px;
              height: 200px;
              border: 10px;
                }


          </style>
     </head>
     <body>
      <div class="container bg-light rounded">

      <!-- <form action="search_product_frm.php" method="POST">
         <label>ชื่อสินค้า: </label>
         <input type="text" size="40px" name="pro_search">
         <input name="submit" type="submit" id="submit"  class="btn"  value="ค้นข้อมูล">
      </form>-->

       <!--<a href="product_frm.php"><button class="btn btn-warning btn-sm">เพิ่มข้อมูล</button></a>-->

         <table class="table table-hover table table-bordered ">
         <tr>
           <th><center>รหัสวิชา</th></center>
           <th><center>ชื่อวิชา</th></center>
            <th><center>แก้ไข</th></center>
           <th><center>ลบ</th></center>
       
         </tr>

         <?php
                 while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
          ?>
       <tr>
            <td><center><?php echo $row['subID']; ?></td></center>
            <td><center><?php echo $row['subName']; ?></td></center>
            
       
           
            <td><center><a href="update_mo2.php?subID=<?php echo $row['subID']; ?>"><button class="btn btn-primary">แก้ไข</button></a></td></center>
            <td><center><a href="delete_product.php?subID=<?php echo $row['subID']; ?>"><button class="btn btn-danger">ลบ</button></a></td></center>
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
