<?php
 require 'connect.php';

 $number_group  = $_GET ['number_group'];
   
 $j_number   = $_GET ['j_number'];
 $qpro = "SELECT * FROM tbl_addjob A
 INNER JOIN group2 B ON A.j_number = B.j_number
 INNER JOIN group4_mk5 C ON A.j_number = C.j_number
 INNER JOIN group5_mka5 D ON A.j_number = D.j_number
 INNER JOIN group6_mka5 E ON A.j_number = E.j_number
 INNER JOIN group7_mka5 F ON A.j_number = F.j_number
 INNER JOIN group8_mka5 G ON A.j_number = G.j_number
 INNER JOIN tbl_addjob_mka5 H ON A.j_number = H.j_number


 WHERE A.j_number = '$j_number'AND H.number_group='$number_group'";
   $respro = mysqli_query($con, $qpro);
   $rowpro = mysqli_fetch_array($respro, MYSQLI_ASSOC);
   
 ?>
<html>
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
 
 
<style>
table, td, th {
    border: 1px solid black;
	

		
width:500px

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
     <title>ดูเอกสาร</title>
  
   


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
	<form method="POST" id="upform" action="addjob_moloall5_bn.php" >

	<br>
	<table border="2px">

 <center><h2> หมวดที่ 1 ข้อมูลทั่วไป  </h2> </center>
	
	 <tr>
			 <th>  <center>    คณะ </th>  </center>
			 <th>  <center>    กลุ่มที่ </th>  </center>
 
	 </tr>
	 <tr>
	 
		 <td>
		 <div   class="form-group">
					 <label class="form-text"></label>
					<input id="faculty" name="faculty" class="form-control"value="<?php echo $rowpro['stu_fac']; ?>"readonly>
				 </div>
		 </td>			

		 <td>		
		 <div class="form-group">
                    <label class="form-text"></label>
                   <input id="group_tc" name="group_tc" class="form-control"value="<?php echo $rowpro['number_group']; ?>"readonly>
                </div>
 
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
					 <label class="form-text"></label>
					<input id="document" name="document" class="form-control"value="<?php echo $rowpro['j_datetime']; ?>"readonly>
				 </div>
 
			 </td>
			 </tr>
			 </table>
            
				 <div style="page-break-after: always"></div>
				<br>
<br>				 <center> <h2> หมวดที่ 2 จุดมุ่งหมายและวัตถุประสงค์  </h2>  </center>
		
<center>	

<table border="2px"> 
    <tr>
			<th>  <center>    หัวข้อ </th>  </center>
 <th>   <center> จำนวนชั่วโมง ตามแผนการสอน </th> </center>
 <th>  <center> จำนวนชั่วโมง ที่สอนจริง</th> </center>
 <th>  <center>  ระบุสาเหตุที่การสอนจริงต่างจากแผนการสอน หากมีความแตกต่างเกิน 25% </th> </center>
	</tr>
	
		 <tr>
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <textarea id="Topics1" name="Topics1" class="form-control"readonly ><?php echo $rowpro['Topics_1']; ?> </textarea>
			 </div>
		 </td>
		 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week1" name="Week1" class="form-control" type="number" value="<?php echo $rowpro['Week1']; ?>"readonly>
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
				 <textarea id="Topics2" name="Topics2" class="form-control" readonly><?php echo $rowpro['Topics_2']; ?>   </textarea>
			 </div>
		 </td>

		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week2" name="Week2" class="form-control" type="number" value="<?php echo $rowpro['Week2']; ?>"readonly>
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
				 <textarea id="Topics3" name="Topics3" class="form-control" readonly><?php echo $rowpro['Topics_3']; ?>   </textarea>
			 </div>
		 </td>
				 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week3" name="Week3" class="form-control" type="number" value="<?php echo $rowpro['Week3']; ?>"readonly>
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
				
				 <input id="Instructor3" name="Instructor3" class="form-control"  readonly> 
				 </td>
				 </tr>
 
 
		<tr>
			<td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <textarea id="Topics4" name="Topics4" class="form-control" readonly><?php echo $rowpro['Topics_4']; ?>   </textarea>
			 </div>
		 </td>
		 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week4" name="Week4" class="form-control" type="number" value="<?php echo $rowpro['Week4']; ?>"readonly>
			 </div>
			 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="hour4" name="hour4" class="form-control"  type="number"value="<?php echo $rowpro['hour4']; ?>"readonly> 
			 </div>
			 </td>
		<td>
			 <div class="form-group">
				 <label class="form-text"></label>
				
				 <input id="Instructor4" name="Instructor4" class="form-control"   value="<?php echo $rowpro['Instructor4']; ?>"readonly> 
				 </td>
				 </tr>
 	 
		<tr>
				 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <textarea id="Topics5" name="Topics5" class="form-control"readonly ><?php echo $rowpro['Topics_5']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week5" name="Week5" class="form-control" type="number" value="<?php echo $rowpro['Week5']; ?>"readonly>
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
				 <textarea id="Topics6" name="Topics6" class="form-control"readonly ><?php echo $rowpro['Topics_6']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week6" name="Week6" class="form-control" type="number" value="<?php echo $rowpro['Week6']; ?>"readonly>
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
				 <textarea id="Topics7" name="Topics7" class="form-control"readonly ><?php echo $rowpro['Topics_7']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week7" name="Week7" class="form-control" type="number" value="<?php echo $rowpro['Week7']; ?>"readonly>
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
				 <textarea id="Topics8" name="Topics8" class="form-control"readonly ><?php echo $rowpro['Topics_8']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week8" name="Week8" class="form-control" type="number" value="<?php echo $rowpro['Week8']; ?>"readonly>
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
				 <textarea id="Topics9" name="Topics9" class="form-control"readonly ><?php echo $rowpro['Topics_9']; ?> </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week9" name="Week9" class="form-control" type="number" value="<?php echo $rowpro['Week9']; ?>"readonly>
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
				 <textarea id="Topics10" name="Topics10" class="form-control"readonly ><?php echo $rowpro['Topics_10']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week10" name="Week10" class="form-control" type="number" value="<?php echo $rowpro['Week10']; ?>"readonly>
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
 </table>

				 <div style="page-break-after: always"></div>
				 <br>
				<table>
				
				 <tr>
				 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <textarea id="Topics11" name="Topics11" class="form-control"readonly ><?php echo $rowpro['Topics_11']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week11" name="Week11" class="form-control" type="number" value="<?php echo $rowpro['Week11']; ?>"readonly>
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
				 <textarea id="Topics12" name="Topics12" class="form-control"readonly ><?php echo $rowpro['Topics_12']; ?>   </textarea>
			 </div>
		 </td>
		 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week12" name="Week12" class="form-control" type="number" value="<?php echo $rowpro['Week12']; ?>"readonly>
			 </div>
			 </td>

		  <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="hour12" name="hour12" class="form-control"  type="number"value="<?php echo $rowpro['hour12']; ?>"readonly> 
			 </div>
			 </td>
			 
 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				
				 <input id="Instructor12" name="Instructor12" class="form-control"   value="<?php echo $rowpro['Instructor12']; ?>"readonly> 
				 </td>
				 </tr>
 
		 <tr>
		 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <textarea id="Topics13" name="Topics13" class="form-control"readonly ><?php echo $rowpro['Topics_13']; ?>   </textarea>
			 </div>
		 </td>
		 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week13" name="Week13" class="form-control" type="number" value="<?php echo $rowpro['Week13']; ?>"readonly>
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
				 <textarea id="Topics14" name="Topics14" class="form-control"readonly ><?php echo $rowpro['Topics_14']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week14" name="Week14" class="form-control" type="number" value="<?php echo $rowpro['Week14']; ?>"readonly>
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
				 <textarea id="Topics15" name="Topics15" class="form-control"readonly ><?php echo $rowpro['Topics_15']; ?>   </textarea>
			 </div>
		 </td>
 
		 <td>
			 <div class="form-group">
				 <label class="form-text"></label>
				 <input id="Week15" name="Week15" class="form-control" type="number" value="<?php echo $rowpro['Week15']; ?>"readonly>
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
				<textarea id="Topics_covered" name="Topics_covered" class="form-control"readonly ><?php echo $rowpro['Topics_covered']; ?>   </textarea>

		
          </div>
		</td>		
        <td>
			<div class="form-group">
                <label class="form-text"></label>
				<textarea id="Significance " name="Significance" class="form-control"readonly ><?php echo $rowpro['Significance']; ?>   </textarea>

		
          </div>
		</td>		
        <td>
			<div class="form-group">
                <label class="form-text"></label>
				<textarea id="Compensation" name="Compensation" class="form-control"readonly ><?php echo $rowpro['Compensation']; ?>   </textarea>
		
          </div>
		</td>				
	</tr> 
	
	</table>	
	<div style="page-break-after: always"></div>
		
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
		 <center><label class="form-text"> แผนที่แสดงการกระจายความรับผิดชอบต่อผลการเรียนรู้จากหลักสูตรสู่รายวิชา </label></center>
        </div>
      
       
    </td>

     <td>
     <div class="col-12">

     <label class="form-text"> </label>
                   <textarea id="b_w" name="b_w" class="form-control"readonly> <?php echo $rowpro['b_w']; ?> </textarea> 
                </div>
				
                <div class="col-12">

				<label class="form-text">วิธีการสอน</label>
                   <textarea id="Teachingone" name="Teachingone" class="form-control"readonly> <?php echo $rowpro['Teachingmethods_1']; ?> </textarea>
                </div>
				<div class="col-12">
                    <label class="form-text">วิธีการประเมินผล</label>
					<textarea id="Evaluationmethod1" name="Evaluationmethod1" class="form-control" readonly><?php echo $rowpro['Evaluationmethod_1']; ?>	</textarea>
                </div>
                <br>
     </td>		
     <td>
	 <center>
	 <div class="col-4">
                    <label class="form-text"></label>
                   <input id="group1" name="group1" class="form-control"value="<?php echo $rowpro['group1']; ?>"readonly>
                </div>

     </td>				
	 </center>
     <td>
    
     <div class="col-12">

     <label class="form-text"> </label>
                   <textarea id="issue1" name="issue1" class="form-control"readonly> </textarea> 
                </div>
     </td>		
 
 
 </tr> 

<!-- 2 -->
<tr>
     <td>
         <div class="form-group">
            <center> <label class="form-text"> ความรู้ที่ต้องได้รับ </label></center>
        </div>
      
       
    </td>

     <td>
    
			<div class="row">
				<div class="col-12">
				<label class="form-text">ความรู้ที่ต้องได้รับ </label>
				<textarea id="Knowledge1" name="Knowledge1" class="form-control" readonly><?php echo $rowpro['knowledge_1']; ?>	</textarea>
   
                </div>
				<div class="col-12">
                    <label class="form-text">วิธีการสอน </label>
					<textarea id="Teachingmethods2" name="Teachingmethods2" class="form-control" readonly><?php echo $rowpro['teachingmethods_2']; ?>	</textarea>
   
				
                </div>
				<div class="col-12">
                    <label class="form-text">วิธีการประเมินผล</label>
					<textarea id="Evaluationmethod2" name="Evaluationmethod2" class="form-control" readonly><?php echo $rowpro['Evaluationmethod_2']; ?>	</textarea>
   
				  
                </div>
			</div>
            <br>
     </td>		
   
     <td>
<center>
<div class="col-4">
                    <label class="form-text"></label>
                   <input id="group1" name="group1" class="form-control"value="<?php echo $rowpro['group2']; ?>"readonly>
                </div>
  </center>
     
     </td>				
    <td>
    <div class="col-12">

<label class="form-text"> </label>
              <textarea id="issue2" name="issue2" class="form-control"readonly> </textarea> 
           </div>
</td>		
 </tr> 
 </table>
<div style="page-break-after: always"></div>
<br>
<table>
 <!-- 3 -->
 <tr>
     <td>
         <div class="form-group">
		 <center> <label class="form-text"> ทักษะการแก้ปัญหา </label></center>
        </div>
      
       
    </td>

     <td>
    
     <div class="col-12">
				<label class="form-text">ทักษะทางปัญญาที่ต้องพัฒนา </label>
				<textarea id="Cognitiveskills" name="Cognitiveskills" class="form-control" readonly><?php echo $rowpro['Cognitive_skills']; ?>	</textarea>
   
				  
                </div>
				<div class="col-12">
                    <label class="form-text">วิธีการสอน </label>
                   
				  
				   <textarea id="Teachingmethods3" name="Teachingmethods3" class="form-control" readonly><?php echo $rowpro['teachingmethods_3']; ?>	</textarea>
   
			    </div>
				<div class="col-12">
                    <label class="form-text">วิธีการประเมินผล</label>
                  
				   <textarea id="Evaluationmethod3" name="Evaluationmethod3" class="form-control" readonly><?php echo $rowpro['Evaluationmethod_3']; ?>	</textarea>
   
			   </div>
			</div> <br>
     </td>		
   
     <td>
     <center>
	 <div class="col-4">
                    <label class="form-text"></label>
                   <input id="group1" name="group1" class="form-control"value="<?php echo $rowpro['group3']; ?>"readonly>
                </div>
     
       </center>
     </td>				
 
 
     <td>
     <div class="col-12">

<label class="form-text"> </label>
              <textarea id="issue3" name="issue3" class="form-control"readonly> </textarea> 
           </div>
</td>		
 </tr> 
 
 <!--4-->
 
 
 <tr>
     <td>
         <div class="form-group">
		 <center> <label class="form-text"> ทักษะความสัมพันธ์ระหว่างบุคคลและความรับผิดชอบ </label></center>
        </div>
      
       
    </td>

     <td>
    
     <div class="col-12">
				<label class="form-text">ทักษะความสัมพันธ์ระหว่างบุคคลและความรับผิดชอบที่ต้องพัฒนา  </label>
				<textarea id="Relationshipskills" name="Relationshipskills" class="form-control" readonly><?php echo $rowpro['knowledge_1']; ?>	</textarea>
   
				
			    </div>
				<div class="col">
                    <label class="form-text">วิธีการสอน </label>
					<textarea id="Teachingmethods4" name="Teachingmethods4" class="form-control" readonly><?php echo $rowpro['teachingmethods_4']; ?>	</textarea>
   

				  
                </div>
				<div class="col">
                    <label class="form-text">วิธีการประเมินผล</label>
                  
				

				   <textarea id="Evaluationmethod4" name="Evaluationmethod4" class="form-control" readonly><?php echo $rowpro['Evaluationmethod_4']; ?>	</textarea>
   

			    </div>
			</div> <br>
     </td>		
   
     <td>
     <center>
     <div class="col-4">
                    <label class="form-text"></label>
                   <input id="group1" name="group1" class="form-control"value="<?php echo $rowpro['group4']; ?>"readonly>
                </div>
     
  </center>
     </td>				
     <td>
     <div class="col-12">

<label class="form-text"> </label>
              <textarea id="issue4" name="issue4" class="form-control"readonly> </textarea> 
           </div>
</td>		
 </tr> 
 </table>
<div style="page-break-after: always"></div>
<table>
 <!--5--> 
<BR>
 <tr>
     <td>
         <div class="form-group">
		 <center> <label class="form-text"> ทักษะการวิเคราะห์เชิงตัวเลข  การสื่อสาร  และการใช้เทคโนโลยีสารสนเทศ </label></center>
        </div>
      
       
    </td>

     <td>
    
    
				<div class="form-group col-md-12">
				<label class="form-text">ทักษะการวิเคราะห์เชิงตัวเลข  การสื่อสาร  และการใช้เทคโนโลยีสารสนเทศที่ต้องพัฒนา   </label>
                 
				   <textarea id="NumericSkills" name="NumericSkills" class="form-control" readonly><?php echo $rowpro['Numeric_skills']; ?>	</textarea>
   

				
				</div>
				<div class="col-12">
                    <label class="form-text">วิธีการสอน </label>
                   
			
				<textarea id="Teachingmethods5" name="Teachingmethods5" class="form-control" readonly><?php echo $rowpro['teachingmethods_5']; ?>	</textarea>
   
			    </div>
				<div class="col-12">
                    <label class="form-text">วิธีการประเมินผล</label>
                 
				   <textarea id="Evaluationmethod5" name="Evaluationmethod5" class="form-control" readonly><?php echo $rowpro['Evaluationmethod_5']; ?>	</textarea>
   
			    </div>
			</div> <br>
     </td>		
   
     <td>
     <center>
     <div class="col-4">
                    <label class="form-text"></label>
                   <input id="group1" name="group1" class="form-control"value="<?php echo $rowpro['group5']; ?> "readonly>
                </div>

     
     </center>
     </td>			

        <td>	
     <div class="col-12">

<label class="form-text"> </label>
              <textarea id="issue5" name="issue5" class="form-control"readonly> </textarea> 
           </div>
</td>		
 </tr> 

 </table>		
 
 <br>
 <table>
 <tr>
 <th> ข้อเสนอการดำเนินการเพื่อปรับปรุงวิธีสอน (ซึ่งได้จากปัญหาที่พบในข้อ 2.3) </th>
 <tr>
 <td>
 <div class="form-group">
  <label class="form-text">  </label>
              <textarea id="Improveteaching" name="Improveteaching" class="form-control"readonly> <?php echo $rowpro['Improveteaching']; ?></textarea> 
                </div>
  </td>
  </tr>
  </table>		
 	
<br>
<hr>
<br>

 <center> <h2>  หมวดที่ 3  สรุปผลการจัดการเรียนการสอนของรายวิชา </h2> </center>
<br>
<table>
<tr>
 <th> <center>1. จำนวนนักศึกษาที่ลงทะเบียนเรียน </th> </center> 
  <th><center> 2. จำนวนนักศึกษาที่คงอยู่เมื่อสิ้นสุดภาคการศึกษา  </th> </center> 
 <th> <center> 3. จำนวนนักศึกษาที่ถอน (W) </th> </center> 
 </tr>
 <tr>

 <td>
 <div class="form-group" >
 <label class="form-text"></label>
              <input id="students_enrolled " name="students_enrolled" class="form-control" type="number "value="<?php echo $rowpro['students_enrolled']; ?>"readonly> 
    </div>
    </td>
	<td>
 <div  class="form-group" >
 <label class="form-text">  </label>
              <input id="students_remaining " name="students_remaining" class="form-control"  type="number "value="<?php echo $rowpro['students_remaining']; ?>"readonly> 
    </div>
   </td>

   <td> 
 <div  class="form-group" >
 <label class="form-text"> </label>
              <input id="students_withdrawn" name="students_withdrawn" class="form-control"  type="number "value="<?php echo $rowpro['students_withdrawn']; ?>"readonly> 
    </div>

</td>
</tr>
</table>


<br> <br>
<div style="page-break-after: always"></div>
<br><br>
 <center><h2>4. การกระจายของระดับคะแนน (เกรด)</h2> </center>
 <table border="2px"> 
    <tr>
	<th>  <center>    </th>  </center>
    <th>  <center>    ระดับคะแนน</th>  </center>
 <th>   <center>   จำนวน </th> </center>
 <th>   <center> คิดเป็นร้อยละ </th> </center>
	</tr>
	
	<tr>
	<td>
			<div class="form-group">
                <label class="form-text"></label>
				<input  class="form-control" value="A"  readonly> 

			    </div>
			<div class="form-group">
                <label class="form-text"></label>
				<input  class="form-control"  value="B+" readonly> 
                
				</div>
			<div class="form-group">
                <label class="form-text"></label>
				<input  class="form-control"  value="B"readonly> 
				</div>
                	
			<div class="form-group">
                <label class="form-text"></label>
				<input  class="form-control"  value="C+"readonly> 
				</div>
                	
			<div class="form-group">
                <label class="form-text"></label>
				<input  class="form-control"  value="C"readonly> 
				</div>
                	
			<div class="form-group">
                <label class="form-text"></label>
				<input  class="form-control"  value="D+"readonly> 

				</div>
			<div class="form-group">
                <label class="form-text"></label>
				<input class="form-control"  value="D"readonly> 
				</div>
                	
			<div class="form-group">
                <label class="form-text"></label>
				<input class="form-control"  value="F"readonly> 
				</div>
                	
			<div class="form-group">
                <label class="form-text"></label>
				<input  class="form-control"  value="X"readonly> 

				</div>
			<div class="form-group">
                <label class="form-text"></label>
				<input class="form-control"  value="W"readonly> 
          </div>
		</td>	
		<td>
			<div class="form-group">
                <label class="form-text"></label>
				<input id="a" name="a" class="form-control"value="<?php echo $rowpro['A']; ?>" readonly> 
                </div>
			
			<div class="form-group">
                <label class="form-text"></label>
				<input id="bp" name="bp" class="form-control"value="<?php echo $rowpro['BP']; ?>"readonly > 
                
                </div>
			<div class="form-group">
                <label class="form-text"></label>
				<input id="b" name="b" class="form-control"value="<?php echo $rowpro['B']; ?>" readonly> 

                	 </div>
			<div class="form-group">
                <label class="form-text"></label>
				<input id="cp" name="cp" class="form-control"value="<?php echo $rowpro['CP']; ?>"readonly > 

                	 </div>
			<div class="form-group">
                <label class="form-text"></label>
				<input id="c" name="c" class="form-control"value="<?php echo $rowpro['C']; ?>" readonly> 

                	 </div>
			<div class="form-group">
                <label class="form-text"></label>
				<input id="dp" name="dp" class="form-control"value="<?php echo $rowpro['DP']; ?>" readonly> 

                	 </div>
			<div class="form-group">
                <label class="form-text"></label>
				<input id="d" name="d" class="form-control"value="<?php echo $rowpro['D']; ?>" readonly> 

                	 </div>
			<div class="form-group">
                <label class="form-text"></label>
				<input id="f" name="f" class="form-control"value="<?php echo $rowpro['F']; ?>" readonly> 
                </div>
                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="x" name="x" class="form-control"value="<?php echo $rowpro['X']; ?>"readonly > 
                </div>
                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="w" name="w" class="form-control"value="<?php echo $rowpro['W']; ?>" readonly> 
          </div>
		</td>		
      
        <td>
			<div class="form-group">
                <label class="form-text"></label>
				<input id="a1" name="a1" class="form-control"value="<?php echo $rowpro['A1']; ?>" readonly> 

			 </div>
			<div class="form-group">
                <label class="form-text"></label>
				<input id="bp1" name="bp1" class="form-control"value="<?php echo $rowpro['BP1']; ?>" readonly> 
                
                </div>
			<div class="form-group">
                <label class="form-text"></label>
				<input id="b1" name="b1" class="form-control"value="<?php echo $rowpro['B1']; ?>"readonly > 
                </div>
                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="cp1" name="cp1" class="form-control"value="<?php echo $rowpro['CP1']; ?>"readonly > 

                 </div>	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="c1" name="c1" class="form-control"value="<?php echo $rowpro['C1']; ?>" readonly> 

                	 </div>
			<div class="form-group">
                <label class="form-text"></label>
				<input id="dp1" name="dp1" class="form-control"value="<?php echo $rowpro['DP1']; ?>"readonly > 
                </div>
                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="d1" name="d1" class="form-control"value="<?php echo $rowpro['D1']; ?>"readonly> 
                </div>
                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="f1" name="f1" class="form-control"value="<?php echo $rowpro['F1']; ?>" readonly> 
                </div>
                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="x1" name="x1" class="form-control"value="<?php echo $rowpro['X1']; ?>"readonly > 
                </div>
                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="w1" name="w1" class="form-control"value="<?php echo $rowpro['W1']; ?>" readonly> 
          </div>
		</td>
    	<td>
			<div class="form-group">
                <label class="form-text"></label>
				<input id="a2" name="a2" class="form-control"value="<?php echo $rowpro['A2']; ?>"readonly > 
                </div>
			
			<div class="form-group">
                <label class="form-text"></label>
				<input id="bp2" name="bp2" class="form-control"value="<?php echo $rowpro['BP2']; ?>" readonly> 
                </div>
                
			<div class="form-group">
                <label class="form-text"></label>
				<input id="b2" name="b2" class="form-control"value="<?php echo $rowpro['B2']; ?>" readonly> 
                </div>
                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="cp2" name="cp2" class="form-control"value="<?php echo $rowpro['CP2']; ?>"readonly > 
                </div>
                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="c2" name="c2" class="form-control"value="<?php echo $rowpro['C']; ?>" readonly> 
                </div>
                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="dp2" name="dp2" class="form-control"value="<?php echo $rowpro['DP2']; ?>" readonly> 
                </div>
                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="d2" name="d2" class="form-control"value="<?php echo $rowpro['D2']; ?>" readonly> 
                </div>
                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="f2" name="f2" class="form-control"value="<?php echo $rowpro['F2']; ?>" readonly> 
                </div>
                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="x2" name="x2" class="form-control"value="<?php echo $rowpro['X2']; ?>" readonly> 
                </div>
                	
			<div class="form-group">
                <label class="form-text"></label>
				<input id="w2" name="w2" class="form-control"value="<?php echo $rowpro['W2']; ?>"readonly > 
          </div>
		</td>
	</tr> 
	
	</table>	

	<br>
<table>
<tr>
<th> <center> ปัจจัยที่ทำให้ระดับคะแนนผิดปกติ</th>  </center> 
<th> <center> ความคลาดเคลื่อนจากแผนการประเมินที่กำหนดไว้ในรายละเอียดรายวิชา </th> </center>


</tr>
<tr>
<td>
<div class="form-group">
 <label class="form-text"></label>
 <textarea id="Factors_to_Rating" name="Factors_to_Rating" class="form-control"readonly>  <?php echo $rowpro['Factors_to_Rating']; ?></textarea> 
	</td>
	<td>
    <div class="form-group">
 <label class="form-text"></label>
 <textarea id="assessment" name="assessment" class="form-control"readonly>  <?php echo $rowpro['assessment']; ?></textarea> 
    </div> 
	</td>
	
    
	</tr>
	</table>	

	<table>
<tr>
<th >  <center> ความคลาดเคลื่อนด้านกำหนดเวลาการประเมิน</th> </center>
<th > <center> ความคลาดเคลื่อนด้านวิธีการประเมินผลการเรียนรู้(ถ้ามี) </th> </center>


</tr>
<tr>

	<td>
    <div class="form-group ">
 <label class="form-text"></label>
 <textarea id="Time_deviation " name="Time_deviation" class="form-control"readonly> <?php echo $rowpro['Time_deviation']; ?></textarea> 
    </div> 
	</td>
	


	<td>
    <div class="form-group ">
 <label class="form-text"></label>
 <textarea id="Discrepancies " name="Discrepancies" class="form-control"readonly> <?php echo $rowpro['Discrepancies']; ?></textarea> 
    </div> 
	</td>

	</tr>
	</table>	

	
 
    <br>
	<div style="page-break-after: always"></div>
	<br><br>
<center><h2>การทวนสอบผลสัมฤทธิ์ของนักศึกษา</h2></center>

	<table>
<tr>
<th > <center> วิธีการทดสอบ</th> </center>
<th > <center> สรุปผล </th> </center>


</tr>
<tr>

	<td>
    <div class="form-group ">
 <label class="form-text"></label>
              <textarea id="Verification_method" name="Verification_method" class="form-control"readonly> <?php echo $rowpro['Verificatio_method']; ?></textarea>
    </div> 
	</td>
	<td>
    <div class="form-group ">
 <label class="form-text"></label>
 <textarea id="conclude" name="conclude" class="form-control"readonly><?php echo $rowpro['conclude']; ?></textarea>
    </div> 
	</td>

	</tr>
	</table>	

    <br>
      
	<center> <h2> หมวดที่ 4  ปัญหาและผลกระทบต่อการดำเนินการ </h2></center>
      <br>
      <center><h3> ปัญหาด้านทรัพยากรประกอบการเรียนและสิ่งอำนวยความสะดวก </h3></center>
      
	  <table>
<tr>
<th ><center> ปัญหาในการใช้แหล่งทรัพยากรประกอบการเรียนการสอน (ถ้ามี)</th> </center>
<th > <center> ผลกระทบ </th> </center>


</tr>
<tr>

	<td>
    <div class="form-group ">
 <label class="form-text"></label>
 <textarea id=" problem_of_using" name=" problem_of_using" class="form-control"readonly> <?php echo $rowpro['problem_of_using']; ?></textarea>
    </div> 
	</td>
	<td>
    <div class="form-group ">
 <label class="form-text"></label>
 <textarea id="conclude" name="conclude" class="form-control"readonly><?php echo $rowpro['conclude']; ?></textarea>
    </div> 
	</td>

	</tr>
	</table>	

      
 
 
    <br> 

    <center><h2> ปัญหาด้านการบริหารและองค์กร </h2></center>

           
	  <table>
<tr>
<th ><center> ปัญหาด้านการบริหารและองค์กร  (ถ้ามี)</th></center>
<th > <center>ผลกระทบต่อผลการเรียนรู้ของนักศึกษา </th></center>


</tr>
<tr>

	<td>
    <div class="form-group ">
 <label class="form-text"></label>
 <textarea id="Administrative" name="Administrative" class="form-control"readonly><?php echo $rowpro['Administrative']; ?></textarea>
    </div> 
	</td>
	<td>
    <div class="form-group ">
 <label class="form-text"></label>
 <textarea id="Impact" name="Impact" class="form-control"readonly><?php echo $rowpro['Impact']; ?></textarea>
    </div> 
	</td>

	</tr>
	</table>	

              <br>
			  <div style="page-break-after: always"></div>
<br>
            <center>  <h2> หมวดที่ 5  การประเมินรายวิชา </h2> <br></center>
			<table>
		
<tr>
<th > <center>ผลการประเมินรายวิชาโดยนักศึกษา (แนบเอกสาร) </th></center>
<th > <center>ข้อวิพากษ์ที่สำคัญจากผลการประเมินโดยนักศึกษา </th></center>
<th > <center>ความเห็นของอาจารย์ผู้สอนต่อข้อวิพากษ์ตามข้อ </th></center>

</tr>
<tr>

	<td>
    <div class="form-group ">
 <label class="form-text"></label>
 <textarea id=" Student_Evaluation " name=" Student_Evaluation" class="form-control"readonly> <?php echo $rowpro['Student_Evaluation']; ?></textarea>
    </div> 
	</td>
	<td>
    <div class="form-group ">
 <label class="form-text"></label>
 <textarea id=" Critical" name=" Critical" class="form-control"readonly><?php echo $rowpro['Critical']; ?></textarea>
    </div> 
	</td>
	<td>
    <div class="form-group ">
 <label class="form-text"></label>
 <textarea id=" comments" name=" comments" class="form-control"readonly><?php echo $rowpro['comments']; ?></textarea>
    </div> 
	</td>

	</tr>
	</table>	
<br> 	

<center><h2> ผลการประเมินรายวิชาโดยคณะกรรมการประเมินการสอนของสาขาวิชา </h2></center>
<br>
         
<table>
<tr>
<th > <center>ข้อวิพากษ์ที่สำคัญจากผลการประเมินโดยคณะกรรมการ</th></center>
<th > <center>ความเห็นของอาจารย์ผู้สอนต่อข้อวิพากษ์ตามข้อ </th></center>


</tr>
<tr>

	<td>
    <div class="form-group ">
 <label class="form-text"></label>
 <textarea id=" Critical_1 " name=" Critical_1" class="form-control"readonly><?php echo $rowpro['Critical_1']; ?></textarea>
    </div> 
	</td>
	<td>
    <div class="form-group ">
 <label class="form-text"></label>
 <textarea id=" comments_1 " name=" comments_1" class="form-control"readonly><?php echo $rowpro['comments_1']; ?></textarea>
    </div> 
	</td>

	</tr>
	</table>	


<br>
<div style="page-break-after: always"></div>
<br>
<center> <h2> หมวดที่ 6  แผนการปรับปรุง </h2> </center>
<br>
<h3> ความก้าวหน้าของการปรับปรุงการเรียนการสอนตามที่เสนอในรายงานของรายวิชาครั้งที่ผ่านมา </h3> <br>
<table>
<tr>
<th> <center> แผนการปรับปรุงที่เสนอในภาคการศึกษา / ปีการศึกษาที่ผ่านมา </th> </center>
<th> <center>ผลการดำเนินการ </th> </center>

</tr>
<tr>
<td>

<div class="form-group">
 <label class="form-text"></label>
              <textarea id=" Improvement" name="Improvement" class="form-control"readonly><?php echo $rowpro['Improvement']; ?></textarea>
    </div> 
	</td>
	<td>
    <div class="form-group">
 <label class="form-text"></label>
              <textarea id="Results " name="Results" class="form-control"readonly><?php echo $rowpro['Results']; ?> </textarea>
    </div> 
	</td>

	</tr>

	</table>
	<table>
	<tr>
	<th> การดำเนินการอื่นๆ ในการปรับปรุงรายวิชา </th>
	<tr>
	<td>
    <div class="form-group">
 <label class="form-text "></label>
              <textarea id=" Other_actions " name="Other_actions" class="form-control"readonly><?php echo $rowpro['Other_actions']; ?></textarea>
    </div> 
	</td>
	</tr>
	</table>
    <br>
	<center> <h2>  ข้อเสนอแผนการปรับปรุงสำหรับภาคการศึกษา / ปีการศึกษาต่อไป </h2></center>
    <br>



<table>
<tr>
<th><center> ข้อเสนอ</th></center>
<th> <center>กำหนดเวลาที่แล้วเสร็จ </th> </center>

</tr>
<tr>
<td>

<div class="form-group">
 <label class="form-text"></label>
 <textarea id=" offer " name="offer" class="form-control"readonly><?php echo $rowpro['offer']; ?> </textarea>    </div> 
	</td>
	<td>
    <div class="form-group">
 <label class="form-text"></label>
 <textarea id="Time_limit" name="Time_limit" class="form-control"readonly><?php echo $rowpro['Time_limit']; ?></textarea>
    </div> 
	</td>

	</tr>
	</table>
   

   
<table>
<tr>
<th > <center> ผู้รับผิดชอบ</th> </center>
<th > <center> ข้อเสนอแนะของอาจารย์ผู้รับผิดชอบรายวิชาต่ออาจารย์ผู้รับผิดชอบหลักสูตร </th> </center>

</tr>
<tr>
<td>

<div class="form-group">
 <label class="form-text"></label>
 <textarea id="responsible_person" name="responsible_person" class="form-control"readonly><?php echo $rowpro['responsible_person']; ?></textarea>
	</td>
	<td>
    <div class="form-group ">
 <label class="form-text"></label>
 <textarea id="responsible_person" name="responsible_person" class="form-control"readonly><?php echo $rowpro['responsible_person']; ?></textarea>
    </div> 
	</td>

	</tr>
	</table>
   
   







         <br><br>
         <input type="hidden" name="pro_id" value="<?php echo $rowpro['j_number']; ?>">
        
       </fieldset>
     </form>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   </body>
   </div>
</html>
