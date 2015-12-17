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
<script type="text/javascript" src="../../js/jquery.min.js"></script>
<script type="text/javascript" src="../../js/controle.js"></script>
<script type="text/javascript" src="../../js/try.js"></script>
<script type="text/javascript" src="../../js/bootstrap.min.css"></script>