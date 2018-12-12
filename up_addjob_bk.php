<?php
    require 'connect.php';
    if($_SERVER["REQUEST_METHOD"]=="POST"){
	$pro_id = $_POST['pro_id'];
    $fac = $_POST['faculty'];

	$major = $_POST['Major'];
	$id = $_POST['id'];
	$course = $_POST['course'];
	$teacher = $_POST['Teacher'];
	$semester = $_POST['semester'];
	$place = $_POST['place'];
	$preSub = $_POST['pre'];
	$coSub = $_POST['co'];
	$doc = $_POST['document'];
    $target = $_POST['Target'];
	
	$targetAdjust = $_POST['TargetAdjust'];
	$desc = $_POST['Description'];
	$lec = $_POST['Lecture'];
	$teach = $_POST['Teaching'];
	$Appre = $_POST['Apprenticeship'];
	$Selfstudy = $_POST['Selfstudy'];
	$hourPerSem = $_POST['HourPerSemester'];

	$black = $_POST['b_w'];
	$teachniqOne = $_POST['Teachingone'];
	$evaluatMethod1 = $_POST['Evaluationmethod1'];
	
	$knowledge1 = $_POST['Knowledge1'];
	$teachmethods2 = $_POST['Teachingmethods2'];
	$Evaluationmethod2 = $_POST['Evaluationmethod2'];
	
	$Cognitiveskills = $_POST['Cognitiveskills'];
	$Teachingmethods3 = $_POST['Teachingmethods3'];
	$Evaluationmethod3 = $_POST['Evaluationmethod3'];
	
	$Relationshipskills = $_POST['Relationshipskills'];
	$Teachingmethods4 = $_POST['Teachingmethods4'];
	$Evaluationmethod4 = $_POST['Evaluationmethod4'];
	
	$NumericSkills = $_POST['NumericSkills'];
	$Teachingmethods5 = $_POST['Teachingmethods5'];
	$Evaluationmethod5 = $_POST['Evaluationmethod5'];

	$lanl =implode(",",$_POST ['l']);
	$lans =implode(",",$_POST ['s']);
	
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

	

    $sql1 = "UPDATE tbl_addjob SET stu_fac='$fac',stu_major='$major' ,j_id='$id' ,j_course='$course',j_teacher='$teacher' 
    ,j_semester='$semester' ,place='$place' ,j_pre='$preSub' ,co='$coSub' ,j_datetime='$doc' WHERE j_number='$pro_id'";

$result1 = mysqli_query($con, $sql1) or die ("Error in query: $sql1 " . mysqli_error($con));

$sql2 = "UPDATE group1 SET target='$target' ,target_adjust='$targetAdjust' ,description='$desc' ,lecture_hours='$lec',teaching_hours='$teach' 
, Self_study='$Selfstudy', Apprenticeship='$Appre',HourPerSemester='$hourPerSem' WHERE j_number='$pro_id'";

$result2 = mysqli_query($con, $sql2) or die ("Error in query: $sql2 " . mysqli_error($con));

 
$sql3 = "UPDATE group2 SET b_w='$black' ,Teachingmethods_1='$teachniqOne' ,	Evaluationmethod_1='$evaluatMethod1' ,
knowledge_1='$knowledge1',teachingmethods_2='$teachmethods2' , Evaluationmethod_2='$Evaluationmethod2', 
Cognitive_skills='$Cognitiveskills',teachingmethods_3='$Teachingmethods3',Evaluationmethod_3='$Evaluationmethod3',
Relationship_skills='$Relationshipskills' , teachingmethods_4='$Teachingmethods4',
Evaluationmethod_4='$Evaluationmethod4',Numeric_skills='$NumericSkills',	teachingmethods_5='$Teachingmethods5',Evaluationmethod_5='$Evaluationmethod5'
WHERE j_number='$pro_id'";


   $result3 = mysqli_query($con, $sql3) or die ("Error in query: $sql3 " . mysqli_error($con));


   $sql4 = "UPDATE group3 SET Centered='$lanl',Teaching='$lans' WHERE j_number='$pro_id'";
   $result4 = mysqli_query($con, $sql4) or die ("Error in query: $sql4 " . mysqli_error($con));
  
 
 $sql5 = "UPDATE group4 SET 
 Week1='$Week1',Week2='$Week2',Week3='$Week3',Week4='$Week4',Week6='$Week6',Week7='$Week7',Week8='$Week8',Week9='$Week9',Week10='$Week10',Week5='$Week5',
 Week11='$Week11',Week12='$Week12',Week13='$Week13',Week14='$Week14', Week15='$Week15',

 Topics_1='$Topics1',Topics_2='$Topics2',Topics_3='$Topics3',Topics_4='$Topics4',Topics_5='$Topics5',Topics_6='$Topics6',Topics_7='$Topics7',
 Topics_8='$Topics8',Topics_9='$Topics9',Topics_10='$Topics10',Topics_11='$Topics11',Topics_12='$Topics12',Topics_13='$Topics13',
 Topics_14='$Topics14',Topics_15='$Topics15',

 hour1='$hour1',hour2='$hour2',hour3='$hour3',hour4='$hour4',hour5='$hour5',hour6='$hour6',hour7='$hour7',hour8='$hour8',hour9='$hour9',hour10='$hour10',
 hour11='$hour11',hour12='$hour12',hour13='$hour13',hour14='$hour14',hour15='$hour15',

 
 Instructor1='$Instructor1',Instructor2='$Instructor2',Instructor3='$Instructor3',Instructor4='$Instructor4',Instructor5='$Instructor5',
 Instructor6='$Instructor6',Instructor7='$Instructor7',Instructor8='$Instructor8',Instructor9='$Instructor9',Instructor10='$Instructor10',
 Instructor11='$Instructor11',Instructor12='$Instructor12',Instructor13='$Instructor13',Instructor14='$Instructor14',Instructor15='$Instructor15'
  WHERE j_number='$pro_id'";



$result5 = mysqli_query($con, $sql5) or die ("Error in query: $sql5 " . mysqli_error($con));



if($result5){
            echo "<script>";
            echo "alert('บันทึกสำเร็จ');";
            echo "window.location ='mainpage.php';";
            echo "</script>";
        }
    
   
    }
   mysqli_close($con);

?>
