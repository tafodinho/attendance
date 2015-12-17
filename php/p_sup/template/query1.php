<?php
	session_start();
	include "../../../core/connect.php";

	$sid = $_SESSION['id'];
	$id = $_POST['soid'];
	$status = $_POST['status'];
	$data = $_POST['data'];
	$time = time();

	echo $id." status= ".$status.$data." time=".$time;
	$sql = "INSERT INTO attendance_table (status, sup_remark, sup_id, sec_off_id, time)
			VALUES ('$status', '$data', '$sid', '$id', '$time')";

	$result = $conn->query($sql);
	if($result === TRUE)
	{
		echo "success";
		header("location: ../table.php");
	}
	else
	{
		echo "failure";
	}
?>