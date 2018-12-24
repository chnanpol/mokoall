<?php
   require 'connect.php';

   $j_number   = $_GET ['j_number'];
   $qpro = "SELECT * FROM tbl_addjob A
   INNER JOIN group1 B ON A.j_number = B.j_number
   INNER JOIN group2 C ON A.j_number = C.j_number
   INNER JOIN group3 D ON A.j_number = D.j_number 
   INNER JOIN group4 E ON A.j_number = E.j_number 
   WHERE A.j_number = '$j_number'";
   $respro = mysqli_query($con, $qpro);
   $rowpro = mysqli_fetch_array($respro, MYSQLI_ASSOC);
   $checkbox_array = explode(",", $rowpro['Centered']);
   $checkbox_array1 = explode(",", $rowpro['Teaching']);
 ?>
 <html>
	<head>
	  <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	  <title>อัพเดทข้อมูล</title>
   
	  <script language="javascript"> 
	 function printpr()
	 {
	 var OLECMDID = 7;
	 /* OLECMDID values:
	 * 6 - print
	 * 7 - print preview
	 * 1 - open window
	 * 4 - Save As
	 */
	 var PROMPT = 1; // 2 DONTPROMPTUSER
	 var WebBrowser = '<OBJECT ID="upform" WIDTH=0 HEIGHT=0 CLASSID="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2"></OBJECT>';
	 document.body.insertAdjacentHTML('beforeEnd', WebBrowser);
	 upform.ExecWB(OLECMDID, PROMPT);
	 upform.outerHTML = "";
	 }
	  
	 </script>
 
 
 
 </div>
  </nav>
	  <style>
			 label {
			   display: block;
			 }
	 
	  </style>
   <style>
			  
 table, td, th {
	 border: 2px solid black;
 }
 
 table {
	 border-collapse: collapse;
	 width: 100%;
	 height: 70px;
	 
 }
 
 th {
	 height: 70px;
 }
 
 
 </style>
	</head>
	
 <body class=" navbar-light" style="background-color: #e3f2fd;"  OnLoad="printpr();">
	<body class="bg-secondary">
	
	 <header class="navbar navbar-expand navbar-dark bg-dark">
		 <!DOCTYPE html>
		 <!-- MENU BAR -->
		 <div class="navbar-nav-scroll">
			 <ul class="nav navbar-nav bd-navbar-nav flex-row tab-content" id="myTab" role="tablist">
				 <li class="nav-item">
					 <a class="nav-link btn btn-dark" href="mainpage.php">Home</a>
				 </li>
			 </ul>
		 </div>
		 <div style="A_CSS_ATTRIBUTE:all;position: absolute;bottom: 20px; right: 25px;left: 25px; top: 15px;  ">
		 </div>
 
		 <!-- LOGIN BAR -->
		 <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex ">
			 <li class="nav-item">
				 <a class="btn btn-dark nav-link" href="logout.php">Logout</a>
			 </li>
		 </ul>
	 </header>
	 <br>
	 <div class="container bg-light rounded">
	 <form method="POST" id="upform" action="up_addjob_bk.php" >
 
	 <br>
	 
 <table border="2px"> 
 <h2> หมวดที่ 1 ข้อมูลทั่วไป  </h2>
	
	 <tr>
			 <th>  <center>    คณะ </th>  </center>
 
	 </tr>
	 <tr>
	 
		 <td>
		 <div   class="form-group">
					 <label class="form-text"></label>
					<input id="faculty" name="faculty" class="form-control"value="<?php echo $rowpro['stu_fac']; ?>"readonly>
				 </div>
		 </td>					
 
  </tr>
		 </table>	
		 <table> 
 
		 <tr>
			 <th>  <center>    สาขา </th>  </center>
			 <th>  <center>    ชื่อวิชา </th>  </center>
		 
	 </tr>
			 <tr>	
 <td>
 <div   class="form-group">
					 <label class="form-text"></label>
					<input id="Major" name="Major" class="form-control"value="<?php echo $rowpro['stu_major']; ?>"readonly>
				 </div>
 
 </td>
 
 
 <td>
 <div   class="form-group">	
					 <label class="form-text"> </label>
					<input id="id" name="id" class="form-control"value="<?php echo $rowpro['j_id']; ?>"readonly>
				 </div>
 
					 </td>
 
					 </tr>
				 
					 </table>
					 
					 
					 
					 
		 <table> 
		 
		 <tr>
				 
					 <th>  <center>    หลักสูตรและประเภทของวิชา </th>  </center>
				 
					 </tr>	
 
 <tr>
 <td>
 <div   class="form-group">
					 <label class="form-text"> </label>
					<textarea id="course" name="course" class="form-control"readonly> <?php echo $rowpro['j_course']; ?> </textarea>
				 </div>
		 </td>	
	 </tr> 
 
	 </table>
				 
		 <table>
		 <tr>
			 <th>  <center>    อาจารย์ผู้รับผิดชอบรายวิชาและอาจารย์ผู้สอน </th>  </center>
			 <th>  <center>    ภาคการศึกษา </th>  </center>
			 <th>  <center>    ปีการศึกษา </th>  </center>
		 
	 </tr>
		 
			   
			 <tr>
			 <td>
	 <div   class="form-group">
					 <label class="form-text"></label>
					<textarea id="Teacher" name="Teacher" class="form-control"readonly><?php echo $rowpro['j_teacher']; ?></textarea>
				 </div>
 
				 </td>
				 <td>
 
				 <div   class="form-group">
					 <label class="form-text"></label>
					<input id="semester" name="semester" class="form-control"value="<?php echo $rowpro['j_semester']; ?>"readonly>
				 </div>
 
				 </td>
				 <td>
				 <div   class="form-group">
					 <label class="form-text"></label>
					<input id="semester" name="semesterf" class="form-control"value="<?php echo $rowpro['j_semester_f']; ?>"readonly>
				 </div>
				 </td>
				 </tr>
 
				 </table>
			 
		 
			 
			 <table>
			 <tr>
			 <th> <center> รายชื่อวิชาที่ต้องเรียนมาก่อน </center > </th>
			 <th> <center> รายชื่อวิชาที่ต้องเรียนพร้อมกัน </center > </th>
			 <th> <center> สถานที่เรียน </center > </th>
			 </tr>
			 <tr>
 
			   <td>
			   <div   class="form-group">
					 <label class="form-text"></label>
					<input id="pre" name="pre" class="form-control"value="<?php echo $rowpro['j_pre']; ?>"readonly>
				 </div>
				 </td>
				 <td>
				 <div   class="form-group">
					 <label class="form-text"></label>
					<input id="co" name="co" class="form-control"value="<?php echo $rowpro['co']; ?>"readonly>
				   </div>
				 </td>
				 <td>
				   <div   class="form-group">
					 <label class="form-text"></label>
					<input id="place" name="place" class="form-control"value="<?php echo $rowpro['place']; ?>"readonly>
				 </div>
				 
		 </td>
		 </tr>
		 </table>
 
			 <table>
			 <tr>
			 
			 <th>  <center>วันที่จัดทำหรือปรับปรุงรายละเอียดวิชาครั้งล่าสุด </center> </th>
			 
			 </tr>
			 <tr>
			 <td>
	   <div   class="form-group">
					 <label class="form-text">วันที่จัดทำหรือปรับปรุงรายละเอียดวิชาครั้งล่าสุด</label>
					<input id="document" name="document" class="form-control"value="<?php echo $rowpro['j_datetime']; ?>"readonly>
				 </div>
 
			 </td>
			 </tr>
			 </table>
			 <br>
			 <br>
 
			 <div style="page-break-after: always"></div>
			 <br>
 
				 
				 <center> <h2> หมวดที่ 2 จุดมุ่งหมายและวัตถุประสงค์  </h2>  </center>
 
			 <table>
			 <tr>
			 <th> <center> จุดมุ่งหมายของรายวิชา </center > </th>
		 
			 </tr>
			 <tr>
			 <td>
			 <div   class="form-group">
					<label class="form-text"></label>
					<textarea id="Target" name="Target" class="form-control"readonly> <?php echo $rowpro['target']; ?> </textarea>
				 </div>
			 </tr>
			 </td>
			 </table>
			 <table>
			 <tr>
			 <th> <center> วัตถุประสงค์ในการพัฒนา/ปรับปรุงรายวิชา </center > </th>
			 </tr>
			 <tr>
			 <td>
			 <div   class="form-group">
					 <label class="form-text"></label>
					<textarea id="TargetAdjust" name="TargetAdjust" class="form-control"readonly> <?php echo $rowpro['target_adjust']; ?> </textarea>
				 </div>
			 </td>
			 </tr>
			 </table>
			 <table>
			 <tr>
			 <th> <center> วัตถุประสงค์ในการพัฒนา/ปรับปรุงรายวิชา </center > </th>
			 </tr>
			 <tr>
			 <td>
			 <div   class="form-group">
					 <label class="form-text"></label>
					<textarea id="Description" name="Description" class="form-control"readonly> <?php echo $rowpro['description']; ?> </textarea>
				 </div>
 
				 </td>
				 </tr>
 
			 </div> <br>
			 
			 <center>	<h2>หมวดที่ 3 ลักษณะและการดำเนินการ </h2> <br> </center>
			 
					 
 <center>	
 <table border="2px"> 
	 <tr>
			 <td>  <center>    บรรยาย (ชั่วโมง) </td>  </center>
  <td>   <center>   สอนเสริม (ชั่วโมง) </td> </center>
  <td>   <center>  การฝึกปฏิบัติงานภาคสนาม/การฝึกงาน(ชั่วโมง)  </td> </center>
  <td>   <center>   การศึกษาด้วยตนเอง(ชั่วโมงต่อสัปดาห์)</td> </center>
	 </tr>
	 
	 <tr>
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Lecture" name="Lecture" class="form-control"value="<?php echo $rowpro['lecture_hours']; ?>"readonly>
			 </div>
		 </td>					
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Teaching" name="Teaching" class="form-control"value="<?php echo $rowpro['teaching_hours']; ?>"readonly>
			 </div>
		 </td>				
	 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Apprenticeship" name="Apprenticeship" class="form-control"value="<?php echo $rowpro['Apprenticeship']; ?>"readonly>
			 </div>
		 </td>				
	 
	 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Selfstudy" name="Selfstudy" class="form-control"value="<?php echo $rowpro['Self_study']; ?>"readonly>
			 </div>
		 </td>				
	 </tr> 
	 
	 </table>
				 
 </center>
 <table>
		 <tr>
		 <th>  <center> จำนวนชั่วโมงต่อสัปดาห์ที่อาจารย์ให้คำปรึกษาและแนะนำทางวิชาการแก่นักศึกษาเป็นรายบุคคล <center> </th>
		 </tr>
		 <tr>
 
		 <td>
		 <div class="form-group">
				 <label class="form-text"></label>
					<input id="HourPerSemester" name="HourPerSemester" class="form-control"value="<?php echo $rowpro['HourPerSemester']; ?>"readonly>
				 </div>
		 </td>
		 </tr>
 </table>
			 <br>
			 <div style="page-break-after: always"></div>
		 
 <br>
			 
				 <h2>หมวดที่ 4 การพัฒนาการเรียนรู้ของนักศึกษา</h2> <br>
	 <table>
			 <tr>
			 <th> <center>  แผนที่แสดงการกระจายความรับผิดชอบต่อผลการเรียนรู้จากหลักสูตรสู่รายวิชา <center> </th>
			 </tr>
			 <tr>
			 <td>
			 <div class="form-group">
				 
				 <label class="form-text">  </label>
					<textarea id="b_w" name="b_w" class="form-control"readonly> <?php echo $rowpro['b_w']; ?>  </textarea> 
				 </div>
				 </td>
				 </tr>
				 </table>
				 <table>
			 <tr>
			 <th> <center>  วิธีการสอน <center> </th>
			 </tr>
			 <tr>
			 <td>
			 <div class="form-group">
				 
				 <label class="form-text">  </label>
				 <textarea id="Teachingone" name="Teachingone" class="form-control"readonly> <?php echo $rowpro['Teachingmethods_1']; ?> </textarea>
				 </div>
				 </td>
				 </tr>
				 </table>
				 <table>
			 <tr>
			 <th> <center>  วิธีการประเมินผล <center> </th>
			 </tr>
			 <tr>
			 <td>
			 <div class="form-group">
				 
				 <label class="form-text">  </label>
				 <input id="Evaluationmethod1" name="Evaluationmethod1" class="form-control"value="<?php echo $rowpro['Evaluationmethod_1']; ?>"readonly>
				 </div>
				 </td>
				 </tr>
				 </table>
 
 
 
			 
			 <hr>
			 <br>
			 
			 <h3> ความรู้ </h3> <hr>
 
 
 <table>
			 <tr>
			 <th> <center>  ความรู้ที่ต้องได้รับ <center> </th>
			 </tr>
			 <tr>
			 <td>
			 <div class="form-group">
				 
				 <label class="form-text">  </label>
				 <input id="Knowledge1" name="Knowledge1" class="form-control"value="<?php echo $rowpro['knowledge_1']; ?>"readonly>
				 </div>
				 </td>
				 </tr>
				 </table>
				 <table>
			 <tr>
			 <th> <center>  วิธีการสอน <center> </th>
			 </tr>
			 <tr>
			 <td>
			 <div class="form-group">
				 
				 <label class="form-text">  </label>
				 <input id="Teachingmethods2" name="Teachingmethods2" class="form-control"value="<?php echo $rowpro['teachingmethods_2']; ?>"readonly>
				 </div>
				 </td>
				 </tr>
				 </table>
				 <table>
			 <tr>
			 <th> <center>  วิธีการประเมินผล <center> </th>
			 </tr>
			 <tr>
			 <td>
			 <div class="form-group">
				 
				 <label class="form-text">  </label>
				 <input id="Evaluationmethod2" name="Evaluationmethod2" class="form-control"value="<?php echo $rowpro['Evaluationmethod_2']; ?>"readonly>
				 </div>
				 </td>
				 </tr>
				 </table>
 
 
 
		 <div style="page-break-after: always"></div>
				 
			 <hr>
			 <br>
			 <h3>ทักษะการแก้ปัญหา</h3> <hr>
 
 
 <table>
			 <tr>
			 <th> <center>  ทักษะทางปัญญาที่ต้องพัฒนา <center> </th>
			 </tr>
			 <tr>
			 <td>
			 <div class="form-group">
				 
				 <label class="form-text">  </label>
				 <input id="Cognitiveskills" name="Cognitiveskills" class="form-control"value="<?php echo $rowpro['Cognitive_skills']; ?>"readonly>
				 </div>
				 </td>
				 </tr>
				 </table>
				 <table>
			 <tr>
			 <th> <center>  วิธีการสอน <center> </th>
			 </tr>
			 <tr>
			 <td>
			 <div class="form-group">
				 
				 <label class="form-text">  </label>
				 <input id="Teachingmethods3" name="Teachingmethods3" class="form-control"value="<?php echo $rowpro['teachingmethods_3']; ?>"readonly>
				 </div>
				 </td>
				 </tr>
				 </table>
				 <table>
			 <tr>
			 <th> <center>  วิธีการประเมินผล <center> </th>
			 </tr>
			 <tr>
			 <td>
			 <div class="form-group">
				 
				 <label class="form-text">  </label>
				 <input id="Evaluationmethod3" name="Evaluationmethod3" class="form-control"value="<?php echo $rowpro['Evaluationmethod_3']; ?>"readonly>
				 </div>
				 </td>
				 </tr>
				 </table>
 
 
 
 
 
			 
				 
			 <hr> 	
			 <br>
			 <h3>ทักษะความสัมพันธ์ระหว่างบุคคลและความรับผิดชอบ</h3> <hr>
 
			 
 <table>
			 <tr>
			 <th> <center>  ทักษะความสัมพันธ์ระหว่างบุคคลและความรับผิดชอบที่ต้องพัฒนา <center> </th>
			 </tr>
			 <tr>
			 <td>
			 <div class="form-group">
				 
				 <label class="form-text">  </label>
				 <input id="Relationshipskills" name="Relationshipskills" class="form-control"value="<?php echo $rowpro['knowledge_1']; ?>"readonly>
				 </div>
				 </td>
				 </tr>
				 </table>
				 <table>
			 <tr>
			 <th> <center>  วิธีการสอน <center> </th>
			 </tr>
			 <tr>
			 <td>
			 <div class="form-group">
				 
				 <label class="form-text">  </label>
				 <input id="Teachingmethods4" name="Teachingmethods4" class="form-control"value="<?php echo $rowpro['teachingmethods_4']; ?>"readonly>
				 </div>
				 </td>
				 </tr>
				 </table>
				 <table>
			 <tr>
			 <th> <center>  วิธีการประเมินผล <center> </th>
			 </tr>
			 <tr>
			 <td>
			 <div class="form-group">
				 
				 <label class="form-text">  </label>
				 <input id="Evaluationmethod4" name="Evaluationmethod4" class="form-control"value="<?php echo $rowpro['Evaluationmethod_4']; ?>"readonly>
				 </div>
				 </td>
				 </tr>
				 </table>
		 
				 <div style="page-break-after: always"></div>
			 <hr> 	
			 <br>
			 <h3>ทักษะการวิเคราะห์เชิงตัวเลข  การสื่อสาร  และการใช้เทคโนโลยีสารสนเทศ</h3> <hr>
 
	 <table>
			 <tr>
			 <th> <center>  ทักษะการวิเคราะห์เชิงตัวเลข  การสื่อสาร  และการใช้เทคโนโลยีสารสนเทศที่ต้องพัฒนา <center> </th>
			 </tr>
			 <tr>
			 <td>
			 <div class="form-group">
				 
				 <label class="form-text">  </label>
				 <input id="NumericSkills" name="NumericSkills" class="form-control"value="<?php echo $rowpro['Numeric_skills']; ?>"readonly>
				 </div>
				 </td>
				 </tr>
				 </table>
				 <table>
			 <tr>
			 <th> <center>  วิธีการสอน <center> </th>
			 </tr>
			 <tr>
			 <td>
			 <div class="form-group">
				 
				 <label class="form-text">  </label>
				 <input id="Teachingmethods5" name="Teachingmethods5" class="form-control"value="<?php echo $rowpro['teachingmethods_5']; ?>"readonly>
				 </div>
				 </td>
				 </tr>
				 </table>
				 <table>
			 <tr>
			 <th> <center>  วิธีการประเมินผล <center> </th>
			 </tr>
			 <tr>
			 <td>
			 <div class="form-group">
				 
				 <label class="form-text">  </label>
				 <input id="Evaluationmethod5" name="Evaluationmethod5" class="form-control"value="<?php echo $rowpro['Evaluationmethod_5']; ?>"readonly>
				 </div>
				 </td>
				 </tr>
				 </table>
		 
	 <table>
	 <tr>
			 <hr> <br>
			 <h2> วิธีการสอน (Teaching Approach) และการจัดการเรียนการสอนที่เน้นผู้เรียนเป็นสำคัญ  </h2>
			 <br>
				 <center> <h4>     (Student – Centered Approach) </h4>    </center>
				 
			 <td>	<input type="checkbox" name='l[]' value= "การบรรยาย (Lecture)"   
			 <?php if(in_array("การบรรยาย (Lecture)", $checkbox_array)){ echo " checked=\"checked\""; } ?> />การบรรยาย (Lecture) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
			 
			 <input type="checkbox" name='l[]' value= "การฝึกปฏิบัติ (Practice)"   
			 <?php if(in_array("การฝึกปฏิบัติ (Practice)", $checkbox_array)){ echo " checked=\"checked\""; } ?> />การฝึกปฏิบัติ (Practice)&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
		 
			 <input type="checkbox" name='l[]' value= "การเรียนรู้โดยกิจกรรมโครงงาน (Project-based-Learning)"   
			 <?php if(in_array("การเรียนรู้โดยกิจกรรมโครงงาน (Project-based-Learning)", $checkbox_array)){ echo " checked=\"checked\""; } ?> />
			 การเรียนรู้โดยกิจกรรมโครงงาน (Project-based-Learning) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
		 </td>
		 </tr>
		 
		 
		 
		 <td>
			 
					
				 
	   <input type="checkbox" name='l[]' value= "การอภิปราย (Discussion)"   
			 <?php if(in_array("การอภิปราย (Discussion)", $checkbox_array)){ echo " checked=\"checked\""; } ?> />การอภิปราย (Discussion) &nbsp; &nbsp; &nbsp; &nbsp; 
				 <input type="checkbox" name='l[]' value= "การเรียนรู้โดยกิจกรรมการวิจัย(Research-based- Learning)"   
			 <?php if(in_array("การเรียนรู้โดยกิจกรรมการวิจัย(Research-based- Learning)", $checkbox_array)){ echo " checked=\"checked\""; } ?> />การเรียนรู้โดยกิจกรรมการวิจัย(Research-based- Learning) &nbsp; &nbsp; &nbsp; &nbsp; 
				 <input type="checkbox" name='l[]' value= "การเรียนการสอนแบบ (Hybrid Learning System)"   
			 <?php if(in_array("การเรียนการสอนแบบ (Hybrid Learning System)", $checkbox_array)){ echo " checked=\"checked\""; } ?> />การเรียนการสอนแบบ (Hybrid Learning System)&nbsp; &nbsp; &nbsp; &nbsp; 
			 
			 </td>
			 </tr> 
				 
			 
 <tr>
			 <td>	<input type="checkbox" name='l[]' value= "การสัมมนา (Seminar)"   
			 <?php if(in_array("การสัมมนา (Seminar)", $checkbox_array)){ echo " checked=\"checked\""; } ?> />การสัมมนา (Seminar) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
				 <input type="checkbox" name='l[]' value= "การเรียนรู้ผ่านเครือข่ายอินเทอร์เน็ต (Online Learning/Internet-based-Learning)"   
			 <?php if(in_array("การเรียนรู้ผ่านเครือข่ายอินเทอร์เน็ต (Online Learning/Internet-based-Learning)", $checkbox_array)){ echo " checked=\"checked\""; } ?> />การเรียนรู้ผ่านเครือข่ายอินเทอร์เน็ต (Online Learning/Internet-based-Learning) &nbsp;&nbsp; 
				 <input type="checkbox" name='l[]' value= "การเรียนรู้เป็นรายบุคคล  (Individual Study)"   
			 <?php if(in_array("การเรียนรู้เป็นรายบุคคล  (Individual Study)", $checkbox_array)){ echo " checked=\"checked\""; } ?> />การเรียนรู้เป็นรายบุคคล  (Individual Study) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
			 </td>
			 </tr>
			 <td>
				 <input type="checkbox" name='l[]' value= "การเรียนรู้แบบแสวงหาความรู้ได้ด้วยตนเอง  (Self-study)"   
			 <?php if(in_array("การเรียนรู้แบบแสวงหาความรู้ได้ด้วยตนเอง  (Self-study)", $checkbox_array)){ echo " checked=\"checked\""; } ?> />การเรียนรู้แบบแสวงหาความรู้ได้ด้วยตนเอง  (Self-study) &nbsp;
				 <input type="checkbox" name='l[]' value= "การเรียนรู้จากการทำงาน (Work-based Learning)"   
			 <?php if(in_array("การเรียนรู้จากการทำงาน (Work-based Learning))", $checkbox_array)){ echo " checked=\"checked\""; } ?> />การเรียนรู้จากการทำงาน (Work-based Learning) &nbsp;
				 <input type="checkbox" name='l[]' value= "กรณีศึกษา (Case Study)..."   
			 <?php if(in_array("กรณีศึกษา (Case Study)...", $checkbox_array)){ echo " checked=\"checked\""; } ?> />กรณีศึกษา (Case Study)... &nbsp;
			 </td>
			 </table>
			  <br> <hr>
 
 
 
 
 
 
 
 
 
		 
			 <table>
			 <center> <h4>     สื่อการสอน (Teaching Aids/Instructional Media) </h4> </center>
		 
			 <tr>
			 <td>
				 <input type="checkbox" name='s[]' value= "รูปภาพ (Pictures)"   
			 <?php if(in_array("รูปภาพ (Pictures)", $checkbox_array1)){ echo " checked=\"checked\""; } ?> />รูปภาพ (Pictures) &nbsp;
				 <input type="checkbox" name='s[]' value= "สื่อนำเสนอในรูปแบบ  PowerPoint"   
			 <?php if(in_array("สื่อนำเสนอในรูปแบบ  PowerPoint", $checkbox_array1)){ echo " checked=\"checked\""; } ?> />สื่อนำเสนอในรูปแบบ  PowerPoint &nbsp;
			 <input type="checkbox" name='s[]' value= "ของจริง (Authentic Material)"   
			 <?php if(in_array("ของจริง (Authentic Material)", $checkbox_array1)){ echo " checked=\"checked\""; } ?> />ของจริง (Authentic Material) &nbsp; <br>
				 </td>
				 </tr>
 
				 <tr>
				 <td>

				 <input type="checkbox" name='s[]' value= "สื่ออิเล็กทรอนิกส์ (Electronic Media) เช่น Option Finder, VCD,  DVD, e-book ฯลฯ "   
			 <?php if(in_array("สื่ออิเล็กทรอนิกส์ (Electronic Media) เช่น Option Finder, VCD,  DVD, e-book ฯลฯ ", $checkbox_array1)){ echo " checked=\"checked\""; } ?> />สื่ออิเล็กทรอนิกส์ (Electronic Media) เช่น Option Finder, VCD,  DVD, e-book ฯลฯ  &nbsp;
			 </td>
			 </tr>
		 
			 </table>
