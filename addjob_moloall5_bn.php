<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
   

   if($_SERVER["REQUEST_METHOD"]=="POST"){
        include "connect.php";

      
		  $pro_id = $_POST["pro_id"];
		  
 //--------------------------------------------------------------------------------------------------------------//
 $Week1 = $_POST["Week1"];
 $Week2 = $_POST["Week2"];
 $Week3 = $_POST["Week3"];
 $Week4 = $_POST["Week4"];
 $Week5 = $_POST["Week5"];
 $Week6 = $_POST["Week6"];
 $Week7 = $_POST["Week7"];
 $Week8 = $_POST["Week8"];    
 $Week9 = $_POST["Week9"];
 $Week10 = $_POST["Week10"];
 $Week11 = $_POST["Week11"];
 $Week12 = $_POST["Week12"];    
 $Week13 = $_POST["Week13"];
 $Week14 = $_POST["Week14"];
 $Week15 = $_POST["Week15"];
 
 $Topics1 = $_POST["Topics1"];
 $Topics2 = $_POST["Topics2"];
 $Topics3 = $_POST["Topics3"];
 $Topics4 = $_POST["Topics4"];
 $Topics5 = $_POST["Topics5"];
 $Topics6 = $_POST["Topics6"];
 $Topics7 = $_POST["Topics7"];
 $Topics8 = $_POST["Topics8"];
 $Topics9 = $_POST["Topics9"];
 $Topics10 = $_POST["Topics10"];
 $Topics11 = $_POST["Topics11"];
 $Topics12 = $_POST["Topics12"];
 $Topics13 = $_POST["Topics13"];
 $Topics14 = $_POST["Topics14"];
 $Topics15 = $_POST["Topics15"];

 $hour1 = $_POST["hour1"];
 $hour2 = $_POST["hour2"];
 $hour3 = $_POST["hour3"];
 $hour4 = $_POST["hour4"];
 $hour5 = $_POST["hour5"];
 $hour6 = $_POST["hour6"];
 $hour7 = $_POST["hour7"];
 $hour8 = $_POST["hour8"];
 $hour9 = $_POST["hour9"];
 $hour10 = $_POST["hour10"];
 $hour11= $_POST["hour11"];
 $hour12 = $_POST["hour12"];
 $hour13 = $_POST["hour13"];
 $hour14 = $_POST["hour14"];
 $hour15 = $_POST["hour15"];
 
 $Instructor1 = $_POST["Instructor1"];
 $Instructor2 = $_POST["Instructor2"];
 $Instructor3 = $_POST["Instructor3"];
 $Instructor4 = $_POST["Instructor4"];
 $Instructor5 = $_POST["Instructor5"];
 $Instructor6 = $_POST["Instructor6"];
 $Instructor7 = $_POST["Instructor7"];
 $Instructor8 = $_POST["Instructor8"];
 $Instructor9 = $_POST["Instructor9"];
 $Instructor10 = $_POST["Instructor10"];
 $Instructor11 = $_POST["Instructor11"];
 $Instructor12 = $_POST["Instructor12"];
 $Instructor13 = $_POST["Instructor13"];
 $Instructor14 = $_POST["Instructor14"];
 $Instructor15 = $_POST["Instructor15"];

 $Topics_covered = $_POST["Topics_covered"];
 $Significance = $_POST["Significance"];
 $Compensation = $_POST["Compensation"];
 $Improveteaching = $_POST["Improveteaching"];
 $students_enrolled = $_POST["students_enrolled"];
 $students_remaining = $_POST["students_remaining"];
 $students_withdrawn = $_POST["students_withdrawn"];    
 $Factors_to_Rating = $_POST["Factors_to_Rating"];
 $assessment = $_POST["assessment"];
 $Time_deviation = $_POST["Time_deviation"];
 $Discrepancies = $_POST["Discrepancies"];
 $Verification_method = $_POST["Verification_method"];
 $conclude = $_POST["conclude"];
 $problem_of_using = $_POST["problem_of_using"];
 $effect = $_POST["effect"];
 $Administrative = $_POST["Administrative"];
 $Impact = $_POST["Impact"];
 $Student_Evaluation = $_POST["Student_Evaluation"];
 $Critical = $_POST["Critical"];
 $comments = $_POST["comments"];
 $Critical_1 = $_POST["Critical_1"];
 $comments_1 = $_POST["comments_1"];
 $Improvement = $_POST["Improvement"];
 $Results = $_POST["Results"];
 $Other_actions = $_POST["Other_actions"];
 $offer = $_POST["offer"];
 $Time_limit = $_POST["Time_limit"];
 $responsible_person = $_POST["responsible_person"];
 $Suggestions = $_POST["Suggestions"];
 
 
 $issue1 = $_POST["issue1"];
 $issue2 = $_POST["issue2"];
 $issue3 = $_POST["issue3"];
 $issue4 = $_POST["issue4"];
 $issue5 = $_POST["issue5"];
 
 $group1 = $_POST["group1"];
 $group2 = $_POST["group2"];
 $group3 = $_POST["group3"];
 $group4 = $_POST["group4"];
 $group5 = $_POST["group5"];

  
 $a = $_POST["a"];
 $bp = $_POST["bp"];
 $b = $_POST["b"];
 $cp = $_POST["cp"];
 $c = $_POST["c"];
 $dp = $_POST["dp"];
 $d = $_POST["d"];
 $f = $_POST["f"];
 $x = $_POST["x"];
 $w = $_POST["w"];

  
 $a1 = $_POST["a1"];
 $bp1 = $_POST["bp1"];
 $b1 = $_POST["b1"];
 $cp1 = $_POST["cp1"];
 $c1 = $_POST["c1"];
 $dp1 = $_POST["dp1"];
 $d1 = $_POST["d1"];
 $f1 = $_POST["f1"];
 $x1 = $_POST["x1"];
 $w1 = $_POST["w1"];


  
 $a2 = $_POST["a2"];
 $bp2 = $_POST["bp2"];
 $b2 = $_POST["b2"];
 $cp2 = $_POST["cp2"];
 $c2 = $_POST["c2"];
 $dp2 = $_POST["dp2"];
 $d2 = $_POST["d2"];
 $f2 = $_POST["f2"];
 $x2 = $_POST["x2"];
 $w2 = $_POST["w2"];





  	
 $sql1 = "INSERT INTO group4_mk5 
 (j_number,
 Week1,Week2,Week3,Week4,Week5,Week6,Week7,Week8,Week9,Week10,Week11,Week12,Week13,Week14,Week15,
 Topics_1,Topics_2,Topics_3,Topics_4,Topics_5,Topics_6,Topics_7,Topics_8,Topics_9,Topics_10,Topics_11,Topics_12,Topics_13,Topics_14,Topics_15,
 hour1,hour2,hour3,hour4,hour5,hour6,hour7,hour8,hour9,hour10,hour11,hour12,hour13,hour14,hour15,
 Instructor1,Instructor2,Instructor3,Instructor4,Instructor5,Instructor6,Instructor7,
 Instructor8,Instructor9,Instructor10,Instructor11,Instructor12,Instructor13,Instructor14,Instructor15
 )
 VALUES
 ('$pro_id',
 '$Week1','$Week2','$Week3','$Week4','$Week5','$Week6','$Week7','$Week8',
 '$Week9','$Week10','$Week11','$Week12','$Week13','$Week14','$Week15'
 
 ,'$Topics1','$Topics2','$Topics3'
 ,'$Topics4'
 ,'$Topics5','$Topics6','$Topics7'
 ,'$Topics8','$Topics9','$Topics10'
 ,'$Topics11','$Topics12','$Topics13','$Topics14','$Topics15'
 
 ,'$hour1','$hour2','$hour3','$hour4'
 ,'$hour5','$hour6','$hour7'
 ,'$hour8','$hour9','$hour10'
 ,'$hour11','$hour12','$hour13','$hour14','$hour15'
 ,'$Instructor1','$Instructor2','$Instructor3','$Instructor4'
 ,'$Instructor5','$Instructor6','$Instructor7'
 ,'$Instructor8','$Instructor9','$Instructor10'
 ,'$Instructor11','$Instructor12','$Instructor13','$Instructor14','$Instructor15')";
 
	$result1 = mysqli_query($con, $sql1);

$sql2 = "INSERT INTO group5_mka5 (j_number,Topics_covered,Significance,Compensation,Improveteaching,students_enrolled,assessment
,students_remaining,students_withdrawn,Factors_to_Rating,Time_deviation,Discrepancies,Verificatio_method)
VALUES('$pro_id','$Topics_covered','$Significance','$Compensation','$Improveteaching','$students_enrolled','$assessment','$students_remaining'
,'$students_withdrawn','$Factors_to_Rating','$Time_deviation','$Discrepancies','$Verification_method')";

