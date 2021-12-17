<?php
//getting values from array sent  by the client
	$a=$_GET["txtA"];
	$b=$_GET["txtB"];

	$btn=$_GET["btn"];

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