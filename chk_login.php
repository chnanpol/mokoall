<?php 
session_start();
 if(isset($_REQUEST["user"])){
				//connection
                  include("connect.php");
				//รับค่า user & password
                  $Username = $_REQUEST['user'];
                  $Password = ($_REQUEST['pass']);
				//query 
                  $sql="SELECT * FROM tbl_teacher Where c_user='".$Username."' and c_pass='".$Password."' ";

                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);
						$_SESSION["user"] = $row["c_user"];
                    
                      $_SESSION["login_status"] = $row["login_status"];

                      if($_SESSION["login_status"]=="0"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                          Header("Location: mainpage.php");

                      }

                      if ($_SESSION["login_status"]=="1"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                          Header("Location: Admin.php");

                      }

                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{


             Header("Location: form.php"); //user & password incorrect back to login again

        }
?>