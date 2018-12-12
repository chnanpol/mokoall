<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
   

   if($_SERVER["REQUEST_METHOD"]=="POST"){
        include "connect.php";
	
        $user = $_SESSION['user'];
        $faculty = $_POST["faculty"];
        $major = $_POST["major"];
        $id = $_POST["id"];
        $course = $_POST["course"];
        $teacher = $_POST["teacher"];
        $semester = $_POST["semester"];
		$semesterf = $_POST["semesterf"];
		$pre = $_POST["pre"];    
		$co = $_POST["co"];
        $place = $_POST["place"];
		$document = $_POST["document"];
		   
	//--------------------------------------------------------------------------------------------------------------//
		$Target = $_POST["Target"];
		$TargetAdjust = $_POST["TargetAdjust"];
		$Description = $_POST["Description"];
		$Lecture = $_POST["Lecture"];
		$Teaching = $_POST["Teaching"];
		$Apprenticeship = $_POST["Apprenticeship"];
		$Selfstudy = $_POST["Selfstudy"];
	//------------------------------------------------------------------------------------------------------------------------------//	
		$txtName = $_POST["txtName"];
		$Teachingone = $_POST["Teachingone"];
		$Evaluationmethod1 = $_POST["Evaluationmethod1"];
		
		$Knowledge1 = $_POST["Knowledge1"];
		$Teachingmethods2 = $_POST["Teachingmethods2"];
		$Evaluationmethod2 = $_POST["Evaluationmethod2"];
		
		
		$Cognitiveskills = $_POST["Cognitiveskills"];
		$Teachingmethods3 = $_POST["Teachingmethods3"];
		$Evaluationmethod3 = $_POST["Evaluationmethod3"];
		
		
		$Relationshipskills = $_POST["Relationshipskills"];
		$Teachingmethods4 = $_POST["Teachingmethods4"];
		$Evaluationmethod4 = $_POST["Evaluationmethod4"];
		
		
		
		$NumericSkills = $_POST["NumericSkills"];
		$Teachingmethods5 = $_POST["Teachingmethods5"];
		$Evaluationmethod5 = $_POST["Evaluationmethod5"];
		
		$lanla = implode (",",$_POST ['l']);
		$lans = implode (",",$_POST ['s']);
//------------------------------------------------------------------------------------------------------------------------------//	
	
//------------------------------------------------------------------------------------------------------------------------------//	

$sql1 = "INSERT INTO tbl_addjob
	 (c_user, stu_fac, stu_major, j_id, j_course, j_teacher, j_semester, j_pre, co, place, j_document,j_semester_f, j_datetime)
			 VALUES('$user','$faculty','$major','$id','$course','$teacher','$semester','$pre','$co','$place','$document','$semesterf',NOW())";
		$result = mysqli_query($con, $sql1);
	   
//--table2----------------------------------------------------------------------------------------------------------------------//
	
 $sql2 = "INSERT INTO group1 (c_user,target,target_adjust,description,lecture_hours,teaching_hours,Apprenticeship,Self_study,j_id)
			 VALUES('$user','$Target','$TargetAdjust','$Description','$Lecture','$Teaching','$Apprenticeship','$Selfstudy','$id')";
	$result2 = mysqli_query($con, $sql2) or die ("Error in query: $sql2 " . mysqli_error());
 
 
 //-------------------------------------------------------------------------------------------------------------------------------------//
 
 $sql3 = "INSERT INTO group2 
 (c_user,b_w,Teachingmethods_1,Evaluationmethod_1,
 knowledge_1,teachingmethods_2,Evaluationmethod_2,
 Cognitive_skills,teachingmethods_3,Evaluationmethod_3,
 Relationship_skills,teachingmethods_4,Evaluationmethod_4,
 Numeric_skills,teachingmethods_5,Evaluationmethod_5,j_id)

	VALUES
('$user','$txtName','$Teachingone','$Evaluationmethod1'
,'$Knowledge1','$Teachingmethods2','$Evaluationmethod2'
,'$Cognitiveskills','$Teachingmethods3','$Evaluationmethod3'
,'$Relationshipskills','$Teachingmethods4','$Evaluationmethod4'
,'$NumericSkills','$Teachingmethods5','$Evaluationmethod5','$id')";
	
	
	$result3 = mysqli_query($con, $sql3) or die ("Error in query: $sql3 " . mysqli_error($con));
 
 
  //-------------------------------------------------------------------------------------------------------------------------------------//
 $sql4 = "INSERT INTO group3
	 (c_user,Centered,Teaching,j_id)VALUES('$user','$lanla','$lans','$id')";
		$result4 = mysqli_query($con, $sql4) or die ("Error in query: $sql4 " . mysqli_error($con));
 
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

		
 $sql5 = "INSERT INTO group4 
 (j_id,j_semester,j_semester_f,
 Week1,Week2,Week3,Week4,Week5,Week6,Week7,Week8,Week9,Week10,Week11,Week12,Week13,Week14,Week15,
 Topics_1,Topics_2,Topics_3,Topics_4,Topics_5,Topics_6,Topics_7,Topics_8,Topics_9,Topics_10,Topics_11,Topics_12,Topics_13,Topics_14,Topics_15,
 hour1,hour2,hour3,hour4,hour5,hour6,hour7,hour8,hour9,hour10,hour11,hour12,hour13,hour14,hour15,
 Instructor1,Instructor2,Instructor3,Instructor4,Instructor5,Instructor6,Instructor7,
 Instructor8,Instructor9,Instructor10,Instructor11,Instructor12,Instructor13,Instructor14,Instructor15
 )
 VALUES
 ('$id','$semester','$semesterf',
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



$result5 = mysqli_query($con, $sql5) ;
 



	//ปิดการเชื่อมต่อ database
	mysqli_close($con);
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	if($result){
		echo "<script type='text/javascript'>";
	echo "alert('Save Succesfuly');";
	echo "window.location = 'mainpage.php'; ";
	echo "</script>";
		exit();
	
		}else {
		
				echo "<script>alert('ไม่สามารถบันทึกได้ครับ');window.history.back()();</script>";
			exit();
		}
	
	
		if($result2){
			echo "<script type='text/javascript'>";
		echo "alert('Save Succesfuly');";
		echo "window.location = 'mainpage.php'; ";
		echo "</script>";
			exit();
		
			}else {
			
					echo "<script>alert('ไม่สามารถบันทึกได้ครับ');window.history.back()();</script>";
				exit();
			}

			if($result3){
				echo "<script type='text/javascript'>";
			echo "alert('Save Succesfuly');";
			echo "window.location = 'mainpage.php'; ";
			echo "</script>";
				exit();
			
				}else {
				
						echo "<script>alert('ไม่สามารถบันทึกได้ครับ');window.history.back()();</script>";
					exit();
				}

				if($result4){
					echo "<script type='text/javascript'>";
				echo "alert('Save Succesfuly');";
				echo "window.location = 'mainpage.php'; ";
				echo "</script>";
					exit();
				
					}else {
					
							echo "<script>alert('ไม่สามารถบันทึกได้ครับ');window.history.back()();</script>";
						exit();
					}
	
					
				if($result5){
					echo "<script type='text/javascript'>";
				echo "alert('Save Succesfuly');";
				echo "window.location = 'mainpage.php'; ";
				echo "</script>";
					exit();
				
					}else {
					
							echo "<script>alert('ไม่สามารถบันทึกได้ครับ');window.history.back()();</script>";
						exit();
					}
	
	
	
	
	
	}


 ?>
 