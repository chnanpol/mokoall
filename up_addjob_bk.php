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
  




if($result3){
            echo "<script>";
            echo "alert('บันทึกสำเร็จ');";
            echo "window.location ='mainpage.php';";
            echo "</script>";
        }
    
   
    }
   mysqli_close($con);

?>
