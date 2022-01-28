	<div class="row"><br/><br/>
		<div class="col-sm-5 col-md-offset-4">
		<div class="login-panel panel panel-default">
	    <div class="panel-heading" >
	        <h3 class="panel-title"><center>Registration</center></h3>
	     </div>
	    <div class="panel-body">
		<form name="login-form" action="validateLogin.php" method="POST">
		<fieldset>
			<div class="form-group" style="margin-top:10px; padding: 20px;">
				<div class="col-sm-2 col-md-offset-1">Name</div>
				<div class="col-sm-8">
					<input  type="text" name="n" class="form-control" required/></div>
			</div>
			<div class="form-group" style="margin-top:10px; padding: 20px;">
				<div class="col-sm-2 col-md-offset-1">Gender</div>
				<div class="col-sm-8">
					<input type="radio" name="gen" value="Male" /> Male &nbsp&nbsp&nbsp
					<input type="radio" name="gen" value="Female"/> Female
					</div>
			</div>							
			<div class="form-group" style="margin-top:10px; padding: 20px;">
				<div class="col-sm-2 col-md-offset-1">Birthdate</div>
				<div class="col-sm-8">
							<select style="width:100px;float:left" name="yy" class="form-control" required>
							<option value="">Year</option>
							<?php 
							for($i=1950;$i<=2016;$i++)
							{
							echo "<option>".$i."</option>";
							}					
							?>
							
							</select>
							
							<select style="width:100px;float:left" name="mm" class="form-control col-sm-2 col-sm-offset-1" required>
							<option value="">Month</option>
							<?php 
							for($i=1;$i<=12;$i++)
							{
							echo "<option>".$i."</option>";
							}					
							?>
							
							</select>
							
							
							<select style="width:100px;float:left" name="dd" class="form-control col-sm-2 col-sm-offset-1" required>
							<option value="">Date</option>
							<?php 
							for($i=1;$i<=31;$i++)
							{
							echo "<option>".$i."</option>";
							}					
							?>
							
							</select>
							
				</div>
			</div>
			<div class="form-group" style="margin-top:10px; padding: 20px;">
				<div class="col-sm-2 col-md-offset-1">Mobile Number</div>
				<div class="col-sm-8">
					<input type="text" name="mob" class="form-control" required/>
				</div>
			</div>
			<div class="form-group" style="margin-top:10px; padding: 20px;">
				<div class="col-sm-2 col-md-offset-1">Email</div>
				<div class="col-sm-8">
					<input type="email" name="e" class="form-control" required/>
				</div>
			</div>
			<div class="form-group" style="margin-top:10px; padding: 20px;">
				<div class="col-sm-2 col-md-offset-1">Password</div>
				<div class="col-sm-8">
					<input type="password" name="p" class="form-control" required/>
				</div>
			</div>
			<div class="form-group" style="margin-top:10px; padding: 20px;">
				<div class="col-sm-2 col-md-offset-1">About</div>
				<div class="col-sm-8">
					<textarea name="quest13" rows="5" cols="53" id="comments" style="font-family:sans-serif;font-size:1.2em;"></textarea>
				</div>
			</div>
			<br/>
			<div class="row" style="margin-top:0px; padding: 20px;">
					<div class="col-sm-10 col-md-offset-3"><br/>
							<input type="submit" value="Register" class="btn btn-info col-sm-5" name="save" style="background-color: black; color:pink;"/>
							<input type="reset" value="Reset" class="btn btn-info col-sm-5" style="background-color: black; color:pink;"/>
					</div>
			</div>
			</fieldset>
			</form>
			</div>
		</div>
	</div>
