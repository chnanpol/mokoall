<?php
        require 'connect.php';

        $subID = $_GET['subID'];

        $q = "DELETE FROM subject1 WHERE subID='$subID'";
        $result = mysqli_query($con, $q);
 if ($q){
            echo "<script>";
            echo "alert('บันทึกสำเร็จ');";
            echo "window.location ='Admin.php';";
            echo "</script>";
        
        }
		else
		{
          echo "เกิดข้อผิดพลาดในการลบข้อมูล" .mysqli_error($con);
        }
        mysqli_close($con);
?>
