<?php
	include "../../../core/connect.php";
?>
<fieldset>
	<legend>Add security officers</legend>
		<form class="form-horizontal" role="form" action="" method="POST">
		 <div class="form-group">
		    <label for="fname" class="col-sm-4 control-label">First name</label>
		    <div class="col-sm-6">
		      <input type="text" class="form-control" id="fname" placeholder="Enter first name">
		    </div>
		  </div>
		 <div class="form-group">
		    <label for="lname" class="col-sm-4 control-label">Last name</label>
		    <div class="col-sm-6">
		      <input type="text" class="form-control" id="lname" placeholder="Enter last name">
		    </div>
		  </div>
		<div class="form-group">
			<label for="region" class="col-sm-4 control-label">egion</label>
			<div class="col-sm-6">
				<select class="form-control region" id="region" name="region">
					<option selected>--select region--</option>
					<option value="NW">NW</option>
					<option value="SW">SW</option>
					<option value="center">Center</option>
					<option value="litoral">Litoral</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="branch" class="col-sm-4 control-label">Branch</label>
			<div class="col-sm-6">
				<select class="form-control branch" id="branch" name="branch">
					<option></option>
				</select>
			</div>
		</div>
		<div class="form-group">
		    <label for="phone" class="col-sm-4 control-label">Phone number</label>
		    <div class="col-sm-6">
		      <input type="text" class="form-control" id="phone" name="phone" placeholder="enter phone number">
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
		      <input type="email" class="form-control" id="email" name="emaol" placeholder="enter email address">
		    </div>
		</div>
		<div class="form-group form-inline">
		    <label for="dob" class="col-sm-4 control-label">Date of birth</label>
		    <div class="col-sm-6" name="dob">
		      	<select class="form-control ">
		      		<option value="1">1</option>
		      	</select>
		      	<select class="form-control">
		      		<option value="1">january</option>
		       	</select>
		      	<select class="form-control">
		      		<option value="1">2004</option>
		      	</select>
		    </div>
		  </div>
		<div class="form-group">
			<label for="gender" class="col-sm-4 control-label">Gender</label>
		    <div class="col-sm-2" name="dob">
		      	<select class="form-control col-sm-2" name="gender" id="gender">
		      		<option>Male</option>
		      		<option value="1">Femle</option>
		      	</select>
		    </div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label"></label>
			<div class="col-sm-6">
				<button class="btn btn-default btn-block btn-work" name="submit" >ADD</button>
			</div>
		</div>
	</form>
</fieldset>
<script type="text/javascript" src="../../js/jquery.min.js"></script>
<script type="text/javascript" src="../../js/controle.js"></script>