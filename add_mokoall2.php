<?php
   require 'connect.php';

   $j_semester = $_POST['j_semester'];
   $j_semester_f = $_POST['j_semester_f'];
   $op_date = $_POST['op_date']; 
   $pro_name = $_POST['pro_name'];
   $pro_price = $_POST['pro_price'];
  $lan =implode(",",$_POST ['s']);
  

  
   $q = "INSERT INTO subject1 (subName,subID,moallko_2) VALUES 
   ('$pro_name','$pro_price','$lan')";

   $result = mysqli_query($con, $q);

   
   $q1= "INSERT INTO j_semester_am(j_semester) VALUES 
   ('$j_semester')";

   $result1 = mysqli_query($con, $q1);
  if ($q){
            echo "<script>";
            echo "alert('บันทึกสำเร็จ');";
            echo "window.location ='Admin.php';";
            echo "</script>";
        }
    
   

   mysqli_close($con);

 ?>
