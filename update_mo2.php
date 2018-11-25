<?php
   require 'connect.php';

   $subID   = $_GET['subID'];
   $qpro = "SELECT * FROM subject1 WHERE subID='$subID'";
   $respro = mysqli_query($con, $qpro);
   $rowpro = mysqli_fetch_array($respro, MYSQLI_ASSOC);
$checkbox_array = explode(",", $rowpro['moallko_2']);
?>

<html>
   <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <title>แก้ไขข้อมูลสินค้า</title>
     <nav class="navbar navbar-expand navbar-dark bg-dark">
     <a class="navbar-brand" href="#">ADMIN PANEL</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
     <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
     <li class="nav-item active">
        <a class="nav-link"  href="Admin.php">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link"  href="insert.php">INSERT<span class="sr-only">(current)</span></a>
      </li>
    </div>
    <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex ">
            <li class="nav-item">
                <a class="btn btn-dark nav-link" href="logout.php">LOGOUT</a>
            </li>
        </ul>

  </div>
 </nav>
     <style>
            label {
              display: block;
            }
     </style>
   </head>
   <body>
     <div class="container"style="margin-top: 30px" >
     <h2>แก้ไขข้อมูลวิชา</h2>
<form action="product_update.php" method="post" enctype="multipart/form-data" id="form1">
     <fieldset>

         <label>รหัสวิชา </label><input name="pro_name" type="vachar" id="pro_name" size="40" value="<?php echo $rowpro['subID']; ?>">
         <label>ชื่อวิชา</label><input name="pro_price" type="decimal" id="pro_price" size="60" value="<?php echo $rowpro['subName']; ?>">  <br><br>
		<br>
		
    
   
   
     
   <label>ปีการศึกษา </label>
   <input name="j_semester" type="number" id="j_semester" size="40" value="<?php echo $rowpro['j_semester_am']; ?>">
         <label>ภาคการศึกษา</label>
         <select name="j_semester_f">
    <option value="ภาคต้น">ภาคต้น</option>
    <option value="ภาคปลาย">ภาคปลาย</option>
  </select>
  
  <label>วันที่เปิดภาคเรียน </label>
           <input name="op_dade" type="date" id="op_tade" size="40"value="<?php echo $rowpro['op_date']; ?>">
          
          
          <br><br>
		<br>
	  <br><br><br><br>


		<!--จุดดำ-จุดขาว-->
		<center> <h5>จุดดำ-จุดขาว</h5> </center>
		
		
 

<h5>คุณธรรมจริยธรรม</h5>
		
		<input type="checkbox" id="s[]" name="s[]" value="1.คุณธรรมจริยธรรม"
<?php if(in_array("1.คุณธรรมจริยธรรม", $checkbox_array)){ echo " checked=\"checked\""; } ?> /> 1.คุณธรรมจริยธรรม<br />

<input type="checkbox" id="s[]" name="s[]" value="1.1ตระหนักในคุณค่าและคุณธรรม จริยธรรม เสียสละ และซื่อสัตย์ สุจริต"
<?php if(in_array("1.1ตระหนักในคุณค่าและคุณธรรม จริยธรรม เสียสละ และซื่อสัตย์ สุจริต", $checkbox_array  )){ echo " checked=\"checked\""; } ?> /> 1.1ตระหนักในคุณค่าและคุณธรรม จริยธรรม เสียสละ และซื่อสัตย์ สุจริต"<br />
	
	<input type="checkbox" id="s[]" name="s[]" value="1.2มีวินัย ตรงต่อเวลา และความรับผิดชอบต่อตนเองและสังคม"
<?php if(in_array("1.2มีวินัย ตรงต่อเวลา และความรับผิดชอบต่อตนเองและสังคม", $checkbox_array)){ echo " checked=\"checked\""; } ?> /> 1.2มีวินัย ตรงต่อเวลา และความรับผิดชอบต่อตนเองและสังคม<br />

<input type="checkbox" id="s[]" name="s[]" value="1.3มีภาวะความเป็นผู้นำและผู้ตาม สามารถทำงานเป็นทีมและสามารถแก้ไขข้อขัดแย้งและลำดับความสำคัญ"
<?php if(in_array("1.3มีภาวะความเป็นผู้นำและผู้ตาม สามารถทำงานเป็นทีมและสามารถแก้ไขข้อขัดแย้งและลำดับความสำคัญ", $checkbox_array  )){ echo " checked=\"checked\""; } ?> /> 1.3มีภาวะความเป็นผู้นำและผู้ตาม สามารถทำงานเป็นทีมและสามารถแก้ไขข้อขัดแย้งและลำดับความสำคัญ     <br />

