<?php
        require 'connect.php';

 
        $number_group = $_GET['number_group'];
        
        $sql=  "DELETE FROM `group4_mk5`, `group5_mka5`, `group6_mka5`, `group7_mka5`, `group8_mka5`
        USING `group4_mk5`
            INNER JOIN `group5_mka5`
            INNER JOIN `group6_mka5`
            INNER JOIN `group7_mka5`
            INNER JOIN `group8_mka5`
       
     WHERE `group4_mk5`.`number_group` = '$number_group'
            AND `group5_mka5`.`number_group` = `group4_mk5`.`number_group`
            AND `group6_mka5`.`number_group` =`group4_mk5`.`number_group`
            AND `group7_mka5`.`number_group` = `group4_mk5`.`number_group`
            AND `group8_mka5`.`number_group` =`group4_mk5`.`number_group`";
   
   
$result = mysqli_query($con, $sql) ;

	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
       
       if($result){
              $q1 = "DELETE FROM tbl_addjob_mka5 WHERE number_group='$number_group'";
              $result1 = mysqli_query($con, $q1);

              echo "<script>alert('ทำการลบเรียบร้อย');window.history.back()();</script>";
		exit();
	
	}else {
	
			echo "<script>alert('ทำการลบไม่ได้ ');window.history.back()();</script>";
		exit();
		}   
	if($result1){
           
              
              echo "<script>alert('ทำการลบเรียบร้อย');window.history.back()();</script>";
		exit();
	
	}else {
	
			echo "<script>alert('ทำการลบไม่ได้ ');window.history.back()();</script>";
		exit();
		}   

              mysqli_close($con);
   
?>