$result2 = mysqli_query($con, $sql2);



$sql3 = "INSERT INTO group6_mka5 (j_number,conclude,problem_of_using,effect,Administrative,Impact,Student_Evaluation,Critical
,comments,Critical_1,comments_1,Improvement,Results,Other_actions,offer,Time_limit,responsible_person,Suggestions)
VALUES('$pro_id','$conclude','$problem_of_using','$effect','$Administrative','$Impact','$Student_Evaluation','$Critical','$comments'
,'$Critical_1','$comments_1','$Improvement','$Results','$Other_actions','$offer','$Time_limit','$responsible_person','$Suggestions')";

$result3 = mysqli_query($con, $sql3);

$sql4 = "INSERT INTO group7_mka5 (j_number,issue1,issue2,issue3,issue4,issue5,group1,group2,group3,group4,group5)
VALUES

('$pro_id','$issue1','$issue2','$issue3','$issue4','$issue5','$group1','$group2','$group3'
,'$group4','$group5')";

$result4 = mysqli_query($con, $sql4);





$sql5 = "INSERT INTO group8_mka5 
(j_number,A,BP,B,CP,C,DP,D,F,W,X,A1,BP1,B1,CP1,C1,DP1,D1,F1,W1,X1,A2,BP2,B2,CP2,C2,DP2,D2,F2,W2,X2)
VALUES
('$pro_id',
'$a','$bp','$b','$cp','$c','$dp','$d','$f',
'$w','$x',
'$a1','$bp1','$b1','$cp1','$c1','$dp1','$d1','$f1',
'$w1','$x1',
'$a2','$bp2','$b2','$cp2','$c2','$dp2','$d2','$f2',
'$w2','$x2')";

   $result5 = mysqli_query($con, $sql5);



	
if($result5){
	echo "<script type='text/javascript'>";
		echo "alert('Save Succesfuly');";
		echo "window.location = 'mainpage.php'; ";
		echo "</script>";

	}


		
			}
			else 
			{
		
				exit();
			}


mysqli_close($con);
   

  
?>