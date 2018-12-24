<?php
        require 'connect.php';

        $j_number = $_GET['j_number'];

        $sql=  "DELETE FROM `tbl_addjob`, `group1`, `group2`, `group3`, `group4`
        USING `tbl_addjob`
            INNER JOIN `group1`
            INNER JOIN `group2`
            INNER JOIN `group3`
            INNER JOIN `group4`
       
     WHERE `tbl_addjob`.`j_number` = '$j_number'
            AND `group1`.`j_number` = `tbl_addjob`.`j_number`
            AND `group2`.`j_number` =`tbl_addjob`.`j_number`
            AND `group3`.`j_number` = `tbl_addjob`.`j_number`
            AND `group4`.`j_number` =`tbl_addjob`.`j_number`";
   
   
$result = mysqli_query($con, $sql);
mysqli_close($con);
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	if($result){
		echo "<script>alert('ทำการลบข้อมูลเรียบร้อย');window.history.back()();</script>";
		exit();
	
	
	}else {
	
			echo "<script>alert('ทำการลบข้อมูลไม่สำเร็จ');window.history.back()();</script>";
		exit();
		}   





?>