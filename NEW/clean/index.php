<?php
session_start();
require('db_connection.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Blogger Site</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:#ef5285">
        <div class="container">
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html" style="color:#FFFFFF" >Blogger Site Name Here</a>	
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right"> 
					<li style="color:#FFFFFF"><a style="color:#FFFFFF" href="index.php"><i class="fa fa-home fa-fw"></i>Home</a>
                    </li>
					<li><a style="color:#FFFFFF" href="index.php?info=registration"><i class="fa fa-copy fa-fw"></i>Registration</a>
					</li>
                    <li><a style="color:#FFFFFF" href="index.php?info=login"><i class="fa fa-sign-in fa-fw"></i>Sign In</a>
					</li>	                 
                </ul>
            </div>
        </div>
    </nav>

<?php 
					@$info=$_GET['info'];
					if($info!="")
					{		 
						if($info=="login")
						 {
						 include('login.php');
						 }
						else if($info=="registration")
						 {
						 	include('registration.php');
						 }
					}
					else
					{
				?>

	<div class="container">
        <div class="row">
            <div class="col-lg-12">	
			<div style="margin-top:60px;margin-bottom:80px">
				<h2>Put Viewers content here or what ever your plans are</h2>
				
				<?php } ?>
            </div>
            </div>
        </div>
    </div>

    <!-- jQuery,, this is for dropdown -->
    <script src="css/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap.min.js"></script>
</body>

</html>
