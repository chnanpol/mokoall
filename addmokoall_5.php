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
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <title>แก้ไขข้อมูลสินค้า</title>
  
   


</div>
 </nav>
     <style>
            label {
              display: block;
            }
     </style>
   </head>
   <body>
  
<body class=" navbar-light" style="background-color: #e3f2fd";>
   
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
	<form method="POST" id="upform" action="addjob_moloall5.php" >

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
              
			
				<div class="col-6">
                    <label class="form-text">อาจารย์ผู้รับผิดชอบรายวิชาและอาจารย์ผู้สอน</label>
                   <input id="Teacher" name="Teacher" class="form-control"value="<?php echo $rowpro['j_teacher']; ?>">
                </div>
				<div class="col-6">
                    <label class="form-text">ชั้นปี</label>
                   <input id="semester" name="semester" class="form-control"value="<?php echo $rowpro['j_semester']; ?>">
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
		
<center>	
<table border="2px"> 
    <tr>
			<th>  <center>    หัวข้อ </th>  </center>
 <th>   <center>   จำนวนชั่วโมง ตามแผนการสอน </th> </center>
 <th>  <center> จำนวนชั่วโมงสอนจริง</th> </center>
 <th>  <center>  ระบุสาเหตุที่การสอนจริงต่างจากแผนการสอน หากมีความแตกต่างเกิน 25% </th> </center>
	</tr>
	
	<tr>
		<td>
			<div class="form-group">
                <label class="form-text"></label>
				<textarea id="Topics 1" name="Topics_1" class="form-control" > <?php echo $rowpro['Topics_1']; ?> </textarea>
            </div>
		
        	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="Topics 2" name="Topics2" class="form-control" > <?php echo $rowpro['Topics_2']; ?> </textarea>
            </div>
        
        	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="Topics 3" name="Topics3" class="form-control" > <?php echo $rowpro['Topics_3']; ?> </textarea>
            </div>
		
        	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="Topics 4" name="Topics 4" class="form-control" > <?php echo $rowpro['Topics_4']; ?> </textarea>
         
            </div>	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="Topics 5 " name="Topics 5 " class="form-control" > <?php echo $rowpro['Topics_5']; ?> </textarea>
            </div>
		
        	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="Topics 6" name="Topics 6" class="form-control" > <?php echo $rowpro['Topics_6']; ?> </textarea>
            </div>	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="Topics 7" name="Topics 7" class="form-control" > <?php echo $rowpro['Topics_7']; ?> </textarea>
            </div>
		
        	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="Topics 8" name="Topics 8" class="form-control" > <?php echo $rowpro['Topics_8']; ?> </textarea>
            </div>	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="Topics 9" name="Topics 9" class="form-control" > <?php echo $rowpro['Topics_9']; ?> </textarea>
            </div>
		
        	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="Topics 10" name="Topics 10" class="form-control" > <?php echo $rowpro['Topics_10']; ?> </textarea>
            </div>
        </td>					

		<td>
        <div class="form-group">
                <label class="form-text"></label>
				<textarea id="hour According 1" name="hour According 1" class="form-control" > <?php echo $rowpro['hour1']; ?> </textarea>
            </div>
		
        	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="hour According 2" name="hour According 2" class="form-control" > <?php echo $rowpro['hour2']; ?> </textarea>
            </div>
        
        	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="hour According 3" name="hour According 3" class="form-control" > <?php echo $rowpro['hour3']; ?> </textarea>
            </div>
		
        	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="hour According 4" name="hour According 4" class="form-control" > <?php echo $rowpro['hour4']; ?> </textarea>
            </div>
            
            	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="hour According 5" name="hour According 5" class="form-control" > <?php echo $rowpro['hour5']; ?> </textarea>
            </div>
		
        	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="hour According 6" name="hour According 6" class="form-control" > <?php echo $rowpro['hour6']; ?> </textarea>
            </div>	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="hour According 7" name="hour According 7" class="form-control" > <?php echo $rowpro['hour7']; ?> </textarea>
            </div>
		
        	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="hour According 8" name="hour According 8" class="form-control" > <?php echo $rowpro['hour8']; ?> </textarea>
            </div>	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="hour According 9" name="hour According 9" class="form-control" > <?php echo $rowpro['hour9']; ?> </textarea>
            </div>
		
        	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="hour According 10" name="hour According 10" class="form-control" > <?php echo $rowpro['hour10']; ?> </textarea>
            </div>
		</td>				
	
		<td>
        <div class="form-group">
                <label class="form-text"></label>
				<textarea id="hour teaches 1" name="hour teaches 1" class="form-control" > <?php echo $rowpro['hour1']; ?> </textarea>
            </div>
		
        	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="hour teaches 2" name="hour teaches 2" class="form-control" > <?php echo $rowpro['hour2']; ?> </textarea>
            </div>
        
        	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="hour teaches 3" name="hour teaches 3" class="form-control" > <?php echo $rowpro['hour3']; ?> </textarea>
            </div>
		
        	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="hour teaches 4" name="hour teaches 4" class="form-control" > <?php echo $rowpro['hour4']; ?> </textarea>
            </div>	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="hour teaches 5" name="hour teaches 5" class="form-control" > <?php echo $rowpro['hour5']; ?> </textarea>
            </div>
		
        	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="hour teaches 6" name="hour teaches 6" class="form-control" > <?php echo $rowpro['hour6']; ?> </textarea>
            </div>	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="hour teaches 7" name="hour teaches 7" class="form-control" > <?php echo $rowpro['hour7']; ?> </textarea>
            </div>
		
        	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="hour teaches 8" name="hour teaches 8" class="form-control" > <?php echo $rowpro['hour8']; ?> </textarea>
            </div>	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="hour teaches 9" name="hour teaches 9" class="form-control" > <?php echo $rowpro['hour9']; ?> </textarea>
            </div>
		
        	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="hour teaches 10" name="hour teaches 10" class="form-control" > <?php echo $rowpro['hour10']; ?> </textarea>
            </div>
		</td>				
	
	
		<td>
        <div class="form-group">
                <label class="form-text"></label>
				<textarea id="Identify reasons 1" name="Identify reasons 1" class="form-control" > </textarea>
            </div>
		
        	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="Identify reasons 2" name="Identify reasons 2" class="form-control" >  </textarea>
            </div>
        
        	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="Identify reasons 3" name="Identify reasons 3" class="form-control" > </textarea>
            </div>
		
        	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="Identify reasons 4" name="Identify reasons 4" class="form-control" > </textarea>
            </div>
            
            	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="Identify reasons 5" name="Identify reasons 5" class="form-control" >  </textarea>
            </div>
		
        	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="Identify reasons 6" name="Identify reasons 6" class="form-control" > </textarea>
            </div>	
            
            <div class="form-group">
                <label class="form-text"></label>
				<textarea id="Identify reasons 7" name="Identify reasons 7" class="form-control" > </textarea>
            </div>
		
        	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="Identify reasons 8" name="Identify reasons 8" class="form-control" >  </textarea>
            </div>	
            <div class="form-group">
                <label class="form-text"></label>
				<textarea id="Identify reasons 9" name="Identify reasons 9" class="form-control" > </textarea>
            </div>
		
        	<div class="form-group">
                <label class="form-text"></label>
				<textarea id="Identify reasons 10" name="Identify reasons 10" class="form-control" >  </textarea>
            </div>
		</td>				
	</tr> 
	
	</table>
    <br>    <br>    <br>   
    <h2> 2. หัวข้อที่สอนไม่ครอบคลุมตามแผน </H2>
 
    <table border="2px"> 
    <tr>
    <th>  <center>    หัวข้อที่สอนไม่ครอบคลุมตามแผน</th>  </center>
 <th>   <center>   นัยสำคัญของหัวข้อที่สอน ไม่ครอบคลุมตามแผน</th> </center>
 <th>   <center> แนวทางชดเชย </th> </center>
	</tr>
	
	<tr>
		<td>
			<div class="form-group">
                <label class="form-text"></label>
				<textarea id="Lecture" name="Lecture" class="form-control" > <?php echo $rowpro['lecture_hours']; ?> </textarea>

		
          </div>
		</td>		
        <td>
			<div class="form-group">
                <label class="form-text"></label>
				<textarea id="Lecture" name="Lecture" class="form-control" > <?php echo $rowpro['lecture_hours']; ?> </textarea>

		
          </div>
		</td>		
        <td>
			<div class="form-group">
                <label class="form-text"></label>
				<textarea id="Lecture" name="Lecture" class="form-control" > <?php echo $rowpro['lecture_hours']; ?> </textarea>

		
          </div>
		</td>				
	</tr> 
	
	</table>		
