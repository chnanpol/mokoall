<?php
   require 'connect.php';

   $j_number   = $_GET ['j_number'];
   $qpro = "SELECT * FROM tbl_addjob A
   INNER JOIN group1 B ON A.j_number = B.j_number
   INNER JOIN group2 C ON A.j_number = C.j_number
   INNER JOIN group3 D ON A.j_number = D.j_number 
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
  
   


</div>
 </nav>
     <style>
            label {
              display: block;
            }
     </style>
   </head>
   
<body class=" navbar-light" style="background-color: #e3f2fd;>
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
		<h2> หมวดที่ 1 ข้อมูลทั่วไป  </h2>
			<div class="row">
              
				<div class="col-6">
                    <label class="form-text">คณะ</label>
                   <input id="faculty" name="faculty" class="form-control"value="<?php echo $rowpro['stu_fac']; ?>">
                </div>
				<div class="col-6">
                    <label class="form-text">สาขา</label>
                   <input id="Major" name="Major" class="form-control"value="<?php echo $rowpro['stu_major']; ?>">
                </div>
				<div class="col-12">
                    <label class="form-text">ชื่อวิชา</label>
                   <input id="id" name="id" class="form-control"value="<?php echo $rowpro['j_id']; ?>">
                </div>
					<div class="col">
                    <label class="form-text">หลักสูตรและประเภทของวิชา </label>
                   <textarea id="course" name="course" class="form-control "> <?php echo $rowpro['j_course']; ?> </textarea>
				</div>
			</div>
				
			<div class="row">
              
			
				<div class="col-4">
                    <label class="form-text">อาจารย์ผู้รับผิดชอบรายวิชาและอาจารย์ผู้สอน</label>
                   <input id="Teacher" name="Teacher" class="form-control"value="<?php echo $rowpro['j_teacher']; ?>">
                </div>
				<div class="col-4">
                    <label class="form-text">ภาคการศึกษา</label>
                   <input id="semester" name="semester" class="form-control"value="<?php echo $rowpro['j_semester']; ?>">
                </div>
				<div class="col-4">
                    <label class="form-text">ปีการศึกษา</label>
                   <input id="semester" name="semesterf" class="form-control"value="<?php echo $rowpro['j_semester_f']; ?>">
                </div>
			
			</div>
			
			<div class="row">
              
				<div class="col-4">
                    <label class="form-text">รายชื่อวิชาที่ต้องเรียนมาก่อน</label>
                   <input id="pre" name="pre" class="form-control"value="<?php echo $rowpro['j_pre']; ?>">
                </div>
				
				<div class="col-4">
                    <label class="form-text">รายชื่อวิชาที่ต้องเรียนพร้อมกัน</label>
                   <input id="co" name="co" class="form-control"value="<?php echo $rowpro['co']; ?>">
				  </div>
				
				  <div class="col-4">
                    <label class="form-text">สถานที่เรียน</label>
                   <input id="place" name="place" class="form-control"value="<?php echo $rowpro['place']; ?>">
                </div>
				
			</div>
			<div class="row">

				<div class="col">
                    <label class="form-text">วันที่จัดทำหรือปรับปรุงรายละเอียดวิชาครั้งล่าสุด</label>
                   <input id="document" name="document" class="form-control"value="<?php echo $rowpro['j_datetime']; ?>">
                </div>
			</div> 
			<br>
				
				<h2> หมวดที่ 2 จุดมุ่งหมายและวัตถุประสงค์  </h2> <br>
			<div class="row">
				<div class="col-12">
                   <label class="form-text">จุดมุ่งหมายของรายวิชา</label>
                   <textarea id="Target" name="Target" class="form-control"> <?php echo $rowpro['target']; ?> </textarea>
                </div>
				<div class="col-12">
                    <label class="form-text">วัตถุประสงค์ในการพัฒนา/ปรับปรุงรายวิชา</label>
                   <textarea id="TargetAdjust" name="TargetAdjust" class="form-control"> <?php echo $rowpro['target_adjust']; ?> </textarea>
                </div>
				<div class="col-12">
                    <label class="form-text">คำอธิบายรายวิชา</label>
                   <textarea id="Description" name="Description" class="form-control">   <?php echo $rowpro['description']; ?> </textarea>
                </div>
			</div> <br>
				<h2>หมวดที่ 3  </h2> <br> 
			
					
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
				<input id="Lecture" name="Lecture" class="form-control"value="<?php echo $rowpro['lecture_hours']; ?>">
            </div>
		</td>					

		<td>
			<div class="form-group">
                <label class="form-text"></label>
                <input id="Teaching" name="Teaching" class="form-control"value="<?php echo $rowpro['teaching_hours']; ?>">
            </div>
		</td>				
	
		<td>
			<div class="form-group">
                <label class="form-text"></label>
                <input id="Apprenticeship" name="Apprenticeship" class="form-control"value="<?php echo $rowpro['Apprenticeship']; ?>">
            </div>
		</td>				
	
	
		<td>
			<div class="form-group">
                <label class="form-text"></label>
				<input id="Selfstudy" name="Selfstudy" class="form-control"value="<?php echo $rowpro['Self_study']; ?>">
            </div>
		</td>				
	</tr> 
	
	</table>
				
