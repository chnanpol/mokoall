<?php

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    require 'connect.php';

    $user = $_SESSION['user'];
    $query = "SELECT * FROM tbl_teacher	WHERE c_user = '$user'";
    $exe_query = mysqli_query($con,$query);
    $i = 0;
    while ($row = mysqli_fetch_array($exe_query,MYSQLI_ASSOC)) {
        echo ($row["c_firstname"])."&nbsp;";
		
        echo ($row["c_lastname"]);
    }

?>