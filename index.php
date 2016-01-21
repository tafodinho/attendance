<!DOCTYPE html>
<html>
<head>
	<title>Attendance</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="error container-fluid"></div>
	<div class="container-fluid">
		<div class="row row1">
			<img src="img/bird.gif" width="100px">
		</div>
		<div class="row row2">
			<div class="col-sm-4 col1">
				<ul class="list-group">
					<a href="#"><li class="list-group-item login2"><span class="glyphicon glyphicon-user"></span> Manager</li></a>
					<a href="#"><li class="list-group-item login3"><span class="glyphicon glyphicon-user"></span> Patrol Officer</li></a>
				</ul>
			</div>
			<div class="col-md-8 col2">
				<fieldset>
					<legend>Regional manager</legend>
					<div class="col-sm-3"></div>
					<form role="form" action="php/login_script1.php" method="POST" class="form-horizontal">
						<div class="form-group col-sm-6">
							<label for="username"><span class="glyphicon glyphicon-user"></span> Username:</label>
							<input type="text" name="username" id="username" class="form-control" required=""><br>
							<label for="password"><span class="glyphicon glyphicon-lock"></span> Password:</label>
							<input type="password" name="password" id="password" class="form-control" required=""><br>
							<button class="btn btn-default btn-block login" name="">Login</button>
						</div>
					</form>
				</fieldset>
			</div>
		</div>

		<div class="navbar-fixed-bottom">
			<div class="row row3">
				
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/controle.js"></script>
	<script type="text/javascript" src="js/try.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.css"></script>
</body>
</html>