<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
<script>
	function doSubmit(x)
	{
		
		var va=document.querySelector("#txtA");
		var vb=document.querySelector("#txtB");
		if(isNaN(va.value)|| isNaN(vb.value))
		{
			document.querySelector("#spn").innerHTML="Invalid Data";
			x.preventDefault();
		}
			
		
	}
	
</script>
</head>

<body>
	<center>
	<h1>using GET</h1>
	<!-- (event) must be used,its an inbuilt object -->
	<span id="spn">*</span>
		<form action="calc-process.php" 
		onSubmit=" doSubmit(event);" method="get">
			<table>
				<tr>
					<td>Enter A:</td>
					<td>
						<input type="text" name="txtA" required title="Fill value" id="txtA"
						oninvalid="this.setCustomValidity('**** value')"
						>
					</td>
				</tr>
				<tr>
					<td>Enter B:</td>
					<td>
						<input type="text" name="txtB" id="txtB" required>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" value="sum" name="btn" >
						<input type="submit" value="multi" name="btn">
					</td>
				</tr>
			</table>
		</form>
		<hr>
		<hr>
		<center>
			<h1>using post</h1>

		<form action="calc-process-2.php" method="post">
			<table>
				<tr>
					<td>Enter A:</td>
					<td>
						<input type="text" name="txtA">
					</td>
				</tr>
				<tr>
					<td>Enter B:</td>
					<td>
						<input type="text" name="txtB">
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" value="sum" name="btn">
						<input type="submit" value="multi" name="btn">
					</td>
				</tr>
			</table>
		</form>
		
		<h1>using BUTTONS WITH DIFF NAME</h1>

		<form action="calc-process-3.php" method="get">
			<table>
				<tr>
					<td>Enter A:</td>
					<td>
						<input type="text" name="txtA">
					</td>
				</tr>
				<tr>
					<td>Enter B:</td>
					<td>
						<input type="text" name="txtB">
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" value="sum" name="nsum">
						<input type="submit" value="multi" name="nmulti">
					</td>
				</tr>
			</table>
		</form>
	</center>
	</center>
</body>

</html>
