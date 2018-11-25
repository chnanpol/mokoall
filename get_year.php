<?php

    require 'connect.php';
	$query = "SELECT * FROM j_semester_f_am";	
    $exe_query = mysqli_query($con,$query);
    $i = 0;
    while ($row = mysqli_fetch_array($exe_query,MYSQLI_ASSOC)) {
        $i++;
        echo "<option value='".$row['j_semesterf_am']."'>";
        echo $row['j_semesterf_am']; 
        echo "</option>";
    }
    
?> 