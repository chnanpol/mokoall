<?php

    if(!isset($_SESSION)) { 
        session_start(); 
    } 
    require 'connect.php';

    $user = $_SESSION['user'];

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    $start = ($page - 1) * 10;
    
    $query = "SELECT * FROM tbl_company c, tbl_addjob a WHERE c.c_user = '$user' AND c.c_user = a.c_user ORDER BY j_datetime DESC LIMIT {$start}, 10";
    $exe_query = mysqli_query($con,$query);
   
?>

    