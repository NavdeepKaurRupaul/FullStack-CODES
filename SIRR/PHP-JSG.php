<!--.php=HTML+JS+CSS3+PHP Lang Code
.jsp = 				+java code
.js=                +java script
.aps=               +C#.Net
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<hr>
	<?php
	$x=10;
	$y=20;
	$z=$x+$y;
	echo "Hello Programmers...".$z."<br>";
	echo "<h3><marquee>x=$x y=$y  sum=$z</marquee>";
	echo "<script>alert('Bale Bale');</script>";
	
	?>
	<hr>
	
	<?php
	if($x<=$y)
		echo "Real";
	else
		echo "java";
	?>
	
	<hr>
	Date:
	<select>
		<option value="none">Select</option>
		<?php
			for($i=1;$i<=31;$i++)
			{
				echo "<option value='$i'>$i</option>";
			}
		?>
	</select>
	<hr>
	Date:
	<select>
		<option value="none">Select</option>
		<?php
			for($i=1;$i<=31;$i++)
			{
		?>
			<option value='<?php echo $i;?>'> <?php echo $i;?>  </option>
		<?php
				}
		 ?>
	</select>
	
	<?php
	
	doHi(2,3);
	function doHi($x,$y)
	{
		echo "<h2>x+y=".($x+$y)."</h2>";
	}
	
	?>
	
</body>
</html>












