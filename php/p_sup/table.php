<!DOCTYPE html>
<?php
	session_start();
	include "../../core/connect.php";
	if(!isset($_SESSION['login']))
	{
		header("location: ../../index.php");
	}
?>
<html>
<head>
	<title></title>
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
			<div class="col-sm-4 col1">
				<ul class="list-group">
					<a href="#"><li class="list-group-item table1"><span class="glyphicon glyphicon-folder-open"></span>  Attendance</li></a>
					<a href="#"><li class="list-group-item rem-com"><span class="glyphicon glyphicon glyphicon-tasks"></span>  Remark on company</li></a>
					<a href="#"><li class="list-group-item incident"><span class="glyphicon glyphicon glyphicon-briefcase"></span> Incident on Site</li></a>
				</ul>
			</div>
			<div class="col-lg-8 col2">
				<fieldset>
					<legend>Attendance sheet</legend>
						<div class="row">
							<label for="region" class="col-sm-1 control-label" id="region1">Region</label>
							<div class="col-sm-4">
								<select class="form-control" name="region" id="region" value="<?php if(isset($_POST['submit'])) echo $_SESSION['region']; ?>">
									<option selected>--select region--</option>
									<option value="NW">North West</option>
									<option value="SW">South West</option>
									<option value="center">Center</option>
									<option value="litoral">Litoral</option>
								</select>
							</div>
							<label for="option" class="col-sm-1">SELECT BRANCH</label>
							<div class="col-sm-4">
			       				<select class="form-control branch" name="branch" id="here" value="">
			       					<option>--select branch--</option>
			       				</select><br>
							</div>
						</div>
						<div >
				            <div class="col-sm-1 h">ID</div>
				            <div class="col-sm-2 h">Firstname</div>
				            <div class="col-sm-2 h">Last Name</div>
				            <div class="col-sm-2 h">Status</div>
				            <div class="col-sm-3 h">Remark</div>
				            <div class="col-sm-2 h">Check</div>
				        </div>
				        <br>
				        <hr class="head">

				        
		      		<div class="table-main">
		      			
		      		</div>
				</fieldset>
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