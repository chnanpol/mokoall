<?php
    require 'connect.php';

?>
<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <title>เพิ่มวิชา</title>

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
       <h2>เพิ่มวิชา</h2>  
<form action="add_mokoall2.php" method="post" enctype="multipart/form-data" id="form1">
<fieldset>

   
   
   <label>ชื่อวิชา </label><input name="pro_name" type="vachar" id="pro_name" size="40">
         <label>รหัสวิชา</label><input name="pro_price" type="decimal" id="pro_price" size="60" > 
          
     
   <label>ปีการศึกษา </label>
   <input name="j_semester" type="number" id="j_semester" size="40">
    
  
  <label>วันที่เปิดภาคเรียน </label>
           <input name="op_dade" type="date" id="op_tade" size="40">
          
          
          <br><br>
		<br>
	  <br><br><br><br>




 <h5>คุณธรรมจริยธรรม</h5>

<hr><br><input type="checkbox" name='s[]' value= "1.คุณธรรมจริยธรรม" >  คุณธรรมจริยธรรม&nbsp;  <br>
<input type="checkbox" name='s[]' value= "1.1ตระหนักในคุณค่าและคุณธรรม จริยธรรม เสียสละ และซื่อสัตย์ สุจริต" >  ตระหนักในคุณค่าและคุณธรรม จริยธรรม เสียสละ และซื่อสัตย์ สุจริต&nbsp; <br>
<input type="checkbox" name='s[]' value= "1.2มีวินัย ตรงต่อเวลา และความรับผิดชอบต่อตนเองและสังคม" >  มีวินัย ตรงต่อเวลา และความรับผิดชอบต่อตนเองและสังคม&nbsp; <br>
<input type="checkbox" name='s[]' value= "1.3มีภาวะความเป็นผู้นำและผู้ตาม สามารถทำงานเป็นทีมและสามารถแก้ไขข้อขัดแย้งและลำดับความสำคัญ" >  
มีภาวะความเป็นผู้นำและผู้ตาม สามารถทำงานเป็นทีมและสามารถแก้ไขข้อขัดแย้งและลำดับความสำคัญ&nbsp; <br>
<input type="checkbox" name='s[]' value= "1.4เคารพสิทธิและรับฟังความคิดเห็นของผู้อื่น รวมทั้งเคารพในคุณค่าและศักดิ์ศรีของความเป็นมนุษย์" >  
เคารพสิทธิและรับฟังความคิดเห็นของผู้อื่น รวมทั้งเคารพในคุณค่าและศักดิ์ศรีของความเป็นมนุษย์&nbsp; <br>
<input type="checkbox" name='s[]' value= "1.5เคารพกฎระเบียบและข้อบังคับต่างๆ ขององค์กรและสังคม" >  เคารพกฎระเบียบและข้อบังคับต่างๆ ขององค์กรและสังคม&nbsp; <br>
<input type="checkbox" name='s[]' value= "1.6สามารถวิเคราะห์ผลกระทบจากการใช้คอมพิวเตอร์ต่อบุคคล องค์กรและสังคม" >  สามารถวิเคราะห์ผลกระทบจากการใช้คอมพิวเตอร์ต่อบุคคล องค์กรและสังคม&nbsp; <br>
<input type="checkbox" name='s[]' value= "1.7มีจรรยาบรรณทางวิชาการและวิชาชีพ" >  มีจรรยาบรรณทางวิชาการและวิชาชีพ&nbsp; <br>
</hr></br>
 
 <h5>ความรู้</h5>
