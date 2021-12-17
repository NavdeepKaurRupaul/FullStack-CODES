<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Optional JavaScript; choose one of the two! -->
	<script src="js/jquery-1.8.2.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<title></title>
</head>

<body>
	<center>
		<h2>
			All User Profiles
		</h2>
		<table border="1" width="400" class="table table-striped">
			<tr>
				<th>UserId</th>
				<th>Password</th>
				<th>MobNum</th>
				<th>Pic</th>
			</tr>
			<?php
include_once("php_mysql_conn.php");
$query="select * from profiles";
$table=mysqli_query($dbcon,$query);
while($row=mysqli_fetch_array($table))//reading row by row
{
	//print_r($row);
	echo "<tr><td>".$row['userid']."<td>".$row['password'];
	echo "<td>".$row['mob_num'];
	?>
			<th>
				<img src="uploads/<?php echo $row['image_path']; ?>" alt="" width="50" height="50">
			</th>

			<?php	
}
?>
		</table>
	</center>

</body>

</html>