<input type="checkbox" name='s[]' value= "1.4เคารพสิทธิและรับฟังความคิดเห็นของผู้อื่น รวมทั้งเคารพในคุณค่าและศักดิ์ศรีของความเป็นมนุษย์"   
<?php if(in_array("1.4เคารพสิทธิและรับฟังความคิดเห็นของผู้อื่น รวมทั้งเคารพในคุณค่าและศักดิ์ศรีของความเป็นมนุษย์", $checkbox_array)){ echo " checked=\"checked\""; } ?> /> เคารพสิทธิและรับฟังความคิดเห็นของผู้อื่น รวมทั้งเคารพในคุณค่าและศักดิ์ศรีของความเป็นมนุษย์&nbsp; <br>

<input type="checkbox" name='s[]' value= "1.5เคารพกฎระเบียบและข้อบังคับต่างๆ ขององค์กรและสังคม" 

<?php if(in_array("1.5เคารพกฎระเบียบและข้อบังคับต่างๆ ขององค์กรและสังคม" , $checkbox_array)){ echo " checked=\"checked\""; } ?> />  เคารพกฎระเบียบและข้อบังคับต่างๆ ขององค์กรและสังคม&nbsp; <br>

<input type="checkbox" name='s[]' value= "1.6สามารถวิเคราะห์ผลกระทบจากการใช้คอมพิวเตอร์ต่อบุคคล องค์กรและสังคม" 
<?php if(in_array("1.6สามารถวิเคราะห์ผลกระทบจากการใช้คอมพิวเตอร์ต่อบุคคล องค์กรและสังคม"  , $checkbox_array)){ echo " checked=\"checked\""; } ?> />  สามารถวิเคราะห์ผลกระทบจากการใช้คอมพิวเตอร์ต่อบุคคล องค์กรและสังคม&nbsp; <br>

<input type="checkbox" name='s[]' value= "1.7มีจรรยาบรรณทางวิชาการและวิชาชีพ" 

<?php if(in_array("1.7มีจรรยาบรรณทางวิชาการและวิชาชีพ"  , $checkbox_array)){ echo " checked=\"checked\""; } ?> />  มีจรรยาบรรณทางวิชาการและวิชาชีพ&nbsp; <br>

		
<hr><br>

