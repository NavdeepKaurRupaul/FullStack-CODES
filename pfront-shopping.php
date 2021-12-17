<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Shopping</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="CSS/php_shopping.css">
</head>

<body>
	<center>
		<form action="phpprocess-shopping.php" method="post">
			<div class="container">
				<div class="heading">Shopping App</div>
				<table>
					<tr>
						<!--MOBILE-->
						<td><i class="fa fa-mobile" aria-hidden="true"></i> &nbsp;Mobile</td>
						<td colspan="2"><input type="text" name="txtmob" placeholder="Enter Mobile price" autofocus required></td>
					</tr>
					<tr>
						<!--BOOK-->
						<td><i class="fa fa-book" aria-hidden="true"></i> &nbsp;Book</td>
						<td colspan="2"><input type="text" name="txtbook" placeholder="Enter Book price" required></td>
					</tr>
					<tr>
						<!--LAPTOP-->
						<td><i class="fa fa-laptop" aria-hidden="true"></i> &nbsp;Laptop</td>
						<td colspan="2"><input type="text" name="txtlap" required placeholder="Enter Laptop price"></td>
					</tr>
				</table>
				<!--TOTAL-->
				<input type="submit" value="Total" title="Click for Total Bill" name="findtotal">
				<!--DISCOUNT-->
				<input type="submit" value="Discount%" title="Click for Discount" name="finddis">
				<!--NET_BILL-->
				<input type="submit" value="Net Bill" title="Click for Total Bill after Discount" name="findnet">
			</div>
		</form>
	</center>
	
</body>

</html>
