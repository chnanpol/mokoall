<?php
session_start();
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("mokoall");
	mysql_query("SET NAMES UTF8")
 ?>
<!DOCTYPE html>
<html>
<style>
table, td, th {
    border: 1px solid black;
}

table {
    border-collapse: collapse;
    width: 100%;
    
}

th {
    height: 70px;
}
</style>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>UTCC JOBs</title>

    <!-- INCLUDE LIB CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="./css/bootstrap-grid.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/bootstrap-reboot.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/bootstrap.min.css" />

    <!-- INCULDE LIB JAVASCRIPT -->
    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/pageAddJob.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
  	function resutName(CusID)
	{
		switch(CusID)
		{
			<?php
			$strSQL = "SELECT * FROM subject1 ";
			
			$objQuery = mysql_query($strSQL);
			while($objResult = mysql_fetch_array($objQuery, MYSQLI_ASSOC))
		
			{
			?>
				case "<?php echo $objResult["subID"];?> / <?php echo $objResult["subName"];?>":
				frmMain.txtName.value = "<?php echo $objResult["moallko_2"];?>";
				break;
			
			<?php
			}
			?>
			default:
			 frmMain.txtName.value = "";
		}
	}
</script>
	
	</head>


<body class=" navbar-light" style="background-color: #e3f2fd;>
    <img src="./pic/header.jpg" class="img-fluid col-md-12 ">
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
        <br>

        <form method="POST" id="addform" action="add_job_company.php" name="frmMain">
            
			
			<h2> หมวดที่ 1 ข้อมูลทั่วไป  </h2>
			<div class="row">
              
				<div class="col">
                    <label class="form-text">Faculty</label>
                    <select id="faculty" name="faculty" class="form-control">
                    <?php require 'get_faculty_company.php'?>
                    </select>
                </div>
                <div class="col">
                    <label class="form-text">Major</label>
                    <select id="major" name="major" type="text" class="form-control">
					<?php require 'get_major_company.php'?>
				   </select>
                </div>
            </div> 
					
						<div class="row">
						<div class="col">
						 <label class="form-text">Major</label>
		 <select name="id" id="id" class="form-control"   OnChange="resutName(this.value);">
			<option value="">
			<-- Please Select Item -->
			</option>
			<?php
			$strSQL = "SELECT * FROM subject1 ";
			$objQuery = mysql_query($strSQL);
			while($objResult = mysql_fetch_array($objQuery))
		
			{
			?>
			<option value="<?php echo $objResult["subID"];?> / <?php echo $objResult["subName"];?>">
			
			
			<?php echo $objResult["subID"];?>&nbsp; /
			<?php echo $objResult["subName"];?>
			</option>
			<?php
			}
			?>
		  </select>
		  </div>
		
		
            </div>
			            <div class="form-group ">
                    <label class="form-text">หลักสูตรและประเภทของรายวิชา </label>
                    <textarea id="course" name="course" class="form-control"  placeholder="หลักสูตรและประเภทของรายวิชา"> </textarea>
          
		<div class="row">
            <div class="form-group col-md-">
                <label class="form-text">อาจารย์ผู้รับผิดชอบรายวิชาและอาจารย์ผู้สอน </label>
                <input id="teacher" class="form-control" name="teacher" rows="4"
			value="<?php require 'get_namethacher.php' ?>"> 
		   
		   </div>
            <div class="form-group col-md-4">
                    <label class="form-text">ปีการศึกษา</label>
                    <select id="semester" name="semester" class="form-control">
                  <?php require 'get_j_semester_am.php'?> 
                    </select>
					</div>
					<div class="form-group col-md-4">
                    <label class="form-text">ภาคการศึกษา</label>
                    <select id="semesterf" name="semesterf" class="form-control">
                  <?php require 'get_year.php'?> 
                    </select>
					</div>
		
		</div>
			<div class="row">
		 <div class="form-group col-md-4">
                    <label class="form-text">รายชื่อวิชาที่ต้องเรียนมาก่อน</label>
                    <select id="pre" name="pre" class="form-control"> 
                  <?php require 'get_id.php'?>
                    </select>
					</div>
					
			
		 <div class="form-group col-md-4">
                    <label class="form-text">รายชื่อวิชาที่ต้องเรียนพร้อมกัน </label>
                    <select id="co" name="co" class="form-control">
		<?php require 'get_id.php'?>
                    </select>
					</div>
				
			<div class="form-group col-md-4">
                <label class="form-text">สถานที่เรียน  </label>
                <input id="place" class="form-control" name="place" rows="4"placeholder="ตึกที่">
            </div>
			
			</div>
			
			<div class="form-group">
                <label class="form-text">วันที่จัดทำหรือปรับปรุงรายละเอียดวิชาครั้งล่าสุด  </label>
                <input id="document" class="form-control" name="document"  type="date"  value="2018-11-21"
       min="2018-01-01" max="2018-12-31" rows="4">
            </div>
          
		   
								<!--  หัวข้อที่ 2 --> 
		  			

					<h2> หมวดที่ 2 จุดมุ่งหมายและวัตถุประสงค์  </h2>
			
						
			<div class="form-group">
                <label class="form-text">  2.1 จุดมุ่งหมายของรายวิชา      </label>
                <textarea id="Target" class="form-control" name="Target" ></textarea>
            </div>
			
			<div class="form-group">
                <label class="form-text">  2.2. วัตถุประสงค์ในการพัฒนา/ปรับปรุงรายวิชา      </label>
                <textarea id="TargetAdjust" class="form-control" name="TargetAdjust"	></textarea>
            </div>
		
				<div class="form-group">
                <label class="form-text"> 1. คำอธิบายรายวิชา         </label>
                <textarea id="Description" class="form-control" name="Description"	></textarea>
            </div>
	
		
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
                <input id="Lecture" class="form-control" type="number" name="Lecture" >
            </div>
		</td>					

		<td>
			<div class="form-group">
                <label class="form-text"></label>
                <input id="Teaching" class="form-control" type="number" name="Teaching" >
            </div>
		</td>				
	
		<td>
			<div class="form-group">
                <label class="form-text"></label>
                <input id="Apprenticeship" class="form-control"  type="number"name="Apprenticeship" >
            </div>
		</td>				
	
	
		<td>
			<div class="form-group">
                <label class="form-text"></label>
                <input id="Selfstudy" class="form-control"  type="number" name="Selfstudy" >
            </div>
		</td>				
	</tr> 
	
	</table>
	
	
	
	
	<div class="form-group">
                <label class="form-text">  3. จำนวนชั่วโมงต่อสัปดาห์ที่อาจารย์ให้คำปรึกษาและแนะนำทางวิชาการแก่นักศึกษาเป็นรายบุคคล   </label>
                <textarea id="HourPerSemester" class="form-control" name="HourPerSemester"	></textarea>
            </div>


				<h2> แผนที่แสดงการกระจายความรับผิดชอบต่อผลการเรียนรู้จากหลักสูตรสู่รายวิชา </h2>
		
		  
			
	<h2>หมวดที่ 4 การพัฒนาการเรียนรู้ของนักศึกษา</h2>
	
	

			

