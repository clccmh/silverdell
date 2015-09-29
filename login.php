<?php
include_once "includes/functions.php";
include_once "includes/db_connect.php";
require "lib/password.php";

//$ID = $_POST['user'];
//$Passwd = $_POST['pass'];
function SignIn($user, $pass, $mysqli){
	session_start();
	if(!empty($_POST['user'])){
		$hashstmt = $mysqli->prepare("SELECT Pass FROM users where user =?");
		$hashstmt->bind_param("s", $user);
		$hashstmt->execute();
		$hashstmt->bind_result($hash);
		$hashstmt->fetch();
		$hashstmt->close();
		
		if(password_verify($pass, $hash)){
			$stmt = $mysqli->prepare("SELECT First, Last, ID FROM users where user =?");
			$stmt->bind_param("s", $user);
			$stmt->execute();
			$stmt->bind_result($first, $last, $id);
			$stmt->fetch();
			$stmt->close();
			$_SESSION['id'] = $id;
			$_SESSION['user'] = $user;
			$_SESSION['first'] = $first;
			$_SESSION['last'] = $last;
			echo'<meta http-equiv="refresh" content="0; url=user.php" />';
		}else{
			echo'
			<script type="text/javascript">alert("Password incorrect"); </script>
			<meta http-equiv="refresh" content="0; url=login.html" />
			If you are not redirected automatically, follow the <a href="login.html">link back to login page</a>
			';
		}
	}
}

if(isset($_POST['submit'])){
	SignIn($_POST['user'], $_POST['pass'], $mysqli);
}

?>