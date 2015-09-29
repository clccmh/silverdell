<?php
include_once "db_connect.php";

session_start();
$result = $mysqli->query("SELECT text FROM txt_posts where user_id = $_SESSION[id]");
if($result){
	while ($row = $result->fetch_row()) {
			echo('
			<br>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">');
					$nameResult = $mysqli->query("SELECT user FROM txt_posts where user_id = $_SESSION[id]");
					if($nameResult){
						$nameRow = $nameResult->fetch_row();
						printf("%s", $nameRow[0]);
					}
					echo('
					</h3>
					</div>
					<div class="panel-body">
			');
			printf ("%s\n", $row[0]);
			echo('
				</div>
			</div>
			');
    }
}else{
	echo($mysqli->error);
}
?>