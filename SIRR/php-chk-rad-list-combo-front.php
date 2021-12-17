<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
	<form action="php-chk-rad-list-combo-process.php">
		Get Details:
		<input type="radio" name="tech" value="Java">Java
		<input type="radio" name="tech" value="web">Full Stack+MERN
		
		<hr>
		Items: <br>
		<input type="checkbox" name="chkBook" value="500">Books
		<input type="checkbox" name="chkMob" value="18000">Mobile
		<input type="checkbox" name="chkPen" value="10">Pen
		
		<br><br>
		Select State:<br>
		<select name="state">
			<option value="Punjab">Punjab</option>
			<option value="Himachal">Himachal</option>
			<option value="Haryana">Haryana</option>
			
		</select>
		<br><br>
		<br><br>
		Select Cities:<br>
		<select name="cities[]" multiple>
			<option value="Bathinda">Bathinda</option>
			<option value="Amritsar">Amritsar</option>
			<option value="Delhi">Delhi</option>
	<option value="Chandigarh">Chandigarh</option>
		</select>
		<br><br>
		<input type="submit" value="Fetch Details">
		</form>
		
		
	</center>
</body>
</html>