<br>
			 <table>

			 <center> <h4>     กิจกรรมสำหรับนักศึกษา (Student Activities)</h4> </center>
			
			 <tr>
			 <td>
				 <div>
				 <input type="checkbox" name='s[]' value= "การค้นคว้าข้อมูล(Data/Information Search)"   
			 <?php if(in_array("การค้นคว้าข้อมูล(Data/Information Search)", $checkbox_array1)){ echo " checked=\"checked\""; } ?> />การค้นคว้าข้อมูล(Data/Information Search) &nbsp;
				 
				 <input type="checkbox" name='s[]' value= "เกมส์ (Games)"   
			 <?php if(in_array("เกมส์ (Games)", $checkbox_array1)){ echo " checked=\"checked\""; } ?> />เกมส์ (Games) &nbsp;
				 
				 
				 <input type="checkbox" name='s[]' value= "การระดมสมอง (Brainstorming)"   
			 <?php if(in_array("การระดมสมอง (Brainstorming)", $checkbox_array1)){ echo " checked=\"checked\""; } ?> />การระดมสมอง (Brainstorming) &nbsp;
				 
				 <input type="checkbox" name='s[]' value= "สถานการณ์จำลอง (Simulation)"   
			 <?php if(in_array("สถานการณ์จำลอง (Simulation)", $checkbox_array1)){ echo " checked=\"checked\""; } ?> />สถานการณ์จำลอง (Simulation) &nbsp;
				 
				 </td>

				 </tr>
				 <tr>
				 <td>
				 <input type="checkbox" name='s[]' value= "การนำเสนอ (Presentation)"   
			 <?php if(in_array("การนำเสนอ (Presentation))", $checkbox_array1)){ echo " checked=\"checked\""; } ?> />การนำเสนอ (Presentation) &nbsp;
			 
				 <input type="checkbox" name='s[]' value= "การสำรวจข้อมูล (Survey)"   
			 <?php if(in_array("การสำรวจข้อมูล (Survey)", $checkbox_array1)){ echo " checked=\"checked\""; } ?> />การสำรวจข้อมูล (Survey) &nbsp;
			 
				 <input type="checkbox" name='s[]' value= "การแสดงบทบาทสมมติ (Role Play)"   
			 <?php if(in_array("การแสดงบทบาทสมมติ (Role Play)", $checkbox_array1)){ echo " checked=\"checked\""; } ?> />การแสดงบทบาทสมมติ (Role Play) &nbsp;
			 
				 <input type="checkbox" name='s[]' value= "การทดลอง (Experiment)"   
			 <?php if(in_array("การทดลอง (Experiment)", $checkbox_array1)){ echo " checked=\"checked\""; } ?> />การทดลอง (Experiment) &nbsp;
			 </td>
			 </tr>
			 <tr>
			 <td>
				 <input type="checkbox" name='s[]' value= "การศึกษาดูงาน (Field Trip)"   
			 <?php if(in_array("การศึกษาดูงาน (Field Trip)", $checkbox_array1)){ echo " checked=\"checked\""; } ?> />การศึกษาดูงาน (Field Trip) &nbsp;
				 
				 <input type="checkbox" name='s[]' value= "การเชิญผู้มีประสบการณ์มาสอนเสริม"   
			 <?php if(in_array("การเชิญผู้มีประสบการณ์มาสอนเสริม", $checkbox_array1)){ echo " checked=\"checked\""; } ?> />การเชิญผู้มีประสบการณ์มาสอนเสริม &nbsp;
				 
				 <input type="checkbox" name='s[]' value= "กการส่งนักศึกษาเข้าร่วมกิจกรรมวิชาการ"   
			 <?php if(in_array("การส่งนักศึกษาเข้าร่วมกิจกรรมวิชาการ", $checkbox_array1)){ echo " checked=\"checked\""; } ?> />การส่งนักศึกษาเข้าร่วมกิจกรรมวิชาการ &nbsp;
				 
				 </div>
 </td>
 </tr>
  </table>
 
  <div style="page-break-after: always"></div>
		  <br><br>
		  <input type="hidden" name="pro_id" value="<?php echo $rowpro['j_number']; ?>">
	  <CENTER> <h2> แผนการสอน</h2>  </CENTER>
		<table border="2px"> 
	 <tr>
  <th>  <center>    สัปดาห์ </th>  </center>
  <th>   <center>   หัวข้อ </th> </center>
  <th>  <center> จำนวนชั่วโมง</th> </center>
  <th>  <center>  ผู้สอน </th> </center>
	 </tr>
	 
	 <tr>
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week1" name="Week1" class="form-control" type="number" value="<?php echo $rowpro['Week1']; ?>"readonly>	
			 </div>
			 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <textarea id="Topics1" name="Topics1" class="form-control" readonly><?php echo $rowpro['Topics_1']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="hour1" name="hour1" class="form-control"  type="number"value="<?php echo $rowpro['hour1']; ?>"readonly> 
			 </div>
			 </td>
 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				
				 <input id="Instructor1" name="Instructor1" class="form-control"   value="<?php echo $rowpro['Instructor1']; ?>"readonly> 
				 </td>
				 </tr>
 
 	 
				 <tr>
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week2" name="Week2" class="form-control" type="number" value="<?php echo $rowpro['Week2']; ?>"readonly>
			 </div>
			 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <textarea id="Topics2" name="Topics2" class="form-control" readonly><?php echo $rowpro['Topics_2']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="hour2" name="hour2" class="form-control"  type="number"value="<?php echo $rowpro['hour2']; ?>"readonly> 
			 </div>
			 </td>
 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				
				 <input id="Instructor2" name="Instructor2" class="form-control"   value="<?php echo $rowpro['Instructor2']; ?>"readonly> 
				 </td>
				 </tr>
 
 	 
				 <tr>
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week3" name="Week3" class="form-control" type="number" value="<?php echo $rowpro['Week3']; ?>"readonly>
			 </div>
			 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <textarea id="Topics3" name="Topics3" class="form-control" readonly><?php echo $rowpro['Topics_3']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="hour3" name="hour3" class="form-control"  type="number"value="<?php echo $rowpro['hour3']; ?>"readonly> 
			 </div>
			 </td>
 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				
				 <input id="Instructor4" name="Instructor4" class="form-control"   value="<?php echo $rowpro['Instructor3']; ?>"readonly> 
				 </td>
				 </tr>
 
 	 
				 <tr>
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week5" name="Week5" class="form-control" type="number" value="<?php echo $rowpro['Week5']; ?>"readonly>
			 </div>
			 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <textarea id="Topics5" name="Topics5" class="form-control" readonly><?php echo $rowpro['Topics_5']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="hour5" name="hour5" class="form-control"  type="number"value="<?php echo $rowpro['hour5']; ?>"readonly> 
			 </div>
			 </td>
 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				
				 <input id="Instructor5" name="Instructor5" class="form-control"   value="<?php echo $rowpro['Instructor5']; ?>"readonly> 
				 </td>
				 </tr>
 
 	 
				 <tr>
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week6" name="Week6" class="form-control" type="number" value="<?php echo $rowpro['Week6']; ?>"readonly>
			 </div>
			 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <textarea id="Topics6" name="Topics6" class="form-control" readonly><?php echo $rowpro['Topics_6']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="hour6" name="hour6" class="form-control"  type="number"value="<?php echo $rowpro['hour6']; ?>"readonly> 
			 </div>
			 </td>
 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				
				 <input id="Instructor6" name="Instructor6" class="form-control"   value="<?php echo $rowpro['Instructor6']; ?>"readonly> 
				 </td>
				 </tr>
 
 	 
				 <tr>
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week7" name="Week7" class="form-control" type="number" value="<?php echo $rowpro['Week7']; ?>"readonly>
			 </div>
			 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <textarea id="Topics7" name="Topics7" class="form-control" readonly><?php echo $rowpro['Topics_7']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="hour7" name="hour7" class="form-control"  type="number"value="<?php echo $rowpro['hour7']; ?>"readonly> 
			 </div>
			 </td>
 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				
				 <input id="Instructor7" name="Instructor7" class="form-control"   value="<?php echo $rowpro['Instructor7']; ?>"readonly> 
				 </td>
				 </tr>
 
 	 
				 <tr>
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week8" name="Week8" class="form-control" type="number" value="<?php echo $rowpro['Week8']; ?>"readonly>
			 </div>
			 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <textarea id="Topics8" name="Topics8" class="form-control" readonly><?php echo $rowpro['Topics_8']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="hour8" name="hour8" class="form-control"  type="number"value="<?php echo $rowpro['hour8']; ?>"readonly> 
			 </div>
			 </td>
 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				
				 <input id="Instructor8" name="Instructor8" class="form-control"   value="<?php echo $rowpro['Instructor8']; ?>"readonly> 
				 </td>
				 </tr>
 
 	 
				 <tr>
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week9" name="Week9" class="form-control" type="number" value="<?php echo $rowpro['Week9']; ?>"readonly>
			 </div>
			 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <textarea id="Topics9" name="Topics9" class="form-control" readonly><?php echo $rowpro['Topics_9']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="hour9" name="hour9" class="form-control"  type="number"value="<?php echo $rowpro['hour9']; ?>"readonly> 
			 </div>
			 </td>
 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				
				 <input id="Instructor9" name="Instructor9" class="form-control"   value="<?php echo $rowpro['Instructor9']; ?>"readonly> 
				 </td>
				 </tr>
 
 	 
				 <tr>
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week10" name="Week10" class="form-control" type="number" value="<?php echo $rowpro['Week10']; ?>"readonly>
			 </div>
			 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <textarea id="Topics10" name="Topics10" class="form-control" readonly><?php echo $rowpro['Topics_10']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="hour10" name="hour10" class="form-control"  type="number"value="<?php echo $rowpro['hour10']; ?>"readonly> 
			 </div>
			 </td>
 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				
				 <input id="Instructor10" name="Instructor10" class="form-control"   value="<?php echo $rowpro['Instructor10']; ?>"readonly> 
				 </td>
				 </tr>
 
 	 
				 <tr>
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week11" name="Week11" class="form-control" type="number" value="<?php echo $rowpro['Week11']; ?>"readonly>
			 </div>
			 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <textarea id="Topics11" name="Topics11" class="form-control" readonly><?php echo $rowpro['Topics_11']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="hour11" name="hour11" class="form-control"  type="number"value="<?php echo $rowpro['hour11']; ?>"readonly> 
			 </div>
			 </td>
 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				
				 <input id="Instructor11" name="Instructor11" class="form-control"   value="<?php echo $rowpro['Instructor11']; ?>"readonly> 
				 </td>
				 </tr>
 
 	 
				 <tr>
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week12" name="Week12" class="form-control" type="number" value="<?php echo $rowpro['Week12']; ?>"readonly>
			 </div>
			 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <textarea id="Topics12" name="Topics12" class="form-control" readonly><?php echo $rowpro['Topics_12']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="hour13" name="hour13" class="form-control"  type="number"value="<?php echo $rowpro['hour13']; ?>"readonly> 
			 </div>
			 </td>
 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				
				 <input id="Instructor13" name="Instructor13" class="form-control"   value="<?php echo $rowpro['Instructor13']; ?>"readonly> 
				 </td>
				 </tr>
 
 	 
				 <tr>
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week14" name="Week14" class="form-control" type="number" value="<?php echo $rowpro['Week14']; ?>"readonly>
			 </div>
			 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <textarea id="Topics14" name="Topics14" class="form-control" readonly><?php echo $rowpro['Topics_14']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="hour14" name="hour14" class="form-control"  type="number"value="<?php echo $rowpro['hour14']; ?>"readonly> 
			 </div>
			 </td>
 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				
				 <input id="Instructor14" name="Instructor14" class="form-control"   value="<?php echo $rowpro['Instructor14']; ?>"readonly> 
				 </td>
				 </tr>
 
 	 
				 <tr>
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week15" name="Week15" class="form-control" type="number" value="<?php echo $rowpro['Week15']; ?>"readonly>
			 </div>
			 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <textarea id="Topics15" name="Topics15" class="form-control" readonly><?php echo $rowpro['Topics_15']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="hour15" name="hour15" class="form-control"  type="number"value="<?php echo $rowpro['hour15']; ?>"readonly> 
			 </div>
			 </td>
 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				
				 <input id="Instructor15" name="Instructor15" class="form-control"   value="<?php echo $rowpro['Instructor15']; ?>"readonly> 
				 </td>
				 </tr>
 
	 </table>
		
		</fieldset>
	  </form>
	  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
	</div>
 
 </html>