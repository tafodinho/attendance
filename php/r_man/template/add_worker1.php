<fieldset>
<legend>Add supervisors</legend>
	<form class="form-horizontal" role="form" action="" method="POST">
	 <div class="form-group">
	    <label for="inputEmail3" class="col-sm-4 control-label">First name</label>
	    <div class="col-sm-6">
	      <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter first name">
	    </div>
	  </div>
	 <div class="form-group">
	    <label for="inputEmail3" class="col-sm-4 control-label">Last name</label>
	    <div class="col-sm-6">
	      <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter last name">
	    </div>
	  </div>
	<div class="form-group">
		<label for="region" class="col-sm-4 control-label">Region</label>
		<div class="col-sm-6">
			<select class="form-control" name="region" id="region">
			<option selected>--select region--</option>
			<option value="NW">NW</option>
			<option value="SW">SW</option>
			<option value="center">Center</option>
			<option value="litoral">Litoral</option>
		</select>
		</div>
	</div>
	
	<div class="form-group">
	    <label for="phone" class="col-sm-4 control-label">Phone number</label>
	    <div class="col-sm-6">
	      <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone number">
	    </div>
	</div>
	<div class="form-group">
	    <label for="phone" class="col-sm-4 control-label">Home address</label>
	    <div class="col-sm-6">
	      <input type="text" class="form-control" name="home" id="home" placeholder="enter home address">
	    </div>
	</div>
	<div class="form-group">
	    <label for="email" class="col-sm-4 control-label">Email</label>
	    <div class="col-sm-6">
	      <input type="text" class="form-control" name="email" id="email" placeholder="enter email address">
	    </div>
	</div>
	<div class="form-group">
	    <label for="password" class="col-sm-4 control-label">Password</label>
	    <div class="col-sm-6">
	      <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
	    </div>
	  </div>
	<div class="form-group">
	    <label for="cpassword" class="col-sm-4 control-label">Confirm password</label>
	    <div class="col-sm-6">
	      <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="retype password">
	    </div>
	  </div>
	<div class="form-group form-inline">
	    <label for="dob" class="col-sm-4 control-label">Date of birth</label>
	    <div class="col-sm-6" name="dob">
	      	<select class="form-control ">
	      		<option value="1">january</option>
	      	</select>
	      	<select class="form-control">
	      		<option value="1">february</option>
	       	</select>
	      	<select class="form-control">
	      		<option value="1">march</option>
	      	</select>
	    </div>
	  </div>
	<div class="form-group">
		<label for="dob" class="col-sm-4 control-label">Gender</label>
	    <div class="col-sm-2" name="dob">
	      	<select class="form-control col-sm-2">
	      		<option>Male</option>
	      		<option value="1">Female</option>
	      	</select>
	    </div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label"></label>
		<div class="col-sm-6">
			<button class="btn btn-default btn-block btn-sup" id="submit" name="submit" >ADD</button>
		</div>
	</div>
</form>
</fieldset>