<h3>2.ความรู้</h3>
<hr><br><input type="checkbox" name='s[]' value= "2.ความรู้"
<?php if(in_array("2.ความรู้", $checkbox_array)){ echo " checked=\"checked\""; } ?> /> 2 ความรู้&nbsp;</br>
<br><input type="checkbox" name='s[]' value= "2.1มีความรู้และความเข้าใจเกี่ยวกับหลักการและทฤษฎีที่สำคัญในเนื้อหาสาขาวิชาเทคโนโลยีสารสนเทศ"
<?php if(in_array("2.1 มีความรู้และความเข้าใจเกี่ยวกับหลักการและทฤษฎีที่สำคัญในเนื้อหาสาขาวิชาเทคโนโลยีสารสนเทศ", $checkbox_array)){ echo " checked=\"checked\""; } ?> />  2.1 มีความรู้และความเข้าใจเกี่ยวกับหลักการและทฤษฎีที่สำคัญในเนื้อหาสาขาวิชาเทคโนโลยีสารสนเทศ&nbsp;</br>
<br><input type="checkbox" name='s[]' value= "2.2สามารถวิเคราะห์ปัญหา เข้าใจและอธิบายความต้องการทาง computer รวมทั้งประยุกต์ความรู้ ทักษะ และการใช้เครื่องมือที่เหมาะสมกัยการแก้ไขปัญหา"
<?php if(in_array("2.2 สามารถวิเคราะห์ปัญหา เข้าใจและอธิบายความต้องการทาง computer รวมทั้งประยุกต์ความรู้ ทักษะ และการใช้เครื่องมือที่เหมาะสมกัยการแก้ไขปัญหา", $checkbox_array)){ echo " checked=\"checked\""; } ?> />  2.2 สามารถวิเคราะห์ปัญหา เข้าใจและอธิบายความต้องการทาง computer รวมทั้งประยุกต์ความรู้ ทักษะ และการใช้เครื่องมือที่เหมาะสมกัยการแก้ไขปัญหา&nbsp;</br>
<br><input type="checkbox" name='s[]' value= "2.3สามารถวิเคราะห์ ออกแบบ ติดตั้ง ปรับปรุง และ/หรือประเมินระบบองค์ประกอบต่างๆ ของระบบงานบนเทคโนโลยีสารสนเทศให้ตรงตามข้อกำหนด"
<?php if(in_array("2.3 สามารถวิเคราะห์ ออกแบบ ติดตั้ง ปรับปรุง และ/หรือประเมินระบบองค์ประกอบต่างๆ ของระบบงานบนเทคโนโลยีสารสนเทศให้ตรงตามข้อกำหนด", $checkbox_array)){ echo " checked=\"checked\""; } ?> />  2.3 สามารถวิเคราะห์ ออกแบบ ติดตั้ง ปรับปรุง และ/หรือประเมินระบบองค์ประกอบต่างๆ ของระบบงานบนเทคโนโลยีสารสนเทศให้ตรงตามข้อกำหนด&nbsp;</br>
<br><input type="checkbox" name='s[]' value= "2.4สามารถติดตามความก้าวหน้าและวิวัฒนาการคอมพิวเตอร์รวมทั้งการนำไปประยุกต์"
<?php if(in_array("2.4สามารถติดตามความก้าวหน้าและวิวัฒนาการคอมพิวเตอร์รวมทั้งการนำไปประยุกต์", $checkbox_array)){ echo " checked=\"checked\""; } ?> />  2.4 สามารถติดตามความก้าวหน้าและวิวัฒนาการคอมพิวเตอร์รวมทั้งการนำไปประยุกต์&nbsp;</br>
<br><input type="checkbox" name='s[]' value= "2.5รู้ เข้าใจและสนใจพัฒนาความรู้ ความชำนาญทางคอมพิวเตอร์"
<?php if(in_array("2.5รู้ เข้าใจและสนใจพัฒนาความรู้ ความชำนาญทางคอมพิวเตอร์", $checkbox_array)){ echo " checked=\"checked\""; } ?> />  2.5 รู้ เข้าใจและสนใจพัฒนาความรู้ ความชำนาญทางคอมพิวเตอร์&nbsp;</br>
<br><input type="checkbox" name='s[]' value= "2.6มีความรู้ในแนวกว้างของสาขาวิชาเทคโนโลยีสารสนเทศเล็งให้เห็นการเปลี่ยนแปลงและเข้าใจผลกระทบของ Technologyใหม่ๆ"
<?php if(in_array("2.6มีความรู้ในแนวกว้างของสาขาวิชาเทคโนโลยีสารสนเทศเล็งให้เห็นการเปลี่ยนแปลงและเข้าใจผลกระทบของ Technologyใหม่ๆ", $checkbox_array)){ echo " checked=\"checked\""; } ?> /> 2.6 มีความรู้ในแนวกว้างของสาขาวิชาเทคโนโลยีสารสนเทศเล็งให้เห็นการเปลี่ยนแปลงและเข้าใจผลกระทบของ Technologyใหม่ๆ&nbsp;</br>
<br><input type="checkbox" name='s[]' value= "2.7มีประสบการณ์ในการพัฒนาและ/หรือ การประยุกต์ระบบงานบนเทคโนโลยีสารสนเทศและการสื่อสารที่ใช้งานได้จริง"
<?php if(in_array("2.7มีประสบการณ์ในการพัฒนาและ/หรือ การประยุกต์ระบบงานบนเทคโนโลยีสารสนเทศและการสื่อสารที่ใช้งานได้จริง", $checkbox_array)){ echo " checked=\"checked\""; } ?> />  2.7 มีประสบการณ์ในการพัฒนาและ/หรือ การประยุกต์ระบบงานบนเทคโนโลยีสารสนเทศและการสื่อสารที่ใช้งานได้จริง&nbsp;</br>
<br><input type="checkbox" name='s[]' value= "2.8สามารถบูรณาการความรู้ในสาขาวิชาเทคโนโลยีสารสนเทศและการสื่อสารกับความรู้ในศาสตร์อื่น ๆ ที่เกี่ยวข้อง"
<?php if(in_array("2.8สามารถบูรณาการความรู้ในสาขาวิชาเทคโนโลยีสารสนเทศและการสื่อสารกับความรู้ในศาสตร์อื่น ๆ ที่เกี่ยวข้อง", $checkbox_array)){ echo " checked=\"checked\""; } ?> />  2.8 สามารถบูรณาการความรู้ในสาขาวิชาเทคโนโลยีสารสนเทศและการสื่อสารกับความรู้ในศาสตร์อื่น ๆ ที่เกี่ยวข้อง&nbsp;</br>
</hr><br></br>

