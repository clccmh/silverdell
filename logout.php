<?php
session_start();
session_destroy();
echo'
			<meta http-equiv="refresh" content="0; url=index.html" />
			If you are not redirected automatically, follow the <a href="index.html">link back to logout</a>
	';

?>