</center>
			<br>

			<div class="row">
				<div class="col">
				<label class="form-text">จำนวนชั่วโมงต่อสัปดาห์ที่อาจารย์ให้คำปรึกษาและแนะนำทางวิชาการแก่นักศึกษาเป็นรายบุคคล</label>
                   <input id="HourPerSemester" name="HourPerSemester" class="form-control"value="<?php echo $rowpro['HourPerSemester']; ?>">
                </div>
			</div>
			<br>
			
				<h2>หมวดที่ 4 การพัฒนาการเรียนรู้ของนักศึกษา</h2> <br>
			<div class="row">
			<div class="col-12">
				
				<label class="form-text"> แผนที่แสดงการกระจายความรับผิดชอบต่อผลการเรียนรู้จากหลักสูตรสู่รายวิชา </label>
                   <textarea id="b_w" name="b_w" class="form-control"> <?php echo $rowpro['b_w']; ?>"> </textarea> 
                </div>
				<div class="col-12">

				<label class="form-text">วิธีการสอน</label>
                   <textarea id="Teachingone" name="Teachingone" class="form-control"> <?php echo $rowpro['Teachingmethods_1']; ?> </textarea>
                </div>
				<div class="col-12">
                    <label class="form-text">วิธีการประเมินผล</label>
                   <input id="Evaluationmethod1" name="Evaluationmethod1" class="form-control"value="<?php echo $rowpro['Evaluationmethod_1']; ?>">
                </div>
			</div>

			
			<hr>
			<br>
			
			<h3> ความรู้ </h3> <hr>

			<div class="row">
				<div class="col-12">
				<label class="form-text">ความรู้ที่ต้องได้รับ </label>
                   <input id="Knowledge1" name="Knowledge1" class="form-control"value="<?php echo $rowpro['knowledge_1']; ?>">
                </div>
				<div class="col-12">
                    <label class="form-text">วิธีการสอน </label>
                   <input id="Teachingmethods2" name="Teachingmethods2" class="form-control"value="<?php echo $rowpro['teachingmethods_2']; ?>">
                </div>
				<div class="col-12">
                    <label class="form-text">วิธีการประเมินผล</label>
                   <input id="Evaluationmethod2" name="Evaluationmethod2" class="form-control"value="<?php echo $rowpro['Evaluationmethod_2']; ?>">
                </div>
			</div>
				
			<hr>
			<br>
			<h3>ทักษะการแก้ปัญหา</h3> <hr>
			<div class="row">
				<div class="col-12">
				<label class="form-text">ทักษะทางปัญญาที่ต้องพัฒนา </label>
                   <input id="Cognitiveskills" name="Cognitiveskills" class="form-control"value="<?php echo $rowpro['Cognitive_skills']; ?>">
                </div>
				<div class="col-12">
                    <label class="form-text">วิธีการสอน </label>
                   <input id="Teachingmethods3" name="Teachingmethods3" class="form-control"value="<?php echo $rowpro['teachingmethods_3']; ?>">
                </div>
				<div class="col-12">
                    <label class="form-text">วิธีการประเมินผล</label>
                   <input id="Evaluationmethod3" name="Evaluationmethod3" class="form-control"value="<?php echo $rowpro['Evaluationmethod_3']; ?>">
                </div>
			</div>
				
			<hr> 	
			<br>
			<h3>ทักษะความสัมพันธ์ระหว่างบุคคลและความรับผิดชอบ</h3> <hr>
			<div class="row">
				<div class="form-group col-md-12">
				<label class="form-text">ทักษะความสัมพันธ์ระหว่างบุคคลและความรับผิดชอบที่ต้องพัฒนา  </label>
                   <input id="Relationshipskills" name="Relationshipskills" class="form-control"value="<?php echo $rowpro['knowledge_1']; ?>">
                </div>
				<div class="col">
                    <label class="form-text">วิธีการสอน </label>
                   <input id="Teachingmethods4" name="Teachingmethods4" class="form-control"value="<?php echo $rowpro['teachingmethods_4']; ?>">
                </div>
				<div class="col">
                    <label class="form-text">วิธีการประเมินผล</label>
                   <input id="Evaluationmethod4" name="Evaluationmethod4" class="form-control"value="<?php echo $rowpro['Evaluationmethod_4']; ?>">
                </div>
			</div>
			
			<hr> 	
			<br>
			<h3>ทักษะการวิเคราะห์เชิงตัวเลข  การสื่อสาร  และการใช้เทคโนโลยีสารสนเทศ</h3> <hr>
			<div class="row">
				<div class="form-group col-md-12">
				<label class="form-text">ทักษะการวิเคราะห์เชิงตัวเลข  การสื่อสาร  และการใช้เทคโนโลยีสารสนเทศที่ต้องพัฒนา   </label>
                   <input id="NumericSkills" name="NumericSkills" class="form-control"value="<?php echo $rowpro['Numeric_skills']; ?>">
                </div>
				<div class="col-12">
                    <label class="form-text">วิธีการสอน </label>
                   <input id="Teachingmethods5" name="Teachingmethods5" class="form-control"value="<?php echo $rowpro['teachingmethods_5']; ?>">
                </div>
				<div class="col-12">
                    <label class="form-text">วิธีการประเมินผล</label>
                   <input id="Evaluationmethod5" name="Evaluationmethod5" class="form-control"value="<?php echo $rowpro['Evaluationmethod_5']; ?>">
                </div>
			</div>
			<hr> <br>
			<h2> วิธีการสอน (Teaching Approach) และการจัดการเรียนการสอนที่เน้นผู้เรียนเป็นสำคัญ  </h2>
			<br>
				<center> <h4>     (Student – Centered Approach) </h4>    </center>
				
				<input type="checkbox" name='l[]' value= "การบรรยาย (Lecture)"   
			<?php if(in_array("การบรรยาย (Lecture)", $checkbox_array)){ echo " checked=\"checked\""; } ?> />การบรรยาย (Lecture) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
				
				<input type="checkbox" name='l[]' value= "การฝึกปฏิบัติ (Practice)"   
			<?php if(in_array("การฝึกปฏิบัติ (Practice)", $checkbox_array)){ echo " checked=\"checked\""; } ?> />การฝึกปฏิบัติ (Practice)&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
			 
				<input type="checkbox" name='l[]' value= "การเรียนรู้โดยกิจกรรมโครงงาน (Project-based-Learning)"   
			<?php if(in_array("การเรียนรู้โดยกิจกรรมโครงงาน (Project-based-Learning)", $checkbox_array)){ echo " checked=\"checked\""; } ?> />
			การเรียนรู้โดยกิจกรรมโครงงาน (Project-based-Learning) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
				 
				 
				   <br>
				
      <input type="checkbox" name='l[]' value= "การอภิปราย (Discussion)"   
			<?php if(in_array("การอภิปราย (Discussion)", $checkbox_array)){ echo " checked=\"checked\""; } ?> />การอภิปราย (Discussion) &nbsp; &nbsp; &nbsp; &nbsp; 
				<input type="checkbox" name='l[]' value= "การเรียนรู้โดยกิจกรรมการวิจัย(Research-based- Learning)"   
			<?php if(in_array("การเรียนรู้โดยกิจกรรมการวิจัย(Research-based- Learning)", $checkbox_array)){ echo " checked=\"checked\""; } ?> />การเรียนรู้โดยกิจกรรมการวิจัย(Research-based- Learning) &nbsp; &nbsp; &nbsp; &nbsp; 
				<input type="checkbox" name='l[]' value= "การเรียนการสอนแบบ (Hybrid Learning System)"   
			<?php if(in_array("การเรียนการสอนแบบ (Hybrid Learning System)", $checkbox_array)){ echo " checked=\"checked\""; } ?> />การเรียนการสอนแบบ (Hybrid Learning System)&nbsp; &nbsp; &nbsp; &nbsp; 
			
			