<h3>3.ทักษะทางปัญญา</h3>
<hr><br><input type="checkbox" name='s[]' value= "3.ทักษะทางปัญญา"
<?php if(in_array("3.ทักษะทางปัญญา", $checkbox_array)){ echo " checked=\"checked\""; } ?> />  3 ทักษะทางปัญญา&nbsp;</br>
<br><input type="checkbox" name='s[]' value= "3.1คิดอย่างมีวิจารณญาณและอย่างเป็นระบบ"
<?php if(in_array("3.1คิดอย่างมีวิจารณญาณและอย่างเป็นระบบ", $checkbox_array)){ echo " checked=\"checked\""; } ?> />  3.1 คิดอย่างมีวิจารณญาณและอย่างเป็นระบบ&nbsp;</br>
<br><input type="checkbox" name='s[]' value= "3.2สามารถสืบค้น ตีความ และประเมินสารสนเทศ เพื่อใช้ในการแก้ไขปัญหาอย่างสร้างสรรค์"
<?php if(in_array("3.2สามารถสืบค้น ตีความ และประเมินสารสนเทศ เพื่อใช้ในการแก้ไขปัญหาอย่างสร้างสรรค์", $checkbox_array)){ echo " checked=\"checked\""; } ?> />  3.2 สามารถสืบค้น ตีความ และประเมินสารสนเทศ เพื่อใช้ในการแก้ไขปัญหาอย่างสร้างสรรค์&nbsp;</br>
<br><input type="checkbox" name='s[]' value= "3.3สามารถรวบรวม ศึกษา วิเคราะห์ และสรุปประเด็นปัญหาและความต้องการ"
<?php if(in_array("3.3สามารถรวบรวม ศึกษา วิเคราะห์ และสรุปประเด็นปัญหาและความต้องการ", $checkbox_array)){ echo " checked=\"checked\""; } ?> / > 3.3 สามารถรวบรวม ศึกษา วิเคราะห์ และสรุปประเด็นปัญหาและความต้องการ&nbsp;</br>
<br><input type="checkbox" name='s[]' value= "3.4สามารถประยุกต์ความรู้และทักษะกับการแก้ไขปัญหาทางคอมพิวเตอร์ได้อย่างเหมาะสม"
<?php if(in_array("3.4สามารถประยุกต์ความรู้และทักษะกับการแก้ไขปัญหาทางคอมพิวเตอร์ได้อย่างเหมาะสม", $checkbox_array)){ echo " checked=\"checked\""; } ?> /> 3.4 สามารถประยุกต์ความรู้และทักษะกับการแก้ไขปัญหาทางคอมพิวเตอร์ได้อย่างเหมาะสม&nbsp;</br>
</hr>

    	
			


</hr>

