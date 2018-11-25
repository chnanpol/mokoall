<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
   

   if($_SERVER["REQUEST_METHOD"]=="POST"){
        include "connect.php";

        $user = $_SESSION['user'];
          $pro_id = $_POST["pro_id"];
 //--------------------------------------------------------------------------------------------------------------//
        $Topics_1 = $_POST["Topics_1"];
        $Topics_2 = $_POST["Topics 2"];
        $Topics_3 = $_POST["Topics 3"];
        $Topics_4 = $_POST["Topics 4"];
        $Topics_5 = $_POST["Topics 5"];
        $Topics_6 = $_POST["Topics 6"];
        $Topics_7 = $_POST["Topics 7"];    
		$Topics_8 = $_POST["Topics 8"];
        $Topics_9 = $_POST["Topics 9"];
        $Topics_10 = $_POST["Topics 10"];
//--------------------------------------------------------------------------------------------------------------//
	
$sql1 = "INSERT INTO topice_5 
(topice_1,topice_2,topice_3,topice_4,
topice_5,topice_6,topice_7,
topice_8,topice_9,topice_10,
user,j_number)
 VALUES
('$Topics_1','$Topics_2','$Topics_3','$Topics_4'
,'$Topics_5','$Topics_6','$Topics_7'
,'$Topics_8','$Topics_9','$Topics_10'
,'$user','$pro_id')";
   
   
   $result1 = mysqli_query($con, $sql1) or die ("Error in query: $sql1 " . mysqli_error($con));
	//ปิดการเชื่อมต่อ database
	mysqli_close($con);
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result1){
	echo "<script type='text/javascript'>";
	echo "alert('Save Succesfuly');";
	echo "window.location = 'mainpage.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error!!');";
	echo "</script>";
}
   }
?>