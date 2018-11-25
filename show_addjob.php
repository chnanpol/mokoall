<header class="navbar navbar-expand navbar-dark bg-dark">
<?php

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    require 'connect.php';
    // $user = $_SESSION['user'];
    $j_number   = $_GET ['j_number'];
    $query =  "SELECT * FROM tbl_addjob A
    INNER JOIN group1 B ON A.j_number = B.j_number
    INNER JOIN group2 C ON A.j_number = C.j_number
    INNER JOIN group3 D ON A.j_number = D.j_number 
    WHERE A.j_number = '$j_number'";
    
    
    $exe_query = mysqli_query($con,$query);
  
    while ($row = mysqli_fetch_array($exe_query,MYSQLI_ASSOC)) 
    {
    $checkbox_array = explode(",", $row  ['Centered']) ;
    $checkbox_array1 = explode(",", $row  ['Teaching']) ;
  
        echo "<div class='jumbotron'>";
            echo "<h1 class='display-4'>" . " จาก ".$row['c_user']."</h1>";
            echo "<hr class='my-4'>";
            echo "<p>";
                echo "<h4>ลักษณะงาน</h4>";
                echo "- ".$row['j_detial'];
            echo "</p>";
            echo "<p>";
                echo "<h4>คณะและ สาขาที่ต้องการ</h4>";
                echo "- ".$row['stu_fac']." / ".$row['stu_major'];
            echo "</p>";
            echo "<p>";
                echo "<h4>คุณสมบัติ</h4>";
                echo "- ".$row['j_qualification'];
            echo "</p>";
            echo "<p>";
                echo "<h4>เอกสาร</h4>";
                echo "- ".$row['j_document'];
            echo "</p>";
            echo "<p>";
                echo "<h4>Address</h4>";
                echo "- ".$row['j_address'];
            
            
                echo "</p>";
         
                $checked_arr = array();
                $languages_arr = array("การบรรยาย (Lecture)" ,"การฝึกปฏิบัติ (Practice)","jQuery","AngularJS");
                foreach($languages_arr as $language){
            
                  $checked = "";
                  if(in_array($language,  $checkbox_array)){
                    $checked = "checked";
                  }
            
                            
                
                    echo '<input type="checkbox" name="l[]"   disabled="disabled"  value="'.$language.'" '.$checked.' > '.$language.' <br/>';
                }
            // echo "<p>";
            // echo "<h4></h4>";
            // echo "".$row[''];
            // echo "</p>";
        echo "</div>";
    }
?>