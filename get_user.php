3-<?php

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
    $i = 0;
    while ($row = mysqli_fetch_array($exe_query,MYSQLI_ASSOC)) {
        $i++;

        $day_up_date = floor((strtotime(date('Y-m-d')) - strtotime($row["j_datetime"]))/86400);

        echo "<tbody>";
        echo "<tr>";
        if ($day_up_date <= 5) {
            echo "<th scope='row'>$i ";
            echo "<span class='badge badge-success'>New</span></th>";
        } else {
            echo "<th scope='row'>".$i."</th>";
        }
        echo "<td>".$row["c_namecompany"]."</td>";
        echo "<td>".$row["j_position"]."</td>";
        echo "<td>".$row["j_amount"]."</td>";
        echo "<td>".$row["j_datetime"]."</td>";
        echo "<td>";
        echo "<input type='hidden' id='showDetail' name='showDetail' value='".$row['j_number']."'></td>";
        echo "</td>";
        echo "</tr>";
        echo "</tbody>";
    }

?>

    