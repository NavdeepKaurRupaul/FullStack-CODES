<?php
	include("php_mysql_conn.php");
	$button=$_POST["button"];
	//login
	if($button=="LogIN"){
		$user=$_POST["userid"];
		$password=$_POST["password"];
		$mobnum=$_POST["mobnum"];
		$pic_name=$_FILES["userpic"]["name"];	
		$pic_temp_name=$_FILES["userpic"]["tmp_name"];
		$pic_name=$user."-".$pic_name;
		$query="insert into profiles values('$user','$password','$mobnum','$pic_name')";
		mysqli_query($dbcon,$query);	move_uploaded_file($pic_temp_name,"uploads/".$pic_name);

		$msg=mysqli_error($dbcon);
		if($msg=="")
			echo "Records Saved...";
		else
			echo $msg;
	}
	//delete
	else if($button=="Delete"){
		$uid=$_POST["userid"];
		$query="delete from profiles where userid='$uid'";
		mysqli_query($dbcon,$query);
		$count=mysqli_affected_rows($dbcon);
		if($count==0)
		{
			echo "Invalid id";
		}
		else
			echo $count." Records Deleted";
	}
	//update
	else if($button=="Update"){
		$userid=$_POST["userid"];
		$pwd=$_POST["password"];
		$mobnum=$_POST["mobnum"];
//		echo $mobnum;
		$name=$_FILES["userpic"]["name"];
		$tmp_name=$_FILES["userpic"]["tmp_name"];
		if($pwd!="" and $name!="" and $mobnum!=""){
			$name=$userid."-".$name;
			$query="update profiles set password='$pwd', mob_num='$mobnum', image_path='$name' where userid='$userid'";

			mysqli_query($dbcon,$query);
			//fires the query in database/table
			move_uploaded_file($tmp_name,"uploads/".$name);
			$msg=mysqli_error($dbcon);
			if($msg=="")	{
				$count=mysqli_affected_rows($dbcon);//1 or zero possibility-primary key
				if($count==1)
					echo $count ." Records Updated and profile pic and password both are updated";
				else
					echo "Invalid Id";
			}
			else
				echo $msg;
		}
		else if($pwd!="" and $mobnum!=""){
			$query="update profiles set password='$pwd', mob_num='$mobnum' where userid='$userid'";
			mysqli_query($dbcon,$query);
			//fires the query in database/table
			$msg=mysqli_error($dbcon);
			if($msg=="")	{
				$count=mysqli_affected_rows($dbcon);//1 or zero possibility-primary key
				if($count==1)
					echo $count ." Records Updated"." and Password Updated and MobNum Updated";
				else
					echo "Invalid Id";
			}
			else
				echo $msg;
			}
	}

?>