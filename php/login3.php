<fieldset>
	<legend>Login as Patrol officer</legend>
	<div class="col-sm-3"></div>
	<form role="form" action="php/login_script2.php" method="POST" class="form-horizontal">
		<div class="form-group col-sm-6">
			<label for="phone" ><span class="glyphicon glyphicon-user"></span> Username/Phone:</label>
			<input type="text" id="phone" name="phone" class="form-control" required=""><br>
			<label for="password"><span class="glyphicon glyphicon-lock"></span> Password:</label>
			<input type="password" id="password" name="password" class="form-control" required=""><br>
			<button class="btn btn-default btn-block" name="">Login</button>
		</div>
	</form>
</fieldset>