</center>
		z
            <br>    <br>    <br>   
            <h2> 3. ประสิทธิผลของวิธีสอนที่ทำให้เกิดผลการเรียนรู้ตามที่ระบุในรายละเอียดของรายวิชา </H2>
 
 <table border="2px"> 
 <tr>
 <th>  <center>   ผลการเรียนรู้</th>  </center>
<th>   <center>  วิธีสอนที่ระบุในรายละเอียดรายวิชา</th> </center>
<th>   <center> ประสิทธิผล </th> </center>
<th>   <center> ปัญหาของการใช้วิธีสอน (ถ้ามี) พร้อมข้อเสนอแนะในการแก้ไข </th> </center>
 </tr>
 
 <tr>
     <td>
         <div class="form-group">
             <label class="form-text"> แผนที่แสดงการกระจายความรับผิดชอบต่อผลการเรียนรู้จากหลักสูตรสู่รายวิชา </label>
        </div>
      
       
    </td>

     <td>
     <div class="col-12">

     <label class="form-text"> </label>
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
                <br>
     </td>		
     <td>
     <center>
     <select name="grop1">
    <option value="มี">มี</option>
    <option value="ไม่มี">ไม่มี</option>
  </select>
     
  </center>
     </td>				
 
     <td>
    
     <div class="col-12">

     <label class="form-text"> </label>
                   <textarea id="issue1" name="issue1" class="form-control"> </textarea> 
                </div>
     </td>		
 
 
 </tr> 

