<?php
//Service
include_once("mysql-connection.php");

	$uidy=$_GET["uidy"];
$query="select * from profiles where userid='$uidy'";

	$table=mysqli_query($dbcon,$query);//1 or 0 possibility
	$count=mysqli_num_rows($table);
	if($count==0)
		echo "Available";
	else
		echo "Already Occupied";
?>
