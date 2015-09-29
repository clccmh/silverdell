<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo("Silver Dell - " . $_SESSION['first'])?> </title>
		<meta name="viewport" content="width=device-width, initial -scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="./css/custom.css" rel="stylesheet">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> <!-- load jquery via CDN -->
	</head>
	
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<a class="navbar-brand" href="user.php"><?php echo("Silver Dell - " . $_SESSION['first'])?></a>
			</div>
		</nav>
		<div class="row">
			<div class="col-md-3"> </div>
			<div class="col-md-6"> 
				Email<input type="text" class="form-control" placeholder="Post Something!" name="post_box" required>
			</div>
			<div class="col-md-3"> </div>
		</div>
		
		<script src="newPost.js"></script> <!-- load our javascript file -->
	</body>