<?php
include_once "includes/db_connect.php";
require "lib/password.php";

function Register($email, $user, $pass, $first, $last, $mysqli){
	session_start();
	if($_POST['captcha'] == $_SESSION['digit']){
		session_destroy();
	
		$hashed = password_hash($pass, PASSWORD_DEFAULT);
		if($hashed){
			
			$userchk = $mysqli->prepare('SELECT ID FROM users where User = ?');
			$userchk->bind_param("s", $user);
			$userchk->execute();
			$userchk->bind_result($result);
			$userchk->fetch();
			$userchk->close();
			if(!$result){
		
			$stmt = $mysqli->prepare('INSERT INTO users (Email,User, Pass, First, Last) VALUES (?, ?, ?, ?, ?)');
			$stmt->bind_param("sssss", $email, $user, $hashed, $first, $last);
			$stmt->execute();
			//$stmt->bind_result($result);
			//$stmt->fetch();
			//if(!$result){
				//echo"An error has occured";
			//}
			}else{
				die("User already exists");
				echo"User already exists";
			}
			
		}else{
			echo'An error in hashing has occured';
		}
	}else{
		 die("Captcha incorrect");
		 echo"cap fail";
	}
	
}

if(isset($_POST['submit'])){
	if(!empty($_POST['email']) AND !empty($_POST['user']) AND !empty($_POST['pass']) AND !empty($_POST['first']) AND !empty($_POST['last'])){
		Register($_POST['email'], $_POST['user'], $_POST['pass'], $_POST['first'], $_POST['last'], $mysqli);
		echo'
		<meta http-equiv="refresh" content="0; url=login.html" />
		If you are not redirected automatically, follow the <a href="login.html">link back to login</a>
		';
	} else{
		echo'
		<script type="text/javascript">alert("Please fill out all boxes"); </script>
		<meta http-equiv="refresh" content="0; url=register.html" />
		If you are not redirected automatically, follow the <a href="register.html">link back to register</a>
		';
	}
}
?>