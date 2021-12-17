<?php
	include("php_mysql_conn.php");
//student info
	$fnmae=$_POST["fname"];
	$lnmae=$_POST["lname"];
	$full_name=$fnmae." ".$lnmae;
	$dob=$_POST["dob"];
	$roolno=$_POST["rollno"];
//pic info
	$tmpName=$_FILES["pic"]["tmp_name"];
	$orgName=$_FILES["pic"]["name"];
	$size=$_FILES["pic"]["size"];
	$full=$roolno."-".$fnmae."_".$lnmae."_".$orgName;
	if($orgName==""){
		echo "Pic not Uploaded<br>";
		$full="nopic.png";
	}
	else{
		//uploading pic
		move_uploaded_file($tmpName,"uploads/".$full);
		echo "<br>File Uploaded Successfulllyyy....";
		echo "<br>";
	}
//mysql query
	$query="insert into form values('$roolno','$full_name','$dob','$full')";
	mysqli_query($dbcon,$query);
	$msg=mysqli_error($dbcon);
	if($msg=="")
		echo "Records Saved...";
	else
		echo $msg;
?>