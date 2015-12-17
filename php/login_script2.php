<?php
	include "../core/connect.php";

	$phone = $_POST['phone'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM supevisor_table WHERE phone = '$phone' AND password = '$password'";
	$result = $conn->query($sql);

	if($result->num_rows > 0)
	{
		$row = $result->fetch_array(MYSQLI_ASSOC);
		session_start();
		$_SESSION['login'] = "1";
		$_SESSION['name'] = $row['first_name']." ".$row['last_name'];
		$_SESSION['id'] = $row['sup_id'];
		header("location: p_sup/table.php");
	}
	else
	{
		echo "wrong username or password";
	}
?>