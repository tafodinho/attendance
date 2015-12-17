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
				    <th>First Name</th>
				    <th>Last Name</th>
				    <th>Contact</th>
				    <th>Email</th>
				    <th>Region</th>
				  </tr>
				</thead>

		<?php
		$sql = "SELECT * FROM supevisor_table";
		$result = $conn->query($sql);

		while($row=$result->fetch_array(MYSQLI_ASSOC))
		{
			?>
				<tbody>
				  <tr>
				    <td><?php echo $row['sup_id']; ?></td>
				    <td><?php echo $row['first_name']; ?></td>
				    <td><?php echo $row['last_name']; ?></td>
				    <td><?php echo $row['phone']; ?></td>
				    <td><?php echo $row['email']; ?></td>
				    <td><?php echo $row['base_region']; ?></td>
				    <td><a><span class="glyphicon glyphicon-wrench"></span></a></td>
				  </tr>
				</tbody>
			<?php
		}
?>
</fieldset>
</table>