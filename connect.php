		<?php 
	$host = 'localhost'; 
	//$host = 'mysql.hostinger.in.th';
	$user = 'root';
	$pwd = '';
	$db = 'mokoall';
	
	$con = mysqli_connect($host,$user,$pwd,$db) or die('Unable to connect');
	mysqli_set_charset($con,"utf8");

	if(mysqli_connect_error($con))
	{
		echo "Failded to connect";
	}
//  echo "connection ready";
?>

