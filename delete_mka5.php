<?php
        require 'connect.php';

        $j_number = $_GET['j_number'];

        $sql=  "DELETE FROM `group4_mk5`, `group5_mka5`, `group6_mka5`, `group7_mka5`, `group8_mka5`
        USING `group4_mk5`
            INNER JOIN `group5_mka5`
            INNER JOIN `group6_mka5`
            INNER JOIN `group7_mka5`
            INNER JOIN `group8_mka5`
       
     WHERE `group4_mk5`.`j_number` = '$j_number'
            AND `group5_mka5`.`j_number` = `group4_mk5`.`j_number`
            AND `group6_mka5`.`j_number` =`group4_mk5`.`j_number`
            AND `group7_mka5`.`j_number` = `group4_mk5`.`j_number`
            AND `group8_mka5`.`j_number` =`group4_mk5`.`j_number`";
   
   
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
mysqli_close($con);
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	if($result1){
		echo "<script type='text/javascript'>";
	echo "alert('Save Succesfuly');";
	echo "window.location = 'mainpage.php'; ";
	echo "</script>";
		exit();
	
	}else {
	
			echo "<script>alert('ไม่สามารถบันทึกได้ครับ');window.history.back()();</script>";
		exit();
		}   

    
   
?>