<h3>4.ทักษะความสัมพันธ์ระหว่างบุคคลและรับผิดชอบ</h3>


 <input type="checkbox" name='s[]' value= "4.ทักษะความสัมพันธ์ระหว่างบุคคลและรับผิดชอบ"   
			<?php if(in_array("3.ทักษะทางปัญญา", $checkbox_array)){ echo " checked=\"checked\""; } ?> />3.ทักษะทางปัญญา &nbsp; &nbsp; &nbsp; &nbsp; 
				
        <input type="checkbox" name='s[]' value= "4.1สามารถสื่อสารกับกลุ่มคนหลากหลายและสามารถสนทนาทั้งภาษาไทยและภาษาต่างประเทศอย่างมีประสิทธิภาพ"   
			<?php if(in_array("4.1สามารถสื่อสารกับกลุ่มคนหลากหลายและสามารถสนทนาทั้งภาษาไทยและภาษาต่างประเทศอย่างมีประสิทธิภาพ", $checkbox_array)){ echo " checked=\"checked\""; } ?> />4.1สามารถสื่อสารกับกลุ่มคนหลากหลายและสามารถสนทนาทั้งภาษาไทยและภาษาต่างประเทศอย่างมีประสิทธิภาพ&nbsp; &nbsp; &nbsp; &nbsp; 
		
    		<input type="checkbox" name='s[]' value= "4.2สามารถให้ความช่วยเหลือและอำนวยความสะดวกแก่การแก้ปัญหาในสถานการณ์ต่างๆทั้งในกลุ่มทั้งในบทบาทของผู้นำ หรือในบทบาทของผู้ร่วมทีมทำงาน"   
			<?php if(in_array("4.2สามารถให้ความช่วยเหลือและอำนวยความสะดวกแก่การแก้ปัญหาในสถานการณ์ต่างๆทั้งในกลุ่มทั้งในบทบาทของผู้นำ หรือในบทบาทของผู้ร่วมทีมทำงาน", $checkbox_array)){ echo " checked=\"checked\""; } ?> />
      4.2สามารถให้ความช่วยเหลือและอำนวยความสะดวกแก่การแก้ปัญหาในสถานการณ์ต่างๆทั้งในกลุ่มทั้งในบทบาทของผู้นำ หรือในบทบาทของผู้ร่วมทีมทำงาน&nbsp; &nbsp; &nbsp; &nbsp; 
			
      <input type="checkbox" name='s[]' value= "4.3สามารถใช้ความรู้ในศาสตร์มาชี้นำสังคมในประเด็นที่เหมาะสม"   
			<?php if(in_array("4.3สามารถใช้ความรู้ในศาสตร์มาชี้นำสังคมในประเด็นที่เหมาะสม", $checkbox_array)){ echo " checked=\"checked\""; } ?> />4.3สามารถใช้ความรู้ในศาสตร์มาชี้นำสังคมในประเด็นที่เหมาะสม &nbsp; &nbsp; &nbsp; &nbsp; 
				
        <input type="checkbox" name='s[]' value= "4.4มีความรับผิดชอบในการกระทำของตนเองและรับผิดชอบงานในกลุ่ม"   
			<?php if(in_array("4.4มีความรับผิดชอบในการกระทำของตนเองและรับผิดชอบงานในกลุ่ม", $checkbox_array)){ echo " checked=\"checked\""; } ?> />4.4มีความรับผิดชอบในการกระทำของตนเองและรับผิดชอบงานในกลุ่ม&nbsp; &nbsp; &nbsp; &nbsp; 
		

 <input type="checkbox" name='s[]' value= "4.5สามารถเป็นผู้ริเริ่มแสดงประเด็นในการแก้ไขสถานการณ์ทั้งส่วนตัวและ ส่วนรวม พร้อมทั้งแสดงจุดยืนอย่างพอเหมาะทั้งของตนเองและกลุ่ม"   
			<?php if(in_array("4.5สามารถเป็นผู้ริเริ่มแสดงประเด็นในการแก้ไขสถานการณ์ทั้งส่วนตัวและ ส่วนรวม พร้อมทั้งแสดงจุดยืนอย่างพอเหมาะทั้งของตนเองและกลุ่ม", $checkbox_array)){ echo " checked=\"checked\""; } ?> />4.5สามารถเป็นผู้ริเริ่มแสดงประเด็นในการแก้ไขสถานการณ์ทั้งส่วนตัวและ ส่วนรวม พร้อมทั้งแสดงจุดยืนอย่างพอเหมาะทั้งของตนเองและกลุ่ม &nbsp; &nbsp; &nbsp; &nbsp; 
				
        <input type="checkbox" name='s[]' value= "4.6มีความรับผิดชอบการพัฒนาการเรียนรุ็ทั้งของตนเองและทางวิชาชีพอย่างต่อเนื่อง"   
			<?php if(in_array("4.6มีความรับผิดชอบการพัฒนาการเรียนรุ็ทั้งของตนเองและทางวิชาชีพอย่างต่อเนื่อง", $checkbox_array)){ echo " checked=\"checked\""; } ?> />4.6มีความรับผิดชอบการพัฒนาการเรียนรุ็ทั้งของตนเองและทางวิชาชีพอย่างต่อเนื่อง&nbsp; &nbsp; &nbsp; &nbsp; 
		