<!-- 2 -->
<tr>
     <td>
         <div class="form-group">
             <label class="form-text"> ความรู้ที่ต้องได้รับ </label>
        </div>
      
       
    </td>

     <td>
    
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
            <br>
     </td>		
   
     <td>
<center>
    <select name="grop2">
    <option value="มี">มี</option>
    <option value="ไม่มี">ไม่มี</option>
  </select>
  </center>
     
     </td>				
    <td>
    <div class="col-12">

<label class="form-text"> </label>
              <textarea id="issue2" name="issue2" class="form-control"> </textarea> 
           </div>
</td>		
 </tr> 

 <!-- 3 -->
 <tr>
     <td>
         <div class="form-group">
             <label class="form-text"> ทักษะการแก้ปัญหา </label>
        </div>
      
       
    </td>

     <td>
    
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
			</div> <br>
     </td>		
   
     <td>
     <center>
       <select name="grop3">
    <option value="มี">มี</option>
    <option value="ไม่มี">ไม่มี</option>
  </select>
     
       </center>
     </td>				
 
 
     <td>
     <div class="col-12">

<label class="form-text"> </label>
              <textarea id="issue3" name="issue3" class="form-control"> </textarea> 
           </div>
</td>		
 </tr> 
 
 <!--4-->
 
 <tr>
     <td>
         <div class="form-group">
             <label class="form-text"> ทักษะความสัมพันธ์ระหว่างบุคคลและความรับผิดชอบ </label>
        </div>
      
       
    </td>

     <td>
    
     <div class="col-12">
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
			</div> <br>
     </td>		
   
     <td>
     <center>
     <select name="grop4">
    <option value="มี">มี</option>
    <option value="ไม่มี">ไม่มี</option>
  </select>
     
  </center>
     </td>				
     <td>
     <div class="col-12">

