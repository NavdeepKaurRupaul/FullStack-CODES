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

	<title>Hello, world!</title>
</head>

<body>
	<center>
		<h2>
			All User Profiles
		</h2>
		<table border="1" width="400" class="table table-striped">
			<tr>
				<th>Uid</th>
				<th>Password</th>
				<th>Date of signup</th>

				<th>Pic</th>
			</tr>
			<?php

include_once("mysql-connection.php");

$query="select * from profiles";

$table=mysqli_query($dbcon,$query);
while($row=mysqli_fetch_array($table))//reading row by row
{
	//print_r($row);
	echo "<tr><td>".$row['uid']."<td>".$row['pwd'];
	echo "<td>".$row['dos'];
	
	?>
			<th>
				<img src="uploads/<?php echo $row['picpath']; ?>" alt="" width="50" height="50">
			</th>

			<?php	
}
?>

		</table>
	</center>

</body>

</html>
