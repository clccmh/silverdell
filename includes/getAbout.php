<?php
include_once "db_connect.php";

session_start();
$result = $mysqli->query("SELECT Description FROM users where ID = $_SESSION[id]");

while ($row = $result->fetch_row()) {
        printf ("%s\n", $row[0]);
    }
	
?>