<div class="form-group">
                <label class="form-text">  </label>
				
                <textarea name="txtName"  id="txtName" class="form-control" value=""> </textarea>
</div>




	<div class="form-group">
                <label class="form-text">  วิธีการสอน  </label>
                <textarea id="Teachingone" class="form-control" name="Teachingone"	></textarea>
            </div>

	<div class="form-group">
                <label class="form-text">  วิธีการประเมินผล  </label>
                <textarea id="Evaluationmethod1" class="form-control" name="Evaluationmethod1"	></textarea>
            </div>
			<hr>
			<br>
			
			 <h3> ความรู้ </h3> <hr>
	  <div class="form-group ">
                    <label class="form-text">ความรู้ที่ต้องได้รับ </label>
                    <textarea id="Knowledge1" name="Knowledge1" class="form-control"  placeholder="ความรู้ที่ต้องได้รับ"> </textarea>
	
	
	  <div class="form-group ">
                    <label class="form-text">วิธีการสอน </label>
                    <textarea id="Teachingmethods2" name="Teachingmethods2" class="form-control"  placeholder="วิธีการสอน"> </textarea>
	
	
	  <div class="form-group ">
                    <label class="form-text">วิธีการประเมินผล </label>
                    <textarea id="Evaluationmethod2" name="Evaluationmethod2" class="form-control"  placeholder="ความรู้ที่ต้องได้รับ"> </textarea>
	
	<hr>
	<br>
	<h3>ทักษะการแก้ปัญหา</h3> <hr>
	
	
	  <div class="form-group ">
                    <label class="form-text">ทักษะทางปัญญาที่ต้องพัฒนา </label>
                    <textarea id="Cognitiveskills" name="Cognitiveskills" class="form-control"  placeholder="ความรู้ที่ต้องได้รับ"> </textarea>
	
	
	  <div class="form-group ">
                    <label class="form-text">วิธีการสอน </label>
                    <textarea id="Teachingmethods3" name="Teachingmethods3" class="form-control"  placeholder="ความรู้ที่ต้องได้รับ"> </textarea>
	
	
	  <div class="form-group ">
                    <label class="form-text">วิธีการประเมินผล </label>
                    <textarea id="Evaluationmethod3" name="Evaluationmethod3" class="form-control" > </textarea>
	<hr> 	
	<br>
	<h3>ทักษะความสัมพันธ์ระหว่างบุคคลและความรับผิดชอบ</h3> <hr>
	
	  <div class="form-group ">
                    <label class="form-text">ทักษะความสัมพันธ์ระหว่างบุคคลและความรับผิดชอบที่ต้องพัฒนา </label>
                    <textarea id="Relationshipskills" name="Relationshipskills" class="form-control" > </textarea>
	
	
	  <div class="form-group ">
                    <label class="form-text">วิธีการสอน</label>
                    <textarea id="Teachingmethods4" name="Teachingmethods4" class="form-control" > </textarea>
	
	
	  <div class="form-group ">
                    <label class="form-text">วิธีการประเมินผล </label>
                    <textarea id="Evaluationmethod4" name="Evaluationmethod4" class="form-control" type="number"> </textarea>
	
	<hr>
	<br>
	<h3>5.	ทักษะการวิเคราะห์เชิงตัวเลข  การสื่อสาร  และการใช้เทคโนโลยีสารสนเทศ</h3> <hr>
	
	  <div class="form-group ">
                    <label class="form-text">ทักษะการวิเคราะห์เชิงตัวเลข  การสื่อสาร  และการใช้เทคโนโลยีสารสนเทศที่ต้องพัฒนา </label>
                    <textarea id="NumericSkills" name="NumericSkills" class="form-control" type="number"> </textarea>
	
	
	  <div class="form-group ">
                    <label class="form-text">วิธีการสอน </label>
                    <textarea id="Teachingmethods5" name="Teachingmethods5" class="form-control" > </textarea>
	
	
	  <div class="form-group ">
                    <label class="form-text">วิธีการประเมินผล </label>
                    <textarea id="Evaluationmethod5 " name="Evaluationmethod5" class="form-control" > </textarea>
	<br> <hr>
	
	
	
	<h2> วิธีการสอน (Teaching Approach) และการจัดการเรียนการสอนที่เน้นผู้เรียนเป็นสำคัญ  </h2>
	<hr>	
				<center> <h4>     (Student – Centered Approach) </h4> </center>
	
	<div> <h5>
	<input type="checkbox" name="l[]" value="การบรรยาย (Lecture)"> 
	 การบรรยาย (Lecture) &nbsp;
	
	<input type="checkbox" name="l[]" value="การฝึกปฏิบัติ (Practice)">การฝึกปฏิบัติ (Practice)  &nbsp;

	 <input type="checkbox" name="l[]" value="การเรียนรู้โดยกิจกรรมโครงงาน (Project-based-Learning)">การเรียนรู้โดยกิจกรรมโครงงาน (Project-based-Learning)  &nbsp;

	

