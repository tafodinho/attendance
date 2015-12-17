<?php
	include "../../../core/connect.php";
	$region = $_POST['region'];

	 $sql = "SELECT branch FROM branch_office WHERE region='$region'";

	 $result = $conn->query($sql);
	 while($row=$result->fetch_array(MYSQLI_ASSOC))
	 {
			 echo "<option>".$row['branch']."</option>";
	 }
?>