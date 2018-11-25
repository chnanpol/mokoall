<?php

    require 'connect.php';
    $query = "SELECT * FROM subject1 GROUP BY subName,subID";
    $exe_query = mysqli_query($con,$query);
    $i = 0;
    while ($row = mysqli_fetch_array($exe_query,MYSQLI_ASSOC)) {
        $i++;
        echo "<option value='".$row['subID'].'/' .$row['subName']."'>";
        echo $row['subID']."&nbsp;"; 
		echo  '/';
		echo  "&nbsp;";
		echo $row['subName'];
        echo "</option>";
    }
    
?>