<label class="form-text"> </label>
              <textarea id="issue4" name="issue4" class="form-control"> </textarea> 
           </div>
</td>		
 </tr> 
 <!--5--> 
<BR>
 <tr>
     <td>
         <div class="form-group">
             <label class="form-text"> ทักษะการวิเคราะห์เชิงตัวเลข  การสื่อสาร  และการใช้เทคโนโลยีสารสนเทศ </label>
        </div>
      
       
    </td>

     <td>
    
    
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
			</div> <br>
     </td>		
   
     <td>
     <center>
     <select name="grop5">
    <option value="มี">มี</option>
    <option value="ไม่มี">ไม่มี</option>
  </select>

     
     </center>
     </td>			

        <td>	
     <div class="col-12">

<label class="form-text"> </label>
              <textarea id="issue5" name="issue5" class="form-control"> </textarea> 
           </div>
</td>		
 </tr> 

 </table>		
 
 <br>
 
 <div class="col-12">
 <label class="form-text"> ข้อเสนอการดำเนินการเพื่อปรับปรุงวิธีสอน (ซึ่งได้จากปัญหาที่พบในข้อ 2.3) </label>
              <textarea id="Improveteaching " name="Improveteaching" class="form-control"> </textarea> 
    </div>
			
<br>
<hr>
<br>

  <h2>  หมวดที่ 3  สรุปผลการจัดการเรียนการสอนของรายวิชา </h2>


 <div class="col-12">
 <label class="form-text"> 1. จำนวนนักศึกษาที่ลงทะเบียนเรียน</label>
              <input id="students enrolled " name="students enrolled" class="form-control" type="number"> 
    </div>
    
 <div class="col-12">
 <label class="form-text"> 2. จำนวนนักศึกษาที่คงอยู่เมื่อสิ้นสุดภาคการศึกษา  </label>
              <input id="students remaining " name="students remaining" class="form-control"  type="number"> 
    </div>
    
 <div class="col-12">
 <label class="form-text">3. จำนวนนักศึกษาที่ถอน (W) </label>
              <input id="students withdrawn " name="students withdrawn" class="form-control"  type="number"> 
    </div>




<br> <br>

<h2>4. การกระจายของระดับคะแนน (เกรด)</h2>
 <table border="2px"> 
    <tr>
    <th>  <center>    ระดับคะแนน</th>  </center>
 <th>   <center>   จำนวน </th> </center>
 <th>   <center> คิดเป็นร้อยละ </th> </center>
	</tr>
	
	<tr>
		<td>
			<div class="form-group">
                <label class="form-text"></label>
				<input id="a" name="a" class="form-control" > 

			
			<div class="form-group">
                <label class="form-text"></label>
				<input id="b+" name="b+" class="form-control" > 
                
                
			<div class="form-group">
                <label class="form-text"></label>
				<input id="b" name="b" class="form-control" > 

                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="c+" name="c+" class="form-control" > 

                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="c" name="c" class="form-control" > 

                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="d+" name="d+" class="form-control" > 

                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="d" name="d" class="form-control" > 

                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="f" name="f" class="form-control" > 

                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="x" name="x" class="form-control" > 

                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="w" name="w" class="form-control" > 
          </div>
		</td>		
      
        <td>
			<div class="form-group">
                <label class="form-text"></label>
				<input id="a1" name="a1" class="form-control" > 

			
			<div class="form-group">
                <label class="form-text"></label>
				<input id="b+1" name="b+1" class="form-control" > 
                
                
			<div class="form-group">
                <label class="form-text"></label>
				<input id="b1" name="b1" class="form-control" > 

                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="c+1" name="c+1" class="form-control" > 

                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="c1" name="c1" class="form-control" > 

                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="d+1" name="d+1" class="form-control" > 

                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="d1" name="d1" class="form-control" > 

                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="f1" name="f1" class="form-control" > 

                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="x1" name="x1" class="form-control" > 

                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="w1" name="w1" class="form-control" > 
          </div>
		</td>
    	<td>
			<div class="form-group">
                <label class="form-text"></label>
				<input id="a2" name="a2" class="form-control" > 

			
			<div class="form-group">
                <label class="form-text"></label>
				<input id="b+2" name="b+2" class="form-control" > 
                
                
			<div class="form-group">
                <label class="form-text"></label>
				<input id="b2" name="b2" class="form-control" > 

                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="c+2" name="c+2" class="form-control" > 

                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="c2" name="c2" class="form-control" > 

                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="d+2" name="d+2" class="form-control" > 

                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="d2" name="d2" class="form-control" > 

                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="f2" name="f2" class="form-control" > 

                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="x2" name="x2" class="form-control" > 

                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="w2" name="w2" class="form-control" > 
          </div>
		</td>
	</tr> 
	
	</table>		
 