<hr><br><input type="checkbox" name='s[]' value= "2.ความรู้" >  ความรู้&nbsp; <br>
<input type="checkbox" name='s[]' value= "มีความรู้และความเข้าใจเกี่ยวกับหลักการและทฤษฎีที่สำคัญในเนื้อหาสาขาวิชาเทคโนโลยีสารสนเทศ" >  มีความรู้และความเข้าใจเกี่ยวกับหลักการและทฤษฎีที่สำคัญในเนื้อหาสาขาวิชาเทคโนโลยีสารสนเทศ&nbsp; <br>
<input type="checkbox" name='s[]' value= "สามารถวิเคราะห์ปัญหา เข้าใจและอธิบายความต้องการทาง computer รวมทั้งประยุกต์ความรู้ ทักษะ และการใช้เครื่องมือที่เหมาะสมกัยการแก้ไขปัญหา" >  สามารถวิเคราะห์ปัญหา เข้าใจและอธิบายความต้องการทาง computer รวมทั้งประยุกต์ความรู้ ทักษะ และการใช้เครื่องมือที่เหมาะสมกัยการแก้ไขปัญหา&nbsp; <br>
<input type="checkbox" name='s[]' value= "2.3สามารถวิเคราะห์ ออกแบบ ติดตั้ง ปรับปรุง และ/หรือประเมินระบบองค์ประกอบต่างๆ ของระบบงานบนเทคโนโลยีสารสนเทศให้ตรงตามข้อกำหนด" >  สามารถวิเคราะห์ ออกแบบ ติดตั้ง ปรับปรุง และ/หรือประเมินระบบองค์ประกอบต่างๆ ของระบบงานบนเทคโนโลยีสารสนเทศให้ตรงตามข้อกำหนด&nbsp; <br>
<input type="checkbox" name='s[]' value= "2.4สามารถติดตามความก้าวหน้าและวิวัฒนาการคอมพิวเตอร์รวมทั้งการนำไปประยุกต์" >  สามารถติดตามความก้าวหน้าและวิวัฒนาการคอมพิวเตอร์รวมทั้งการนำไปประยุกต์&nbsp; <br>
<input type="checkbox" name='s[]' value= "2.5รู้ เข้าใจและสนใจพัฒนาความรู้ ความชำนาญทางคอมพิวเตอร์" >  รู้ เข้าใจและสนใจพัฒนาความรู้ ความชำนาญทางคอมพิวเตอร์&nbsp; <br>
<input type="checkbox" name='s[]' value= "2.6มีความรู้ในแนวกว้างของสาขาวิชาเทคโนโลยีสารสนเทศเล็งให้เห็นการเปลี่ยนแปลงและเข้าใจผลกระทบของ Technologyใหม่ๆ" > มีความรู้ในแนวกว้างของสาขาวิชาเทคโนโลยีสารสนเทศเล็งให้เห็นการเปลี่ยนแปลงและเข้าใจผลกระทบของ Technologyใหม่ๆ&nbsp; <br>
<input type="checkbox" name='s[]' value= "2.7มีประสบการณ์ในการพัฒนาและ/หรือ การประยุกต์ระบบงานบนเทคโนโลยีสารสนเทศและการสื่อสารที่ใช้งานได้จริง" >  มีประสบการณ์ในการพัฒนาและ/หรือ การประยุกต์ระบบงานบนเทคโนโลยีสารสนเทศและการสื่อสารที่ใช้งานได้จริง&nbsp; <br>
<input type="checkbox" name='s[]' value= "2.8สามารถบูรณาการความรู้ในสาขาวิชาเทคโนโลยีสารสนเทศและการสื่อสารกับความรู้ในศาสตร์อื่น ๆ ที่เกี่ยวข้อง" >  สามารถบูรณาการความรู้ในสาขาวิชาเทคโนโลยีสารสนเทศและการสื่อสารกับความรู้ในศาสตร์อื่น ๆ ที่เกี่ยวข้อง&nbsp; <br>
</hr></br>
 
 <h5>ทักษะทางปัญญา</h5>
<hr><br><input type="checkbox" name='s[]' value= "3.ทักษะทางปัญญา" >  ทักษะทางปัญญา&nbsp; <br>
<input type="checkbox" name='s[]' value= "3.1คิดอย่างมีวิจารณญาณและอย่างเป็นระบบ" >  คิดอย่างมีวิจารณญาณและอย่างเป็นระบบ&nbsp; <br>
<input type="checkbox" name='s[]' value= "3.2สามารถสืบค้น ตีความ และประเมินสารสนเทศ เพื่อใช้ในการแก้ไขปัญหาอย่างสร้างสรรค์" >  สามารถสืบค้น ตีความ และประเมินสารสนเทศ เพื่อใช้ในการแก้ไขปัญหาอย่างสร้างสรรค์&nbsp; <br>
<input type="checkbox" name='s[]' value= "3.3สามารถรวบรวม ศึกษา วิเคราะห์ และสรุปประเด็นปัญหาและความต้องการ" > สามารถรวบรวม ศึกษา วิเคราะห์ และสรุปประเด็นปัญหาและความต้องการ&nbsp; <br>
<input type="checkbox" name='s[]' value= "3.4สามารถประยุกต์ความรู้และทักษะกับการแก้ไขปัญหาทางคอมพิวเตอร์ได้อย่างเหมาะสม" > สามารถประยุกต์ความรู้และทักษะกับการแก้ไขปัญหาทางคอมพิวเตอร์ได้อย่างเหมาะสม&nbsp; <br>
</hr></br>
 
 <h5>ทักษะความสัมพันธ์ระหว่างบุคคลและรับผิดชอบ</h5>
