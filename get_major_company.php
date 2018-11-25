<?php

    require 'connect.php';
    session_start();

    $fac_name = isset($_POST['fac_name']) ? $_POST['fac_name'] : 'คณะวิทยาศาสตร์และเทคโนโลยี';

    $query = "SELECT * FROM tbl_fac WHERE fac_name = '$fac_name' ORDER BY fac_number";
    $exe_query = mysqli_query($con,$query);
    $i = 0;
    while ($row = mysqli_fetch_array($exe_query,MYSQLI_ASSOC)) {
        $i++;
        echo "<option value='".$row['fac_major']."'>";
        echo $row['fac_major'];
        echo "</option>";
    }
    
?>