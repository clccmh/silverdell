<?php
include_once "db_connect.php";

session_start();
function postIt($postbox, $mysqli){
		$id = $_SESSION[id];
		$user = $_SESSION[user];
		echo('<script>alert("postbox:" . ' . var_dump($postbox) . ')</script>');
		if($stmt = $mysqli->prepare('INSERT INTO txt_posts (user_id, user, text) VALUES (?, ?, ?)')){
			$stmt->bind_param("sss", $id, $user, $postbox);
			$stmt->execute();
		}else{
			echo($mysqli->error);
		//$stmt->bind_result($result);
		//$stmt->fetch();
		//if(!$result){
			//echo"An error has occured";
		//}
		}
		
}
postIt($_POST['post_box'], $mysqli);

?>