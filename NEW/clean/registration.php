	<div class="row"><br/><br/>
		<div class="col-sm-5 col-md-offset-4">
		<div class="login-panel panel panel-default">
	    <div class="panel-heading" >
	        <h3 class="panel-title"><center>Registration</center></h3>
	     </div>
	    <div class="panel-body">
		<form name="reg-form" action="registersave.php" method="POST">
		<fieldset>

			<div class="form-group" style="margin-top:10px; padding: 20px;">
				<div class="col-sm-2 col-md-offset-1">Name <br/> <i>(FN LN)</i></div>
				<div class="col-sm-8">
					<input  type="text" name="name" class="form-control" required/></div>
			</div>
			<div class="form-group" style="margin-top:10px; padding: 20px;">
				<div class="col-sm-2 col-md-offset-1">Gender</div>
				<div class="col-sm-8">
					<input type="radio" name="gender" value="Male" /> Male &nbsp&nbsp&nbsp
					<input type="radio" name="gen" value="Female"/> Female
					</div>
			</div>							
			<div class="form-group" style="margin-top:10px; padding: 20px;">
				<div class="col-sm-2 col-md-offset-1">Birthdate</div>
				<div class="col-sm-8">
				<input  type="date" name="birthDate" class="form-control" required/></div>
				
			</div>
			<div class="form-group" style="margin-top:10px; padding: 20px;">
				<div class="col-sm-2 col-md-offset-1">Mobile Number</div>
				<div class="col-sm-8">
					<input type="text" name="mobile" class="form-control" required/>
				</div>
			</div>
			<div class="form-group" style="margin-top:10px; padding: 20px;">
				<div class="col-sm-2 col-md-offset-1">Email</div>
				<div class="col-sm-8">
					<input type="email" name="email" class="form-control" required/>
				</div>
			</div>
			<div class="form-group" style="margin-top:10px; padding: 20px;">
				<div class="col-sm-2 col-md-offset-1">Password</div>
				<div class="col-sm-8">
					<input type="password" name="password" class="form-control" required/>
				</div>
			</div>
			<div class="form-group" style="margin-top:10px; padding: 20px;">
				<div class="col-sm-2 col-md-offset-1">Role</div>
				<div class="col-sm-8">
					<select name="role" class="form-control" required>
						<option>Author</option>
						<option>Traveler</option>
						<option>Fact Checker</option>
						<option>News Writer</option>
						<option>Hobbyist</option>
						</select>
				</div>
			</div>
			<div class="form-group" style="margin-top:10px; padding: 20px;">
				<div class="col-sm-2 col-md-offset-1">About</div>
				<div class="col-sm-8">
					<textarea name="about" rows="5" cols="50" id="comments" style="font-family:sans-serif;font-size:1.2em;"></textarea>
				</div>
			</div>
			<br/>
			<div class="row" style="margin-top:0px; padding: 20px;">
					<div class="col-sm-6 col-md-offset-4"><br/>
							<input type="submit" value="Register" class="btn btn-info col-sm-6" name="save" style="background-color: black; color:pink;"/>
							<input type="reset" value="Reset" class="btn btn-info col-sm-6" style="background-color: black; color:pink;"/>
					</div>
			</div>
			</fieldset>
			</form>
			</div>
		</div>
	</div>
