<!DOCTYPE html>
<?php
	session_start();
	
	if(!isset($_SESSION['login']))
	{
		header("location: ../../index.php");
	}
?>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body>
	<div class="error container-fluid"></div>
	<div class="container-fluid">
		<div class="row row1">
			<img src="../../img/bird.gif" >
			<a href="../logout.php"><button class="btn btn-default logout" >Logout</button></a>
		</div>
		<div class="row row2">
			<div class="col-sm-4 col1 container-fluid">
				<ul class="list-group">
					<a href="#"><li class="list-group-item view-report"><span class="glyphicon glyphicon-folder-open"></span>  security officer's report</li></a>
					<a href="#"><li class="list-group-item view-sup-stat"><span class="glyphicon glyphicon-wrench"></span> View supervisors info</li></a>
					<a href="#"><li class="list-group-item add-worker1"><span class="glyphicon glyphicon-plus"></span> Add supervisors</li></a>
					<a href="#"><li class="list-group-item add-worker2"><span class="glyphicon glyphicon-plus"></span> Add security officers</li></a>
					<a href="#"><li class="list-group-item add-branch"><span class="glyphicon glyphicon-plus"></span> Add branch office</li></a>
					<a href="#"><li class="list-group-item pdf"><span class="glyphicon glyphicon-list-alt"></span> PDF</li></a>
				</ul>
			</div>
			<div class="col-lg-8 col2 ">
				<div class="table-responsive">
					<fieldset>
						<legend></legend>
						<p><b>WELCOME</b></p>
					</fieldset>
					 
				</div>
			</div>
		</div>
		<div class="navbar-bottom">
			<div class="row row3">
				
			</div>
		</div>
	</div>
	<script type="text/javascript" src="../../js/jquery.min.js"></script>
	<script type="text/javascript" src="../../js/controle.js"></script>
</body>
</html>