</h5>	
	</div> <br>

	
	<div> 
<h5>
 <input type="checkbox" name="l[]" value="การอภิปราย (Discussion) ">การอภิปราย (Discussion) &nbsp;
<input type="checkbox" name="l[]" value="การเรียนรู้โดยกิจกรรมการวิจัย(Research-based- Learning) ">การเรียนรู้โดยกิจกรรมการวิจัย(Research-based- Learning) &nbsp;
<input type="checkbox" name="l[]" value="การเรียนการสอนแบบ (Hybrid Learning System)">การเรียนการสอนแบบ (Hybrid Learning System)  &nbsp;

</h5>
</div> <br>

<div> 
<h5>
<input type="checkbox" name="l[]" value="การสัมมนา (Seminar)">การสัมมนา (Seminar) &nbsp;
<input type="checkbox" name="l[]" value="การเรียนรู้ผ่านเครือข่ายอินเทอร์เน็ต (Online Learning/Internet-based-Learning)">การเรียนรู้ผ่านเครือข่ายอินเทอร์เน็ต (Online Learning/Internet-based-Learning) &nbsp;
<input type="checkbox" name="l[]" value="การเรียนรู้เป็นรายบุคคล  (Individual Study) ">การเรียนรู้เป็นรายบุคคล  (Individual Study)  &nbsp;
</h5>
</div> <br>

