<?php
//Service
include_once("php_mysql_conn.php");
	$uidy=$_GET["uid"];
	$query="select * from profiles where id='$uid'";
	$table=mysqli_query($dbcon,$query);//1 or 0 possibility
	$ary=array();//creation of empty array
	while($row=mysqli_fetch_array($table))
	{
		$ary[]=$row;//storing row in array
	}
	echo json_encode($ary);//gives us JSON format
?>