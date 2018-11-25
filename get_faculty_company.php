	<?php

		require 'connect.php';
		$query = "SELECT * FROM tbl_fac GROUP BY fac_name ORDER BY fac_number";
		$exe_query = mysqli_query($con,$query);
		$i = 0;
		while ($row = mysqli_fetch_array($exe_query,MYSQLI_ASSOC)) {
			$i++;
			echo "<option value='".$row['fac_name']."'>";
			echo $row['fac_name'];
			echo "</option>";
		}
		
	?>