<div> 
<h5>
<input type="checkbox" name="l[]" value="การเรียนรู้แบบแสวงหาความรู้ได้ด้วยตนเอง  (Self-study)">การเรียนรู้แบบแสวงหาความรู้ได้ด้วยตนเอง  (Self-study) &nbsp;

<input type="checkbox" name="l[]" value="การเรียนรู้จากการทำงาน (Work-based Learning)"> การเรียนรู้จากการทำงาน (Work-based Learning)&nbsp;

<input type="checkbox" name="l[]" value="กรณีศึกษา (Case Study))...">กรณีศึกษา (Case Study)) ... &nbsp;
</h5>
</div> <br> <hr>
	<center> <h4>     สื่อการสอน (Teaching Aids/Instructional Media) </h4> </center>
<br>
	<div> 
<h5>
<input type="checkbox" name="s[]" value="รูปภาพ (Pictures)	">รูปภาพ (Pictures)	 &nbsp;
<input type="checkbox" name="s[]" value="สื่อนำเสนอในรูปแบบ  PowerPoint"> สื่อนำเสนอในรูปแบบ  PowerPoint &nbsp;
<input type="checkbox" name="s[]" value="ของจริง (Authentic Material) ">ของจริง (Authentic Material) &nbsp; <br> <br>
<input type="checkbox" name="s[]" value="สื่ออิเล็กทรอนิกส์ (Electronic Media) เช่น Option Finder, VCD,  DVD, e-book ฯลฯ ">สื่ออิเล็กทรอนิกส์ (Electronic Media) เช่น Option Finder, VCD,  DVD, e-book ฯลฯ   &nbsp;
</h5>
</div> <br> <hr>
	
	<center> <h4>     กิจกรรมสำหรับนักศึกษา (Student Activities)</h4> </center>
<br>
	<div> 
<h5>
<input type="checkbox" name="s[]" value="การค้นคว้าข้อมูล(Data/Information Search)">การค้นคว้าข้อมูล(Data/Information Search) &nbsp;
<input type="checkbox" name="s[]" value="เกมส์ (Games)"> เกมส์ (Games)&nbsp;
<input type="checkbox" name="s[]" value="การระดมสมอง (Brainstorming)">การระดมสมอง (Brainstorming)	&nbsp; 
<input type="checkbox" name="s[]" value="สสถานการณ์จำลอง (Simulation)">สถานการณ์จำลอง (Simulation) &nbsp;<br><br>
<input type="checkbox" name="s[]" value="การนำเสนอ (Presentation)">การนำเสนอ (Presentation)&nbsp;
<input type="checkbox" name="s[]" value="การสำรวจข้อมูล (Survey)"> การสำรวจข้อมูล (Survey)	&nbsp;
<input type="checkbox" name="s[]" value="การแสดงบทบาทสมมติ (Role Play)">การแสดงบทบาทสมมติ (Role Play)	&nbsp; 
<input type="checkbox" name="s[]" value="การฝึกภาคสนาม (Field Work)">การฝึกภาคสนาม (Field Work) &nbsp; <br><br>
<input type="checkbox" name="s[]" value="การทดลอง (Experiment) ">การทดลอง (Experiment) &nbsp;
<input type="checkbox" name="s[]" value="การศึกษาดูงาน (Field Trip)">การศึกษาดูงาน (Field Trip)	&nbsp;
<input type="checkbox" name="s[]" value="การเชิญผู้มีประสบการณ์มาสอนเสริม">การเชิญผู้มีประสบการณ์มาสอนเสริม	&nbsp; 
<input type="checkbox" name="s[]" value=" การส่งนักศึกษาเข้าร่วมกิจกรรมวิชาการ"> การส่งนักศึกษาเข้าร่วมกิจกรรมวิชาการ &nbsp;



