<?php
//1. เชื่อมต่อ database: 
include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
 
//2. query ข้อมูลจากตาราง: 
$query = "SELECT * FROM subject	" or die("Error:" . mysqli_error()); 
//3. execute the query. 
$result = mysqli_query($con, $query); 
//4 . แสดงข้อมูลที่ query ออกมา: 
 
//ใช้ตารางในการจัดข้อมูล
echo "<table border='1' align='center' width='500'>";
//หัวข้อตาราง
echo "<tr align='center' bgcolor='#CCCCCC'><td>รหัส</td><td>Uername</td><td>ชื่อ</td><td>นามสกุล</td><td>อีเมล์</td><td>แก้ไข</td><td>ลบ</td></tr>";
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td>" .$row["subID"] .  "</td> "; 
  echo "<td>" .$row["subName"] .  "</td> ";  
 
  //แก้ไขข้อมูลส่่ง member_id ที่จะแก้ไขไปที่ฟอร์ม
  echo "<td><a href='add_mokoall2.php?subID=$row[0]'>edit</a></td> ";
  
  //ลบข้อมูล
  echo "<td><a href='UserDelete.php?subID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\">del</a></td> ";
  echo "</tr>";
}
echo "</table>";
//5. close connection
mysqli_close($con);
?>