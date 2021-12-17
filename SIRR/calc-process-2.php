<?php
//getting values from array sent  by the client
	$a=$_POST["txtA"];
	$b=$_POST["txtB"];

	$btn=$_POST["btn"];

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