<?php
	session_start();//session array is created
	
	$uid="chalanaji";
	$_SESSION["user"]=$uid;

	echo "Added to session<br>";

echo $_SESSION["user"];



?>
