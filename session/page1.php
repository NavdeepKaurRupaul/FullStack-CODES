<?php

	session_start();//session array is created


echo "Dashboard welcome :".$_SESSION["user"];



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<p>
	<a href="logout.php">Logout</a>
</p>

</body>
</html>