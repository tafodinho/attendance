<?php
	include "../../../core/connect.php";

	$branch = $_POST['branch'];
	$region = $_POST['region'];
	$address = $_POST['address'];

	$sql = "INSERT INTO branch_office (branch, region, address)
			VALUES ('$branch', '$region', '$address'); ";
	$result = $conn->query($sql);
	if($result === TRUE)
	{
		echo "success";
	}
	else
	{
		echo "failure";
	}
?>