<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
   

   if($_SERVER["REQUEST_METHOD"]=="POST"){
        include "connect.php";

      
		  $pro_id = $_POST["pro_id"];
		    
		  $number_group = $_POST["number_group"];
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





  	
 $sql1 = "UPDATE group4_mk5 SET

 Week1='$Week1',Week2='$Week2',Week3='$Week3',Week4='$Week4',Week5='$Week5',Week6='$Week6',Week7='$Week7',Week8='$Week8',Week9='$Week9',Week10='$Week10',Week11='$Week11',Week12='$Week12',Week13='$Week13',Week14='$Week14',Week15='$Week15',
 Topics_1='$Topics1',Topics_2='$Topics2',Topics_3='$Topics3',Topics_4='$Topics4',Topics_5='$Topics5',Topics_6='$Topics6',Topics_7='$Topics7',Topics_8='$Topics8',Topics_9='$Topics9',Topics_10='$Topics10',Topics_11='$Topics11',Topics_12='$Topics12',Topics_13='$Topics13',Topics_14='$Topics14',Topics_15='$Topics15',
 hour1='$hour1',hour2='$hour2',hour3='$hour3',hour4='$hour4',hour5='$hour5',hour6='$hour6',hour7='$hour7',hour8='$hour8',hour9='$hour9',hour10='$hour10',hour11='$hour11',hour12='$hour12',hour13='$hour13',hour14='$hour14',hour15='$hour15',
 Instructor1='$Instructor1',Instructor2='$Instructor2',Instructor3='$Instructor3',Instructor4='$Instructor4',Instructor5='$Instructor5',Instructor6='$Instructor6',Instructor7='$Instructor7',
 Instructor8='$Instructor8',Instructor9='$Instructor9',Instructor10='$Instructor10',Instructor11='$Instructor11',Instructor12='$Instructor12',Instructor13='$Instructor13',Instructor14='$Instructor14',Instructor15='$Instructor15'
 
 WHERE j_number='$pro_id'";
 
	$result1 = mysqli_query($con, $sql1);

$sql2 = "UPDATE  group5_mka5 SET Topics_covered='$Topics_covered',Significance='$Significance',Compensation='$Compensation',Improveteaching='$Improveteaching',students_enrolled='$students_enrolled',assessment='$assessment'
,students_remaining='$students_remaining',students_withdrawn='$students_withdrawn',Factors_to_Rating='$Factors_to_Rating',Time_deviation='$Time_deviation',Discrepancies='$Discrepancies',Verificatio_method='$Verification_method'
WHERE j_number='$pro_id'";

$result2 = mysqli_query($con, $sql2);



$sql3 = "UPDATE  group6_mka5 SET conclude='$conclude',problem_of_using='$problem_of_using',effect='$effect',Administrative='$Administrative',Impact='$Impact',Student_Evaluation='$Student_Evaluation',Critical='$Critical'
,comments='$comments',Critical_1='$Critical_1',comments_1='$comments_1',Improvement='$Improvement',Results='$Results',Other_actions='$Other_actions',offer='$offer',Time_limit='$Time_limit',responsible_person='$responsible_person',Suggestions='$Suggestions'
WHERE j_number='$pro_id'";

$result3 = mysqli_query($con, $sql3);

$sql4 = "UPDATE  group7_mka5 SET issue1='$issue1',issue2='$issue2',issue3='$issue3',issue4='$issue4',issue5='$issue5',group1='$group1',group2='$group2',group3='$group3',group4='$group4',group5='$group5'

 WHERE j_number='$pro_id'";

$result4 = mysqli_query($con, $sql4);





$sql5 = "UPDATE  group8_mka5 SET A='$a',BP='$bp',B='$b',CP='$cp',C='$c',DP='$dp',D='$d',F='$f',W='$w',X='$x',A1='$a1',BP1='$bp1',B1='$b1',CP1='$cp1',C1='$c1',DP1='$dp1',D1='$d1',F1='$f1',
W1='$w1',X1='$x1',A2='$a2',BP2='$bp2',B2='$b2',CP2='$cp2',C2='$c2',DP2='$dp2',D2='$d2',F2='$f2',W2='$w2',X2='$x2'
WHERE j_number='$pro_id'";

   $result5 = mysqli_query($con, $sql5);



	
if($result1){
	echo "<script type='text/javascript'>";
		echo "alert('Save Succesfuly');";
		echo "window.location ='page_moallko5.php'; ";
		echo "</script>";

	}


		
			}
			else 
			{
				echo "<script>alert('ไม่สามารถบันทึกได้ครับ');window.history.back()();</script>";
				exit();
			}
			
if($result2){
	echo "<script type='text/javascript'>";
		echo "alert('Save Succesfuly');";
		echo "window.location ='page_moallko5.php'; ";
		echo "</script>";

	}


		
			
			else 
			{
				echo "<script>alert('ไม่สามารถบันทึกได้ครับ');window.history.back()();</script>";
				exit();
			}
			
if($result3){
	echo "<script type='text/javascript'>";
		echo "alert('Save Succesfuly');";
		echo "window.location ='page_moallko5.php'; ";
		echo "</script>";

	


		
			}
			else 
			{
				echo "<script>alert('ไม่สามารถบันทึกได้ครับ');window.history.back()();</script>";
				exit();
			}
			
if($result4){
	echo "<script type='text/javascript'>";
		echo "alert('Save Succesfuly');";
		echo "window.location ='page_moallko5.php'; ";
		echo "</script>";

	


		
			}
			else 
			{
				echo "<script>alert('ไม่สามารถบันทึกได้ครับ');window.history.back()();</script>";
				exit();
			}


			if($result5){
				echo "<script type='text/javascript'>";
					echo "alert('Save Succesfuly');";
					echo "window.location ='page_moallko5.php'; ";
					echo "</script>";
			
				
			
			
					
						}
						else 
						{
							echo "<script>alert('ไม่สามารถบันทึกได้ครับ');window.history.back()();</script>";
							exit();
						}

mysqli_close($con);
   

  
?>