<hr><br><input type="checkbox" name='s[]' value= "4.ทักษะความสัมพันธ์ระหว่างบุคคลและรับผิดชอบ" >  ทักษะความสัมพันธ์ระหว่างบุคคลและรับผิดชอบ&nbsp; <br>
<input type="checkbox" name='s[]' value= "4.1สามารถสื่อสารกับกลุ่มคนหลากหลายและสามารถสนทนาทั้งภาษาไทยและภาษาต่างประเทศอย่างมีประสิทธิภาพ" > สามารถสื่อสารกับกลุ่มคนหลากหลายและสามารถสนทนาทั้งภาษาไทยและภาษาต่างประเทศอย่างมีประสิทธิภาพ&nbsp; <br>
<input type="checkbox" name='s[]' value= "4.2สามารถให้ความช่วยเหลือและอำนวยความสะดวกแก่การแก้ปัญหาในสถานการณ์ต่างๆทั้งในกลุ่มทั้งในบทบาทของผู้นำ หรือในบทบาทของผู้ร่วมทีมทำงาน" >  สามารถให้ความช่วยเหลือและอำนวยความสะดวกแก่การแก้ปัญหาในสถานการณ์ต่างๆทั้งในกลุ่มทั้งในบทบาทของผู้นำ หรือในบทบาทของผู้ร่วมทีมทำงาน&nbsp; <br>
<input type="checkbox" name='s[]' value= "4.3สามารถใช้ความรู้ในศาสตร์มาชี้นำสังคมในประเด็นที่เหมาะสม" > สามารถใช้ความรู้ในศาสตร์มาชี้นำสังคมในประเด็นที่เหมาะสม&nbsp; <br>
<input type="checkbox" name='s[]' value= "4.4มีความรับผิดชอบในการกระทำของตนเองและรับผิดชอบงานในกลุ่ม" > มีความรับผิดชอบในการกระทำของตนเองและรับผิดชอบงานในกลุ่ม&nbsp; <br>
<input type="checkbox" name='s[]' value= "4.5สามารถเป็นผู้ริเริ่มแสดงประเด็นในการแก้ไขสถานการณ์ทั้งส่วนตัวและ ส่วนรวม พร้อมทั้งแสดงจุดยืนอย่างพอเหมาะทั้งของตนเองและกลุ่ม" >  สามารถเป็นผู้ริเริ่มแสดงประเด็นในการแก้ไขสถานการณ์ทั้งส่วนตัวและส่วนรวม พร้อมทั้งแสดงจุดยืนอย่างพอเหมาะทั้งของตนเองและกลุ่ม&nbsp; <br>
<input type="checkbox" name='s[]' value= "4.6มีความรับผิดชอบการพัฒนาการเรียนรุ็ทั้งของตนเองและทางวิชาชีพอย่างต่อเนื่อง" >  มีความรับผิดชอบการพัฒนาการเรียนรุ็ทั้งของตนเองและทางวิชาชีพอย่างต่อเนื่อง&nbsp; <br>
</hr></br>
 
 <h5>ทักษะวิเคราะห์เชิงตัวเลข การสื่อสาร และการใช้เทคโนโลยีสารสนเทศ</h5>
<hr><br><input type="checkbox" name='s[]' value= "5.ทักษะวิเคราะห์เชิงตัวเลข การสื่อสาร และการใช้เทคโนโลยีสารสนเทศ" >  ทักษะวิเคราะห์เชิงตัวเลข การสื่อสาร และการใช้เทคโนโลยีสารสนเทศ&nbsp; <br>
<input type="checkbox" name='s[]' value= "5.1มีทักษะในการใช้เครื่องมือที่จำเป็นที่มีอยู่ในปัจจุบันต่อการทำงานที่เกี่ยวกับคมพิวเตอร์" > มีทักษะในการใช้เครื่องมือที่จำเป็นที่มีอยู่ในปัจจุบันต่อการทำงานที่เกี่ยวกับคมพิวเตอร์&nbsp; <br>
<input type="checkbox" name='s[]' value= "5.2สามารถแนะนำประเด็นการแก้ไขปัญหา โดยใช้สารสนเทศทางคณิตศาสตร์หรือการแสดงสถิติประยุกต์ต่อปัญหาที่เกี่ยวข้องอย่างสร้างสรรค์" >  สามารถแนะนำประเด็นการแก้ไขปัญหา โดยใช้สารสนเทศทางคณิตศาสตร์หรือการแสดงสถิติประยุกต์ต่อปัญหาที่เกี่ยวข้องอย่างสร้างสรรค์&nbsp; <br>
<input type="checkbox" name='s[]' value= "5.3สามารถสื่อสารอย่างมีประสิทธิภาพทั้งปากเปล่าและการเขียนเลือกใช้รูปแบบของสื่อการนำเสนอได้อย่างเหมาะสม" > สามารถสื่อสารอย่างมีประสิทธิภาพทั้งปากเปล่าและการเขียนเลือกใช้รูปแบบของสื่อการนำเสนอได้อย่างเหมาะสม&nbsp; <br>
<input type="checkbox" name='s[]' value= "5.4สามารถใช้สารสนเทศและเทคโนโลยีสารสนเทศและเทคโนโลยีสื่อสารอย่างเมหาะสม" > สามารถใช้สารสนเทศและเทคโนโลยีสารสนเทศและเทคโนโลยีสื่อสารอย่างเมหาะสม&nbsp; <br>
</hr></br>

 <br><br><br><br>

    
    <!--<label>คำอธิบายสินค้า</label>
    <textarea name="comment" type="vachar" cols="50" rows="10" style="margin: 0px; height: 100px; width: 200px;"id='pro_description'></textarea>-->

  
    <input name="submit" type="submit" id="submit"   class="btn btn-success" >
  </fieldset>
</form>
   </body>
 </div>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 </html>