<br>
				<input type="checkbox" name='l[]' value= "การสัมมนา (Seminar)"   
			<?php if(in_array("การสัมมนา (Seminar)", $checkbox_array)){ echo " checked=\"checked\""; } ?> />การสัมมนา (Seminar) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
				<input type="checkbox" name='l[]' value= "การเรียนรู้ผ่านเครือข่ายอินเทอร์เน็ต (Online Learning/Internet-based-Learning)"   
			<?php if(in_array("การเรียนรู้ผ่านเครือข่ายอินเทอร์เน็ต (Online Learning/Internet-based-Learning)", $checkbox_array)){ echo " checked=\"checked\""; } ?> />การเรียนรู้ผ่านเครือข่ายอินเทอร์เน็ต (Online Learning/Internet-based-Learning) &nbsp;&nbsp; 
				<input type="checkbox" name='l[]' value= "การเรียนรู้เป็นรายบุคคล  (Individual Study)"   
			<?php if(in_array("การเรียนรู้เป็นรายบุคคล  (Individual Study)", $checkbox_array)){ echo " checked=\"checked\""; } ?> />การเรียนรู้เป็นรายบุคคล  (Individual Study) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
			
			
				<input type="checkbox" name='l[]' value= "การเรียนรู้แบบแสวงหาความรู้ได้ด้วยตนเอง  (Self-study)"   
			<?php if(in_array("การเรียนรู้แบบแสวงหาความรู้ได้ด้วยตนเอง  (Self-study)", $checkbox_array)){ echo " checked=\"checked\""; } ?> />การเรียนรู้แบบแสวงหาความรู้ได้ด้วยตนเอง  (Self-study) &nbsp;
				<input type="checkbox" name='l[]' value= "การเรียนรู้จากการทำงาน (Work-based Learning)"   
			<?php if(in_array("การเรียนรู้จากการทำงาน (Work-based Learning))", $checkbox_array)){ echo " checked=\"checked\""; } ?> />การเรียนรู้จากการทำงาน (Work-based Learning) &nbsp;
				<input type="checkbox" name='l[]' value= "กรณีศึกษา (Case Study)..."   
			<?php if(in_array("กรณีศึกษา (Case Study)...", $checkbox_array)){ echo " checked=\"checked\""; } ?> />กรณีศึกษา (Case Study)... &nbsp;
			
			 <br> <hr>
			<center> <h4>     สื่อการสอน (Teaching Aids/Instructional Media) </h4> </center>
			<br>
			
				<input type="checkbox" name='s[]' value= "รูปภาพ (Pictures)"   
			<?php if(in_array("รูปภาพ (Pictures)", $checkbox_array1)){ echo " checked=\"checked\""; } ?> />รูปภาพ (Pictures) &nbsp;
				<input type="checkbox" name='s[]' value= "สื่อนำเสนอในรูปแบบ  PowerPoint"   
			<?php if(in_array("สื่อนำเสนอในรูปแบบ  PowerPoint", $checkbox_array1)){ echo " checked=\"checked\""; } ?> />สื่อนำเสนอในรูปแบบ  PowerPoint &nbsp;
				<input type="checkbox" name='s[]' value= "ของจริง (Authentic Material)"   
			<?php if(in_array("ของจริง (Authentic Material)", $checkbox_array1)){ echo " checked=\"checked\""; } ?> />ของจริง (Authentic Material) &nbsp; <br>
				<input type="checkbox" name='s[]' value= "สื่ออิเล็กทรอนิกส์ (Electronic Media) เช่น Option Finder, VCD,  DVD, e-book ฯลฯ "   
			<?php if(in_array("สื่ออิเล็กทรอนิกส์ (Electronic Media) เช่น Option Finder, VCD,  DVD, e-book ฯลฯ ", $checkbox_array1)){ echo " checked=\"checked\""; } ?> />สื่ออิเล็กทรอนิกส์ (Electronic Media) เช่น Option Finder, VCD,  DVD, e-book ฯลฯ  &nbsp;
			
			<br> <hr>
			<center> <h4>     กิจกรรมสำหรับนักศึกษา (Student Activities)</h4> </center>
			<br>
				<div>
				<input type="checkbox" name='s[]' value= "การค้นคว้าข้อมูล(Data/Information Search)"   
			<?php if(in_array("การค้นคว้าข้อมูล(Data/Information Search)", $checkbox_array1)){ echo " checked=\"checked\""; } ?> />การค้นคว้าข้อมูล(Data/Information Search) &nbsp;
				<input type="checkbox" name='s[]' value= "เกมส์ (Games)"   
			<?php if(in_array("เกมส์ (Games)", $checkbox_array1)){ echo " checked=\"checked\""; } ?> />เกมส์ (Games) &nbsp;
				<input type="checkbox" name='s[]' value= "การระดมสมอง (Brainstorming)"   
			<?php if(in_array("การระดมสมอง (Brainstorming)", $checkbox_array1)){ echo " checked=\"checked\""; } ?> />การระดมสมอง (Brainstorming) &nbsp;
				<input type="checkbox" name='s[]' value= "สถานการณ์จำลอง (Simulation)"   
			<?php if(in_array("สถานการณ์จำลอง (Simulation)", $checkbox_array1)){ echo " checked=\"checked\""; } ?> />สถานการณ์จำลอง (Simulation) &nbsp;
				<input type="checkbox" name='s[]' value= "การนำเสนอ (Presentation)"   
			<?php if(in_array("การนำเสนอ (Presentation))", $checkbox_array1)){ echo " checked=\"checked\""; } ?> />การนำเสนอ (Presentation) &nbsp;
				<input type="checkbox" name='s[]' value= "การสำรวจข้อมูล (Survey)"   
			<?php if(in_array("การสำรวจข้อมูล (Survey)", $checkbox_array1)){ echo " checked=\"checked\""; } ?> />การสำรวจข้อมูล (Survey) &nbsp;
				<input type="checkbox" name='s[]' value= "การแสดงบทบาทสมมติ (Role Play)"   
			<?php if(in_array("การแสดงบทบาทสมมติ (Role Play)", $checkbox_array1)){ echo " checked=\"checked\""; } ?> />การแสดงบทบาทสมมติ (Role Play) &nbsp;
				<input type="checkbox" name='s[]' value= "การทดลอง (Experiment)"   
			<?php if(in_array("การทดลอง (Experiment)", $checkbox_array1)){ echo " checked=\"checked\""; } ?> />การทดลอง (Experiment) &nbsp;
				<input type="checkbox" name='s[]' value= "การศึกษาดูงาน (Field Trip)"   
			<?php if(in_array("การศึกษาดูงาน (Field Trip)", $checkbox_array1)){ echo " checked=\"checked\""; } ?> />การศึกษาดูงาน (Field Trip) &nbsp;
				<input type="checkbox" name='s[]' value= "การเชิญผู้มีประสบการณ์มาสอนเสริม"   
			<?php if(in_array("การเชิญผู้มีประสบการณ์มาสอนเสริม", $checkbox_array1)){ echo " checked=\"checked\""; } ?> />การเชิญผู้มีประสบการณ์มาสอนเสริม &nbsp;
				<input type="checkbox" name='s[]' value= "กการส่งนักศึกษาเข้าร่วมกิจกรรมวิชาการ"   
			<?php if(in_array("การส่งนักศึกษาเข้าร่วมกิจกรรมวิชาการ", $checkbox_array1)){ echo " checked=\"checked\""; } ?> />การส่งนักศึกษาเข้าร่วมกิจกรรมวิชาการ &nbsp;
				
				</div>

 
         <br><br>
         <input type="hidden" name="pro_id" value="<?php echo $rowpro['j_number']; ?>">
         <input name="submit" type="submit" id="submit"  class="btn btn-success" value="แก้ไขข้อมูล">
       </fieldset>
     </form>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   </body>
   </div>
</html>