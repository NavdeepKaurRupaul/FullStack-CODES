<?php
	session_start();//session array is created

echo "Profile :".$_SESSION["user"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<input type="text" value='<?php echo $_SESSION["user"];?>' readonly>
<p>
	<a href="logout.php">Logout</a>
</p>
	
</body>
</html>