</h5>

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
				 <input id="Week1" name="Week1" class="form-control" type="number" value="<?php echo $rowpro['Week1']; ?>">
			 </div>
			 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <textarea id="Topics1" name="Topics1" class="form-control" ><?php echo $rowpro['Topics_1']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="hour1" name="hour1" class="form-control"  type="number"value="<?php echo $rowpro['hour1']; ?>"> 
			 </div>
			 </td>
 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				
				 <input id="Instructor1" name="Instructor1" class="form-control"   value="<?php echo $rowpro['Instructor1']; ?>"> 
				 </td>
				 </tr>
 
 	 
				 <tr>
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week2" name="Week2" class="form-control" type="number" value="<?php echo $rowpro['Week2']; ?>">
			 </div>
			 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <textarea id="Topics2" name="Topics2" class="form-control" ><?php echo $rowpro['Topics_2']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="hour2" name="hour2" class="form-control"  type="number"value="<?php echo $rowpro['hour2']; ?>"> 
			 </div>
			 </td>
 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				
				 <input id="Instructor2" name="Instructor2" class="form-control"   value="<?php echo $rowpro['Instructor2']; ?>"> 
				 </td>
				 </tr>
 
 	 
				 <tr>
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week3" name="Week3" class="form-control" type="number" value="<?php echo $rowpro['Week3']; ?>">
			 </div>
			 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <textarea id="Topics3" name="Topics3" class="form-control" ><?php echo $rowpro['Topics_3']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="hour3" name="hour3" class="form-control"  type="number"value="<?php echo $rowpro['hour3']; ?>"> 
			 </div>
			 </td>
 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				
				 <input id="Instructor3" name="Instructor3" class="form-control"   value="<?php echo $rowpro['Instructor3']; ?>"> 
				 </td>
				 </tr>
 
 	 
				 <tr>
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week5" name="Week5" class="form-control" type="number" value="<?php echo $rowpro['Week5']; ?>">
			 </div>
			 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <textarea id="Topics5" name="Topics5" class="form-control" ><?php echo $rowpro['Topics_5']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="hour5" name="hour5" class="form-control"  type="number"value="<?php echo $rowpro['hour5']; ?>"> 
			 </div>
			 </td>
 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				
				 <input id="Instructor5" name="Instructor5" class="form-control"   value="<?php echo $rowpro['Instructor5']; ?>"> 
				 </td>
				 </tr>
 
 	 
				 <tr>
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week6" name="Week6" class="form-control" type="number" value="<?php echo $rowpro['Week6']; ?>">
			 </div>
			 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <textarea id="Topics6" name="Topics6" class="form-control" ><?php echo $rowpro['Topics_6']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="hour6" name="hour6" class="form-control"  type="number"value="<?php echo $rowpro['hour6']; ?>"> 
			 </div>
			 </td>
 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				
				 <input id="Instructor6" name="Instructor6" class="form-control"   value="<?php echo $rowpro['Instructor6']; ?>"> 
				 </td>
				 </tr>
 
 	 
				 <tr>
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week7" name="Week7" class="form-control" type="number" value="<?php echo $rowpro['Week7']; ?>">
			 </div>
			 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <textarea id="Topics7" name="Topics7" class="form-control" ><?php echo $rowpro['Topics_7']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="hour7" name="hour7" class="form-control"  type="number"value="<?php echo $rowpro['hour7']; ?>"> 
			 </div>
			 </td>
 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				
				 <input id="Instructor7" name="Instructor7" class="form-control"   value="<?php echo $rowpro['Instructor7']; ?>"> 
				 </td>
				 </tr>
 
 	 
				 <tr>
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week8" name="Week8" class="form-control" type="number" value="<?php echo $rowpro['Week8']; ?>">
			 </div>
			 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <textarea id="Topics8" name="Topics8" class="form-control" ><?php echo $rowpro['Topics_8']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="hour8" name="hour8" class="form-control"  type="number"value="<?php echo $rowpro['hour8']; ?>"> 
			 </div>
			 </td>
 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				
				 <input id="Instructor8" name="Instructor8" class="form-control"   value="<?php echo $rowpro['Instructor8']; ?>"> 
				 </td>
				 </tr>
 
 	 
				 <tr>
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week9" name="Week9" class="form-control" type="number" value="<?php echo $rowpro['Week9']; ?>">
			 </div>
			 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <textarea id="Topics9" name="Topics9" class="form-control" ><?php echo $rowpro['Topics_9']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="hour9" name="hour9" class="form-control"  type="number"> 
			 </div>
			 </td>
 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				
				 <input id="Instructor9" name="Instructor9" class="form-control"   value="<?php echo $rowpro['Instructor9']; ?>"> 
				 </td>
				 </tr>
 
 	 
				 <tr>
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week10" name="Week10" class="form-control" type="number" value="<?php echo $rowpro['Week10']; ?>">
			 </div>
			 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <textarea id="Topics10" name="Topics10" class="form-control" ><?php echo $rowpro['Topics_10']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="hour10" name="hour10" class="form-control"  type="number"value="<?php echo $rowpro['hour10']; ?>"> 
			 </div>
			 </td>
 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				
				 <input id="Instructor10" name="Instructor10" class="form-control"   value="<?php echo $rowpro['Instructor10']; ?>"> 
				 </td>
				 </tr>
 
 	 
				 <tr>
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week11" name="Week11" class="form-control" type="number" value="<?php echo $rowpro['Week11']; ?>">
			 </div>
			 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <textarea id="Topics11" name="Topics11" class="form-control" ><?php echo $rowpro['Topics_11']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="hour11" name="hour11" class="form-control"  type="number"value="<?php echo $rowpro['hour11']; ?>"> 
			 </div>
			 </td>
 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				
				 <input id="Instructor11" name="Instructor11" class="form-control"   value="<?php echo $rowpro['Instructor11']; ?>"> 
				 </td>
				 </tr>
 
 	 
				 <tr>
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week12" name="Week12" class="form-control" type="number" value="<?php echo $rowpro['Week12']; ?>">
			 </div>
			 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <textarea id="Topics12" name="Topics12" class="form-control" ><?php echo $rowpro['Topics_12']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="hour13" name="hour13" class="form-control"  type="number"value="<?php echo $rowpro['hour12']; ?>"> 
			 </div>
			 </td>
 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				
				 <input id="Instructor13" name="Instructor13" class="form-control"   value="<?php echo $rowpro['Instructor12']; ?>"> 
				 </td>
				 </tr>
 
 	 
				 <tr>
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week14" name="Week14" class="form-control" type="number" value="<?php echo $rowpro['Week14']; ?>">
			 </div>
			 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <textarea id="Topics14" name="Topics14" class="form-control" ><?php echo $rowpro['Topics_14']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="hour14" name="hour14" class="form-control"  type="number"value="<?php echo $rowpro['hour14']; ?>"> 
			 </div>
			 </td>
 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				
				 <input id="Instructor14" name="Instructor14" class="form-control"   value="<?php echo $rowpro['Instructor14']; ?>"> 
				 </td>
				 </tr>
 
 	 
				 <tr>
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week15" name="Week15" class="form-control" type="number" ">
			 </div>
			 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <textarea id="Topics15" name="Topics15" class="form-control" >  </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="hour15" name="hour15" class="form-control"  type="number"> 
			 </div>
			 </td>
 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				
				 <input id="Instructor15" name="Instructor15" class="form-control"  > 
				 </td>
				 </tr>
 
 </table>
</div> <br> <hr>

	
 

			<div class="form-group text-right">
                <button class="btn btn-danger" type="reset">Clear</button>
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
      
	   </form>
        <br>
    </div>
	
</body>

</html>
