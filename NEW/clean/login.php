<head>
	<meta charset="utf-8">
	<title>Log In</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/animate.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<br/><br/>
<div clas="container">
		<div class="row">
	            <div class="col-md-4 col-md-offset-4">
	                <div class="login-panel panel panel-default">
	                    <div class="panel-heading" >
	                        <h3 class="panel-title"><center>Login</center></h3>
	                    </div>
	                    <div class="panel-body">
						<form name="login-form" action="validateLogin.php" method="POST">
							<fieldset>
									<div class="form-group" style="margin-top:10px; padding: 20px;">
										<div class="col-sm-4 col-md-offset-1">Enter Your Username</div>
										<div class="col-sm-6">
										<input type="username" name="username" class="form-control"/></div>
									</div>
									
									<div class="form-group" style="margin-top:10px; padding: 20px;">
										<div class="col-sm-4 col-md-offset-1">Enter Your Password</div>
										<div class="col-sm-6">
										<input type="password" name="password" class="form-control"/></div>
									</div>
									<div class="row" style="margin-top:10px; padding: 20px;">
										<div class="col-sm-10 col-md-offset-1">
										<input type="submit" value="Login" id="submit" name="login_old_member" class="btn btn-info col-sm-12" style="background-color: black; color:pink;"/>
										</div>
									</div>
								</fieldset>
						</form>
					</div>
				</div>
		</div>
	</div>