<div class="col-12">
 <label class="form-text">  ปัจจัยที่ทำให้ระดับคะแนนผิดปกติ (ถ้ามี) </label>
              <textarea id="Factors to Rating " name="Factors to Rating" class="form-control"> </textarea> 
    </div>

<div class="col-12">
 <label class="form-text">  ความคลาดเคลื่อนจากแผนการประเมินที่กำหนดไว้ในรายละเอียดรายวิชา </label>
              <textarea id="assessment" name="assessment" class="form-control"> </textarea> 
    </div>

    <div class="col-12">
 <label class="form-text"> ความคลาดเคลื่อนด้านกำหนดเวลาการประเมิน </label>
              <textarea id="Time deviation " name="Time deviation" class="form-control"> </textarea> 
    </div>

    <div class="col-12">
 <label class="form-text">  ความคลาดเคลื่อนด้านวิธีการประเมินผลการเรียนรู้ (ถ้ามี) </label>
              <textarea id="Discrepancies " name="Discrepancies" class="form-control"> </textarea> 
    </div>
    <br>
<h2>การทวนสอบผลสัมฤทธิ์ของนักศึกษา</h2>

<div class="col-12">
 <label class="form-text">  วิธีการทวนสอบ </label>
              <textarea id="Verification method" name="Verification method" class="form-control"> </textarea> 
    </div>

<div class="col-12">
 <label class="form-text">  สรุปผล</label>
              <textarea id="conclude" name="conclude" class="form-control"> </textarea> 
    </div>
    <br>
      
      <h2> หมวดที่ 4  ปัญหาและผลกระทบต่อการดำเนินการ </h2>
      <br>
      <h3> ปัญหาด้านทรัพยากรประกอบการเรียนและสิ่งอำนวยความสะดวก </h3>
      
      
      
<div class="col-12">
 <label class="form-text">  ปัญหาในการใช้แหล่งทรัพยากรประกอบการเรียนการสอน (ถ้ามี)</label>
              <textarea id=" problem of using " name=" problem of using " class="form-control"> </textarea> 
    </div>  
      
      
           
<div class="col-12">
 <label class="form-text">   ผลกระทบ </label>
              <textarea id=" effect " name=" effect  " class="form-control"> </textarea> 

    </div>  
 
    <br> 

    <h2> ปัญหาด้านการบริหารและองค์กร </h2>

      
      <div class="col-12">
 <label class="form-text">  ปัญหาด้านการบริหารและองค์กร (ถ้ามี)  </label>
              <textarea id="Administrative  " name="Administrative  " class="form-control"> </textarea> 

    </div>  
      
    <div class="col-12">
 <label class="form-text">  ผลกระทบต่อผลการเรียนรู้ของนักศึกษา </label>
              <textarea id="Impact" name="Impact " class="form-control"> </textarea> 
              </div>
              <br>

              <h2> หมวดที่ 5  การประเมินรายวิชา </h2> <br>


