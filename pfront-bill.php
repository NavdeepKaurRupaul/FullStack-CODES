<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="CSS/php_bill.css">
</head>

<body>

</body>
<div class="bg" style="background-image: linear-gradient(to right,#fc6666 0%, #ffbf49 25%, #f7f76e 50%, #7cff7c 75%, #4f4fff 100%);">
	<center>
		<form action="process-bill.php">
			<div class="inner">
				<div class="EB">E l e c t r i c i t y &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B i l l</div>
				<table>
					<tr>
						<td colspan="2">Units Consumed <input type="text" required name=units autofocus></td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="radio" name="billtype" value="comm"> Commericial
							<input type="radio" name="billtype" value="res"> Residential
						</td>
					</tr>
					<tr>
						<td>
							<select name="item[]" id="" class="fa" multiple size="1">
								<option value="">
									Select Item
								</option>
								<option value="" disabled></option>
								<option value="fa-asterisk">
									&#xf069; Fan
								</option>
								<option value="fa fa-television">
									&#xf26c; TV
								</option>
								<option value="fa fa-free-code-camp">
									&#xf2c5; Heater
								</option>
								<option value="fa fa-snowflake-o">
									&#xf2dc;
									AC
								</option>
							</select>
						</td>
						<td>
							<div id="text">Area Size</div>
							<input type="radio" value="less100" name="area"> less than 100
							<br>
							<input type="radio" value="more100" name="area"> more than 100 and less than 200
							<br>
							<input type="radio" value="more" name="area">
							more than 200
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="submit" value="Fetch Bill" title="Click to know the total bill">
						</td>
					</tr>
				</table>
			</div>
		</form>
	</center>
</div>

</html>
