<?php
	include "../../../core/connect.php";

	
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$region = $_POST['region'];
		$branch = $_POST['branch'];
		$phone = $_POST['phone'];
		$home = $_POST['home'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];

		$sql = "SELECT * FROM supevisor_table WHERE phone='$phone'";
		$result = $conn->query($sql);
		if($result->num_rows > 0)
		{
			echo("worker already exist") ;
		}
		else
		{
			$sql = "INSERT INTO security_officer_table (first_name, last_name, phone, home_address, email, branch_office, base_region, gender) 
					VALUES('$fname', '$lname', '$phone', '$home', '$email', '$branch',  '$region', '$gender');";
			$result = $conn->query($sql);
			if($result === TRUE)
			{
				echo "worker successfully added";
			}
			else
			{
				echo("error inserting data into table");
			}
		}    
		

?>