<div class="col-12">
 <label class="form-text">   ผลการประเมินรายวิชาโดยนักศึกษา (แนบเอกสาร)  </label>
              <textarea id=" Student Evaluation " name=" Student Evaluation " class="form-control"> </textarea> 
    </div>  


<div class="col-12">
 <label class="form-text">   ข้อวิพากษ์ที่สำคัญจากผลการประเมินโดยนักศึกษา  </label>
              <textarea id=" Critical " name=" Critical  " class="form-control"> </textarea> 
    </div>  


<div class="col-12">
 <label class="form-text">   ความเห็นของอาจารย์ผู้สอนต่อข้อวิพากษ์ตามข้อ   </label>
              <textarea id=" comments " name=" comments  " class="form-control"> </textarea> 
    </div>  


<h2> ผลการประเมินรายวิชาโดยคณะกรรมการประเมินการสอนของสาขาวิชา </h2>

<div class="col-12">
 <label class="form-text">  ข้อวิพากษ์ที่สำคัญจากผลการประเมินโดยคณะกรรมการ   </label>
              <textarea id=" Critical 1 " name=" Critical 1" class="form-control"> </textarea> 
    </div>  

<div class="col-12">
 <label class="form-text">   ความเห็นของอาจารย์ผู้สอนต่อข้อวิพากษ์ตามข้อ   </label>
              <textarea id=" comments 1 " name=" comments 1" class="form-control"> </textarea> 
    </div> 
      <hr>
<br>

<center> <h2> หมวดที่ 6  แผนการปรับปรุง </h2> </center>
<br>
<h3> ความก้าวหน้าของการปรับปรุงการเรียนการสอนตามที่เสนอในรายงานของรายวิชาครั้งที่ผ่านมา </h3> <br>

<div class="col-12">
 <label class="form-text">   แผนการปรับปรุงที่เสนอในภาคการศึกษา / ปีการศึกษาที่ผ่านมา             </label>
              <textarea id=" Improvement" name="Improvement" class="form-control"> </textarea> 
    </div> 
    <div class="col-12">
 <label class="form-text">   ผลการดำเนินการ </label>
              <textarea id="Results " name="Results" class="form-control"> </textarea> 
    </div> 
    <div class="col-12">
 <label class="form-text">   การดำเนินการอื่นๆ ในการปรับปรุงรายวิชา  </label>
              <textarea id=" Other actions " name="Other actions" class="form-control"> </textarea> 
    </div> 
    <br>
   <h2>  ข้อเสนอแผนการปรับปรุงสำหรับภาคการศึกษา / ปีการศึกษาต่อไป </h2>
    <br>

    <div class="col-12">

 <label class="form-text">   ข้อเสนอ  </label>
              <textarea id=" offer " name="offer" class="form-control"> </textarea> 
    </div> 
   
    <div class="col-12">
 <label class="form-text"> กำหนดเวลาที่แล้วเสร็จ</label>
              <textarea id="Time limit" name="Time limit" class="form-control"> </textarea> 
    </div> 
    <div class="col-12">
 <label class="form-text">  ผู้รับผิดชอบ  </label>
              <textarea id="responsible person" name="responsible person" class="form-control"> </textarea> 
    </div> 
    <div class="col-12">
 <label class="form-text">ข้อเสนอแนะของอาจารย์ผู้รับผิดชอบรายวิชาต่ออาจารย์ผู้รับผิดชอบหลักสูตร  </label>
              <textarea id=" Suggestions " name="Suggestions" class="form-control"> </textarea> 
    </div> 

         <br><br>
         <input type="hidden" name="pro_id" value="<?php echo $rowpro['j_number']; ?>">
         <input name="submit" type="submit" id="submit"  class="btn btn-success >
       </fieldset>
     </form>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   </body>
   </div>
</html>
