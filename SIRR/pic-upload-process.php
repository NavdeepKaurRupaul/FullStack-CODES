<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<?php

$uid=$_POST["txtUid"];

$tmpName=$_FILES["ppic"]["tmp_name"];
$orgName=$_FILES["ppic"]["name"];
$size=$_FILES["ppic"]["size"];

echo "User id=".$uid."<br>";
	
	if($orgName=="")
	{
		echo "Pic not Uploaded<br>";
		$full="nopic.png";
	}
	else
	{
		echo "Temp Name=".$tmpName."<br>";
		echo "Original Name=".$orgName."<br>";
		echo "Size=".$size."<br>";
		
		$full=$uid."-".$orgName;
		move_uploaded_file($tmpName,"../uploads/".$full);
		echo "<br>File Uploaded Successfulllyyy....";
		echo "<br>";
	}

?>

<center>
	<img src="uploads/<?php echo $full; ?>" width="200" height="200">
	
</center>



</body>
</html>