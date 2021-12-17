<?php
//getting values from array sent  by the client
	$a=$_GET["txtA"];
	$b=$_GET["txtB"];

//ist check the existance of a particular "name"

if(isset($_GET["nsum"])==true)
	$btn=$_GET["nsum"];
else
	if(isset($_GET["nmulti"])==true)
		$btn=$_GET["nmulti"];

	

if($btn=="sum")
{
	$sum=$a+$b;
	echo "Sum=".$sum;
}
else
{
	$multi=$a*$b;
	echo "Multi=".$multi;
}

?>