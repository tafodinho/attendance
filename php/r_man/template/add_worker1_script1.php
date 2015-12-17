<?php
	include "../../../core/connect.php";

	
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$region = $_POST['region'];
		$phone = $_POST['phone'];
		$home = $_POST['home'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$cpassword = md5($_POST['cpassword']);
		$gender = $_POST['gender'];

		$sql = "SELECT * FROM supevisor_table WHERE phone='$phone'";
		$result = $conn->query($sql);
		if($result->num_rows > 0)
		{
			echo("user already exist") ;
		}
		else
		{
			if($cpassword == $password)
			{
				$sql = "INSERT INTO supevisor_table (first_name, last_name, phone, home_address, email, password, base_region, gender) 
						VALUES('$fname', '$lname', '$phone', '$home', '$email', '$password', '$region', '$gender');";
				$result = $conn->query($sql);
				if($result === TRUE)
				{
					echo "supervisor successfully added";
					$error = "added success";
				}
				else
				{
					$error = "bfkajsdfjsd";
					echo("bad man");
				}
			}
			else
			{
				$error = "password mismatch";
				echo("Password missmatch");
			}
		}
		

?>