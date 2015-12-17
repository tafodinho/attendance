<fieldset>
<legend>Add Branch Office</legend>
	<form class="form-horizontal" role="form" action="" method="POST">
	 
	 <div class="form-group">
	    <label for="inputEmail3" class="col-sm-4 control-label">Branch</label>
	    <div class="col-sm-6">
	      <input type="text" class="form-control" id="branch" placeholder="Enter last name">
	    </div>
	  </div>
	<div class="form-group">
		<label for="region" class="col-sm-4 control-label">Region</label>
		<div class="col-sm-6">
			<select class="form-control" id="region">
			<option selected>--select region--</option>
			<option value="NW">NW</option>
			<option value="SW">SW</option>
			<option value="center">Center</option>
			<option value="litoral">Litoral</option>
		</select>
		</div>
	</div>
	
	<div class="form-group">
	    <label for="phone" class="col-sm-4 control-label">Adress</label>
	    <div class="col-sm-6">
	      <input type="text" class="form-control" name="phone" id="address" placeholder="enter phone number">
	    </div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-4 control-label"></label>
		<div class="col-sm-6">
			<button class="btn btn-default btn-block btn-branch" id="submit" name="submit" >ADD</button>
		</div>
	</div>
</form>
</fieldset>