<h3>5.ทักษะวิเคราะห์เชิงตัวเลข การสื่อสาร และการใช้เทคโนโลยีสารสนเทศ</h3>
<hr><br><input type="checkbox" name='s[]' value= "5.ทักษะวิเคราะห์เชิงตัวเลข การสื่อสาร และการใช้เทคโนโลยีสารสนเทศ"
<?php if(in_array("5.ทักษะวิเคราะห์เชิงตัวเลข การสื่อสาร และการใช้เทคโนโลยีสารสนเทศ", $checkbox_array)){ echo " checked=\"checked\""; } ?> />  5 ทักษะวิเคราะห์เชิงตัวเลข การสื่อสาร และการใช้เทคโนโลยีสารสนเทศ&nbsp;</br>
<br><input type="checkbox" name='s[]' value= "5.1มีทักษะในการใช้เครื่องมือที่จำเป็นที่มีอยู่ในปัจจุบันต่อการทำงานที่เกี่ยวกับคมพิวเตอร์"
<?php if(in_array("5.1มีทักษะในการใช้เครื่องมือที่จำเป็นที่มีอยู่ในปัจจุบันต่อการทำงานที่เกี่ยวกับคมพิวเตอร์", $checkbox_array)){ echo " checked=\"checked\""; } ?> /> 5.1 มีทักษะในการใช้เครื่องมือที่จำเป็นที่มีอยู่ในปัจจุบันต่อการทำงานที่เกี่ยวกับคมพิวเตอร์&nbsp;</br>
<br><input type="checkbox" name='s[]' value= "5.2สามารถแนะนำประเด็นการแก้ไขปัญหา โดยใช้สารสนเทศทางคณิตศาสตร์หรือการแสดงสถิติประยุกต์ต่อปัญหาที่เกี่ยวข้องอย่างสร้างสรรค์"
<?php if(in_array("5.2สามารถแนะนำประเด็นการแก้ไขปัญหา โดยใช้สารสนเทศทางคณิตศาสตร์หรือการแสดงสถิติประยุกต์ต่อปัญหาที่เกี่ยวข้องอย่างสร้างสรรค์", $checkbox_array)){ echo " checked=\"checked\""; } ?> />  5.2 สามารถแนะนำประเด็นการแก้ไขปัญหา โดยใช้สารสนเทศทางคณิตศาสตร์หรือการแสดงสถิติประยุกต์ต่อปัญหาที่เกี่ยวข้องอย่างสร้างสรรค์&nbsp;</br>
<br><input type="checkbox" name='s[]' value= "5.3สามารถสื่อสารอย่างมีประสิทธิภาพทั้งปากเปล่าและการเขียนเลือกใช้รูปแบบของสื่อการนำเสนอได้อย่างเหมาะสม"
<?php if(in_array("5.3สามารถสื่อสารอย่างมีประสิทธิภาพทั้งปากเปล่าและการเขียนเลือกใช้รูปแบบของสื่อการนำเสนอได้อย่างเหมาะสม", $checkbox_array)){ echo " checked=\"checked\""; } ?> /> 5.3 สามารถสื่อสารอย่างมีประสิทธิภาพทั้งปากเปล่าและการเขียนเลือกใช้รูปแบบของสื่อการนำเสนอได้อย่างเหมาะสม&nbsp;</br>
<br><input type="checkbox" name='s[]' value= "5.4สามารถใช้สารสนเทศและเทคโนโลยีสารสนเทศและเทคโนโลยีสื่อสารอย่างเมหาะสม"
<?php if(in_array("5.4สามารถใช้สารสนเทศและเทคโนโลยีสารสนเทศและเทคโนโลยีสื่อสารอย่างเมหาะสม", $checkbox_array)){ echo " checked=\"checked\""; } ?> /> 5.4 สามารถใช้สารสนเทศและเทคโนโลยีสารสนเทศและเทคโนโลยีสื่อสารอย่างเมหาะสม&nbsp;</br>
</hr>
<br></br>
  

         <br><br>
         <input type="hidden" name="pro_id" value="<?php echo $rowpro['id']; ?>">
         <input name="submit" type="submit" id="submit"  class="btn btn-success" value="แก้ไขข้อมูล">
       </fieldset>
     </form>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   </body>
   </div>
</html>
