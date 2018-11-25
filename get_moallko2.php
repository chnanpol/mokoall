<?php

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    require 'connect.php';

    
    $query = "SELECT * FROM subject1	 WHERE id = '$id'";
    $exe_query = mysqli_query($con,$query);
    $i = 0;
    while ($row = mysqli_fetch_array($exe_query,MYSQLI_ASSOC)) {
        echo nl2br($row["moallko_2"])."&nbsp;";
		
        echo nl2br ($row["moallko_2"]);
    }

?>