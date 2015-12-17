<?php
	$error = "";
	$db_host = "localhost";
	$db_username = "root";
	$db_password = "";
	$database = "attendance";
	
	$conn = new mysqli($db_host, $db_username, $db_password, $database);
	if($conn->connect_error)
	{
		echo "database connect error";
	}
?>
