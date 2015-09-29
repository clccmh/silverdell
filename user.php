<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo("Silver Dell - " . $_SESSION['first'])?> </title>
		<meta name="viewport" content="width=device-width, initial -scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<<link href="./css/custom.css" rel="stylesheet">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> <!-- load jquery via CDN -->
	</head>
	
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<a class="navbar-brand" href="user.php"><?php echo("Silver Dell - " . $_SESSION['first'])?></a>
				<div id="postform">
					<form class="navbar-form navbar-right" name="settings">
						<a type="button" class="btn btn-default" id="settingsbutton" href="settings.php"><span class="glyphicon glyphicon-cog"></span></a>
						<a type="button" class="btn btn-default" id="logoutButton" href="logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a>
						</button>
					</form>
					<form class="navbar-form navbar-right" name="search">
						<input type="text" class="form-control" placeholder="Search" name="post_box" required>
						<button type="submit" class="btn btn-default" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
					</form>
					
				</div>
			</div>
		</nav>
		<div class="row">
			<div class="col-md-3"> 
			<p><center>
				<br><h3><?php echo($_SESSION['first'] . " " . $_SESSION['last'])?></h3>
				<hr>
				<div id="about"></div>
			</center></p>
			</div>
			<div class="col-md-6">
				<br>
				<form class="" role="post" name="post">
						<center>
							<input type="text" class="form-control" placeholder="Post Something!" name="post_box" required>
						<button type="submit" class="btn btn-default" id="submit">Submit</button>
						</center>
				</form>
				<br><br>
				<div id="content"></div>
			</div>
			<div class="col-md-3"> </div>
		</div>
		
		<script src="user.js"></script> <!-- load our javascript file -->
	</body>