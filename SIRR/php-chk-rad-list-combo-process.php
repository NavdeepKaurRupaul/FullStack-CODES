<?php

$tech=$_GET["tech"];
if($tech=="Java")
{
	echo "<p>Fee :8200 and Duration:55 Days</p>";
}
else
if($tech=="web")
{
	echo "<p>Fee :15000 and Duration:3-4 Months</p>";
}
//=-=-=-=-=-=-=-=-=-=-=-=-=
$bill=0;
if(isset($_GET["chkBook"])==true)
	$bill=$bill+$_GET["chkBook"];

if(isset($_GET["chkMob"])==true)
	$bill=$bill+$_GET["chkMob"];

if(isset($_GET["chkPen"])==true)
	$bill=$bill+$_GET["chkPen"];

echo "<br><b>Bill=$bill<br></b>";
	
echo "<hr>";	
echo "Selected State=".$_GET["state"];
echo "<hr>";	

$ary=$_GET["cities"];//it returns array

$all="<ol>";
for($i=0;$i<count($ary);$i++)
{
	 $all=$all."<li>".$ary[$i]."</li>";
}
//echo "Selected Cities=".$selCities;

//print_r($ary);//used for array sply.
$all=$all."</ol>";
echo $all;

echo "<hr>";	


?>














