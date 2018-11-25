<?php

    if($_SERVER["REQUEST_METHOD"]=="POST"){
       	   include "connect.php";
        
		$login= 0 ; 
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $user = $_POST["user"];
        $pass = $_POST["pass"];
        $address = $_POST["address"];
        $tel = $_POST["tel"];
        
        $query = "INSERT INTO tbl_teacher( c_firstname, c_lastname, c_user, c_pass, c_address, c_tel, login_status, c_datetime)
		values ('$fname','$lname','$user','$pass','$address','$tel','$login',NOW())";
        mysqli_query($con,$query) or die (mysqli_error($con));
        if ($query){
            echo "<script>";
            echo "alert('บันทึกสำเร็จ');";
            echo "window.location ='index.php';";
            echo "</script>";
        }
    }

	mysqli_close($con);

?>