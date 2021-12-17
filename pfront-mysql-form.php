<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="CSS/php-mysql-form.css">
	<script src="js/jquery-1.8.2.min.js">
	</script>
	<script>
		function showpreview(file, strId) {
//			alert("hi");
			if (file.files && file.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
					$(strId).prop('src', e.target.result);
				}
				reader.readAsDataURL(file.files[0]);
			}
		}

	</script>
</head>

<body>
	<center>
		<form action="pprocess-mysql-form.php" method="post" enctype="multipart/form-data">
			<fieldset style="width:50%; height:300px">
				<table>
					<tr>
						<td>
							Student's First Name
						</td>
						<td>
							<input type="text" placeholder="Enter first name here!!" name="fname" required>
						</td>
						<td rowspan="3">
							<img width="150px" height="180px" src="" alt="students pic" style="border:1px solid black" id="showpic">
						</td>
					</tr>
					<tr>
						<td>
							Student's Last Name
						</td>
						<td>
							<input type="text" placeholder="Enter last name here!!" name="lname" required>
						</td>
					</tr>
					<tr>
						<td>
							Student's RollNO
						</td>
						<td>
							<input type="text" placeholder="Enter rollno here!!" name="rollno" required>
						</td>
					</tr>
					<tr>
						<td>
							Student's DOB
						</td>
						<td>
							<input type="date" name="dob" required>
						</td>
					</tr>
					<tr>
						<td>Student's Gender</td>
						<td>
							<input type="radio" name="gen" required>Female
							<input type="radio" name="gen" required>Male
						</td>
						<td>
							<input type="file" accept="image/x-png,image/gif,image/jpeg" name="pic" required onchange="showpreview(this,showpic);">
						</td>
					</tr>
				</table>
			</fieldset>
			<br><br><br><br>
			<input type="submit">
		</form>
	</center>
</body>

</html>
