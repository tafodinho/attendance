<?php 
	session_start();
	include "../../../core/connect.php";
	if(!isset($_SESSION['login']))
	{
		header("location: ../../index.php");
	}

	?>
		<table class="table">
			<fieldset>
				<legend>Report</legend>
			<thead>
			  <tr>
			    <th>ID</th>
			    <th>Firstname</th>
			    <th>Last Name</th>
			    <th>Status</th>
			    <th>Remark</th>
			    <th>Date</th>
			  </tr>
			</thead>
	<?php

	$sql = "SELECT first_name, last_name, sec_off_id FROM security_officer_table";
	$result = $conn->query($sql);
	$today = time();

	while($row=$result->fetch_array(MYSQLI_ASSOC))
	{
		$id = $row['sec_off_id'];
		$sql1 = "SELECT * FROM attendance_table WHERE sec_off_id = $id";
		$result1 = $conn->query($sql1);

		while($row1=$result1->fetch_array(MYSQLI_ASSOC))
		{
			$date = date("d/m/Y", $row1['time']);
			?>
				<tbody>
				  <tr>
				  	<td><?php echo $row['sec_off_id']; ?></td>
				    <td><?php echo $row['first_name']; ?></td>
				    <td><?php echo $row['last_name']; ?></td>
				    <td><?php if($row1['status']==1) echo "present"; else echo "absent"; ?></td>
				    <td><?php echo $row1['sup_remark']; ?></td>
				    <td><?php echo $date ?></td>
				  </tr>
				</tbody>
			<?php
		}
		
	}
	
?>
</fieldset>
</table>
