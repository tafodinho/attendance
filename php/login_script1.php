<?php
	include "../core/connect.php";
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql="SELECT * FROM regional_managers WHERE username='$username' AND password='$password'";
	$result = $conn->query($sql);
	if($result->num_rows > 0)
	{
		$_SESSION['login'] = "1";
		header("location: r_man/r_manager1.php");
	}
	else
	{
		$_SESSION['error'] = "Wrong username or password";
		echo "error";
	}
?>