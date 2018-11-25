<?php
    require 'connect.php';

	$pro_id = $_POST['pro_id'];
    $pro_name = $_POST['pro_name'];
    $pro_price = $_POST['pro_price'];
	$lan =implode(",",$_POST ['s']);
    $j_semester = $_POST['j_semester'];
    $j_semester_f = $_POST['j_semester_f'];
    $op_date = $_POST['op_date']; 


  $q = "UPDATE subject1 SET subID='$pro_name',subName='$pro_price',moallko_2='$lan',
   j_semester_am='$j_semester',j_semester_f_am='$j_semester_f',op_date='$op_date'WHERE id='$pro_id'";

  $result = mysqli_query ($con,$q);

   if ($q){
            echo "<script>";
            echo "alert('บันทึกสำเร็จ');";
            echo "window.location ='Admin.php';";
            echo "</script>";
        }
    
   

   mysqli_close($con);

?>
